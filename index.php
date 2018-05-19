<?php
include "App/Interfaces/Motor.php";
include "App/Interfaces/Aceite.php";


include "App/Classes/Auto.php";
include "App/Classes/Avion.php";
include "App/Classes/Barco.php";


use App\Classes\Auto;
use App\Classes\Avion;
use App\Classes\Barco;

$fiat = new Auto();
$hercules = new Avion();

$titanic = Barco::singleton();