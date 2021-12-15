<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    
    <?php
    //02
		$medios =  [ "El Pais" => "https://elpais.com/",
        "El Mundo" => "https://www.elmundo.es",
        "Marca" => "https://www.marca.com", 
        "Antena3" => "https://www.antena3.com", 
        "La Razón" => "https://www.larazon.es"
       ];
       $msg="<h1>Lista de Medios</h1><ul>";
       foreach($medios as $clave=>$valor){
        $msg.="<li><a href=\"$valor\">$clave</a></li>";
       }
       $msg.="</ul>";
       $msg.="<br><br>";

       //03
       $num=array_rand($medios);
       $msg.="El Medio recomendado es: <a href=\"". $medios[$num]. "\">$num</a>";
       echo $msg;
    ?>
    
</body>
</html>