
<!-- operator -->

<?php

/*
$a=10;
$b=20;
$c=2;
$d=$a+$c*$b;
echo "answer  ".$d;
*/

/*
$a=100;
echo "pre increment = ".++$a;  // $a=$a+1 101
echo "post increment = ".$a++;   //101
echo "post decrement = ".$a--;  //102
echo "post decrement = ".--$a;  //100
*/

/*
echo "answer = ".(23>34);
echo "answer = ".(23<34);
*/

/*
$a=10;
$a+=$a;
echo "arithmetic assignment =".$a;
*/

/*
$c=!(23>102 || 12>10 && 12<10);
print("trur or false = ".$c);
*/

$arr=array(1,2);
$brr=array("1","2","3");

print("equal array = ".($arr==$brr));
echo "<br>";
print("equal array = ".($arr===$brr));

$crr=array(3,6,7,4,5,6,7);

$d=($arr+$crr);
echo "<br>";

print_r($d);

?>