<?php
  require_once('../controllers/class.CtrlGlobal.php');
  $objCtrl = new CtrlGlobal();

  $type = $_GET['type'];

  $max_id = $objCtrl->getNoTransID('USR','id_user','user');
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $nik = $_POST['nik'];
  $desa = $_POST['pilihDesa'];
  $no_telp = $_POST['no_telp'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT nik as name FROM biodata WHERE nik = '".$nik."'";
  $nik_biodata = $objCtrl->getName($sql);

  if($nama != ''){
    if($nik_biodata > 0){
      $objCtrl->insert("user", array(
                      'id_user'        => $max_id,
                      'id_desa'        => $desa,
                      'nik'            => $nik,
                      'nama_lengkap'   => $nama,
                      'username'       => $username,
                      'email'          => $email,
                      'no_hp'          => $no_telp,
                      'password'       => password_hash($password, PASSWORD_DEFAULT),
                      'log_time'       => date('Y-m-d H:i:s')
      ));

      $message = "<html>
                  <title></title>
                  <head></head>
                  <body>
                    <p>Selamat Akun anda telah terdaftar di pelayanan.</p>
                  </body>
                </html>";

      $objCtrl->agenMailer($email, $nama, $message);

      $data = 'success';
    }else{
      $data = 'Maaf nik anda belum terdaftar !';
    }
  }else if($type == 1){
    $sql = "SELECT * FROM desa WHERE kecamatan_id = '3515010'";
    $row = $objCtrl->GetGlobalFilter($sql);
    foreach ($row as $item) {
      $data[] = array(
        'id'  => $item['id'],
        'nama'=> $item['nama']
      );
    }
  }

if($type == 1){
  echo json_encode($data);
}else{
  echo $data;
}
?>
