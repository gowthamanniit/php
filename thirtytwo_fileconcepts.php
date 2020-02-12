<?php
/*
	file: collection of records

	to store data permanently

	syntax:

	$f=fopen(path,mode);

	fread($f,len);

*/
//$f=fopen("e:/testfile.txt", "r");

//$k=fread($f,14);
//print($k);

//while(($k=fgets($f))!=NULL)
//print($k."<br>");

//while(($k=fgetc($f))!=NULL)
//print($k."<br>");

//$k=file("d:/6789.txt");
//print_r($k);

//print(file_get_contents("d:/6789.txt"));

//$f=fopen("d:/pgm1.csv","r");

/*print_r(fgetcsv($f));
print_r(fgetcsv($f));
print_r(fgetcsv($f));
*/

/*while(($s=fgetcsv($f))!=NULL)
print_r($s);
fclose($f); // release memory
*/
$file="d:/67891.txt";
$f=fopen("e:/testfile.txt", "r");
if (file_exists($file))
{
	echo "file available";
	echo "file total size".filesize($file);	
	echo "file eof ".feof($f);	
	echo "file a time ".fileatime($file);	
	echo "file m time ".filemtime($file);	
	echo "file type ".filetype($file);	
}
else
{
	echo "file not available";
}
$file="d:/valluvar";
echo "file type ".filetype($file);	
?>