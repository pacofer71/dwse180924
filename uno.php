<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <center>Página PHP</center>
    </h1>
    <?php
    echo "<b>Hola Mundo</b><br>" . PHP_EOL;
    echo "<i>Linea 2</i><br>" . PHP_EOL;
    echo "Linea 3" . PHP_EOL;
    echo "<hr>" . PHP_EOL;
    echo 'Hola Mundo';
    // Variables ............
    $num = 12;
    $nombre = "usuario";
    echo "<br>";
    echo "El numero es: " . $num . " y el nombre es: " . $nombre . "\n";
    echo "<br>";
    echo "El numero es: $num";
    echo "<br>";
    echo 'El numero es: $num';
    echo "<br>";
    echo "El precio es \$precio";
    echo "<br>";
    echo "El valor de \$num es $num";
    echo "<br>";
    echo 'El valor de $num es ' . $num;
    echo "<br>";
    echo "El nombre es \"$nombre\"";
    echo "<br>";
    echo 'El nombre es "' . $nombre . '"';
    echo "<br>";
    echo "El nombre es '$nombre'";
    echo "<br>";
    $num1 = "Manolo";
    echo "El tipo de \$num1 es: " . gettype($num1);
    $num1 = 45;
    echo "<br>";
    echo "El tipo de \$num1 es: " . gettype($num1);
    // Casting
    $nombre = "50";
    echo "<br>";
    echo "El tipo de \$num1 es: " . gettype($nombre);
    $valor = $nombre + $num1;
    echo "<br> El valor de \$valor es $valor y el tipo es: " . gettype($valor);
    $valor1="AAAAA4509";
    $numero= (Int) $valor1;
    echo "<br>";
    echo "El tipo de \$numero=$numero es: ".gettype($numero);
    echo "<hr>";
    
    $numero=0;
    $valor=(bool) $numero;
    echo "<br>";
    //echo "-->".gettype($valor);
    //echo "<br>valor = $valor";
    if($valor){
        echo "cierto";
    }else{
        echo "falso";
    }



    ?>
</body>

</html>