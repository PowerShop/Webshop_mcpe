
<?php require 'config.php';?>
<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title> Rcon | Console</title>

	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<script type="text/JavaScript" src="script.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>


<body>
	<!-- Stack the columns on mobile by making one full-width and the other half-width -->
	<div class="container-fluid content" style="padding-top: 15px;">
		<div class="alert alert-info" id="alertMessenge">ยินดีต้อนรับสู่ Rcon Console</div>
		<div class="alert alert-info"><center><?php echo $serverName; ?></center></div>
		<div class="row">
			<div class="col-md-8 col-lg-8 console">
				<div class="panel panel-primary" >
					<div class="panel-heading">
						<h3 class="panel-title">Console</h3>
					</div>
					<div class="panel-body">
						<ul class="list-group" id="groupConsole">
							<li class="list-group-item list-group-item-info">Welcome to Minecraft RCON Console.</li>
							
						</ul>

					</div>
				</div>

				<div class="checkbox panel panel-default panel-body">
					<label style="padding-top: 1%;">
						<input type="checkbox" id="chkAutoScroll" checked="true" > เลื่อน Console อัตโนมัติ
					</label>
					<button type="button" class="btn btn-primary" tabindex="0" id="btnClearLog" style="float:right;"><span class="glyphicon glyphicon-remove-sign"></span> ล้าง Console</button>
				</div>

				<div class="input-group">
					<input type="text" class="form-control" id="txtCommand" placeholder="กรุณาป้อนคำสั่ง ไม่ต้อง มี /">
					<div class="input-group-btn">
						<button type="button" class="btn btn-primary" tabindex="-1" id="btnSend"><span class="glyphicon glyphicon-arrow-right"></span> ส่งคำสั่ง</button>
					</div>
				</div>
			</div>



			</div>
				<div class="panel panel-default">
					<div class="panel-body">
						Minecraft RCON Console 1.1 | Develop by ekaomk | เเก้ไขเพิ่มเติมโดย PowerShop MCPE
					</div>
				</div>

			</div>

		</div>
	</div>



</body>

<footer id = "footer">
	<div class="container-fluid">

	</div>
</footer>

</html>
