<?php
session_start();
if (! isset($_SESSION['palabrasecreta'])) {
    $_SESSION['palabrasecreta'] = elegirPalabra();
    $_SESSION['letrasusuario'] = ""; // Inicialmente no tiene ninguna letra  
    $_SESSION['fallos'] = 0; // Inicialmente no hay ningún fallo
}
comprobarLetra($_GET['letra'],$_SESSION['palabrasecreta']);

echo "PALABRA: ".generaPalabraconHuecos($_SESSION['letrasusuario'],$_SESSION['palabrasecreta']);

echo "<br>Has cometido ".$_SESSION['fallos']." fallos";
?>
<form method="get" action="<?=$_SERVER['PHP_SELF'];?>">
Introduzca la letra: <input type="text" name="letra">
</form>

<?php
$_SESSION['letrasusuario'].=$_GET['letra'];
$letra=$_SESSION['letrasusuario'];


if($_SESSION['fallos'] >= 5){
    echo "Superodo el máximo de fallos";
    $_GET['letra']="";
    session_destroy();
   echo '<a href="examen-php.php">Otra partida</a>';
}
if($_SESSION['aciertos'] >= strlen($_SESSION['palabrasecreta'])*2){
    echo "enorabuena";
    $_GET['letra']="";
    session_destroy();
   echo '<a href="examen-php.php">Otra partida</a>';
}

//FUNCIONES 

function elegirPalabra(){
    static $tpalabras = ["Madrid","Sevilla","Murcia","Málaga","Mallorca","Menorca"];
   // COMPLETAR
   $num=random_int(0, count($tpalabras)-1);
   // Devuelve una palabra al azar 
   return $tpalabras[$num];   
}

function comprobarLetra($letra,$cadena){
    // COMPLETAR
    if(strpos($cadena,$letra)==true){
     
        return true;
    }
    $_SESSION['fallos'] ++;
    
    return false;
      // Devuelve true o false si la letra esta en la cadena  
}

/*
 * Devuelve una cadena donde aparecen las letras de la cadenapalabra en su posición    si cada letra se encuentra en la cadenaletras
 * 
 * Ej  generaPalabraconHuecos("aeiou"     ,"hola pepe") -->"-o-a--e-e"
 *     generaPalabraconHuecos("abcdefghi ","hola pepe") -->"h--a -e-e"
 * 
 */
$_SESSION['aciertos']=0;
function generaPalabraconHuecos ( $cadenaletras, $cadenapalabra) {
    
    // Genero una cadena resultado inicialmente con todas las posiciones con -
    $resu = $cadenapalabra;
    for ($i = 0; $i<strlen($resu); $i++){
        $resu[$i] = '-';
        for($j = 0; $j<strlen($cadenaletras); $j++){
            if($cadenapalabra[$i]==$cadenaletras[$j]){
                $resu[$i]=$cadenaletras[$j];
                
                $_SESSION['aciertos']++;
            }
            
        }
    }

    // COMPLETAR rellenado la cadena resu
    
  
    return $resu;
}

?>