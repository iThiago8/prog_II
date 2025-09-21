<?php

abstract class Vehicle {
    protected string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    abstract public function move(): void;
}

class Car extends Vehicle {
    public function move(): void {
        echo "The car '$this->name' is driving on the road with 4 wheels...";
        echo "<br>Car moved successfully on asphalt!";
    }
}

class Bicycle extends Vehicle {
    public function move(): void {
        echo "The bicycle '$this->name' is pedaling with 2 wheels...";
        echo "<br>Bicycle moved successfully using human power!";
    }
}

class Airplane extends Vehicle {
    public function move(): void {
        echo "The airplane '$this->name' is flying through the sky...";
        echo "<br>Airplane moved successfully in the air!";
    }
}

$car = new Car("Toyota Corolla");
$car->move();

echo "<br><br>";

$bicycle = new Bicycle("Mountain Bike");
$bicycle->move();

echo "<br><br>";

$airplane = new Airplane("Boeing 737");
$airplane->move();

