<!--how to access object property:

using -> operator

-->
<?php
class Student
{
	var $rno;
	var $name;
	var $mark;
function dis()
{
	echo "using :: scope resolution operator";
}

function display()
{
		echo "roll no:".$this->rno;
		echo "name   :".$this->name;
		echo "mark   :".$this->mark;
}
function setdetails($rn,$nm,$ma)
{
$this->rno=$rn;
$this->name=$nm;
$this->mark=$ma;
}
}

$s1=new Student();
$s1->rno=1001;
$s1->name="selva";
$s1->mark=95;

/*echo "<br> roll no".$s1->rno;
echo "<br> name   ".$s1->name;
echo "<br> mark   ".$s1->mark;
*/


$s2=new Student();

$s2->setdetails(1002,"sampath",89);

$s1->display();
$s2->display();

Student::dis();
?>