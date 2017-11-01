<?php
  require_once('../controllers/class.CtrlGlobal.php');
  $objCtrl = new CtrlGlobal();

  $type = $_GET['type'];
  $id_user = $_GET['id_user'];

    $sql = "SELECT a.layanan, a.status FROM registration a, user b WHERE a.nik = b.nik AND b.id_user = '".$id_user."'";
    $row = $objCtrl->GetGlobalFilter($sql);
    foreach ($row as $item) {

      switch ($item['layanan']) {
        case 1:
          $layanan = 'KTP';
          break;

        case 2:
          $layanan = 'KK';
          break;

        case 3:
          $layanan = 'Register Pindah';
          break;

        case 4:
          $layanan = 'Surat Keterangan Siswa Miskin';
          break;

        case 5:
          $layanan = 'Surat Keterangan Catatan Kriminal';
          break;

        case 6:
          $layanan = 'Surat Kelahiran';
          break;

        case 7:
          $layanan = 'Surat Kematian';
          break;

        default:
          $layanan = '';
          break;
      }

      switch ($item['status']) {
        case 0:
          $status = 'Data Masuk';
          $color = '#03A9F4';
          break;

        case 1:
          $status = 'Approved';
          $color = '#4CAF50';
          break;

        case 2:
          $status = 'Proses';
          $color = '#FFEB3B';
          break;

        case 3:
          $status = 'Selesai';
          $color = '#4CAF50';
          break;

        case 4:
          $status = 'Pending';
          $color = '#FFEB3B';
          break;

        default:
          $status = '';
          $color = '';
          break;
      }

      $data[] = array(
        'layanan'   => $layanan,
        'status'    => $status,
        'color'     => $color
      );
    }

  echo json_encode($data);
?>
