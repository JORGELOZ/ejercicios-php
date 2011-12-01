<?php
/*función rand(valores entre los que está comprendida), obtiene un número 
aleatorio entre los valores comprendidos*/
$randomNumber = rand( 1 , 1000 );

for ($i=1; $i<=1000; $i++){
  if ($i == $randomNumber) {
    echo "Hooray! I guessed the random number. It was: $i <br />";
    break;
  }
}

?>
