<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
 <?php session_start();
 error_reporting(0) ?>
<!DOCTYPE html>
<html>
<head>
<?php include 'include/css.php'; ?>
</head>
<?php if(isset($_POST['prfil']) || isset($_POST['mlm_tran_profil'])): ?>
<?php
include 'include/dbconn.php';
if (isset($_POST['prfil'])) {
$_POST['id_profil'];
$sql = "SELECT * FROM [jim].[dbo].[profile] WHERE id_profil = '$_POST[id_profil]'";
$stmt = sqlsrv_query ($conn , $sql);
$r = sqlsrv_fetch_array($stmt);
$id_profil= $r['id_profil'];
$firstname= $r['firstname'];
}
if (isset($_POST['mlm_tran_profil'])) {
$sql = "SELECT * FROM [jim].[dbo].[ic] WHERE id_profil = '$_POST[id_profil]'";
$stmt = sqlsrv_query ($conn , $sql);
$r = sqlsrv_fetch_array($stmt);
$id_profil= $r['id_profil'];
$firstname= $r['firstname'];
}
?>
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
                  <center><h4>Demo</h4></center>
                   <br/>
                    <center><h3>Maklumat : &thinsp;<?php echo $firstname; ?></h3></center>
<?php
include 'include/dbconn.php';

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
                  <th>Tinggi (cm)</th>
                  <th>Warna Rambut</th>
                  <th>Parut atau/dan Tanda Lahir</th>
                  <th>Tatu</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

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
                  <td><?php echo $row1['haircolor']; ?></td>
                  <td><?php echo $row1['scar']; ?></td>
                  <td><?php echo $row1['tattoos']; ?></td>
                </tr>
<?php } ?>
              </table>

              <strong>Maklumat Kad Pengenalan</strong>
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Nombor Kad Pengenalan</th>
                  <th>Status I/C</th>
                  <th>Jenis Kad</th>
                  <th>Nama</th>
                </tr>
                </thead>
                <tbody>

<?php include('include/dbconn.php');

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
                  <td><?php echo $row1['cardtype']; ?></td>
                  <td><?php echo $row1['firstname']; ?> <?php echo $row1['middlename']; ?> <?php echo $row1['lastname']; ?></td>
                </tr>
<?php } ?>
              </table>
              <strong>Maklumat Pasport</strong>
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Status Pasport</th>
                  <th>Nombor Pasport</th>
                  <th>Nombor MRZ</th>
                  <th>Nama</th>
                </tr>
                </thead>
<?php include('include/dbconn.php');

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
                  <td><?php echo $row1['mrz']; ?></td>
                  <td><?php echo $row1['firstname']; ?> <?php echo $row1['middlename']; ?> <?php echo $row1['lastname']; ?></td>
                </tr>
<?php } ?>
              </table>
              <strong>Maklumat Lesen Memandu</strong>
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Nombor Siri</th>
                  <th>Status</th>
                  <th>Kelas lesen</th>
                  <th>Nama</th>
                </tr>
                </thead>
                <tbody>
<?php include('include/dbconn.php');

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
                  <td><?php echo $row1['firstname']; ?> <?php echo $row1['middlename']; ?> <?php echo $row1['lastname']; ?></td>
                </tr>
<?php } ?>
              </table>
              <strong>Maklumat Kenderaan</strong>
<?php include('include/dbconn.php');

      $sql = "SELECT * FROM [jim].[dbo].[transportation] Where id_profil = '$id_profil' ";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
?>
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Nombor Pendaftaran</th>
                  <th>Status</th>
                  <th>Jenis</th>
                  <th>Tahun Kenderaan</th>
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
                  <td><?php echo $row1['year']; ?></td>
                </tr>
<?php } ?>
              </table>
              <strong>Maklumat Telekomunikasi</strong>
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Nombor Telefon</th>
                  <th>Perkhidmatan</th>
                  <th>Tarikh Daftar</th>
                  <th>Status</th>
                </tr>
                </thead>
<?php include('include/dbconn.php');

      $sql = "SELECT * FROM [jim].[dbo].[mobileno] Where id_profil = '$id_profil' ";
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
                  <td><?php echo $row1['service']; ?></td>
                  <td><?php echo $row1['registdate']; ?></td>
                  <td><?php echo $row1['status']; ?></td>
                </tr>
<?php } ?>
              </table>
                        <div class="ln_solid"></div>
                        <div class="row">
                        <?php //gst attribute ?>
<?php include('include/dbconn.php');
//echo $id_profil = $_SESSION['id_profil'];

    /*$sql = "SELECT * FROM [dbo].[com_pany_gst_att] WHERE
      [com_pany_id] LIKE '%".$_GET['keyword']."%' ";*/
    $sql = "SELECT * FROM [dbo].[com_pany_gst_att] WHERE
      [id_profil] = '".$id_profil."' ";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
?>
            <div class="box-header">
              <h3 class="box-title">Senarai Pendaftaran GST Syarikat</h3>
            </div>
            <!-- /.box-header -->
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>No Syarikat</th>
                  <th>Tarikh Pendaftaran</th>
                  <th>Tarikh Akaun Dibuka</th>
                  <th>Tarikh Akuan Ditutup</th>
                  <th>Status</th>
                  <th>Sebab ditutup</th>
                  <th>Akaun Prinsipal</th>
                  <th>Bayaran Basis</th>
                  <th>Tarikh Perpindahan Wang</th>
                  <th width="10%">Tindakan</th>
                </tr>
                </thead>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo $row1['com_pany_id']; ?></td>
                  <td><?php echo $row1['registration_application_date']; ?></td>
                  <td><?php echo $row1['account_commence_date']; ?></td>
                  <td><?php echo $row1['account_end']; ?></td>
                  <td><?php echo $row1['status']; ?></td>
                  <td><?php echo $row1['closure_reason']; ?></td>
                  <td><?php echo $row1['principal_account']; ?></td>
                  <td><?php echo $row1['payment_basis']; ?></td>
                  <td><?php echo $row1['transfer_date']; ?></td>
                  
                  <td>
                    
                  </td>
                </tr>
<?php } ?>
              </table>
              
              
            </div>
          </div>
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
<?php endif ; ?>

<?php if(isset($_POST['id_com'])): ?>
<?php
include 'include/dbconn.php';
if (isset($_POST['id_com'])) {
$sql = "SELECT * FROM [jim].[dbo].[com_pany] WHERE c_name = '$_POST[bis_no]'";
$stmt = sqlsrv_query ($conn , $sql);
$r = sqlsrv_fetch_array($stmt);
$c_name= $r['c_name'];
}
?>
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
                  <center><h4>Demo</h4></center>
                   <br/>
                    <center><h3>Maklumat : &thinsp;<?php echo $c_name; ?></h3></center>
                  </div>
                   <br/>
                   <table width="100%">
                            <td width="25%" class="pull-left"><strong>Nama Syarikat</strong></td>  <td width="25%" class="pull-left">: <?php echo $r['c_name']; ?></td>
                            <td width="25%" class="pull-left"><strong>No Pendaftaran Syarikat</strong></td>  <td width="25%" class="pull-left">: <?php echo $r['no_c']; $_SESSION['no_c'] = $r['no_c']; ?></td>

                            <td width="25%" class="pull-left"><strong>Sektor</strong></td>  <td width="25%" class="pull-left">: <?php echo $r['sek']; ?></td>
                            <td width="25%" class="pull-left"><strong>Alamat</strong></td>  <td width="25%" class="pull-left">: <?php echo $r['ala']; ?></td>

                            <td width="25%" class="pull-left"><strong>No Telefon</strong></td>  <td width="25%" class="pull-left">: <?php echo $r['tel']; ?></td>
                            <td width="25%" class="pull-left"><strong>No Sambungan Syarikat</strong></td>  <td width="25%" class="pull-left">: <?php echo $r['exttel']; ?></td>

                            <td width="25%" class="pull-left"><strong>Fax</strong></td>  <td width="25%" class="pull-left">: <?php echo $r['fax']; ?></td>
                            <td width="25%" class="pull-left"><strong>Email</strong></td>  <td width="25%" class="pull-left">: <?php echo $r['email']; ?></td>

                            <td width="25%" class="pull-left"><strong>Laman Sesawang</strong></td>  <td width="25%" class="pull-left">: <?php echo $r['web']; ?></td>
                            <td width="25%" class="pull-left"><strong>Catatan</strong></td>  <td width="25%" class="pull-left">: <?php echo $r['note']; ?></td>
                   </table>
                   <br>
              <strong>Maklumat Pemilik</strong>
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Nama</th>
                  <th>IC/Pasport</th>
                  <th>Status</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

      $sql = "SELECT * FROM [jim].[dbo].[com_pany] WHERE c_name = '$_POST[bis_no]'";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td>
                    <?php
                     $sql = "SELECT * FROM [jim].[dbo].[profile] WHERE id_profil = '$row1[id_profil]'";
                     $stmt = sqlsrv_query ($conn , $sql);
                     $r = sqlsrv_fetch_array($stmt);
                     echo $r['firstname'];
                    ?>
                  </td>
                  <td>
                    <?php
                     $sql = "SELECT * FROM [jim].[dbo].[ic] WHERE id_profil = '$row1[id_profil]'";
                     $stmt = sqlsrv_query ($conn , $sql);
                     $r = sqlsrv_fetch_array($stmt);
                     echo $r['nom'];
                    ?>
                  </td>
                  <td><?php echo $row1['mili_s']; ?></td>
                  <td>
                    <center>
                      <form method="post" action="id_profil.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                        <input type="hidden" name="id_profil" value="<?php echo $row1['id_profil']; ?>">
                        <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="mlm_tran_profil"><span class="glyphicon glyphicon-eye-open"></span></button>
                      </form>
                    </center>
                  </td>
                </tr>
<?php } ?>
              </table>
              <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
            <br>
              <h3 class="box-title">Senarai GST</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="example21" class="table table-bordered table-striped">
                                <thead>
                                  <tr>
                                    <th style="width: 1%">No</th>
                        <th>Nama Akaun</th>
                        <th>No Syarikat</th>
                        <th>ID Akaun</th>
                        <th>Kembali Tempoh Pengumuman</th>
                        <th>Perolehan Nilai Standard</th>
                        <th>Bekalan Nilai Standard</th>
                        <th>Cukai Input</th>
                        <th>Cukai Output</th>
                        <th>Amaun Boleh Tuntut</th>
                        <th>Jumlah yang Dibayar</th>
                        <th>Hutang lapuk pulih</th>
                        <th>Bantuan Hutang Buruk</th>
                        <th>Barang Modal yang Diambil</th>
                        <th>Bekalan Pengecualian</th>
                        <th>Bekalan Eksport</th>
                        <th>Barang Import</th>
                        <th>Bekalan Setempat</th>
                        <th>Bekalan Bantuan GST</th>
                        <th>GST digantung</th>

                                  </tr>
                                </thead>
                                <tbody>
          <?php
          $sql = "SELECT COUNT(0) FROM [jim].[dbo].[gst]";
          $retval = sqlsrv_query( $conn,$sql);
          $c = sqlsrv_fetch_array( $retval, SQLSRV_FETCH_NUMERIC);

          $rec_limit = 1000;
          $rec_count = $c[0];
          if(isset($_GET['page'])) {
            $page = $_GET['page'] + 1;
            $offset = $rec_limit * $page ;
          }else {
            $page = 0;
            $offset = 0;
          }

          $left_rec = $rec_count - ($page * $rec_limit);
          $sql = "SELECT * FROM [jim].[dbo].[gst] 
          where company_no = '".$_SESSION['no_c']."'
          ORDER BY id ASC OFFSET $offset ROWS FETCH FIRST $rec_limit ROWS ONLY";

          $retval = sqlsrv_query( $conn,$sql);
          $counter = $offset + 1;
          $last = $page - 2;
          while($row1 = sqlsrv_fetch_array($retval)) {
          ?>
                          <tr>              
                            <td><?php echo $counter++; ?></td>
                            <td>
                            <?php echo $row1['acount_name']; ?>
                            </td>
                        <td><?php echo $row1['company_no']; ?></td>
                        <td><?php echo $row1['account_id']; ?></td>
                        <td><?php echo $row1['return_fp']; ?></td>
              <td><?php echo $row1['standard_ra']; ?></td>
              <td><?php echo $row1['standard_rs']; ?></td>
              <td><?php echo $row1['input_t']; ?></td>
              <td><?php echo $row1['output_t']; ?></td>
              <td><?php echo $row1['amount_c']; ?></td>
              <td><?php echo $row1['amount_p']; ?></td>
              <td><?php echo $row1['bad_dr']; ?></td>
              <td><?php echo $row1['bad_dre']; ?></td>
              <td><?php echo $row1['capital_ga']; ?></td>
              <td><?php echo $row1['exempt_s']; ?></td>
              <td><?php echo $row1['export_s']; ?></td>
              <td><?php echo $row1['goods_i']; ?></td>
              <td><?php echo $row1['local_s']; ?></td>
              <td><?php echo $row1['gst_rs']; ?></td>
              <td><?php echo $row1['suspended_g']; ?></td>
                        
                        
                          </tr>
          <?php } ?>
                                </tbody>
                              </table>
                            </div>
                            </div>
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
<?php endif ; ?>
<?php include 'include/js.php'; ?>
</html>