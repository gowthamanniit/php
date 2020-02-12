<?php
	
	$img=imagecreatefromjpeg("123.jpg");

	if (imagejpeg($img,'img_optimized1.jpg',5))
	{
		print("successfully optimzed");
	}
	else
{
	print("optimization error");
}



?>