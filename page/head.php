
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
            $admin_loading=$row[5];
            $admin_bg=$row[6];
            $admin_favicon=$row[7];
        ?>
<link href="dist/css/main.css" rel="stylesheet">
<?php // เเบ่งส่วน Js / Css ?>
<link rel="shortcut icon" href="<?php echo $admin_favicon;?>">
<script src="dist/js/jquery.min.js"></script>
			<script src="webb/dist/js/jquery.scrolly.min.js"></script>
			<script src="dist/js/skel.min.js"></script>
			<script src="dist/js/util.js"></script>
			<script src="dist/js/main.js"></script>
<?php // Font // ?>
<link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
    <style>
      body {
		font-family: 'Mitr', cursive;
                font-size: 12px;
      }
       
      h3 {
                font-family: 'Mitr', cursive;
                font-size: 20px;
      }

  h1 {
                font-family: 'Mitr', cursive;
                font-size: 30px;
      }

  h2 {
                font-family: 'Mitr', cursive;
                font-size: 20px;
      }
body {
  background: url("<?php echo $admin_bg;?>") no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
    line-height: 1.6em; /* fix for thai font*/
}
.loader {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url('<?php echo $admin_loading;?>') 50% 50% no-repeat rgb(249,249,249);
}

    </style>
    <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
    <style>
      .font-mitr {
		font-family: 'Mitr', cursive;
                font-size: 15px;
      }
    </style>
<script type="text/javascript">
$(window).load(function() {
	$(".loader").fadeOut("slow");
})
</script>
<div class="loader"></div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<?php // use font awesome  // ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php } ?>