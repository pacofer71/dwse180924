<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // if if else
        //operadores logicos && || ! == ===
        $num1=156;
        $num2=456;
        //ordenar de menor a mayor --> 12, 56
        if($num1<$num2){
            echo "Los numeros ordenados son: $num1, $num2";
        }elseif($num2<$num1){
            echo "Los numeros ordenados son: $num2, $num1";
        }else{
            echo "Los numeros son iguales $num1=$num2";
        }
        //&& === ||
        $numero1=100;
        $numero2="100";
        if($numero1===$numero2){
            echo "<br>Los numeros son iguales";
        }else{
            echo "<br>Los numeros NO son iguales";
        }
        //-------------------------------Bucle for() while do while
        for($i=0; $i<100; $i++){
            echo "$i, ";
        }
        echo "<hr>";
        for($i=0;;$i+=5){
            echo "$i, ";
            if($i==100) break;
        }
        //// ++$num $num++
        echo "<br>";
        $var=56;
        echo ++$var."<br>";
        echo $var;
        echo "<br>";
        $var=56;
        echo $var++."<br>";
        echo $var;
        /// += *=  -= .=
        $numero=100;
        $numero=$numero+50; //$numero+=50;
        $valor="Valor 1";
        $valor.=", Valor 2"; //$valor=$valor.", valor2";
        echo "<br>";
        echo $valor;
        //------------------------------------ Operador ternario
        $pass="secret0";
        if($pass=="secret0"){
            echo "<br> Login correcto";
        }else{
            echo "<br>Login Incorrecto !!!";
        }
        echo ($pass=='secret0pp') ? "<br> Login correcto" : "<br> Login incorrecto";

        $operacion="sumar";
        $num1=90;
        $num2=100;
        $valor=($operacion=='sur') ? $num1+$num2 : $num1-$num2;
        echo "<br>El valor es $valor"; 
        //-----------bucle while
        echo "<hr>";
        $inicio=0;
        do{
            echo "<br>";
            echo $inicio++;  //$++inicio
        }while($inicio<100);
        $inicio=0;

        while($inicio<100){
            echo "<br>";
            echo $inicio++;
        }
        $num=45;
        while(true){
            echo "<br>". $num++;
            if($num==100) break;
        }
    ?>
</body>
</html>