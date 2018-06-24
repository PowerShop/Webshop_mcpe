<?php


if(!$_SESSION['email'])
{

    header("Location: ?page=login");
}
$item = query("SELECT * FROM `item`")->fetch();
$query = "select * from item";
$data = query($query);
?>
<!DOCTYPE HTML>
<title> ร้านค้า | ฟรีไอเท็ม </title>
<script src="dist/js/jquery.js"></script>
<center>
<meta name="viewport" content="width=device-width, initial-scale=1" />
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
<?php require 'head.php';?>
<?php require 'menu-shop.php';?>
<!--- Test --->
<p>
<div class"panel panel-default">
<div class"panel panel-body">
<div class="col-md-110">
<center>
                <h1><legend style="color: white"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ร้านค้า | ฟรีไอเท็ม</legend></h1>
</center>
               
                    
<div class="center">
                    <?php $query = "SELECT * FROM `item` WHERE page = 7 ORDER BY id";
                        if($result = query($query)) {
                            while ($row = $result->fetch()){ ?>
                             

                    <div class="card">

<div class="panel-body">
<div class="panel-default">
<div class="col-md-120">
                        <img class="card-img-top" style="height: 200px;width: 100%;display;" src="<?php echo $row['image'];?>">
</div>
</div>
</div>

                        <div class="card-block">
                        <div class="caption">
                            <h4 class="card-title"><h3><strong>ชื่อสินค้า <?php echo $row['name'];?></strong></h3></h4>
                            <p class="card-text"><srtong class="text" font-size="15px"></srtong>ราคา <?php echo $row['price'];?> พอยท์</p>
<input type="hidden" name="id" value="<?php echo $row['id'];?>">
                            <a href="?action=shop&id=<?php echo $row['id'];?>" onclick="return confirm('คุณต้องการที่จะซื้อสินค้าหรือไม่')" class="btn btn-success btn-block <?php if($_SESSION['point']<$row['price']){ echo "disabled";}?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ซื้อสินค้า </a><br>

                        </div>
  
</div>
                </div>
                </div>
                </div>
</div>
            <?php }} ?>

        </div>
</div>
</div>
</div>

<hr style="margin-left: 40px; margin-right: 40px">
<?php require 'footer.php';?>
</center>