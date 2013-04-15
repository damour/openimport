<?php

class ProductDescription extends Model {

    public static $_table = 'product_description';

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

    public function add($product_id, $name)
    {
        $category = Model::factory('ProductDescription')->create();
        $category->product_id = $product_id;
        $category->language_id = 1;
        $category->name = $name;
        $category->description = '';
        $category->meta_description = '';
        $category->meta_keyword = '';
        $category->seo_title = '';
        $category->seo_h1 = '';

        $category->save();
    }

}