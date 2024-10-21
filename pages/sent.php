<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php
session_start();
include 'include/dbconn.php';
include 'include/cache.php';

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
  $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
  $ip = $_SERVER['REMOTE_ADDR'];
}
if (isset($_COOKIE['id'])) {
  $last_link = $_SERVER['REQUEST_URI'];
  setcookie("last_link", $last_link, time() + (10 * 365 * 24 * 60 * 60));
  $fulln = $_COOKIE['id'];

  $sql = "SELECT *  FROM [jim].[dbo].[login] WHERE id = '$fulln'";
  $stmt = sqlsrv_query($conn, $sql);
  if (!$stmt) {
  } else {
    $r = sqlsrv_fetch_array($stmt);
    $fulname = $r['fulname'];
    $role = $r['role'];
    $ngri = $r['ngri'];
    $jwt = $r['jwt'];
  }
}

if (isset($_POST['simpan_daftar'])) {
  # code...
  $fir_ = $_POST['fir_'];
  $negeri = $_POST['negeri'];
  $stesen = $_POST['stesen'];
  $repot = $_POST['repot'];
  $tarikh = $_POST['tarikh'];
  $masa = $_POST['masa'];
  $alamat = $_POST['alamat'];
  $jenis = $_POST['jenis'];
  $daerah = $_POST['daerah'];
  $poskod = $_POST['poskod'];
  $negeri2 = $_POST['negeri2'];
  $operasi = $_POST['operasi'];
  $tempoh = $_POST['tempoh'];
  $pegawai = $_POST['pegawai'];
  $telefon = $_POST['telefon'];
  // var_dump($poskod);
  // die();
  $sql = "INSERT INTO [jim].[dbo].[mapk_daftar] 
			([negeri]
			,[stesen]
      ,[id_fir]
      ,[repot]
      ,[tarikh_kejadian]
      ,[masa_kejadian]
      ,[alamat]
      ,[jenis_kes]
      ,[daerah]
      ,[poskod]
      ,[alamat_negeri]
      ,[nama_operasi]
      ,[tempoh]
      ,[pegawai]
      ,[telefon])
			VALUES 
			('$negeri'
			,'$stesen'
			,'$fir_'
			,'$repot'
			,'$tarikh'
			,'$masa'
      ,'$alamat'
      ,'$jenis'
      ,'$daerah'
      ,'$poskod'
      ,'$negeri2'
      ,'$operasi'
      ,'$tempoh'
      ,'$pegawai'
      ,'$telefon')";
  $sql2 = "INSERT INTO [jim].[dbo].[admin] 
			([id_fir],
       [cs_status],
       [status],
       [masa],
       [date_regist],
       [title],
       [ngri]       
      )
			VALUES 
			('$fir_',
       'Open(Active)',
       'BARU',
       '$tarikh',
       '$tarikh',
       'MAPK',
       '$negeri'
      )";
  // uncomment below
  $stmt = sqlsrv_query($conn, $sql);
  $stmt2 = sqlsrv_query($conn, $sql2);
  var_dump($sql);
  var_dump($sql2);

  $_SESSION['id_fir'] = $fir_;
  header("Location: mapk_register.php?fir=" . $_SESSION['id_fir']);
}
if (isset($_POST['update_daftar'])) {
  $fir_ = $_POST['fir_'];
  $negeri = $_POST['negeri'];
  $stesen = $_POST['stesen'];
  $repot = $_POST['repot'];
  $tarikh = $_POST['tarikh'];
  $masa = $_POST['masa'];
  $alamat = $_POST['alamat'];
  $jenis = $_POST['jenis'];
  $daerah = $_POST['daerah'];
  $poskod = $_POST['poskod'];
  $negeri2 = $_POST['negeri2'];
  $operasi = $_POST['operasi'];
  $tempoh = $_POST['tempoh'];
  $pegawai = $_POST['pegawai'];
  $telefon = $_POST['telefon'];

  $sql = "UPDATE [dbo].[mapk_daftar]
  SET [negeri] = '$negeri'
     ,[stesen] = '$stesen'
     ,[repot] = '$repot' 
     ,[tarikh_kejadian] = '$tarikh'
     ,[masa_kejadian] = '$masa'
     ,[alamat] = '$alamat'
     ,[jenis_kes] = '$jenis' 
     ,[daerah] = '$daerah'
     ,[poskod] = '$poskod'
     ,[alamat_negeri] = '$negeri2'
     ,[nama_operasi] =  '$operasi'
     ,[tempoh] = '$tempoh' 
     ,[pegawai] = '$pegawai' 
     ,[telefon] = '$telefon' 
WHERE [id_fir] = '$fir_'";
  $_SESSION['id_fir'] = $fir_;

  $stmt = sqlsrv_query($conn, $sql);
  if ($stmt == 0) {
    $_SESSION['flash'] = "Gagal";
    $_SESSION['clr'] = "alert-danger";
  } else {
    $_SESSION['flash'] = "Berjaya";
    $_SESSION['clr'] = "alert-success";
  }
  header("Location: mapk_register.php?fir=" . $_SESSION['id_fir'] . "#tab_content1");
}
if (isset($_POST['simpan_profil'])) {
  $fir_ = $_POST['fir_'];
}

if (isset($_POST['simpan_komoditi'])) {
  # code...
  $fir_ = $_POST['fir_'];
  $komoditi = $_POST['komoditi'];
  $nokontena = $_POST['nokontena'];
  $unit = $_POST['unit'];
  $kuantiti = $_POST['kuantiti'];
  $harga = $_POST['harga'];
  $hargatotal = $_POST['hargatotal'];
  //loop each array of komoditi list to execute sql
  for ($i = 0; $i < count($komoditi); $i++) {
    $komoditi_ = $komoditi[$i];
    $nokontena_ = $nokontena[$i];
    $unit_ = $unit[$i];
    $kuantiti_ = $kuantiti[$i];
    $harga_ = $harga[$i];
    $hargatotal_ = $hargatotal[$i];
    $sql = "INSERT INTO [jim].[dbo].[barang_kes] 
			([id_fir]
			,[komoditi]
      ,[nokontena]
      ,[unit]
      ,[kuantiti]
      ,[hargaperunit]
      ,[hargatotal])
			VALUES 
			('$fir_'
			,'$komoditi_'
      ,'$nokontena_'
			,'$unit_'
			,'$kuantiti_'
			,'$harga_'
			,'$hargatotal_')";
    // uncomment below
    $stmt = sqlsrv_query($conn, $sql);
  }
  if ($stmt == 0) {
    $_SESSION['flash'] = "Gagal";
    $_SESSION['clr'] = "alert-danger";
  } else {
    $_SESSION['flash'] = "Berjaya";
    $_SESSION['clr'] = "alert-success";
  }
  header("Location: mapk_register.php?fir=" . $_SESSION['id_fir'] . "#tab_content4");
}

if (isset($_POST['simpan_fakta'])) {
  $fir_ = $_POST['fir_'];
  $cukai = $_POST['cukai'];
  $pungut = $_POST['pungut'];
  $kesalahan = $_POST['kesalahan'];
  $status = $_POST['status'];
  $punca = $_POST['punca'];
  $bayaran = $_POST['bayar'];
  $lain = $_POST['lain'];
  $lainpunca = $_POST['lainpunca'];
  $resit = $_POST['resit'];
  $aduan = $_POST['aduan'];
  $serahan = $_POST['serahan'];
  $tarikh = $_POST['tarikh'];
  foreach ($serahan as $serah) {
    $give .= $serah . ',';
  }
  $sql = "INSERT INTO [jim].[dbo].[mapk_fakta]
  ([cukai]
  ,[pungut]
  ,[kesalahan]
  ,[status]
  ,[bayaran]
  ,[lain_lain]
  ,[punca]
  ,[aduan]
  ,[serahan]
  ,[lainpunca]
  ,[id_fir]
  ,[tarikh]
  ,[resit])
  VALUES
  ('$cukai'
		,'$pungut'
		,'$kesalahan'
		,'$status'
		,'$bayaran'
		,'$lain'
    ,'$punca'
    ,'$aduan'
    ,'$give'
    ,'$lainpunca'
    ,'$fir_'
    ,'$tarikh'
    ,'$resit')";
  $stmt = sqlsrv_query($conn, $sql);
  // var_dump($stmt);
  // die();
  if ($stmt == 0) {
    $_SESSION['flash'] = "Gagal";
    $_SESSION['clr'] = "alert-danger";
  } else {
    $_SESSION['flash'] = "Berjaya";
    $_SESSION['clr'] = "alert-success";
  }
  $_SESSION['id_fir'] = $fir_;
  header("Location: mapk_register.php?fir=" . $_SESSION['id_fir'] . "#tab_content3");
}
if (isset($_POST['simpan_aktiviti'])) {
  $fir_ = $_POST['id_fir'];
  $aktiviti_name = $_POST['aktiviti'];
  foreach ($aktiviti_name as $name) {
    $activity .= $name . ',';
  }
  $sql = "IF EXISTS(SELECT 'True' FROM jim.dbo.mapk_aktiviti WHERE id_fir = '$fir_')
  BEGIN UPDATE [jim].[dbo].[mapk_aktiviti]
  SET [aktiviti_name] = '$activity'  
  WHERE id_fir = '$fir_'
  END
  ELSE
  BEGIN INSERT INTO [jim].[dbo].[mapk_aktiviti]
          ([aktiviti_name]
          ,[id_fir])
          VALUES
          ('$activity'
          ,'$fir_')
  END";
  $stmt = sqlsrv_query($conn, $sql);
  //  echo var_dump($sql);
  //  die();
  if ($stmt == 0) {
    $_SESSION['flash'] = "Gagal";
    $_SESSION['clr'] = "alert-danger";
  } else {
    $_SESSION['flash'] = "Berjaya";
    $_SESSION['clr'] = "alert-success";
  }
  $_SESSION['id_fir'] = $fir_;
  header("Location: mapk_register.php?fir=" . $_SESSION['id_fir'] . "#tab_content5");
}

if (isset($_POST['sent_fir'])) {
  # code...
  $id = $_POST['id'];
  $userk = $_COOKIE['id'];

  $sql = "UPDATE [jim].[dbo].[admin]
        SET [userk] = '$userk'
        ,[masa] = CURRENT_TIMESTAMP
        ,[status] = 'SEMAKAN PENYELIA'
        WHERE id = '$id'";

  $stmt = sqlsrv_query($conn, $sql);
  if ($stmt == 0) {
    $_SESSION['flash'] = "Gagal";
    $_SESSION['clr'] = "alert-danger";
  } else {
    $_SESSION['flash'] = "Berjaya";
    $_SESSION['clr'] = "alert-success";
  }

  header("Location: menu.php");
}
if (isset($_POST['hantar_mobile'])) {
  # code...
  $id_fir = $_POST['id_fir'];
  $id_profil = $_POST['id_profil'];
  $userk = $_COOKIE['id'];

  $sql = "UPDATE [jim].[dbo].[admin]
        SET [userk] = '$userk'
            ,[masa] = CURRENT_TIMESTAMP
            ,[status] = 'SEMAKAN SIASATAN'
        WHERE id_fir = '$id_fir'";

  $stmt = sqlsrv_query($conn, $sql);
  if ($stmt == 0) {
    $_SESSION['flash'] = "Gagal";
    $_SESSION['clr'] = "alert-danger";
  } else {
    $_SESSION['flash'] = "Berjaya";
    $_SESSION['clr'] = "alert-success";
  }

  header("Location: menu.php");
}

if (isset($_POST['sent_fir_profil'])) {
  # code...
  $id_fir = $_POST['id_fir'];
  $userk = $_COOKIE['id'];

  $sql = "UPDATE [jim].[dbo].[admin]
        SET [userk] = '$userk'
            ,[masa] = CURRENT_TIMESTAMP
            ,[status] = 'SEMAKAN SIASATAN'
        WHERE id_fir = '$id_fir'";

  $stmt = sqlsrv_query($conn, $sql);
  if ($stmt == 0) {
    $_SESSION['flash'] = "Gagal";
    $_SESSION['clr'] = "alert-danger";
  } else {
    $_SESSION['flash'] = "Berjaya";
    $_SESSION['clr'] = "alert-success";
  }

  header("Location: menu.php");
}

if (isset($_POST['sent_fir_new'])) {
  # code...
  $fir_ = $_POST['fir_'];
  $distribute = $_POST['distribute'];
  $cs_status = $_POST['cs_status'];
  $priority = $_POST['priority'];
  $intell_nom = $_POST['intell_nom'];
  $invest_nom = $_POST['invest_nom'];
  $title_ = $_POST['title_'];
  $major_class = $_POST['major_class'];
  $minor_class = $_POST['minor_class'];
  $reg_date = $_POST['reg_date'];
  $reg_oprtor = $_POST['reg_oprtor'];
  $appr_offcr = $_POST['appr_offcr'];
  $rep_dprmnt = $_POST['rep_dprmnt'];
  $team_ = $_POST['team_'];
  $state_ = $_POST['state_'];
  $country_ = $_POST['country_'];
  $dsk_offcr = $_POST['dsk_offcr'];
  $dsk_offcr_nom = $_POST['dsk_offcr_nom'];
  $dsk_offcr_mail = $_POST['dsk_offcr_mail'];
  $aho_offcr = $_POST['aho_offcr'];
  $aho_nom = $_POST['aho_nom'];
  $intelli_team = $_POST['intelli_team'];
  $sfo_offcr = $_POST['sfo_offcr'];
  $sfo_nom = $_POST['sfo_nom'];
  $intell_strt = $_POST['intell_strt'];
  $intelli_end = $_POST['intelli_end'];
  $userk = $_COOKIE['id'];

  $sql = "
IF EXISTS(SELECT 'True' FROM jim.dbo.admin WHERE id_fir = '$fir_')
BEGIN
  UPDATE [dbo].[admin]
   SET [distribution] = '$distribute'
      ,[cs_status] = '$cs_status'
      ,[intell_no] = '$intell_nom'
      ,[invest_no] = '$invest_nom'
      ,[title] = '$title_'
      ,[major] = '$major_class'
      ,[minor] = '$minor_class'
      ,[date_regist] = '$reg_date'
      ,[operator] = '$reg_oprtor'
      ,[officer] = '$appr_offcr'
      ,[department] = '$rep_dprmnt'
      ,[team] = '$team_'
      ,[state] = '$state_'
      ,[country] = '$country_'
      ,[do] = '$dsk_offcr'
      ,[do_num] = '$dsk_offcr_nom'
      ,[do_mail] = '$dsk_offcr_mail'
      ,[aho_officer] = '$aho_offcr'
      ,[aho_num] = '$aho_nom'
      ,[intell_team] = '$intelli_team'
      ,[sfo_officer] = '$sfo_offcr'
      ,[sfo_num] = '$sfo_nom'
      ,[intell_start] = '$intell_strt'
      ,[intell_end] = '$intelli_end'
      ,[userk] = '$userk'
      ,[masa] = CURRENT_TIMESTAMP
      ,[status] = 'SEMAKAN PENYELIA'
      ,[priority] = '$priority'
      ,[ngri] = '$ngri'
 WHERE id_fir = '$fir_'
END
ELSE
BEGIN
INSERT INTO [jim].[dbo].[admin] 
      ([id_fir]
      ,[distribution]
      ,[cs_status]
      ,[intell_no]
      ,[invest_no]
      ,[title]
      ,[major]
      ,[minor]
      ,[date_regist]
      ,[operator]
      ,[officer]
      ,[department]
      ,[team]
      ,[state]
      ,[country]
      ,[do]
      ,[do_num]
      ,[do_mail]
      ,[aho_officer]
      ,[aho_num]
      ,[intell_team]
      ,[sfo_officer]
      ,[sfo_num]
      ,[intell_start]
      ,[intell_end]
      ,[userk]
      ,[masa]
      ,[status]
      ,[priority]
      ,[edit]) 
      VALUES 
      ('$fir_'
      ,'$distribute'
      ,'$cs_status'
      ,'$intell_nom'
      ,'$invest_nom'
      ,'$title_'
      ,'$major_class'
      ,'$minor_class'
      ,'$reg_date'
      ,'$reg_oprtor'
      ,'$appr_offcr'
      ,'$rep_dprmnt'
      ,'$team_'
      ,'$state_'
      ,'$country_'
      ,'$dsk_offcr'
      ,'$dsk_offcr_nom'
      ,'$dsk_offcr_mail'
      ,'$aho_offcr'
      ,'$aho_nom'
      ,'$intelli_team'
      ,'$sfo_offcr'
      ,'$sfo_nom'
      ,'$intell_strt'
      ,'$intelli_end'
      ,'$userk'
      , CURRENT_TIMESTAMP
      ,'SEMAKAN PENYELIA'
      ,'$priority'
      ,'E')
END";

  $stmt = sqlsrv_query($conn, $sql);
  if ($stmt == 0) {
    $_SESSION['flash'] = "Gagal";
    $_SESSION['clr'] = "alert-danger";
  } else {
    $_SESSION['flash'] = "Berjaya";
    $_SESSION['clr'] = "alert-success";
  }

  header("Location: menu.php");
}

if (isset($_POST['sent_fir_siasatan'])) {
  # code...
  $id = $_POST['id'];

  $sql = "UPDATE [dbo].[admin] SET [status] = 'SEMAKAN SIASATAN' WHERE id = '$id'";

  $stmt = sqlsrv_query($conn, $sql);
  if ($stmt == 0) {
    $_SESSION['flash'] = "Gagal";
    $_SESSION['clr'] = "alert-danger";
  } else {
    $_SESSION['flash'] = "Berjaya";
    $_SESSION['clr'] = "alert-success";
  }

  header("Location: menu.php");
}

if (isset($_POST['sent_fir_selesai'])) {
  # code...
  $id = $_POST['id'];

  $sql = "UPDATE [dbo].[admin] SET [status] = 'SELESAI' WHERE id = '$id'";

  $stmt = sqlsrv_query($conn, $sql);
  if ($stmt == 0) {
    $_SESSION['flash'] = "Gagal";
    $_SESSION['clr'] = "alert-danger";
  } else {
    $_SESSION['flash'] = "Berjaya";
    $_SESSION['clr'] = "alert-success";
  }

  header("Location: menu.php");
}

if (isset($_POST['reject_fir'])) {
  # code...
  $id = $_POST['id'];

  $sql = "UPDATE [dbo].[admin] SET [status] = 'BARU' WHERE id = '$id'";

  $stmt = sqlsrv_query($conn, $sql);
  if ($stmt == 0) {
    $_SESSION['flash'] = "Gagal";
    $_SESSION['clr'] = "alert-danger";
  } else {
    $_SESSION['flash'] = "Berjaya";
    $_SESSION['clr'] = "alert-success";
  }

  header("Location: menu.php");
}

if (isset($_POST['simpan_fir'])) {


  $fir_ = $_POST['fir_'];
  $distribute = $_POST['distribute'];
  $cs_status = $_POST['cs_status'];
  $priority = $_POST['priority'];
  $intell_nom = $_POST['intell_nom'];
  $invest_nom = $_POST['invest_nom'];
  $title_ = $_POST['title_'];
  $major_class = $_POST['major_class'];
  $minor_class = $_POST['minor_class'];
  $reg_date = $_POST['reg_date'];
  $reg_oprtor = $_POST['reg_oprtor'];
  $appr_offcr = $_POST['appr_offcr'];
  $rep_dprmnt = $_POST['rep_dprmnt'];
  $team_ = $_POST['team_'];
  $state_ = $_POST['state_'];
  $country_ = $_POST['country_'];
  $dsk_offcr = $_POST['dsk_offcr'];
  $dsk_offcr_nom = $_POST['dsk_offcr_nom'];
  $dsk_offcr_mail = $_POST['dsk_offcr_mail'];
  $aho_offcr = $_POST['aho_offcr'];
  $aho_nom = $_POST['aho_nom'];
  $intelli_team = $_POST['intelli_team'];
  $sfo_offcr = $_POST['sfo_offcr'];
  $sfo_nom = $_POST['sfo_nom'];
  $intell_strt = $_POST['intell_strt'];
  $intelli_end = $_POST['intelli_end'];
  $ingri = $_POST['ngri'];
  $userk = $_COOKIE['id'];

  echo $sql = "INSERT INTO [jim].[dbo].[admin] 
			([id_fir]
			,[distribution]
      ,[cs_status]
      ,[intell_no]
      ,[invest_no]
      ,[title]
      ,[major]
      ,[minor]
      ,[date_regist]
      ,[operator]
      ,[officer]
      ,[department]
      ,[team]
      ,[state]
      ,[country]
      ,[do]
      ,[do_num]
      ,[do_mail]
      ,[aho_officer]
      ,[aho_num]
      ,[intell_team]
      ,[sfo_officer]
      ,[sfo_num]
      ,[intell_start]
      ,[intell_end]
      ,[userk]
      ,[masa]
      ,[status]
      ,[priority]
      ,[ngri]) 
			VALUES 
			('$fir_'
			,'$distribute'
			,'$cs_status'
			,'$intell_nom'
			,'$invest_nom'
			,'$title_'
			,'$major_class'
			,'$minor_class'
			,'$reg_date'
			,'$reg_oprtor'
			,'$appr_offcr'
			,'$rep_dprmnt'
			,'$team_'
			,'$state_'
			,'$country_'
			,'$dsk_offcr'
			,'$dsk_offcr_nom'
			,'$dsk_offcr_mail'
			,'$aho_offcr'
			,'$aho_nom'
			,'$intelli_team'
			,'$sfo_offcr'
			,'$sfo_nom'
			,'$intell_strt'
			,'$intelli_end'
			,'$userk'
			, CURRENT_TIMESTAMP
			,'BARU'
			,'$priority'
      ,'$ngri')";

  $stmt = sqlsrv_query($conn, $sql);
  if ($stmt == false) {
  }

  header("Location: menu.php");
}

if (isset($_POST['hantar_penyasat'])) {
  # code...
  $id_fir = $_POST['id_fir'];
  $pgwai_penyiasat = $_POST['pgwai_penyiasat'];

  $sql = "UPDATE [dbo].[admin] SET [status] = 'BENTUK PASUKAN', [user_siasatan] = '$pgwai_penyiasat' WHERE id_fir = '$id_fir'";
  $stmt = sqlsrv_query($conn, $sql);
  if ($stmt == 0) {
    $_SESSION['flash'] = "Gagal";
    $_SESSION['clr'] = "alert-danger";
  }

  $sql = "UPDATE [dbo].[diari] SET [status_kes] = 'BENTUK PASUKAN' WHERE id_fir = '$id_fir' AND status = 'H'";
  $stmt = sqlsrv_query($conn, $sql);
  if ($stmt == false) {
  }

  $sql = "SELECT *  FROM [jim].[dbo].[login] WHERE id = '$pgwai_penyiasat'";
  $stmt = sqlsrv_query($conn, $sql);
  if (!$stmt) {
  } else {
    $r = sqlsrv_fetch_array($stmt);
    $email = $r['email'];
    $fulname = $r['fulname'];
    $_SESSION['flash'] = "Berjaya";
    $_SESSION['clr'] = "alert-success";
    /*if (mail($email,
'JIM_TASK',
  'Harap maklum tuan telah di lantik bagi urusan siasatan bagi kes $id_fir')) {
  echo "work";
}
else {
  echo "not work";
}*/
    $to = $email; // note the comma

    $datet = date("d/m/Y");
    // Subject
    $subject = 'Demo TASK';

    // Message
    $message = "
<html>
<head>
</head>
<body>
<p>Hi $fulname</p><br>
  <p>Harap maklum Tuan/Puan telah di lantik bagi urusan siasatan untuk kes $id_fir </p>
  <table>
    <tr>
      <th>FIR</th><th>Date</th>
    </tr>
    <tr>
      <td>$id_fir</td><td>$datet</td>
    </tr>
  </table>
</body>
</html>";

    // To send HTML mail, the Content-type header must be set
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';

    // Additional headers
    $headers[] = 'From: SPJIM';
    #$headers[] = 'Cc: supervisor@example.com';

    // Mail it
    mail($to, $subject, $message, implode("\r\n", $headers));

    header("Location: menu.php");
  }
}
if (isset($_POST['kembali_physical'])) {

  $_SESSION['id_profil'] = $_POST['id_profil'];

  $_SESSION['id_fir'] = $_POST['id_fir'];

  $_SESSION['id'] = $_POST['id'];

  $sql = "SELECT * FROM [jim].[dbo].[profile] WHERE id = '$_SESSION[id]'";
  $stmt = sqlsrv_query($conn, $sql);
  if ($stmt == 0) {
    $_SESSION['flash'] = "Gagal";
    $_SESSION['clr'] = "alert-danger";
  } else {
    $_SESSION['flash'] = "Berjaya";
    $_SESSION['clr'] = "alert-success";
  }
  $r = sqlsrv_fetch_array($stmt);

  $_SESSION['id_fir'] = $r['id_fir'];
  $_SESSION['id_profil'] = $r['id_profil'];
  $_SESSION['picleft'] = $r['picleft'];
  $_SESSION['piccenter'] = $r['piccenter'];
  $_SESSION['picright'] = $r['picright'];
  $_SESSION['status'] = $r['status'];
  $_SESSION['crimetree'] = $r['crimetree'];
  $_SESSION['relationship'] = $r['relationship'];
  $_SESSION['firstname'] = $r['firstname'];
  $_SESSION['middlename'] = $r['middlename'];
  $_SESSION['lastname'] = $r['lastname'];
  $_SESSION['nickname'] = $r['nickname'];
  $_SESSION['language'] = $r['language'];
  $_SESSION['gender'] = $r['gender'];
  $_SESSION['birth'] = $r['birth'];
  $_SESSION['age'] = $r['age'];
  $_SESSION['race'] = $r['race'];
  $_SESSION['ethnic'] = $r['ethnic'];
  $_SESSION['country'] = $r['country'];
  $_SESSION['marital'] = $r['marital'];
  $_SESSION['nationality'] = $r['nationality'];
  $_SESSION['notes'] = $r['notes'];

  header("Location: profile1.php");
}

if (isset($_POST['kembali_identity'])) {

  $_SESSION['id_profil'] = $_POST['id_profil'];

  $_SESSION['id_fir'] = $_POST['id_fir'];

  header("Location: physical.php");
}

if (isset($_POST['seterusnya_physical'])) {

  $_SESSION['id_profil'] = $_POST['id_profil'];

  $_SESSION['id_fir'] = $_POST['id_fir'];

  header("Location: identitycard.php");
}

if (isset($_POST['kembali_passport'])) {

  $_SESSION['id_profil'] = $_POST['id_profil'];

  $_SESSION['id_fir'] = $_POST['id_fir'];

  header("Location: identitycard.php");
}

if (isset($_POST['seterusnya_identity'])) {

  $_SESSION['id_profil'] = $_POST['id_profil'];

  $_SESSION['id_fir'] = $_POST['id_fir'];

  header("Location: passport.php");
}

if (isset($_POST['kembali_dl'])) {

  $_SESSION['id_profil'] = $_POST['id_profil'];

  $_SESSION['id_fir'] = $_POST['id_fir'];

  header("Location: passport.php");
}

if (isset($_POST['seterusnya_passport'])) {

  $_SESSION['id_profil'] = $_POST['id_profil'];

  $_SESSION['id_fir'] = $_POST['id_fir'];

  header("Location: drivinglicense.php");
}

if (isset($_POST['kembali_transport'])) {

  $_SESSION['id_profil'] = $_POST['id_profil'];

  $_SESSION['id_fir'] = $_POST['id_fir'];

  header("Location: drivinglicense.php");
}

if (isset($_POST['kembali_media'])) {

  $_SESSION['id_profil'] = $_POST['id_profil'];

  $_SESSION['id_fir'] = $_POST['id_fir'];

  header("Location: company.php");
}

if (isset($_POST['seterusnya_dl'])) {

  $_SESSION['id_profil'] = $_POST['id_profil'];

  $_SESSION['id_fir'] = $_POST['id_fir'];

  header("Location: transportation.php");
}

if (isset($_POST['kembali_mobile'])) {

  $_SESSION['id_profil'] = $_POST['id_profil'];

  $_SESSION['id_fir'] = $_POST['id_fir'];

  header("Location: smedia.php");
}

if (isset($_POST['kembali_bank'])) {

  $_SESSION['id_profil'] = $_POST['id_profil'];

  $_SESSION['id_fir'] = $_POST['id_fir'];

  header("Location: transportation.php");
}

if (isset($_POST['kembali_house'])) {

  $_SESSION['id_profil'] = $_POST['id_profil'];

  $_SESSION['id_fir'] = $_POST['id_fir'];

  header("Location: mobileno.php");
}

if (isset($_POST['kembali_company'])) {

  $_SESSION['id_profil'] = $_POST['id_profil'];

  $_SESSION['id_fir'] = $_POST['id_fir'];

  header("Location: bank.php");
}

if (isset($_POST['seterusnya_company'])) {

  $_SESSION['id_profil'] = $_POST['id_profil'];

  $_SESSION['id_fir'] = $_POST['id_fir'];

  header("Location: company_gst_att.php");
}

if (isset($_POST['seterusnya_company_gst_att'])) {

  $_SESSION['id_profil'] = $_POST['id_profil'];

  $_SESSION['id_fir'] = $_POST['id_fir'];

  header("Location: smedia.php");
}
if (isset($_POST['seterusnya_transport'])) {

  $_SESSION['id_profil'] = $_POST['id_profil'];

  $_SESSION['id_fir'] = $_POST['id_fir'];

  header("Location: bank.php");
}

if (isset($_POST['seterusnya_bank'])) {

  $_SESSION['id_profil'] = $_POST['id_profil'];

  $_SESSION['id_fir'] = $_POST['id_fir'];

  header("Location: company.php");
}

if (isset($_POST['seterusnya_media'])) {

  $_SESSION['id_profil'] = $_POST['id_profil'];

  $_SESSION['id_fir'] = $_POST['id_fir'];

  header("Location: mobileno.php");
}

if (isset($_POST['seterusnya_mobile'])) {

  $_SESSION['id_profil'] = $_POST['id_profil'];

  $_SESSION['id_fir'] = $_POST['id_fir'];

  header("Location: house.php");
}

if (isset($_POST['tambah_profile'])) {
  # code...
  $_SESSION['id_fir'] = $_POST['id_fir'];

  header("Location : pro.php");
}

if (isset($_POST['update_risik'])) {
  # code...
  $id_fir = $_POST['id_fir'];

  $sql = "UPDATE [dbo].[admin] SET [status] = 'SIASATAN' WHERE id_fir = '$id_fir'";
  $stmt = sqlsrv_query($conn, $sql);
  /*
//qrcode
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;

    $PNG_WEB_DIR = 'temp/';

    include "qrcode/qrlib.php";    
    
    $filename = $PNG_TEMP_DIR.'test.png';

        $filename = $PNG_TEMP_DIR.md5(''.$_SESSION['http'].'qr_check.php?u='.base64_encode($_COOKIE['id']).'&c='.base64_encode($id_fir).'&date='.base64_encode(date('Y-m-d h:i:s')).'|H|4').'.png';
        QRcode::png($_SESSION['http'].'qr_check.php?u='.base64_encode($_COOKIE['id']).'&c='.base64_encode($id_fir).'&date='.base64_encode(date('Y-m-d h:i:s')).'', $filename,'H', '4', 2);  

        //'<img src="'.$_SESSION['http'].$PNG_WEB_DIR.basename($filename).'" style="width: 80px;height: auto;" align="right"/>';  
//qrcode
  $stmt1 = sqlsrv_query($conn,"SELECT * FROM [jim].[dbo].[team] WHERE id_fir = '$id_fir'");
  while ($r1 = sqlsrv_fetch_array($stmt1)) { 

    $stmt2 = sqlsrv_query($conn,"SELECT * FROM [jim].[dbo].[login] WHERE id = '$r1[id_nama]'");
    $r2 = sqlsrv_fetch_array($stmt2);

      $to = $r2["email"];
      $datet = date("d/m/Y H:i:s A");
      $subject = 'Task Assign';

$message = "
<html>
<head>
</head>
<body>
<p>Hi $r2[fulname]</p><br>
  <p>At $datet you have ben appoint to Case $id_fir<br>as $r1[catatan]</p>
  <a href='".$_SESSION['http'].$PNG_WEB_DIR.basename($filename)."'>View Qrcode</a>
  <img src='".$_SESSION['http'].$PNG_WEB_DIR.basename($filename)."'>
</body>
</html>";

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'From: Profiling System';
#$headers[] = 'Cc: supervisor@example.com';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));
  }

if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}
*/
  header("Location : menu.php");
}

if (isset($_POST['kiv'])) {
  # code...
  $_SESSION['status'] = $_POST['kiv'];

  header("Location : status.php");
}

if (isset($_POST['inactive'])) {
  # code...
  $_SESSION['status'] = $_POST['inactive'];

  header("Location : status.php");
}

if (isset($_POST['active'])) {
  # code...
  $_SESSION['status'] = $_POST['active'];

  header("Location : status.php");
}

if (isset($_POST['standard'])) {
  # code...
  $_SESSION['priority'] = $_POST['standard'];

  header("Location : priority.php");
}

if (isset($_POST['urgent'])) {
  # code...
  $_SESSION['priority'] = $_POST['urgent'];

  header("Location : priority.php");
}

if (isset($_POST['critical'])) {
  # code...
  $_SESSION['priority'] = $_POST['critical'];

  header("Location : priority.php");
}

if (isset($_POST['important'])) {
  # code...
  $_SESSION['priority'] = $_POST['important'];

  header("Location : priority.php");
}

if (isset($_POST['kemas_fir'])) {
  # code...
  $fir_ = $_POST['fir_'];
  $distribute = $_POST['distribute'];
  $cs_status = $_POST['cs_status'];
  $priority = $_POST['priority'];
  $intell_nom = $_POST['intell_nom'];
  $invest_nom = $_POST['invest_nom'];
  $title_ = $_POST['title_'];
  $major_class = $_POST['major_class'];
  $minor_class = $_POST['minor_class'];
  $reg_date = $_POST['reg_date'];
  $reg_oprtor = $_POST['reg_oprtor'];
  $appr_offcr = $_POST['appr_offcr'];
  $rep_dprmnt = $_POST['rep_dprmnt'];
  $team_ = $_POST['team_'];
  $state_ = $_POST['state_'];
  $country_ = $_POST['country_'];
  $dsk_offcr = $_POST['dsk_offcr'];
  $dsk_offcr_nom = $_POST['dsk_offcr_nom'];
  $dsk_offcr_mail = $_POST['dsk_offcr_mail'];
  $aho_offcr = $_POST['aho_offcr'];
  $aho_nom = $_POST['aho_nom'];
  $intelli_team = $_POST['intelli_team'];
  $sfo_offcr = $_POST['sfo_offcr'];
  $sfo_nom = $_POST['sfo_nom'];
  $intell_strt = $_POST['intell_strt'];
  $intelli_end = $_POST['intelli_end'];
  $ingri = $_POST['ngri'];
  $userk = $_COOKIE['id'];

  $sql = "UPDATE [dbo].[admin]
   SET [distribution] = '$distribute'
      ,[cs_status] = '$cs_status'
      ,[intell_no] = '$intell_nom'
      ,[invest_no] = '$invest_nom'
      ,[title] = '$title_'
      ,[major] = '$major_class'
      ,[minor] = '$minor_class'
      ,[date_regist] = '$reg_date'
      ,[operator] = '$reg_oprtor'
      ,[officer] = '$appr_offcr'
      ,[department] = '$rep_dprmnt'
      ,[team] = '$team_'
      ,[state] = '$state_'
      ,[country] = '$country_'
      ,[do] = '$dsk_offcr'
      ,[do_num] = '$dsk_offcr_nom'
      ,[do_mail] = '$dsk_offcr_mail'
      ,[aho_officer] = '$aho_offcr'
      ,[aho_num] = '$aho_nom'
      ,[intell_team] = '$intelli_team'
      ,[sfo_officer] = '$sfo_offcr'
      ,[sfo_num] = '$sfo_nom'
      ,[intell_start] = '$intell_strt'
      ,[intell_end] = '$intelli_end'
      ,[priority] = '$priority'
 WHERE id_fir = '$fir_'";
  $stmt = sqlsrv_query($conn, $sql);
  if ($stmt == 0) {
    $_SESSION['flash'] = "Gagal";
    $_SESSION['clr'] = "alert-danger";
  } else {
    $_SESSION['flash'] = "Berjaya";
    $_SESSION['clr'] = "alert-success";
  }

  header("Location : menu.php");
}

if (isset($_POST['hantar_reject_fir'])) {
  # code...
  $id_fir = $_POST['id_fir'];
  $cttn = $_POST['cttn'];

  $sql = "UPDATE [dbo].[admin]
   SET [status] = 'BARU'
      ,[catatan_penyelia] = '$cttn'
 WHERE id_fir = '$id_fir'";
  $stmt = sqlsrv_query($conn, $sql);
  if ($stmt == 0) {
    $_SESSION['flash'] = "Gagal";
    $_SESSION['clr'] = "alert-danger";
  } else {
    $_SESSION['flash'] = "Berjaya";
    $_SESSION['clr'] = "alert-success";
  }

  header("Location : menu.php");
}

if (isset($_POST['hantar_reject_risik'])) {
  # code...
  $id_fir = $_POST['id_fir'];
  $cttn = $_POST['cttn'];

  $sql = "UPDATE [dbo].[admin]
   SET [status] = 'SIASATAN'
      ,[catatan_penyelia] = '$cttn'
 WHERE id_fir = '$id_fir'";
  $stmt = sqlsrv_query($conn, $sql);
  if ($stmt == 0) {
    $_SESSION['flash'] = "Gagal";
    $_SESSION['clr'] = "alert-danger";
  } else {
    $_SESSION['flash'] = "Berjaya";
    $_SESSION['clr'] = "alert-success";
  }

  header("Location : menu.php");
}

if (isset($_POST['edit_pro'])) {
  # code...
  $_SESSION['id'] = $_POST['id'];

  $sql = "SELECT * FROM [jim].[dbo].[profile] WHERE id = '$_SESSION[id]'";
  $stmt = sqlsrv_query($conn, $sql);
  $r = sqlsrv_fetch_array($stmt);

  $_SESSION['id_fir'] = $r['id_fir'];
  $_SESSION['id_profil'] = $r['id_profil'];
  $_SESSION['picleft'] = $r['picleft'];
  $_SESSION['piccenter'] = $r['piccenter'];
  $_SESSION['picright'] = $r['picright'];
  $_SESSION['status'] = $r['status'];
  $_SESSION['crimetree'] = $r['crimetree'];
  $_SESSION['relationship'] = $r['relationship'];
  $_SESSION['firstname'] = $r['firstname'];
  $_SESSION['middlename'] = $r['middlename'];
  $_SESSION['lastname'] = $r['lastname'];
  $_SESSION['nickname'] = $r['nickname'];
  $_SESSION['language'] = $r['language'];
  $_SESSION['gender'] = $r['gender'];
  $_SESSION['birth'] = $r['birth'];
  $_SESSION['age'] = $r['age'];
  $_SESSION['race'] = $r['race'];
  $_SESSION['ethnic'] = $r['ethnic'];
  $_SESSION['country'] = $r['country'];
  $_SESSION['marital'] = $r['marital'];
  $_SESSION['nationality'] = $r['nationality'];
  $_SESSION['notes'] = $r['notes'];

  header("Location : profile1.php");
}

if (isset($_POST['list_dia'])) {
  # code...
  $_SESSION['id_fir'] = $_POST['id_fir'];

  $sql = "SELECT * FROM [jim].[dbo].[admin] WHERE id_fir = '$_SESSION[id_fir]'";
  $stmt = sqlsrv_query($conn, $sql);
  $r = sqlsrv_fetch_array($stmt);

  $_SESSION['masa'] = $r['masa'];

  header("Location : diari_fir.php");
}

if (isset($_POST['print_diari'])) {
  $_SESSION['id_fir'] = $_POST['id_fir'];

  $sql = "SELECT *  FROM [jim].[dbo].[diari] WHERE id_fir = '$_SESSION[id_fir]'";
  $stmt = sqlsrv_query($conn, $sql);
  if (!$stmt) {
  } else {
    $r = sqlsrv_fetch_array($stmt);
    $_SESSION['id_fir'] = $r['id_fir'];
    $_SESSION['nm_ptgas'] = $r['nm_ptgas'];
    $_SESSION['jwt'] = $r['jwt'];
    $_SESSION['trkh'] = $r['trkh'];
    $_SESSION['ms'] = $r['ms'];
    $_SESSION['butiran'] = $r['butiran'];
  }
  header("Location:print/print_diari.php");
}

if (isset($_POST['print_diari2'])) {

  $_SESSION['id'] = $_POST['id'];

  header("Location:print/print_diari2.php");
}

?>