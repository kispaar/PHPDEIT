<?php
 
 echo $_GET['name'];
 $details=array('john'=>'my name is john','james'=>"my name is james");
echo "<br>";

foreach ($details as $key => $value) {
	if ($key==$_GET['name']) {
	echo "$key ----$value";
	echo "<br>";
	}
	
}
 



?>