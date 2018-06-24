<?php
if($_POST){
	$title = $_POST['name'];
	$price = $_POST['price'];
	$command1 = $_POST['command1'];
$command2 = $_POST['command2'];
$command3 = $_POST['command3'];
$command4 = $_POST['command4'];
$command5 = $_POST['command5'];
$command6 = $_POST['command6'];
$command7 = $_POST['command7'];
$command8 = $_POST['command8'];
$command9 = $_POST['command9'];
$command10 = $_POST['command10'];
	$image = $_POST['image'];
   $page = $_POST['page'];
	if($api->shop->add($title,$price,$command1,$command2,$command3,$command4,$command5,$command6,$command7,$command8,$command9,$command10,$image,$page)){
		rdr("?page=backend");
	}
}