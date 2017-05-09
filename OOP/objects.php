
<?php

class dog
{
    public $name = null;
    public $breed = null;
    public $color = null;
    public $position = 'lying down';

    public function bark()
    {
        echo 'WOOF!';
    }

    public function sit()
    {
        $this->position = 'sitting';
    }
}


$my_dog = new dog();

$your_dog = new dog();

$your_dog->position;

$your_dog->bark();

class car
{
    public $make = null;
    public $model = null;
    public $type = null;
    public $position = 'parked';

    public function honk()
    {
        echo 'BEEP';
    }

    public function start()
    {
        $this->position = 'drive';
    }

    public function park()
    {
        $this->position = 'park';
    }
}


class car {
    public function setData($bran, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }
}