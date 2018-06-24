<?php
class Shop{
    public function buy($id){
        global $api;
        $user = query("SELECT * FROM `user` WHERE `username`=?",array($_SESSION['email']))->fetch();
        $item = query("SELECT * FROM `item` WHERE `id`=?;",array($id))->fetch();
        if($user['point']>=$item['price']){
            $com1 = $item['command1'];
$com2 = $item['command2'];
$com3 = $item['command3'];
$com4 = $item['command4'];
$com5 = $item['command5'];
$com6 = $item['command6'];
$com7 = $item['command7'];
$com8 = $item['command8'];
$com9 = $item['command9'];
$com10 = $item['command10'];

$command1 = str_replace(array("{user}","{group}"),array($_SESSION['email'],$item['name']),$com1);

$command2 = str_replace(array("{user}","{group}"),array($_SESSION['email'],$item['name']),$com2);

$command3 = str_replace(array("{user}","{group}"),array($_SESSION['email'],$item['name']),$com3);

$command4 = str_replace(array("{user}","{group}"),array($_SESSION['email'],$item['name']),$com4);

$command5 = str_replace(array("{user}","{group}"),array($_SESSION['email'],$item['name']),$com5);

$command6 = str_replace(array("{user}","{group}"),array($_SESSION['email'],$item['name']),$com6);

$command7 = str_replace(array("{user}","{group}"),array($_SESSION['email'],$item['name']),$com7);

$command8 = str_replace(array("{user}","{group}"),array($_SESSION['email'],$item['name']),$com8);

$command9 = str_replace(array("{user}","{group}"),array($_SESSION['email'],$item['name']),$com9);

$command10 = str_replace(array("{user}","{group}"),array($_SESSION['email'],$item['name']),$com10);

            if($api->rcon->connect()){
                $api->rcon->connect();
            }else{ 
                echo '<meta name="viewport" content="width=device-width, initial-scale=1" /><p><center><div class="container">
    <div class="col-md-120">
        <div class="well well-sm" style="text-align: center">
            <br>
			<legend><h2 style="font-size: 25px"><i class="fa fa-rss"></i>  <font color="orange"> Server Error</font></h2></legend><br>
 <div class="form-group">
          <h2><legend> <font color="red"><i class="fa fa-ban"></i>  ระบบผิดพลาด ไม่สามารถดำเนินการได้ในขณะนี้!</font></legend></h2>
<br><a class="btn btn-danger" href="?page=redeem"><i class="fa fa-backward"></i> ย้อนกลับ</a></center><p>';
                return false;
                exit();}

            $api->rcon->send_command($command1);
  $api->rcon->send_command($command2);
  $api->rcon->send_command($command3);
  $api->rcon->send_command($command4);
  $api->rcon->send_command($command5);
  $api->rcon->send_command($command6);
  $api->rcon->send_command($command7);
  $api->rcon->send_command($command8);
  $api->rcon->send_command($command9);
  $api->rcon->send_command($command10);
            $point = $user['point'] - $item['price'];
            query("UPDATE `user` SET `point`=? WHERE `username`=?;",array($point,$_SESSION['email']));
            unset($_SESSION['point']);
            $_SESSION['point'] = $user['point'];
            return true;
        }else{
            return false;
        }
    }
    public function add($title,$price,$command1,$command2,$command3,$command4,$command5,$command6,$command7,$command8,$command9,$command10,$image,$page){
        global $api;
        if($_SESSION['admin'] == "true"){
            query("INSERT INTO `item` (`id`,`name`,`price`,`image`,`command1`,`command2`,`command3`,`command4`,`command5`,`command6`,`command7`,`command8`,`command9`,`command10`,`page`) VALUES ('?','".$title."','".$price."','".$image."','".$command1."','".$command2."','".$command3."','".$command4."','".$command5."','".$command6."','".$command7."','".$command8."','".$command9."','".$command10."','".$page."')");
            return true;
        }else{
            return false;
        }

    }
public function update($phone,$username,$password){
        global $api;
        if($_SESSION['admin'] == "false"){
            query("INSERT INTO `truewallet`(`truewallet_phone`,`truewallet_username`,`truewallet_password`) VALUES ('".$phone."','".$username."','".$password."')");
            return true;
        }else{
            return false;
        }

    }
    public function delete($id){
        global $api;
        if(isset($_SESSION['admin']) == "true"){
            query("DELETE FROM `item` WHERE `id`=?",array($id));
            return true;
        }else{
            return false;
        }

    }
}
