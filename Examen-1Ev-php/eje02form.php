<html>
<head>
<meta charset="UTF-8">
<title> Agenda App </title>
</head>
<body>
<form action="eje02.php" method="POST">
<fieldset>
  <legend>Su agenda personal</legend>
    <label for="nombre">Nombre:</label><br>
    <input type='text' name='nombre' size=20>
    <input type='submit' name="orden" value="Consultar"><br>
    <label for="telefono">Teléfono:</label><br>
    <input type='tel' name='telefono' size=20>
    <input type='submit' name="orden" value="Añadir">
</fieldset>
</form>
<?php 
if (!empty($_GET['msg'])) echo "RESULTADO: ". $_GET['msg']."<br>";
?>
</body>
</html>