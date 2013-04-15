<?php

class ProductStore extends Model {

    public static $_table = 'product_to_store';

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

    public function add($product_id)
    {
        $category = Model::factory('ProductStore')->create();
        $category->product_id = $product_id;
        $category->store_id = 0;

        $category->save();
    }

}