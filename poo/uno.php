<?php
//queremos declara una persona y un empleado
require "Persona.php";
require "Empleado.php";


$persona=new Persona("Juan", "Almeria");
$empleado=new Empleado("Ana", "Granada", "Jefa", "Calle Betis");
echo $persona;
echo $empleado;