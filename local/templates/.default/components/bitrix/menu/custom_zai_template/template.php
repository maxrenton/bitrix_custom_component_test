<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)):?>

    <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
        <div class="flex-fill">
            <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                <?php
                    $previousLevel = 0;
                    foreach($arResult as $arItem):?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a>
                    </li>
                <?php endforeach?>
            </ul>
        </div>
    </div>

    <?php if ($previousLevel > 1)://close last item tags?>
	    <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
    <?php endif?>

<div class="menu-clear-left"></div>
<?php endif?>


