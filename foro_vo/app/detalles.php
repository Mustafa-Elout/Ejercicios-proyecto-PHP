<?=include_once 'app/funciones.php';?>
<div>
<b> Detalles:</b><br>
<table>
<tr><td>Longitud:          </td><td><?= strlen($_REQUEST['comentario']) ?></td></tr>
<tr><td>Nº de palabras:    </td><td><?= numPalabras()?></td></tr>
<tr><td>Letra + repetida:  </td><td><?= letraRepetida()?></td></tr>
<tr><td>Palabra + repetida:</td><td><?= palabraRepetida()?></td></tr>
</table>
</div>

