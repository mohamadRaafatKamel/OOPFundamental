<?php

interface car
{
    public function carName();
}

interface factory
{
    public function familyCar();
    public function sportCar();
}

// all cars

class bmwX6 implements car
{
    public function carName()
    {
        return "BMWX6";
    }
}

class bmwX3 implements car
{
    public function carName()
    {
        return "BMWX3";
    }
}

class kiaFamily implements car
{
    public function carName()
    {
        return "kiaFamily";
    }
}

class kiaSport implements car
{
    public function carName()
    {
        return "kiaSport";
    }
}

// factory

class BMW implements factory {

    public function familyCar()
    {
        return new bmwX6();
    }

    public function sportCar()
    {
        return new bmwX3();
    }
}

class kia implements factory {

    public function familyCar()
    {
        return new kiaFamily();
    }

    public function sportCar()
    {
        return new kiaSport();
    }
}

// my main

$myFactory = new BMW();
$car = $myFactory->familyCar();
echo $car->carName();

