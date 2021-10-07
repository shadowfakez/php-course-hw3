<?php

include_once 'Transmission.php';
include_once './interfaces/MovableInterface.php';

class Car extends Transmission implements MovableInterface
{

    protected string $brand;

    protected mixed $model;

    protected int $year;

    protected string $color;

    public function __construct($brand, $model, $year, $color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;

    }


}