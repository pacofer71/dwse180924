<?php
$numero=3456789;
echo "$numero<br>";
$longitud=strlen($numero); //6
for($i=$longitud-1; $i>=0; $i--){
    $potencia=(int) pow(10, $i);
    $des[] = (int) ($numero/$potencia);
    $numero%=$potencia; //$numero = $numero%$potencia
}

var_dump($des);
echo "<br>";
$indice=$longitud-1;
foreach($des as $cifra){
    echo "$cifra X 10<sup>".$indice--."</sup> + ";
    if($indice==0) break;
}
echo $des[$longitud-1];
