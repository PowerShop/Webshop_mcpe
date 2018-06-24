<?php
require dirname(__FILE__).'/api/api.php';
$api_files = 'api\api.php'; 
ob_start();
session_start();
if($_GET){

}else{
rdr("?page=index");
}
if(isset($_GET['page'])){
  $page = 'page/page.'.$_GET['page'].'.php';
  if(file_exists($page)){
    include $page;
  }else{
    rdr("?page=index");
  }
}
if(isset($_GET['action'])) {
    $page_a = 'page/action.' . $_GET['action'] . '.php';
    if (file_exists($page_a)) {
        include $page_a;
    } elseif (isset($_GET['action']) == "SaveRedeem") {
        if ($_POST) {
            $name = $_POST['name'];
            $command = $_POST['command'];
            if ($api->redeem->SaveRedeem($name,$command)) {
                rdr("?page=backend");
            } else {
                echo "error";
            }
        }
    } elseif (isset($_GET['action']) == "Delitem") {
        if ($_GET) {
            $id = isset($_GET['id']);
            if ($api->shop->Delete($id)) {
                rdr("?page=backend");
            } else {
                echo "Failed";
            }
        }
    } elseif (isset($_GET['action']) == "addItem") {
        if ($_POST) {
            $image = $_POST['image'];
            $title = $_POST['name'];
            $price = $_POST['price'];
            $command = $_POST['command'];
            $page = $_POST['page'];
            if ($api->shop->add($title, $price, $command, $image,$page)) {
                rdr("?page=backend");
            }
        }
    } elseif (isset($_GET['action']) == "AddRedeem") {
        if ($_POST) {
            $redeem = $_POST['redeem'];
            if ($api->redeen->AddRedeem($redeem)) {
            } else {
            }
        }
    } else {
        rdr("?page=index");
    }
}
