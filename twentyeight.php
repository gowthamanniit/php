<?php
// sanatizing and validating form fields:
// use: empty or not
// validate the data before processing it.
// bool empty()-->syntax

$k=$_GET["e"];  // if null then display 'data not filled'
if (empty($k))
	echo "data not filled";
else
	echo "data filled";
?>