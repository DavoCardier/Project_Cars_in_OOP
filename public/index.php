<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Psyco\VehicularTraffic;
use Psyco\Bus;
use Psyco\Tesla;
use Psyco\SportCar;

$manager = new VehicularTraffic();

$bus = new Bus("Encava", "F456D");
$tesla = new Tesla("Tesla", "XS");
$sportCar = new SportCar("Camaro", "ZR1");

$manager->addVehicle($bus);
$manager->addVehicle($tesla);
$manager->addVehicle($sportCar);

echo "Starting all vehicles at 120 km/h:\n";
$manager->startMovingAllVehicles(120);

echo "\nElectric vehicles:\n";
foreach ($manager->getElectricVehicles() as $vehicle) {
    echo $vehicle->getModel() . " is moving electrically\n";
}