<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $num = 4;
    //1.- Busquemos y contemos la cantidad de divisores de $num
    $cont = 0;
    echo "Los divisores de $num son:<br>";
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            echo "$i, ";
            $cont++;
        }
    }

    echo "<br>$num tiene un total de $cont divisores";
    //2.- ALGORITMO QUE ME DIGA SI UN NUMERO DADO ES PRIMO O NO
    echo "<hr>";
    $num = 100000000000000000000000;
    $flag = true;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $flag = false;
            break;
        }
    }
    echo ($flag) ? "<br> El Número $num SI es primo" : "<br> El número $num NO es primo";
    //3.- Programa que me enseñe los primos entre dos numeros dados y me diga la cantidad, ambos mayor que 100

    $num1 = 100;
    $num2 = 1000;
    $cont = 0;
    echo "<hr>";
    echo "Los números primos entre $num1 y $num2 son:<br>";
    for ($cand = $num1; $cand <= $num2; $cand++) {
        $flag = true;
        for ($i = 2; $i < $cand; $i++) {
            if ($cand % $i == 0) {
                $flag = false;
                break;
            }
        }
        if ($flag) {
            echo "$cand, ";
            $cont++;
        }
    }
    echo "<br>Hay un total de $cont numeros primos";
    //4.- Programa que muestre la cantidad de numeros primos
    //indicadas a partir de un numero indicado por ejemplo
    //los primeros 43 numeros primos a partir de 100
    $cant = 5;
    $inicio = 10;
    $encontrados = 0;
    echo "<hr>";
    echo "Los <b>$cant</b> primeros numeros primos a partir de <b>$inicio</b> son:<br>";
    do {
        $flag = true;
        for ($i = 2; $i < $inicio; $i++) {
            if ($inicio % $i == 0) {
                $flag = false;
                break;
            }
        }
        if ($flag) {
            echo "$inicio, ";
            $encontrados++;
        }
        $inicio++;
    } while ($encontrados < $cant);

    //5.- Dados un numero y una cantidad mostraremos una cantidad de numeros
    //multiplos de 7 a partir del numero dado
    //ejmplo si el numero es 8 y la cantidad 4 mostraré 14, 21, 28, 35
    $num = 8;
    +$cant = 4;
    $cont = 1;
    echo "<hr>Los primeros $cant numeros multiplos de 7 a partir de $num son: <br>";
    for ($i = $num; $cont <= $cant; $i++) {
        if ($i % 7 == 0) {
            echo "$i, ";
            $cont++;
        }
    }
    //6.- Mostrar y contar todos los numeros multiplos de 7 entre dos numeros dados
    $num1 = 100;
    $num2 = 200;
    $cont = 0;
    echo "<hr>Los multiplos de 7 entre $num1 y $num2 son: <br>";
    for ($i = $num1; $i <= $num2; $i++) {
        //if($i%7==0)
        if (!($i % 7)) {
            echo "$i, ";
            $cont++;
        }
    }
    echo "<br>Hay un total de $cont múltiplos.";



    ?>
</body>

</html>