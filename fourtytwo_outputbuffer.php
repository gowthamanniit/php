<?php
function function_callback($buffer)
{
	
	return (str_replace("chennai", "velur",$buffer));	
}
ob_start("function_callback");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1> i am comming from chennai </h1>
</body>
</html>

<?php
//ob_flush();  // erase temporay memory
//ob_clean();
print(ob_get_contents());
ob_end_flush();
?>