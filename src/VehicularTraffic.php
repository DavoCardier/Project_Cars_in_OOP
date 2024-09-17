<?php 
ini_set('declare(strict_types', '1'); 
namespace App;

use App\Bus;
use App\Tesla;
use App\SportCar;

class VehicularTraffic
{
    private array $vehicles = [];

    public function addVehicle(Vehicle $vehicle): void
    {
        $this->vehicles []= $vehicle;
    }

    public function startMovingAllVehicles(int $speed): void
    {
        foreach ($this->vehicles as $vehicle) {
            $vehicle->setSpeed($speed);
            $vehicle->move();
        }
    }
}