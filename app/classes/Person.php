<?php
namespace liw\app\classes;
use liw\app\interfaces\Human;

class Person implements Human
{
    public static $role = '';


    public function Role($stats)
    {

        switch ($stats){

            case 'driver':
                return   self::$role = 'driver';
            case 'passenger':
                return  'Person is ' . self::$role = 'passenger' . '<br/>';

        }
       // throw new Exception('Nobody');


    }

}