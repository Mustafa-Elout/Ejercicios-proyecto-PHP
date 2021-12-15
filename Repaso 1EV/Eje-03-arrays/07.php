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
      foreach($paisesElegidos as $pais){
          echo "País: ".$pais.", con ".$paises[$pais]['Poblacion'];
          echo "Lista de Ciudades: ";
          foreach($ciudades[$pais] as $ciudad){
              echo $ciudad." ";
          }
          ?>
          <br>Enlace a gogle maps:
          <a href="https://www.google.es/maps/place/<?= $pais?>">Maps</a><br>
          <?php
      }
?>