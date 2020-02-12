<!-- special data types 
1.null  ->  it is zero
2.resource -> database or file address(var) ex: $con,$file


<?php
$a=10;
$b=null;

$c=$a+$b; //10
echo " answer = ".$c;

$c=$a*$b; // 0 
echo " answer = ".$c;

$c=$a-$b; // 10
echo " answer = ".$c;

$c=$a/$b; // infinite
echo " answer = ".$c;

$c=$b/$a; // 0
echo " answer = ".$c;

?>


-->
<?php

$a=10.50;
$b=24;
$c=$a/$b;

echo "<br>answer = ".$c;  		   // float value
echo "<br>answer = ".(integer)$c;  // typecasting -> explicit - user

$c=$a+$b;
echo "<br>answer = ".$c;           // typejuggling -> implicit -auto




?>