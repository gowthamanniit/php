
<?php

//1. array_rand
/*
$arr=array(12,34,45,56,657,67,789,89,90,31,23);
$k=array_rand($arr);
print("<br> index : ".$k);
print("<br> value : ".$arr[$k]);



$arr=array(12,34,45,56,657,67,789,89,90,31,23);
//print_r(array_rand($arr,5));

// array_chunk method:1 : main use: to convert multidimensional array
$k=array_chunk($arr, 3);

print_r($k);

print("<br>");

foreach ($k as $key => $value) {
	print("<br>key = ".$key);
	foreach($value as $ans)
	{
	print("<br> value ".$ans);	
	}
}
// array_chunk method:2
print("<br> Method 2<br>");
$k=array_chunk($arr, 3,1);

print_r($k);

print("<br>");

foreach ($k as $key => $value) {
	print("<br>key = ".$key);
	foreach($value as $ans)
	{
	print("<br> value ".$ans);	
	}
}
*/
// array combine : use: to convert associative array after joining 2 // arrays


$arr1=array(21,2,3,"gowthaman");
$arr2=array(19,18,5,"100");


/*
$k=array_combine($arr1,$arr2);
print_r($k);

foreach ($k as $key => $value) 
{
	print("<br> key = $key <br> value =$value");
}*/

// array_merge : use : to convert numeric array 

//$k=array_merge($arr1,$arr2);
//print_r($k);

//array_pop :  last element should be delete (stack)

//print(array_pop($arr1));
/*
print_r($arr1);

$var1="selva";
$var2="sampath";

print_r(array_push($arr1,$var1,$var2)); // it will return int (tot len)
									    // and also updated 2 var 
										//values
print_r($arr1);
*/



?>