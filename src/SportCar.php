<?php
declare(strict_types=1); 
namespace iPsyco;

use iPsyco\Vehicle;

class SportCar extends Vehicle
{
    public function move(): void
    {
        echo "The sport car is accelerating quickly with a speed of $this->speed km/h.\n";
    }
}