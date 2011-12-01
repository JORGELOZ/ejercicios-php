<?php
//Skipping Loop Iterations with the continue Statement
for ( $i=1; $i <= 10; $i++ ){
//el bucle saltará el número cuatro
  if ( $i == 4 )continue;
  echo "I've counted to: $i<br />";
}
echo "all done!";