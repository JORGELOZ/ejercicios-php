<?php
/*funci�n rand(valores entre los que est� comprendida), obtiene un n�mero 
aleatorio entre los valores comprendidos*/
$randomNumber = rand( 1 , 1000 );

for ($i=1; $i<=1000; $i++){
  if ($i == $randomNumber) {
    echo "Hooray! I guessed the random number. It was: $i <br />";
    break;
  }
}

?>
