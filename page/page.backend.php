<?php
if(isset($_SESSION['email'])){

}else{
    rdr("?page=index");
}
if($_SESSION['admin'] == "true"){

}else{
    rdr("?page=index");
}
?>
<?php
        include("login/database/db_conection.php");
		$email = $_SESSION['email'];
        $view_users_query="select * from truemoney where id = 1";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

		while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
		{
	     $truemoney_uid=$row[1];
            $truemoney_passkey=$row[2];
            
    
        ?>
<?php
        include("login/database/db_conection.php");
		$email = $_SESSION['email'];
        $view_users_query="select * from truewallet where id = 1";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

		while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
		{
	     $truewallet_phone=$row[1];
            $truewallet_username=$row[2];
          $truewallet_password=$row[3];
            
$host_name=$row[4];
$host_user=$row[5];
$host_pass=$row[6];
$host_db=$row[7];
$sitekey=$row[8];
$open_pass=$row[9];
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
            $admin_loading=$row[5];
            $admin_bg=$row[6];
            
    
        ?>
<?php
        include("login/database/db_conection.php");
		
        $view_users_query="select * from img where id = 1";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

		while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
		{
	     $id=$row[0];
            $img1=$row[1];
            $img2=$row[2];
            $img3=$row[3];
            $img4=$row[4];
            $img5=$row[5];
    
        ?>
<html>
<head>
    <title>Admin</title>
    <?php require 'head.php';?>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<html>	<script src="dist/js/jquery.js"></script>

<script src="dist/js/bootswatch.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="dist/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/app.css">
<link rel="stylesheet" href="dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
<script src="dist/js/jquery.min.js"></script>
			<script src="dist/js/jquery.scrolly.min.js"></script>
			<script src="dist/js/skel.min.js"></script>
			<script src="dist/js/util.js"></script>
			<script src="dist/js/main.js"></script>
</head>
<body>
<?php
require 'menu.php'
?>
<p>
    <div class="col-md-5">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1><legend><i class="fa fa-home" aria-hidden="true"></i> จัดการสินค้า</legend></h1>
                <form action="?action=additem" method="post">
                    <div class="card">
                        <div class="card-block">
                            <p class="card-text"><input class="form-control" name="image" id="image" placeholder="ลิ้งค์รูป" required></p>
                            <p class="card-text"><input class="form-control" name="name" id="name" placeholder="ชื่อสินค้า" required></p>
                            <p class="card-text"><input class="form-control" id="price" name="price" placeholder="ราคา" required></p>
                          <p class="card-text"><input class="form-control" id="page" name="page" placeholder="หน้าที่ใช้เเสดงสินค้า" required></p>
                          
<hr/>
<h1><legend><i class="fas fa-code"></i> Command | คำสั่ง</legend> <h5 style="color: red"> *สามารถเพิ่มได้สูงสุด 10คำสั่ง หากใช้ไม่ถึง10คำสั่ง ให้ใส่ <font color="orange">#</font> ในช่องนั้นไว้</h5></h1>

 <p class="card-text"><input class="form-control" id="command" name="command1" placeholder="คำสั่งที่ 1" required value="#"></p>

  <p class="card-text"><input class="form-control" id="command" name="command2" placeholder="คำสั่งที่ 2" required value="#"></p>

  <p class="card-text"><input class="form-control" id="command" name="command3" placeholder="คำสั่งที่ 3" required value="#"></p>

  <p class="card-text"><input class="form-control" id="command" name="command4" placeholder="คำสั่งที่ 4" required value="#"></p>

  <p class="card-text"><input class="form-control" id="command" name="command5" placeholder="คำสั่งที่ 5" required value="#"></p>

  <p class="card-text"><input class="form-control" id="command" name="command6" placeholder="คำสั่งที่ 6" required value="#"></p>

  <p class="card-text"><input class="form-control" id="command" name="command7" placeholder="คำสั่งที่ 7" required value="#"></p>

  <p class="card-text"><input class="form-control" id="command" name="command8" placeholder="คำสั่งที่ 8" required value="#"></p>

  <p class="card-text"><input class="form-control" id="command" name="command9" placeholder="คำสั่งที่ 9" required value="#"></p>

  <p class="card-text"><input class="form-control" id="command" name="command10" placeholder="คำสั่งที่ 10" required value="#"></p>
                            <br>
                            <input type="submit" class="btn btn-success btn-block" value="เพิ่มสินค้า">
                        </div>
                    </div>
                </form>
</div>
</div>
<div class="col-md-120">
        <div class="panel panel-default">
            <div class="panel-body">
              <h1><legend><i class="fa fa-list-ul"></i> List Item </legend></h1>
<hr/>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                    <tr class="active">
                        <th>Name</th>
                        <th>ลบสินค้า</th>
                        
                    </thead>
                    <tbody>
                    <?php
                    if($result = query("SELECT * FROM `item`")) {
                        while ($row = $result->fetch()){ ?>
                            <tr class="active">
                            <td><?php echo $row['name'];?></td>
                            <td><a href="?action=delete&member_id=<?php echo $row['id'];?>" class="btn btn-danger btn-block onclick="return confirm('ยืนยันการลบสินค้า')" <?php if($_SESSION['point']<$row['price']){}?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Delete </a></td>
                            </tr><?php }}?>
                    </tbody>
                </table>
                                        </div>
                                    </div>
                                </div>
                          </div>
</div>
</div>
        
            </div>
        </div>
<div class="col-md-5">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1><legend><i class="fa fa-qrcode" aria-hidden="true"></i> จัดการไอเทมโค้ด</legend></h1>
<hr/>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                    <tr class="active">
                        <th>Name</th>
                        <th>Redeem</th>
                        <th>Command</th>
                    </thead>
                    <tbody>
                    <tr class="active">
                        <form class="" action="?action=SaveRedeem" method="post">
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="Namer" placeholder="Code Name">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="command" id="command" placeholder="คำสั่ง">
                                </div>
                            </td>
                    </tr>
                    </tbody>
                </table>
                <input type="submit" class="btn btn-warning btn-block" value="เพิ่มโค้ด">
                </form>
                <hr/>
<h1><legend><i class="fa fa-list-ul"></i> List Code </legend></h1>
<hr/>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                    <tr class="active">
                        <th>Name</th>
                        <th>Redeem</th>
                        <th>Item</th>
                    </thead>
                    <tbody>
                    <?php
                    if($result = query("SELECT * FROM `code`")) {
                        while ($row = $result->fetch()){ ?>
                            <tr class="active">
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['redeem'];?></td>
                            <td><?php echo $row['command']; ?></td>
                            </tr><?php }}?>
                    </tbody>
                </table>

            </div>
        </div>
        </div>
</div>
 <div class="col-md-5">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1><legend><i class="fas fa-cogs" aria-hidden="true"></i> ตั้งค่าเว็บไซต์</legend></h1>
                <form action="?action=save" method="post">
                    <div class="card">
                        <div class="card-block">
                            <p class="card-text"><input class="form-control" name="title" id="title" placeholder="ชื่อ Server เเสดงตามจุดต่างๆ" required value="<?php echo $server_name;?>"></p>
                            <p class="card-text"><input class="form-control" name="admin_fb" id="admin_fb" placeholder="ลิ้ง Facebook Admin" value="<?php echo $admin_fb;?>"></p>
                            <p class="card-text"><input class="form-control" id="phone" name="phone" placeholder="เบอร์โทรศัพท์เเอดมิน" value="<?php echo $admin_phone;?>"></p>
                            
                            <p class="card-text"><input class="form-control" name="admin_dl" id="admin_dl"
placeholder="ลิ้ง Download Minecraft PocketEdition" value="<?php echo $admin_dl;?>"></p>
     
           <p class="card-text"><input class="form-control" name="admin_loading" placeholder="ลิ้งรูป Loading" value="<?php echo $admin_loading;?>"></p>

 <p class="card-text"><input class="form-control" name="admin_bg" placeholder="ลิ้ง Background" value="<?php echo $admin_bg;?>"></p>
                          
 <p class="card-text"><input class="form-control" name="admin_favicon" placeholder="ลิ้ง Favicon" value="<?php echo $admin_favicon;?>"></p>
                            <br>
                            <input type="submit" name="save_server" class="btn btn-success btn-block" value="บันทึกการตั้งค่า">
                        </div>
                    </div>
                </form>
</div>
</div>
</div>
 <div class="col-md-5">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1><legend><i class="fas fa-cogs" aria-hidden="true"></i> ตั้งค่า TrueWallet</legend></h1>
                <form action="?action=save" method="post">
                    <div class="card">
                        <div class="card-block">
  
<p>
                            <p class="card-text"><input class="form-control" name="phone" id="phone" placeholder="เบอร์โทรศัพท์ของ TrueWallet" required value="<?php echo $truewallet_phone;?>"></p>
                            <p class="card-text"><input class="form-control" name="username" id="username" placeholder="ชื่อผู้ใช้ TrueWallet" required value="<?php echo $truewallet_username;?>"></p>
                            <p class="card-text"><input class="form-control" id="password" name="password" placeholder="รหัสผ่าน TrueWallet" required value="<?php echo $truewallet_password;?>"></p>


<p class="card-text"><input class="form-control" name="sitekey" placeholder="sitekey reCAP" value="<?php echo $sitekey;?>"></p>
                            
                            <br>
                            <input type="submit" name="save_truewallet" class="btn btn-success btn-block" value="บันทึกการตั้งค่า">
                        </div>
                    </div>
                </form>
</div>
</div>
</div>
<div class="col-md-5">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1><legend><i class="fas fa-cogs" aria-hidden="true"></i> ตั้งค่า TrueMoney</legend></h1>
                <form action="?action=save" method="post">
                    <div class="card">
                        <div class="card-block">
                            <p class="card-text"><input class="form-control" name="tmtuid" id="tmtuid" placeholder="TMTOPUP UID" value="<?php echo $truemoney_uid;?>"required></p>
                            <br>
                            <input type="submit" name="save_truemoney" class="btn btn-success btn-block" value="บันทึกการตั้งค่า">
                        </div>
                    </div>
                </form>
</div>
</div>
<div class="col-md-120">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1><legend><i class="fas fa-cogs" aria-hidden="true"></i> ตั้งค่า รูปสไลด์</legend></h1>
                <form action="?action=save" method="post">
                    <div class="card">
                        <div class="card-block">
                            <p class="card-text"><input class="form-control" name="img1" placeholder="ลิ้งรูป 1" value="<?php echo $img1;?>"required></p>

<p class="card-text"><input class="form-control" name="img2" placeholder="ลิ้งรูป 2" value="<?php echo $img2;?>"required></p>

<p class="card-text"><input class="form-control" name="img3" placeholder="ลิ้งรูป 3" value="<?php echo $img3;?>"required></p>

<p class="card-text"><input class="form-control" name="img4" placeholder="ลิ้งรูป 4" value="<?php echo $img4;?>"required></p>

<p class="card-text"><input class="form-control" name="img5" placeholder="ลิ้งรูป 5" value="<?php echo $img5;?>"required></p>
                            <br>
                            <input type="submit" name="save_picture" class="btn btn-success btn-block" value="บันทึกการตั้งค่า">
                        </div>
                    </div>
				</form>
</div>
</div>

<div class="col-md-120">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1><legend><i class="fas fa-cogs" aria-hidden="true"></i> ตั้งค่า User</legend></h1>
                <form action="?action=save" method="post">
                    <div class="card">
                        <div class="card-block">
                            <p class="card-text"><input class="form-control" name="player_name" placeholder="ชื่อผู้เล่น" required></p>

<p class="card-text"><input class="form-control" name="player_admin" placeholder="ตั้ง Admin" required value="false"></p>

<p class="card-text"><input class="form-control" name="player_point" placeholder="ปรับ Point" required value="0-99999"></p>
                            <br>
                            <input type="submit" name="save_user" class="btn btn-success btn-block" value="บันทึกการตั้งค่า">
                        </div>
                    </div>
                </form>
</div>
</div>
<!---- Use JS ---->

</body>
</html>
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>
