<?php
session_start();
if (! isset ( $_SESSION['saldo'])) {
    $_SESSION ['saldo'] = 0 ;
}


if ( !isset($_REQUEST['Orden']) ){
    include_once 'minibanco.php';
} else{
    switch ($_REQUEST['Orden']){
        case "Ingreso":
            if($_POST['importe']>0 and is_numeric($_POST['importe'])){
            $_SESSION["saldo"]+=$_POST['importe'];
                $msg=" Operación realizada";
            }else{
                $msg= " Importe Erróneo o importe menor de 0";
                include_once 'minibanco.php';
            }
        
            break;
        case "Reintegro":
            if( $_POST['importe'] < $_SESSION["saldo"] and $_POST['importe']>0 and is_numeric($_POST['importe'])){
                $_SESSION["saldo"]-=$_POST['importe'];
                $msg=" Operación realizada";
                }else{
                    $msg=  " Importe Erróneo o
                    importe superior al saldo";
                    include_once 'minibanco.php';
                }
            break;
        case "Ver saldo":
            $msg= " Se saldo actual es ".$_SESSION['saldo']." Euros";

            break; 
        case "Terminar":
            session_destroy();
            break; 
   
    }
}
header("Location: minibanco.php?msg=".urlencode($msg));
?>