<?php

class ManufacturerStore extends Model {

    public static $_table = 'manufacturer_to_store';

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

    public function add($manufacturer_id)
    {
        $category = Model::factory('ManufacturerStore')->create();
        $category->manufacturer_id = $manufacturer_id;
        $category->store_id = 0;

        $category->save();
    }

}