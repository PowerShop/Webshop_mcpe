
<?php 
// SaveUser
if($_POST['save_user']){
ini_set('display_errors', 1); 
error_reporting(~0); 	

include("dist/connect/connect.php");
$name = $_POST["player_name"];

$sql = "UPDATE user SET username = '". $_POST["player_name"]. "' WHERE username ='$name'";
 	
$sql2 = "UPDATE user SET admin = '". $_POST["player_admin"]. "' WHERE username = '$name'"; 	

$sql3 = "UPDATE user SET point = point + '". $_POST["player_point"]. "' WHERE username = '$name'"; 

$query = mysqli_query($conn,$sql); 
$query2 = mysqli_query($conn,$sql2);
$query3 = mysqli_query($conn,$sql3);

if($query) { 	 
 echo "<script type='text/javascript'>";
	echo "alert('บันทึกข้อมูลสำเร็จ!');";
	echo "window.location = '?page=backend'; ";
	echo "</script>";
} 	
mysqli_close($conn); 
}
?> 
<?php
//SaveTrueWallet
if($_POST['save_truewallet']){
ini_set('display_errors', 1);
error_reporting(~0); 	

include("dist/connect/connect.php");

$sql = "UPDATE truewallet SET truewallet_phone = '". $_POST["phone"]. "' WHERE id = '1'";
 	
$sql2 = "UPDATE truewallet SET truewallet_username = '". $_POST["username"]. "' WHERE id = '1'"; 	

$sql3 = "UPDATE truewallet SET truewallet_password= '". $_POST["password"]. "' WHERE id = '1'"; 

$sql4 = "UPDATE truewallet SET sitekey = '". $_POST["sitekey"]. "' WHERE id = '1'"; 	

$query = mysqli_query($conn,$sql); 
$query2 = mysqli_query($conn,$sql2);
$query3 = mysqli_query($conn,$sql3);
$query4 = mysqli_query($conn,$sql4);	

if($query) { 	 
 echo "<script type='text/javascript'>";
	echo "alert('บันทึกข้อมูลสำเร็จ!');";
	echo "window.location = '?page=backend'; ";
	echo "</script>";
} 	
mysqli_close($conn); 
}
?> 

<?php 
//SavePicture
if($_POST['save_picture']){
ini_set('display_errors', 1); 
error_reporting(~0); 

include("dist/connect/connect.php");

$sql = "UPDATE img SET img1 = '". $_POST["img1"]. "' WHERE id = '1'";
 	
$sql2 = "UPDATE img SET img2 = '". $_POST["img2"]. "' WHERE id = '1'"; 	

$sql3 = "UPDATE img SET img3 = '". $_POST["img3"]. "' WHERE id = '1'"; 	

$sql4 = "UPDATE img SET img4 = '". $_POST["img4"]. "' WHERE id = '1'";

$sql5 = "UPDATE img SET img5 = '". $_POST["img5"]. "' WHERE id = '1'";

$query = mysqli_query($conn,$sql); 
$query2 = mysqli_query($conn,$sql2);
$query3 = mysqli_query($conn,$sql3);
$query4 = mysqli_query($conn, $sql4);
$query5 = mysqli_query($conn, $sql5);
if($query) { 	 
 echo "<script type='text/javascript'>";
	echo "alert('บันทึกข้อมูลสำเร็จ!');";
	echo "window.location = '?page=backend'; ";
	echo "</script>";
} 	
mysqli_close($conn); 
}
?> 

<?php
//SaveServer
if($_POST['save_server']){
ini_set('display_errors', 1);
error_reporting(~0); 	

include("dist/connect/connect.php");

$sql = "UPDATE server SET server_name = '". $_POST["title"]. "' WHERE id = '1'";
 	
$sql2 = "UPDATE server SET admin_fb = '". $_POST["admin_fb"]. "' WHERE id = '1'"; 	

$sql3 = "UPDATE server SET admin_phone = '". $_POST["phone"]. "' WHERE id = '1'"; 	

$sql4 = "UPDATE server SET admin_dl = '". $_POST["admin_dl"]. "' WHERE id = '1'";

$sql5 = "UPDATE server SET admin_loading = '". $_POST["admin_loading"]. "' WHERE id = '1'";

$sql6 = "UPDATE server SET admin_bg = '". $_POST["admin_bg"]. "' WHERE id = '1'";

$sql7 = "UPDATE server SET admin_favicon = '". $_POST["admin_favicon"]. "' WHERE id = '1'";

$query = mysqli_query($conn,$sql); 
$query2 = mysqli_query($conn,$sql2);
$query3 = mysqli_query($conn,$sql3);
$query4 = mysqli_query($conn,$sql4);
$query5 = mysqli_query($conn,$sql5);
$query6 = mysqli_query($conn,$sql6);
$query7 = mysqli_query($conn,$sql7);
if($query) { 	 
 echo "<script type='text/javascript'>";
	echo "alert('บันทึกข้อมูลสำเร็จ!');";
	echo "window.location = '?page=backend'; ";
	echo "</script>";
} 	
mysqli_close($conn); 
}
?> 

<?php
//SaveTrueMoney
if($_POST['save_truemoney']){
ini_set('display_errors', 1);
error_reporting(~0); 	

include("dist/connect/connect.php");

$sql = "UPDATE truemoney SET truemoney_uid = '". $_POST["tmtuid"]. "' WHERE id = '1'";

$query = mysqli_query($conn,$sql); 
if($query) { 	 
 echo "<script type='text/javascript'>";
	echo "alert('บันทึกข้อมูลสำเร็จ!');";
	echo "window.location = '?page=backend'; ";
	echo "</script>";
} 	
mysqli_close($conn); 
}
?> 

<?php
//SaveOpenPass 1
if($_POST['open_p11']){
ini_set('display_errors', 1);
error_reporting(~0); 	

include("dist/connect/connect.php");

$sql = "UPDATE truewallet SET open_pass = '". $_POST["open_p11"]. "' WHERE id = '1'";

$query = mysqli_query($conn,$sql); 
if($query) { 	 
 echo "<script type='text/javascript'>";
	echo "alert('บันทึกข้อมูลสำเร็จ!');";
	echo "window.location = '?page=backend'; ";
	echo "</script>";
} 	
mysqli_close($conn);
}

?> 

<?php
//SaveOpenPass 1
if($_POST['open']){
ini_set('display_errors', 1);
error_reporting(~0); 	

include("dist/connect/connect.php");

$sql999 = "UPDATE truewallet SET open_pass = '". $_POST["open"]. "' WHERE id = '1'";

$query999 = mysqli_query($conn,$sql999); 
if($query999) { 	 
 echo "<script type='text/javascript'>";
	echo "alert('บันทึกข้อมูลสำเร็จ!');";
	echo "window.location = '?page=backend'; ";
	echo "</script>";
} 	
mysqli_close($conn);
}

?> 
