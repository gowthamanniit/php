<?php

//copy

 // print(copy("123.txt","d:/sampathtest.txt"));  // return boolean 1

// lock file


$file=fopen("456.txt","w+");

if (flock($file,LOCK_EX))
{
	fwrite($file, "hai 342");
	echo "success created";	
	//flock($file, LOCK_UN);
}
else
{
	echo "error something";
}
fclose($file);


//rename("456.txt", "789.txt");


// unlink("789.txt"); // delete file
// unlink("test1.php");

?>