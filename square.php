<?php
//Estructura Do{}while()
//El cuadrado de mayor área menor a 1000 ft^2

$width = 1;
$length = 1;

do{
  $width++;
  $length++;
  $area = $width * $length;
  }while($area < 1000);
  
echo "The smallest square over 1000 sq ft in area is $width ft x $length ft.";

?>
