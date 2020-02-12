<?php

/*ssi : server side include:
include: one file content to another file content
        we can use so many times.
        -only shows warning if the user mentioned invalid file path.
        -another statment will work(down). do not stop the exe.

include_once: one file content to another file content
        we cannot use so many times.(only one time in a file)
		-only shows warning if the user mentioned invalid file path.
        -another statment will work(down). do not stop the exe.

require - one file content to another file content
        we can use so many times.
		-only shows Fatel error if the user mentioned invalid file path.
        -another statment will not work(down).stop the exe.
 require_once:
 		   one file content to another file content
        we cannot use so many times.(only one time in a file)
        -only shows Fatel error if the user mentioned invalid file path.
        -another statment will not work(down).(stop the exe)

*/
/*
include("eighteen.php");
include("eighteen1.php");
print("<h1>finished</h1>");
*/

/*
include_once("eighteen.php");
include_once("eighteen.php");
*/
/*
require("eighteen.php");
require("eighteen1.php");
print("<h1>finished</h1>");
*/
/*
require_once("eighteen.php");
require_once("eighteen.php");
*/
?>