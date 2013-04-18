<?php
require_once "../vendor/autoload.php";
require_once "config.php";

use Client\Parfumstore;

try {

    $store = new Parfumstore();

    // парсим список брендов в разделе "ЖЕНСКАЯ ПАРФЮМЕРИЯ"
    $brands = $store->getWoomanBrands();

    // проходимся по страницам и собираем ссылки на товар
    $brand_url = 'http://parfumstore.ru/perfumery/man/hugo-boss/';
    //$items = $store->getItems($brand_url);

    $item = $store->parse_item('http://parfumstore.ru/products/cacharel-noa-deodorant-cream-50ml.html');

    //Product::getInstance()->add();

    print_r($item);
    // парсим страницу товара
    // добавляем товар
    //$manufacture_id =  Manufacture::getInstance()->getId('Diesel3');

    //echo $manufacture_id;

} catch (Exception $e) {
    echo $e->getMessage();
}

