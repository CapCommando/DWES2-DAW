<?php
    //Fichero en el que deseamos guardar el resultado
    $fp = fopen("img/archivo.txt","w");
    
    //imagen que queremos leer (hay que tener gd.lib instalada y activa)
    $img = imagecreatefromjpeg("imagen.jpeg");
    
    //Obtenemos el tamaño 
    $w = imagesx($img); //ancho
    $h = imagesy($img); //alto
 
    for($y = 0; $y < $h; $y= $y+=2) {
        for($x = 0; $x < $w; $x= $x+=1) {
            $rgb = imagecolorat($img, $x, $y);
            
            //Valor de las componentes RGB de cada pixel
            $r = $rgb >> 16;
            $g = $rgb >> 8 & 255;
            $b = $rgb & 255;
			
            //Elegir el caracter según la luminosidad del pixel y escribir en el fichero
            	$luminosidad= $r*0.3 + $g*0.6 + $b*0.1;
	     if($luminosidad>200){
	     	$letra = " ";
	     }else if($luminosidad<=200 && $luminosidad>150){
	     $letra = ".";}
	     else if($luminosidad<=150 && $luminosidad>50){
	     $letra="o"}
        }else if($luminosidad<50){
        $letra= "@";
            }
            fwrite($fp,$letra);
            }
            fwrite($fp,"\n");
            }
  
?>
