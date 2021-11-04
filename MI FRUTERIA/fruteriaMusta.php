<?php
session_start();
?>
<h1>La Frutería del siglo XXI</h1>
<?php
if ( isset($_GET['nombre'])){
    $_SESSION['nombre'] = $_GET['nombre'];
    $_SESSION['pedidos'] = [];
}

if (isset($_POST["accion"])) {
    include_once 'carrito.php';
}

if(!isset ($_SESSION['nombre'])){
    include_once 'entrada.php';
}else{
   include_once 'realizarCompra.php';
}


?>