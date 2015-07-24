<?php

class Automobile
{
    public $make;
    public $model;
    public $color;

    public function honk ()
    {
        retun 'BEEP BEEP';
    }

    public function accelerate ()
    {
        return $this->increaseFuelAirMixture();
    }

    public function increaseFuelAirMixture ()
    {
        // api to fuel injectors
    }
    public function brake ($message)
    {
        echo 'Hey Buddy!' . $message . PHP_EOL;
        // engages brakes and brings car to a screeching halt.
    }

}

$newCar = new Automobile();

$newCar->color = 'salmon';
$newCar->make = "Tesla"
$newCar->model = "Model S"
$newCar->brake("You're mother's a classy lady!");
$newCar->honk();

var_dump($newCar);
?>