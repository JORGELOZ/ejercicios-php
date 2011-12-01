
<?php
/*Write a script that creates two variables and assigns a different integer 
value to each variable.
Now make your script test whether the first value is
a. equal to the second value
b. greater than the second value
c. less than or equal to the second value
d. not equal to the second value
and output the result of each test to the user.*/
$var1 = 15;
echo gettype($var1). "<br />";
$var2 = 10;
echo gettype($var2). "<br />";
echo ($var1 == $var2) . "<br />";
echo ($var1 > $var2) . "<br />";
echo ($var1 <= $var2) . "<br />";
echo ($var1 != $var2) . "<br />";
?>
