<?php

if(isset($_COOKIE["username"]))
{
echo "User name = ".$_COOKIE["username"];
echo "password  = ".$_COOKIE["password"];
}
else
{
	echo "cookie not available";
}
?>