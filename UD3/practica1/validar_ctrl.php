<?php
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$dniValidos= array("1000000A","2000000B","3000000B");
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