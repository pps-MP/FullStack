<?php

class car {
    protected $brand;// [rotected - есть доступ в нутри класса]
    protected $model;
    protected $year;
    protected $mileage;
    private $noAccces;// private не наследуется в подклассах их при наследовании класса 

    public function __construct ($b, $m, $y, $mileage = 0){
        $this->brand = $b;
        $this->model = $m;
        $this->year = $y;
        $this->mileage = $mileage;
    }
    public function drive (){
        echo "$this->brand $this->model ($this->year, $this->$mileage) driving<br>";
    }
    public function add_mileage ($mileage){
        $error - false;
        if (mileage > 0){
            $this->mileage += $mileage;
        }else {
            $error = true;
        }
        return $this->mileage; 
    }
}
class ElectroCar extends Car{
    public $electroCar;

    public function __construct ($b, $m, $y, $mileage = 0){
        parent::__construct ($b, $m, $y, $mileage);
    }
    public function drive (){
        echo "Electrocar $this->brand $this->model ($this->year, $this->$mileage) driving<br>";
    }
}



$audi - new Car('Audi', 'Q5', 2021);
$vesta = new Car('Lada', 'Vesta', 2020, 15000);

$res

$audi->drive();
$vesta->drive();

$currentAudiMileage = $audi->add_mileage (2000);
echo $currentAudiMileage . '<br>';

$vesta->add_mileage(-10000);

$tesla = new ElectroCar ('Tesla', 'Model S', 2021);

