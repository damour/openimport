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

    public function add($parent_id = 1)
    {
        $category = Model::factory('Category')->create();
        $category->image = "";
        $category->parent_id = $parent_id;
        $category->top = 0;
        $category->column = 0;
        $category->sort_order = 0;
        $category->status = 1;
        $category->set_expr('date_added', 'NOW()');
        $category->set_expr('date_modified', 'NOW()');

        $category->save();

        return $category->category_id;
    }

    public function create($name, $parent_id = 1)
    {
        //создаем категорию
        $category_id =  Category::getInstance()->add($parent_id);
        //добавляем название
        CategoryDescription::getInstance()->add($category_id, $name);
        //ставим соотвествие с магазином
        CategoryStore::getInstance()->add($category_id);

        return $category_id;
    }

    public function getId($name)
    {
        $category = Model::factory('CategoryDescription')
            ->where_equal('name', $name)
            ->find_one();

        if ($category) {
            return $category->category_id;
        }

        return $this->add($name);
    }
}