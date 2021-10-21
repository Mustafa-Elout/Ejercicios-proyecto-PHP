<html>
<head>
<title>Procesa una subida de archivos </title>
<meta charset="UTF-8">
</head>
<?php
// se incluyen esta tabla de  códigos de error que produce la subida de archivos en PHPP
// Posibles errores de subida segun el manual de PHP
$codigosErrorSubida= [ 
    UPLOAD_ERR_OK         => 'Subida correcta',  // Valor 0
    UPLOAD_ERR_INI_SIZE   => 'El tamaño del archivo excede el admitido por el servidor',  // directiva upload_max_filesize en php.ini
    UPLOAD_ERR_FORM_SIZE  => 'El tamaño del archivo excede el admitido por el cliente',  // directiva MAX_FILE_SIZE en el formulario HTML
    UPLOAD_ERR_PARTIAL    => 'El archivo no se pudo subir completamente',
    UPLOAD_ERR_NO_FILE    => 'No se seleccionó ningún archivo para ser subido',
    UPLOAD_ERR_NO_TMP_DIR => 'No existe un directorio temporal donde subir el archivo',
    UPLOAD_ERR_CANT_WRITE => 'No se pudo guardar el archivo en disco',  // permisos
    UPLOAD_ERR_EXTENSION  => 'Una extensión PHP evito la subida del archivo',  // extensión PHP

]; 
$mensaje = '';
$directorioSubida ='C:\Users\REALCASH\Desktop\imgusers';
$archivos=$_FILES['archivos']['name'];
$cantidadArchivos=count($archivos);
$tamanioArchivos=0;
// No se recibe nada, error al enviar el POST, se supera post_max_size
for($i=0;$i<$cantidadArchivos;$i++){
if (count($_POST) == 0 ){
   $mensaje= "  Error: se supera el tamaño máximo de un petición POST ";
  
// si no se reciben el directorio de alojamiento y el archivo, se descarta el proceso

} else 
    { // se reciben el directorio de alojamiento y el archivo 
     // debe permitir la escritua para Apache
    // Información sobre el archivo subido
    $nombreFichero   =   $_FILES['archivos']['name'][$i];
    $tipoFichero     =   $_FILES['archivos']['type'][$i];
    $tamanioFichero  =   $_FILES['archivos']['size'][$i];
    $temporalFichero =   $_FILES['archivos']['tmp_name'][$i];
    $errorFichero    =   $_FILES['archivos']['error'][$i];

   
    $tamanioArchivos+=$tamanioFichero;
    //Aquí compruebo si el tamaño del fichero es menor a 200KB
    if($tamanioFichero>200000){
        $mensaje .="¡Error! El fichero $nombreFichero es mayor a 200 KB".'<br>';
        break;
    }
    //Aquí compruebo que el tamaño de los ficheros no supere los 300KB
    if($tamanioArchivos>300000){
        $mensaje .="¡Error! Los ficheros pesan más de 300 KB".'<br>';
        break;
    }
    //Comprobamos que el archivo sea png o jpg
    if(!($tipoFichero=='image/png') && !($tipoFichero=='image/jpeg')){
        $mensaje .="¡Error! Formato incorrecto";
        break;
    }
    //
    if(file_exists($directorioSubida .'/'. $nombreFichero)===true){
        $mensaje .="¡Error! El archivo ya existe";
        break;
    }



    $mensaje .= 'Intentando subir el archivo: ' . ' <br />';
    $mensaje .= "- Nombre: $nombreFichero" . ' <br />';
    $mensaje .= '- Tamaño: ' . number_format(($tamanioFichero / 1000), 1, ',', '.'). ' KB <br />';
    $mensaje .= "- Tipo: $tipoFichero" . ' <br />' ;
    $mensaje .= "- Nombre archivo temporal: $temporalFichero" . ' <br />';
    $mensaje .= "- Código de estado: $errorFichero" . ' <br />';
    
    $mensaje .= '<br />RESULTADO<br />';


    // Obtengo el código de error de la operación, 0 si todo ha ido bien
    if ($errorFichero > 0) {
        $mensaje .= "Se ha producido el error nº $errorFichero: <em>" 
                     . $codigosErrorSubida[$errorFichero] . '</em> <br />';
    } else { // subida correcta del temporal
        // si es un directorio y tengo permisos     
         if ( is_dir($directorioSubida) && is_writable ($directorioSubida)) { 
            //Intento mover el archivo temporal al directorio indicado
            if (move_uploaded_file($temporalFichero,  $directorioSubida .'/'. $nombreFichero) == true) {
                $mensaje .= 'Archivo guardado en: ' . $directorioSubida .'/'. $nombreFichero . ' <br />';
            } else {
                $mensaje .= 'ERROR: Archivo no guardado correctamente <br />';
            }
        } else {
            $mensaje .= 'ERROR: No es un directorio correcto o no se tiene permiso de escritura <br />';
        }
    }
}
}
?>


<body>

<?= $mensaje; ?>
<br />
	<a href="selectmultiple.html">Volver a la página de subida</a>
</body>
</html>
