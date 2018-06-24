<?php require 'page/head.php';?>
<?php
/* ไฟล์การตั้งค่า Rcon สำหรับ WebShop */

$_config = array();

$_config['db_host'] = "localhost"; // Host phpmyadmin 
$_config['db_database'] = "webshop"; // ห้ามเปลี่ยน เด็ดขาด! สงสัย กรุณาติดต่อมาทางเพจ 
$_config['db_user'] = "root"; /* User phpmyadmin */
$_config['db_password'] = ""; /* Password phpmyadmin */

//minecraft Rcon
$_config['mc_host'] = '43.229.132.165'; /* IP Server ของท่าน */
$_config['mc_port'] = '19132'; /* Port Server ของท่าน */
$_config['mc_password'] = 'XRPxlsqMjo'; /* Rcon Password ของท่าน */
$_config['mc_timeout'] = '300'; /* Time Out 300 = 5 นาที */