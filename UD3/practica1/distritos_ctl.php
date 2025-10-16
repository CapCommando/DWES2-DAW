<?php
$nombre=$_GET['nombre'];
$apellidos=$_GET['apellidos'];
include datos_distritos.php;
$distrito=$_GET[`distrito'];
echo '<h3>!Bienvenido '. $nombre.' '.$apellidos.'!</h3>';
if(isset($_get['muestra_todo'])){
$muestra=true;
}else{
$muestra=false;
}
if($muestra){
echo '<h3>Mostrando todos los distritos</h3>';
echo'<ul>'
foreach($datos_distritos as $barrio => $poblacion){
echo'<li>'.$barrio.': '.$poblacion.' habitantes</li>';
}
echo'</ul>'
}else{
$poblacion=$datos_distritos[$distrito];
echo '<p>El distrito'. $distrito.' tiene '.$poblacion . ' habitantes</p>';
}
echo'<br><br><a href="menu.php?nombre='.$nombre.'&apellidos'.$apellidos">';
?>
