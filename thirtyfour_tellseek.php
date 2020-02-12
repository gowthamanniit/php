
<!--
syntax: int fseek(source,offset,[whence])
	    int ftell(source)
		bool rewind(source) // start postion
-->

<?php
$file=fopen("123.txt","r");
print(fread($file,4));
print("cursor position:".ftell($file));
//fseek($file, 10); // From 0th postion to 10 position
fseek($file, 12,SEEK_CUR); // From 4th postion to 10 position
print(fread($file,4));
rewind($file);
print(fread($file,4));
?>