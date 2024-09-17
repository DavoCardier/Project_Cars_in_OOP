<?php
ini_set('declare(strict_types', '1'); 
namespace App;

use App\Vehicle;

class Bus extends Vehicle
{
    public function move(): void
    {
        echo "The bus is moving with a speed of {$this->speed} km/h.\n";
    }
}