<?php

$fn=$_FILES["f1"]["name"];
echo "<br>file name =".$_FILES["f1"]["name"];
echo "<br>file name =".$_FILES["f1"]["size"];
echo "<br>file name =".$_FILES["f1"]["tmp_name"];
if (move_uploaded_file($_FILES["f1"]["tmp_name"], "uploadimages/".$fn))
{
	echo "successfully uploaded";
	echo "<img src='uploadimages/$fn'>";
}
else
{
	echo "error found";
}
?>