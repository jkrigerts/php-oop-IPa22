<?php

class Math{
  static function addTwo($a, $b){
    return $a+$b;
  }

  static function factorial($n) {
    $factorial = 1;
    for ($i = $n; $i >= 1; $i--) {
      $factorial = $factorial * $i;
    }
    return "Faktoriāls no $n ir $factorial <br>";
  }

  // Tu jau zini, ka te būs [4, 2]
  // Kā saskaitīt?
  static function sum($ernests) {
    $sum = 0;
    foreach($ernests as $i) {
      $sum = $sum + $i;
    }
    return $sum;
  }

  static function average($avg){
    return array_sum($avg)/count($avg);
  }

  static function average2($ernests) {
    $sum = 0;
    $skaits = 0;
    foreach($ernests as $i) {
      $sum = $sum + $i;
      $skaits = $skaits + 1;
    }
    return $sum / $skaits;
  }

  static function max($toms) {
    return max($toms);
  }
}