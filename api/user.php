<?php
class User{
  public function Login($name,$password){
    global $api;
    if(query("SELECT * FROM `user` WHERE `username`=?;",array($name))->rowCount()==1){
      $u = query("SELECT * FROM `user` WHERE `username`=?;",array($name))->fetch();
      if($u['password'] == $password){
        $_SESSION['uid'] = $u['uid'];
        $_SESSION['user'] = $u['user'];
        $_SESSION['point'] = $u['point'];
        $_SESSION['admin'] = $u['admin'];
        echo '<center>
                                <script>
                                    setTimeout(function(){location.href = "?page=index";}, 1000);
                              alert("เข้าสู่ระบบสำเร็จ!")
  </script>
                             
                            </center>';
      }else {
      echo '<center>
                                <script>
                                    setTimeout(function(){location.href = "?page=login";}, 1000);
alert("Password ไม่ถูกต้อง!")
</script>
                                
                            </center>';
      }
    }else{
      echo '<center>
                                <script>
                                    setTimeout(function(){location.href = "?page=login";}, 1000);
alert("Username ไม่ถูกต้อง!")
</script>
                              
                            </center>';
    }
  }
  public function Register($user,$pass){
        global $api;
        if(query("SELECT * FROM `user` WHERE `username`=?",array($user))->rowCount()==1){
            echo 'ชื่อผู้ใช้ซ้ำ';
            exit();
        }else{
            query("INSERT INTO `user` (`uid`,`username`,`password`,`point`,`admin`,`avatar`) VALUES ('','".$user."','".$pass."','0','false','https://www.picz.in.th/images/2018/03/29/Sazmrz.jpg')");
            $u = query("SELECT * FROM `user` WHERE `username`=?;",array($user))->fetch();
        $_SESSION['uid'] = $u['uid'];
        $_SESSION['username'] = $u['username'];
        $_SESSION['point'] = $u['point'];
        $_SESSION['admin'] = $u['admin'];
        echo '<center>
                                <script>
                                    setTimeout(function(){location.href = "?page=login";}, 1000);
alert("สมัครสมาชิกสำเร็จ!")
                                </script>
                                
                                
                            </center>';
        #rdr("?page=login");
            return true;
        }

    }
}
