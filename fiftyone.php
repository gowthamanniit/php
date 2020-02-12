<?php
/*
interface:
	overriding purpose

interface father
{
	function dis1();
}
interface mother
{
	function dis2();
}
class son implements father,mother
{
	function dis1()
	{
	
	}
	function dis2()
	{
	
	}
}


*/

interface father
{
	function dis1();
}
interface mother
{
	function dis2();
}
class son implements father,mother
{
	function dis2()
	{
	echo "access base interface mother";
	}
}


$s1=new son();
$s1->dis1();
$s1->dis2();
?>