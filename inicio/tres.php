<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: olive">
    <table border=4 align=center cellpadding=4 cellspacing=4>
        <?php
        $num = 17;
        for ($i = 1; $i <= $num; $i++) {
            echo "<tr>";
                echo "<td>$num</td>";
                echo "<td>X</td>";
                echo "<td>$i</td>";
                echo "<td>=</td>";
                echo "<td>" . $num * $i . "</td>";
            echo "</tr>" . PHP_EOL;
        }
        ?>
    </table>
    <hr>
    <table border=4 align=center cellpadding=4 cellspacing=4>
        <?php
            $num=10;
            for($i=1; $i<=$num; $i++){
                $multiplicacion=$i*$num;
                echo <<< TXT
                    <tr>
                        <td>$num</td>
                        <td>X</td>
                        <td>$i</td>
                        <td>=</td>
                        <td>$multiplicacion</td>
                    </tr>           
                TXT;
            }
        ?>
    </table>
    

</body>

</html>