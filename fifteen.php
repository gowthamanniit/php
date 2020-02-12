<?php
$arr=array("sampath","selva","dinesh","kumar","raja");

foreach ($arr as $key) {
	print($key."<br>");
}

$cou=array('c'=>5000,"c++"=>6000,"java"=>80000,"php"=>10000,10=>20,12.23=>34,"c"=>10500,"php"=>"d");

foreach ($cou as $key => $value) {
	print("key = ".$key."  value = ".$value."<br>");
}

$brr=array("bala","aish","subramani");

# multi dimensional array

$mu=array("phpnames"=>$arr,"htmlnames"=>$brr,"javanames"=>array("sam","vijay","gopal","sujith"));
print_r($mu);

foreach ($mu as $key => $value) {
	print("<br>key = ".$key);
	foreach($value as $ans)
	{
	print("<br> value ".$ans);	
	}
}


?>