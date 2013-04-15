<?php

class ProductCategory extends Model {

    public static $_table = 'product_to_category';

    protected static $_instance;

    public static function getInstance() {
        // проверяем актуальность экземпляра
        if (null === self::$_instance) {
            // создаем новый экземпляр
            self::$_instance = new self();
        }
        // возвращаем созданный или существующий экземпляр
        return self::$_instance;
    }

    public function add($product_id, $category_id)
    {
        $category = Model::factory('ProductCategory')->create();
        $category->product_id = $product_id;
        $category->category_id = $category_id;
        $category->main_category = $category_id;

        $category->save();
    }

}