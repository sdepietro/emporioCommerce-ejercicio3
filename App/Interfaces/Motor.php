<?php
namespace App\Interfaces;

use App\Classes\Aceite;

interface Motor
{
    public function encender();
    public function apagar();
    public function cambiarAceite(Aceite $aceite);
}

