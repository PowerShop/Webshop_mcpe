<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
$con= mysqli_connect("localhost","powersho_demo","demoo","powersho_demo") or die("Error: " . mysqli_error($con));
 
mysqli_query($con, "SET NAMES 'utf8-bin' ");
 //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//สร้างตัวแปรสำหรับรับค่า member_id จากไฟล์แสดงข้อมูล
$member_id = $_REQUEST["member_id"];

//ลบข้อมูลออกจาก database ตาม member_id ที่ส่งมา

$sql = "DELETE FROM item WHERE id='$member_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('ลบสินค้าสำเร็จ');";
	echo "window.location = '?page=backend'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "</script>";
}
?>