<?php



abstract class Engine
{

    protected int $currentSpeed = 0; // текущая скорость

    protected bool $engineRunning = false; // работает ли двигатель сейчас

    public function startEngine()
    {
        if ($this->engineRunning) {
            echo 'Двигатель уже работает! Невозможно завестись повторно!' . PHP_EOL;
        } else {
            echo 'Заводим двигатель! Текущая скорость: ' . $this->currentSpeed . ' км/ч.' . PHP_EOL;
            $this->engineRunning = true;
        }
    }

    public function stopEngine()
    {
        if ($this->engineRunning and $this->currentSpeed == 0) {
            echo 'Останавливаем двигатель! Текущая скорость: ' . $this->currentSpeed . ' км/ч.' . PHP_EOL;
            $this->engineRunning = false;
        }else if ($this->engineRunning and $this->currentSpeed !== 0) {
            echo "Невозможно остановить двигатель на ходу! Необходимо сбросить скорость. Текущая скорость: " . $this->currentSpeed . " км/ч." . PHP_EOL;
        } else {
            echo 'Двигатель уже остановлен! Невозможно остановить повторно!' . PHP_EOL;
        }
    }

    abstract function speedUp();

    abstract function speedDown();



}