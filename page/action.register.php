<html>
  <head>
    <?php require 'head.php';?>
    <meta charset="utf-8">
    <title>Login and Register</title>

  </head>
  <body>

<div class="col-md-3">
</div>
	<div class="col-md-6">
		<div class="panel panel-defualt">
			<div class="panel-body">
				<?php
if($_POST){
$name = $_POST['name'];
$password = $_POST['pass'];
$repassword = $_POST['re-pass'];
if($password == $repassword){

}else{
	echo "รหัสผ่านไม่ตรงกัน";
	exit();
}
if($api->user->Register($name,$password)){

}else{
  
}
}
?>
			</div>
	</div>
</div>

<?php require 'footer.php';?>
  </body>
</html>


