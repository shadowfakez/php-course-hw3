<?php

class Autoloader
{
    public static function autoload($className)
    {
        $filename = __DIR__ . '/classes/' . $className . '.php';
        if (file_exists($filename)) {
            include $filename;
        } else {
            include __DIR__ . '/interfaces/' . $className . '.php';
        }
    }
}

