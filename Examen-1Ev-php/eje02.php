<?php
if (  isset($_POST['orden'])){
    
    switch($_POST['orden']) {
        case "Consultar"    : $msg=accionConsultar($_POST['nombre']); include_once "eje02.html";break;
        case "Añadir": $msg=accionAñadir($_POST['nombre'],$_POST['telefono']);  include_once "eje02.html";break;
    }
    header("Location: eje02form.php?msg=".urlencode($msg));
}else{
    include_once "eje02.html";
}


function accionAñadir($nombre,$tlf){
    if(is_numeric($tlf) and $nombre!=null){
        $contacto=$nombre.','.$tlf;
        $resu=@file_put_contents('contactos.txt', $contacto."\n", FILE_APPEND);
        if (!$resu===false) {
            $msg= "Contacto anotado";
        }else{
            $msg=  "Error no se ha podido anotar su contacto <br>";
        }
    }else{
        $msg=  "El telefono introducido o nombre es erróneo";
    }
    return $msg;
}

function accionConsultar($nombre){
    if($nombre!=null){
    $contactos=VolcarDatos();
    
   
        for ($i=0; $i <count($contactos) ; $i++) { 
            foreach ($contactos[$i] as $key => $value) {
            if($key=$nombre){
                $tlf=$value;
                break;
            }
            }
        }
        $msg= "El telefono de ".$nombre." es: ".$tlf; 

        
    }else{
        $msg="El tnombre es erróneo";
    } 
    return $msg;  
}

 function volcarDatos(){
         // Si no existe lo creo
    $tabla=[]; 
    if (!is_readable('contactos.txt') ){
        // El directorio donde se crea tiene que tener permisos adecuados
        $fich = @fopen('contactos.txt',"w") or die ("Error al crear el fichero.");
        fclose($fich);
    }
    $fich = @fopen('contactos.txt', 'r') or die("ERROR al abrir fichero de usuarios"); // abrimos el fichero para lectura
    
    while ($linea = fgets($fich)) {
        $partes = explode(',', trim($linea));
        // Escribimos la correspondiente fila en tabla
        $tabla[]= [ $partes[0]=>$partes[1]];
        }
    fclose($fich);
    return $tabla;
 }
?>