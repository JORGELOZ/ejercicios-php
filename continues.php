<?php
//Skipping Loop Iterations with the continue Statement
for ( $i=1; $i <= 10; $i++ ){
//el bucle saltar� el n�mero cuatro
  if ( $i == 4 )continue;
  echo "I've counted to: $i<br />";
}
echo "all done!";