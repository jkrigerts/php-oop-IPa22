<?php
include_once "Vehicle.php";
class Car extends Vehicle {
    static $describe = "Im mostlye made ootu of metal and I have a color and wheels";

    static function makeNoise() {
      echo "Beep, Beep!";
    }

}