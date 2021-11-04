<?php
    if($_POST["accion"] == "Anotar"){
        if ( isset ($_SESSION['pedidos'][$_POST['fruta']]) ){
        $_SESSION['pedidos'][$_POST['fruta']] += $_POST['cantidad'];
        }else {
        $_SESSION['pedidos'][$_POST['fruta']] = $_POST['cantidad'];
        }
    }
    echo "Este es su pedido :";
    echo "<table style='border: 1px solid black;'>";
    foreach ( $_SESSION['pedidos'] as $key => $value) {
    echo "<tr><td><b>".$key."</b><td></td><td>".$value."</td></tr>";
    }
    echo "</table>";
    
    
    if( $_POST["accion"] == "Terminar"){
        echo "Muchas gracias, por su pedido.";
        ?>
        <input type="button" value=" NUEVO CLIENTE " onclick="location.href='<?=$_SERVER['PHP_SELF'];?>'">
       <?php
        session_destroy();
        exit;
    }
?>