<!--constant-->
<?php
	define("pi","3.14");
	echo "pi value = ".pi;
	# pi=pi+1; error because pi is a constant variable.

	$s=defined("pi");
	echo "<br>".$s;    // true means disply 1
	

	echo defined("pi9"); // false means display nothing
?>