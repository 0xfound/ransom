<?php
// Your code here!
$archivo = fopen("out.txt", "w") or die ("no se puede abrir el archivo");
$txt = $_GET["info"]."\n";
fwrite($archivo,$txt);
fclose($archivo);
?>
