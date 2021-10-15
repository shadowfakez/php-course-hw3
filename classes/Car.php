<?php


class Car extends AutomaticTransmission
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

    public function getInfo()
    {
        echo 'Информация об автомобиле:' . PHP_EOL . 'Автомобиль марки ' . $this->brand . ', модель ' . $this->model . ', ' . $this->year . ' года выпуска. Цвет: ' . $this->color . '. Максимальная скорость: ' . $this->maxSpeed . ' км/ч.' . PHP_EOL;
    }

}