<?php
  require_once('../controllers/class.CtrlGlobal.php');
  $objCtrl = new CtrlGlobal();

  $username = $_GET['username'];
  $password = $_GET['password'];

  $sql = "SELECT CONCAT(id_user,'#',username,'#',nama_lengkap,'#',password,'#',level_id) as name FROM user WHERE username = '".$username."'";
  $valid = $objCtrl->getName($sql);
  if($valid != ''){
    $temp = explode("#", $valid);
    if(password_verify($password, $temp[3])){
      session_start();
      $_SESSION['username'] = $temp[1];
      $_SESSION['nama'] = $temp[2];
      $_SESSION['id_user'] = $temp[0];
      $_SESSION['level'] = $temp[4];

      if($_SESSION != ''){
        $var = "2"."|".$_SESSION['username']."|".$_SESSION['nama']."|".$_SESSION['id_user']."|".$_SESSION['level'];
        $data = $var;
      }
    }else{
      $data = 1;
    }
  }else{
    $data = 0;
  }

  echo $data;
?>
