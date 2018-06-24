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

<?php
        include("login/database/db_conection.php");
		
$username = $_SESSION['email'];
        $view_users_query="select * from user where username = '$username'";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

		while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
		{
	     $id=$row[0];
            $username=$row[1];
            $point=$row[3];
            $avatar=$row[4];
           
            
    
        ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $server_name;?> | Profile</title>
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
<div class="col-md-120">
<center><legend style="font-size: 20px"><i class="fas fa-user-circle"></i> ข้อมูลส่วนตัว </legend>
<p>
<p><img src="<?php echo $avatar;?>" style="height: 106px; width: 106px; border-radius: 50%">
<p><i class="fas fa-user"></i> ชื่อผู้ใช้ : <?php echo $username;?>
<p><i class="fas fa-money-bill-alt"></i> พอยท์คงเหลือ : <?php echo $point;?>
 พอยท์
<p><button type="button" data-toggle="modal" data-target="#changeavatar" class="btn btn-info"><i class="fas fa-cog"></i> เปลี่ยน ภาพ[ฟรี] </button>
<button type="button" data-toggle="modal" data-target="#changepass" class="btn btn-danger"><i class="fas fa-cog"></i> เปลี่ยนรหัสผ่าน </button>
<p>
<button type="button" data-toggle="modal" data-target="#โอนพอยท์" class="btn btn-warning"><i class="fas fa-exchange-alt"></i> โอนพอยท์ </button>
</center>
</div>
</div>
</div>

<div class="col-md-120">
 <div class="panel panel-default">
    <div class="panel-body">
      <legend><i class="fas fa-clock" aria-hidden="true"></i> ประวัติการเติมพอยท์ 10 ลำดับ</legend>
  <div class="table-responsive">
  <table class="table is-bordered" style="background-color: rgba(0,0,0,.03)">
  <thead>
    <tr>
      <th>#</th>
      <th><i class="fas fa-sort-numeric-up"></i> หมายเลขอ้างอิง</th>
      <th><i class="fas fa-money-bill-alt"></i> จำนวนเงิน</th>
	  <th><i class="fas fa-clock"></i> วันเวลาที่เติม</th>
    </tr>
  </thead>
  <tbody>
    <?php 
 $id = $_SESSION['email'];
    $query = "SELECT * FROM `tw_profile` WHERE `fb_id` = '$id' ORDER BY `fb_id` DESC LIMIT 10"; 
    if($result = query($query)) { 
    while ($row = $result->fetch()){ 
      ?>
    <tr class="active">
      <td><img  class="img" src="<?php echo $avatar;?>" height="25"></td>
      <td><?php echo $row['tran_number'];?></td>
      <td><?php echo $row['amount']; ?> Point</td>
	  <td><?php echo $row['DATETIME'];?></td>
      </tr><?php }}?>
      </tbody>
</table>
    </div>
  </div>

</div>

<div class="col-md-120">
 <div class="panel panel-default">
    <div class="panel-body">
      <legend><i class="fas fa-clock" aria-hidden="true"></i> ประวัติการโอนพอยท์ 10 ลำดับ</legend>
    <div class="table-responsive">
  <table class="table is-bordered" style="background-color: rgba(0,0,0,.03)">
  <thead>
    <tr>
      <th>#</th>
      <th style="font-size: 12px"><i class="fas fa-user-circle"></i> ชื่อผู้เล่นที่โอนพอยท์ให้</th>
      <th style="font-size: 12px"><i class="fas fa-money-bill-alt"></i> จำนวนเงิน</th>
      <th style="font-size: 12px"><i class="fas fa-clock"></i> วันเวลาที่โอน </th>
    </tr>
  </thead>
  <tbody>
    <?php 
 $id = $_SESSION['email'];
    $query = "SELECT * FROM `transfer_point` WHERE `name` = '$id' ORDER BY `name` DESC LIMIT 10"; 
    if($result = query($query)) { 
    while ($row = $result->fetch()){ 
  $name = $row['username'];
  $query2 = "SELECT * FROM `user` WHERE `username` = '$name' ORDER BY `username` DESC LIMIT 10"; 
    if($result2 = query($query2)) { 
    while ($row2 = $result2->fetch()){ 
      ?>
    <tr class="active">
      <td><img  class="img" src="<?php echo $row2['4'];?>" height="25"></td>
      <td><?php echo $row['username'];?></td>
      <td><?php echo $row['point']; ?> Point</td>
      <td><?php echo $row['date'];?> </td>
      </tr><?php }}}}?>
      </tbody>
</table>
    </div>
  </div>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="changepass" role="dialog">
    <div class="modal-dialog">
<p>
<br>
<p>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="text-align: center; font-size: 20px" class="modal-title">เปลี่ยนรหัสผ่าน</h4>
        </div>
        <div class="modal-body">
<?php 
	
		if(isset($_POST['re_password']))
		{
include("dist/connect/connect_profile.php");
		$old_pass=$_POST['old_pass'];
		$new_pass=$_POST['new_pass'];
		$re_pass=$_POST['re_pass'];
      $username = $_SESSION['email'];
		$chg_pwd=mysql_query("select * from user where username = '$username'");
		$chg_pwd1=mysql_fetch_array($chg_pwd);
		$data_pwd=$chg_pwd1['password'];
		if($data_pwd==$old_pass){
		if($new_pass==$re_pass){
			$update_pwd=mysql_query("update user set password = '$new_pass' where username = '$username'");
			echo "<script>alert('เปลี่ยนรหัสผ่านสำเร็จ!'); window.location='?page=profile'</script>";
		}
		else{
			echo "<script>alert('เปลี่ยนรหัสผ่านไม่สำเร็จ!'); window.location='?page=profile'</script>";
		}
		}
		else
		{
		echo "<script>alert('รหัสผ่านเก่าไม่ถูกต้อง!'); window.location='?page=profile'</script>";
		}}
	?>
      <form method="post">
		<dl>
			<dt>
				รหัสผ่านเก่าคุณ
			</dt>
				<dd>
					<input type="password" name="old_pass" placeholder="รหัสผ่านเก่าคุณ..." value="" required />
				</dd>
		</dl>
		<dl>
			<dt>
				รหัสผ่านใหม่
			</dt>
				<dd>
					<input type="password" name="new_pass" placeholder="รหัสผ่านใหม่..." value=""  required />
				</dd>
		</dl>
		<dl>
			<dt>
				รหัสผ่านใหม่อีกครั้ง
			</dt>
				<dd>
					<input type="password" name="re_pass" placeholder="รหัสผ่านใหม่อีกครั้ง..." value="" required />
				</dd>
		</dl>
	
        </div>
        <div class="modal-footer">
<button type="submit" name="re_password" class="btn btn-success">ยืนยัน</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
        </div>
      </div>
      
</form>
    </div>
  </div>
  
</div>
</body>
<!-- Change Avatar -->
<div class="container">

  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="changeavatar" role="dialog">
    <div class="modal-dialog">
<p>
<br>
<p>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="text-align: center; font-size: 20px" class="modal-title">เปลียนภาพประจำโปรไฟล์</h4>
        </div>
        <div class="modal-body">
<?php
	if(isset($_POST['avatar_active']))
		{
ini_set('display_errors', 1); 	
error_reporting(~0); 	

include("dist/connect/connect.php");

  $username = $_SESSION['email'];
 	$sql = "UPDATE user SET avatar = '". $_POST["avatar"]. "' WHERE username = '$username'";

$query = mysqli_query($conn,$sql); 
if($query) { 	 
 echo "<script type='text/javascript'>";
	echo "alert('บันทึกข้อมูลสำเร็จ!');";
	echo "window.location = '?page=profile'; ";
	echo "</script>";
} 	
mysqli_close($conn); 
}
?> 
      <form method="post">
		<dl>
			<dt style="font-size: 18px">
				ลิ้งภาพโปรไฟล์
			</dt>
				<dd>
					<input type="text" name="avatar" placeholder="ลิ้งรูปภาพ Avatar" value="<?php echo $avatar;?>" required />
				</dd>
		</dl>
        </div>
        <div class="modal-footer">
<button type="submit" name="avatar_active" class="btn btn-success">ยืนยัน</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
        </div>
      </div>
      
</form>
    </div>
  </div>
  
<!-- โอนพอยท์ -->
<div class="container">

  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="โอนพอยท์" role="dialog">
    <div class="modal-dialog">
<p>
<br>
<p>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="text-align: center; font-size: 20px" class="modal-title"><i class="fas fa-exchange-alt"></i> โอนเงิน</h4>
        </div>
        <div class="modal-body">
<?php
	
include("dist/connect/connect_profile.php");

		if(isset($_POST['pay_active']))
		{
date_default_timezone_set('Asia/Bangkok');
		$pay_point=$_POST['point'];
		$pay_repoint=$_POST['repoint'];
      $points=$_POST['point'];
      $name=$_POST['name'];
      $username = $_SESSION['email'];
		$chg_pwd=mysql_query("select * from user where username = '$username'");
		$chg_pwd1=mysql_fetch_array($chg_pwd);
		$data_pwd=$chg_pwd1['point'];
		if($data_pwd > $points){
		if($pay_point==$pay_repoint){
			$update_point=mysql_query("update user set point = point + '$pay_point' where username = '$name'");
         $update_points=mysql_query("update user set point = point - '$pay_point' where username = '$username'");
         $insert_history=mysql_query("insert into `transfer_point`(`name`,`username`,`point`,`date`) values ('$username','$name','$pay_point','".trim(date("Y-m-d H:i:s"))."')");
			echo "<script>alert('โอนพอยท์สำเร็จ!'); window.location='?page=profile'</script>";
		}
		else{
			echo "<script>alert('โอนพอยท์ไม่สำเร็จ!'); window.location='?page=profile'</script>";
		}
		}
		else
		{
		echo "<script>alert('พอยท์ไม่เพียงพอ!'); window.location='?page=profile'</script>";
		}}
?> 
      <form method="post">
		<dl>
			<dt style="font-size: 18px">
				ชื่อการโอนเงิน
			</dt>
         
<dl>
				<dd>
					<input type="text" name="name" placeholder="ชื่อผู้เล่นที่จะโอนพอยท์ให้" value="" required />
				</dd>
		</dl>
<dt style="font-size: 18px">
				จำนวนเงินทีจะโอน
			</dt>

<dl>
	<dd>
					<input type="text" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข!'); this.value='';}" name="point" placeholder="จำนวนพอยท์ที่จะโอน" value="" required />
				</dd>
		</dl>

<dt style="font-size: 18px">
				จำนวนเงินทีจะโอนอีกครั้ง
			</dt>

<dl>
	<dd>
					<input type="text" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข!'); this.value='';}" name="repoint" placeholder="ใส่จำนวนพอยท์ที่จะโอนอีกครั้ง" value="" required />
				</dd>
		</dl>
        </div>
        <div class="modal-footer">
<button type="submit" onclick="return confirm('ยืนยันการทำรายการ\nกรุณาตรวจสอบข้อมูลให้ถูกต้อง\nหากผิดพลาดจะไม่สามารถเเก้ไขได้!')" name="pay_active" class="btn btn-success">ยืนยัน</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
        </div>
      </div>
      
</form>
    </div>
  </div>
</div>
</div>

</div>
</body>

<!-- Change Username -->
<!-- Footer -->
	<?php require 'footer.php';?>
<?php } ?>
<?php } ?>
