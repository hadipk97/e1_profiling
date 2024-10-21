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
  <body class="nav-md">
      <div class="container">
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
                   <br/>
                    <center><h3>Maklumat : &thinsp;<?php if(isset($_SESSION['firstname'])){ echo $_SESSION['firstname']; } ?></h3></center>
<?php
include 'include/dbconn.php';
$id_profil = $_SESSION['id_profil'];
$sql = "SELECT *  FROM [jim].[dbo].[profile] Where id_profil = '$id_profil'";
$stmt = sqlsrv_query ($conn , $sql);
if( !$stmt) {
}
else{
$r = sqlsrv_fetch_array($stmt);
$picleft= $r['picleft'];
$piccenter= $r['piccenter'];
$picright= $r['picright'];
?>
                    <center>
                      <?php 
                      if($picleft == ""){}
                      else {echo "<img src='upload/$picleft' height='100px' width='100px'>";}
                      ?>
                      <?php 
                      if($piccenter == ""){}
                      else {echo "<img src='upload/$piccenter' height='100px' width='100px'>";}
                      ?>
                      <?php 
                      if($picright == ""){}
                      else {echo "<img src='upload/$picright' height='100px' width='100px'>";}
                      ?>
                    </center>
<?php } ?>
                  </div>
                   <br/>
              <strong>Maklumat Fizikal</strong>
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Tinggi</th>
                  <th>Berat</th>
                  <th>Warna Mata</th>
                  <th>Warna Rambut</th>
                  <th>Parut</th>
                  <th>Cermin Mata</th>
                  <th>Bentuk Badan</th>
                  <th>Panjang Rambut</th>
                  <th>Tattoos</th>
                  <th>Darah</th>
                  <th>Catatan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');
$id_profil = $_SESSION['id_profil'];
      $sql = "SELECT * FROM [jim].[dbo].[physical] Where id_profil = '$id_profil' ";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo $row1['height']; ?></td>
                  <td><?php echo $row1['weight']; ?></td>
                  <td><?php echo $row1['eyecolor']; ?></td>
                  <td><?php echo $row1['haircolor']; ?></td>
                  <td><?php echo $row1['scar']; ?></td>
                  <td><?php echo $row1['glasses']; ?></td>
                  <td><?php echo $row1['build']; ?></td>
                  <td><?php echo $row1['hairlength']; ?></td>
                  <td><?php echo $row1['tattoos']; ?></td>
                  <td><?php echo $row1['blood']; ?></td>
                  <td><?php echo $row1['note']; ?></td>
                </tr>
<?php } ?>
              </table>

              <strong>Maklumat Kad Pengenalan</strong>
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>No.KP</th>
                  <th>Status</th>
                  <th>Keselamatan</th>
                  <th>Jenis Kad</th>
                  <th>Nama Pertama</th>
                  <th>Nama Tengah</th>
                  <th>Nama Akhir</th>
                  <th>Alamat</th>
                  <th>Poskod</th>
                  <th>Bandar</th>
                  <th>Negeri</th>
                  <th>Negara</th>
                  <th>Catatan</th>
                </tr>
                </thead>

<?php include('include/dbconn.php');
$id_profil = $_SESSION['id_profil'];
      $sql = "SELECT * FROM [jim].[dbo].[ic] Where id_profil = '$id_profil' ";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo $row1['nom']; ?></td>
                  <td><?php echo $row1['status']; ?></td>
                  <td><?php echo $row1['security']; ?></td>
                  <td><?php echo $row1['cardtype']; ?></td>
                  <td><?php echo $row1['firstname']; ?></td>
                  <td><?php echo $row1['middlename']; ?></td>
                  <td><?php echo $row1['lastname']; ?></td>
                  <td><?php echo $row1['add1']; ?>&ensp;<?php echo $row1['add2']; ?>&ensp;<?php echo $row1['add3']; ?></td>
                  <td><?php echo $row1['poscode']; ?></td>
                  <td><?php echo $row1['city']; ?></td>
                  <td><?php echo $row1['state']; ?></td>
                  <td><?php echo $row1['country']; ?></td>
                  <td><?php echo $row1['note']; ?></td>
                </tr>
<?php } ?>
              </table>
              <strong>Maklumat Pasport</strong>
              <table class="table table-bordered table-condensed ">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Status</th>
                  <th>No Baru</th>
                  <th>No Lama</th>
                  <th>MRZ</th>
                  <th>Jenis</th>
                  <th>Nama Pertama</th>
                  <th>Nama Tengah</th>
                  <th>Nama Akhir</th>
                  <th>Kod Negara</th>
                  <th>Gender</th>
                  <th>Tarikh Lahir</th>
                  <th>Umur</th>
                  <th>Warganegara</th>
                  <th>Tarikh Isu</th>
                  <th>Tarikh Tamat</th>
                  <th>Tempat Isu</th>
                  <th>Negara Isu</th>
                  <th>Tinggi</th>
                  <th>Berat</th>
                  <th>Catatan</th>
                </tr>
                </thead>
<?php include('include/dbconn.php');
$id_profil = $_SESSION['id_profil'];
      $sql = "SELECT * FROM [jim].[dbo].[passport] Where id_profil = '$id_profil' ";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo $row1['status']; ?></td>
                  <td><?php echo $row1['nomnew']; ?></td>
                  <td><?php echo $row1['nomold']; ?></td>
                  <td><?php echo $row1['mrz']; ?></td>
                  <td><?php echo $row1['type']; ?></td>
                  <td><?php echo $row1['firstname']; ?></td>
                  <td><?php echo $row1['middlename']; ?></td>
                  <td><?php echo $row1['lastname']; ?></td>
                  <td><?php echo $row1['countrycode']; ?></td>
                  <td><?php echo $row1['gender']; ?></td>
                  <td><?php echo $row1['birth']; ?></td>
                  <td><?php echo $row1['age']; ?></td>
                  <td><?php echo $row1['nationality']; ?></td>
                  <td><?php echo $row1['dateissue']; ?></td>
                  <td><?php echo $row1['dateexpired']; ?></td>
                  <td><?php echo $row1['issueplace']; ?></td>
                  <td><?php echo $row1['issuecountry']; ?></td>
                  <td><?php echo $row1['height']; ?></td>
                  <td><?php echo $row1['weight']; ?></td>
                  <td><?php echo $row1['note']; ?></td>
                </tr>
<?php } ?>
              </table>
              <strong>Maklumat Lesen Memandu</strong>
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>No Siri</th>
                  <th>Status</th>
                  <th>Kelas</th>
                  <th>Nama Pertama</th>
                  <th>Nama Tengah</th>
                  <th>Nama Akhir</th>
                  <th>Warganegara</th>
                  <th>Tarikh Mula</th>
                  <th>Tarikh Tamt</th>
                  <th>Tempat Isu</th>
                  <th>Negara</th>
                  <th>Catatan</th>
                </tr>
                </thead>
<?php include('include/dbconn.php');
$id_profil = $_SESSION['id_profil'];
      $sql = "SELECT * FROM [jim].[dbo].[drivelicense] Where id_profil = '$id_profil' ";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo $row1['serialno']; ?></td>
                  <td><?php echo $row1['status']; ?></td>
                  <td><?php echo $row1['class']; ?></td>
                  <td><?php echo $row1['firstname']; ?></td>
                  <td><?php echo $row1['middlename']; ?></td>
                  <td><?php echo $row1['lastname']; ?></td>
                  <td><?php echo $row1['nationality']; ?></td>
                  <td><?php echo $row1['startdate']; ?></td>
                  <td><?php echo $row1['expireddate']; ?></td>
                  <td><?php echo $row1['placeissue']; ?></td>
                  <td><?php echo $row1['country']; ?></td>
                  <td><?php echo $row1['note']; ?></td>
                </tr>
<?php } ?>
              </table>
              <strong>Maklumat Kenderaan</strong>
<?php include('include/dbconn.php');
$id_profil = $_SESSION['id_profil'];
      $sql = "SELECT * FROM [jim].[dbo].[transportation] Where id_profil = '$id_profil' ";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
?>
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>No Pendaftaran</th>
                  <th>Status</th>
                  <th>Jenis</th>
                  <th>Buatan</th>
                  <th>Model</th>
                  <th>Warna</th>
                  <th>Tahun</th>
                  <th>Tarikh Daftar</th>
                  <th>Catatan</th>
                </tr>
                </thead>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo $row1['registno']; ?></td>
                  <td><?php echo $row1['status']; ?></td>
                  <td><?php echo $row1['type']; ?></td>
                  <td><?php echo $row1['maker']; ?></td>
                  <td><?php echo $row1['model']; ?></td>
                  <td><?php echo $row1['color']; ?></td>
                  <td><?php echo $row1['year']; ?></td>
                  <td><?php echo $row1['registdate']; ?></td>
                  <td><?php echo $row1['note']; ?></td>
                </tr>
<?php } ?>
              </table>
              <strong>Maklumat Telekomunikasi</strong>
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>No.Tel</th>
                  <th>Services</th>
                  <th>Tarikh Daftar</th>
                  <th>Tarikh Tamat</th>
                  <th>Status</th>
                  <th>Menara</th>
                  <th>Rekod</th>
                  <th>Catatan</th>
                </tr>
                </thead>
<?php include('include/dbconn.php');
$id_profil = $_SESSION['id_profil'];
      $sql = "SELECT * FROM [jim].[dbo].[mobileno] Where id_profil = '$id_profil' ";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['nom']; ?></td>
                  <td><?php echo $row1['service']; ?></td>
                  <td><?php echo $row1['registdate']; ?></td>
                  <td><?php echo $row1['terminatedate']; ?></td>
                  <td><?php echo $row1['status']; ?></td>
                  <td><?php echo $row1['tower']; ?></td>
                  <td><?php echo $row1['record']; ?></td>
                  <td><?php echo $row1['note']; ?></td>
                </tr>
<?php } ?>
              </table>

              <strong>Maklumat Media Sosial</strong>
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Jenis Media Sosial</th>
                  <th>Id Pengguna</th>
                  <th>Nama Penuh</th>
                  <th>Nama Pengguna</th>
                  <th>URL</th>
                  <th>Catatan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

$sql = "SELECT * FROM [jim].[dbo].[msocial] WHERE id_profil = '$id_profil'";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['sm_id']; ?></td>
                  <td><?php echo $row1['sm_type']; ?></td>
                  <td><?php echo $row1['sm_fname']; ?></td>
                  <td><?php echo $row1['sm_name']; ?></td>
                  <td><?php echo $row1['sm_url']; ?></td>
                  <td><?php echo $row1['notas']; ?></td>
                </tr>
<?php } ?>
              </table>

              <strong>Maklumat Bank</strong>
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Nama Bank</th>
                  <th>No.Akaun</th>
                  <th>Pemegang Akaun</th>
                  <th>Jenis Akaun</th>
                  <th>Lokasi Akaun</th>
                  <th>Baki Akaun</th>
                  <th>Alamat Bank</th>
                  <th>Catatan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

$query_tbl = "SELECT * FROM [jim].[dbo].[bank] WHERE id_profil = '$id_profil'";

$sql = "$query_tbl";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['n_bank']; ?></td>
                  <td><?php echo $row1['n_aka']; ?></td>
                  <td><?php echo $row1['p_aka']; ?></td>
                  <td><?php echo $row1['j_aka']; ?></td>
                  <td><?php echo $row1['l_aka']; ?></td>
                  <td><?php echo $row1['b_aka']; ?></td>
                  <td><?php echo $row1['a_bank']; ?></td>
                  <td><?php echo $row1['note']; ?></td>
                </tr>
<?php } ?>
              </table>

              <strong>Maklumat Syarikat</strong>
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Nama Syarikat</th>
                  <th>Milikan</th>
                  <th>No.Syarikat</th>
                  <th>Tarikh Luput</th>
                  <th>Sektor</th>
                  <th>Alamat</th>
                  <th>No.Tel</th>
                  <th>Sambungan Syarikat</th>
                  <th>Fax</th>
                  <th>Emel</th>
                  <th>Laman Sesawang</th>
                  <th>Catatan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

$sql = "SELECT * FROM [jim].[dbo].[com_pany] WHERE id_profil = '$id_profil'";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['c_name']; ?></td>
                  <td><?php echo $row1['mili_s']; ?></td>
                  <td><?php echo $row1['no_c']; ?></td>
                  <td><?php echo $row1['exp_regist']; ?></td>
                  <td><?php echo $row1['sek']; ?></td>
                  <td><?php echo $row1['ala']; ?></td>
                  <td><?php echo $row1['tel']; ?></td>
                  <td><?php echo $row1['exttel']; ?></td>
                  <td><?php echo $row1['fax']; ?></td>
                  <td><?php echo $row1['email']; ?></td>
                  <td><?php echo $row1['web']; ?></td>
                  <td><?php echo $row1['note']; ?></td>
                </tr>
<?php } ?>
              </table>


              <strong>Maklumat Rumah</strong>
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>ID Pendaftaran</th>
                  <th>Jenis Rumah</th>
                  <th>Status Rumah</th>
                  <th>Sewa Bulanan</th>
                  <th>Tarikh Mula Sewa</th>
                  <th>Warna Rumah</th>
                  <th>Pemilik</th>
                  <th>Catatan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

$sql = "SELECT * FROM [jim].[dbo].[house] WHERE id_profil = '$id_profil'";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['id_regis']; ?></td>
                  <td><?php echo $row1['hse_type']; ?></td>
                  <td><?php echo $row1['hse_stat']; ?></td>
                  <td><?php echo $row1['month_rent']; ?></td>
                  <td><?php echo $row1['rent_since']; ?></td>
                  <td><?php echo $row1['hse_col']; ?></td>
                  <td><?php echo $row1['owner']; ?></td>
                  <td><?php echo $row1['notas']; ?></td>
                </tr>
<?php } ?>
              </table>




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