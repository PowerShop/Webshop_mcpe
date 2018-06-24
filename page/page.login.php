
<!DOCTYPE HTML>
<!--
	Binary by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<section>
<html>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php require 'head.php';?>
		</head>
	<body>

		<!-- Header -->
		<?php require 'menu-reg-log.php';?>
			</nav>

		<!-- Banner -->
			<section>
<div class="container">
    <div class="col-md-6">

				<div class="inner">
					<h1><font size="8"><html>
<head lang="en">
    <meta charset="UTF-8">
</head>
<style>
    .login-panel {
        margin-top: 10px;

}
</style>

<body>

<center>
    <div class="center">
        <div class="col-md-6 col-md-offset-6">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><font color="white">ล็อคอิน</font></h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" name="login" id="login" action="?page=login">
                        
<filedset>
                            <div class="form-group"  >
                                <input style="color: white" class="form-control" placeholder="Username" name="name" id="name" type="text">
                            </div>
                            <div class="form-group">
                                <input style="color: white" class="form-control" placeholder="Password" name="pass" id="pass" type="password" value="">

   <div class="form-group">
                                <input style="color: white" class="form-control" type="hidden" placeholder="hidden" name="hidden" id="pass" type="text" value="">
                            </div>
                             <br>
<button type="submit" class="btn btn-success" name="login">&nbsp&nbsp&nbsp&nbsp&nbspLogin&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                        
</filedset>
                    </form>
                </div>
            </div>
        </div>

</div>
</div>
</div>
</div>
</div>
</div>
</body>

</html></font>
					
				</div>
			</section>
		<!-- Footer -->
			

		<!---- Use JS ---->
<script src="dist/js/jquery.min.js"></script>
			<script src="dist/js/jquery.scrolly.min.js"></script>
			<script src="dist/js/skel.min.js"></script>
			<script src="dist/js/util.js"></script>
			<script src="dist/js/main.js"></script>

<?php require 'footer.php';?>
<?php

include("dist/connect/db_conection.php");

if(isset($_POST['login']))
{
    $user_name=$_POST['name'];
    $user_pass=$_POST['pass'];

if($user_name=='')
    {
        
        echo"<script>alert('กรุณากรอก Username!')</script>";
exit();
    }

if($user_pass=='')
    {
        
        echo"<script>alert('กรุณากรอก Password!')</script>";
exit();
    }
    $check_user="select * from user WHERE username='$user_name'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
        $_SESSION['email']=$user_name;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
    
    }
}
if($_POST){
$name = $_POST['name'];
$password = $_POST['pass'];
if($api->user->Login($name,$password)){

}else{
  
}
}
?>