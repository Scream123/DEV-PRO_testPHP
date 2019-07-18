<?php
namespace liw\app\interfaces;

interface Vehicle{
    public function Moving($forward, $backward, $leftTurn, $rightTurn);
    public function addPerson();

    public function Speed($speed);
}