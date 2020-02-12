<!--
	closure:
		
		def: it is an anonymous function.

		use: we can access variable outside scope of the function.
		    (must use 'use' keyword)

		  syntax & ex:

		  $clos_var=function() use(&$x)
		  {
		    $x=$x+1;
		    return $x;
		  }; // ; must

		  print($x);
		  $clos_var();
	-->

	<!--

	<?php
	$x=10;
	$closure=function() use(&$x)
	{
		return ++$x;
	};
	$closure();
	echo "<br> answer ".$x;
	$closure();
	echo "<br> answer ".$x;
	?>	
	-->

	<?php

	$a=10;
	$b=20;
	$clos=function() use(&$a,&$b)
	{
		$a++;
		$b++;
		return $a=$a+$b;
	};

	$clos();

	print($a);
	print($b);