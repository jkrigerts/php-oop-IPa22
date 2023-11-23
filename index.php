<?php

include "Dog.php";
include "Cat.php";

$myDog = new Dog;
$myDog2 = new Dog;
$myDog->color = "Black";
echo $myDog2->color;


// Uztaisi klasi Cat, kuram ir
// publisk color un publisks age
// un uztaisi sev 3 kaķus.

// Saglabā savus kaķus masīvā
// $cats = [new Cat, new Cat, new Cat];

// Pārtaisi kodu tā, lai kaķi
// tiek uztaisīti un ielikti
// masīvā ar ciklu.
$cats = [];
for ($i = 0; $i < 21; $i++) {
  array_push($cats, new Cat);
}


