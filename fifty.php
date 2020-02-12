<?php
/* abstract class: (polymorphism-> run time polimorphism(dynamic-late binding) - overriding)
	abstract class:
	===============
	def: overriding 
	     set of complete and imcomplete methods.	
	syntax:

	abstract class classname
	{

		abstract function functioname(arg);
		// no code defined inside abstract method.
	}

	rules:
	======

	1. don't create object to abstract class.

2. don't define abstract method inside abstract class.

3. only declaration allowed to abstract method inside abstract class.

4. abstract method must define(body {}) in derive class.

	
*/

abstract class Student
{
	abstract function dis();
	function dis2()
	{
		echo "complete method ";
	}

}

class son extends Student
{
 function dis()
 {
 	$this->dis2();
 	echo "this is abstract method defined";
 }
}
$s1=new son();
$s1->dis();
?>