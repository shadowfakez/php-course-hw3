<?php

class Engine
{

    protected $maxSpeed; // максимальная скорость

    protected $currentSpeed = 0; // текущая скорость

    protected bool $engineRunning = false; // работает ли двигатель сейчас

    public function start()
    {
        if ($this->engineRunning) {
            echo 'Двигатель уже работает! Невозможно завестись повторно!' . PHP_EOL;
        } else {
            echo 'Заводим двигатель! Текущая скорость: ' . $this->currentSpeed . ' км/ч' . PHP_EOL;
            $this->engineRunning = true;
        }

    }

    public function stop()
    {
        /*
         * stop engine
         * выключаем двигатель - текущая скорость 0 км/ч
         * если пытаемся выключить двигатель на скорости более 5 км/ч
         * выключить двигатель на скорости х невозможно - необходимо сбросить скорость
         * если пытаемся выключить двигатель, который уже выключен
         * двигатель уже выключен
         * */
        if ($this->engineRunning) {
            echo 'Останавливаем двигатель! Текущая скорость: ' . $this->currentSpeed . ' км/ч' . PHP_EOL;
            $this->engineRunning = false;
        } else {
            echo 'Двигатель уже остановлен! Невозможно остановить повторно!' . PHP_EOL;
        }

    }

    public function up()
    {

    }

    public function down()
    {
        // TODO: Implement down() method.
    }


}