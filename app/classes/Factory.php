<?php
namespace liw\app\classes;
abstract class Factory
{

    public static function  createVehicle()
    {


        switch (Config::$factory) {
            case 'car':
                echo  'create car!';
                return  new Car();

            case 'truck':
                echo  'create truck!';
                return  new Truck();

            case 'motorcycle':
                echo  'create motorcycle!';
              return new Motorcycle();

            case 'bicycle':
                echo  'create bicycle!';
                return new Bicycle();

            default:
                throw new Exception('Bad config');
        }

    }





    public  static function countArray($arr)
    {
        $count = 0;

        foreach ($arr as $value) {


            if (isset($arr ['c']) ==  new Car()) {
                $count++;
            }
        }
       return 'all elements in arrays: '. $count. '<br/>';


    }


}