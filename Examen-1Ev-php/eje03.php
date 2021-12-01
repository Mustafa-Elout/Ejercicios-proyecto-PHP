<?php
$frutas=[];
if ( isset($_GET['Cambiar'])){
    for ($i=0; $i < count($_GET['listafrutas']) ; $i++) { 
        if (isset ($_GET['listafrutas'])){
            $frutas= $_GET['listafrutas'];
            var_dump($frutas);
            setcookie('galletadefrutas',implode(",",$frutas),time()+7 * 24 * 3600);//una semana
        }
    }
} else {
    // No hay orden, se muestra el formulario por primera vez

    if ( isset($_COOKIE['galletadefrutas'])){
        $frutas=explode(",",$_COOKIE['galletadefrutas']);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> las frutas </title>
</head>
<body>
    <form method="get">
        <fieldset>
            <legend>Sus frutas preferidas </legend>
            <label for="nombre">Lista de frutas:</label><br>
                <select name="listafrutas[]" multiple="multiple">
                    <option value="Platano"<?= in_array("Platano"   ,$frutas)?"selected=\"selected\"":""; ?>>Platano</option>
                    <option value="fresa"  <?= in_array("fresa"   ,  $frutas)?"selected=\"selected\"":""; ?>>fresa</option>
                    <option value="Naranja"<?= in_array("Naranja"  ,$frutas)?"selected=\"selected\"":""; ?>>Naranja</option>
                    <option value="Melón"  <?= in_array("Melón"   ,  $frutas)?"selected=\"selected\"":""; ?>>Melón</option>
                    <option value="Manzana"<?= in_array("Manzana"   ,$frutas)?"selected=\"selected\"":""; ?>>Manzana</option>
                </select>
            <input type="submit" name="Cambiar" value=" Cambiar ">
        </fieldset>
    </form>


</body>
</html>
