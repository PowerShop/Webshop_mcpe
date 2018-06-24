<?php
/**
     * Created by PhpStorm.
     * User: Admin
     * Date: 10/6/2016
     * Time: 1:03 AM
     */
?>
    <html>
    <head>

        <title>Shop</title>
        <?php require 'head.php';?>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<html>	<script src="dist/js/jquery.js"></script>

<script src="dist/js/bootswatch.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="dist/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/app.css">
<link rel="stylesheet" href="dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
    </head>
    <body>
    <?php require 'menu.php';?>
    <div class="col-md-3">

    </div>
    <div class="col-md-8">
        
            <center>
                <?php
                if($_GET){
                    $id = $_GET['id'];
                    if($api->shop->buy($id)){
                        ?>
                        <meta name="viewport" content="width=device-width, initial-scale=1" /><p><center><div class="container">
    <div class="col-md-120">
        <div class="well well-sm" style="text-align: center">
            <br>
			<legend><h2 style="font-size: 25px"><font color="red"><i class="fa fa-shopping-cart"></i></font> <font color="orange"> Shop</font></h2></legend><br>
 <div class="form-group">
          <h2><legend> <font color="green"><i class="fa fa-check-circle"></i> ดำเนินการสำเร็จ!</font></legend></h2>
<br><a class="btn btn-success" href="?page=shop"><i class="fa fa-backward"></i> ย้อนกลับ</a></center><p><hr/>
                        <?php
                    }else{
                         ?>
                       <meta name="viewport" content="width=device-width, initial-scale=1" /><p><center><div class="container">
    <div class="col-md-120">
        <div class="well well-sm" style="text-align: center">
            <br>
			<legend><h2 style="font-size: 25px"><font color="red"><i class="fa fa-gift"></i></font> <font color="orange"> Shop</font></h2></legend><br>
 <div class="form-group">
          <h2><legend> <font color="red"><i class="fa fa-ban"></i> ดำเนินการไม่สำเร็จ!</font></legend></h2>
<br><a class="btn btn-danger" href="?page=shop"><i class="fa fa-backward"></i> ย้อนกลับ</a></center><p><hr/>
                        <?php
                    }
                }
                ?>
                </center>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-3">

    </div>
    <?php require 'footer.php'?>
    </body>
    </html>
