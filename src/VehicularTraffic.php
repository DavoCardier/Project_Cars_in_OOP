<?php 
declare(strict_types=1);
namespace Psyco;

use Psyco\Bus;
use Psyco\Tesla;
use Psyco\SportCar;

class VehicularTraffic
{
    private array $vehicles;

    public function __construct()
    {
        $this->vehicles = [];
    }

    public function addVehicle(Vehicle $vehicle): void
    {
        $this->vehicles[] = $vehicle;
    }

    public function startMovingAllVehicles(int $speed): void
    {
        foreach ($this->vehicles as $vehicle) {
            $vehicle->setSpeed($speed);
            $vehicle->move();
        }
    }

    public function getElectricVehicles(): array  // Research = Investigacion // Array con version vieja. 
    {
        return array_filter($this->vehicles, fn($v) => $v instanceof Tesla);
    }
}