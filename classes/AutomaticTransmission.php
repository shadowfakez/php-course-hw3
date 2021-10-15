<?php


class AutomaticTransmission extends Engine
{
    protected int $maxSpeed; // максимальная скорость

    const SPEEDSTEP = 50; // шаг изменения скорости

    const REVERSE = 5; // шаг изменения скорости R передаче

    public function __construct($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function speedUpOutput(): string
    {
        return "Набираем скорость! Текущая скорость: " . $this->currentSpeed . " км/ч." . PHP_EOL;
    }

    public function speedDownOutput(): string
    {
        return "Сбрасываем скорость! Текущая скорость: " . $this->currentSpeed . " км/ч." . PHP_EOL;
    }

    public function reverseMovingOutput(): string
    {
        return "Задний ход! Текущая скорость: " . $this->currentSpeed . " км/ч." . PHP_EOL;
    }


    public function up()
    {
        if ($this->engineRunning) {
            if ($this->currentSpeed >= 0) {
                if ($this->currentSpeed >= $this->maxSpeed) {
                    $this->currentSpeed = $this->maxSpeed;
                    echo 'Достигнута максимальная скорость ' . $this->currentSpeed . ' км/ч! Дальнейшее ускорение невозможно.' . PHP_EOL;
                } else {
                    $this->currentSpeed += self::SPEEDSTEP;
                    echo $this->speedUpOutput();
                }
            } else {
                echo "Задний ход! Чтобы ехать вперед необходимо сначала остановиться!" . PHP_EOL;
            }
        } else {
            echo 'Чтобы увеличить скорость необходимо запустить двигатель!' . PHP_EOL;
        }
    }

    public function down()
    {
        if ($this->engineRunning) {
            if ($this->currentSpeed > 0) {
                $this->currentSpeed -= self::SPEEDSTEP;
                echo $this->speedDownOutput();
            } elseif ($this->currentSpeed < 0) {
                $this->currentSpeed += self::REVERSE;
                echo "Задний ход! Сбавляем скорость! Текущая скорость: " . $this->currentSpeed . " км/ч." . PHP_EOL;
            } else {
                echo "Текущая скорость: " . $this->currentSpeed . " км/ч. Чтобы двигаться вперед, нажмите на газ. Чтобы двигаться назад, запустите задний ход!" . PHP_EOL;
            }
        } else {
            echo 'Двигатель остановлен. Чтобы сбросить скорость необходимо сначала запустить двигатель и разогнаться!' . PHP_EOL;
        }
    }

    public function reverse()
    {
        if ($this->engineRunning) {
            if ($this->currentSpeed > 0) {
                echo 'Остановитесь, прежде чем сдавать назад!' . PHP_EOL;
            } elseif ($this->currentSpeed > -20) {
                $this->currentSpeed -= self::REVERSE;
                echo $this->reverseMovingOutput();
            } else {
                $this->currentSpeed = -20;
                echo 'Задний ход! Текущая скорость ' . $this->currentSpeed . ' км/ч! Невозможно ехать назад с большей скоростью.' . PHP_EOL;
            }
        }
    }
}