<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<!DOCTYPE html>
<html> 
<?php session_start(); ?>
 <?php
include 'include/dbconn.php';

// time limit
$date = base64_decode($_GET['date']);
if (date('Y-m-d h:i:s') > $date) {
  $current_date = new DateTime("$date");
  $end_date = $current_date->diff(new DateTime(date('Y-m-d h:i:s')));
  if($end_date->i > 30){
    die("Exceeded Time LImit");
  }
}else {
  die("Exceeded Time LImit");
}
// time limit

        
$stmt = sqlsrv_query($conn,"SELECT * FROM [jim].[dbo].[admin] where id_fir = '".base64_decode($_GET['c'])."'");
$r = sqlsrv_fetch_array($stmt);
 ?>
<head>
<?php include 'include/css.php'; ?>
</head>
<body>
    <div id="load"></div>
<div id="contents">
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <img src="../LogoSPRM.png" class="center-block" height="170px" width="170px"><br/>
                  <center><h4>Demo/h4></center>
                   <br/><br/>
                    <center><h3>Maklumat Kes : &thinsp;<?php echo $r['id_fir']; ?></h3></center>
                  </div>
                    <br>
                    <div class="col-md-3 col-sm-12">
                        <table width="100%">
                            <tr><td width="50%" class="pull-left"><strong>Record ID (FIR)</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['id_fir']; ?></td></tr>
                            <tr><td width="50%" class="pull-left"><strong>Keutamaan Kes</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['priority']; ?></td></tr>

                            <tr><td width="50%" class="pull-left"><strong>Distribution</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['distribution']; ?></td></tr>
                            <tr><td width="50%" class="pull-left"><strong>Status Kes</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['cs_status']; ?></td></tr>

                            <tr><td width="50%" class="pull-left"><strong>Nombor Fail Perisikan</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['intell_no']; ?></td></tr>
                            <tr><td width="50%" class="pull-left"><strong>Nombor Fail Penyiasatan</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['invest_no']; ?></td></tr>

                            <tr><td width="50%" class="pull-left"><strong>Tajuk</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['title']; ?></td></tr>
                            <tr><td width="50%" class="pull-left"><strong>Klasifikasi Utama</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['major']; ?></td></tr>
                        </table>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <table width="100%">
                            <tr><td width="50%" class="pull-left"><strong>Klasifikasi Kecil</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['minor']; ?></td></tr>
                            <tr><td width="50%" class="pull-left"><strong>Tarikh Daftar</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['date_regist']; ?></td></tr>

                            <tr><td width="50%" class="pull-left"><strong>Pengendali Pendaftaran (RO)</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['operator']; ?></td></tr>
                            <tr><td width="50%" class="pull-left"><strong>Pegawai Kelulusan (AO)</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['officer']; ?></td></tr>

                            <tr><td width="50%" class="pull-left"><strong>Agensi/Jabatan Pelaporan</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['department']; ?></td></tr>
                            <tr><td width="50%" class="pull-left"><strong>Bahagian / Unit / Pasukan</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['team']; ?></td></tr>
                        </table>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <table width="100%">
                            <tr><td width="50%" class="pull-left"><strong>Negeri</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['state']; ?></td></tr>
                            <tr><td width="50%" class="pull-left"><strong>Negara</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['country']; ?></td></tr>
                            
                            <tr><td width="50%" class="pull-left"><strong>Pegawai Penerima (DO)</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['do']; ?></td></tr>
                            <tr><td width="50%" class="pull-left"><strong>Nombor Telefon Pegawai Penerima</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['do_num']; ?></td></tr>
                            
                            <tr><td width="50%" class="pull-left"><strong>Emel Pegawai Penerima</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['do_mail']; ?></td></tr>
                            <tr><td width="50%" class="pull-left"><strong>Pegawai AHO/SFO</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['aho_officer']; ?></td></tr>
                        </table>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <table width="100%">
                            <tr><td width="50%" class="pull-left"><strong>Nombor Telefon AHO/SFO</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['aho_num']; ?></td></tr>
                            <tr><td width="50%" class="pull-left"><strong>Pasukan Perisikan</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['intell_team']; ?></td></tr>
                            
                            <tr><td width="50%" class="pull-left"><strong>Pegawai SFO/FIO</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['sfo_officer']; ?></td></tr>
                            <tr><td width="50%" class="pull-left"><strong>Nombor Telefon SFO/FIO</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['sfo_num']; ?></td></tr>
                            
                            <tr><td width="50%" class="pull-left"><strong>Kitaran Perisikan Mula</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['intell_start']; ?></td></tr>
                            <tr><td width="50%" class="pull-left"><strong>Kitaran Perisikan Tamat</strong></td>  <td width="50%" class="pull-left">: <?php echo $r['intell_end']; ?></td></tr>
                        </table>
                    </div>
                  </div>
                  <div class="x_panel">
                        <?php if($r['status'] == "SIASATAN" || $r['status'] == "BENTUK PASUKAN" || $r['status'] == "SEMAKAN SIASATAN" || $r['status'] == "SELESAI" || $r['status'] == "SEMAKAN PENGARAH" || $r['status'] == "TUTUP KES") : ?>
                          <br>
              <center><strong><h3>Maklumat Profil</h3></strong></center>
               <table class="table table-striped table-border">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>FIR</th>
                  <th>Nama</th>
                  <th>Nama Gelaran</th>
                  <th>Status</th>
                  <th style="width: 10%">Tindakan</th>
                </tr>
                </thead>
                <tbody>
<?php 
include('include/dbconn.php');

$id_fir = base64_decode($_GET['c']);

$sql = "SELECT * FROM [jim].[dbo].[profile] WHERE id_fir = '$id_fir'";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo $row1['id_fir']; ?></td>
                  <td><?php echo $row1['firstname']; ?> <?php echo $row1['lastname']; ?></td>
                  <td><?php echo $row1['nickname']; ?></td>
                  <td><?php echo $row1['status']; ?></td>
                  <td>
                    <center>
                      <div class="row">
                            <form method="post" action="view.php">
                            <input type="hidden" name="id_fir" value="<?php echo $row1['id_fir']; ?>">
                            <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                            <input type="hidden" name="firstname" value="<?php echo $row1['firstname']; ?>">
                            <input type="hidden" name="id_profil" value="<?php echo $row1['id_profil']; ?>">
                            <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_maklumat_profil"><span class="glyphicon glyphicon-eye-open"></span></button>
                            </form>
                      </div>
                    </center>
                  </td>
                </tr>
        <?php } ?>
          </tbody>
              </table>
                        <?php endif ; ?>
                        <center>
                          <form method="post" action="cetak_fir.php">
                            <input type="hidden" name="id" value="<?= $r['id']; ?>">
                            <button type="submit" class="btn btn-primary" name="e_pdf">Print</button>
                          </form>
                        </center>
                      </div>
                     </div>
                  </div>
                </div>
              </div>
			
		  </div>
        </div>
    </div>
</body>
<?php include 'include/js.php'; ?>
</html>