<html>
<?php

$dateVar=date("l");            // GMT - default world time UTC
echo "l=".$dateVar;  // saturday 
echo "<br>";

$dateVar=date("d");
echo "d=$dateVar";  // 01 -31 

echo "<br>";
$dateVar=date("D");
echo "D=".$dateVar;  // Sat Sun Mon
echo "D=$dateVar";  // Sat Sun Mon
print "D=$dateVar";

echo "<br>";
$dateVar=date("j");
echo "j=".$dateVar;  // 1-31

echo "<br>";
$dateVar=date("N");
echo "N=".$dateVar;  // 1-monday 6 - saturday 7-sunday 

echo "<br>";
$dateVar=date("w");
echo "w=".$dateVar;  // 0-sunday 1 monday


echo "<br>";
$dateVar=date("z");
echo "z=".$dateVar;  // day of the year (0-365)

echo "<br>";
$dateVar=date("W");
echo "W=".$dateVar;  // week no. of the year. calculate starting from monday.

echo "<br>";
$dateVar=date("F");
echo "F=".$dateVar;  // month full name

echo "<br>";
$dateVar=date("M");
echo "M=".$dateVar;  // first 3 letters of the month

echo "<br>";
$dateVar=date("n");
echo "n=".$dateVar;  // 1-12

echo "<br>";
$dateVar=date("L");
echo "L=".$dateVar;  // leep year 1 or 0 false

echo "<br>";
$dateVar=date("y");
echo "y=".$dateVar;  // year 2 digits

echo "<br>";
$dateVar=date("Y");
echo "Y=".$dateVar;  // year 4 digits

echo "<br>";
$dateVar=date("m");
echo "m=".$dateVar;  // 01-12 month

echo "<br>";
$dateVar=date("A");
echo "A=".$dateVar;  // A.M P.M

echo "<br>";
$dateVar=date("S");
echo "S=".$dateVar;  // day 1st 2nd 3rd 4th

	?>

</html>