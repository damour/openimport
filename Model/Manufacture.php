<?php

class Manufacture extends Model {

    public static $_id_column = 'manufacturer_id';
    public static $_table = 'manufacturer';

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

    /**
     * Добавляет производителя
     *
     * @param $name
     * @return int
     */
    private function add($name)
    {
        $manufacture = Model::factory('Manufacture')->create();
        $manufacture->name = $name;
        $manufacture->image = "";
        $manufacture->sort_order = 0;

        $manufacture->save();

        return $manufacture->manufacturer_id;
    }

    /**
     * Возвращает id производителя. Если не существует, то создает.
     *
     * @param $name
     * @return int
     */
    public function getId($name)
    {
        $manufacture = Model::factory('Manufacture')
            ->where_equal('name', $name)
            ->find_one();

        if ($manufacture) {
            return $manufacture->manufacturer_id;
        }

        return $this->add($name);
    }
}