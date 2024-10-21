<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
 <?php session_start(); ?>
<!DOCTYPE html>
<html>
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
   					<img src="../img/Klogo.png" class="center-block" height="170px" width="170px"><br/>
                  <center><h4>Demo</h4></center>
                   <br/><br/>
                    <center><h3>Maklumat Kes : &thinsp;<?php if(isset($_SESSION['id_fir'])){ echo $_SESSION['id_fir']; } ?></h3></center>
                  </div>
                    <br />
                        <table width="100%">
                            <td width="25%" class="pull-left"><strong>Record ID (FIR)</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['id_fir'])){ echo $_SESSION['id_fir']; } ?></td>
                            <td width="25%" class="pull-left"><strong>Keutamaan Kes</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['priority'])){ echo $_SESSION['priority']; } ?></td>

                            <td width="25%" class="pull-left"><strong>Distribution</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['distribution'])){ echo $_SESSION['distribution']; } ?></td>
                            <td width="25%" class="pull-left"><strong>Status Kes</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['cs_status'])){ echo $_SESSION['cs_status']; } ?></td>

                            <td width="25%" class="pull-left"><strong>Nombor Fail Perisikan</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['intell_no'])){ echo $_SESSION['intell_no']; } ?></td>
                            <td width="25%" class="pull-left"><strong>Nombor Fail Penyiasatan</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['invest_no'])){ echo $_SESSION['invest_no']; } ?></td>

                            <td width="25%" class="pull-left"><strong>Tajuk</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['title'])){ echo $_SESSION['title']; } ?></td>
                            <td width="25%" class="pull-left"><strong>Klasifikasi Utama</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['major'])){ echo $_SESSION['major']; } ?></td>

                            <td width="25%" class="pull-left"><strong>Klasifikasi Kecil</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['minor'])){ echo $_SESSION['minor']; } ?></td>
                            <td width="25%" class="pull-left"><strong>Tarikh Daftar</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['date_regist'])){ echo $_SESSION['date_regist']; } ?></td>

                            <td width="25%" class="pull-left"><strong>Pengendali Pendaftaran (RO)</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['operator'])){ echo $_SESSION['operator']; } ?></td>
                            <td width="25%" class="pull-left"><strong>Pegawai Kelulusan (AO)</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['officer'])){ echo $_SESSION['officer']; } ?></td>

                            <td width="25%" class="pull-left"><strong>Agensi/Jabatan Pelaporan</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['department'])){ echo $_SESSION['department']; } ?></td>
                            <td width="25%" class="pull-left"><strong>Bahagian / Unit / Pasukan</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['team'])){ echo $_SESSION['team']; } ?></td>
                            
                            <td width="25%" class="pull-left"><strong>Negeri</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['state'])){ echo $_SESSION['state']; } ?></td>
                            <td width="25%" class="pull-left"><strong>Negara</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['country'])){ echo $_SESSION['country']; } ?></td>
                            
                            <td width="25%" class="pull-left"><strong>Pegawai Penerima (DO)</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['do'])){ echo $_SESSION['do']; } ?></td>
                            <td width="25%" class="pull-left"><strong>Nombor Telefon Pegawai Penerima</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['do_num'])){ echo $_SESSION['do_num']; } ?></td>
                            
                            <td width="25%" class="pull-left"><strong>Emel Pegawai Penerima</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['do_mail'])){ echo $_SESSION['do_mail']; } ?></td>
                            <td width="25%" class="pull-left"><strong>Pegawai AHO/SFO</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['aho_officer'])){ echo $_SESSION['aho_officer']; } ?></td>
                            
                            <td width="25%" class="pull-left"><strong>Nombor Telefon AHO/SFO</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['aho_num'])){ echo $_SESSION['aho_num']; } ?></td>
                            <td width="25%" class="pull-left"><strong>Pasukan Perisikan</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['intell_team'])){ echo $_SESSION['intell_team']; } ?></td>
                            
                            <td width="25%" class="pull-left"><strong>Pegawai SFO/FIO</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['sfo_officer'])){ echo $_SESSION['sfo_officer']; } ?></td>
                            <td width="25%" class="pull-left"><strong>Nombor Telefon SFO/FIO</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['sfo_num'])){ echo $_SESSION['sfo_num']; } ?></td>
                            
                            <td width="25%" class="pull-left"><strong>Kitaran Perisikan Mula</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['intell_start'])){ echo $_SESSION['intell_start']; } ?></td>
                            <td width="25%" class="pull-left"><strong>Kitaran Perisikan Tamat</strong></td>  <td width="25%" class="pull-left">: <?php if(isset($_SESSION['intell_end'])){ echo $_SESSION['intell_end']; } ?></td>
                        </table>
                        <?php if($_SESSION['status'] == "SIASATAN" || $_SESSION['status'] == "BENTUK PASUKAN" || $_SESSION['status'] == "SEMAKAN SIASATAN" || $_SESSION['status'] == "SELESAI" || $_SESSION['status'] == "SEMAKAN PENGARAH" || $_SESSION['status'] == "TUTUP KES") : ?>
                          <br>
              <strong>Maklumat Profil</strong>
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

$id_fir = $_SESSION['id_fir'];

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
                        <div class="ln_solid"></div>
                        <div class="row">
                        <div class="pull-right">
                          <button onclick="window.close()" class="btn btn-primary">Tutup</button>
                        </div>
                        </div>
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