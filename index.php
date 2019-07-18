<?php
use  liw\app\classes\Car;
use liw\app\classes\Truck;
use  liw\app\classes\Motorcycle;
use liw\app\classes\Bicycle;
use liw\app\classes\Person;
use liw\app\classes\Factory;
use liw\app\classes\Config;
/**
 * Единая ирчка входа приложения
 */

//Влючает все ошибки на єкран
error_reporting(E_ALL);
ini_set('display_errors',1);

require  __DIR__ .'/vendor/autoload.php';





$arrayobj = [
    'c' => new Car(),
    't' => new Truck(),
    'm' => new Motorcycle(),
    'b' => new Bicycle(),
   'p' => new Person()
];


 echo  Factory::countArray($arrayobj);
$car = new Car();
$car->Role('driver');
 $car->addPerson();

echo  $car->Speed('green');
Config::$factory = 'truck';
Factory::createVehicle();