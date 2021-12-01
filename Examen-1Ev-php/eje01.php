<?php
$nombres = ["Juan","Pedro","María","Elena","Luis"];
$notas  = [7.5, 6.0, 7.8, 9.5, 3.5 ];
// Une los array en uno nuevo
$calificaciones = unir ($nombres, $notas);
// Creo un nuevo array
$datos = separar($calificaciones);
echo "<code><pre>";
print_r($calificaciones);
print_r($datos);
echo "</pre></code>";

function unir($nombres, $notas){
    $resu=array();
    for ($i=0; $i < count($nombres); $i++) { 
        $resu[$nombres[$i]]=$notas[$i];
    }
    return $resu;
}

function separar($calificaciones){
    $resu=array();
    $resu[0]=array_keys($calificaciones);
    $resu[1]=array_values(($calificaciones));
    return $resu;
}