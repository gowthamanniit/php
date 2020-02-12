
<?php
class Student
{

function getdetails()
{
	$this->sno=1;
	$this->name='gowthaman';
	$this->mark=100;
	echo ("this is oops concept");	
}
function disdetails()
{
	echo ("Serial No.   :".$this->sno);	
	echo ("Student Name.:".$this->name);	
	echo ("Mark         :".$this->mark);	
}


}

$s1=new Student();
$s1->getdetails();
$s1->disdetails();
?>