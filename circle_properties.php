<?php
//Cálculo de las propiedades de un círculo
//Defino las variables
$radius = 4;
$diameter = $radius * 2;
$circumference = M_PI * $diameter;
//potencias: POW( base, exponente)
$area = M_PI* POW( $radius, 2 );
echo "This circle has...<br />";
echo "A radius of " .$radius. "<br />";
echo "A diameter of " .$diameter. "<br />";
echo "A circumference of " .$circumference. "<br />";
echo "An area of " .$area. "<br />";
?>
