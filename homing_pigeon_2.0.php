<!-- EJERCICIO 2 TEMA 4:Decisions and loops. LIBRO: Beggining PHP 5.3 Pág:72
Modificar el simulador de la paloma mensajera (pág 66)para simular dos palomas 
diferentes en el mismo mapa, que vuelan hacia el mismo hogar. La simulación 
termina cuando ambas palomas han llegado a casa.-->
<!-- No sé qué significan estas primeras tres líneas del código-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Homing Pigeon Simulator</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
    <style type="text/css">
      div.map { float: left; text-align: center; border: 1px solid #666; 
      background-color: #fcfcfc; margin: 5px; padding: 1em; }
      span.home, span.pigeon1 { font-weight: bold; },
      span.pigeon2 { font-weight: bold; },span.empty { color: #666; }
    </style>
  </head>
  <body>
<?php

$mapSize = 10;

//Posición del nido y de las palomas

do {
//Aparecen en un lugar aleatorio
  $homeX = rand ( 0 , $mapSize-1 );
  $homeY = rand ( 0 , $mapSize-1 );
  $pigeon1X = rand ( 0 , $mapSize-1);
  $pigeon1Y = rand ( 0 , $mapSize-1);
  $pigeon2X = rand ( 0 , $mapSize-1);
  $pigeon2Y = rand ( 0 , $mapSize-1);
/*Mediante el while nos aseguramos que como mínimo, la distancia (en módulo para
que no nos salga negativa) entre las palomas y el nido sea como mínimo mayor
a la mitad del tamaño del plano. Vamos a hacer lo mismo entre las palomas
para que no puedan resultar coincidentes.Es decir: "hacer que las variables sean
aleatorias hasta sean lo suficientemente grandes como para que los tres objetos 
estén separados como mínimo la mitad del tamaño del mapa" */
  } while ( ( abs( $homeX - $pigeon1X ) < $mapSize/2 ) && ( abs ($homeY - 
$pigeon1Y ) < $mapSize/2 ) && ( abs ($homeX - $pigeon2X ) < $mapSize/2 )
&& ( abs ($homeY - $pigeon2Y ) < $mapSize/2 ));


/*Moviendo las palomas hasta el nido:
Si la coordenada X de cada paloma es menor que la coordenada X del plano,
entonces la aumentamos. Si es mayor la disminuímos. Lo que queremos hacer es que 
las coordenadas de las palomas acaben siendo las del plano.*/
do {
  if ( $pigeon1X < $homeX )
    $pigeon1X++;
  elseif ( $pigeon1X > $homeX )
    $pigeon1X--;
    
  if ( $pigeon2X < $homeX )
    $pigeon2X++;
  elseif ( $pigeon2X > $homeX )
    $pigeon2X--;
    
  if ( $pigeon1Y < $homeY )
    $pigeon1Y++;
  elseif ( $pigeon1Y > $homeY )
    $pigeon1Y--;
    
  if ( $pigeon2Y < $homeY )
    $pigeon2Y++;
  elseif ( $pigeon2Y > $homeY )
    $pigeon2Y--;
    

//Mostrando por pantalla:
/*creamos una capa que será de la clase map y de anchura $mapSize. "em" es
una unidad de medida que es equivalente a la altura (font-side) de la letra
del elemento en el que se usa. En nuestro caso sera $mapSize em. Al utilizar 
la etiqueta <pre>, el número de blancos que se incluyan en una página HTML y
los cambios de línea aparecen tal cual. */
echo '<div class="map" style="width: ' . $mapSize . 'em;"><pre>';
/* Ahora vamos a rellenar todos los espacios del plano. Estarán puntos donde
estén las palomas representadas por % y el nido representado por +, el resto
serán puntos. Para ello hacemos un bucle anidado que vamos rellenando con los 
elementos correspondientes.*/
for ($y = 0; $y < $mapSize; $y++ ){
  
  for ($x = 0; $x < $mapSize; $x++ ){
  
    if ( $x == $homeX && $y == $homeY){
      echo '<span class="home">+</span>'; //Nido
    } elseif ( $x == $pigeon1X && $y == $pigeon1Y){
      echo '<span class"pigeon1">%</span>'; //Paloma 1
    } elseif ( $x == $pigeon2X && $y == $pigeon2Y){
      echo '<span class"pigeon1">%</span>'; //Paloma 2
    } else {
      echo '<span class="empty">.</span>'; //Lugar vacío
    }
  }
  echo "\n";
}
echo "</pre></div>\n"; 
//"mientras que las coordenadas de las palomas no coincidan con las del nido"
} while ( $pigeon1X != $homeX || $pigeon1Y != $homeY || $pigeon2X != $homeX
|| $pigeon2Y != $homeY);

?>
  </body>
</html>