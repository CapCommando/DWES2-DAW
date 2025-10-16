<?php
include 'datos_patraix.php';
echo 'Bienvenido '.$nombre .$apellido'!';
echo '<h1>CONSULTE DATOS POR BARRIOS(DISTRITO DE PATRAIX)</h1>';
echo '<p>DISTRITO:</p><br><form><select name="distritos">
<option value="" selected="Patraix"></option>
foreach($datos_patrix as $pat => $valor){
    $pat = htmlspecialchars($pat); 
    }
</select>
<input type="submit" value="consultar">
</form>'
echo '<a href="index.html">Volver</a>';

?>