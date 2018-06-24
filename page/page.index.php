<?php


if(!$_SESSION['email'])
{

    header("Location: ?page=login");//redirect to login page to secure the welcome page without login access.
}

?>
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
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $name;?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
	  
<?php require 'head.php';?>
		</head>
	<body>

		<!-- Header -->
		<?php require 'menu.php';?>
			</nav>

		<!-- Banner -->
<p>
<div class="panel panel-default">
<div class="panel panel-body">
<div class="col-md-120">
			<section>

<div class="contian">
<div class="center">
    
				<div class="inner">
					<h1><font size="6"> Hello <?php echo $username;?> ยินดีต้อนรับเข้าสู่เว็บเติมเงิน uzpe.ddns.net </font><br/>
					<a href="#"></a></h1>
					<ul class="actions">
						<li><a href="#one" class="button alt scrolly big">ข่าวสารเซิร์ฟเวอร์</a></li>
					</ul>
				</div>
</div>
	
</div>
</section>
		<!-- One -->
		
<br>
	
				<div class="content">
					<div class="inner">
						<header>
<hr/>
							<h2><a href="#">&nbspMyServer</a></h2>
							<p><p id="one" class="info">&nbspMCPE  <a href="#">เซิฟเวอร์</a></p>
<hr/>
						</header>
						<p>&nbsp ตอนนี้ทางเซิฟเวอร์กำลังพีฒนาระบบให้ทันสมัยตลอดเวลาจะมีการอัพเดพข่าวสารทุกวันที่เว็บเติมและYouTubeนะครับ</p>
						<ul class="actions">
							<li><a href="#" class="button alt">#####</a></li>
						</ul>
					</div>
					
				</div>
		
</article>

</div>
</div>
</div>
<div class="col-md-120">
<div class="panel panel-default">
    <div class="panel-body">
      <legend style="font-size: 20px"><i class="fas fa-images" aria-hidden="true"></i> บรรยากาศภายใน Server </legend>
<br>
      <table class="table table-striped table-hover ">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
    <tr class="active">
     
      <td><style>
.mySlides {display:none;}
</style>
<body>

<div class="w3-content w3-section" style="max-width:550px">
  <img class="mySlides" src="<?php echo $img1;?>" style="width:100%">
  <img class="mySlides" src="<?php echo $img2;?>" style="width:100%">
  <img class="mySlides" src="<?php echo $img3;?>" style="width:100%">
  <img class="mySlides" src="<?php echo $img4;?>" style="width:100%">
  <img class="mySlides" src="<?php echo $img5;?>" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>
</td>
    
      </tr>
      </tbody>
</table>
</div>
</div>

<div class="col-md-120">
 <div class="panel panel-default">
    <div class="panel-body">
      <legend><i class="fas fa-money-bill-alt" aria-hidden="true"></i> 5 อันดับการเติมเงิน</legend>
      <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th><i class="fas fa-users"></i> ชื่อตัวละคร</th>
      <th><i class="fas fa-money-bill-alt"></i> จำนวนเงิน</th>
    </tr>
  </thead>
  <tbody>
    <?php 
     $username = $_SESSION['email'];
    $query = "SELECT * FROM `user` ORDER BY `point` DESC LIMIT 5;"; 
    if($result = query($query)) { 
    while ($row = $result->fetch()){ 
      ?>
    <tr class="active">
      <td><div class="modal-body"><img  class="img" src="<?php echo $row['4'];?>" height="50"></td>
      <td><?php echo $row['username'];?></td>
      <td><?php echo $row['point']; ?> Point</td>
      </tr><?php }}?>
      </tbody>
</table>
    </div>
  </div>

  <div class="col-md-120">
 <div class="panel panel-default">
    <div class="panel-body">
      <legend><i class="fas fa-signal" aria-hidden="true"></i> Status Server</legend>
      <table class="table table-striped table-hover ">
	  <tbody>
	    <tr class="active">
	  <?php require 'status.php';?>
	  </tr>
	    </tbody>
</table>
    </div>
  </div>
  
</div>

    </div>
  </div>
</font>
		<!-- Footer -->
		<?php require 'footer.php';?>
<!--- script js --->
<script src="dist/js/jquery.min.js"></script>
			<script src="dist/js/jquery.scrolly.min.js"></script>
			<script src="dist/js/skel.min.js"></script>
			<script src="dist/js/util.js"></script>
			<script src="dist/js/main.js"></script>


<!-- Font Awesome -->

</div>
</div>
</div>
	</body>
</html>
<?php } ?>
<?php } ?>
<?php } ?>
</body>
