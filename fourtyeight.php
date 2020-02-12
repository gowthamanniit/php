<!-- single inheritance -->
<?php
class Father
{
	private $cash=1000;
	protected $property="car";
	function display()
	{
		echo "This is base class";
	}
}
class Son extends Father
{
	protected $property="bus";
	function display()
	{
		Father::display();
		echo "Access Base class Father Property:".$this->property;
		Father::display();
	}
}
$s1=new Son();
$s1->display();
?>