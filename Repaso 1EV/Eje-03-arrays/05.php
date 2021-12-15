<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonoloto</title>
    <style>
        table,th{
            border: 2px solid black;
            border-collapse:collapse;
        }
    </style>
</head>
<body>
    <?php
    $bonoloto=array();
    for ($i=0; $i < 6; $i++) { 
        $num=random_int(1,49);
        array_push($bonoloto,$num);
    }
    ?>
    <table>
        <tr>
            <?php 
            for ($i=0; $i <count($bonoloto)-1 ; $i++) { 
                echo "<td>".$bonoloto[$i]."</td>";
                
            }?>
               
            <td>Complementario <?= $bonoloto[5]?></td>
        </tr>
    </table>
</body>
</html>