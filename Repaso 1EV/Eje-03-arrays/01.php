<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>

</head>
<body>
    <?php
/*Rellenar un array con 20 números aleatorios entre 1 y 10 y mostrar el contenido del array  mediante una tabla de una fila en 
HMTL. Mostrar a continuación el valor máximo, el mínimo y el  valor que mas veces se repite. (Nota definir funciones para cada caso) */
$array=array();
$msg="<table style='border: 1px solid black; border-collapse:collapse';><tr>";
    for ($i=0; $i < 20; $i++) { 
        $num=random_int(1,10);
        array_push($array,$num);
    }
    
    for ($i=0; $i <count($array) ; $i++) { 
        $msg.="<td style='border: 1px solid black; padding: 5px';>".$array[$i]."</td>";
    }
    $msg.="</tr></table><br>";
    $msg.="El valor máximo es: ".max($array)."<br>";
    $msg.="El valor mínimo es: ".min($array)."<br>";
    $msg.="El valor que más se repite es: ".moda($array);

    echo $msg;

   function moda($array)
    {
        $valor=0;
        $numMaxRep=0;
        for ($i=0; $i <count($array) ; $i++) { 
            $veces=0;
            for ($j=0; $j < count($array); $j++) { 
                if ($array[$i]==$array[$j]) {
                    $veces++;
                }
            }
            if($veces>$numMaxRep){
                $valor=$array[$i];
                $numMaxRep=$veces;
            }
        }
        return $valor;
    }
    ?>
</body>
</html>