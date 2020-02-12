<!-- 	multilevel -->
<?php
	class GrandFather
	{
		function display()
		{
			echo "<br> GrandFather class";
		}
	}	
	class Father extends GrandFather
	{
		function display()
		{
			echo "<br> Father Class";
			GrandFather::display();
		}
	}
	class Son extends Father
	{
		function display()
		{
			echo "<br> Son class";
			Father::display();
		}
	}
	$s1=new Son();
	$s1->display();
?>