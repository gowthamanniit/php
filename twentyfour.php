<?php
// passing arguments (calling - actual arg ,called-formal parameter 
//call by value

/*
function display($n)
{
//global $n;
$n=$n+100;
}
$n=100;
display($n);

print($n); // 200 is wrong , 100 is correct
		   // if you want 200 answer , use global keyword inside 
			//function.
*/
// call by reference
/*
function display(&$n)
{
	print(var_dump($n)); // no need just know about datatype.
	$n=$n+100;
}
$n=100.78;
display($n);
print("<br>answer=".$n); // 100 is wrong , 200 is correct 
*/

// return

function dis($a,$b)
{
	return $a+$b;
}
$ans=dis(11,33);
print("reuslt".$ans);

print("result=".dis(33,33));
?>