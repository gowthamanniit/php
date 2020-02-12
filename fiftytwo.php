<?php

try
{
$a=10;
$b=0;
if(($a>0 && $b==0) || ($a==0 && $b==0))
	throw new Exception("infinite any/zero");
else	
{
$c=$a/$b;
echo "Answer = ".$c;
}
}
catch(Exception $e)
{
echo "error name          = ".$e->getmessage();
echo "<br>error line      = ".$e->getline();
echo "<br>error code name = ".$e->getcode();
echo "<br>error file name = ".$e->getfile();
echo "<br>error file name = ".$e->gettrace();
echo "<br>error file name = ".$e->gettraceasstring();
}

?>