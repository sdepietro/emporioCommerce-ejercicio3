<?php
namespace App\Classes;


use App\Interfaces\Aceite;
use App\Interfaces\Motor;

class Barco implements Motor
{
    private static $instancia;

    public static function singleton()
    {
        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        }
        return self::$instancia;
    }

    public function encender()
    {

    }

    public function apagar()
    {

    }

    public function cambiarAceite(Aceite $aceite)
    {

    }
}