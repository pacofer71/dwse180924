<?php
$provincias=['Sevilla', 'Almeria', "Jaén", "Huelva", "Cadiz"];
$valores=array("uno", "dos", "tres"); //Es lo mismo que la forma de arriba
echo "El tipo de \$provincias es: ".gettype($provincias)."<br>";
//para mostrar un array
print_r($provincias); //solo para arrays
echo "<br>";
var_dump($provincias); //para cualquier variable u objeto
//numero de elementos de un array
echo "<br> El array provincias tiene ".count($provincias). " elementos";

echo "<hr>";
for($i=0; $i<count($provincias); $i++){
    echo $provincias[$i]."<br>";
}
//podemos acceder a una provincia concreta
echo "<br>La provincia de indice 2 es: {$provincias[2]}";

//---------------------------------------------------------------------------
echo "<hr>";
$provincias=['Sevilla', 'Almeria', "Jaén", "Huelva", "Cadiz"];
$provincias[]="Madrid";
$provincias[]="Barcelona";

print_r($provincias);
echo "<hr>";
$provincias[0]="Hispalis";
echo "<br>";
print_r($provincias);
//
echo "<hr>";
$provincias[19]="Murcia";
echo "<br>";
print_r($provincias);
//esto no funcionaria porque me faltan indices
echo "<hr>";
for($i=0; $i<count($provincias); $i++){
    echo $provincias[$i]."<br>";
}
//--------------------------
$provincias[]="YYYYYYYYYYY"; //continuarça a partir del indice mas alto
echo "<br>";
print_r($provincias);
//---------------
echo "<hr>";
$provincias[-23]="Bilbao";
echo "<br>";
print_r($provincias);
$provincias[7]="Cordoba";
echo "<br>";
print_r($provincias);
//--------------------------------------------
$provincias[]=34;
$provincias[]=true;
$provincias[]=34.78;
echo "<br><hr><hr>";
var_dump($provincias);
//-------------------------------------------------
echo "<hr>Recorriendo el array elemento a elemento mostrando solo valores: <br>";
foreach($provincias as $prov){
    echo "$prov<br>";
}
//-------------------------------------------------
echo "<hr>Recorriendo el array elemento a elemento y mostrando indices y valores: <br>";
foreach($provincias as $indice=>$valor){
    echo "indice=$indice, valor=$valor<br>";
}
echo "<hr>";
foreach($provincias as $k=>$v){
    echo "indice=$k, valor=$v<br>";
}
//------ Array Asociativos
$nombres=[
    'usuario1'=>'Juan',
    'usuario2'=>'Pedro',
    'usuario3'=>'Ana'
];
echo "<hr><hr><hr>";
echo $nombres['usuario1'];
$nombres['usuario4']='Lola';
echo "<br>";
print_r($nombres);
$nombres[]='Lolita';
echo "<br>";
print_r($nombres);
$nombres[]='Juanito';
echo "<br>";
print_r($nombres);
echo "<br>Historia Rara<br>";
$nombres['usuario23']='Zacarias';
echo "<br>";
print_r($nombres);
echo "<hr>";
foreach($nombres as $indice=>$valor){
    echo "indice=$indice, valor=$valor<br>";
}










//como es un archivo php donde no metemos <html><head></head></html> ...
// es innecesario cerrarlo con ?>