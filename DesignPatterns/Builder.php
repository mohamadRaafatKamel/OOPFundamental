<?php

// builder
interface Builder
{
    // get body type
    public function createBody();

    public function addWheel();

    public function addEngine();

    public function addDoors();
    // return full after build
    public function getVehicle();
}

class TruckBuilder implements Builder
{
    private $body;
    private $wheel;
    private $door;
    private $engine;

    public function createBody()
    {
        $this->body = "Track";
    }

    public function addDoors()
    {
        $this->door = '2 Track Door';
    }

    public function addEngine()
    {
        $this->engine = "truckEngine";
    }

    public function addWheel()
    {
        $this->wheel = "truck wheel";
    }

    public function getVehicle()
    {
        return [
            'door'=> $this->door,
            'wheel'=> $this->wheel,
            'engine'=> $this->engine,
            'body'=> $this->body,
        ];
    }
}

class CarBuilder implements Builder
{
    private $body;
    private $wheel;
    private $door;
    private $engine;

    public function createBody()
    {
        $this->body = "Car";
    }

    public function addDoors()
    {
        $this->door = '4 Car Door';
    }

    public function addEngine()
    {
        $this->engine = "Car Engine";
    }

    public function addWheel()
    {
        $this->wheel = "Car wheel";
    }

    public function getVehicle()
    {
        return [
            'door'=> $this->door,
            'wheel'=> $this->wheel,
            'engine'=> $this->engine,
            'body'=> $this->body,
        ];
    }
}


class Director
{
    public function build(Builder $builder)
    {
        $builder->createBody();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}

////////////////////////////////////////////// main

// Truck
$truckBuilder = new TruckBuilder();
$carBuilder = new CarBuilder();
$newVehicle = (new Director())->build($carBuilder);

print_r($newVehicle);

