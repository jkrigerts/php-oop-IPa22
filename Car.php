<?php
class Car {
    public $brand;
    private $mileage;
    static $describe = "Im mostlye made ootu of metal and I have a color and wheels";

    public function __construct($brand, $mileage) {
        $this->brand = $brand;
        $this->mileage = $mileage;
    }

    public function __destruct() {
        echo $this->brand." is dead at mileage ".$this->mileage."<br>";
    }

    public function increaseMileage($amount) {
        $this->mileage += $amount;
    }

    static function makeNoise() {
      echo "Beep, Beep!";
    }

}