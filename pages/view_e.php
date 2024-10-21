<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php include 'include/bar.php'; ?>
    <section class="content">
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Papar Data</h3>
            </div>
          </div>
          <div class="clearfix">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">      
                    <div class="title_right">
                      <div class="box-body">
                        <form name="import_e" method="get" enctype="multipart/form-data">
                          <div class="row">
                            <div class="col-xs-5"></div>
                            <div class="col-xs-2">
                              <label>Pilihan : <font color="red">&ensp;*</font></label>
                              <select class="form-control" name="im" required="required" onchange="this.form.submit()">
                                <option disabled selected>Pilihan</option>
                                <option <?php echo ($_GET['im'] == 'transaction')? 'selected':'' ?> value="transaction">Bank Statement</option>
                                <option <?php echo ($_GET['im'] == 'iv')? 'selected':'' ?> value="iv">Investment</option>
                                <option <?php echo ($_GET['im'] == 'lg')? 'selected':'' ?> value="lg">Ledger</option>
                                <option <?php echo ($_GET['im'] == 'fd')? 'selected':'' ?> value="fd">Fix Deposit</option>
                                <option <?php echo ($_GET['im'] == 'td')? 'selected':'' ?> value="td">Tender</option>
                                <option <?php echo ($_GET['im'] == 'gst')? 'selected':'' ?> value="gst">GST</option>
                              </select>
                            </div>
                            <div class="col-xs-5"></div>
                          </div>
                          <br>
                        </form>
<?php
  include "include/dbconn.php";
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
  $ip = $_SERVER['REMOTE_ADDR'];
}
  $userk = $_COOKIE['id'];

if($_GET['im'] == "transaction"):
?>
                <form method="post" action="delete.php">
                  <button type="submit" class="btn btn-default btn-lg pull-right" title="Kosongkan Transaksi" name="remove_all_trans"><span class="fa fa-navicon"></span></button>
                </form>
            </div>
                <div style="overflow-x:auto;">
                    <table class="table table-striped table-border">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th>Nama Bank</th>
                          <th>Syarikat</th>
                          <th>Signatory</th>
                          <th>Akaun A</th>
                          <th>
                            <form method="post" action="chart_transac.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">Tarikh Transaksi
                              <button type="submit" class="btn btn-primary btn-xs"name="date_trans"><span class="fa fa-bar-chart"></span></button>
                            </form>
                          </th>
                          <th>
                            <form method="post" action="chart_transac.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">Masa Transaksi
                              <button type="submit" class="btn btn-primary btn-xs"name="time_trans"><span class="fa fa-bar-chart"></span></button>
                            </form>
                          </th>
                          <th>
                            <form method="post" action="chart_transac.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">MYR
                              <button type="submit" class="btn btn-primary btn-xs"name="myr_trans"><span class="fa fa-bar-chart"></span></button>
                            </form>
                          </th>
                          <th>Akaun B</th>
                        </tr>
                      </thead>
                      <tbody>
<?php
$sql = "SELECT COUNT(0) FROM [jim].[dbo].[transaction]";
$retval = sqlsrv_query( $conn,$sql);
$c = sqlsrv_fetch_array( $retval, SQLSRV_FETCH_NUMERIC);

$rec_limit = 10;
$rec_count = $c[0];
if(isset($_GET['page'])) {
  $page = $_GET['page'] + 1;
  $offset = $rec_limit * $page ;
}else {
  $page = 0;
  $offset = 0;
}

$left_rec = $rec_count - ($page * $rec_limit);
$sql = "SELECT * FROM [jim].[dbo].[transaction] ORDER BY id ASC OFFSET $offset ROWS FETCH FIRST $rec_limit ROWS ONLY";

$retval = sqlsrv_query( $conn,$sql);
$counter = $offset + 1;
$last = $page - 2;
while($row1 = sqlsrv_fetch_array($retval)) {
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
                  </div>
<div class="row" >
  Papar <?php echo $offset +1; ?> Hingga <?php echo $offset +10; ?> Dari <?php echo $rec_count ?>
  <div class="btn-toolbar pull-right">
    <div class="btn-group">
      <?php if($page > 0){ ?>
        <button type="button" class="btn btn-info" type="button"><a href="<?php echo $_PHP_SELF ?>?im=transaction&page=<?php echo $last ?>">Last</a></button>
      <?php }  ?>
      <?php for ($i=($page-(4/2)); $i <= ($page+(4/2)); $i++) { 
        if($i > 0){?>
        <button type="button" class="btn btn-info" type="button"><a href="<?php echo $_PHP_SELF ?>?im=transaction&page=<?php echo $i -2 ?>"><?php echo $i ?></a></button>
      <?php } } ?>
      <button type="button" class="btn btn-info" type="button"><a href="<?php echo $_PHP_SELF ?>?im=transaction&page=<?php echo $page ?>">Next</a></button>
    </div>
  </div>
</div>
<?php 
endif;

if($_GET['im'] == "iv"):
?>

                <form method="post" action="delete.php">
                  <button type="submit" class="btn btn-default btn-lg pull-right" title="Kosongkan Invesment" name="remove_all_invest"><span class="fa fa-navicon"></span></button>
                </form>
                <div style="overflow-x:auto;">
                    <table class="table table-striped table-border">
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
                      <tbody>
<?php
$sql = "SELECT COUNT(0) FROM [jim].[dbo].[invest]";
$retval = sqlsrv_query( $conn,$sql);
$c = sqlsrv_fetch_array( $retval, SQLSRV_FETCH_NUMERIC);

$rec_limit = 10;
$rec_count = $c[0];
if(isset($_GET['page'])) {
  $page = $_GET['page'] + 1;
  $offset = $rec_limit * $page ;
}else {
  $page = 0;
  $offset = 0;
}

$left_rec = $rec_count - ($page * $rec_limit);
$sql = "SELECT * FROM [jim].[dbo].[invest] ORDER BY id ASC OFFSET $offset ROWS FETCH FIRST $rec_limit ROWS ONLY";

$retval = sqlsrv_query( $conn,$sql);
$counter = $offset + 1;
$last = $page - 2;
while($row1 = sqlsrv_fetch_array($retval)) {
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
                  </div>
<div class="row">
  Papar <?php echo $offset +1; ?> Hingga <?php echo $offset +10; ?> Dari <?php echo $rec_count ?>
  <div class="btn-toolbar pull-right">
    <div class="btn-group">
      <?php if($page > 0){ ?>
        <button type="button" class="btn btn-info" type="button"><a href="<?php echo $_PHP_SELF ?>?im=iv&page=<?php echo $last ?>">Last</a></button>
      <?php } ?>
      <?php for ($i=($page-(4/2)); $i <= ($page+(4/2)); $i++) { 
        if($i > 0){?>
        <button type="button" class="btn btn-info" type="button"><a href="<?php echo $_PHP_SELF ?>?im=iv&page=<?php echo $i -2 ?>"><?php echo $i ?></a></button>
      <?php } } ?>
      <button type="button" class="btn btn-info" type="button"><a href="<?php echo $_PHP_SELF ?>?im=iv&page=<?php echo $page ?>">Next</a></button>
    </div>
  </div>
</div>
<?php 
endif;
if($_GET['im'] == "lg"):
?>

                <form method="post" action="delete.php">
                  <button type="submit" class="btn btn-default btn-lg pull-right" title="Kosongkan Ledger" name="remove_all_ledger"><span class="fa fa-navicon"></span></button>
                </form>
                <div style="overflow-x:auto;">
                    <table class="table table-striped table-border">
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
                      <tbody>
<?php
$sql = "SELECT COUNT(0) FROM [jim].[dbo].[ledger]";
$retval = sqlsrv_query( $conn,$sql);
$c = sqlsrv_fetch_array( $retval, SQLSRV_FETCH_NUMERIC);

$rec_limit = 10;
$rec_count = $c[0];
if(isset($_GET['page'])) {
  $page = $_GET['page'] + 1;
  $offset = $rec_limit * $page ;
}else {
  $page = 0;
  $offset = 0;
}

$left_rec = $rec_count - ($page * $rec_limit);
$sql = "SELECT * FROM [jim].[dbo].[ledger] ORDER BY id ASC OFFSET $offset ROWS FETCH FIRST $rec_limit ROWS ONLY";

$retval = sqlsrv_query( $conn,$sql);
$counter = $offset + 1;
$last = $page - 2;
while($row1 = sqlsrv_fetch_array($retval)) {
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
                      </tbody>
                    </table>
                  </div>
<div class="row">
  Papar <?php echo $offset +1; ?> Hingga <?php echo $offset +10; ?> Dari <?php echo $rec_count ?>
  <div class="btn-toolbar pull-right">
    <div class="btn-group">
      <?php if($page > 0){ ?>
        <button type="button" class="btn btn-info" type="button"><a href="<?php echo $_PHP_SELF ?>?im=lg&page=<?php echo $last ?>">Last</a></button>
      <?php } ?>
      <?php for ($i=($page-(4/2)); $i <= ($page+(4/2)); $i++) { 
        if($i > 0){?>
        <button type="button" class="btn btn-info" type="button"><a href="<?php echo $_PHP_SELF ?>?im=lg&page=<?php echo $i -2 ?>"><?php echo $i ?></a></button>
      <?php } } ?>
      <button type="button" class="btn btn-info" type="button"><a href="<?php echo $_PHP_SELF ?>?im=lg&page=<?php echo $page ?>">Next</a></button>
    </div>
  </div>
</div>

<?php 
endif;
if($_GET['im'] == "fd"):
?>

                <form method="post" action="delete.php">
                  <button type="submit" class="btn btn-default btn-lg pull-right" title="Kosongkan Fix Deposit" name="remove_all_fd"><span class="fa fa-navicon"></span></button>
                </form>
                <div style="overflow-x:auto;">
                    <table class="table table-striped table-border">
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
                      <tbody>
<?php
$sql = "SELECT COUNT(0) FROM [jim].[dbo].[fd_trans]";
$retval = sqlsrv_query( $conn,$sql);
$c = sqlsrv_fetch_array( $retval, SQLSRV_FETCH_NUMERIC);

$rec_limit = 10;
$rec_count = $c[0];
if(isset($_GET['page'])) {
  $page = $_GET['page'] + 1;
  $offset = $rec_limit * $page ;
}else {
  $page = 0;
  $offset = 0;
}

$left_rec = $rec_count - ($page * $rec_limit);
$sql = "SELECT * FROM [jim].[dbo].[fd_trans] ORDER BY id ASC OFFSET $offset ROWS FETCH FIRST $rec_limit ROWS ONLY";

$retval = sqlsrv_query( $conn,$sql);
$counter = $offset + 1;
$last = $page - 2;
while($row1 = sqlsrv_fetch_array($retval)) {
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
                  </div>
<div class="row">
  Papar <?php echo $offset +1; ?> Hingga <?php echo $offset +10; ?> Dari <?php echo $rec_count ?>
  <div class="btn-toolbar pull-right">
    <div class="btn-group">
      <?php if($page > 0){ ?>
        <button type="button" class="btn btn-info" type="button"><a href="<?php echo $_PHP_SELF ?>?im=fd&page=<?php echo $last ?>">Last</a></button>
      <?php } ?>
      <?php for ($i=($page-(4/2)); $i <= ($page+(4/2)); $i++) { 
        if($i > 0){?>
        <button type="button" class="btn btn-info" type="button"><a href="<?php echo $_PHP_SELF ?>?im=fd&page=<?php echo $i -2 ?>"><?php echo $i ?></a></button>
      <?php } } ?>
      <button type="button" class="btn btn-info" type="button"><a href="<?php echo $_PHP_SELF ?>?im=fd&page=<?php echo $page ?>">Next</a></button>
    </div>
  </div>
</div>
<?php 
endif;
if($_GET['im'] == "td"):
?>

                <form method="post" action="delete.php">
                  <button type="submit" class="btn btn-default btn-lg pull-right" title="Kosongkan Tender" name="remove_all_tender"><span class="fa fa-navicon"></span></button>
                </form>
                <div style="overflow-x:auto;">
                    <table id="example14" class="table table-striped table-border">
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
$sql = "SELECT COUNT(0) FROM [jim].[dbo].[tender]";
$retval = sqlsrv_query( $conn,$sql);
$c = sqlsrv_fetch_array( $retval, SQLSRV_FETCH_NUMERIC);

$rec_limit = 10;
$rec_count = $c[0];
if(isset($_GET['page'])) {
  $page = $_GET['page'] + 1;
  $offset = $rec_limit * $page ;
}else {
  $page = 0;
  $offset = 0;
}

$left_rec = $rec_count - ($page * $rec_limit);
$sql = "SELECT * FROM [jim].[dbo].[tender] ORDER BY id ASC OFFSET $offset ROWS FETCH FIRST $rec_limit ROWS ONLY";

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
<div class="row">
  Papar <?php echo $offset +1; ?> Hingga <?php echo $offset +10; ?> Dari <?php echo $rec_count ?>
  <div class="btn-toolbar pull-right">
    <div class="btn-group">
      <?php if($page > 0){ ?>
        <button type="button" class="btn btn-info" type="button"><a href="<?php echo $_PHP_SELF ?>?im=td&page=<?php echo $last ?>">Last</a></button>
      <?php } ?>
      <?php for ($i=($page-(4/2)); $i <= ($page+(4/2)); $i++) { 
        if($i > 0){?>
        <button type="button" class="btn btn-info" type="button"><a href="<?php echo $_PHP_SELF ?>?im=td&page=<?php echo $i -2 ?>"><?php echo $i ?></a></button>
      <?php } } ?>
      <button type="button" class="btn btn-info" type="button"><a href="<?php echo $_PHP_SELF ?>?im=td&page=<?php echo $page ?>">Next</a></button>
    </div>
  </div>
</div>

<?php 
endif;
if($_GET['im'] == "gst"):
?>

                <form method="post" action="delete.php">
                  <button type="submit" class="btn btn-default btn-lg pull-right" title="Kosongkan GST" name="remove_all_gst"><span class="fa fa-navicon"></span></button>
                </form>
                <div style="overflow-x:auto;">
                    <table id="example14" class="table table-bordered table-striped">
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

$rec_limit = 10;
$rec_count = $c[0];
if(isset($_GET['page'])) {
  $page = $_GET['page'] + 1;
  $offset = $rec_limit * $page ;
}else {
  $page = 0;
  $offset = 0;
}

$left_rec = $rec_count - ($page * $rec_limit);
$sql = "SELECT * FROM [jim].[dbo].[gst] ORDER BY id ASC OFFSET $offset ROWS FETCH FIRST $rec_limit ROWS ONLY";

$retval = sqlsrv_query( $conn,$sql);
$counter = $offset + 1;
$last = $page - 2;
while($row1 = sqlsrv_fetch_array($retval)) {
?>
                <tr>              
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo $row1['acount_name']; ?></td>
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
<div class="row">
  Papar <?php echo $offset +1; ?> Hingga <?php echo $offset +10; ?> Dari <?php echo $rec_count ?>
  <div class="btn-toolbar pull-right">
    <div class="btn-group">
      <?php if($page > 0){ ?>
        <button type="button" class="btn btn-info" type="button"><a href="<?php echo $_PHP_SELF ?>?im=gst&page=<?php echo $last ?>">Last</a></button>
      <?php } ?>
      <?php for ($i=($page-(4/2)); $i <= ($page+(4/2)); $i++) { 
        if($i > 0){?>
        <button type="button" class="btn btn-info" type="button"><a href="<?php echo $_PHP_SELF ?>?im=gst&page=<?php echo $i -2 ?>"><?php echo $i ?></a></button>
      <?php } } ?>
      <button type="button" class="btn btn-info" type="button"><a href="<?php echo $_PHP_SELF ?>?im=gst&page=<?php echo $page ?>">Next</a></button>
    </div>
  </div>
</div>

<?php 
endif;
$editor = $fulname;
$transtype = "View Import Data";
  
$sql = ("INSERT INTO [jim].[dbo].[log] ([ttype],[datee],[userk],[ip]) VALUES ('$transtype',CURRENT_TIMESTAMP,'$editor','$ip')");
$stmt = sqlsrv_query( $conn, $sql );
 //   }//Survey               
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
</section>
<?php include 'footer.php'; ?>
</div>
</div>
<?php include 'include/js.php'; ?>
</body>
</html>