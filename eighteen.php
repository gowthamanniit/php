<?php


$cal=cal_info(0);  /*0 means - Gregorian  CAL_GREGORIAN*/
print_r($cal);
print("<br>");

$cal=cal_info(1);  /*1 means - Julian   CAL_JULIAN*/
print_r($cal);

print("<br>");
$cal=cal_info(2);  /*2 means -  CAL_JEWISH*/
print_r($cal);

print("<br>");
$cal=cal_info(3);  /*3 means -  CAL_FRENCH*/
print_r($cal);



/*TO FIND NO. OF DAYS IN A PARTICULAR CALENDER */

$ans=cal_days_in_month(CAL_JEWISH, 13, 2020);
print("Total No. of Days".$ans);

$ans=cal_days_in_month(CAL_GREGORIAN, 12, 2020);
print("Total No. of Days".$ans);



/*cal_to_jd(calendar, month, day, year)*/

$ans=cal_to_jd(CAL_GREGORIAN, 2, 10, 2020);
print($ans);

/*JDDayOfWeek - sunday monday tuesday...*/

/*
$ans=date("d");
$ans=date("m");
$ans=date("y");
print("<br> year =".$ans);
*/

$ans=cal_to_jd(CAL_GREGORIAN, date("m"), date("d"), date("y"));
print($ans);

$day=JDDayOfWeek($ans,1); /*1 - optional (Monday other wise 1)*/
print("<br> today day is:".$day);

$day=JDMonthName($ans,2); /* 1.December 2.Dec */ 
print("<br> Month Name is:".$day);
?>