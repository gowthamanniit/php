<?php

echo "Data Retrived from html file using super global variable";

$un=$_REQUEST["t1"];
$ps=$_REQUEST["p1"];

echo "<br> User     Name:".$un;
echo "<br> Password Name:".$ps;


/*
$k=56; // mention null and check
echo "answer =".isset($k).".";
if(isset($k))
{
	echo "Value Available";
}
else
{
	echo "Value Not Available";
}
*/



?>