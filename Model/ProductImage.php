<?php

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

    public function add($product_id, $path)
    {
        $path =  pathinfo($item['img'], PATHINFO_BASENAME);

        file_put_contents('/var/www/cap/domimoda.com/shared/upload/items/'.$path, file_get_contents($item['img']));

        $image = Model::factory('ProductImage')->create();
        $image->product_id = $product_id;
        $image->image = $path;
        $image->sort_order = 0;

        $image->save();
    }

}