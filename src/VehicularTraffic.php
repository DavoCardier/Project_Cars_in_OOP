<?php 
declare(strict_types=1);
namespace iPsyco;

use iPsyco\Bus;
use iPsyco\Tesla;
use iPsyco\SportCar;

class VehicularTraffic
{
    private array $vehicles = [];

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

    public function getElectricVehicles(): array  // Research = Investigacion 
    {
        return array_filter($this->vehicles, fn($v) => $v instanceof Tesla);
    }
}