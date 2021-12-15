<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
      
        $max = 0;
        $pais_max="";
        foreach($paises as $pais => $info){
            if($info["Poblacion"]> $max){
                $pais_max = $pais;
                $max = $info["Poblacion"];
            }
        }
    
      echo "El páis con más población es: ".$pais_max." con ".$paises[$pais_max]['Poblacion']." habitantes<br>";
      echo "Sus ciudades son:<br> ";
      foreach($ciudades[$pais_max] as $cudad){
          echo $cudad." ";
      }
      

    ?>
</body>
</html>