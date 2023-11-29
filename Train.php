<?php


class Train {
  public $brand;
  public $trackGauge;
  private $mileage;

  public function __construct($brand, $trackGauge, $mileage) {
    $this->brand;
    $this->trackGauge;
    $this->mileage;
  }

  public function __destruct() {
    echo $this->brand." is dead at mileage ".$this->mileage."<br>";
  }

  public function increaseMileage($amount) {
    $this->mileage += $amount;
  }

  static function makeNoise() {
    echo "Choo, Choo!";
  }

}