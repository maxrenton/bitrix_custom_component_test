<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Shop");
$APPLICATION->SetPageProperty("title", "Shop");
$APPLICATION->SetPageProperty("keywords", "Shop");
$APPLICATION->SetPageProperty("description", "Shop");
$APPLICATION->SetTitle("Shop");
?><?$APPLICATION->IncludeComponent(
	"test:catalogue.element", 
	".default", 
	array(
		"ELEMENTS_ON_PAGE" => "8",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "catalog",
		"COMPONENT_TEMPLATE" => ".default",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>