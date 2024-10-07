<?php
//Escribe una función llamada fibonacci() que calcule el enésimo término de la secuencia de
//Fibonacci utilizando recursividad.
function fiboNacci(int $num): Int{
    if($num==0) return 0;
    if($num==1) return 1;
    return fiboNacci($num-1)+fiboNacci($num-2);
}
function fiboNacci1(int $num): Int{
    return match(true){
        $num==0=>0,
        $num==1=>1,
        default=>fiboNacci1($num-1)+fiboNacci1($num-2)
    };
}
for($i=0; $i<=7; $i++){
    echo "$i----->".fiboNacci1($i)."<br>";
}