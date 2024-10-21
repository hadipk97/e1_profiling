<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
 <!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Investment</title>
<?php include 'include/css.php'; ?>
</head>
<body>
  <div class="container">
    <div class="x_panel tile">
      <div class="x_title">
        <h2>Fix Deposit</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <h4></h4>
<?php 
include('include/dbconn.php');
if(isset($_POST['date_fd'])){
      $sql = "SELECT * FROM [jim].[dbo].[date_chart_fd]";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {}
    while($row1=  sqlsrv_fetch_array($stmt1))
    {
    
?>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <form method="post" action="chart_fd.php">
                        <input type="hidden" name="date_detail" value="<?php echo $row1['date_tran']; ?>">
                        <button type="submit" class="btn-link"><span><?php echo $row1['date_tran']; ?></span></button>
                      </form>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
<?php 
$stmt = sqlsrv_query( $conn, "SELECT COUNT(*) FROM [jim].[dbo].[fd_trans] where datefd = '$row1[date_tran]'" );
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
<?php }}}
if(isset($_POST['myr_fd'])){
      $sql = "SELECT * FROM [jim].[dbo].[myr_fd] ORDER BY myr asc";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {}
    while($row1=  sqlsrv_fetch_array($stmt1))
    {
    
?>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <form method="post" action="chart_fd.php">
                        <input type="hidden" name="myr_detail" value="<?php echo $row1['myr']; ?>">
                        <button type="submit" class="btn-link"><span><?php echo $row1['myr']; ?></span></button>
                      </form>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
<?php 
$stmt = sqlsrv_query( $conn, "SELECT COUNT(*) FROM [jim].[dbo].[fd_trans] where inv_amount = '$row1[myr]'" );
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
<?php }}} ?>


<?php
if(!empty($_POST['date_detail'])):
include('include/dbconn.php');

$userk = $_COOKIE['id'];
                 
      $stmt1 = sqlsrv_query ($conn , "SELECT * FROM [jim].[dbo].[fd_trans] where datefd = '$_POST[date_detail]'" );
      if( !$stmt1) {
      }
?>
                    <table id="example1" class="table table-striped table-border">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th>Jumlah Pelaburan</th>
                          <th>Tarikh</th>
                          <th>Masa</th>
                          <th>Tempoh Pelaburan</th>
                          <th>Kadar Dividen</th>
                          <th>Jumlah Matang</th>
                          <th>Pengeluaran</th>
                          <th>Baki</th>
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
                      </tbody>
                    </table>
<?php endif ; ?>
<?php
if(!empty($_POST['myr_detail'])):
include('include/dbconn.php');

$userk = $_COOKIE['id'];
                 
      $stmt1 = sqlsrv_query ($conn , "SELECT * FROM [jim].[dbo].[fd_trans] where inv_amount= '$_POST[myr_detail]'");
      if( !$stmt1) {
      }
?>
                    <table id="example1" class="table table-striped table-border">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th>Jumlah Pelaburan</th>
                          <th>Tarikh</th>
                          <th>Masa</th>
                          <th>Tempoh Pelaburan</th>
                          <th>Kadar Dividen</th>
                          <th>Jumlah Matang</th>
                          <th>Pengeluaran</th>
                          <th>Baki</th>
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
                      </tbody>
                    </table>
<?php endif ; ?>
                </div>
              </div>
            </div>

</body>
</html>

