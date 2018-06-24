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
            $admin_dl=$row[4];
            
    
        ?>
<!DOCTYPE HTML>
<!--
	Binary by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title><?php echo $server_name;?> | ดาวห์โหลด</title>
		<meta charset="utf-8" />
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php require 'head.php';?>

		</head>
	<body>

		<!-- Header -->
<!--- script js --->
<script src="dist/js/jquery.min.js"></script>
			<script src="dist/js/jquery.scrolly.min.js"></script>
			<script src="dist/js/skel.min.js"></script>
			<script src="dist/js/util.js"></script>
			<script src="dist/js/main.js"></script>
		<?php require 'menu.php';?>
<p>
<div class="panel panel-default">
<div class="panel panel-body">
<center><legend style="font-size: 20px"><i class="fa fa-download"></i> Download</legend><hr/>
<p> <a href="<?php echo $admin_dl;?>" class="btn btn-success">Download ตัวเกม Minecraft PocletEdition</center></a>
</div>
</div>
<!-- Footer -->
	<?php require 'footer.php';?>
<?php } ?>
