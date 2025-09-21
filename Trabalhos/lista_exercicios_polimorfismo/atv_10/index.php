<?php

abstract class Transport {
    protected string $route;
    protected float $distance;

    public function __construct(string $route, float $distance) {
        $this->route = $route;
        $this->distance = $distance;
    }

    public function getRoute(): string {
        return $this->route;
    }

    abstract public function calculateFare(): float;
}

class Bus extends Transport {
    public function calculateFare(): float {
        return 2.50 + ($this->distance * 0.10);
    }
}

class Subway extends Transport {
    public function calculateFare(): float {
        return 3.00;
    }
}

class Taxi extends Transport {
    public function calculateFare(): float {
        return 5.00 + ($this->distance * 1.20);
    }
}

$bus = new Bus("Downtown to Airport", 15.5);
echo "Bus route: " . $bus->getRoute() . " (15.5 km)";
echo "<br>Bus fare: R$" . number_format($bus->calculateFare(), 2);

echo "<br><br>";

$subway = new Subway("City Center to University", 8.2);
echo "Subway route: " . $subway->getRoute() . " (8.2 km)";
echo "<br>Subway fare: R$" . number_format($subway->calculateFare(), 2);

echo "<br><br>";

$taxi = new Taxi("Hotel to Shopping Mall", 5.7);
echo "Taxi route: " . $taxi->getRoute() . " (5.7 km)";
echo "<br>Taxi fare: R$" . number_format($taxi->calculateFare(), 2);
