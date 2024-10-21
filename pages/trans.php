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
   					<img src="../LogoSPRM.png" class="center-block" height="170px" width="170px"><br/>
                  <center><h4>Demo</h4></center>
                   <br/><br/>
              <h3><center><strong>Maklumat Transaksi</strong></center></h3>
              <br>
               <table id="example1" class="table table-striped table-border">
                <thead>
                 <tr>
                  <th style="width: 1%">No</th>
                  <th>Nama Bank</th>
                  <th>Syarikat</th>
                  <th>Signatory</th>
                  <th>Akaun A</th>
                  <th>Tarikh Transaksi</th>
                  <th>Masa Transaksi</th>
                  <th>MYR</th>
                  <th>Akaun B</th>
                 </tr>
                </thead>
                <tbody>
<?php 
include('include/dbconn.php');

$sql = "SELECT * FROM [jim].[dbo].[transaction] WHERE acc_no = '$_POST[n_aka]' OR  transa_ac = '$_POST[n_aka]'";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                        <tr>
                          <td><?php echo $counter++; ?></td>
                          <td><?php echo $row1['rep_ins']; ?></td>
                          <td><?php echo $row1['company']; ?></td>
                          <td><?php echo $row1['name']; ?></td>
                          <td><?php echo $row1['acc_no']; ?></td>
                          <td><?php echo $row1['trans_date_from']->format('Y-m-d'); ?></td>
                          <td><?php echo $row1['time_trans']; ?></td>
                          <td>MYR <?php echo number_format($row1['myr'], 2); ?></td>
                          <td><?php echo $row1['transa_ac']; ?></td>
                        </tr>
        <?php } ?>
          </tbody>
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