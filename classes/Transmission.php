<?php

include_once 'Engine.php';

class Transmission extends Engine
{
    protected int $nOfGears; // кол-во передач

    protected int $currentGear = 0; // работающая передача

    public function __construct($nOfGears, $currentGear)
    {

        $this->nOfGears = $nOfGears;

        $this->currentGear = $currentGear;

    }


    public function speedUp()
    {
//        "Увеличиваем скорость! Включаем первую передачу! Текущая скорость 50 км/ч."
//        "Увеличиваем скорость! Включаем вторую передачу! Текущая скорость 50 км/ч."
//        "Увеличиваем скорость! Включаем третью передачу! Текущая скорость 100 км/ч."
//        "Увеличиваем скорость! Включаем четвертую передачу! Текущая скорость 150 км/ч."
//        "Увеличиваем скорость! Включаем пятую передачу! Текущая скорость 200 км/ч. Достигнута максимальная скорость, дальнейшее ускорение невозможно."
        if ($this->engineRunning) {
            echo "Увеличиваем скорость! Включаем первую передачу! Текущая скорость 50 км/ч." . PHP_EOL;
        }
    }

    public function speedDown()
    {


    }

}