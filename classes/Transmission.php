<?php

abstract class Transmission extends Engine
{
    protected int $maxSpeed; // максимальная скорость

    const MANUAL_SPEEDSTEP1 = 5; // шаг изменения скорости на 1 передаче

    const MANUAL_SPEEDSTEP2 = 10; // шаг изменения скорости на 2 передаче

    const MANUAL_SPEEDSTEP3 = 15; // шаг изменения скорости на 3 передаче

    const MANUAL_SPEEDSTEP4 = 25; // шаг изменения скорости на 4 передаче

    const MANUAL_SPEEDSTEP5 = 50; // шаг изменения скорости на 5 передаче

    const AUTO_SPEEDSTEP = 50; // шаг изменения скорости

    const REVERSE = 5; // шаг изменения скорости R передаче

    protected function reverseMovingOutput(): string
    {
        return "Задний ход! Текущая скорость: " . $this->currentSpeed . " км/ч." . PHP_EOL;
    }

    abstract protected function speedUpOutput(): string;

    abstract protected function speedDownOutput(): string;

}