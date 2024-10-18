<?php
var_dump($_COOKIE);
    //verificaremos si es o no la 
    //primera visita y si no nos dirá la fecha de la ultima visita
    if(isset($_COOKIE['ultima_visita'])){
        $ultima_vez=$_COOKIE['ultima_visita'];
        echo "Tu ultima visita fué: ". date('d-m-Y, H:i:s', $ultima_vez);
    }else{
        echo "Esta es tu primera visita a nuestro sitio";
    }
    setcookie('ultima_visita', time() , time()+(365*24*60*60));
?>
