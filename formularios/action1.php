<?php
// $nombre=$_GET['name']; //
// $email=$_GET['email'];
// $pass=$_GET['pass'];
// var_dump($_POST);
// die();

$nombre=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$prov=$_POST['provincia'];
$color=(isset($_POST['color'])) ? $_POST['color'] : "Ninguno";
//$color=$_POST['color']; No suele ser buena idea;
$aficiones=[];
$aficiones = (isset($_POST['aficiones'])) ? $_POST['aficiones'] : [];

echo "El nombre es $nombre, el email $email, el password $pass, la provincia es: $prov
, el color elegido es $color<br>";

if(count($aficiones)){
  foreach($aficiones as $item){
    echo "$item.<br>";
  }  
}else{
    echo "<br> No elegiste ninguna afición";
}

echo "<br>";
echo "<a href='uno.php'>Volver</a>";