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
        <h2>Invesment</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <h4></h4>
<?php 
include('include/dbconn.php');
if(isset($_POST['date_invest'])){
      $sql = "SELECT * FROM [jim].[dbo].[date_chart_iv]";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {}
    while($row1=  sqlsrv_fetch_array($stmt1))
    {
    
?>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <form method="post" action="chart_invest.php">
                        <input type="hidden" name="date_detail" value="<?php echo $row1['date_tran']; ?>">
                        <button type="submit" class="btn-link"><span><?php echo $row1['date_tran']; ?></span></button>
                      </form>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
<?php 
$stmt = sqlsrv_query( $conn, "SELECT COUNT(*) FROM [jim].[dbo].[invest] where cont_date = '$row1[date_tran]'" );
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
                 
      $stmt1 = sqlsrv_query ($conn , "SELECT * FROM [jim].[dbo].[invest] where cont_date = '$_POST[date_detail]'");
      if( !$stmt1) {
      }
?>
                    <table id="example1" class="table table-striped table-border">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th>Tarikh Contrak</th>
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
                      <tbody>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                        <tr>
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo $row1['cont_date']; ?></td>
                  <td><?php echo ($row1['buy_sell'] == "B")? "<font color='green'>Buy</font>":"<font color='red'>Sell</font>"; ?></td>
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
                      </tbody>
                    </table>
<?php endif ; ?>
                </div>
              </div>
            </div>

</body>
</html>

