<!--EJERCICIO 1 TEMA 4:Decisions and loops. LIBRO: Beggining PHP 5.3 P�g:72
Escribir un c�digo que cuenta de 1 a 10 en pasos de 1. Para cada n�mero,
mostrar si el n�mero es un n�mero par o impar, y tambi�n mostrar un mensaje
si el n�mero es un n�mero primo. Mostrar esta informaci�n en una tabla HTML.
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
<!--Le damos a la tabla ciertas propiedades, como que el texto est� centrado -->
    <table cellspacing="0" border="0" bgcolor="#98FB98" style="width: 20em; 
border: 1px solid #808000; text-align: center;">
      <tr>
        <th>N�mero</th>
        <th>�Par o impar?</th>
        <th>�Es un n�mero primo?<th>
      </tr>
<?php
for( $i=1; $i<=10; $i++ )
{
?>
<!--Creamos una fila en la tabla:-->
      <tr>
        <td><?php echo $i ?></td>
<!--Evaluamos la paridad del n�mero.-->
        <td><?php 
              if( $i % 2 != 0 ){
              echo "impar";
              } else {
              echo "par";
              }
            ?></td>
        <td><?php
/*Un n�mero primo es aquel que s�lo tiene dos divisores, 1 y �l mismo.Hay otra
definici�n que puede ser confusa que dice que "un n�mero primo es aquel que
es divisible por 1 y por �l mismo", si tenemos en cuenta esta definici�n 
entonces 1 s� ser�a primo, pero entonces dir�amos que por convenio, 1 no es
primo. 
Usamos un bucle anidado para dividir cada n�mero por todos 
los n�meros menores que �l salvo 1.
Si el m�dulo de la divisi�n da cero la variable $par pasa a ser true y salimos
del bucle. Sino el bucle terminar� y la variable ser� false. Mostramos el 
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
              echo ($prim ? "no" : "s�");
              ?></td>      
      </tr>
<?php
}
?>
    </table>
  </body>
</html>