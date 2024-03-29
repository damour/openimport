<?php

use Symfony\Component\Yaml\Yaml;

class ProductImage extends Model {

    public static $_table = 'product_image';
    public static $_id_column = 'product_image_id';

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

    public function add($product_id, $url)
    {
        $path = pathinfo($url, PATHINFO_BASENAME);

        $image_path = Yaml::parse($_SERVER['DOCUMENT_ROOT'].'/config.yml')['image_path'];

        file_put_contents($image_path.$path, file_get_contents($url));

        $image = Model::factory('ProductImage')->create();
        $image->product_id = $product_id;
        $image->image = 'data/'.$path;
        $image->sort_order = 0;

        $image->save();
    }

}