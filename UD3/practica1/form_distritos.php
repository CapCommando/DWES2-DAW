<?php
include 'datos_distritos.php';
echo 'Bienvenido '.$nombre .$apellido'!';
echo '<h1>CONSULTE DATOS POR DISTRITOS</h1>';
echo '<p>DISTRITO:</p><br><form><select name="distritos">
<option value="" selected="Patraix"></option>
foreach($datos_distritos as $dis => $valor){
    $dis = htmlspecialchars($dis); 
    }
</select>
<input type="checkbox" name="mostrar">
<label for="mostrar">Mostrar todos los distritos</label><br>
<input type="submit" value="consultar">
</form>';
echo '<a href="index.html">Volver</a>';
if(isset($_GET['checkbox'])){
    foreach($datos_distritos as $dit){
        echo $dit .'<br';
    }
    $checked=$_GET['checkbox'];
}
?>