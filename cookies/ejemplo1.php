<?php
if(isset($_POST['btn'])){
    setcookie('contador', '', time()-100);
    header("Location:ejemplo1.php");
    exit();

}
    //Ejemplo de cookie que cuenta cuantas veces he visitado la página
    if(isset($_COOKIE['contador'])){
        //Aumentamos el valor que tenia nuestra cookie contador
        $contador=$_COOKIE['contador']+1;
    }
    else{
        //es nuestra primera visita
        $contador=1;
    }
    //actualizo el vaor de la cookie, le daremos una duración de 30 dias por ejemplo  
    setcookie('contador', $contador, time()+(30*24*60*60));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Has visitado la página $contador veces, sigue así";
    ?>
    <br><br>
    <form action="ejemplo1.php" method="POST">
        <input type="submit" name="btn" value="Reestablecer Contador" />
    </form>
</body>
</html>