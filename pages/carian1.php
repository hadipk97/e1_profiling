<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php include 'include/bar.php'; ?>
        <!-- /top navigation -->

<!-- page content -->
    <section class="content">
        <div class="right_col" role="main">
          <div class="">
          <div class="page-title">
            
              <div class="title_left">
                <h3>Carian</h3>
              </div>
            </div>
            <div class="clearfix">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
          <div class="x_title">       
            <div class="title_right"> <div class="box-body">
             <form method="get" action="carian1.php">
              <div class="row">
                <div class="col-xs-2">
                  <label class="pull-right">Search By : <font color="red">&ensp;*</font></label>
                </div>
                <div class="col-xs-2">
                  <select class="form-control" name="search_by" required="required">
                    <?php echo (!empty($_GET['search_by']))? "<option value='$_GET[search_by]'>$_GET[search_by]</option>":"<option disabled selected>Option</option>" ?>
                    <option value="Lain-lain">Semua</option>
                    <option value="FIR" >FIR</option>
                    <option value="Profil" >Profil</option>
                    <option value="Fizikal" >Fizikal</option>
                    <option value="Kad Pengenalan" >Kad Pengenalan</option>
                    <option value="Pasport" >Pasport</option>
                    <option value="Lesen Memandu" >Lesen Memandu</option>
                    <option value="Pengangkutan" >Pengangkutan</option>
                    <option value="Bank" >Bank</option>
                    <option value="Syarikat" >Syarikat</option>
                    <option value="Media Sosial" >Media Sosial</option>
                    <option value="Nombor Telefon" >Nombor Telefon</option>
                    <option value="Rumah" >Rumah</option>
                    <option value="Transaksi" >Bank Statement</option>
                    <option value="iv">Investment</option>
                    <option value="lg">Ledger</option>
                    <option value="fd">Fix Deposit</option>
                    <option value="GST">GST</option>
                    
                  </select>
                </div>
                <div class="col-xs-4">
                  <input type="text" class="form-control" name="keyword" value="<?php echo (!empty($_GET['keyword']))? "$_GET[keyword]":"" ?>">
                </div>
                <div class="col-xs-2">
                  <button type="submit" class="btn btn-primary" name="keyword_carian">Search</button>
                </div>
                <div class="col-xs-2"></div>
              </div>
              <br>
              </form>
            </div>
            </div>
          </div>
                  <div class="x_content">
                  <div class="form group">
                  <div class="row">
                  <div class="box-body">
<?php 

$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );

?>

 <?php if ($_GET['search_by'] == "FIR" || $_GET['search_by'] == "Lain-lain") : ?>
<?php 

include('include/dbconn.php');

$sql = "SELECT * FROM [jim].[dbo].[admin] where (id_fir LIKE '%$_GET[keyword]%' 
                                       OR priority LIKE '%$_GET[keyword]%'
                                       OR distribution LIKE '%$_GET[keyword]%'
                                       OR cs_status LIKE '%$_GET[keyword]%'
                                       OR intell_no LIKE '%$_GET[keyword]%'
                                       OR invest_no LIKE '%$_GET[keyword]%'
                                       OR title LIKE '%$_GET[keyword]%'
                                       OR major LIKE '%$_GET[keyword]%'
                                       OR minor LIKE '%$_GET[keyword]%'
                                       OR operator LIKE '%$_GET[keyword]%'
                                       OR officer LIKE '%$_GET[keyword]%'
                                       OR department LIKE '%$_GET[keyword]%'
                                       OR team LIKE '%$_GET[keyword]%'
                                       OR state LIKE '%$_GET[keyword]%'
                                       OR country LIKE '%$_GET[keyword]%'
                                       OR do LIKE '%$_GET[keyword]%'
                                       OR do_num LIKE '%$_GET[keyword]%'
                                       OR do_mail LIKE '%$_GET[keyword]%'
                                       OR aho_officer LIKE '%$_GET[keyword]%'
                                       OR aho_num LIKE '%$_GET[keyword]%'
                                       OR intell_team LIKE '%$_GET[keyword]%'
                                       OR sfo_officer LIKE '%$_GET[keyword]%'
                                       OR sfo_num LIKE '%$_GET[keyword]%'
                                       OR intell_start LIKE '%$_GET[keyword]%'
                                       OR intell_end LIKE '%$_GET[keyword]%') 
                                      AND (id_fir <> 'DUMPDATA')";
$stmt1 = sqlsrv_query ($conn , $sql, $params, $options );

if (sqlsrv_num_rows($stmt1) > 0):
?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
              <h3 class="box-title">Senarai Kes FIR</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example11" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>FIR</th>
                  <th>Keutamaan Kes</th>
                  <th>Status Kes</th>
                  <th>Klasifikasi Utama</th>
                  <th>Klasifikasi Kecil</th>
                  <th>Negeri</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['id_fir']; ?></td>
                  <td><?php echo $row1['priority']; ?></td>
                  <td><?php echo $row1['cs_status']; ?></td>
                  <td><?php echo $row1['major']; ?></td>
                  <td><?php echo $row1['minor']; ?></td>
                  <td><?php echo $row1['state']; ?></td>
                  <td>
                      <center>
                        <div class="col-md-12">
                          <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                            <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                            <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                          </form>
                        </div>
                      </center>
                    </td>
                </tr>
<?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  <?php endif; ?> 
  <?php endif; ?> 

   <?php if ($_GET['search_by'] == "Profil" || $_GET['search_by'] == "Lain-lain") : ?>
<?php
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[profile] where id_fir LIKE '%$_GET[keyword]%' 
                                       OR id_profil LIKE '%$_GET[keyword]%'
                                       OR status LIKE '%$_GET[keyword]%'
                                       OR crimetree LIKE '%$_GET[keyword]%'
                                       OR relationship LIKE '%$_GET[keyword]%'
                                       OR firstname LIKE '%$_GET[keyword]%'
                                       OR middlename LIKE '%$_GET[keyword]%'
                                       OR lastname LIKE '%$_GET[keyword]%'
                                       OR nickname LIKE '%$_GET[keyword]%'
                                       OR language LIKE '%$_GET[keyword]%'
                                       OR gender LIKE '%$_GET[keyword]%'
                                       OR birth LIKE '%$_GET[keyword]%'
                                       OR age LIKE '%$_GET[keyword]%'
                                       OR race LIKE '%$_GET[keyword]%'
                                       OR ethnic LIKE '%$_GET[keyword]%'
                                       OR country LIKE '%$_GET[keyword]%'
                                       OR marital LIKE '%$_GET[keyword]%'
                                       OR nationality LIKE '%$_GET[keyword]%'
                                       OR notes LIKE '%$_GET[keyword]%'";
$stmt1 = sqlsrv_query ($conn , $sql, $params, $options );

if (sqlsrv_num_rows($stmt1) > 0):
?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
              <h3 class="box-title">Senarai Profil Kes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example12" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>FIR</th>
                  <th>ID Profil</th>
                  <th>Status Profil</th>
                  <th>Nama</th>
                  <th>Jantina</th>
                  <th>Hubungan Jenayah</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['id_fir']; ?></td>
                  <td><?php echo $row1['id_profil']; ?></td>
                  <td><?php echo $row1['status']; ?></td>
                  <td><?php echo $row1['firstname']; ?><?php echo $row1['middlename']; ?><?php echo $row1['lastname']; ?></td>
                  <td><?php echo $row1['gender']; ?></td>
                  <td><?php echo $row1['relationship']; ?></td>
                  <td>
                    <?php

                    $sql2 = "SELECT * FROM [jim].[dbo].[profile] WHERE id_profil = '$row1[id_profil]'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);
                    $id4= $r2['id_fir'];

                    $sql2 = "SELECT * FROM [jim].[dbo].[admin] WHERE id_fir = '$id4'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);

                    $id3 = $r2['id'];
                    ?>
                      <center>
                        <div class="col-md-12">
                          <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                            <input type="hidden" name="id" value="<?php echo $id3; ?>">
                            <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                          </form>
                        </div>
                      </center>
                    </td>
                </tr>
<?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  <?php endif; ?> 
  <?php endif; ?> 

 <?php if ($_GET['search_by'] == "Kad Pengenalan" || $_GET['search_by'] == "Lain-lain") : ?>
<?php 

include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[ic] WHERE id_fir LIKE '%$_GET[keyword]%'
                                            OR id_profil LIKE '%$_GET[keyword]%'
                                            OR nom LIKE '%$_GET[keyword]%'
                                            OR status LIKE '%$_GET[keyword]%'
                                            OR cardtype LIKE '%$_GET[keyword]%'
                                            OR firstname LIKE '%$_GET[keyword]%'
                                            OR add1 LIKE '%$_GET[keyword]%'
                                            OR add2 LIKE '%$_GET[keyword]%'
                                            OR add3 LIKE '%$_GET[keyword]%'
                                            OR poscode LIKE '%$_GET[keyword]%'
                                            OR city LIKE '%$_GET[keyword]%'
                                            OR state LIKE '%$_GET[keyword]%'
                                            OR country LIKE '%$_GET[keyword]%'
                                            OR state_kes LIKE '%$_GET[keyword]%'";
$stmt1 = sqlsrv_query ($conn , $sql, $params, $options );

if (sqlsrv_num_rows($stmt1) > 0):
?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
              <h3 class="box-title">Senarai Kad Pengenalan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example9" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Id.Profil</th>
                  <th>No.KP</th>
                  <th>Status</th>
                  <th>Jenis Kad</th>
                  <th>Nama</th>
                  <th>Alamat 1</th>
                  <th>Alamat 2</th>
                  <th>Alamat 3</th>
                  <th>Poskod</th>
                  <th>Bandar</th>
                  <th>Negeri</th>
                  <th>Negara</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['id_profil']; ?></td>
                  <td><?php echo $row1['nom']; ?></td>
                  <td><?php echo $row1['status']; ?></td>
                  <td><?php echo $row1['cardtype']; ?></td>
                  <td><?php echo $row1['firstname']; ?></td>
                  <td><?php echo $row1['add1']; ?></td>
                  <td><?php echo $row1['add2']; ?></td>
                  <td><?php echo $row1['add3']; ?></td>
                  <td><?php echo $row1['poscode']; ?></td>
                  <td><?php echo $row1['city']; ?></td>
                  <td><?php echo $row1['state']; ?></td>
                  <td><?php echo $row1['country']; ?></td>
                  <td>
                    <?php

                    $sql2 = "SELECT * FROM [jim].[dbo].[profile] WHERE id_profil = '$row1[id_profil]'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);
                    $id4= $r2['id_fir'];

                    $sql2 = "SELECT * FROM [jim].[dbo].[admin] WHERE id_fir = '$id4'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);

                    $id3 = $r2['id'];
                    ?>
                      <center>
                        <div class="col-md-12">
                          <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                            <input type="hidden" name="id" value="<?php echo $id3; ?>">
                            <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                          </form>
                        </div>
                      </center>
                    </td>
                </tr>
<?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  <?php endif; ?> 
  <?php endif; ?> 

 <?php if ($_GET['search_by'] == "Fizikal" || $_GET['search_by'] == "Lain-lain") : ?>
<?php

include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[physical] WHERE
 id_profil LIKE '%$_GET[keyword]%'
OR height LIKE '%$_GET[keyword]%' 
OR weight LIKE '%$_GET[keyword]%' 
OR eyecolor LIKE '%$_GET[keyword]%' 
OR haircolor LIKE '%$_GET[keyword]%' 
OR scar LIKE '%$_GET[keyword]%' 
OR build LIKE '%$_GET[keyword]%' 
OR hairlength LIKE '%$_GET[keyword]%' 
OR tattoos LIKE '%$_GET[keyword]%' 
OR blood LIKE '%$_GET[keyword]%' 
OR note LIKE '%$_GET[keyword]%'";
$stmt1 = sqlsrv_query ($conn , $sql, $params, $options );

if (sqlsrv_num_rows($stmt1) > 0):
?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
              <h3 class="box-title">Senarai Fizikal</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example10" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Nama</th>
                  <th>Tinggi</th>
                  <th>Berat</th>
                  <th>Warna Mata</th>
                  <th>Warna Rambut</th>
                  <th>Parut</th>
                  <th>Bentuk Badan</th>
                  <th>Panjang Rambut</th>
                  <th>Tato</th>
                  <th>Darah</th>
                  <th>Catatan</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td>
                    <?php
                      $sql2 = "SELECT * FROM [jim].[dbo].[profile] WHERE id_profil = '$row1[id_profil]'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);
                    echo  $r2['firstname'];
                    ?>
                  </td>
                  <td><?php echo $row1['height']; ?></td>
                  <td><?php echo $row1['weight']; ?></td>
                  <td><?php echo $row1['eyecolor']; ?></td>
                  <td><?php echo $row1['haircolor']; ?></td>
                  <td><?php echo $row1['scar']; ?></td>
                  <td><?php echo $row1['build']; ?></td>
                  <td><?php echo $row1['hairlength']; ?></td>
                  <td><?php echo $row1['tattoos']; ?></td>
                  <td><?php echo $row1['blood']; ?></td>
                  <td><?php echo $row1['note']; ?></td>
                  <td>
                    <?php

                    $sql2 = "SELECT * FROM [jim].[dbo].[profile] WHERE id_profil = '$row1[id_profil]'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);
                    $id4= $r2['id_fir'];

                    $sql2 = "SELECT * FROM [jim].[dbo].[admin] WHERE id_fir = '$id4'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);

                    $id3 = $r2['id'];
                    ?>
                      <center>
                        <div class="col-md-12">
                          <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                            <input type="hidden" name="id" value="<?php echo $id3; ?>">
                            <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                          </form>
                        </div>
                      </center>
                    </td>
                </tr>
<?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  <?php endif; ?> 
  <?php endif; ?> 

   <?php if ($_GET['search_by'] == "Rumah" || $_GET['search_by'] == "Lain-lain") : ?>
<?php

include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[house] where 
id_profil LIKE '%$_GET[keyword]%'
OR hse_type LIKE '%$_GET[keyword]%'
OR hse_stat LIKE '%$_GET[keyword]%'
OR month_rent LIKE '%$_GET[keyword]%'
OR rent_since LIKE '%$_GET[keyword]%'
OR hse_col LIKE '%$_GET[keyword]%'
OR owner LIKE '%$_GET[keyword]%'
OR id_regis LIKE '%$_GET[keyword]%'
OR notas LIKE '%$_GET[keyword]%'";

$stmt1 = sqlsrv_query ($conn , $sql, $params, $options );

if (sqlsrv_num_rows($stmt1) > 0):
?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
              <h3 class="box-title">Senarai Rumah</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>ID Profil</th>
                  <th>Jenis Rumah</th>
                  <th>Status</th>
                  <th>Warna</th>
                  <th>ID Pendaftaran</th>
                  <th>Pemilik</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['id_profil']; ?></td>
                  <td><?php echo $row1['hse_type']; ?></td>
                  <td><?php echo $row1['hse_stat']; ?></td>
                  <td><?php echo $row1['hse_col']; ?></td>
                  <td><?php echo $row1['id_regis']; ?></td>
                  <td><?php echo $row1['owner']; ?></td>
                  <td>
                    <?php

                    $sql2 = "SELECT * FROM [jim].[dbo].[profile] WHERE id_profil = '$row1[id_profil]'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);
                    $id4= $r2['id_fir'];

                    $sql2 = "SELECT * FROM [jim].[dbo].[admin] WHERE id_fir = '$id4'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);

                    $id3 = $r2['id'];
                    ?>
                      <center>
                        <div class="col-md-12">
                          <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                            <input type="hidden" name="id" value="<?php echo $id3; ?>">
                            <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                          </form>
                        </div>
                      </center>
                    </td>
                </tr>
<?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  <?php endif; ?>            
  <?php endif; ?>            


 <?php if ($_GET['search_by'] == "Media Sosial" || $_GET['search_by'] == "Lain-lain") : ?>
<?php

include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[msocial] WHERE 
id_profil LIKE '%$_GET[keyword]%'
OR sm_type LIKE '%$_GET[keyword]%'
OR sm_fname LIKE '%$_GET[keyword]%'
OR sm_name LIKE '%$_GET[keyword]%'
OR sm_url LIKE '%$_GET[keyword]%'
OR sm_id LIKE '%$_GET[keyword]%'";
$stmt1 = sqlsrv_query ($conn , $sql, $params, $options );

if (sqlsrv_num_rows($stmt1) > 0):
?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
              <h3 class="box-title">Senarai Media Sosial</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Id.Profil</th>
                  <th>ID</th>
                  <th>Jenis</th>
                  <th>Nama Penuh</th>
                  <th>Nama Pengguna</th>
                  <th>URL</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['id_profil']; ?></td>
                  <td><?php echo $row1['sm_id']; ?></td>
                  <td><?php echo $row1['sm_type']; ?></td>
                  <td><?php echo $row1['sm_fname']; ?></td>
                  <td><?php echo $row1['sm_name']; ?></td>
                  <td><?php echo $row1['sm_url']; ?></td>
                  <td>
                    <?php

                    $sql2 = "SELECT * FROM [jim].[dbo].[profile] WHERE id_profil = '$row1[id_profil]'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);
                    $id4= $r2['id_fir'];

                    $sql2 = "SELECT * FROM [jim].[dbo].[admin] WHERE id_fir = '$id4'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);

                    $id3 = $r2['id'];
                    ?>
                      <center>
                        <div class="col-md-12">
                          <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                            <input type="hidden" name="id" value="<?php echo $id3; ?>">
                            <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                          </form>
                        </div>
                      </center>
                    </td>
                </tr>
<?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  <?php endif; ?>
  <?php endif; ?>

 <?php if ($_GET['search_by'] == "Nombor Telefon" || $_GET['search_by'] == "Lain-lain") : ?>
<?php 

include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[mobileno] WHERE 
id_profil LIKE '%$_GET[keyword]%'
OR nom LIKE '%$_GET[keyword]%'
OR service LIKE '%$_GET[keyword]%'
OR registdate LIKE '%$_GET[keyword]%'
OR status LIKE '%$_GET[keyword]%'
OR terminatedate LIKE '%$_GET[keyword]%'
OR tower LIKE '%$_GET[keyword]%'
OR record LIKE '%$_GET[keyword]%'";
$stmt1 = sqlsrv_query ($conn , $sql, $params, $options );

if (sqlsrv_num_rows($stmt1) > 0):
?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
              <h3 class="box-title">Senarai Nombor Telefon</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example3" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Nama</th>
                  <th>No.Tel</th>
                  <th>Servis</th>
                  <th>Tarikh Daftar</th>
                  <th>Tarikh Tamat</th>
                  <th>Status</th>
                  <th>Menara</th>
                  <th>Rekod</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td>
                    <?php
                      $sql2 = "SELECT * FROM [jim].[dbo].[profile] WHERE id_profil = '$row1[id_profil]'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);
                    echo  $r2['firstname'];
                    ?>
                  </td>
                  <td><?php echo $row1['nom']; ?></td>
                  <td><?php echo $row1['service']; ?></td>
                  <td><?php echo $row1['registdate']; ?></td>
                  <td><?php echo $row1['terminatedate']; ?></td>
                  <td><?php echo $row1['status']; ?></td>
                  <td><?php echo $row1['tower']; ?></td>
                  <td><?php echo $row1['record']; ?></td>
                  <td>
                    <?php

                    $sql2 = "SELECT * FROM [jim].[dbo].[profile] WHERE id_profil = '$row1[id_profil]'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);
                    $id4= $r2['id_fir'];

                    $sql2 = "SELECT * FROM [jim].[dbo].[admin] WHERE id_fir = '$id4'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);

                    $id3 = $r2['id'];
                    ?>
                      <center>
                        <div class="col-md-12">
                          <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                            <input type="hidden" name="id" value="<?php echo $id3; ?>">
                            <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                          </form>
                        </div>
                      </center>
                    </td>
                </tr>
<?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  <?php endif; ?> 
  <?php endif; ?> 

 <?php if ($_GET['search_by'] == "Syarikat" || $_GET['search_by'] == "Lain-lain") : ?>
<?php 

include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[com_pany]
 WHERE 
mili_s LIKE '%$_GET[keyword]%' OR
c_name LIKE '%$_GET[keyword]%' OR
no_c LIKE '%$_GET[keyword]%' OR
sek LIKE '%$_GET[keyword]%' OR
ala LIKE '%$_GET[keyword]%' OR
tel LIKE '%$_GET[keyword]%' OR
fax LIKE '%$_GET[keyword]%' OR
email LIKE '%$_GET[keyword]%' OR
web LIKE '%$_GET[keyword]%' OR
note LIKE '%$_GET[keyword]%'";
$stmt1 = sqlsrv_query ($conn , $sql, $params, $options );

if (sqlsrv_num_rows($stmt1) > 0):
?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
              <h3 class="box-title">Senarai Syarikat</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example4" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Nama</th>
                  <th>Milikan</th>
                  <th>Nama Syarikat</th>
                  <th>No.Pendaftaran</th>
                  <th>Sektor</th>
                  <th>Alamat</th>
                  <th>No.Tel</th>
                  <th>Fax</th>
                  <th>Email</th>
                  <th>Laman Sesawang</th>
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
                  <td>
                    <?php
                      $sql2 = "SELECT * FROM [jim].[dbo].[profile] WHERE id_profil = '$row1[id_profil]'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);
                    echo  $r2['firstname'];
                    ?>
                  </td>
                  <td><?php echo $row1['mili_s']; ?></td>
                  <td><?php echo $row1['c_name']; ?></td>
                  <td><?php echo $row1['no_c']; ?></td>
                  <td><?php echo $row1['sek']; ?></td>
                  <td><?php echo $row1['ala']; ?></td>
                  <td><?php echo $row1['tel']; ?></td>
                  <td><?php echo $row1['fax']; ?></td>
                  <td><?php echo $row1['email']; ?></td>
                  <td><?php echo $row1['web']; ?></td>
                  <td>
                    <?php

                    $sql2 = "SELECT * FROM [jim].[dbo].[profile] WHERE id_profil = '$row1[id_profil]'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);
                    $id4= $r2['id_fir'];

                    $sql2 = "SELECT * FROM [jim].[dbo].[admin] WHERE id_fir = '$id4'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);

                    $id3 = $r2['id'];
                    ?>
                      <center>
                        <div class="col-md-12">
                          <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                            <input type="hidden" name="id" value="<?php echo $id3; ?>">
                            <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                          </form>
                        </div>
                      </center>
                    </td>
                </tr>
<?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  <?php endif; ?>
  <?php endif; ?>

 <?php if ($_GET['search_by'] == "Bank" || $_GET['search_by'] == "Lain-lain") : ?>
<?php 

include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[bank_link] WHERE
n_bank LIKE '%$_GET[keyword]%' OR
p_aka LIKE '%$_GET[keyword]%' OR
j_aka LIKE '%$_GET[keyword]%' OR
l_aka LIKE '%$_GET[keyword]%' OR
n_aka LIKE '%$_GET[keyword]%' OR
b_aka LIKE '%$_GET[keyword]%' OR
a_bank LIKE '%$_GET[keyword]%' OR
note LIKE '%$_GET[keyword]%'";
$stmt1 = sqlsrv_query ($conn , $sql, $params, $options );

if (sqlsrv_num_rows($stmt1) > 0):
?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
              <h3 class="box-title">Senarai Bank</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example5" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <!--<th>ID Profil</th>-->
                  <th>Bank</th>
                  <th>No Akaun</th>
                  <th>Pemegang Akaun</th>
                  <th>Jenis Akaun</th>
                  <th>Baki Semasa</th>
                  <th>Lokasi Akaun</th>
                  <th>Alamat Bank</th>
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
              <!--<td><?php// echo $row1['id_profil']; ?></td>-->
                  <td><?php echo $row1['n_bank']; ?></td>
                  <td><?php echo $row1['n_aka']; ?></td>
                  <td><?php echo $row1['p_aka']; ?></td>
                  <td><?php echo $row1['j_aka']; ?></td>
                  <td><?php echo $row1['b_aka']; ?></td>
                  <td><?php echo $row1['l_aka']; ?></td>
                  <td><?php echo $row1['a_bank']; ?></td>
                  <td>
                      <center>
                        <div class="col-md-12">
                          <form method="post" action="trans.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                            <input type="hidden" name="n_aka" value="<?php echo $row1['n_aka']; ?>">
                            <button type="submit" class="btn btn-primary btn-xs" title="Papar Transaksi" name="papar_tran"><span class="fa fa-mail-forward"></span></button>
                          </form>
                        </div>
                      </center>
                    </td>
                </tr>
<?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  <?php endif; ?>
  <?php endif; ?>

 <?php if ($_GET['search_by'] == "Pengangkutan" || $_GET['search_by'] == "Lain-lain") : ?>
<?php 

include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[transportation] WHERE 
id_profil LIKE '%$_GET[keyword]%'
OR registno LIKE '%$_GET[keyword]%'
OR status LIKE '%$_GET[keyword]%'
OR type LIKE '%$_GET[keyword]%'
OR maker LIKE '%$_GET[keyword]%'
OR model LIKE '%$_GET[keyword]%'
OR color LIKE '%$_GET[keyword]%'
OR year LIKE '%$_GET[keyword]%'
OR registdate LIKE '%$_GET[keyword]%'";
$stmt1 = sqlsrv_query ($conn , $sql, $params, $options );

if (sqlsrv_num_rows($stmt1) > 0):
?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
              <h3 class="box-title">Senarai Pengangkutan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example19" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Nama</th>
                  <th>No.Pendaftaran</th>
                  <th>Status</th>
                  <th>Jenis</th>
                  <th>Jenama</th>
                  <th>Model</th>
                  <th>Warna</th>
                  <th>Tahun Dibuat</th>
                  <th>Tarikh Daftar</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td>
                    <?php
                      $sql2 = "SELECT * FROM [jim].[dbo].[profile] WHERE id_profil = '$row1[id_profil]'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);
                    echo  $r2['firstname'];
                    ?>
                  </td>
                  <td><?php echo $row1['registno']; ?></td>
                  <td><?php echo $row1['status']; ?></td>
                  <td><?php echo $row1['type']; ?></td>
                  <td><?php echo $row1['maker']; ?></td>
                  <td><?php echo $row1['model']; ?></td>
                  <td><?php echo $row1['color']; ?></td>
                  <td><?php echo $row1['year']; ?></td>
                  <td><?php echo $row1['registdate']; ?></td>
                  <td>
                    <?php

                    $sql2 = "SELECT * FROM [jim].[dbo].[profile] WHERE id_profil = '$row1[id_profil]'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);
                    $id4= $r2['id_fir'];

                    $sql2 = "SELECT * FROM [jim].[dbo].[admin] WHERE id_fir = '$id4'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);

                    $id3 = $r2['id'];
                    ?>
                      <center>
                        <div class="col-md-12">
                          <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                            <input type="hidden" name="id" value="<?php echo $id3; ?>">
                            <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                          </form>
                        </div>
                      </center>
                    </td>
                </tr>
<?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  <?php endif; ?> 
  <?php endif; ?> 


 <?php if ($_GET['search_by'] == "Lesen Memandu" || $_GET['search_by'] == "Lain-lain") : ?>
<?php 


include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[drivelicense]WHERE 
id_profil LIKE '%$_GET[keyword]%'
OR serialno LIKE '%$_GET[keyword]%'
OR status LIKE '%$_GET[keyword]%'
OR class LIKE '%$_GET[keyword]%'
OR firstname LIKE '%$_GET[keyword]%'
OR middlename LIKE '%$_GET[keyword]%'
OR lastname LIKE '%$_GET[keyword]%'
OR nationality LIKE '%$_GET[keyword]%'
OR startdate LIKE '%$_GET[keyword]%'
OR expireddate LIKE '%$_GET[keyword]%'
OR placeissue LIKE '%$_GET[keyword]%'
OR country LIKE '%$_GET[keyword]%'";
$stmt1 = sqlsrv_query ($conn , $sql, $params, $options );

if (sqlsrv_num_rows($stmt1) > 0):
?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
              <h3 class="box-title">Senarai Lesen Memandu</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example7" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Id.Profil</th>
                  <th>Siri</th>
                  <th>Status</th>
                  <th>klas</th>
                  <th>Nama</th>
                  <th>Warganegara</th>
                  <th>Tarikh Daftar</th>
                  <th>Tarikh Tamat</th>
                  <th>Tempat Daftar</th>
                  <th>Negara</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['id_profil']; ?></td>
                  <td><?php echo $row1['serialno']; ?></td>
                  <td><?php echo $row1['status']; ?></td>
                  <td><?php echo $row1['class']; ?></td>
                  <td><?php echo $row1['firstname']; ?></td>
                  <td><?php echo $row1['nationality']; ?></td>
                  <td><?php echo $row1['startdate']; ?></td>
                  <td><?php echo $row1['expireddate']; ?></td>
                  <td><?php echo $row1['placeissue']; ?></td>
                  <td><?php echo $row1['country']; ?></td>
                  <td>
                    <?php

                    $sql2 = "SELECT * FROM [jim].[dbo].[profile] WHERE id_profil = '$row1[id_profil]'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);
                    $id4= $r2['id_fir'];

                    $sql2 = "SELECT * FROM [jim].[dbo].[admin] WHERE id_fir = '$id4'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);

                    $id3 = $r2['id'];
                    ?>
                      <center>
                        <div class="col-md-12">
                          <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                            <input type="hidden" name="id" value="<?php echo $id3; ?>">
                            <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                          </form>
                        </div>
                      </center>
                    </td>
                </tr>
<?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  <?php endif; ?> 
  <?php endif; ?> 

 <?php if ($_GET['search_by'] == "Pasport" || $_GET['search_by'] == "Lain-lain") : ?>
<?php 

include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[passport] WHERE 
id_profil LIKE '%$_GET[keyword]%'
OR nomnew LIKE '%$_GET[keyword]%'
OR type LIKE '%$_GET[keyword]%'
OR firstname LIKE '%$_GET[keyword]%'
OR countrycode LIKE '%$_GET[keyword]%'
OR gender LIKE '%$_GET[keyword]%'
OR age LIKE '%$_GET[keyword]%'
OR nationality LIKE '%$_GET[keyword]%'
OR dateissue LIKE '%$_GET[keyword]%'
OR dateexpired LIKE '%$_GET[keyword]%'
OR issueplace LIKE '%$_GET[keyword]%'
OR issuecountry LIKE '%$_GET[keyword]%'";
$stmt1 = sqlsrv_query ($conn , $sql, $params, $options );

if (sqlsrv_num_rows($stmt1) > 0):
?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
              <h3 class="box-title">Senarai Pasport</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example8" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Id.Profil</th>
                  <th>Passport</th>
                  <th>Nama</th>
                  <th>Jenis</th>
                  <th>Kod Negara</th>
                  <th>Jantina</th>
                  <th>Umur</th>
                  <th>Warganegara</th>
                  <th>Tatikh Daftar</th>
                  <th>Tarikh Tamat</th>
                  <th>Tempat Daftar</th>
                  <th>Negara</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['id_profil']; ?></td>
                  <td><?php echo $row1['nomnew']; ?></td>
                  <td><?php echo $row1['firstname']; ?></td>
                  <td><?php echo $row1['type']; ?></td>
                  <td><?php echo $row1['countrycode']; ?></td>
                  <td><?php echo $row1['gender']; ?></td>
                  <td><?php echo $row1['age']; ?></td>
                  <td><?php echo $row1['nationality']; ?></td>
                  <td><?php echo $row1['dateissue']; ?></td>
                  <td><?php echo $row1['dateexpired']; ?></td>
                  <td><?php echo $row1['issueplace']; ?></td>
                  <td><?php echo $row1['issuecountry']; ?></td>
                  <td>
                    <?php

                    $sql2 = "SELECT * FROM [jim].[dbo].[profile] WHERE id_profil = '$row1[id_profil]'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);
                    $id4= $r2['id_fir'];

                    $sql2 = "SELECT * FROM [jim].[dbo].[admin] WHERE id_fir = '$id4'";
                    $stmt2 = sqlsrv_query ($conn , $sql2);
                    $r2 = sqlsrv_fetch_array($stmt2);

                    $id3 = $r2['id'];
                    ?>
                      <center>
                        <div class="col-md-12">
                          <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                            <input type="hidden" name="id" value="<?php echo $id3; ?>">
                            <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                          </form>
                        </div>
                      </center>
                    </td>
                </tr>
<?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  <?php endif; ?> 
  <?php endif; ?> 

   <?php if ($_GET['search_by'] == "Transaksi" || $_GET['search_by'] == "Lain-lain") : ?>
<?php 

include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[transaction]
WHERE 
   [rep_ins] LIKE '%$_GET[keyword]%'
OR [company] LIKE '%$_GET[keyword]%'
OR [rep_type] LIKE '%$_GET[keyword]%'
OR [name] LIKE '%$_GET[keyword]%'
OR [n_ic] LIKE '%$_GET[keyword]%'
OR [o_ic] LIKE '%$_GET[keyword]%'
OR [bis_no] LIKE '%$_GET[keyword]%'
OR [acc_no] LIKE '%$_GET[keyword]%'
OR [acc_ty] LIKE '%$_GET[keyword]%'
OR [trans] LIKE '%$_GET[keyword]%'
OR [trans_date_from] LIKE '%$_GET[keyword]%'
OR [trans_date_to] LIKE '%$_GET[keyword]%'
OR [myr] LIKE '%$_GET[keyword]%'
OR [trans_state] LIKE '%$_GET[keyword]%'
OR [transa_ac] LIKE '%$_GET[keyword]%'
OR [time_trans] LIKE '%$_GET[keyword]%'";
$stmt1 = sqlsrv_query ($conn , $sql, $params, $options );

if (sqlsrv_num_rows($stmt1) > 0):
?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
              <h3 class="box-title">Senarai Transaksi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example13" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Name</th>
                  <th>Company</th>
                  <th>Ic</th>
                  <th>Business No</th>
                  <th>Account no</th>
                  <th>Transaction type</th>
                  <th>Start Date<!--<a target="_blank" onclick="window.open('date_chart.php','','width=1200,height=500');" data-toggle="tooltip" title="Papar Chart"><span class="fa fa-bar-chart"></span></a>--></th>
                  <th>End Date</th>
                  <th>Time</th>
                  <th>Amount(MYR)<a target="_blank" onclick="window.open('myr_chart.php','','width=1200,height=500');" data-toggle="tooltip" title="Papar Chart" class="btn btn-primary btn-xs"><span class="fa fa-bar-chart"></span></a></th>
                </tr>
                </thead>
<?php 

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td>
                    <?php
                    $sql = "SELECT * FROM [jim].[dbo].[profile] WHERE firstname = '$row1[name]'";
                    $stmt = sqlsrv_query ($conn , $sql);
                    $r = sqlsrv_fetch_array($stmt);
                    $id_profil= $r['id_profil']; 
                    ?>
                    <form method="post" action="id_profil.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                      <input type="hidden" name="id_profil" value="<?php echo $id_profil; ?>">
                      <button type="submit" name="prfil" class="btn-link"><?php echo $row1['name']; ?></button>
                    </form>
                  </td>
                  <td>
                    <form method="post" action="id_profil.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                      <input type="hidden" name="bis_no" value="<?php echo $row1['company']; ?>">
                      <button type="submit" name="id_com" class="btn-link"><?php echo $row1['company']; ?></button>
                    </form>
                  </td>
                  <td><?php echo $row1['n_ic']; ?></td>
                  <td><?php echo $row1['bis_no']; ?></td>
                  <td><?php echo $row1['acc_no']; ?></td>
                  <td><?php echo $row1['trans']; ?></td>
                  <td><?php echo $row1['trans_date_from']->format('d-m-y'); ?></td>
                  <td><?php echo $row1['trans_date_to']; ?></td>
                  <td><?php echo $row1['time_trans']; ?></td>
                  <td>MYR <?php echo number_format($row1['myr']); ?></td>
                </tr>
<?php } ?>
              </table>
            </div>
        </div>
      </div>
    </section>
  <?php endif; ?>   
  <?php endif; ?>   

     <?php if ($_GET['search_by'] == "iv" || $_GET['search_by'] == "Lain-lain") : ?>
<?php 

include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[INVEST]
        WHERE
             [cont_date] LIKE '%$_GET[keyword]%'
          OR [buy_sell] LIKE '%$_GET[keyword]%'
          OR [stock_name] LIKE '%$_GET[keyword]%'
          OR [stock_code] LIKE '%$_GET[keyword]%'
          OR [cont_no_tax_no] LIKE '%$_GET[keyword]%'
          OR [quan] LIKE '%$_GET[keyword]%'
          OR [price] LIKE '%$_GET[keyword]%'
          OR [g_amount] LIKE '%$_GET[keyword]%'
          OR [brokerage] LIKE '%$_GET[keyword]%'
          OR [brokerage_amout] LIKE '%$_GET[keyword]%'
          OR [cont_stamp] LIKE '%$_GET[keyword]%'
          OR [clearing_fee] LIKE '%$_GET[keyword]%'
          OR [tt_fee] LIKE '%$_GET[keyword]%'
          OR [deli_bas] LIKE '%$_GET[keyword]%'
          OR [traded_curr] LIKE '%$_GET[keyword]%'
          OR [n_amount] LIKE '%$_GET[keyword]%'
          OR [transac_no] LIKE '%$_GET[keyword]%'
          OR [delivery_date] LIKE '%$_GET[keyword]%'
          OR [payment_date] LIKE '%$_GET[keyword]%'
          OR [maturity_date] LIKE '%$_GET[keyword]%'
          OR [exempted_date] LIKE '%$_GET[keyword]%'
          OR [lodgement_date] LIKE '%$_GET[keyword]%'";
$stmt1 = sqlsrv_query ($conn , $sql, $params, $options );

if (sqlsrv_num_rows($stmt1) > 0):
  ?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
              <h3 class="box-title">Senarai Investment</h3>
            </div>
            <div class="box-body">
              
              <table id="example14" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>
                    <form method="post" action="chart_invest.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">Tarikh Contrak
                      <button type="submit" class="btn btn-primary btn-xs"name="date_invest"><span class="fa fa-bar-chart"></span></button>
                    </form>
                  </th>
                  <th>Jual/Beli</th>
                  <th>Nama Stok</th>
                  <th>Kod Stok</th>
                  <th>No Contrak</th>
                  <th>Unit</th>
                  <th>Harga</th>
                  <th>Jumlah Kasar</th>
                  <th>Kadar Broker(%)</th>
                  <th>Jumlah Dagangan(RM)</th>
                  <th>Setem Kontrak (RM)</th>
                  <th>Yuran Pembersihan (RM)</th>
                  <th>Jumlah Kos Pembersihan (RM)</th>
                  <th>Asas Penghantaran</th>
                  <th>Mata wang</th>
                  <th>Jumlah Bersih (RM)</th>
                  <th>No Traksaksi</th>
                  <th>Tarkh Penghantaran</th>
                  <th>Tarikh Pembayaran</th>
                  <th>Tarikh matang</th>
                  <th>Tarikh Dikecualikan</th>
                  <th>Tarikh Lodgement</th>
                 </tr>
                </thead>
<?php 

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1)){
?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo $row1['cont_date']; ?></td>
                  <td><?php echo $row1['buy_sell']; ?></td>
                  <td><?php echo $row1['stock_name']; ?></td>
                  <td><?php echo $row1['stock_code']; ?></td>
                  <td><?php echo $row1['cont_no_tax_no']; ?></td>
                  <td><?php echo $row1['quan']; ?></td>
                  <td><?php echo $row1['price']; ?></td>
                  <td><?php echo $row1['g_amount']; ?></td>
                  <td><?php echo $row1['brokerage']; ?></td>
                  <td><?php echo $row1['brokerage_amout']; ?></td>
                  <td><?php echo $row1['cont_stamp']; ?></td>
                  <td><?php echo $row1['clearing_fee']; ?></td>
                  <td><?php echo $row1['tt_fee']; ?></td>
                  <td><?php echo $row1['deli_bas']; ?></td>
                  <td><?php echo $row1['traded_curr']; ?></td>
                  <td><?php echo $row1['n_amount']; ?></td>
                  <td><?php echo $row1['transac_no']; ?></td>
                  <td><?php echo $row1['delivery_date']; ?></td>
                  <td><?php echo $row1['payment_date']; ?></td>
                  <td><?php echo $row1['maturity_date']; ?></td>
                  <td><?php echo $row1['exempted_date']; ?></td>
                  <td><?php echo $row1['lodgement_date']; ?></td>
                </tr>
<?php } ?>
              </table>
            </div>
        </div>
      </div>
    </section>
  <?php endif; ?> 
  <?php endif; ?> 

     <?php if ($_GET['search_by'] == "lg" || $_GET['search_by'] == "Lain-lain") : ?>
<?php 

include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[ledger]
        WHERE
               [date_lg] LIKE '%$_GET[keyword]%'
            OR [desc_lg] LIKE '%$_GET[keyword]%'
            OR [debit_lg] LIKE '%$_GET[keyword]%'
            OR [debit_desc_lg] LIKE '%$_GET[keyword]%'
            OR [credit_lg] LIKE '%$_GET[keyword]%'
            OR [balance_lg] LIKE '%$_GET[keyword]%'";
$stmt1 = sqlsrv_query ($conn , $sql, $params, $options );

if (sqlsrv_num_rows($stmt1) > 0):
?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
              <h3 class="box-title">Senarai Ledger</h3>
            </div>
            <div class="box-body">
              
              <table id="example15" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 1%">No</th>
                    <th>
                      <form method="post" action="chart_ledger.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">Tarikh
                        <button type="submit" class="btn btn-primary btn-xs"name="date_ledger"><span class="fa fa-bar-chart"></span></button>
                      </form>
                    </th>
                    <th>Deskripsi</th>
                    <th>Debit</th>
                    <th>Deskripsi</th>
                    <th>Credit</th>
                    <th>Baki</th>
                  </tr>
                </thead>
<?php 

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1)){
?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo $row1['date_lg']; ?></td>
                  <td><?php echo $row1['desc_lg']; ?></td>
                  <td><?php echo $row1['debit_lg']; ?></td>
                  <td><?php echo $row1['debit_desc_lg']; ?></td>
                  <td><?php echo $row1['credit_lg']; ?></td>
                  <td><?php echo $row1['balance_lg']; ?></td>
                </tr>
<?php } ?>
              </table>
            </div>
        </div>
      </div>
    </section>
  <?php endif; ?> 
  <?php endif; ?> 

     <?php if ($_GET['search_by'] == "fd" || $_GET['search_by'] == "Lain-lain") : ?>
<?php 

include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[fd_trans]
        WHERE
               [inv_amount] LIKE '%$_GET[keyword]%'
            OR [datefd] LIKE '%$_GET[keyword]%'
            OR [timefd] LIKE '%$_GET[keyword]%'
            OR [inv_period] LIKE '%$_GET[keyword]%'
            OR [dividen_rate] LIKE '%$_GET[keyword]%'
            OR [amount_mat] LIKE '%$_GET[keyword]%'
            OR [withdraw] LIKE '%$_GET[keyword]%'
            OR [balance] LIKE '%$_GET[keyword]%'";
$stmt1 = sqlsrv_query ($conn , $sql, $params, $options );

if (sqlsrv_num_rows($stmt1) > 0):
?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
              <h3 class="box-title">Senarai Fix Deposit</h3>
            </div>
            <div class="box-body">
              
              <table id="example16" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 1%">No</th>
                    <th>
                      <form method="post" action="chart_fd.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">Jumlah Pelaburan
                        <button type="submit" class="btn btn-primary btn-xs" name="myr_fd"><span class="fa fa-bar-chart"></span></button>
                      </form>
                    </th>
                    <th>
                      <form method="post" action="chart_fd.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">Tarikh
                        <button type="submit" class="btn btn-primary btn-xs" name="date_fd"><span class="fa fa-bar-chart"></span></button>
                      </form>
                    </th>
                    <th>Masa</th>
                    <th>Tempoh Pelaburan</th>
                    <th>Kadar Dividen</th>
                    <th>Jumlah Matang</th>
                    <th>Pengeluaran</th>
                    <th>Baki</th>
                  </tr>
                </thead>
<?php 

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1)){
?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo $row1['inv_amount']; ?></td>
                  <td><?php echo $row1['datefd']; ?></td>
                  <td><?php echo $row1['timefd']; ?></td>
                  <td><?php echo $row1['inv_period']; ?></td>
                  <td><?php echo $row1['dividen_rate']; ?></td>
                  <td><?php echo $row1['amount_mat']; ?></td>
                  <td><?php echo $row1['withdraw']; ?></td>
                  <td><?php echo $row1['balance']; ?></td>
                </tr>
<?php } ?>
              </table>
            </div>
        </div>
      </div>
    </section>
  <?php endif; ?> 
  <?php endif; ?><?php if($_GET['search_by']=="GST" || $_GET['search_by'] == "Lain-lain"){ 
    $sql = "SELECT COUNT(0) FROM [jim].[dbo].[gst]";
          $retval = sqlsrv_query( $conn,$sql);
          $c = sqlsrv_fetch_array( $retval, SQLSRV_FETCH_NUMERIC);

          if($c[0] > 0){
             ?>
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
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
          where company_no LIKE '%$_GET[keyword]%'
          OR acount_name LIKE '%$_GET[keyword]%'
          OR account_id LIKE '%$_GET[keyword]%'
          ORDER BY id ASC OFFSET $offset ROWS FETCH FIRST $rec_limit ROWS ONLY";

          $retval = sqlsrv_query( $conn,$sql);
          $counter = $offset + 1;
          $last = $page - 2;
          while($row1 = sqlsrv_fetch_array($retval)) {
          ?>
                          <tr>              
                            <td><?php echo $counter++; ?></td>
                            <td>
                              <form method="post" action="id_profil.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                                <input type="hidden" name="bis_no" value="<?php echo $row1['acount_name']; ?>">
                                <button type="submit" name="id_com" class="btn-link"><?php echo $row1['acount_name']; ?></button>
                              </form>
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
                            </div></div></section><?php } ?>
<?php //gst attribute ?>
<?php include('include/dbconn.php');
$id_profil = $_SESSION['id_profil'];

      $sql = "SELECT * FROM [dbo].[com_pany_gst_att] WHERE
      [com_pany_id] LIKE '%$_GET[keyword]%' ";
      $stmt1 = sqlsrv_query ($conn , $sql);

      if( $stmt1 ) {
      
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
                  <th>Tarokh Akuan Ditutup</th>
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
<?php } }?>
              </table>
              
              
            </div>
          </div>
<?php //tender list
$sql = "SELECT COUNT(0) FROM [jim].[dbo].[tender]";
            $retval = sqlsrv_query( $conn,$sql);
            $c = sqlsrv_fetch_array( $retval, SQLSRV_FETCH_NUMERIC);
            if($c[0] > 0){
             ?>
            
<section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
              <h3 class="box-title">Senarai Tender</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="example20" class="table table-striped table-border">
            <thead>
              <tr>
                <th style="width: 1%">No</th>
                <th width="50%">Tajuk Tender</th>
                <th>No Tender</th>
                <th>Kategori Perolehan</th>
                <th>Kementerian</th>
                <th>Agensi</th>
                <th>Nama Syarikat</th>
                <th>No Daftar Syarikat</th>
                <th>No MOF/PKK</th>
                <th>RM</th>
              </tr>
            </thead>
            <tbody>
            <?php

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
            $sql = "SELECT * FROM [jim].[dbo].[tender]
            where td_no LIKE '%$_GET[keyword]%'
                      OR td_type LIKE '%$_GET[keyword]%'
                      OR td_minister LIKE '%$_GET[keyword]%'
                      OR td_agency LIKE '%$_GET[keyword]%'
                      OR td_comp_name LIKE '%$_GET[keyword]%'
                      OR td_comp_no LIKE '%$_GET[keyword]%'
                      OR td_mof_no LIKE '%$_GET[keyword]%'
            ORDER BY id ASC OFFSET $offset ROWS FETCH FIRST $rec_limit ROWS ONLY";

            $retval = sqlsrv_query( $conn,$sql);
            $counter = $offset + 1;
            $last = $page - 2;
            while($row1 = sqlsrv_fetch_array($retval)) {
            ?>
            <tr>
            <td><?php echo $counter++; ?></td>
            <td><?php echo $row1['td_name']; ?></td>
            <td><?php echo $row1['td_no']; ?></td>
            <td><?php echo $row1['td_type']; ?></td>
            <td><?php echo $row1['td_minister']; ?></td>
            <td><?php echo $row1['td_agency']; ?></td>
            <td><?php echo $row1['td_comp_name']; ?></td>
            <td><?php echo $row1['td_comp_no']; ?></td>
            <td><?php echo $row1['td_mof_no']; ?></td>
            <td><?php echo $row1['td_price']; ?></td>
            </tr>
            <?php } ?>
            </tbody>
            </table>
</div>
</div>




  <?php
}
  ?> 
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
  
      </section>
    <?php } ?>
        <!-- footer content -->
        <?php include 'footer.php'; ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <?php include 'include/js.php'; ?>
  </body>
</html>