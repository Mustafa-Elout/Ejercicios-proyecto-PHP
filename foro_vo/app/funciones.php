<?php
function usuarioOk($usuario, $contraseña) :bool {
  //aquí verifco que se cumple que el usurio tenga 8 o más dígitos y que la contraseña sea el usuario alreves
   return (strlen($usuario)>=8) && ($contraseña==strrev($usuario));

}
function numPalabras(){
   //Convierto el texto en un array por palabras
   $palabras=explode(' ',$_REQUEST['comentario']);
   //cuento las palabras que hay en el array
   return count($palabras);
}

function LetraRepetida()
{
   $texto=$_REQUEST['comentario'];
   //creamos un array con las letras
   $arrayLetras = str_split($texto);
   //Cuento cuantas veces se repite una letra y lo almaceno en un array y lo ordeno
   $letras = array_count_values($arrayLetras); 
   arsort($letras); 
   //cojo el primer valor que es el que mñas se repite
   return array_key_first($letras);
}

function palabraRepetida(){
   $texto=$_REQUEST['comentario'];
   //creo un array de palabras
   $arrayPalabras=explode(" ", $texto);
   //Cuento las veces que se repite la plabara y lo almaceno en un array
   $arrayCountPalabras = array_count_values($arrayPalabras);
   arsort($arrayCountPalabras);
   //devuelvo la primera posición del array
   $primera=array_key_first($arrayCountPalabras);
   if($arrayCountPalabras[$primera]>1){
   return $primera;
   }else{
      return "No hay palabras repetidas";
   }
}


?>
