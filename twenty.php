<?php
	
	function display($c,$d)
	{
		$a=$c;
		$b=$d;
		$c=$a+$b;
		return $c;		
	}                                                                  
	
	$ans=display(22,44);
	print("answer = ".$ans);
	print("answer = ".display(100,200));

?>

<!--

	Note:
		display(10,20);   -- calling function
		10,20             -- paramter(actual)
						  -- either user can give value or var in calling function
	  function  display($a,$b) -- called function
	    {
								-- $a $b formal parameter or arg
								-- user can give only variable in called function.		
	    }
-->