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

    public function add($first_image, $manufacturer_id, $price, $video)
    {
        $product = Model::factory('Product')->create();
        $product->model = '';
        $product->sku = "";
        $product->upc = "";
        $product->location = "";
        $product->quantity = 1;
        $product->stock_status_id = 1;
        $product->image = $first_image;
        $product->manufacturer_id = $manufacturer_id;
        $product->shipping = 1;
        $product->price = $price;
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
        $product->video = $video;
        $product->set_expr('date_added', 'NOW()');
        $product->set_expr('date_modified', 'NOW()');
        $product->viewed = 0;

        $product->save();

        return $product->product_id;
    }

    public function create($product_name, $category_id, $images, $manufacturer_id, $price, $video)
    {
        // todo $first_image
        $product_id = Product::getInstance()->add($first_image, $manufacturer_id, $price, $video);
        //название
        ProductDescription::getInstance()->add($product_id, $product_name);
        //добавляем товар в категорию
        ProductCategory::getInstance()->add($product_id, $category_id);
        //ставим соответсвие с магазином
        ProductStore::getInstance()->add($product_id);
        // todo добавляем картинки
        // todo добавляем похожие товары

    }

}
