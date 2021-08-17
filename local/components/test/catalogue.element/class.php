<?php

use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();



class CatalogComponent extends CBitrixComponent {

    public function onIncludeComponentLang()
    {
        Loc::loadMessages(__FILE__);
    }

    protected function checkModules()
    {
        if (!Loader::includeModule('iblock') || !Loader::includeModule('catalog')) {
            ShowError(Loc::getMessage('MODULE_IS_NOT_INSTALLED'));
            return false;
        }
        return true;
    }

    public function onPrepareComponentParams($arParams)
    {
        if ($arParams['IBLOCK_ID'] == '') {
            ShowError(Loc::getMessage('IBLOCK_ERROR'));
            return false;
        }
        return $arParams;
    }


    public function executeComponent()
    {
        $arNavParams = ["nPageSize" => $this->arParams['ELEMENTS_ON_PAGE']];
        $arNavigation = CDBResult::GetNavParams($arNavParams);

        if (!$this->checkModules()) {
            return;
        }

        if($this->startResultCache(false, $arNavigation)) {
            $this->arResult['ELEMENTS_ON_PAGE'] = $this->arParams['ELEMENTS_ON_PAGE'];

            $sort = [];
            $arSelect = [
                "ID",
                "IBLOCK_ID",
                "NAME",
                "DETAIL_PICTURE",
                "DETAIL_PAGE_URL",
                "DETAIL_TEXT",
                "PROPERTY_SIZE",
                "PROPERTY_RATE",
                //Вывод базовой цены с id=1 для товара
                "CATALOG_PRICE_1"
            ];

            $filter = [
                'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
            ];

            $this->arResult['PRODUCT'] = [];

            $rsQuery = CIBlockElement::GetList($sort, $filter, false, $arNavParams, $arSelect);

            while ($ar = $rsQuery->Fetch()) {
                $ar['DETAIL_PICTURE'] = $ar['DETAIL_PICTURE'] ? CFile::GetPath($ar['DETAIL_PICTURE']) : '';
                $this->arResult['PRODUCT'][] = $ar;
            }

            $this->arResult['NAV_STRING'] = $rsQuery->GetPageNavString("Товары с ");

            // Какие поля arResult кэшируем
            $this->setResultCacheKeys(array(
                "ID",
                "IBLOCK_ID",
                "NAME",
                "DETAIL_PICTURE",
                "DETAIL_PAGE_URL",
                "DETAIL_TEXT",
                "PROPERTY_SIZE",
                "PROPERTY_RATE",
            ));
            $this->includeComponentTemplate();
        } else {
            $this->abortResultCache();
        }
    }
}

