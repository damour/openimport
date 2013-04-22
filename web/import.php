<?php
require_once "../vendor/autoload.php";
require_once "config.php";

use Client\Parfumstore;

try {

    $store = new Parfumstore();

    // парсим список брендов в разделе "ЖЕНСКАЯ ПАРФЮМЕРИЯ"
    $brands = $store->getWoomanBrands();

    // проходимся по страницам и собираем ссылки на товар
    $brand_url = 'http://parfumstore.ru/perfumery/woman/cacharel/';

    $item['manufacture'] = 'CACHAREL';

    $items = $store->getItems($brand_url);

    foreach ($items as $item_url) {
        // парсим страницу товара
        $item = $store->parse_item($item_url);

        // добавляем товар
        Product::getInstance()->create($item);
    }

} catch (Exception $e) {
    echo $e->getMessage();
}