<?php
    $paises = array(
        'Francia' => array("Capital" => "París", "Poblacion" => "50000000"),
        'España' => array("Capital" => "Madrid", "Poblacion" => "42000000"),
        'Italia' => array("Capital" => "Roma", "Poblacion"   => "46000000"),
        'Argentina' => array("Capital" => "Buenos Aires", "Poblacion" => "40000000"),
        'Colombia' => array("Capital" => "Bogotá", "Poblacion"  => "36000000"),
        'Chile' => array("Capital" => "Santiago", "Poblacion"   => "36000000"),
        'Suecia' => array("Capital" => "Estocolmo", "Poblacion" => "25000000"),
    );
    // Forma moderna, mas compacta
    $ciudades = [
        'Francia' =>    ["París","Burdeos","Niza","Lille","Nantes"],
        'España' =>     ["Madrid", "Barcelona","León","Sevilla", "Valencia", "Málaga"],
        'Italia' =>     ["Roma", "Venecia","Florencia","Pisa", "Génova", "Milán", "Turín", "Nápoles"],
        'Argentina' =>  ["Buenos Aires", "Córdoba","Parana","Rosario"],
        'Colombia' =>   ["Bogotá", "Medellín","Cali","Barranquilla", "Bucaramanga"],
        'Chile' =>      ["Santiago", "Arica","Iquique","Osorno", "Viña del Mar"],
        'Suecia' =>   ["Estocolmo", "Upsala","Gotemburgo","Lund"],
      ];
      //ELIGE DOS PAISES AL AZAR Y LOS DEVUELVE EN UN ARRAY
      $paisesElegidos=array_rand($paises,2);
      echo "<table><tr><th>Pais</th><th>Capital</th><th>Población</th><th>Ciudades</th></tr>";
      foreach($paisesElegidos as $pais){
          echo "<tr><td>".$pais."</td>"."<td>".$paises[$pais]['Capital']."</td>"."<td>".$paises[$pais]['Poblacion']."</td>";
          echo "<td>";
          foreach($ciudades[$pais] as $ciudad){
              echo $ciudad." ";
          }
          echo "</td></tr>";

      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th{
            border: 2px solid black;
            border-collapse:collapse;
        }
    </style>
</head>
<body>
    
</body>
</html>