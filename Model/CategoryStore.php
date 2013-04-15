<?php

class CategoryStore extends Model {

    public static $_table = 'category_to_store';

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

    public function add($category_id)
    {
        $category = Model::factory('CategoryStore')->create();
        $category->category_id = $category_id;
        $category->store_id = 0;

        $category->save();
    }

}