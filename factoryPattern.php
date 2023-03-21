<?php
class FactoryPattern
{
    public static function factory()
    {
        echo 'Some thing else';
    }
}

$Obj = FactoryPattern::factory();

interface Cars
{
    function getModel();

    function getWheel();

    function hasSunRoof();
}

class CarModels implements Cars
{
    protected $model = 's';
    protected $wheel = 'sports';
    protected $sunRoof = true;

    public function getModel()
    {
        return $this->model;
    }

    public function getWheel()
    {
        return $this->wheel;
    }

    public function hasSunRoof()
    {
        return $this->sunRoof;
    }
}

class CarModelR implements Cars
{
    protected $model = 'r';
    protected $wheel = 'regular';
    protected $sunRoof = false;

    public function getModel()
    {
        return $this->model;
    }

    public function getWheel()
    {
        return $this->wheel;
    }

    public function hasSunRoof()
    {
        return $this->sunRoof;
    }
}

$object = new CarModels();
echo $object->getWheel();
