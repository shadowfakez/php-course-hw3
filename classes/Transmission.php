<?php

include_once 'Engine.php';

class Transmission extends Engine
{
    protected int $nOfGears; // кол-во передач

    protected static $currentGear = 0; // работающая передача

    const SPEEDSTEP1 = 10; // шаг изменения скорости на 1 передаче

    const SPEEDSTEP2 = 15; // шаг изменения скорости на 2 передаче

    const SPEEDSTEP3 = 20; // шаг изменения скорости на 3 передаче

    const SPEEDSTEP4 = 25; // шаг изменения скорости на 4 передаче

    const SPEEDSTEP5 = 30; // шаг изменения скорости на 5 передаче

    const SPEEDSTEP6 = 40; // шаг изменения скорости на 6 передаче

    public function __construct($nOfGears)
    {

        $this->nOfGears = $nOfGears;

    }

    public function speedUp()
    {

        /*self::$currentGear;
        $this->currentSpeed;
        $this->nOfGears;
        $this->maxSpeed;
        self::speedUpStep;*/
//        "Увеличиваем скорость! Включаем первую передачу! Текущая скорость 10 км/ч."
//        "Увеличиваем скорость! Текущая передача: 1. Текущая скорость 20 км/ч."
//        "Увеличиваем скорость! Включаем вторую передачу! Текущая скорость 30 км/ч."
//        "Увеличиваем скорость! Текущая передача: 2. Текущая скорость 40 км/ч."
//        "Увеличиваем скорость! Включаем третью передачу! Текущая скорость 50 км/ч."
//        "Увеличиваем скорость! Текущая передача: 3. Текущая скорость 60 км/ч."
//        "Увеличиваем скорость! Включаем четвертую передачу! Текущая скорость 70 км/ч."
//        "Увеличиваем скорость! Текущая передача: 4. Текущая скорость 80 км/ч."
//        "Увеличиваем скорость! Включаем пятую передачу! Текущая скорость 90 км/ч."
//        "Увеличиваем скорость! Текущая передача: 5. Текущая скорость 120 км/ч."
//        ...
//        "Увеличиваем скорость! Текущая передача: 5. Текущая скорость 200 км/ч. Достигнута максимальная скорость, дальнейшее ускорение невозможно."
//        "Текущая передача: 5. Текущая скорость 200 км/ч. Достигнута максимальная скорость, дальнейшее ускорение невозможно."
        if ($this->engineRunning){
            if ( $this->currentSpeed <= 30) {
                self::$currentGear = 1;
                $this->currentSpeed += self::SPEEDSTEP1;
                echo "Увеличиваем скорость! Двигатель работает на " . self::$currentGear . " передаче! Текущая скорость: " . $this->currentSpeed . PHP_EOL;
            } elseif ($this->currentSpeed <= 75) {
                self::$currentGear = 2;
                $this->currentSpeed += self::SPEEDSTEP2;
                echo "Увеличиваем скорость! Двигатель работает на " . self::$currentGear . " передаче! Текущая скорость: " . $this->currentSpeed . PHP_EOL;
            } elseif ($this->currentSpeed <= 135) {
                self::$currentGear = 3;
                $this->currentSpeed += self::SPEEDSTEP3;
                echo "Увеличиваем скорость! Двигатель работает на " . self::$currentGear . " передаче! Текущая скорость: " . $this->currentSpeed . PHP_EOL;
            }
        } else {
            echo 'Чтобы увеличить скорость необходимо запустить двигатель!' . PHP_EOL;
        }



    }

    public function speedDown()
    {
        if ($this->engineRunning){
            if ( $this->currentSpeed <= 30) {
                self::$currentGear = 1;
                $this->currentSpeed -= self::SPEEDSTEP1;
                echo "Снижаем скорость! Двигатель работает на " . self::$currentGear . " передаче! Текущая скорость: " . $this->currentSpeed . PHP_EOL;
            } elseif ($this->currentSpeed <= 75) {
                self::$currentGear = 2;
                $this->currentSpeed -= self::SPEEDSTEP2;
                echo "Снижаем скорость! Двигатель работает на " . self::$currentGear . " передаче! Текущая скорость: " . $this->currentSpeed . PHP_EOL;
            }
        } else {
            echo 'Чтобы увеличить скорость необходимо запустить двигатель!' . PHP_EOL;
        }

    }

}