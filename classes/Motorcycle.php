<?php


class Motorcycle extends Vehicle
{
    protected Transmission $transmission;

    public function __construct($brand, $model, $year, $color, $maxSpeed)
    {
        parent::__construct($brand, $model, $year, $color, $maxSpeed);

        $this->transmission = new ManualTransmission($maxSpeed);
    }

    public function getInfo()
    {
        echo 'Информация о Мотоцикле:' . PHP_EOL . 'Мотоцикл марки ' . $this->brand . ', модель ' . $this->model . ', ' . $this->year . ' года выпуска. Цвет: ' . $this->color . '. Максимальная скорость: ' . $this->maxSpeed . ' км/ч.' . PHP_EOL;
    }

    public function reverse()
    {
        echo "К сожалению, на мотоцикле невозможно ехать задним ходом. Вам придется делать это вручную!" . PHP_EOL;
    }

}