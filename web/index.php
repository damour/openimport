<?php
require_once "../vendor/autoload.php";
require_once "config.php";

use Client\Parfumstore;

try {

    // парсим список брендов в разделе "для женщин"
    // проходимся по страницам и собираем ссылки на товар
    // парсим страницу товара
    // добавляем товар
    $manufacture_id =  Manufacture::getInstance()->getId('Diesel3');

    echo $manufacture_id;

    $store = new Parfumstore();
    echo $store->getPage();


} catch (Exception $e) {
    echo $e->getMessage();
}

