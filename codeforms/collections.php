<?php
$items= array("john","mary","lucy");
echo "<ul type='circle'>";
foreach ($items as $x) {
	echo "<li>";
	echo strtoupper($x);
	echo "</li>";
}

echo "</ul>";
echo $items[2];
echo "<br/>";
$naomi=array('fname' =>"Naomi","gender"=>"female","mobile"=>"07000001223");
$john=array('fname' =>"john","gender"=>"male","mobile"=>"07000001223");
$contacts = array("one"=>$naomi,2=>$john);
foreach ($contacts as $key => $value) {
	foreach ($value as $k => $v) {
		echo "$k is $v <br/>";
	}
}






?>