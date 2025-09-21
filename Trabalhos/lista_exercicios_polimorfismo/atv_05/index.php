<?php

abstract class GeometricShape {
    abstract public function calculateArea(): float;
}

class Square extends GeometricShape {
    private float $side;

    public function __construct(float $side) {
        $this->side = $side;
    }

    public function calculateArea(): float {
        return $this->side * $this->side;
    }
}

class Circle extends GeometricShape {
    private float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function calculateArea(): float {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle extends GeometricShape {
    private float $width;
    private float $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): float {
        return $this->width * $this->height;
    }
}

$square = new Square(5);
echo "Square with side 5: Area = " . $square->calculateArea();

echo "<br><br>";

$circle = new Circle(3);
echo "Circle with radius 3: Area = " . number_format($circle->calculateArea(), 2);

echo "<br><br>";

$rectangle = new Rectangle(4, 6);
echo "Rectangle 4x6: Area = " . $rectangle->calculateArea();
