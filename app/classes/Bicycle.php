<?php
namespace liw\app\classes;
use liw\app\interfaces\Human;

use liw\app\interfaces\Vehicle;

class Bicycle implements Vehicle
{
    public static $vehicle = 'bicycle';
    public static $driver = 0;
    public static $passenger = 0;
    public static $trafficLight = '';
    public static  $barrier= '';
    public  static $forward='', $backward='', $leftTurn='', $rightTurn='';

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

        return ' and go to '. self::$forward='forward'; self::$backward='backward'; self::$leftTurn; self::$rightTurn='rightTurn';

    }elseif ($this->addPerson(1,0) || $this->addPerson(1,1) && self::$barrier = 'right'){
        return ' and go to '. self::$forward='$forward'; self::$backward='backward'; self::$leftTurn=0; self::$rightTurn;

    }elseif ($this->addPerson(1,0) || $this->addPerson(1,1) && self::$barrier = 'back'){
        return 'go to '. self::$forward=1; self::$backward; self::$leftTurn='leftTurn'; self::$rightTurn='rightTurn';

    }elseif ($this->addPerson(1,0) || $this->addPerson(1,1) && self::$barrier = 'forward'){
        return ' and go to '. self::$forward; self::$backward=1; self::$leftTurn=1; self::$rightTurn='rightTurn';

    }else{
        return ' and stop '. self::$forward; self::$backward; self::$leftTurn; self::$rightTurn;

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