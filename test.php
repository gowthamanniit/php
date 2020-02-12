<?php
/*
echo 'a=\'5\'';
echo "<br>";
die("Error in script");
echo "a=4";
print(5+7+8);
*/
/*
$arr=array("gowthaman","raj","kum");
foreach($arr as $val)
{
	echo "<br>".$val;
}
*/
/*
$str1="gowthaman niit karur center";
$res=preg_split('/ /',$str1);
print_r($res);
*/
/*
interface employee
{
	public function AddEmployee($name);
}
class Request implements employee
{
	protected $empname;
	public function AddEmployee($name)
	{
		$this->empname=$name;
		echo $this->empname;
	}
}
$req=new Request();
$req->AddEmployee("john");
*/
/*
function check($num)
{
	if($num%5!=0)
	{
		throw new Exception("value must be divisible by 5");
	}
	return true;
}
try
{
	check(7);
	echo "the number is divi by 5";	
}
catch(Exception $e)
{
	echo $e->getMessage();
}*/
/*
set_exception_handler('handler');
function handler($exception)
{
	echo "uncaught exception ".$exception->getMessage();
}
function errorfirst()
{
	throw new exception("error first");
}
function errorsecond()
{
	throw new exception("error second");
}
function check()
{
	errorfirst();
	errorsecond();
}
check();
check();
*/

echo phpinfo();
?>