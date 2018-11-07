<?php 

$kurs = $_GET["kurs"]; 
$navn = $_GET["navn"]; 
$epost = $_GET["epost"]; 

//echo "Du ønsker å lagre verdier for " . $navn; 

$fil = fopen("paamelding.dat","a"); 
fwrite($fil,$kurs.";".$navn.";".$epost."\n"); 
fclose($fil); 

echo "Lagret..."; 
?>