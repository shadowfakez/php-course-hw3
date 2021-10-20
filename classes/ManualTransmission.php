<?php


class ManualTransmission extends Transmission
{
    protected int $currentGear = 0; // работающая передача

    public function __construct($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    protected function speedUpOutput(): string
    {
        return "Набираем скорость! Двигатель работает на " . $this->currentGear . " передаче! Текущая скорость: " . $this->currentSpeed . " км/ч." . PHP_EOL;
    }

    protected function speedDownOutput(): string
    {
        return "Сбрасываем скорость! Двигатель работает на " . $this->currentGear . " передаче! Текущая скорость: " . $this->currentSpeed . " км/ч." . PHP_EOL;
    }

    public function up()
    {
        if ($this->engineRunning) {
            if ($this->currentSpeed >= 0) {
                if ($this->currentSpeed <= 30) {
                    $this->currentGear = 1;
                    $this->currentSpeed += self::MANUAL_SPEEDSTEP1;
                    echo $this->speedUpOutput();
                } elseif ($this->currentSpeed <= 45) {
                    $this->currentGear = 2;
                    $this->currentSpeed += self::MANUAL_SPEEDSTEP2;
                    echo $this->speedUpOutput();
                } elseif ($this->currentSpeed <= 90) {
                    $this->currentGear = 3;
                    $this->currentSpeed += self::MANUAL_SPEEDSTEP3;
                    echo $this->speedUpOutput();
                } elseif ($this->currentSpeed <= 165) {
                    $this->currentGear = 4;
                    $this->currentSpeed += self::MANUAL_SPEEDSTEP4;
                    echo $this->speedUpOutput();
                } else {
                    $this->currentGear = 5;
                    $this->currentSpeed += self::MANUAL_SPEEDSTEP5;
                    if ($this->currentSpeed >= $this->maxSpeed) {
                        $this->currentSpeed = $this->maxSpeed;
                        echo 'Достигнута максимальная скорость ' . $this->currentSpeed . ' км/ч! Дальнейшее ускорение невозможно.' . PHP_EOL;
                    } else {
                        echo $this->speedUpOutput();
                    }
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
                if ($this->currentSpeed <= 15) {
                    $this->currentGear = 1;
                    $this->currentSpeed -= self::MANUAL_SPEEDSTEP1;
                    echo $this->speedDownOutput();
                } elseif ($this->currentSpeed <= 45) {
                    $this->currentGear = 2;
                    $this->currentSpeed -= self::MANUAL_SPEEDSTEP2;
                    echo $this->speedDownOutput();
                } elseif ($this->currentSpeed <= 90) {
                    $this->currentGear = 3;
                    $this->currentSpeed -= self::MANUAL_SPEEDSTEP3;
                    echo $this->speedDownOutput();
                } elseif ($this->currentSpeed <= 165) {
                    $this->currentGear = 4;
                    $this->currentSpeed -= self::MANUAL_SPEEDSTEP4;
                    echo $this->speedDownOutput();
                } else {
                    $this->currentGear = 5;
                    $this->currentSpeed -= self::MANUAL_SPEEDSTEP5;
                    echo $this->speedDownOutput();
                }
            } elseif ($this->currentSpeed < 0) {
                $this->currentSpeed += self::MANUAL_SPEEDSTEP1;
                echo "Сбавляем скорость! Задний ход! Текущая скорость: " . $this->currentSpeed . " км/ч." . PHP_EOL;
            } else {
                echo "Текущая скорость: " . $this->currentSpeed . " км/ч. Чтобы двигаться вперед, нажмите на газ. Чтобы двигаться назад, запустите задний ход!" . PHP_EOL;
            }
        } else {
            echo 'Двигатель остановлен. Чтобы сбросить скорость, необходимо сначала запустить двигатель и разогнаться!' . PHP_EOL;
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
                echo 'Текущая скорость ' . $this->currentSpeed . ' км/ч! Невозможно ехать назад с большей скоростью.' . PHP_EOL;
            }
        }
    }
}