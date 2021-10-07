<?php

include_once 'Engine.php';

class Transmission extends Engine
{
    protected int $maxSpeed; // максимальная скорость

    protected static int $currentGear = 0; // работающая передача

    const SPEEDSTEP1 = 5; // шаг изменения скорости на 1 передаче

    const SPEEDSTEP2 = 10; // шаг изменения скорости на 2 передаче

    const SPEEDSTEP3 = 15; // шаг изменения скорости на 3 передаче

    const SPEEDSTEP4 = 25; // шаг изменения скорости на 4 передаче

    const SPEEDSTEP5 = 50; // шаг изменения скорости на 5 передаче

    public function __construct($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function speedUpOutput(): string
    {
        return "Набираем скорость! Двигатель работает на " . self::$currentGear . " передаче! Текущая скорость: " . $this->currentSpeed . " км/ч." . PHP_EOL;
    }

    public function speedDownOutput(): string
    {
        return "Сбрасываем скорость! Двигатель работает на " . self::$currentGear . " передаче! Текущая скорость: " . $this->currentSpeed . " км/ч." . PHP_EOL;
    }

    public function reverseMovingOutput(): string
    {
        return "Задний ход! Текущая скорость: " . $this->currentSpeed . " км/ч." . PHP_EOL;
    }


    public function speedUp()
    {
        if ($this->engineRunning) {
            if ($this->currentSpeed <= 30) {
                self::$currentGear = 1;
                $this->currentSpeed += self::SPEEDSTEP1;
                echo $this->speedUpOutput();
            } elseif ($this->currentSpeed <= 45) {
                self::$currentGear = 2;
                $this->currentSpeed += self::SPEEDSTEP2;
                echo $this->speedUpOutput();
            } elseif ($this->currentSpeed <= 90) {
                self::$currentGear = 3;
                $this->currentSpeed += self::SPEEDSTEP3;
                echo $this->speedUpOutput();
            } elseif ($this->currentSpeed <= 165) {
                self::$currentGear = 4;
                $this->currentSpeed += self::SPEEDSTEP4;
                echo $this->speedUpOutput();
            } else {
                self::$currentGear = 5;
                $this->currentSpeed += self::SPEEDSTEP5;
                if ($this->currentSpeed >= $this->maxSpeed) {
                    $this->currentSpeed = $this->maxSpeed;
                    echo 'Достигнута максимальная скорость ' . $this->currentSpeed . ' км/ч! Дальнейшее ускорение невозможно.' . PHP_EOL;
                } else {
                    echo $this->speedUpOutput();
                }
            }
        } else {
            echo 'Чтобы увеличить скорость необходимо запустить двигатель!' . PHP_EOL;
        }
    }

    public function speedDown()
    {
        if ($this->engineRunning) {
            if ($this->currentSpeed < 0) {
                echo 'Текущая скорость ' . $this->currentSpeed . ' км/ч!' . PHP_EOL;
            }
            if ($this->currentSpeed <= 15) {
                self::$currentGear = 1;
                $this->currentSpeed -= self::SPEEDSTEP1;
                if ($this->currentSpeed <= 0) {
                    echo 'Текущая скорость ' . $this->currentSpeed . ' км/ч! Можно заглушить двигатель.' . PHP_EOL;
                } else {
                    echo $this->speedDownOutput();
                }
            } elseif ($this->currentSpeed <= 45) {
                self::$currentGear = 2;
                $this->currentSpeed -= self::SPEEDSTEP2;
                echo $this->speedDownOutput();
            } elseif ($this->currentSpeed <= 90) {
                self::$currentGear = 3;
                $this->currentSpeed -= self::SPEEDSTEP3;
                echo $this->speedDownOutput();
            } elseif ($this->currentSpeed <= 165) {
                self::$currentGear = 4;
                $this->currentSpeed -= self::SPEEDSTEP4;
                echo $this->speedDownOutput();
            } else {
                self::$currentGear = 5;
                $this->currentSpeed -= self::SPEEDSTEP5;
                echo $this->speedDownOutput();
            }
        } else {
            echo 'Двигатель остановлен. Чтобы сбросить скорость необходимо сначала запустить двигатель и разогнаться!' . PHP_EOL;
        }
    }

    public function reverseMoving()
    {
        if ($this->engineRunning) {
            if ($this->currentSpeed <= 0) {
                $this->currentSpeed -= self::SPEEDSTEP1;
                echo $this->reverseMovingOutput();
            } elseif ($this->currentSpeed <= -20) {
                $this->currentSpeed = -20;
                echo 'Текущая скорость ' . $this->currentSpeed . ' км/ч! Невозможно ехать назад с большей скоростью.' . PHP_EOL;
            } else {
                echo 'Остановитесь, прежде чем сдавать назад!' . PHP_EOL;
            }
        } else {
            echo 'Двигатель остановлен! Прежде чем сдавать назад, необходимо запустить двигатель!' . PHP_EOL;
        }
    }

}