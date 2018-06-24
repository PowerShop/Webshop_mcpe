			  <?php
        include("login/database/db_conection.php");
		$email = $_SESSION['email'];
        $view_users_query="select * from user where username = '$email'";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

		while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
		{
	     $uid=$row[0];
            $username=$row[1];
            $point=$row[3];
            $avatar=$row[4];
    
        ?>
<?php
include("login/database/db_conection.php");
		$email = $_SESSION['email'];
        $view_users_query="select * from server where id = 1";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

		while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
		{
	     $id=$row[0];
            $name=$row[1];
            
    
        ?>
			<link rel="stylesheet" href="dist/css/main.css">

 <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<?php require 'head.php';?>
	<header id="header">
				<a href="#" class="logo"><strong><?php echo $name;?></strong></a>
				<nav>
					<a href="#menu">เมนู</a>

</nav>
</header>
		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
<li style="text-align: center"><img src="<?php echo $avatar;?>" style="height: 106px; width: 106px; border-radius: 50%">
</li>
					<li><a href="?page=index"><i class="fa fa-home"></i> หน้าหลัก</a></li>
					
					<li><a href="#"><i class="fas fa-user-circle"></i> Username : <?php echo $username;?></a></li>
					<li><a href="#"><i class="fas fa-money-bill-alt"></i> Point : <?php echo $point;?></a></li>
					
<li><a href="?page=shop"><i class="fas fa-user-plus"></i> ยศ</a>
<li><a href="?page=item"><i class="fas fa-cogs"></i> ไอเท็ม </a></li>
					<li><a href="?page=enchant"><i class="fa fa-shopping-cart"></i> รออัพหรื่อไม่วางขาย</a>
</li>
					<li><a href="?page=food"><i class="fa fa-utensils"></i> อาหาร</a></li>
					<li><a href="?page=build"><i class="fas fa-building"></i> สิ่งของก่อสร้าง</a></li>
					<li><a href="?page=money"><i class="far fa-credit-card"></i> เงินในเกม</a></li>
<li><a href="?page=freeitem"><i class="fas fa-archive"></i> ฟรีไอเท็ม</a></li>
					<li><a href="?page=itempack"><i class="fas fa-cubes"></i> ไอเท็มเเพ็ค</a></li>

					<li><a href="?page=logout"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a></li>
					<li><a href="#"></a></li>
                   
				<li class="dropdown">
  <?php
      if($_SESSION['admin'] == "true"){
      echo '<li><a href="?page=backend"><i class="fa fa-industry"></i> ระบบจัดการหลังร้าน</a></li>';
      }else{
      }
      ?>
      <li>
			
	<li class="dropdown">
  <?php
      if($_SESSION['admin'] == "true"){
      echo '<li><a href="?page=backend"><i class="fas fa-plug"></i> Console Rcon</a></li>';
      }else{
      }
      ?>
      <li>
	</ul>
			<center><code>&copy PowerShop MCPE</code></center>
</nav>
		<?php }?>
<?php } ?>