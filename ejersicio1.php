<?php
$color =array(4=>'blanco',6=>'verde',11=>'roja');


$color= array(4=>'blanco',6=>'verde',11=>'roja');
foreach ($color as $c => $colores) {
	
	echo "    ". $c."---->".$colores." <br>";
}
echo "<br>";

$color= array(4=>'blanco',6=>'verde',11=>'roja');
for ($i=0; $i <1 ; $i++) { 
	echo$color[4];
}
?>