<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

//Проверяем на наличие модуля инфоблока
if (!CModule::IncludeModule("iblock"))
    die();


//Список инфоблоков по порядку и фильтру
$arIBlockType = CIBlockParameters::GetIBlockTypes();

$arIBlock = array();
$dbIBlock = CIBlock::GetList(array("sort" => "asc"), array("TYPE" => $arCurrentValues["IBLOCK_TYPE"], "ACTIVE" => "Y"));
while ($arr = $dbIBlock->Fetch()) {
    $arIBlock[$arr["ID"]] = "[" . $arr["ID"] . "] " . $arr["NAME"];
}

//Массив с входными параметрами элемента
$arComponentParameters = [
    "PARAMETERS" => [
        "IBLOCK_TYPE" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("IBLOCK_TYPE"),
            "TYPE" => "LIST",
            "VALUES" => $arIBlockType,
            "REFRESH" => "Y",
        ),
        "IBLOCK_ID" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("IBLOCK_ID"),
            "TYPE" => "LIST",
            "VALUES" => $arIBlock,
            "REFRESH" => "Y",
        ),
        "ELEMENTS_ON_PAGE" => array(
            "NAME" => GetMessage("IBLOCK_ELEMENTS_ON_PAGE"),
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
        ),
        "CACHE_TIME" => array("DEFAULT" => 36000000)
    ]
];
