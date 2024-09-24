<?php
$andalucia = [
    'Almeria',
    'Cadiz',
    'Cordoba',
    'Huelva',
    'Granada',
    'Jaen',
    'Malaga',
    'Sevilla',
];
$extremadura = ['Badajoz', 'Caceres'];
$valencia = ['Alicante', 'Castellon', 'Valencia'];
$madrid = ['Madrid'];
$galicia=['La coruña', 'Lugo', 'Orense', 'Pontevedra'];
$comunidades = compact('andalucia', 'extremadura', 'valencia', 'madrid', 'galicia');
/*
$comunidades=[
    'andalucia'=>$andalucia,
    'extremadura'=>$extremadura,
    'valencia'=>$valencia,
    'madrid'=>$madrid,
];
*/
$aux = compact('andalucia');
var_dump($aux); //---------
/*
$aux=['andalucia'=>$andalucia];
*/
//pintemos $aux en una tabla
echo "<table align='center' border='3'>";
foreach ($aux as $nombre => $provs) {
    echo "<tr style='background-color: silver'>";
    echo "<td  colspan='" . count($provs) . "'>$nombre</td>";
    echo "</tr>";
    echo "<tr>";
    foreach ($provs as $item) {
        echo "<td>$item</td>";
    }
    echo "</tr>";
}
echo "</table>";
// Lo mismo en una lista
echo "<ol>";
foreach ($comunidades as $nombre => $provs) {
    echo "<li>".ucfirst($nombre)."</li>";
    echo "<ul>";
    foreach ($provs as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
}
echo "</ol>";
