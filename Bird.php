<?php

class Bird {
  public $color;
  private $age;

  // Konstruktors
  public function __construct($c, $a) {
    $this->color = $c;
    $this->age = $a;
  }

  // Destruktors
  public function __destruct() {
    echo $this->color . " bird is dead<br>";
  }

  // Metode ir iekšējā funkcija
  public function fly() {
    echo "Fly away " . $this->color . " bird<br>";
  }
}