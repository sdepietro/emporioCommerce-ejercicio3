<?php
namespace App\Interfaces;

interface Motor
{
    public function encender();
    public function apagar();
    public function cambiarAceite(Aceite $aceite);
}

