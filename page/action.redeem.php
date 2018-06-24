<?php
if($_SESSION['admin'] == "false"){

}else{
rdr("?page=index");
}
?>
<html>
<head>
    <title>Login</title>
    <?php require 'head.php';?>
   <link rel="stylesheet" href="https://bulma.io/css/bulma-docs.css?v=201802201001">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    

<!--- script js --->
<script src="dist/js/jquery.min.js"></script>
			<script src="dist/js/jquery.scrolly.min.js"></script>
			<script src="dist/js/skel.min.js"></script>
			<script src="dist/js/util.js"></script>
			<script src="dist/js/main.js"></script>
</head>
<body>
<?php
require 'menu.php';
?>

<div class="container">
    <div class="col-md-3"></div>
    <div class="col-md-120">
                <?php
                if($_POST){
                    $redeem = $_POST['redeem'];
                    if($api->redeem->AddRedeem($redeem)){

                    }else{
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php";?>
</body>
</html>



