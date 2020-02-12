<?php
$dun=setcookie("username","",time()-1); // delete cookie
$dpa=setcookie("password","",time()-1); // delete cookie
if($dun==1 && $dpa==1)
echo "cookie deleted successfully";
else
echo "cookie not deleted";
?>