<?php
  require_once('../controllers/class.CtrlGlobal.php');
  $objCtrl = new CtrlGlobal();

  $max_id = $objCtrl->genNoRegistrasi();
  $no_kk = $_POST['no_kk'];
  $kewarganegaraaan = $_POST['kewarganegaraaan'];
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];

  $temp = explode(" ", $alamat);

  $tanggal = $_POST['tanggal'];
  $no_hp = $_POST['no_hp'];
  $email = $_POST['email'];

  $sql_cek = "SELECT COUNT(no_registration) as name FROM registration WHERE nik = '".$nik."' AND layanan = 2";
  $cek = $objCtrl->getName($sql_cek);

  if($cek == 0){
    if($no_kk != ''){
      $objCtrl->insert("registration", array(
                      'no_registration'=> $max_id,
                      'layanan'        => 2,
                      'no_kk'          => $no_kk,
                      'nik'            => $nik,
                      'nama'           => $nama,
                      'alamat'         => $temp[0],
                      'tanggal'        => date('Y-m-d', strtotime($tanggal)),
                      'no_hp'          => $no_hp,
                      'email'          => $email,
                      'kewarganegaraan'=> $kewarganegaraaan,
                      'log_time'       => date('Y-m-d H:i:s')
      ));

      $data = 'success';
    }
  }else if($cek > 0){
    $data = 'fail';
  }

echo $data;
?>
