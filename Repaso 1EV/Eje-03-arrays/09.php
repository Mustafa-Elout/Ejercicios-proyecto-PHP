<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
table, th, td {
	border: 1px solid black;
	border-collapse: collapse;
}
</style>
</head>
<?php
    $temperaturas =  [ 6, 10, 12, 14,16 ,20 ,25 , 30, 18, 15, 14, 8];
    $meses = ['enero','febrero', 'marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre']; 
    $mestemperaturas =[];
    //Creamos el array asociativo
    for ($i=0; $i <count($meses) ; $i++) { 
        $mestemperaturas[$meses[$i]]=$temperaturas[$i];
    }
    //o con $mestemperaturas = array_combine($meses, $temperaturas);
?>  
<body>
  <table style='border: 1px solid black; border-collapse: collapse;'>
  <?php
    for ($i=0; $i <count($meses) ; $i++) { ?>
        <tr><td><?php echo $meses[$i];?></td><td>
    <?php
        for ($j=0; $j <$mestemperaturas[$meses[$i]] ; $j++) { 
            echo "<img src ='img/tenis.png' style = width:2px;>";
        }
        echo  "  ".$mestemperaturas[$meses[$i]]. " ºC </td></tr>";
    }?>
    </table>
</body>
</html>
