<?php
echo "<h1>Today Date is:</h1><br>";
echo("<br>".date("d"));   // output ex: 05/12/2019 thursday  
						  // final 05
echo("<br>".date("D"));   // Thu
echo("<br>".date("l"));   // Thursday
echo("<br>".date("n"));   // 12 th month
echo("<br>".date("m"));   // 12 th month
echo("<br>".date("w"));   // 4 th day of the week sun-0 mon-1 tue-2
echo("<br>".date("W"));   // 49 th week
echo("<br>".date("z"));   // 338 th day of the year
echo("<br>".date("dS"));  // 05th
echo("<br>".date("F"));   // December
echo("<br>".date("Y"));   // 2019
echo("<br>".date("h:i:s a")); // current time - 5:30
echo("<br>".date("h:i:s A")); // 

echo("<br>".time());  // unix time stamp (total seconds )

echo("<br>".checkdate(2,28,2019)); // true: 1 , false : nothing

$k=time();
print("<br>".$k."  = ");
print_r(getdate($k));

$timestamp=mktime(1,0,0,1,1,1970);  // 0 =>ie seconds counting from 								    // 1-1-1970
print("<br>".$timestamp);



print(date_default_timezone_set("Asia/Calcutta"));

print(date_default_timezone_get());





?>