<?php

class Product extends Model {

    public static $_id_column = 'product_id';

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

    public function add($name)
    {
        $product = Model::factory('Product')->create();
        $product->model = '';
        $product->sku = "";
        $product->upc = "";
        $product->location = "";
        $product->quantity = 1;
        $product->stock_status_id = 1;
        $product->image = "";
        $product->manufacturer_id = 1;
        $product->shipping = 1;
        $product->price = 1;
        $product->points = 1;
        $product->tax_class_id = 1;
        $product->date_available = '2013-04-04';
        $product->weight = 0;
        $product->weight_class_id = 0;
        $product->length = 0;
        $product->width = 0;
        $product->height = 0;
        $product->length_class_id = 0;
        $product->subtract = 0;
        $product->minimum = 0;
        $product->sort_order = 0;
        $product->status = 1;
        $product->set_expr('date_added', 'NOW()');
        $product->set_expr('date_modified', 'NOW()');
        $product->viewed = 0;

        $product->save();

        return $product->product_id;
    }

}
