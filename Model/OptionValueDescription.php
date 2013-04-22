<?php

class OptionValueDescription extends Model {

    public static $_table = 'option_value_description';

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

    public function getId($name)
    {
        $manufacture = Model::factory('OptionValueDescription')
            ->where_equal('name', $name)
            ->find_one();

        if ($manufacture) {
            return $manufacture->option_value_id;
        } else {
            // по умолчание возвращаем обьем 100мл
            return 52;
        }


    }
}