<?php
  require_once('../controllers/class.CtrlGlobal.php');
  $objCtrl = new CtrlGlobal();

  $max_id = $objCtrl->genNoRegistrasi();
  $jenis = $_POST['jenis'];
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];

  $temp = explode(" ", $alamat);

  $tanggal = $_POST['tanggal'];
  $no_hp = $_POST['no_hp'];
  $email = $_POST['email'];
  $nama_sekolah = $_POST['nama_sekolah'];
  $keterangan = $_POST['keterangan'];

  $sql = "SELECT no_kk as name FROM biodata WHERE nik = '".$nik."'";
  $no_kk = $objCtrl->getName($sql);

  $sql_cek = "SELECT COUNT(no_registration) as name FROM registration WHERE nik = '".$nik."' AND layanan = '".$jenis."'";
  $cek = $objCtrl->getName($sql_cek);

  if($cek == 0){
    if($no_kk != ''){
      $objCtrl->insert("registration", array(
                      'no_registration'=> $max_id,
                      'layanan'        => $jenis,
                      'no_kk'          => $no_kk,
                      'nik'            => $nik,
                      'nama'           => $nama,
                      'alamat'         => $temp[0],
                      'tanggal'        => date('Y-m-d', strtotime($tanggal)),
                      'no_hp'          => $no_hp,
                      'email'          => $email,
                      'maksud'         => $keterangan,
                      'sekolahan'      => $nama_sekolah,
                      'log_time'       => date('Y-m-d H:i:s')
      ));

      $data = 'success';
    }
  }else if($cek > 0){
    $data = 'fail';
  }

echo $data;
?>
