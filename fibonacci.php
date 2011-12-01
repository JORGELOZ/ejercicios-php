<!DOCTYPE html PUBLIC " - //W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1 - strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Fibonacci sequence</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
    <style type="text/css">
      th { text-align: left; background-color: #999; }
      th, td { padding: 0.4em; }
      tr.alt td { background: #ddd; }
    </style>
  </head>
  <body>
    
    <h2>Fibonacci sequence</h2>
<!-- cellspacing define el espacio entre los bordes -->
    <table cellspacing="0" border="0" style="width: 20em; border: 1px solid 
#666;">
        <tr>
          <th>Sequence #</th>
          <th>Value</th>
        </tr>
        <tr>
          <td>F<sub>0</sub></td>
          <td>0</td>
        </tr>
<!-- class="alt" nos sombrea la celda-->
        <tr class="alt">
          <td>F<sub>1</sub></td>
          <td>1</td>
        </tr>
<?php

$iterations = 10;

$num1 = 0;
$num2 = 1;

for( $i=2; $i <=$iterations; $i++ )
{
/*Cada término de la serie de Fibonacci es suma de los dos anteriores, por eso
hacemos la suma de los dos primeros, luego a $num1 se le asignará el valor de
$num2 y a $num2 el valor de la suma anterior*/
  $sum = $num1 + $num2;
  $num1 = $num2;
  $num2 = $sum;
?>
<!--Cuidado, si ponemos echo 'class="alt"' sin separar ' class' no se sombrean
los F pares salvo el 1-->
        <tr<?php if ( $i%2 != 0 ) echo ' class="alt"' ?>>
<!--El condicional anterior nos sombrea las filas pares. Los <td> siguientes
nos añaden las demás filas con sus respectivos F y subíndice, además del
número de la secuencia-->
          <td>F<sub><?php echo $i?></sub></td>
          <td><?php echo $num2?></td>
        </tr>
<?php
}
?>
    </table>      
  </body>
</html>
