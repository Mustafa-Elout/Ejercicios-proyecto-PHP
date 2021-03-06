<?php
include_once "funciones.php";


function accionDetalles($id){
    $usuario = $_SESSION['tuser'][$id];
    $nombre  = $usuario[0];
    $login   = $usuario[1];
    $clave   = $usuario[2];
    $comentario=$usuario[3];
    $orden = "Detalles";
    include_once "layout/formulario.php";
    exit();
}

function accionAlta(){
    $nombre  = "";
    $login   = "";
    $clave   = "";
    $comentario = "";
    $orden= "Nuevo";
    include_once "layout/formulario.php";
    exit();
}

function accionPostAlta(){
 
    limpiarArrayEntrada($_POST); //Evito la posible inyección de código
    $nuevo = [ $_POST['nombre'],$_POST['login'],$_POST['clave'],$_POST['comentario']];
    $_SESSION['tuser'][]= $nuevo;  
}

function accionBorrar($id){
    unset($_SESSION['tuser'][$id]);
    $_SESSION['tuser']=array_values($_SESSION['tuser']); 
}

function accionModificar($id){
    $usuario = $_SESSION['tuser'][$id];
    $nombre  = $usuario[0];
    $login   = $usuario[1];
    $clave   = $usuario[2];
    $comentario=$usuario[3];
    $orden = "Modificar";
    include_once "layout/formulario.php";
    exit();
}

function accionTerminar(){
    echo'<script>
    alert("desea guardar los datos");
    </script>';
    volcarDatos($_SESSION['tuser']);
    session_destroy();
    
    exit();
}

function accionPostModificar(){
    for ($i=0; $i < count($_SESSION['tuser']); $i++) { 
        if($_SESSION['tuser'][$i][1]==$_POST['login']){
            $nuevo = [ $_POST['nombre'],$_POST['login'],$_POST['clave'],$_POST['comentario']]; 
            $_SESSION['tuser'][$i]= $nuevo;
        }
    } 
}
