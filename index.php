<?php

include_once 'classes/Car.php';


$car = new Car('Peugeot', '607', 2010, 'green', 5);


/*
срабатывает переключение передачи 1
5 / 10 / 15 / 20
срабатывает переключение передачи 2
25 / 30 / 35 / 40
срабатывает переключение передачи 3
45 / 50 / 55 / 60
срабатывает переключение передачи 4
60 / 80 / 100 / 120
срабатывает переключение передачи 5
140 / 170 / 200 / 230 ...
достигнута максимальная скорость

*/


$car->start();
$car->start();
$car->stop();
$car->stop();
$car->start();
$car->speedUp();
$car->speedUp();
$car->speedUp();
$car->speedUp();
$car->speedUp();
$car->speedUp();
$car->speedDown();
$car->speedDown();
$car->speedDown();
$car->speedDown();
$car->speedDown();
$car->speedDown();
$car->speedDown();
$car->speedUp();
$car->speedUp();
