<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
		  table,th,td{
		      border:1px solid black;
		      border-collapse:collapse;
		  }
		  img{
		   display:block;
		   margin-left:auto;
		   margin-right:auto;
		   width:80;
		  }
		</style>
</head>
<body>
    <?php
    $deportes=[
        "basket"=>"img/basket.jfif",
        "futbol"=>"img/futbol.jfif",
        "golf"=>"img/golf.png",
        "karate"=>"img/karate.png",
        "tenis"=>"img/tenis.png"
    ];
    ?>
    <table>
        <tr>
            <th>Deporte</th>
            <th>Logo</th>
        </tr>
        <?php
        foreach($deportes as $clave=>$valor){?>
            <tr>
                <td><?= $clave ?></td>
                <td><img src="<?= $valor ?>" alt="<?= $clave ?>"></td>
            </tr>
      <?php  }
        ?>
    </table>
</body>
</html>