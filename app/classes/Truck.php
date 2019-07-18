<?php
namespace liw\app\classes;
use liw\app\interfaces\Human;

use liw\app\interfaces\Vehicle;
class Truck implements Vehicle
{
    public static $vehicle = 'truck';
    public static $driver = 0;
    public static $passenger = 0;
    public static $trafficLight = '';
    public static  $barrier= '';
    public  static $forward=0, $backward=0, $leftTurn=0, $rightTurn=0;

    public function Role($stats)
    {

        switch ($stats){

            case 'driver':
                return   self::$role = 'driver';
            case 'passenger':
                return  'Person is ' . self::$role = 'passenger' . '<br/>';

            default:
                echo 'Wrong Enter!';

        }
        //throw new Exception('Wrong Enter!');


    }


    public function Moving($forward, $backward, $leftTurn, $rightTurn)
    {

        if ($this->addPerson(1,0) || $this->addPerson(1,1) && self::$barrier = 'left'){

            return self::$forward=1; self::$backward=1; self::$leftTurn; self::$rightTurn=1;

        }elseif ($this->addPerson(1,0) || $this->addPerson(1,1) && self::$barrier = 'right'){
            return self::$forward=1; self::$backward=1; self::$leftTurn=0; self::$rightTurn=0;

        }elseif ($this->addPerson(1,0) || $this->addPerson(1,1) && self::$barrier = 'back'){
            return self::$forward=1; self::$backward; self::$leftTurn=1; self::$rightTurn=1;

        }elseif ($this->addPerson(1,0) || $this->addPerson(1,1) && self::$barrier = '$forward'){
            return self::$forward; self::$backward=1; self::$leftTurn=1; self::$rightTurn=1;

        }else{
            return self::$forward; self::$backward; self::$leftTurn; self::$rightTurn;

        }

    }

    public function addPerson()
    {
        switch (Car::$role){
            case 'driver':

                return  'Add ' .self::$driver = 'driver';


            case 'passenger':

                return 'Add ' .self::$passenger = 'passenger';

        }
        // throw new Exception('Car is empty!');




    }

    public function Speed($trafficLight)
    {
        if (self::$driver == 'driver' and $trafficLight == 'green'){
            echo  'speed = '. $speed = rand(60,180) . '<br/>';
        }
        elseif(self::$driver = '' or $trafficLight == 'red'){
            echo  'speed = '. $speed = 0 . '<br/>';
        }else{
            echo  'wrong enter!<br/>';

        }

    }

}