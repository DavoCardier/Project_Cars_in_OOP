<?php
ini_set('declare(strict_types', '1'); 
namespace App;

require '..vendor/autoload.php';

use App\VehicularTraffic;
use App\Bus;
use App\Tesla;
use App\SportCar;

$manager = new VehicularTraffic();

$bus = new Bus("Encava", "F456D");
$tesla = new Tesla("Tesla", "XS");
$sportCar = new SportCar("Camaro", "ZR1");

$manager->addVehicle($bus);
$manager->addVehicle($tesla);
$manager->addVehicle($sportCar);
