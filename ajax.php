<?php
  require_once('../controllers/class.CtrlGlobal.php');
  $objCtrl = new CtrlGlobal();
  

  $type = $_GET['type'];
  $nik = $_GET['nik'];
  $no_kk = $_GET['no_kk'];

  if($type == 1){
    $sql = "SELECT d.nama_lengkap, d.kecamatan_id, d.tempat_tinggal, b.nama as kecamatan, a.email, a.no_hp ";
    $sql.= "FROM user a, kecamatan b, biodata d ";
    $sql.= "WHERE d.no_kk != '' AND d.kecamatan_id = b.id AND d.nik = '".$nik."' AND a.nik = '".$nik."'";
    $row = $objCtrl->GetGlobalFilter($sql);
    foreach ($row as $item) {

      $data[] = array(
        'nama_lengkap'  => $item['nama_lengkap'],
        'kecamatan_id'  => $item['kecamatan_id'],
        'tanggal'       => date('d/m/Y'),
        'tempat_tinggal'=> $item['tempat_tinggal'],
        'kecamatan'     => $item['kecamatan'],
        'no_hp'         => $item['no_hp'],
        'email'         => $item['email']
      );
    }
  }else if($type == 2){
    $sql = "SELECT d.nik, d.nama_lengkap, d.kecamatan_id, d.tempat_tinggal, b.nama as kecamatan, a.email, a.no_hp ";
    $sql.= "FROM user a, kecamatan b, biodata d ";
    $sql.= "WHERE d.kecamatan_id = b.id AND a.nik = d.nik AND d.no_kk = '".$no_kk."'";
    $row = $objCtrl->GetGlobalFilter($sql);
    foreach ($row as $item) {

      $data[] = array(
        'nik'           => $item['nik'],
        'nama_lengkap'  => $item['nama_lengkap'],
        'kecamatan_id'  => $item['kecamatan_id'],
        'tanggal'       => date('d/m/Y'),
        'tempat_tinggal'=> $item['tempat_tinggal'],
        'kecamatan'     => $item['kecamatan'],
        'no_hp'         => $item['no_hp'],
        'email'         => $item['email']
      );
    }
  }

  echo json_encode($data);
?>
