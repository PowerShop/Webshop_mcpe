<?php
if(!$_SESSION['email'])
{

    header("Location: ?page=login");//redirect to login page to secure the welcome page without login access.
}
?>
<?php
        include("login/database/db_conection.php");
		
        $view_users_query="select * from server where id = 1";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

		while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
		{
	     $id=$row[0];
            $server_name=$row[1];
            $admin_phone=$row[2];
            $admin_fb=$row[3];
            
    
        ?>
<!DOCTYPE HTML>
<!--
	Binary by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title><?php echo $server_name;?> | ติดต่อเเอดมิน</title>
		<meta charset="utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php require 'head.php';?>
	</head>
	<body>

		<!-- Header -->
			<?php require 'menu.php';?>
<p>
<div class="panel panel-default">
<p>
<center><legend style="font-size: 20px"> Contact | ติดต่อเเอดมิน</legend></center><p>
&nbsp<i class="fab fa-facebook-square"></i> Facebook Admin :
<?php echo $admin_fb;?>
<br>&nbsp<i class="fas fa-phone"></i> เบอร์โทรศัพย์ Admin : <?php echo $admin_phone;?>
<br>&nbsp<i"">LINE Admin : Hackgamers24
</div>
<?php }?>
<!--- script js --->
<script src="dist/js/jquery.min.js"></script>
			<script src="dist/js/jquery.scrolly.min.js"></script>
			<script src="dist/js/skel.min.js"></script>
			<script src="dist/js/util.js"></script>
			<script src="dist/js/main.js"></script>
<!-- Footer -->
<hr/>
	<?php require 'footer.php';?>
