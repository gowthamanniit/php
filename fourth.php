 <!--string literal 
1) single quotes - no change + escape seq not perform
2) double quotes - we can add escape sequence = \n \t \v \b \0 
3) here doc syntax - parse php code syntactically
	echo <<< identifer
	string
	.....
	identifier;
	4) now doc syntax
	echo <<< 'identifer'
	string
	.....
	identifier;

 -->
<?php
echo 'welcome\'s to all';
 necho "welcome\"s to all";
echo 'welcome"s to all';
echo "welcome's to all";


echo "<h1>welcome's \n \t to all</h1>";
echo '<h1>welcome \n \t to all</h1>';


echo "<textarea rows=10 cols=100>hi \t this \v \n is address \n line </textarea>";

echo '<textarea rows=10 cols=100>hi \t 
this \v \n is address \n line </textarea>';

$k="gowthaman";
echo <<< heredoc
$k
heredoc;


echo <<< 'nowdoc'
$k
nowdoc;



?>