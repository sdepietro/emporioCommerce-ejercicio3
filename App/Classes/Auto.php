<?php
namespace App\Classes;



use App\Interfaces\Aceite;
use App\Interfaces\Motor;

class Auto implements Motor
{
    private $encendido = false;


    public function encender()
    {
        $this->encendido = true;
    }

    public function apagar()
    {
        $this->encendido = false;
    }

    public function cambiarAceite(Aceite $aceite)
    {
    }

    public function getEncendido()
    {
        return $this->encendido;
    }
}