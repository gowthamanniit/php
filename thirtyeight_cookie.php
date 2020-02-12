<?php
/*
cookie is stored small amont of data:
only 4kb
*/
$un=setcookie("username","sampath",time()+60);  //  only 60 seconds
$ps=setcookie("password","sampath@123",time()+60);
print("cookie status = ".$un.$ps);
if ($un==1 && $ps==1)
echo "cookie created success";
else
echo "cookie created failure";
?>