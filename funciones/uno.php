<?php
function suma($a, $b)
{
    return $a + $b;
}
function saludo(): void
{
    echo "<br>Hola Mundo";
}

function suma1(int|float $a, int|float $b): int|float
{
    return $a + $b;
}

function isPrimo(int $num): bool
{
    if ($num <= 1) return false;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

$num1 = 56;
$num2 = 67.89;
echo "<br>La suma de $num1 y $num2 es: " . suma($num1, $num2);
saludo();
$num1 = 56;
$num2 = 67.89;
echo "<br>La suma de $num1 y $num2 es: " . suma1($num1, $num2);
//---------------
echo "<br>";
$candidato = 13.78;
echo isPrimo($candidato) ? "$candidato ES Primo" : "$candidato NO ES primo";
//---------------------------------------------------------------------------------
function saludo1(string $nombre = "Anónimo")
{ //valor por defecto
    echo "<br>Hola usuario <b>$nombre</b>";
}
saludo1();
saludo1("Juan Manuel");

function saludo2(string $mensaje, string $nombre = "Anónimo")
{ //valor por defecto
    echo "<br>$mensaje <b>$nombre</b>";
}
saludo2("Hola usuario: ", "Manolo");
saludo2("Hola usuario: ");


function saludo3(string $mensaje = "Hola usuario: ", string $nombre = "Anónimo")
{ //valor por defecto
    echo "<br>$mensaje <b>$nombre</b>";
}
saludo3("Hola valiente usuario: ", "Manolo");
saludo3("Hola usuario: ");
saludo3(nombre: "Juan Manuel");
saludo3();

function prueba(string $cad = "No pasaste la cadena", int $numero = 56)
{
    echo "<br>$cad: $numero";
}
prueba("kiko", 34);
prueba();
prueba("HOLA");
prueba(160);
//Nombre en los argumentos
function datos($nombre, $edad, $email)
{
    echo "<br> Nombre: $nombre, Edad: $edad, Correo Electronico: $email";
}
datos(email: 'manolo@email.es', nombre: 'Manuel', edad: 67);
datos('manolo@email.es', 'Manuel', 67);

//--------------------------------------------------------------------------------------
//ámbito de las variable
function cambiarNombre(string $usuario)
{
    $usuario = "user000";
    echo "<br>la variable \$usuario dentro de la funcion: $usuario";
}
$usuario = "user567";
echo "<br>la variable \$usuario fuera de la funcion y antes de llamarla: $usuario";
cambiarNombre($usuario);
echo "<br>la variable \$usuario fuera de la funcion y después de llamarla: $usuario";
echo "<hr>";

function cambiarNombre1(string &$us)
{
    $us = "user000";
    echo "<br>la variable \$us dentro de la funcion: $us";
}
$usuario = "user567";
echo "<br>la variable \$usuario fuera de la funcion y antes de llamarla: $usuario";
cambiarNombre1($usuario);
echo "<br>la variable \$usuario fuera de la funcion y después de llamarla: $usuario";

echo "<hr>";
function cambiarNombre2(string $usuario)
{
    global $usuario;
    $usuario = "user000";
    echo "<br>la variable \$us dentro de la funcion: $usuario";
}
$usuario = "user567";
echo "<br>la variable \$usuario fuera de la funcion y antes de llamarla: $usuario";
cambiarNombre2($usuario);
echo "<br>la variable \$usuario fuera de la funcion y después de llamarla: $usuario";


echo "<hr>";
function pruebaGlobal()
{
    global $dato;
    $dato = 67;
}
function pruebaGlobal1(&$valor)
{
    $valor = 67;
}
$dato = 100;
pruebaGlobal();  //dato=67
echo "<br><br> dato=$dato";
pruebaGlobal1($dato);  //dato=67
$nombre = "Manolo";
pruebaGlobal1($nombre); //nombre=67

//---------------funciones con numeo de parametros indefinidos
function sumaMultiple(...$numeros): int
{ //sumaMultiple(array $numeros){}
    echo "<br><b>Sumaré: " . count($numeros) . " Números</b></br>";
    $suma = 0;
    foreach ($numeros as $item) {
        $suma += $item;
    }
    return $suma;
}

$suma = sumaMultiple(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo "<br>La suma es $suma";
$suma = sumaMultiple(5, 15);
echo "<br>La suma es $suma";

function saludosMultiples(...$nombres)
{
    foreach ($nombres as $item) {
        echo "<br>Hola $item, buenos días";
    }
}
echo "<hr>";
saludosMultiples("Juan", "Ana", "Pedro", "Ivan");

function saludosMultiples1(array $nombres)
{
    foreach ($nombres as $item) {
        echo "<br>Hola $item, buenos días";
    }
}
echo "<hr>";
saludosMultiples1(["Juan", "Ana", "Pedro", "Ivan"]);
