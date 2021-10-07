<?php

interface ReverseMovableInterface
{
    /**
     * задний ход - давим на газ
     * @return mixed
     */
    public function reverseOn();

    /**
     * задний ход - давим на тормоз
     * @return mixed
     */
    public function reverseOff();
}