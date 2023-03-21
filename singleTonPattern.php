<?php

class Car
{
    private $numberPlate;
    function __construct()
    {
        $this->numberPlate = "G " . mt_rand(1, 1000);
    }
    function honk()
    {
        echo "Pip Pip. The Numberplate is {$this->numberPlate} \n.<br />";
    }
}

class RentACar
{
    static $obj;

    public static function getCar()
    {
        /* Don't create a new Car if it's already available */
        if (!self::$obj) {
            self::$obj = new Car();
        }
        return self::$obj;
    }
}

class Passanger1
{
    function ride()
    {
        echo "I am Passanger 1. \n";
        $myCar = RentACar::getCar();
        $myCar->honk();
    }
}

class Passanger2
{
    function ride()
    {
        echo "I am Passanger 2. \n";
        $myCar = RentACar::getCar();
        $myCar->honk();
    }
}

$p1 = new Passanger1();
$p1->ride();

$p2 = new Passanger2();
$p2->ride();
