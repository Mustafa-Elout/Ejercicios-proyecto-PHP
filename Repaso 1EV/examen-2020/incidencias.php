<?php
$incidencias=array($_POST['nombre'],$_POST['resumen'],$_POST['prioridad'],$_SERVER['SERVER_ADDR'], date("d:m:Y G:i"));
$parte="";
$cont=0;
if (isset($_COOKIE['numincidencias'])){
    $cont = $_COOKIE['numincidencias'];
    if ($cont >= 3){
        Echo "Superado el número máximo de incidencias <br>";
        Echo "Espere 2 minutos para introducir otra o reinicie su navegador.";
        exit();
    }
}
for ($i=0; $i < count($incidencias); $i++) { 
    
    $parte.=$incidencias[$i].",";
    
}
$resu=@file_put_contents('incidencias.txt', $parte."\n", FILE_APPEND);
if (!$resu===false) {
    $cont++;
    setcookie('numincidencias',$cont,time()+2*60);
    echo "Muchas gracias ".$_POST['nombre'].", se ha anotado su incidencia. <br>";
}else{
    echo "Error no se ha podido anotar su incidencia <br>";
}
?>