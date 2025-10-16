<?php
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$dniValidos= array("10000000A","20000000B","30000000B");
$dniRecibido=$_POST["dni"];
$boleano=false;
foreach($dniValidos as $busca){
    if($dniValidos==$busca){
        $boleano=true;
    }   
}
if($boleano){
    header('Location: menu.php?nombre='.$nombre.'&apellido='.$apellido);
    exit();
}else{
    echo "DNI NO VALIDO<br>";
    echo '<a href="index.html">Volver</a>';
}





?>
