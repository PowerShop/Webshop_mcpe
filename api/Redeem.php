<?php
class Redeem{
    public function AddRedeem($redeem){
        global $api;

        if(query("SELECT * FROM `code` WHERE `redeem`=?;",array($redeem))->rowCount()==1){
            $code = query("SELECT * FROM `code` WHERE `redeem`=?;",array($redeem))->fetch();
            echo '	<meta name="viewport" content="width=device-width, initial-scale=1" /><p><center><div class="container">
    <div class="col-md-120">
        <div class="well well-sm" style="text-align: center">
            <br>
			<legend><h2 style="font-size: 25px"><i class="fa fa-gift"></i>  <font color="red"> Re</font><font color="orange">deem</font></h2></legend><br>
 <div class="form-group">
          <h2><legend> <font color="green"><i class="fa fa-check-circle"></i> ยินดีด้วยคุณได้รับ '.$code['name'].' !</font></legend></h2>
<br><a class="btn btn-success" href="?page=redeem"><i class="fa fa-backward"></i> ย้อนกลับ</a></center><p>';
            //UPDATE group
            $com = $code['command'];
            $command = str_replace(array("{user}"),array($_SESSION['email']),$com);
            $api->rcon->connect();
            $api->rcon->send_command($command);
            //del code
            query("DELETE FROM `code` WHERE `redeem`=?;",array($redeem));
            
            return true;
        }else{
            echo '	<meta name="viewport" content="width=device-width, initial-scale=1" /><center><p><div class="container">
    <div class="col-md-120">
        <div class="well well-sm" style="text-align: center">
            <br>
			<legend><h2 style="font-size: 25px"><i class="fa fa-gift"></i>  <font color="red"> Re</font><font color="orange">deem</font></h2></legend><br>
 <div class="form-group">
          <h2><legend></font><font color="red"><i class="fa fa-ban"></i> Item Code ไม่ถูกต้อง!</font></legend></h2><br><a class="btn btn-danger" href="?page=redeem"><i class="fa fa-backward"></i> ย้อนกลับ</a></center><p>';
        }


    }

    public function generateRedeem($length = 16){
        global $api;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function SaveRedeem($name,$command){
        global $api;
        $code = $api->redeem->generateRedeem();
        query("INSERT INTO `code` (`name`,`redeem`,`command`) VALUES ('".$name."','".$code."','".$command."')");
        #rdr("?page=backend");
        return true;
    }
}