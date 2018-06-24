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
            $server_name=$row[1];
            
    
        ?>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<?php require 'head.php';?>
	<header id="header">
				<a href="#" class="logo"><strong><?php echo $server_name;?></strong></a>
				<nav>
					<a href="#menu">เมนู</a>

</nav>
</header>
		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
<li style="text-align: center"><img src="<?php echo $avatar;?>" style="height: 106px; width: 106px; border-radius: 50%">
</li>
					<li><a href="?page=index"><i class="fas fa-home"></i> หน้าหลัก</a></li>
					
<li><a href="?page=profile"><i class="fas fa-address-card"></i> ข้อมูลส่วนตัว</a></li>
					<li><a href="#"><i class="fas fa-user-circle"></i> Username : <?php echo $username;?></a></li>
					<li><a href="#"><i class="fas fa-money-bill-alt"></i> Point : <?php echo $point;?></a></li>
					
					<li><a href="?page=shop"><i class="fas fa-shopping-cart"></i> ร้านค้า</a>
</li>
              <li><a href="?page=redeem"><i class="fas fa-gift"></i> ไอเท็มโค้ค</a></li>
					  <?php
      if($_SESSION['admin'] == "true"){
      echo '					<li><a href="?page=truemoney"><i class="fas fa-university"></i> Payment With <font color="red">True</font><font color="orange">Money</font></a></li>
';
      }else{
      }
      ?>
        <li><a href="?page=truewallet"><i class="fas fa-university"></i> Payment With <font color="red">True</font><font color="orange">Wallet</font></a></li>
					<li><a href="?page=dl"><i class="fas fa-download"></i> ดาวห์โหลด</a></li>
					<li><a href="?page=contact"><i class="fas fa-address-card"></i> ติดต่อเเอดมิน</a></li>
					<li><a href="?page=logout"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a></li>
                   

				<li class="dropdown">
  <?php
      if($_SESSION['admin'] == "true"){
      echo '<li><a href="rcon"><i class="fas fa-plug"></i> Console Rcon</a></li>';
      }else{
      }
      ?>
     
</li>
<li class="dropdown">
  <?php
   $user = $_SESSION['admin'];
      if($user == true){
      echo '<li><a href="?page=backend"><i class="fa fa-industry"></i> ระบบจัดการหลังร้าน</a></li>';
      }else{
      
      }
      ?>
</li>
	</ul>
	
			<center><code>&copy PowerShop MCPE</code></center>
</nav>
		<?php }?>
<?php } ?>
