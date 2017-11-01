<?php
  require_once('../controllers/class.CtrlGlobal.php');
  $objCtrl = new CtrlGlobal();

  $id_user = $_GET['id_user'];

  $sql = "SELECT d.no_kk, d.nik, d.nama_lengkap, d.tanggal_lahir, d.tempat_lahir, d.jenis_kelamin, d.agama, d.status_perkawinan, ";
  $sql.= "d.rw, d.rt, d.tempat_tinggal, b.nama as kecamatan, c.nama as kabupaten, a.username ";
  $sql.= "FROM user a, kecamatan b, kabupaten c, biodata d ";
  $sql.= "WHERE d.kabupaten_id = c.id AND d.kecamatan_id = b.id AND a.nik = d.nik ";
  $sql.= "AND a.id_user = '".$id_user."'";
  $row = $objCtrl->GetGlobalFilter($sql);
  foreach ($row as $item) {

    switch ($item['agama']) {
      case '1':
        $agama = 'ISLAM';
        break;

      case '2':
        $agama = 'KRISTEN';
        break;

      case '3':
        $agama = 'KATHOLIK';
        break;

      case '4':
        $agama = 'HINDU';
        break;

      case '5':
        $agama = 'BUDHA';
        break;

      case '6':
        $agama = 'KHONGHUCU';
        break;

      case '7':
        $agama = 'KEPERCAYAAN';
        break;

      default:
        $agama = "-";
        break;
    }

    if($item['jenis_kelamin'] == 1){
      $jenis_kelamin = 'LAKI - LAKI';
    }else if($item['jenis_kelamin'] == 2){
      $jenis_kelamin = 'PEREMPUAN';
    }

    switch ($item['status_perkawinan']) {
      case '1':
        $status_perkawinan = 'Belum Kawin';
        break;

      case '2':
        $status_perkawinan = 'Kawin';
        break;

      case '3':
        $status_perkawinan = 'Cerai Hidup';
        break;

      case '4':
        $status_perkawinan = 'Cerai Mati';
        break;

      default:
        $status_perkawinan = "-";
        break;
    }

    $data[] = array(
      'username'      => $item['username'],
      'nik'           => $item['nik'],
      'no_kk'         => $item['no_kk'],
      'nama_lengkap'  => $item['nama_lengkap'],
      'tempat_lahir'  => $item['tempat_lahir'],
      'tanggal_lahir' => date('d-m-Y', strtotime($item['tanggal_lahir'])),
      'jenis_kelamin' => $jenis_kelamin,
      'agama'         => $agama,
      'status'        => $status_perkawinan,
      'rt'            => $item['rt'],
      'rw'            => $item['rw'],
      'tempat_tinggal'=> $item['tempat_tinggal'],
      'kecamatan'     => $item['kecamatan'],
      'kabupaten'     => $item['kabupaten']
    );
  }

  echo json_encode($data);
?>
