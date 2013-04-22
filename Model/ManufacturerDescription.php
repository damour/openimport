<?php

class ManufacturerDescription extends Model {

    public static $_table = 'manufacturer_description';

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
        $languages = array(1, 3);

        foreach ($languages as $language_id) {
            $product = Model::factory('ManufacturerDescription')->create();
            $product->manufacturer_id = $manufacturer_id;
            $product->language_id = $language_id;
            $product->description = "";
            $product->meta_description = "";
            $product->meta_keyword = "";
            $product->meta_keyword = "";
            $product->seo_title = "";
            $product->seo_h1 = "";

            $product->save();
        }

    }
}