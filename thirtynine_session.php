<?php session_start(); ?>  <!-- this is important to start session before html tag-->
<html>
<body>
<?php

/*
 we can store large amount of data.

 data available still when user closes the broswer.

 if you want to delete session before close the browser we can use
 session_destroy() built in method.

*/

$_SESSION["username"]="sampath";
$_SESSION["password"]="sampath!@123";


echo "session created successfully";
?>
</body>
</html>