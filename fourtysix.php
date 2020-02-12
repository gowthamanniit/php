<?php
class Emp/*base super parent*/
{
	private $a;
	public $b;
	protected $c;	
	function dis()
	{
		echo "<br>==========base class access all ==============<br>";
		$this->a =100;
		$this->c =300;
		echo "private   a = ".$this->a;
		echo "public    b = ".$this->b;
		echo "protected c = ".$this->c;
		echo "<br>========================<br>";
	}
}
class Sam extends Emp /*derive sub child*/
{
		function dis()
		{
			$this->c=300;
			$this->b=1000; 	
			echo "<br>===derive class access public,protected===<br>";
			echo "protected c = ".$this->c;
			echo "public b = ".$this->c;
			echo "<br>========================<br>";
		}
}
$e1=new Emp();
$e1->b=200;
$e1->dis();

$e2=new Sam();
$e2->dis();
echo "<br>===========outside class: only public=============<br>";
echo "public b value =".$e1->b;
echo "<br>========================<br>";
?>