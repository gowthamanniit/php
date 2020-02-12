<!--
sanitizing:
def: removing invalid char's

syntax:
filter_var(var or value,filter);
-->
<?php

/*
$email='├gowth          am@gma § il.com ';
echo filter_var($email,FILTER_SANITIZE_EMAIL);

$email="123gowtham@gmail.com";
echo "<BR>NUMBER ONLY".filter_var($email,FILTER_SANITIZE_NUMBER_INT);
$email="§├Vcom@#$";
echo "<BR>NUMBER ONLY".filter_var($email,FILTER_SANITIZE_SPECIAL_CHARS);
$fl=12345.4545;
echo "<BR>float ONLY".filter_var($fl,FILTER_SANITIZE_NUMBER_FLOAT);

echo "<BR>NUMBER ONLY".filter_var($email,FILTER_SANITIZE_STRING);
$url="┘http://╚            localhsot/mypgm/one.html";
echo "<br> URL :".filter_var($url,FILTER_SANITIZE_URL);
*/

/*
validataion filter:

def: to test given value in particualt format
syntax:
filter_var(var or value, validationfilter)

*/

/*
$email="@gowthaman@niit-karur.com@";

if(filter_var($email,FILTER_VALIDATE_EMAIL))
{
	echo "correct email format";
}
else
{
	echo "Invalid Email format";
}

$num=324334;
if(filter_var($num,FILTER_VALIDATE_INT))
{
	echo "correct number format";
}
else
{
	echo "Invalid number format";
}
$num='A32433423423423432';
if(filter_var($num,FILTER_VALIDATE_FLOAT))
{
	echo "correct FLOAT format";
}
else
{
	echo "<BR>Invalid FLOAT format";
}
$PATH='http://www.123GMAIL.COM';
if(filter_var($PATH,FILTER_VALIDATE_URL))
{
	echo "correct URL format";
}
else
{
	echo "<BR>Invalid URL format";
}
*/
/*
(common validation function):
ctype_upper
ctype-alnum
*/

$name="GOWTHAMAN.k";
echo "to test caps:".ctype_upper($name);
if (!(ctype_upper($name)))
	echo "please enter only caps in all letter";

$num="123sdfs";
echo ctype_alnum($num);  //special char not allowed

$num="asdfas";
echo ctype_alpha($num);  //only a-z A-Z

$num="123213";
echo ctype_digit($num);  //only 0-9

$name="gowthaman";
echo ctype_lower($name); // only small letter

$name=".,'<>?/{}[]()";
echo ctype_punct($name);

$con="\n\t\r\0";
echo "<br>control char".ctype_cntrl($con);











?>