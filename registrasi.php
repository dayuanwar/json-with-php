<?php
  require_once('../controllers/class.CtrlGlobal.php');
  $objCtrl = new CtrlGlobal();

  $max_id = $objCtrl->genNoRegistrasi();
  $nik = $_GET['nik'];
  $nama = $_GET['nama'];
  $alamat = $_GET['alamat'];

  $temp = explode(" ", $alamat);

  $tanggal = $_GET['tanggal'];
  $no_hp = $_GET['no_hp'];
  $email = $_GET['email'];

  $sql = "SELECT no_kk as name FROM biodata WHERE nik = '".$nik."'";
  $no_kk = $objCtrl->getName($sql);

  $sql_cek = "SELECT COUNT(no_registration) as name FROM registration WHERE nik = '".$nik."' AND layanan = 1";
  $cek = $objCtrl->getName($sql_cek);

  if($cek == 0){
    if($nama != ''){
      $objCtrl->insert("registration", array(
                      'no_registration'=> $max_id,
                      'layanan'        => 1,
                      'no_kk'          => $no_kk,
                      'nik'            => $nik,
                      'nama'           => $nama,
                      'alamat'         => $temp[0],
                      'tanggal'        => date('Y-m-d', strtotime($tanggal)),
                      'no_hp'          => $no_hp,
                      'email'          => $email,
                      'log_time'       => date('Y-m-d H:i:s')
      ));

      $data = 'success';
    }
  }else if($cek > 0){
    $data = 'fail';
  }

echo $data;
?>
