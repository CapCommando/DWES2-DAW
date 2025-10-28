<?php
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
echo "Bienvenido ". $nombre . $apellido ."!";
echo '<a href="form_distritos.php?nombre='.$nombre.'&apellidos'.$apellidos'">Datos por distritos</a>';
echo '<a href="form_patraix.php?nombre='.$nombre.'&apellidos'.$apellidos'">Datos por barrios(distrito de Patraix)</a>';
echo '<a href="index.html">Inicio</a>';




?>
