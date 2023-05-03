<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>modul 23 OOP dz Dorofeev</title>
    
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
        <h3>вывод функции: </h3>
        
<?php


interface CarsIf {
    public function moveFwd();
    public function moveBack();
    public function wipersOn();
    public function wipersOff();
    public function clackson();
}

interface AuxFacilities {
    public function nitroOverride();
    public function bucketOn();
}
// абстрактный класс машины
 abstract class Cars implements CarsIf, AuxFacilities {
    public $carId;
    protected $brand;
    protected $model;
    protected $type;
    protected $wheels;
    protected $saloon = 'leather';
    protected $gear;
    public function moveFwd() {
        echo 'car '. $this -> carId .' move forward ';
    }
    public function moveBack() {
        echo 'car '. $this -> carId .' move back ';
    }
    public function wipersOn() {
        echo 'car ' .$this -> carId .' turned on wipers ';
    }
    public function wipersOff() {
        echo 'car ' .$this -> carId .' turned off wipers ';
    }
    public function clackson() {
        echo 'car ' .$this -> carId .' says: Beeeeep!';
    }
    public function nitroOverride() {
        echo ' ....nitroOverride!!!';
    }
    public function bucketOn() {
        echo ' ...bucketOn!';
    }
}

// клас легковушки
class PassCar extends Cars {
    public $type = 'passanser car';
    public $carId = 13;
    public $saloon = 'leather';
    public $wheels = '21``';
    public $gear = 'auto';
    public $brand = 'Mercedes Benz';
    public $model = 'cl500';
}
$car = new PassCar;

// класс грузовики
class Tracks extends Cars {
    public $type = 'track';
    public $carId = 07;
    public $saloon = 'Tanger Daily';
    public $gear = 'manual';
    public $brand = 'Scania';
    public $model = '6000Z';
}
$track = new Tracks;

// класс бульдозеры
class Bulldozer extends Cars {
    public $type = 'bulldozer';
    public $carId = 552;
    public $saloon = 'none';
    public $gear = 'manual';
    public $brand = 'Komatsu';
    public $model = 'model 1 Pro';
}
$bulldozer = new Bulldozer;

//функция запуска движения вперед
function rideOn(Cars $car) {
    $car -> moveFwd();
    if (($car ->type) == 'passanser car') {
        $car -> nitroOverride();
    }
    if (($car ->type) == 'bulldozer') {
        $car -> bucketOn();
    }
}
// функция движения назад
function getBack(Cars $car) {
    $car -> moveBack();
}
// функция включения дворников
function rain(Cars $car) {
    $car -> wipersOn();
}
//запуск машинки
echo "<br>";echo "<br>";
rideOn($car);

?>
</body>
</html>