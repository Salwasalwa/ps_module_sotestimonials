<?php
class ListTestimonails extends ObjectModel
{
    public $id_sotestimoniales;
    public $nam;
    public $descpt;

    public static $definition = array(
        'table' => 'sotestimoniales',
        'primary' => 'id_sotestimoniales',
        'fields' => array(
            'nam' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
            'descpt' => array('type' => self::TYPE_STRING, 'validate' => 'isString')
        ),
    );
}
