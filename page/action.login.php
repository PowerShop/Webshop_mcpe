
<html>
  <head>
    <?php require 'head.php';?>
<?php require 'menu-reg-log.php';?>
    <meta charset="utf-8">
    <title>Login and Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>

<div class="col-md-3">
</div>
	<div class="col-md-6">
  <p>
		<div class="panel panel-defualt">
    
			<div class="panel-body">
<?php
if($_POST){
$name = $_POST['name'];
$password = $_POST['pass'];
if($api->user->Login($name,$password)){

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


