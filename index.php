<?php

require_once 'Car.php';
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';

$car = new Car('blue', 5, 'fuel');
$renault = new Car( 'white', 5, 'electric');
$bike = new Bicycle('orange', 1);
$matt = new Skateboard('darkblue', 1);
$motorway = new MotorWay();
$motorway->addVehicule($car);
$motorway->addVehicule($renault);
$motorway->addVehicule($bike);
$motorway->addVehicule($matt);

$truck = new Truck('green', 2, 'fuel',20);
$ford = new Car( 'black', 5, 'fuel');
$bmx = new Bicycle( 'yellow', 1);
$residentialWay = new ResidentialWay();
$residentialWay->addVehicule($truck);
$residentialWay->addVehicule($ford);
$residentialWay->addVehicule($bmx);


$bycicle = new Bicycle('red',1);
$renault = new Car('purple', 5, 'electric');
$skateboard = new Skateboard('darkred', 1);
$pedestrianWay = new PedestrianWay();
$pedestrianWay->addVehicule($bycicle);
$pedestrianWay->addVehicule($renault);
$pedestrianWay->addVehicule($skateboard);


var_dump($motorway);
var_dump($residentialWay);
var_dump($pedestrianWay);


