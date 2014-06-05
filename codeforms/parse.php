<?php
$greeting="goodmorning";
$name=$_GET['name'];
$gender=$_GET['gender'];
if ($gender=='female') {
	echo "hello $greeting Miss $name";
}else{
	echo "hello $greeting Mr $name";
}





?>