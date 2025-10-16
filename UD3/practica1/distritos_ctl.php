<?php
$nombre=$_GET['nombre'];
$apellidos=$_GET['apellidos'];
include datos_distritos.php;
echo '<h3>!Bienvenido '. $nombre.' '.$apellidos.'!</h3>';
echo'<br><br><a href="menu.php?nombre='.$nombre.'&apellidos'.$apellidos">';
?>
