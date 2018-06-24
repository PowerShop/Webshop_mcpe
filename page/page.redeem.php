  <?php


if(!$_SESSION['email'])
{

    header("Location: ?page=login");//redirect to login page to secure the welcome page without login access.
}

?>
  <head>
  <title> ไอเท็มโค้ค </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://bulma.io/css/bulma-docs.css?v=201802201001">
    <script src='https://www.google.com/recaptcha/api.js'></script>

<?php require 'menu.php';?>
<!--- script js --->
<script src="dist/js/jquery.min.js"></script>
			<script src="dist/js/jquery.scrolly.min.js"></script>
			<script src="dist/js/skel.min.js"></script>
			<script src="dist/js/util.js"></script>
			<script src="dist/js/main.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php require 'head.php';?>
</head>
<p>
<div class="container">
    <div class="col-md-120">
        <div class="well well-sm" style="text-align: center">
            <br>
			<legend><h2 style="font-size: 30px"><i class="fa fa-gift"></i>  <font color="red"> ไอเท็ม</font><font color="orange">โค้ค</font></h2></legend><br>
 <form action="?action=redeem" method="post">
 <div class="form-group">
                    <h3><legend><i class="fa fa-code"></i> กรุณากรอบไอเท็มโค้ค</legend></h3>
                    <input type="text" id="redeem" name="redeem" maxlength="16" required="" class="form-control" placeholder="กรอก ไอเท็มโค้ค 16 หลัก"><br>
					<p><button  name="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> ยืนยัน </button></p>
			   </form>
			   </div>
				</div>
				</div>
				</div>
				</div>
				</div>
				<meta charset="utf-8" />

<?php require 'footer.php';?>
   