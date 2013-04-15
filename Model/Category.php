<?php

class Category extends Model {

    public static $_id_column = 'category_id';

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

    public function add($parent = 1)
    {
        $category = Model::factory('Category')->create();
        $category->image = "";
        $category->parent_id = $parent;
        $category->top = 0;
        $category->column = 0;
        $category->sort_order = 0;
        $category->status = 1;
        $category->set_expr('date_added', 'NOW()');
        $category->set_expr('date_modified', 'NOW()');

        $category->save();

        return $category->category_id;
    }
}