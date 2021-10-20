<?php

abstract class Vehicle
{
    protected string $brand;

    protected mixed $model;

    protected int $year;

    protected string $color;

    protected int $maxSpeed;

    public function __construct($brand, $model, $year, $color, $maxSpeed)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
        $this->maxSpeed = $maxSpeed;
    }

    public function start()
    {
        $this->transmission->start();
    }

    public function stop()
    {
        $this->transmission->stop();
    }

    public function up()
    {
        $this->transmission->up();
    }

    public function down()
    {
        $this->transmission->down();
    }

    public function reverse()
    {
        $this->transmission->reverse();
    }

    abstract public function getInfo();

}