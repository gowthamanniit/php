<?php
$avg=65;
$result="pass";

if($result=="pass")
{
if($avg>=85 and $avg<=100)
{
	echo "Outstanding";
}
elseif ($avg>=75 && $avg<=84)
{
	echo "Excellent";
}
elseif ($avg>=65&& $avg<=74)
{
	echo "Good";
}
elseif ($avg>=50&& $avg<=64)
{
	echo "fair";
}

else
{
	echo "Invalid input";
}
}
else
{
	echo "fail <br> no grade";
	echo "participant certificate";
}
?>