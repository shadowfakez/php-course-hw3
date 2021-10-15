<?php


class Motorcycle extends ManualTransmission
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
        echo 'Информация о Мотоцикле:' . PHP_EOL . 'Мотоцикл марки ' . $this->brand . ', модель ' . $this->model . ', ' . $this->year . ' года выпуска. Цвет: ' . $this->color . '. Максимальная скорость: ' . $this->maxSpeed . ' км/ч.' . PHP_EOL;
    }

    public function reverse()
    {
        echo "К сожалению, на мотоцикле невозможно ехать задним ходом. Вам придется делать это вручную!" . PHP_EOL;
    }

}