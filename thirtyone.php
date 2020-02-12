<?php
// regular expression: search pattern (true or false)
// string type

echo preg_match("/^Good/i", "good morning")."<br>";  // 1 or 0 (int return)

if(preg_match("/^Good/i", "good morning"))
{
	print("match found");
}
else
{
	print("match not found");
}
?>