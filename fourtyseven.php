<?php
class Emp
{
 private $rno;
 private $name;
 private $mark;
/*
 function __construct()
 {
 		echo "This is constructor. Automattically will call at the time of object creation.";
 }*/
 function __construct($r,$n,$m)
 {
 	$this->rno=$r;
 	$this->name=$n;
 	$this->mark=$m;
 }
 function dis()
 {
echo "<br> rno  = $this->rno";
echo "<br> name = $this->name";
echo "<br> mark = $this->mark";

 }
 function __destruct()
 {
 	$this->rno=0;
 	$this->name="";
 	$this->mark=0;
   echo "<br><br>program terminated after execution finished.$this->rno  $this->name  $this->mark";

 }
 /*function dis()
 {
 		echo "welcome to employee";
 }*/
}
$e1=new Emp(10,"sampath",34);
$e2=new Emp(20,"ampath",3);
$e3=new Emp(30,"path",3);
$e1->dis();
?>