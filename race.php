<?php
//Uso de la función microtime() con el bucle "for"

$starTime = microtime( true );

for ($num = 1; microtime(true)< $starTime + 0.0001; $num = $num *2){
  echo "Current number: $num<br />";
  }
  
echo "Out of time!";
?>
