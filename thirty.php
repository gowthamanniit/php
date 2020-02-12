<?php
/*
String functoin(builtin)
*/

$name="gowthaman";
echo "<br>total length :".strlen($name);

echo"<br> compare two strings:".strcmp("abi","abitha");  // 0-3= -3
echo"<br> compare two strings:".strcmp("abith","abi");  // 2-0= 3
echo"<br> compare two strings:".strcmp("gowtham","arul"); // 1
echo"<br> compare two strings:".strcmp("gowtham","gowtham"); // 0

echo "<br> String pos:".strpos("sampath","a");
echo "<br> String pos:".strpos("sampath","a",2);

echo "<br> string contain:".strstr("sampath","pa"); //path
echo "<br> string contain:".strstr("sampath","a"); //ampath

echo "<br> count substring:".substr_count("gowthaman","a"); //2 

echo "<br> count substring:".substr_count("gowthaman karur ","a",6); //2
echo "<br> count substring:".substr_count("sampath sampath sampath sampath ","a",8,10); //3
echo "<br> replace".str_replace("karur", "pothanur", "i am comming from karur. my native is karur");

echo "<br>substring :".substr("sampathkumar",3);
echo "<br>substring :".substr("sampathkumar",3,6);

$text="delhi,mumbai,chennai,kalkatta";
print_r(explode(",", $text));   // explode: strint to array

$arr=Array("selva","sampath","dhinesh");
print(implode($arr));   // implode: array to string

$name="Gowthaman";
echo "<br> String to upper:".strtoupper($name);
echo "<br> String to lower:".strtolower($name);

print_r(str_split($name,2)); // convert array + split 2 letter

echo "<br>Ascii to char value:".chr(65);
echo "<br>char to ascii value:".ord('A');

echo "<br> Reverse :".strrev($name);

// formatting built in string function

$k=20;
printf("<br>Answer = %d",$k);
printf("<br>%d is Answer ",$k);
printf("<br>Answer %s is good",$k);
$name="gowthaman";
printf("<br> Your Name = %s",$name);
$mark=120.34342;
printf("<br> your mark = %f",$mark);
$c=65;
printf("<br> char :%c",$c);
$d=8;
printf("<br> octal %o",$d);
$d=10;
printf("<br> hexa %x",$d);
printf("<br> binary %b",$d);


//trim

$name="     gowthaman        ";
print("<br> length ".strlen($name));
$name=trim($name);
print("<br> length ".strlen($name));
//$name=ltrim($name);
//print("<br> length ".strlen($name));
//$name=rtrim($name);
//print("<br> length ".strlen($name));

$k="On the Insert
 tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these gallerie
 s to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.
";
print(wordwrap($k,20," sampath "));
print("<br>".($k));

?>