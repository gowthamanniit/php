
<!-- Local scope -->


<?php
//================================local scope==============
/*
function show()
{
	$count=100;
	echo "this is local scope:".$count;
}

 // echo "this is local scope cannot work here :".$count;

show();
*/

//================================global scope==============
/*
$number1=100;
$number2=200;
$number3=300;
function show()
{
	global $number1,$number2;  
	echo "<br> number1 = ".$number1;
	echo "<br> number2 = ".$number2;
	//echo "<br> number3 = ".$number3;  // error ... because not declared global
}

	echo "<br> number1 = ".$number1;
	echo "<br> number2 = ".$number2;

show();
*/
//================================static scope==============

function show()
{
	static $number=100;
	$number++;
	echo "<br> Number = ".$number;
}

show();
show();
show();
show();



?>
