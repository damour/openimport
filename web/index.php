<?php
mb_internal_encoding("UTF-8");

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

    // парсим страницу товара
    $item = $store->parse_item('http://parfumstore.ru/products/lanvin-eclat-d-arpege-edp-50ml.html');

    $item['manufacture'] = 'CHRISTIAN DIOR';

    // добавляем товар
    Product::getInstance()->create($item);

    print_r($item);

} catch (Exception $e) {
    echo $e->getMessage();
}