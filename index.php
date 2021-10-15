<?php

include_once 'Autoloader.php';
spl_autoload_register([Autoloader::class, 'autoload']);

$car = new Car('Peugeot', '607', 2010, 'Красный', 250);
$motorcycle = new Motorcycle('Kawasaki', 'Ninja H2R', 2020, 'Черный', 400);

/*
getInfo()  - вывод информации об автомобиле или мотоцикле
start()    - запуск двигателя
stop()     - выключение двигателя
up()       - газ
down()     - тормоз
reverse()  - задний ход
*/

$car->getInfo();
$car->start();
$car->reverse();
$car->reverse();
$car->reverse();
$car->reverse();
$car->reverse();
$car->down();
$car->down();
$car->down();
$car->down();
$car->down();
$car->up();
$car->up();
$car->up();
$car->up();
$car->up();
$car->up();
$car->down();
$car->down();
$car->down();
$car->down();
$car->down();
$car->down();
$car->stop();

//===================================================

$motorcycle->getInfo();
$motorcycle->start();
$motorcycle->reverse();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->down();
$motorcycle->down();
$motorcycle->down();
$motorcycle->down();
$motorcycle->down();
$motorcycle->down();
$motorcycle->down();
$motorcycle->down();
$motorcycle->down();
$motorcycle->down();
$motorcycle->down();
$motorcycle->down();
$motorcycle->down();
$motorcycle->down();
$motorcycle->down();
$motorcycle->down();
$motorcycle->down();
$motorcycle->stop();