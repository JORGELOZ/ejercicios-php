<!--Utilizamos la hoja de estilo css common.css, para ello "la llamamos"-->
<html>
  <head>
    <title>Greetings</title>

    <link rel=”stylesheet” type=”text/css” href=”common.css” />
  </head>
  <body>
<?php
$hour = date(" G ");
$year = date(" Y ");

if ($hour >= 5 && $hour < 12){
  echo "<h1>Good morning!</h1>";
  }else if ($hour >= 12 && $hour < 18){
  echo "<h1>Good afternoon!</h1>";
  }else if ($hour >= 18 && $hour < 22){
  echo "<h1>Good evening!</h1>";
  }else {
  echo "<h1>Good night!</h1>";
  }
  
$leapYear = false;
if ((( $year % 4 == 0 ) && ($year % 100 != 0)) || ( $year % 400 == 0 ))
  $leapYear = true;
  
  //Utilizamos el operador ternario para ver si el año es bisiesto o no
echo "<p>Did you know that $year is " . ( $leapYear ? "" : "not") . " a leap
 year?</p>";
?>
  </body>
</html>