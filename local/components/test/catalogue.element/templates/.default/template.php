<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>


<?php
    //Если выводимых товаров больше
    if($_GET['SHOWALL_1'] == 1 || $arResult['ELEMENTS_ON_PAGE'] > count($arResult['PRODUCT']))
        $arResult['ELEMENTS_ON_PAGE'] = count($arResult['PRODUCT']);
?>


<div class="container py-5 ">
    <div class="row ">
        <div class="">
            <div class="row">

                <?php for($j = 0; $j < $arResult['ELEMENTS_ON_PAGE']; $j++) : ?>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="<?= $arResult['PRODUCT'][$j]['DETAIL_PICTURE']; ?>">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none">"<?= $arResult['PRODUCT'][$j]['NAME'];?>"</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <a href="shop-single.html" class="h3 text-decoration-none">"<?= $arResult['PRODUCT'][$j]['PROPERTY_SIZE_VALUE'];?>"</a>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <ul class="list-unstyled d-flex justify-content-center mb-1">
                                <li>
                                    <?php for($i = 0; $i < $arResult['PRODUCT'][$j]['PROPERTY_RATE_VALUE']; $i++): ?>
                                        <i class="text-warning fa fa-star"></i>
                                    <?php endfor; ?>
                                    <?php for($i = 0; $i < (5 -$arResult['PRODUCT'][$j]['PROPERTY_RATE_VALUE']); $i++): ?>
                                        <i class="text-muted fa fa-star"></i>
                                    <?php endfor; ?>

                                </li>
                            </ul>
                            <p class="text-center mb-0">$<?= $arResult['PRODUCT'][$j]['CATALOG_PRICE_1'];?></p>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
    <?php echo $arResult["NAV_STRING"]?>
</div>
