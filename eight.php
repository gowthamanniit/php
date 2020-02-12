<!-- 
datatypes : type of the data(values).

1) basic datatype- int ,float,string,boolean
2) compound datatype -array (numeric,associative,multidimensional)
3) special datatype (null,resource)
-->

<?php

	// basic data type

	$a=10;
	$b=12.34;
	$c='gowthaman';
	$d="gowthaman";
	//$e=False;  //True true TRUE false False FALSE 
	$e=12<23;

	echo "<br> integer ".$a;
	echo "<br> float   ".$b;
	echo "<br> string  ".$c;
	echo "<br> string  ".$d;
	echo "<br> boolean ".$e;  // true 1 , false nothing

	// compound data type
	// numeric array

	$course=array("c","c++","java","vb","sql","php",".net","servlet","jsp","html","css","javascript","unix","basic","pascal","cobol","oracle","mysql","asp");

	print_r($course);


	print("<br> index 0 = ".$course[0]);
	print("<br> index 1 = ".$course[1]);
	print("<br> index 2 = ".$course[2]);
	print("<br> index 3 = ".$course[3]);
	
	// associative array(string or int  index)
    // key is unique (duplicate not allow)
    // float not allowed in key
    // if the user declared more than one times same keys then last key will taken.
    // if the user declared key in float then automatically convert to int key.
	$cou=array('c'=>5000,"c++"=>6000,"java"=>80000,"php"=>10000,10=>20,12.23=>34,"c"=>10500,"php"=>"d");

	print_r($cou);
	print("<br> c fees    = ".$cou["c"]);
	print("<br> java fees = ".$cou["java"]);
	print("<br> php fees  = ".$cou["php"]);
	print("<br> c++ fees  = ".$cou["c++"]);
	print("<br> 10 fees  = ".$cou[10]);

	// multidimensional array

	$flower=array("type1"=>array("rose1","rose2","rose3"),
				  "type2"=>array("lilly1","lilly2","lilly3"),
				  "type3"=>array("lotus1","lotus2","lotus3"));

	print("<br>");
	print_r($flower);

    print("<br><br>");
	print_r($flower['type1']);
	print("<br>");
	print_r($flower['type2']);
	print("<br>");
	print_r($flower['type3']);

	//accessing individual elements from multidimensional array.
	
	print("<br><br> first element from type1 = ".$flower["type1"][0]);
	print("<br><br> second element from type1 = ".$flower["type1"][1]);
	print("<br><br> third element from type1 = ".$flower["type1"][2]);
	//second row
	print("<br><br> first element from type2 = ".$flower["type2"][0]);
	print("<br><br> second element from type2 = ".$flower["type2"][1]);
	print("<br><br> third element from type2 = ".$flower["type2"][2]);
	
	print("<br><br> first element from type3 = ".$flower["type3"][0]);
	print("<br><br> second element from type3 = ".$flower["type3"][1]);
	print("<br><br> third element from type3 = ".$flower["type3"][2]);

?>