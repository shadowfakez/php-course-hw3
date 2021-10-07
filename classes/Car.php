<?php

include_once 'Transmission.php';
include_once './interfaces/MovableInterface.php';
include_once './interfaces/ReverseMovableInterface.php';

class Car extends Transmission implements MovableInterface, ReverseMovableInterface
{
    protected string $brand;

    protected mixed $model;

    protected int $year;

    protected string $color;

    public function __construct($brand, $model, $year, $color, $maxSpeed)
    {
        parent::__construct($maxSpeed);
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }

    public function getCarInfo(): string
    {
        return 'Информация об автомобиле:' . PHP_EOL . 'Автомобиль марки ' . $this->brand . ', модель ' . $this->model . ', ' . $this->year . ' года выпуска. Цвет: ' . $this->color . '. Максимальная скорость: ' . $this->maxSpeed . ' км/ч.' . PHP_EOL;
    }

    public function start()
    {
        parent::startEngine();
    }

    public function stop()
    {
        parent::stopEngine();
    }

    public function up()
    {
        parent::speedUp();
    }

    public function down()
    {
        parent::speedDown();
    }

    public function reverse()
    {
        parent::reverseMoving();
    }
}