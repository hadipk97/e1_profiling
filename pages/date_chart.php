<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
 <!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Tarikh Transaksi</title>
<?php include 'include/css.php'; ?>
</head>
<body>
  <div class="container">

              <div class="x_panel tile">
                <div class="x_title">
                  <h2>Tarikh Transaksi</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <h4></h4>
<?php 
include('include/dbconn.php');

      $sql = "SELECT * FROM [jim].[dbo].[date_chart]";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
    while($row1=  sqlsrv_fetch_array($stmt1))
    {
    
?>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <form method="post" action="date_chart.php">
                        <input type="hidden" name="date_detail" value="<?php echo $row1['date_tran']; ?>">
                        <button type="submit" class="btn-link"><span><?php echo $row1['date_tran']; ?></span></button>
                      </form>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
<?php 
//echo $row1['date_tran'];
  $sql = "SELECT COUNT(*) FROM [jim].[dbo].[transaction] where trans_date_from = '$row1[date_tran]'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
}
while( $row07 = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
?>
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $row07[0]; ?>%;"></div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span><?php echo $row07[0]; ?></span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
<?php } ?>
<?php } ?>


<?php
if(!empty($_POST['date_detail'])):
include('include/dbconn.php');

$userk = $_COOKIE['id'];
                 
      $sql = "SELECT * FROM [jim].[dbo].[transaction] WHERE trans_date_from = '$_POST[date_detail]'";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
?>
                    <table id="example1" class="table table-striped table-border">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th>Name</th>
                          <th>Ic</th>
                          <th>Business No</th>
                          <th>Account no</th>
                          <th>Transaction type</th>
                          <th>Start Date</th>
                          <th>End Date</th>
                          <th>Time</th>
                          <th>Amount(MYR)</th>
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
                          <td><?php echo $row1['name']; ?></td>
                          <td><?php echo $row1['n_ic']; ?></td>
                          <td><?php echo $row1['bis_no']; ?></td>
                          <td><?php echo $row1['acc_no']; ?></td>
                          <td><?php echo $row1['trans']; ?></td>
                          <td><?php echo $row1['trans_date_from']; ?></td>
                          <td><?php echo $row1['trans_date_to']; ?></td>
                          <td><?php echo $row1['time_trans']; ?></td>
                          <td><?php echo $row1['myr']; ?></td>
                        </tr>
<?php } ?>
                      </tbody>
                    </table>
<?php endif ; ?>
                </div>
              </div>
            </div>

</body>
</html>

