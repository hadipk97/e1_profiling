<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php include 'include/bar.php'; ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
<?php include 'include/dbconn.php';
$userk=$_COOKIE['id'];
$sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where userk = '$userk' AND status='BARU'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
   
}

while( $row01 = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
?>
              <a href="pendaftaran.php"><div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="background-color: #b370cf">
                  <div class="icon"><i class="glyphicon glyphicon-pencil" style="color: #ffffff"></i></div>
                  <div class="count" style="color: #ffffff"><?php echo $row01[0]; ?></div>
                  <h3 style="color: #ffffff">PENDAFTARAN</h3>
                  
                </div>
				  </div></a>
<?php } ?>

              <a href="diari.php"><div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="background-color: #e95e4f">
                  <div class="icon"><i class="fa fa-book" style="color: #ffffff"></i></div>
                  <div class="count">&ensp;</div>
                  <h3 style="color: #ffffff">DIARI</h3>
                  
                </div>
              </div>
            </a>

              <a href="carian.php"><div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="background-color: #36caab">
                  <div class="icon"><i class="fa fa-search" style="color: #ffffff"></i></div>
                  <div class="count">&ensp;</div>
                  <h3 style="color: #ffffff">CARIAN KES</h3>
                  
                </div>
				  </div></a>
              <a href="list_report.php"><div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="background-color: #49a9ea">
                  <div class="icon"><i class="fa fa-file-text" style="color: #ffffff"></i></div>
                  <div class="count">&ensp;</div>
                  <h3 style="color: #ffffff">LAPORAN KES</h3>
                  
                </div>
				  </div></a>
            </div>
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>SENARAI KES</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
<?php include 'include/dbconn.php';
$userk=$_COOKIE['id'];

$sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where userk = '$userk' AND status='BARU'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
   
}

while( $row01 = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
?>
<?php if($role == 1 || $role == 2 || $role == 4 ):?>
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">KES 
                          <?php 
                          $b = $row01[0];
                          if ($b == "0") {
                            # code...
                            echo "";
                          }
                          else {
                            echo "<label class='label label-success'>$b</label>";
                          }
                          ?>
                          </a>
                        </li>
<?php  endif; ?>
<?php } ?>
<?php include 'include/dbconn.php';
$userk=$_COOKIE['id'];

$sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where  user_siasatan = '$userk' AND (status='BENTUK PASUKAN' OR status='SIASATAN')";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
   
}

while( $row03 = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
?>
<?php if($role == 2  || $role == 4 ):?>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">TUGASAN
                        <?php 
                          $b = $row03[0];
                          if ($b == "0") {
                            # code...
                            echo "";
                          }
                          else {
                            echo "<label class='label label-danger'>$b</label>";
                          }
                          ?>
                          </a>
                        </li>
<?php  endif; ?>
<?php } ?>
<?php include 'include/dbconn.php';
$userk=$_COOKIE['id'];

$sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where status='SEMAKAN PENYELIA'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
   
}

while( $row04 = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
?>

<?php if($role == 5 ):?>
                        <li role="presentation" class="active"><a href="#tab_content4" role="tab" id="profile-tab4" data-toggle="tab" aria-expanded="false">KES BARU
                        <?php 
                          $b = $row04[0];
                          if ($b == "0") {
                            # code...
                            echo "";
                          }
                          else {
                            echo "<label class='label label-warning'>$b</label>";
                          }
                          ?>
                          </a>
                        </li>
<?php  endif; ?>
<?php } ?>

<?php include 'include/dbconn.php';
$userk=$_COOKIE['id'];

$sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where status='SEMAKAN SIASATAN'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
   
}

while( $row04 = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
?>

<?php if($role == 5 ):?>
                        <li role="presentation" class=""><a href="#semakan_siasatan" role="tab" id="profile-tab4" data-toggle="tab" aria-expanded="false">SEMAKAN
                        <?php 
                          $b = $row04[0];
                          if ($b == "0") {
                            # code...
                            echo "";
                          }
                          else {
                            echo "<label class='label label-warning'>$b</label>";
                          }
                          ?>
                          </a>
                        </li>
<?php  endif; ?>
<?php } ?>
<?php include 'include/dbconn.php';
$userk=$_COOKIE['id'];

$sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where status='SELESAI'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
   
}

while( $row05 = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
?>
<?php if($role == 5 ):?>
                        <li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab5" data-toggle="tab" aria-expanded="false">SELESAI <?php echo $year; ?>
                        <?php 
                          $b = $row05[0];
                          if ($b == "0") {
                            # code...
                            echo "";
                          }
                          else {
                            echo "<label class='label label-default'>$b</label>";
                          }
                          ?>
                          </a>
                        </li>
<?php  endif; ?>
<?php } ?>
<?php include 'include/dbconn.php';
$userk=$_COOKIE['id'];

$sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where status='SEMAKAN PENGARAH'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
   
}

while( $row05 = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
?>
<?php if($role == 3 ):?>
                        <li role="presentation" class="active"><a href="#kes_selesai" role="tab" id="profile-tab5" data-toggle="tab" aria-expanded="false">KES SELESAI
                        <?php 
                          $b = $row05[0];
                          if ($b == "0") {
                            # code...
                            echo "";
                          }
                          else {
                            echo "<label class='label label-default'>$b</label>";
                          }
                          ?>
                          </a>
                        </li>
<?php  endif; ?>
<?php } ?>
<?php if($role == 5 || $role == 3 ):?>
                        <li role="presentation" class=""><a href="#status" role="tab" id="profile-tab5" data-toggle="tab" aria-expanded="false">STATUS
                          </a>
                        </li>
<?php  endif; ?>
                      </ul>
                      <div id="myTabContent" class="tab-content">
<?php if($role == 1 || $role == 2  || $role == 4 ):?>
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
<?php 
include('include/dbconn.php');

$userk = $_COOKIE['id'];
                 
      $sql = "SELECT * FROM [jim].[dbo].[admin] WHERE userk = '$userk' AND status = 'BARU' ORDER BY id DESC";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
?>
                    <table id="example1" class="table table-striped table-border">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th style="width: 15%">Record ID (FIR)</th>
                          <th>Tarikh</th>
                          <th>Status Kes</th>
                          <th>Tajuk</th>
                          <th>Negeri</th>
                          <th>Catatan</th>
                          <th style="width: 13%"><center>Tindakan</center></th>
                        </tr>
                      </thead>
                      <tbody>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                        <tr>
                          <th><?php echo $counter++; ?></th>
                          <td><?php echo $row1['id_fir']; ?></td>
                          <td><?php echo $row1['date_regist']; ?></td>
                          <td><?php echo $row1['status']; ?></td>
                          <td><?php echo $row1['title']; ?></td>
                          <td><?php echo $row1['ngri']; ?></td>
                          <td><?php echo $row1['catatan_penyelia']; ?></td>
                          <td>
                            <center>
                              <div class="col-md-3">
                                <form method="post" action="view.php">
                            <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                            <button type="submit" class="btn btn-primary btn-xs" title="Kemaskini" name="kemaskini_fir"><span class="glyphicon glyphicon-pencil"></span></button>
                            </form>
                          </div>
                              <div class="col-md-3">
                            <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                            <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                            <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                            </form>
                          </div>
                              <div class="col-md-3">
                                <form method="post" action="delete.php">
                            <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                            <button type="submit" onclick="return confirm('Padam Data Ini ???');" class="btn btn-danger btn-xs" name="delete_fir" title="Padam"><span class="glyphicon glyphicon-trash"></span></button>
                            </form>
                          </div>
                              <div class="col-md-3">
                                <form method="post" action="sent.php">
                            <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                            <button type="submit" class="btn btn-success btn-xs" name="sent_fir" title="Hantar"><span class="glyphicon glyphicon-share-alt"></span></button>
                            </form>
                          </div>
                            </center>
                          </td>
                        </tr>
<?php } ?>
                      </tbody>
                    </table>
                        </div>
<?php endif ; ?>
<?php if($role == 2  || $role == 4 ):?>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
<?php 
include('include/dbconn.php');
                
$userk = $_COOKIE['id'];

$sql = "SELECT * FROM [jim].[dbo].[admin] WHERE user_siasatan = '$userk' AND (status = 'BENTUK PASUKAN' OR status = 'SIASATAN') ORDER BY id DESC";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                    <table id="example3"  class="table table-striped table-border">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th>Record ID (FIR)</th>
                          <th>Tarikh</th>
                          <th>Status Kes</th>
                          <th>Tajuk</th>
                          <th>Negeri</th>
                          <th>Catatan</th>
                          <th style="width: 12%"><center>Tindakan</center></th>
                        </tr>
                      </thead>
                      <tbody>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                        <tr>
                          <th><?php echo $counter++; ?></th>
                          <td><?php echo $row1['id_fir']; ?></td>
                          <td><?php echo $row1['date_regist']; ?></td>
                          <td><?php echo $row1['status']; ?></td>
                          <td><?php echo $row1['title']; ?></td>
                          <td><?php echo $row1['ngri']; ?></td>
                          <td><?php echo $row1['catatan_penyelia']; ?></td>
                          <td>
                            <center>
                              <?php if ($row1['status'] == "BENTUK PASUKAN"): ?>
                              <div class="col-md-6">
                                <form method="post" action="edit.php">
                            <input type="hidden" name="id_fir" value="<?php echo $row1['id_fir']; ?>">
                            <button type="submit" class="btn btn-info btn-xs" title="Bentuk Pasukan" name="bentuk_pasukan"><span class="fa fa-group"></span></button>
                            </form>
                          </div>
                        <?php endif;?>
                        <?php if ($row1['status'] == "SIASATAN"): ?>
                              <div class="col-md-4">
                                <form method="post" action="edit.php">
                            <input type="hidden" name="id_fir" value="<?php echo $row1['id_fir']; ?>">
                            <button type="submit" class="btn btn-primary btn-xs" title="Kemaskini" name="kemaskini_fir"><span class="glyphicon glyphicon-pencil"></span></button>
                            </form>
                          </div>
                        <?php endif;?>
                              <div class="col-md-4">
                            <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                            <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                            <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                            </form>
                          </div>
                        <?php if ($row1['status'] == "SIASATAN"): ?>
                              <div class="col-md-4">
                                <form method="post" action="sent.php">
                            <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">                            
                            <button type="submit" class="btn btn-success btn-xs" name="sent_fir_siasatan" title="Hantar"><span class="glyphicon glyphicon-share-alt"></span></button>
                            </form>
                          </div>
                        <?php endif ; ?>
                        </center>
                          </td>
                        </tr>
<?php } ?>
                      </tbody>
                    </table>
                        </div>
<?php endif ; ?>
<?php if($role == 5 ):?>

                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content4" aria-labelledby="profile-tab">
<?php 
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[admin] WHERE status = 'SEMAKAN PENYELIA' ORDER BY id DESC";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                    <table id="example4"  class="table table-striped table-border">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th>Record ID (FIR)</th>
                          <th>Tarikh</th>
                          <th>Status Kes</th>
                          <th>Tajuk</th>
                          <th>Negeri</th>
                          <th>Catatan</th>
                          <th style="width: 12%"><center>Tindakan</center></th>
                        </tr>
                      </thead>
                      <tbody>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                        <tr>
                          <th><?php echo $counter++; ?></th>
                          <td><?php echo $row1['id_fir']; ?></td>
                          <td><?php echo $row1['masa']->format('d/m/Y'); ?></td>
                          <td><?php echo $row1['status']; ?></td>
                          <td><?php echo $row1['title']; ?></td>
                          <td><?php echo $row1['ngri']; ?></td>
                          <td><?php echo $row1['catatan_penyelia']; ?></td>
                          <td>
                            <center>
                            <div class="col-md-4">
                            <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                            <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                            <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                            </form>
                          </div>
                            <?php 
                            $s = $row1['status'];
                            if ($s == "SEMAKAN SIASATAN") {
                              # code...
                              echo "
                              <div class='col-md-4'>
                            <button class='btn btn-info btn-xs' id_fir='$row1[id_fir]' data-toggle='modal' data-target='#reject_risik' title='Semakan Semula'><span class='fa fa-reply'></span></button>
                          </div>
                              <div class='col-md-4'>
                                <form method='post' action='sent.php'>
                            <input type='hidden' name='id' value='$row1[id]'>                            
                            <button type='submit' class='btn btn-success btn-xs' name='sent_fir_selesai' title='Hantar'><span class='glyphicon glyphicon-share-alt'></span></button>
                            </form>
                          </div>";
                            }
                            elseif ($s == "SEMAKAN PENYELIA"){
                              echo "
                              <div class='col-md-4'>
                            <button class='btn btn-info btn-xs' id_fir='$row1[id_fir]' data-toggle='modal' data-target='#reject_fir' title='Semakan Semula'><span class='fa fa-reply'></span></button>
                          </div>
                              <div class='col-md-4'>
                            <button class='btn btn-success btn-xs' id_fir='$row1[id_fir]' data-toggle='modal' data-target='#myModal' title='Hantar'><span class='glyphicon glyphicon-share-alt'></span></button>
                          </div>";
                            }
                            else {
                              echo "";
                            }
                            ?>
                          </center>
                          </td>
                        </tr>
<?php } ?>
                      </tbody>
                    </table>
                        </div>
<?php endif ; ?>
<?php if($role == 5 ):?>

                    <div role="tabpanel" class="tab-pane fade" id="semakan_siasatan" aria-labelledby="profile-tab">
<?php 
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[admin] WHERE status = 'SEMAKAN SIASATAN' ORDER BY id DESC";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                    <table id="example7"  class="table table-striped table-border">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th>Record ID (FIR)</th>
                          <th>Tarikh</th>
                          <th>Status Kes</th>
                          <th>Tajuk</th>
                          <th>Negeri</th>
                          <th>Catatan</th>
                          <th>Catatan Pengarah</th>
                          <th style="width: 12%"><center>Tindakan</center></th>
                        </tr>
                      </thead>
                      <tbody>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                        <tr>
                          <th><?php echo $counter++; ?></th>
                          <td><?php echo $row1['id_fir']; ?></td>
                          <td><?php echo $row1['masa']->format('d/m/Y'); ?></td>
                          <td><?php echo $row1['status']; ?></td>
                          <td><?php echo $row1['title']; ?></td>
                          <td><?php echo $row1['ngri']; ?></td>
                          <td><?php echo $row1['catatan_penyelia']; ?></td>
                          <td><?php echo $row1['catatan_pengarah']; ?></td>
                          <td>
                            <center>
                            <div class="col-md-4">
                            <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                            <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                            <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                            </form>
                          </div>
                            <?php 
                            $s = $row1['status'];
                            if ($s == "SEMAKAN SIASATAN") {
                              # code...
                              echo "
                              <div class='col-md-4'>
                            <button class='btn btn-info btn-xs' id_fir='$row1[id_fir]' data-toggle='modal' data-target='#reject_risik' title='Semakan Semula'><span class='fa fa-reply'></span></button>
                          </div>
                              <div class='col-md-4'>
                                <form method='post' action='sent.php'>
                            <input type='hidden' name='id' value='$row1[id]'>                            
                            <button type='submit' class='btn btn-success btn-xs' name='sent_fir_selesai' title='Kes Selesai'><span class='fa fa-check-square-o fa-40px'></span></button>
                            </form>
                          </div>";
                            }
                            elseif ($s == "SEMAKAN PENYELIA"){
                              echo "
                              <div class='col-md-4'>
                            <button class='btn btn-info btn-xs' id_fir='$row1[id_fir]' data-toggle='modal' data-target='#reject_fir' title='Semakan Semula'><span class='fa fa-reply'></span></button>
                          </div>
                              <div class='col-md-4'>
                            <button class='btn btn-success btn-xs' id_fir='$row1[id_fir]' data-toggle='modal' data-target='#myModal' title='Hantar'><span class='glyphicon glyphicon-share-alt'></span></button>
                          </div>";
                            }
                            else {
                              echo "";
                            }
                            ?>
                          </center>
                          </td>
                        </tr>
<?php } ?>
                      </tbody>
                    </table>
                        </div>
<?php endif ; ?>
<?php if($role == 5 ):?>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">
<?php 
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[admin] WHERE status = 'SELESAI' AND masa LIKE '%$year%' ORDER BY id DESC";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                    <table id="example5"  class="table table-striped table-border">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th>Record ID (FIR)</th>
                          <th>Tarikh</th>
                          <th>Status Kes</th>
                          <th>Tajuk</th>
                          <th>Negeri</th>
                          <th>Catatan</th>
                          <th style="width: 12%"><center>Tindakan</center></th>
                        </tr>
                      </thead>
                      <tbody>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                        <tr>
                          <th><?php echo $counter++; ?></th>
                          <td><?php echo $row1['id_fir']; ?></td>
                          <td><?php echo $row1['masa']->format('d/m/Y'); ?></td>
                          <td><?php echo $row1['status']; ?></td>
                          <td><?php echo $row1['title']; ?></td>
                          <td><?php echo $row1['ngri']; ?></td>
                          <td><?php echo $row1['catatan_penyelia']; ?></td>
                          <td>
                            <center>
                              <div class="col-md-6">
                                <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                                  <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                                  <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                                </form>
                              </div>
                              <div class="col-md-6">
                                <form method="post" action="edit.php">
                                  <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                                  <button type="submit" class="btn btn-success btn-xs" name="hantar_pengarah" title="Hantar" ><span class="fa fa-mail-forward"></span></button>
                                </form>
                              </div>
                            </center>
                          </td>
                        </tr>
<?php } ?>
                      </tbody>
                    </table>
                        </div>
<?php endif ; ?>
<?php if($role == 3 ):?>
                    <div role="tabpanel" class="tab-pane fade active in" id="kes_selesai" aria-labelledby="profile-tab">
<?php 
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[admin] WHERE status = 'SEMAKAN PENGARAH' ORDER BY id DESC";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                    <table id="example8"  class="table table-striped table-border">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th>Record ID (FIR)</th>
                          <th>Tarikh</th>
                          <th>Status Kes</th>
                          <th>Tajuk</th>
                          <th>Negeri</th>
                          <th>Catatan</th>
                          <th style="width: 12%"><center>Tindakan</center></th>
                        </tr>
                      </thead>
                      <tbody>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                        <tr>
                          <th><?php echo $counter++; ?></th>
                          <td><?php echo $row1['id_fir']; ?></td>
                          <td><?php echo $row1['masa']->format('d/m/Y'); ?></td>
                          <td><?php echo $row1['status']; ?></td>
                          <td><?php echo $row1['title']; ?></td>
                          <td><?php echo $row1['ngri']; ?></td>
                          <td><?php echo $row1['catatan_penyelia']; ?></td>
                          <td>
                            <center>
                              <div class="col-md-4">
                                <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                                  <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                                  <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                                </form>
                              </div>
                              <div class="col-md-4">
                                  <button type="button" class="btn btn-danger btn-xs" id="<?php echo $row1['id']; ?>" fir="<?php echo $row1['id_fir']; ?>" data-toggle="modal" data-target="#hantar_semula" title="Buka Semula" ><span class="fa fa-folder-open"></span></button>
                              </div>
                              <div class="col-md-4">
                                <form method="post" action="edit.php">
                                  <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                                  <button type="submit" class="btn btn-success btn-xs" name="tutup_Kes" title="Kes Tutup" ><span class="fa fa-mail-forward"></span></button>
                                </form>
                              </div>
                            </center>
                          </td>
                        </tr>
<?php } ?>
                      </tbody>
                    </table>
                        </div>
<?php endif ; ?>
<?php if($role == 5 || $role == 3 ):?>
                    <div role="tabpanel" class="tab-pane fade" id="status" aria-labelledby="profile-tab">
<?php 
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[admin] ORDER BY status DESC";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                    <table id="example6"  class="table table-striped table-border">
                      <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>FIR</th>
                  <th>Status Kes</th>
                  <th>Klasifikasi Utama</th>
                  <th>Klasifikasi Kecil</th>
                  <th>Status</th>
                  <th>Tempoh</th>
                  <th style="width: 10%">Tindakan</th>
                </tr>
                      </thead>
                      <tbody>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo $row1['id_fir']; ?></td>
                  <td><?php echo $row1['cs_status']; ?></td>
                  <td><?php echo $row1['major']; ?></td>
                  <td><?php echo $row1['minor']; ?></td>
                  <td>
                    <?php
                       $s = $row1['status']; 
                       if ($s == "BARU") {
                        echo "<label class='label label-primary'>BARU</label>";
                        }
                        elseif ($s == "SEMAKAN PENYELIA") {
                        echo "<label class='label label-info'>SEMAKAN PENYELIA</label>";
                        }
                        elseif ($s == "BENTUK PASUKAN") {
                        echo "<label class='label label-success'>BENTUK PASUKAN</label>";
                        }
                        elseif ($s == "SIASATAN") {
                        echo "<label class='label label-info'>SIASATAN</label>";
                        }
                        elseif ($s == "SEMAKAN SIASATAN") {
                        echo "<label class='label label-warning'>SEMAKAN SIASATAN</label>";
                        }
                        elseif ($s == "KES TUTUP") {
                        echo "<label class='label label-default'>KES TUTUP</label>";
                        }
                        elseif ($s == "SEMAKAN PENGARAH") {
                        echo "<label class='label label-default'>SEMAKAN PENGARAH</label>";
                        }
                        else {
                        echo "<label class='label label-danger'>KES SELESAI</label>";
                        }
                        ?>
                  </td>
                  <td>
                  <?php 
                  $m= $row1['masa']->format("Y-m-d");
                  $date1=date_create("$date");
                  $date2=date_create("$m");
                  $diff=date_diff($date1,$date2);
                  $dt = $diff->format("%a Hari"); 

                  if ($dt == "0 Hari") {
                    # code...
                    echo "1 Hari";
                  }
                  else {
                    echo "$dt";
                  }
                   ?>
                   </td>
                  <td>
                            <center>

                              <div class="col-md-6">
                                <?php
                       $s = $row1['status']; 
                       if ($s == "BARU" || $s ==  "SIASATAN") {
                        echo "<form method='post' action='edit.php'>
                            <input type='hidden' name='id_fir' value='$row1[id_fir]'>
                            <button type='submit' class='btn btn-primary btn-xs' name='kemaskini_fir' title='Kemaskini'><span class='glyphicon glyphicon-pencil'></span></button>
                            </form>";
                        }
                        elseif ($s == "BENTUK PASUKAN") {
                        echo "<form method='post' action='edit.php'>
                            <input type='hidden' name='id_fir' value='$row1[id_fir]'>
                            <button type='submit' class='btn btn-info btn-xs' title='BENTUK PASUKAN' name='bentuk_pasukan'><span class='fa fa-group'></span></button>
                            </form>";
                        }
                        elseif ($s == "SELESAI") {
                        echo "";
                        }
                        elseif ($s == "TUTUP KES" || $s == "SEMAKAN PENGARAH" && $role == 3 ) {
                        echo "<button type='button' class='btn btn-danger btn-xs' id='$row1[id]' fir='$row1[id_fir]' data-toggle='modal' data-target='#hantar_semula' title='Buka Semula' ><span class='fa fa-folder-open'></span></button>";
                        }
                        ?>
                          </div>
                              <div class="col-md-6">
                            <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                            <input type="hidden" name="id_fir" value="<?php echo $row1['id_fir']; ?>">
                            <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                            <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                            </form>
                          </div>
                            </center>
                          </td>
        </tr>
<?php } ?>
                      </tbody>
                    </table>
                        </div>
<?php endif ; ?>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            
<?php
include("include/dbconn.php");
  
if ($role == 1 || $role == 2){
  $sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where cs_Status ='Open(Active)' AND userk = '$fulln'";
}else{
  $sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where cs_Status ='Open(Active)'";
}
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
   
}

while( $row_active = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
    
if ($role == 1 || $role == 2){
  $sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where cs_Status ='Closed(Inactive)' AND userk = '$fulln'";
}else{
  $sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where cs_Status ='Closed(Inactive)'";
}
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
   
}

while( $row_inactive = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
  
if ($role == 1 || $role == 2){
  $sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where cs_Status ='Keep In View(KIV)' AND userk = '$fulln'";
}else{
  $sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where cs_Status ='Keep In View(KIV)'";
}
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
   
}

while( $row_kiv = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {

?>
            <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel tile fixed_height_320 overflow_hidden">
                <div class="x_title">
                  <h2>STATUS KES <?php echo $year; ?></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table class="" style="width:100%">
                    <tr>
                      <th style="width:37%;">
                        <p>Chart</p>
                      </th>
                      <th>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                          <p class="">Status</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                          <p class="">Keseluruhan</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <td>
                        <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                      </td>
                      <td>
                        <table class="tile_info">
                          <tr>
                            <td>
                            <form method="post" action="sent.php">
                          <button type="submit" name="kiv" class="btn btn-default btn-xs" value="Keep In View(KIV)" style="background-color: #3498db ; width: 40%">KIV</button>
                        </form>
                            </td>
                            <td class="pull-left"><?php echo $row_kiv[0]; ?></td>
                          </tr>
                          <tr>
                            <td>
                            <form method="post" action="sent.php">
                          <button type="submit" name="inactive" class="btn btn-default btn-xs" value="Closed(Inactive)" style="background-color: #1abb9c ; width: 40%">Inactive</button>
                        </form>
                            </td>
                            <td class="pull-left"><?php echo $row_inactive[0]; ?></td>
                          </tr>
                          <tr>
                            <td>
                              <form method="post" action="sent.php">
                          <button type="submit" name="active" class="btn btn-default btn-xs" value="Open(Active)" style="background-color: #9b59b6 ; width: 40%">Active</button>
                        </form>
                            </td>
                            <td class="pull-left"><?php echo $row_active[0]; ?></td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
<script> 
 function init_chart_doughnut(){
        
    if( typeof (Chart) === 'undefined'){ return; }
    
    console.log('init_chart_doughnut');
   
    if ($('.canvasDoughnut').length){
      
    var chart_doughnut_settings = {
        type: 'doughnut',
        tooltipFillColor: "rgba(51, 51, 51, 0.55)",
        data: {
          labels: [
            "Active",
            "Inactive",
            "KIV"
          ],
          datasets: [{
            data: [<?php echo $row_active[0]; ?>,<?php echo $row_inactive[0]; ?>,<?php echo $row_kiv[0]; ?>],
            backgroundColor: [
              "#9B59B6",
              "#26B99A",
              "#3498DB"
            ],
            hoverBackgroundColor: [
              "#B370CF",
              "#36CAAB",
              "#49A9EA"
            ]
          }]
        },
        options: { 
          legend: false, 
          responsive: false 
        }
      }

      $('.canvasDoughnut').each(function(){
        
        var chart_element = $(this);
        var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
        
      });     
    
    }  
     
  }
</script>
<?php } } } ?>
<?php
include 'include/dbconn.php';

if ($role == 1 || $role == 2){
  $sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where masa like '%$year%' AND userk = '$fulln'";
}else{
  $sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where masa like '%$year%'";
}
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
   
}

while( $row_ttol = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {

if ($role == 1 || $role == 2){
  $sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where priority ='Standard' AND masa  like '%$year%' AND userk = '$fulln'";
}else{
  $sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where priority ='Standard' AND masa  like '%$year%'";
}
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
   
}

while( $row_standart = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {

if ($role == 1 || $role == 2){
  $sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where priority ='Urgent' AND masa  like '%$year%' AND userk = '$fulln'";
}else{
  $sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where priority ='Urgent' AND masa  like '%$year%'";
}
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
   
}

while( $row_urgent = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {

if ($role == 1 || $role == 2){
  $sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where priority ='Critikal' AND masa  like '%$year%' AND userk = '$fulln'";
}else{
  $sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where priority ='Critikal' AND masa  like '%$year%'"; 
}
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
   
}

while( $row_critikal = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
  
if ($role == 1 || $role == 2){
  $sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where priority ='Important' AND masa  like '%$year%' AND userk = '$fulln'";
}else{
  $sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin] where priority ='Important' AND masa  like '%$year%'";
}
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
   
}

while( $row_important = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
?>
               <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>KEUTAMAAN KES <?php echo $year; ?></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <h4>Keseluruhan Kes</h4>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <form method="post" action="sent.php">
                      <button type="submit" name="standard" class="btn btn-default btn-xs" value="Standard" style="background-color: #1abb9c ; width: 60%">Standard</button>
                  </form>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="Standard : <?php echo ($row_standart[0]/$row_ttol[0])*100; ?>%" style="width: <?php echo ($row_standart[0]/$row_ttol[0])*100; ?>%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span><?php echo ($row_standart[0]/$row_ttol[0])*100; ?>% / <?php echo $row_standart[0] ?></span>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <form method="post" action="sent.php">
                      <button type="submit" name="urgent" class="btn btn-default btn-xs" value="Urgent" style="background-color: #3498db ; width: 60%">Urgent</button>
                  </form>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="Urgent : <?php echo ($row_urgent[0]/$row_ttol[0])*100; ?>%" style="width: <?php echo ($row_urgent[0]/$row_ttol[0])*100; ?>%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span><?php echo ($row_urgent[0]/$row_ttol[0])*100; ?>% / <?php echo $row_urgent[0]; ?></span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <form method="post" action="sent.php">
                      <button type="submit" name="critical" class="btn btn-default btn-xs" value="Critical" style="background-color: #e74c3c ; width: 60%">Critical</button>
                  </form>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-red" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="Critical : <?php echo ($row_critikal[0]/$row_ttol[0])*100; ?>" style="width: <?php echo ($row_critikal[0]/$row_ttol[0])*100; ?>%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span><?php echo ($row_critikal[0]/$row_ttol[0])*100; ?>% / <?php echo $row_critikal[0] ?></span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <form method="post" action="sent.php">
                      <button type="submit" name="important" class="btn btn-default btn-xs" value="Important" style="background-color: #9B59B6 ; width: 60%">Important</button>
                  </form>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="Important : <?php echo ($row_important[0]/$row_ttol[0])*100; ?>" style="width: <?php echo ($row_important[0]/$row_ttol[0])*100; ?>%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span><?php echo ($row_important[0]/$row_ttol[0])*100; ?>% / <?php echo $row_important[0]; ?></span>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                </div>
              </div>
            </div>
            <?php } } } } }?>
 
            </div>
          </div>
        </div>

                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form id="penyiasat_form" method="post" action="sent.php">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">HANTAR KES</h4>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">FIR</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text"  class="form-control" name="id_fir" disabled >
                              <input type="hidden" name="id_fir" >
                            </div>
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">Negeri <span style="color: red">*</span></label>
                            </div>
                            <div class="col-md-8">
                              <select class="form-control" name="ngri" onclick="javascript:ngri_risik(this);" required>
                                <option selected="selected" disabled>Sila Pilih</option>
                                <?php include 'include/negeri1.php'; ?>
                              </select>
                            </div>
                            </div>
                          </div>
                        <div id="div_HQ" style="display: none;">
                          <br>
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">PEGAWAI SIASATAN </label>
                            </div>
                            <div class="col-md-8">
<?php 
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[login] WHERE role = '2' OR role = '5' AND ngri = 'Ibu Pejabat' ORDER BY fulname asc";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                              <select id="pilih" class="form-control" name="pgwai_penyiasat">
                                <option disabled selected="selected">Sila Pilih</option>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                                <option value="<?php echo $row1['id']; ?>"><?php echo $row1['fulname']; ?></option>
<?php } ?>
                              </select>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div id="div_Johor" style="display: none;">
                          <br>
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">PEGAWAI SIASATAN </label>
                            </div>
                            <div class="col-md-8">
<?php 
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[login] WHERE role = '2' OR role = '5' AND ngri = 'Johor' ORDER BY fulname asc";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                              <select id="pilih" class="form-control" name="pgwai_penyiasat">
                                <option disabled selected="selected">Sila Pilih</option>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                                <option value="<?php echo $row1['id']; ?>"><?php echo $row1['fulname']; ?></option>
<?php } ?>
                              </select>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div id="div_Kedah" style="display: none;">
                          <br>
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">PEGAWAI SIASATAN </label>
                            </div>
                            <div class="col-md-8">
<?php 
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[login] WHERE role = '2' OR role = '5' AND ngri = 'Kedah' ORDER BY fulname asc";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                              <select id="pilih" class="form-control" name="pgwai_penyiasat">
                                <option disabled selected="selected">Sila Pilih</option>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                                <option value="<?php echo $row1['id']; ?>"><?php echo $row1['fulname']; ?></option>
<?php } ?>
                              </select>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div id="div_Kelantan" style="display: none;">
                          <br>
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">PEGAWAI SIASATAN </label>
                            </div>
                            <div class="col-md-8">
<?php 
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[login] WHERE role = '2' OR role = '5' AND ngri = 'Kelantan' ORDER BY fulname asc";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                              <select id="pilih" class="form-control" name="pgwai_penyiasat">
                                <option disabled selected="selected">Sila Pilih</option>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                                <option value="<?php echo $row1['id']; ?>"><?php echo $row1['fulname']; ?></option>
<?php } ?>
                              </select>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div id="div_Melaka" style="display: none;">
                          <br>
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">PEGAWAI SIASATAN </label>
                            </div>
                            <div class="col-md-8">
<?php 
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[login] WHERE role = '2' OR role = '5' AND ngri = 'Melaka' ORDER BY fulname asc";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                              <select id="pilih" class="form-control" name="pgwai_penyiasat">
                                <option disabled selected="selected">Sila Pilih</option>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                                <option value="<?php echo $row1['id']; ?>"><?php echo $row1['fulname']; ?></option>
<?php } ?>
                              </select>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div id="div_Negeri Sembilan" style="display: none;">
                          <br>
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">PEGAWAI SIASATAN </label>
                            </div>
                            <div class="col-md-8">
<?php 
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[login] WHERE role = '2' OR role = '5' AND ngri = 'Negeri Sembilan' ORDER BY fulname asc";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                              <select id="pilih" class="form-control" name="pgwai_penyiasat">
                                <option disabled selected="selected">Sila Pilih</option>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                                <option value="<?php echo $row1['id']; ?>"><?php echo $row1['fulname']; ?></option>
<?php } ?>
                              </select>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div id="div_Pahang" style="display: none;">
                          <br>
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">PEGAWAI SIASATAN </label>
                            </div>
                            <div class="col-md-8">
<?php 
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[login] WHERE role = '2' OR role = '5' AND ngri = 'Pahang' ORDER BY fulname asc";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                              <select id="pilih" class="form-control" name="pgwai_penyiasat">
                                <option disabled selected="selected">Sila Pilih</option>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                                <option value="<?php echo $row1['id']; ?>"><?php echo $row1['fulname']; ?></option>
<?php } ?>
                              </select>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div id="div_Perak" style="display: none;">
                          <br>
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">PEGAWAI SIASATAN </label>
                            </div>
                            <div class="col-md-8">
<?php 
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[login] WHERE role = '2' OR role = '5' AND ngri = 'Perak' ORDER BY fulname asc";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                              <select id="pilih" class="form-control" name="pgwai_penyiasat">
                                <option disabled selected="selected">Sila Pilih</option>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                                <option value="<?php echo $row1['id']; ?>"><?php echo $row1['fulname']; ?></option>
<?php } ?>
                              </select>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div id="div_Perlis" style="display: none;">
                          <br>
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">PEGAWAI SIASATAN </label>
                            </div>
                            <div class="col-md-8">
<?php 
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[login] WHERE role = '2' OR role = '5' AND ngri = 'Perlis' ORDER BY fulname asc";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                              <select id="pilih" class="form-control" name="pgwai_penyiasat">
                                <option disabled selected="selected">Sila Pilih</option>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                                <option value="<?php echo $row1['id']; ?>"><?php echo $row1['fulname']; ?></option>
<?php } ?>
                              </select>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div id="div_Pulau Pinang" style="display: none;">
                          <br>
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">PEGAWAI SIASATAN </label>
                            </div>
                            <div class="col-md-8">
<?php 
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[login] WHERE role = '2' OR role = '5' AND ngri = 'Pulau Pinang' ORDER BY fulname asc";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                              <select id="pilih" class="form-control" name="pgwai_penyiasat">
                                <option disabled selected="selected">Sila Pilih</option>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                                <option value="<?php echo $row1['id']; ?>"><?php echo $row1['fulname']; ?></option>
<?php } ?>
                              </select>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div id="div_Sabah" style="display: none;">
                          <br>
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">PEGAWAI SIASATAN </label>
                            </div>
                            <div class="col-md-8">
<?php 
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[login] WHERE role = '2' OR role = '5' AND ngri = 'Sabah' ORDER BY fulname asc";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                              <select id="pilih" class="form-control" name="pgwai_penyiasat">
                                <option disabled selected="selected">Sila Pilih</option>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                                <option value="<?php echo $row1['id']; ?>"><?php echo $row1['fulname']; ?></option>
<?php } ?>
                              </select>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div id="div_Sarawak" style="display: none;">
                          <br>
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">PEGAWAI SIASATAN </label>
                            </div>
                            <div class="col-md-8">
<?php 
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[login] WHERE role = '2' OR role = '5' AND ngri = 'Sarawak' ORDER BY fulname asc";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                              <select id="pilih" class="form-control" name="pgwai_penyiasat">
                                <option disabled selected="selected">Sila Pilih</option>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                                <option value="<?php echo $row1['id']; ?>"><?php echo $row1['fulname']; ?></option>
<?php } ?>
                              </select>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div id="div_Selangor" style="display: none;">
                          <br>
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">PEGAWAI SIASATAN </label>
                            </div>
                            <div class="col-md-8">
<?php 
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[login] WHERE role = '2' OR role = '5' AND ngri = 'Selangor' ORDER BY fulname asc";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                              <select id="pilih" class="form-control" name="pgwai_penyiasat">
                                <option disabled selected="selected">Sila Pilih</option>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                                <option value="<?php echo $row1['id']; ?>"><?php echo $row1['fulname']; ?></option>
<?php } ?>
                              </select>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div id="div_Terengganu" style="display: none;">
                          <br>
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">PEGAWAI SIASATAN </label>
                            </div>
                            <div class="col-md-8">
<?php 
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[login] WHERE role = '2' OR role = '5' AND ngri = 'Terengganu' ORDER BY fulname asc";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                              <select id="pilih" class="form-control" name="pgwai_penyiasat">
                                <option disabled selected="selected">Sila Pilih</option>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                                <option value="<?php echo $row1['id']; ?>"><?php echo $row1['fulname']; ?></option>
<?php } ?>
                              </select>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div id="div_Wilayah Persekutuan Kuala Lumpur" style="display: none;">
                          <br>
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">PEGAWAI SIASATAN </label>
                            </div>
                            <div class="col-md-8">
<?php 
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[login] WHERE role = '2' OR role = '5' AND ngri = 'Wilayah Persekutuan Kuala Lumpur' ORDER BY fulname asc";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                              <select id="pilih" class="form-control" name="pgwai_penyiasat">
                                <option disabled selected="selected">Sila Pilih</option>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                                <option value="<?php echo $row1['id']; ?>"><?php echo $row1['fulname']; ?></option>
<?php } ?>
                              </select>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div id="div_Wilayah Persekutuan Labuan" style="display: none;">
                          <br>
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">PEGAWAI SIASATAN </label>
                            </div>
                            <div class="col-md-8">
<?php 
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[login] WHERE role = '2' OR role = '5' AND ngri = 'Wilayah Persekutuan Labuan' ORDER BY fulname asc";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                              <select id="pilih" class="form-control" name="pgwai_penyiasat">
                                <option disabled selected="selected">Sila Pilih</option>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                                <option value="<?php echo $row1['id']; ?>"><?php echo $row1['fulname']; ?></option>
<?php } ?>
                              </select>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div id="div_Wilayah Persekutuan Putrajaya" style="display: none;">
                          <br>
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">PEGAWAI SIASATAN </label>
                            </div>
                            <div class="col-md-8">
<?php 
include('include/dbconn.php');
                 
$sql = "SELECT * FROM [jim].[dbo].[login] WHERE role = '2' OR role = '5' AND ngri = 'Wilayah Persekutuan Putrajaya' ORDER BY fulname asc";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
?>
                              <select id="pilih" class="form-control" name="pgwai_penyiasat">
                                <option disabled selected="selected">Sila Pilih</option>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                                <option value="<?php echo $row1['id']; ?>"><?php echo $row1['fulname']; ?></option>
<?php } ?>
                              </select>
                            </div>
                            </div>
                          </div>
                        </div>

                        </div>
                        <div class="modal-footer">
                          <button type="reset" class="btn btn-default" data-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-primary" name="hantar_penyasat">Hantar</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="hantar_semula" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form id="hantar_semula" method="post" action="edit.php">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Buka Semula Kes</h4>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">FIR</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text"  class="form-control" name="fir" disabled >
                              <input type="hidden" name="fir" >
                              <input type="hidden" name="id" >
                            </div>
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">Catatan <span style="color: red">*</span></label>
                            </div>
                            <div class="col-md-8">
                              <textarea class="form-control" name="cttn" required></textarea>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="reset" class="btn btn-default" data-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-primary" name="buka_semula">Hantar</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="reject_fir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form id="reject_fir_form" method="post" action="sent.php">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">SEMAKAN SEMULA</h4>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">FIR</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text"  class="form-control" name="id_fir" disabled >
                              <input type="hidden" name="id_fir" >
                            </div>
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">Catatan <span style="color: red">*</span></label>
                            </div>
                            <div class="col-md-8">
                              <textarea class="form-control" name="cttn" required></textarea>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="reset" class="btn btn-default" data-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-primary" name="hantar_reject_fir">Hantar</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="reject_risik" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form id="reject_risik_form" method="post" action="sent.php">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">SEMAKAN SEMULA</h4>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">FIR</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text"  class="form-control" name="id_fir" disabled >
                              <input type="hidden" name="id_fir" >
                            </div>
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">Catatan <span style="color: red">*</span></label>
                            </div>
                            <div class="col-md-8">
                              <textarea class="form-control" name="cttn" required></textarea>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="reset" class="btn btn-default" data-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-primary" name="hantar_reject_risik">Hantar</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php include 'footer.php'; ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <?php include 'include/js_menu.php'; ?>
  </body>
</html>
