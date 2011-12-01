<!--EJERCICIO 1 TEMA 4:Decisions and loops. LIBRO: Beggining PHP 5.3 Pág:72
Escribir un código que cuenta de 1 a 10 en pasos de 1. Para cada número,
mostrar si el número es un número par o impar, y también mostrar un mensaje
si el número es un número primo. Mostrar esta información en una tabla HTML.
-->
<html>
  <head>
    <title>numbers</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
    <style type="text/css">
      th { text-align: center; background-color: #9ACD32; }
    </style>
  </head>
  <body>
<!--Le damos a la tabla ciertas propiedades, como que el texto esté centrado -->
    <table cellspacing="0" border="0" bgcolor="#98FB98" style="width: 20em; 
border: 1px solid #808000; text-align: center;">
      <tr>
        <th>Número</th>
        <th>¿Par o impar?</th>
        <th>¿Es un número primo?<th>
      </tr>
<?php
for( $i=1; $i<=10; $i++ )
{
?>
<!--Creamos una fila en la tabla:-->
      <tr>
        <td><?php echo $i ?></td>
<!--Evaluamos la paridad del número.-->
        <td><?php 
              if( $i % 2 != 0 ){
              echo "impar";
              } else {
              echo "par";
              }
            ?></td>
        <td><?php
/*Un número primo es aquel que sólo tiene dos divisores, 1 y él mismo.Hay otra
definición que puede ser confusa que dice que "un número primo es aquel que
es divisible por 1 y por él mismo", si tenemos en cuenta esta definición 
entonces 1 sí sería primo, pero entonces diríamos que por convenio, 1 no es
primo. 
Usamos un bucle anidado para dividir cada número por todos 
los números menores que él salvo 1.
Si el módulo de la división da cero la variable $par pasa a ser true y salimos
del bucle. Sino el bucle terminará y la variable será false. Mostramos el 
resultado mediante un operador ternario. Para el caso especial de 1 forzamos
que la variable $prim sea true, porque sino se salta el bucle (ya que empieza
en j = 2) y el valor que obtiene es false.*/
              if ( $i == 1){
              $prim = true;
              }else{
              $prim = false;
              }
              for( $j=2; $j<$i; $j++)
              {
                if( $i % $j == 0) {
                  $prim = true;
                  break;
                } 
              }
              echo ($prim ? "no" : "sí");
              ?></td>      
      </tr>
<?php
}
?>
    </table>
  </body>
</html>