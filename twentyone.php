<!--

anonymous function 

def: - we can used to create_function(keyword) dinamically
     - can be stored in a variable (meaning: create_function is stored to $ananym)
     - can be passed to other function (meaning refer extra in below pgm)
     

syntax:

$var=create_function(arg,code);

-->
<?php
$ananym=create_function('$a,$b,$c','return $a+$b+$c;'); // ; is must in code parameter.

$ans=$ananym(44,55,99);
print("total =  ".$ans);

//extra
$k=$ananym;
print("<br> answer :".$k(1,2,3));
?>