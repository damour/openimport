<?php
require_once "../vendor/autoload.php";
require_once "config.php";

use Goutte\Client;

try {

   /* $user = Model::factory('Product')->find_one(68);
    echo $user->model;*/

    /*$user = ORM::for_table('product')
        ->where_equal('product_id', 68)
        ->find_one();

    echo $user->model;*/


    /*
     * Создаем категорию
     */
    $parent_id = 60;
    //создаем категорию
    $category_id =  Category::getInstance()->add($parent_id);
    //добавляем название
    CategoryDescription::getInstance()->add($category_id, "Test");
    //ставим соотвествие с магазином
    CategoryStore::getInstance()->add($category_id);

    /*
     * добавляем товар
     */
    $product_name = 'Тестовый товар';

    $product_id = Product::getInstance()->add($product_name);
    //название
    ProductDescription::getInstance()->add($product_id, $product_name);
    //добавляем товар в категорию
    ProductCategory::getInstance()->add($product_id, $category_id);
    //ставим соответсвие с магазином
    ProductStore::getInstance()->add($product_id);


} catch (Exception $e) {
    echo $e->getMessage();
}

//$client = new Client();

//$crawler = $client->request('GET', 'http://www.symfony-project.org/');