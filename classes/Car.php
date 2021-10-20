<?php


class Car extends Vehicle
{
    protected Transmission $transmission;

    public function __construct($brand, $model, $year, $color, $maxSpeed)
    {
        parent::__construct($brand, $model, $year, $color, $maxSpeed);

        $this->transmission = new AutomaticTransmission($maxSpeed);
    }

    public function getInfo()
    {
        echo 'Информация об автомобиле:' . PHP_EOL . 'Автомобиль марки ' . $this->brand . ', модель ' . $this->model . ', ' . $this->year . ' года выпуска. Цвет: ' . $this->color . '. Максимальная скорость: ' . $this->maxSpeed . ' км/ч.' . PHP_EOL;
    }


}