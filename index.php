<?php

include "Tire.php";
include "Car.php";
include "Train.php";
include "Math.php";
// Train::makeNoise();

// $myTire1 = new Tire(30, "Winter", 69);

// echo $myTire1->size."<br>";
// echo $myTire1->type."<br>";

// echo Car::$describe;
// Car::makeNoise();

// include "Dog.php";
// include "Cat.php";
// include "Bird.php";

// // Uztaisīt objektu
// $myBird = new Bird("Black", 541);
// echo $myBird->color . "<br>";
// $myBird->fly();

// $myBird2 = new Bird("Blue", 0.5);
// $myBird2->fly();

// $myDog = new Dog;
// $myDog2 = new Dog;
// $myDog->color = "Black";
// // echo $myDog2->color;


// // Uztaisi klasi Cat, kuram ir
// // publisk color un publisks age
// // un uztaisi sev 3 kaķus.

// // Saglabā savus kaķus masīvā
// // $cats = [new Cat, new Cat, new Cat];

// // Pārtaisi kodu tā, lai kaķi
// // tiek uztaisīti un ielikti
// // masīvā ar ciklu.
// $cats = [];
// for ($i = 0; $i < 21; $i++) {
//   array_push($cats, new Cat);
// }

// // var_dump($cats);

//Math::addTwo(4,9);
echo Math::addTwo(4,9) . "<br>";
echo Math::factorial(10);
echo Math::sum([4, 2]) . "<br>";
echo Math::average([1,3]) . "<br>";
echo Math::max([3, 5, 7, 69]);
