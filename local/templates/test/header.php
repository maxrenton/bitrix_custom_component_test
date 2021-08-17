<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php use Bitrix\Main\Page\Asset; ?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?echo LANG_CHARSET;?>">
    <?php $APPLICATION->ShowMeta("keywords"); ?>
    <?php $APPLICATION->ShowMeta("description"); ?>
    <title>
        <?php $APPLICATION->ShowTitle()?>
    </title>
    <?php $APPLICATION->ShowHead(); ?>

    <?php
        Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
        Asset::getInstance()->addString(' <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/fontawesome.min.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/custom.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/templatemo.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-1.11.0.min.js");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-migrate-1.2.1.min.js");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.bundle.min.js");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/templatemo.js");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/custom.js");
    ?>

    <link rel="apple-touch-icon" href="img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">


</head>
<body>
    <?php $APPLICATION->ShowPanel();?>

    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:admin@bitrix.test">admin@bitrix.test</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:14-88-667">14-88-667</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <!--    Menu  -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">


<!--            Left text-->
    <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
        Zay
    </a>



            <?php $APPLICATION->IncludeComponent("bitrix:menu", "custom_zai_template", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "main",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "main",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"COMPONENT_TEMPLATE" => "horizontal_multilevel",
		"MENU_THEME" => "site"
	),
	false
);?>
        </div>
    </nav>


