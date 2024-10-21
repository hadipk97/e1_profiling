<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php include 'include/bar.php'; ?>

<link href="../plugins/dropzone.css" rel="stylesheet">
<script src="../plugins/dropzone.js"></script>
          <script>
            //$('#loader').style.display = 'block'();
            getElementById('loader').style.display = 'none'  
          </script>
    <section class="content">
        <div class="right_col" role="main">
          <div class="">
          <div class="page-title">
              <div class="title_left">
                <h3>Import</h3>
              </div>
            </div>
            <div class="clearfix">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
          <div class="x_title">       
            <div class="title_right"> 
              <div class="box-body">
                <form name="import_e" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-xs-1"></div>
                <div class="col-xs-2">
                  <label class="pull-right">Import : <font color="red">&ensp;*</font></label>
                </div>
                <div class="col-xs-2">
                  <select class="form-control" name="ty" required="required">
                    <option disabled selected>Option</option>
                    <option value="xls">Excel (XLS)</option>
                    <option value="csv">Excel (CSV)</option>
                    <option value="txt">Flat Data Type (TXT)</option>
                  </select>
                </div>
                <div class="col-xs-2">
                  <select class="form-control" name="im" required="required">
                    <option disabled selected>Option</option>
                    <option value="transaction">Bank Statement</option>
                    <option value="iv">Investment</option>
                    <option value="lg">Ledger</option>
                    <option value="fd">Fix Deposit</option>
                    <option value="td">Tender</option>
                    <option value="gst">GST</option>
                    <option value="pr">Profile</option>
                    <option value="ssm">SSM</option>
                  </select>
                </div>
                <!--<div class="col-xs-4">
                  <input type="file" name="file" accept=".csv,.xls,.txt">
                </div>-->
                <div class="col-xs-2">
                  <button type="submit" class="btn btn-primary" name="get_data">Import Data </button>
                  <img id="loader" style="display: none;" src="../img/giphy.gif" />
                </div>
                <div class="col-xs-2"></div>
              </div>
              <br>
            </form>

      <form action="#" enctype="multipart/form-data" class="dropzone" id="image-upload">
        <div accept=".csv,.xls,.txt" >
          <center>Drop Files Here for Uploding.</center>
          <div id="table_data"></div>
        </div>
      </form>

<script type="text/javascript">
  Dropzone.options.imageUpload = {};

  // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>
<script>
      var auto_refresh = setInterval(
    function (){$('#table_data').load('check_file.php');}, 1000);
</script>

<?php 
$uploadDir = 'upload';
include "include/dbconn.php";

if (!empty($_FILES)) {

  $tmpFile = $_FILES['file']['tmp_name'];
  $filename = $uploadDir.'/'. $_FILES['file']['name'];
  $file_name = $_FILES['file']['name'];


  $sql = "SELECT * FROM [jim].[dbo].[attach] WHERE filename = '$file_name'";
  $stmt = sqlsrv_query ($conn , $sql);
  $r =  sqlsrv_fetch_array($stmt);
  if($r['id'] == ""){
  $ext = pathinfo($file_name, PATHINFO_EXTENSION);
  move_uploaded_file($tmpFile,$filename);

  $sql = "INSERT INTO [jim].[dbo].[attach]
                ([filename],[ext],user_id)
        VALUES
                ('$file_name','$ext','$_COOKIE[id]')";
  $stmt = sqlsrv_query ($conn , $sql);
    }
  }
?>
<?php
    error_reporting(E_ALL ^ E_NOTICE);
  include "include/dbconn.php";
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
  $ip = $_SERVER['REMOTE_ADDR'];
}
  if(isset($_POST["get_data"])){

    echo "<script> document.getElementById(\"loader\").style.display = \"block\";</script>";

    $stmt3 = sqlsrv_query($conn,"SELECT * FROM [jim].[dbo].[attach] WHERE ext = '".$_POST['ty']."' AND user_id = '".$_COOKIE['id']."'");
    if($stmt3 != false){
    while($eachfile = sqlsrv_fetch_array($stmt3)){
      $eachfile['filename'];

    if($_POST['im'] == "transaction") {
    if($_POST['ty'] == "csv") {
    $file = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];
    $handle = fopen($file, "r");
    $c = 0;
    fgetcsv($handle);
    while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
    {
      $su0 = $filesop[0];//id_profil
      $su1 = $filesop[1];//ref_no
      $su2 = $filesop[2];//rep_ins
      $su3 = $filesop[3];//rep_typr1
      $su4 = $filesop[4];//company
      $su5 = $filesop[5];//rep_typr
      $su6 = $filesop[6];//name
      $su7 = $filesop[7];//n_ic
      $su8 = $filesop[8];//o_ic
      $su9 = $filesop[9];//bis_no
      $su10 = $filesop[10];//acc_no
      $su11 = $filesop[11];//acc_ty
      $su12 = $filesop[12];//trans
      $su13 = $filesop[13];//tran_date_s
      $su14 = $filesop[14];//tran_date_e
      $su15 = $filesop[15];//myr
      $su16 = $filesop[16];//state
      $su17 = $filesop[17];//tran_acc
      //$su18 = $filesop[18];//time

      sqlsrv_query ($conn , "INSERT INTO [dbo].[bank_link] ([n_aka]) VALUES ('$su9')");
      sqlsrv_query ($conn , "INSERT INTO [dbo].[bank_link] ([n_aka]) VALUES ('$su16')");
      sqlsrv_query ($conn , "INSERT INTO [dbo].[myr] ([myr]) VALUES ('$su14')");
      sqlsrv_query ($conn , "INSERT INTO [dbo].[date_chart] ([date_tran]) VALUES ('$su13')");
      sqlsrv_query ($conn , "INSERT INTO [dbo].[time_chart] ([time_chart]) VALUES ('$su17')");
    
      
      $sql2 = "INSERT INTO [jim].[dbo].[transaction]
           ([ref_no]
           ,[rep_ins]
           ,[rep_type1]
           ,[company]
           ,[rep_type]
           ,[name]
           ,[n_ic]
           ,[o_ic]
           ,[bis_no]
           ,[acc_no]
           ,[acc_ty]
           ,[trans]
           ,[trans_date_from]
           ,[trans_date_to]
           ,[myr]
           ,[trans_state]
           ,[transa_ac]
           ,[time_trans])
     VALUES
           ('$su0'
           ,'$su1'
           ,'$su2'
           ,'$su3'
           ,'$su4'
           ,'$su5'
           ,'$su6'
           ,'$su7'
           ,'$su8'
           ,'$su9'
           ,'$su10'
           ,'$su11'
           ,'$su12'
           ,'$su13'
           ,'$su14'
           ,'$su15'
           ,'$su16'
           ,'$su17')";
      $stmt2 = sqlsrv_query ($conn , $sql2);
      $c = $c + 1;
    }}}
    if($_POST['ty'] == "xls") {


    $file = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];

    require_once 'src/excel_reader2.php';
    $data = new Spreadsheet_Excel_Reader();
    $data->setOutputEncoding('CP1251');
    $data->read($file);

    $c = 0;

    for ($x = 2; $x <= count($data->sheets[0]["cells"]); $x++) {

        $su1 = $data->sheets[0]["cells"][$x][1];//ref_no
        $su2 = $data->sheets[0]["cells"][$x][2];//rep_ins
        $su3 = $data->sheets[0]["cells"][$x][3];//rep_typr1
        $su4 = $data->sheets[0]["cells"][$x][4];//company
        $su5 = $data->sheets[0]["cells"][$x][5];//rep_typr
        $su6 = $data->sheets[0]["cells"][$x][6];//name
        $su7 = $data->sheets[0]["cells"][$x][7];//n_ic
        $su8 = $data->sheets[0]["cells"][$x][8];//o_ic
        $su9 = $data->sheets[0]["cells"][$x][9];//bis_no
        $su10 = $data->sheets[0]["cells"][$x][10];//acc_no
        $su11 = $data->sheets[0]["cells"][$x][11];//acc_ty
        $su12 = $data->sheets[0]["cells"][$x][12];//trans
        $su13 = $data->sheets[0]["cells"][$x][13];//tran_date_s
        $su14 = $data->sheets[0]["cells"][$x][14];//tran_date_e
        $su15 = $data->sheets[0]["cells"][$x][15];//myr
        $su16 = $data->sheets[0]["cells"][$x][16];//state
        $su17 = $data->sheets[0]["cells"][$x][17];//tran_acc
        $su18 = $data->sheets[0]["cells"][$x][18];//tran_acc

      sqlsrv_query ($conn , "INSERT INTO [dbo].[bank_link] ([n_aka]) VALUES ('$su10')");
      sqlsrv_query ($conn , "INSERT INTO [dbo].[bank_link] ([n_aka]) VALUES ('$su17')");
      sqlsrv_query ($conn , "INSERT INTO [dbo].[myr] ([myr]) VALUES ('$su15')");
      sqlsrv_query ($conn , "INSERT INTO [dbo].[date_chart] ([date_tran]) VALUES ('$su14')");
      sqlsrv_query ($conn , "INSERT INTO [dbo].[time_chart] ([time_chart]) VALUES ('$su18')");
    
      
      $sql2 = "INSERT INTO [jim].[dbo].[transaction]
           ([ref_no]
           ,[rep_ins]
           ,[rep_type1]
           ,[company]
           ,[rep_type]
           ,[name]
           ,[n_ic]
           ,[o_ic]
           ,[bis_no]
           ,[acc_no]
           ,[acc_ty]
           ,[trans]
           ,[trans_date_from]
           ,[trans_date_to]
           ,[myr]
           ,[trans_state]
           ,[transa_ac]
           ,[time_trans])
     VALUES
           ('$su1'
           ,'$su2'
           ,'$su3'
           ,'$su4'
           ,'$su5'
           ,'$su6'
           ,'$su7'
           ,'$su8'
           ,'$su9'
           ,'$su10'
           ,'$su11'
           ,'$su12'
           ,'$su13'
           ,'$su14'
           ,'$su15'
           ,'$su16'
           ,'$su17'
           ,'$su18')";
      $stmt2 = sqlsrv_query ($conn , $sql2);
      $c = $c + 1;
    }}
    if($_POST['ty'] == "txt") {


    $file1 = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];

    $file = fopen($file1,"r");
    fgets($file);
    $c = 0;
    while (!feof($file)){

      $content = fgets($file);
      $carray = explode("|", $content);
      list($su0,$su1,$su2,$su3,$su4,$su5,$su6,$su7,$su8,$su9,$su10,$su11,$su12,$su13,$su14,$su15,$su16,$su17) = $carray;

      sqlsrv_query ($conn , "INSERT INTO [dbo].[bank_link] ([n_aka]) VALUES ('$su9')");
      sqlsrv_query ($conn , "INSERT INTO [dbo].[bank_link] ([n_aka]) VALUES ('$su16')");
      sqlsrv_query ($conn , "INSERT INTO [dbo].[myr] ([myr]) VALUES ('$su14')");
      sqlsrv_query ($conn , "INSERT INTO [dbo].[date_chart] ([date_tran]) VALUES ('$su13')");
      sqlsrv_query ($conn , "INSERT INTO [dbo].[time_chart] ([time_chart]) VALUES ('$su17')");
      
      $stmt2 = sqlsrv_query($conn,"INSERT INTO [jim].[dbo].[transaction]
           ([ref_no]
           ,[rep_ins]
           ,[rep_type1]
           ,[company]
           ,[rep_type]
           ,[name]
           ,[n_ic]
           ,[o_ic]
           ,[bis_no]
           ,[acc_no]
           ,[acc_ty]
           ,[trans]
           ,[trans_date_from]
           ,[trans_date_to]
           ,[myr]
           ,[trans_state]
           ,[transa_ac]
           ,[time_trans])
     VALUES
           ('$su0'
           ,'$su1'
           ,'$su2'
           ,'$su3'
           ,'$su4'
           ,'$su5'
           ,'$su6'
           ,'$su7'
           ,'$su8'
           ,'$su9'
           ,'$su10'
           ,'$su11'
           ,'$su12'
           ,'$su13'
           ,'$su14'
           ,'$su15'
           ,'$su16'
           ,'$su17')");
      $c = $c + 1;
  }}
    
      if($stmt2){
        echo "You database has imported successfully. You have inserted ". $c ." records<BR>";
      }else{
        echo "Sorry! There is some problem.<br>";
        //echo "You database has imported successfully. You have inserted ". $c ." records<BR>";
      }

$editor = $fulname;
$transtype = "Import File $filename";
  
sqlsrv_query( $conn, "INSERT INTO [jim].[dbo].[log] ([ttype],[datee],[userk],[ip]) VALUES ('$transtype',CURRENT_TIMESTAMP,'$editor','$ip')" );
    }//transaksiif

    if($_POST['im'] == "lg") {
    if($_POST['ty'] == "csv") {
    $file = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];
    $handle = fopen($file, "r");
    $c = 0;
    fgetcsv($handle);
    while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
    {
      /*for ($i=0; $i < 9; $i++) { 
        $su0 = $filesop[0];//ic_lg
      }*/
      $su0 = $filesop[0];//ic_lg
      $su1 = $filesop[1];//roc_lg
      $su2 = $filesop[2];//acc_no
      $su3 = $filesop[3];//date_lg
      $su4 = $filesop[4];//desc_lg
      $su5 = $filesop[5];//debit_lg
      $su6 = $filesop[6];//debit_desc_lg
      $su7 = $filesop[7];//credit_lg
      $su8 = $filesop[8];//balance_lg

      sqlsrv_query ($conn ,"INSERT INTO [dbo].[date_chart_lg] ([date_tran])  VALUES ('$su3')");
      sqlsrv_query ($conn ,"INSERT INTO [dbo].[bank_link] ([n_aka])  VALUES ('$su2')");
      sqlsrv_query ($conn ,"INSERT INTO [dbo].[ledger_link] ([acc_no],[acc_no1])  VALUES ('$su2','$su2')");
      //sqlsrv_query ($conn ,"INSERT INTO [dbo].[ledger_profil] ([ic_lg])  VALUES ('$su0')");
      //sqlsrv_query ($conn ,"INSERT INTO [dbo].[ledger_company] ([roc_lg])  VALUES ('$su1')");
    
      
      $sql2 = "INSERT INTO [jim].[dbo].[ledger]
           ([ic_lg]
           ,[roc_lg]
           ,[acc_no]
           ,[date_lg]
           ,[desc_lg]
           ,[debit_lg]
           ,[debit_desc_lg]
           ,[credit_lg]
           ,[balance_lg])
     VALUES
           ('$su0'
           ,'$su1'
           ,'$su2'
           ,'$su3'
           ,'$su4'
           ,'$su5'
           ,'$su6'
           ,'$su7'
           ,'$su8')";
      $stmt2 = sqlsrv_query ($conn , $sql2);
      $c = $c + 1;
    }}
    if($_POST['ty'] == "xls") {


    $file = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];

    require_once 'src/excel_reader2.php';
    $data = new Spreadsheet_Excel_Reader();
    $data->setOutputEncoding('CP1251');
    $data->read($file);

    $c = 0;

    for ($x = 2; $x <= count($data->sheets[0]["cells"]); $x++) {

        $su1 = $data->sheets[0]["cells"][$x][1];//ref_no
        $su2 = $data->sheets[0]["cells"][$x][2];//rep_ins
        $su3 = $data->sheets[0]["cells"][$x][3];//rep_typr1
        $su4 = $data->sheets[0]["cells"][$x][4];//company
        $su5 = $data->sheets[0]["cells"][$x][5];//rep_typr
        $su6 = $data->sheets[0]["cells"][$x][6];//name
        $su7 = $data->sheets[0]["cells"][$x][7];//n_ic
        $su8 = $data->sheets[0]["cells"][$x][8];//o_ic

      sqlsrv_query ($conn ,"INSERT INTO [dbo].[date_chart_lg] ([date_tran])  VALUES ('$su4')");
      sqlsrv_query ($conn ,"INSERT INTO [dbo].[bank_link] ([n_aka])  VALUES ('$su3')");
      sqlsrv_query ($conn ,"INSERT INTO [dbo].[ledger_link] ([acc_no],[acc_no1])  VALUES ('$su3','$su3')");
    
      
      $sql2 = "INSERT INTO [jim].[dbo].[ledger]
           ([ic_lg]
           ,[roc_lg]
           ,[acc_no]
           ,[date_lg]
           ,[desc_lg]
           ,[debit_lg]
           ,[debit_desc_lg]
           ,[credit_lg]
           ,[balance_lg])
     VALUES
           ('$su1'
           ,'$su2'
           ,'$su3'
           ,'$su4'
           ,'$su5'
           ,'$su6'
           ,'$su7'
           ,'$su8'
           ,'$su9')";
      $stmt2 = sqlsrv_query ($conn , $sql2);
      $c = $c + 1;
    }}
    
    if($_POST['ty'] == "txt") {


    $file1 = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];

    $file = fopen($file1,"r");
    fgets($file);
    $c = 0;
    while (!feof($file)){

      $content = fgets($file);
      $carray = explode("|", $content);
      list($su0,$su1,$su2,$su3,$su4,$su5,$su6,$su7,$su8) = $carray;

      sqlsrv_query ($conn ,"INSERT INTO [dbo].[date_chart_lg] ([date_tran])  VALUES ('$su3')");
      sqlsrv_query ($conn ,"INSERT INTO [dbo].[bank_link] ([n_aka])  VALUES ('$su2')");
      sqlsrv_query ($conn ,"INSERT INTO [dbo].[ledger_link] ([acc_no],[acc_no1])  VALUES ('$su2','$su2')");
      
      $stmt2 = sqlsrv_query($conn,"INSERT INTO [jim].[dbo].[ledger]
           ([ic_lg]
           ,[roc_lg]
           ,[acc_no]
           ,[date_lg]
           ,[desc_lg]
           ,[debit_lg]
           ,[debit_desc_lg]
           ,[credit_lg]
           ,[balance_lg])
     VALUES
           ('$su0'
           ,'$su1'
           ,'$su2'
           ,'$su3'
           ,'$su4'
           ,'$su5'
           ,'$su6'
           ,'$su7'
           ,'$su8')");
      $c = $c + 1;
  }}
    
      if($stmt2){
        echo "You database has imported successfully. You have inserted ". $c ." records<BR>";
      }else{
        echo "Sorry! There is some problem.<br>";
        //echo "You database has imported successfully. You have inserted ". $c ." records<BR>";
      }

$editor = $fulname;
$transtype = "Import File $filename";
  
sqlsrv_query( $conn, "INSERT INTO [jim].[dbo].[log] ([ttype],[datee],[userk],[ip]) VALUES ('$transtype',CURRENT_TIMESTAMP,'$editor','$ip')" );
    }//Ledger

    if($_POST['im'] == "iv") {
    if($_POST['ty'] == "csv") {
    $file = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];
    $handle = fopen($file, "r");
    $c = 0;

    fgetcsv($handle);
    while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
    {
      $su0 = $filesop[0];//ic
      $su1 = $filesop[1];//roc
      $su2 = $filesop[2];//acc_no
      $su3 = $filesop[3];//cont date
      $su4 = $filesop[4];//b/s
      $su5 = $filesop[5];//stock name
      $su6 = $filesop[6];//cont no
      $su7 = $filesop[7];//quantity
      $su8 = $filesop[8];//price
      $su9 = $filesop[9];//gross amount
      $su10 = $filesop[10];//brokerage rate
      $su11 = $filesop[11];//brokerage amou
      $su12 = $filesop[12];//cont stamp
      $su13 = $filesop[13];//clearing fee
      $su14 = $filesop[14];//ttl clearing fee
      $su15 = $filesop[15];//delivery basis
      $su16 = $filesop[16];//traded currency
      $su17 = $filesop[17];//net amount
      $su18 = $filesop[18];//transaction no
      $su19 = $filesop[19];//delivery date
      $su20 = $filesop[20];//payment date
      $su21 = $filesop[21];//maturity date
      $su22 = $filesop[22];//exampted date
      $su23 = $filesop[23];//lodgement date
      $su24 = $filesop[24];//stock code
     // $su23 = $filesop[23];//

     sqlsrv_query ($conn , "INSERT INTO [dbo].[myr_iv] ([myr]) VALUES ('$su17')");
     sqlsrv_query ($conn , "INSERT INTO [dbo].[date_chart_iv] ([date_tran]) VALUES ('$su3')");
     //sqlsrv_query ($conn , "INSERT INTO [dbo].[invest_company] ([roc_iv]) VALUES ('$su1')");
     sqlsrv_query ($conn ,"INSERT INTO [dbo].[bank_link] ([n_aka])  VALUES ('$su2')");
     sqlsrv_query ($conn ,"INSERT INTO [dbo].[invest_link] ([acc_no],[acc_no1])  VALUES ('$su2','$su2')");
     //sqlsrv_query ($conn , "INSERT INTO [dbo].[invest_profil] ([ic_iv]) VALUES ('$su0')");
    
      
      $sql2 = "INSERT INTO [jim].[dbo].[invest]
           ([ic_iv]
           ,[roc_iv]
           ,[acc_no]
           ,[cont_date]
           ,[buy_sell]
           ,[stock_name]
           ,[stock_code]
           ,[cont_no_tax_no]
           ,[quan]
           ,[price]
           ,[g_amount]
           ,[brokerage]
           ,[brokerage_amout]
           ,[cont_stamp]
           ,[clearing_fee]
           ,[tt_fee]
           ,[deli_bas]
           ,[traded_curr]
           ,[n_amount]
           ,[transac_no]
           ,[delivery_date]
           ,[payment_date]
           ,[maturity_date]
           ,[exempted_date]
           ,[lodgement_date])
     VALUES
           ('$su0'
           ,'$su1'
           ,'$su2'
           ,'$su3'
           ,'$su4'
           ,'$su5'
           ,'$su6'
           ,'$su7'
           ,'$su8'
           ,'$su9'
           ,'$su10'
           ,'$su11'
           ,'$su12'
           ,'$su13'
           ,'$su14'
           ,'$su15'
           ,'$su16'
           ,'$su17'
           ,'$su18'
           ,'$su19'
           ,'$su20'
           ,'$su21'
           ,'$su22'
           ,'$su23'
           ,'$su24')";
      $stmt2 = sqlsrv_query ($conn , $sql2);
      $c = $c + 1;
    }}
    if($_POST['ty'] == "xls") {


    $file = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];

    require_once 'src/excel_reader2.php';
    $data = new Spreadsheet_Excel_Reader();
    $data->setOutputEncoding('CP1251');
    $data->read($file);

    $c = 0;

    for ($x = 2; $x <= count($data->sheets[0]["cells"]); $x++) {

      $su1 = $data->sheets[0]["cells"][$x][1];//ref_no
      $su2 = $data->sheets[0]["cells"][$x][2];//rep_ins
      $su3 = $data->sheets[0]["cells"][$x][3];//rep_typr1
      $su4 = $data->sheets[0]["cells"][$x][4];//company
      $su5 = $data->sheets[0]["cells"][$x][5];//rep_typr
      $su6 = $data->sheets[0]["cells"][$x][6];//name
      $su7 = $data->sheets[0]["cells"][$x][7];//n_ic
      $su8 = $data->sheets[0]["cells"][$x][8];//o_ic
      $su9 = $data->sheets[0]["cells"][$x][9];//bis_no
      $su10 = $data->sheets[0]["cells"][$x][10];//acc_no
      $su11 = $data->sheets[0]["cells"][$x][11];//acc_ty
      $su12 = $data->sheets[0]["cells"][$x][12];//trans
      $su13 = $data->sheets[0]["cells"][$x][13];//tran_date_s
      $su14 = $data->sheets[0]["cells"][$x][14];//tran_date_e
      $su15 = $data->sheets[0]["cells"][$x][15];//myr
      $su16 = $data->sheets[0]["cells"][$x][16];//state
      $su17 = $data->sheets[0]["cells"][$x][17];//tran_acc
      $su18 = $data->sheets[0]["cells"][$x][18];//tran_acc
      $su19 = $data->sheets[0]["cells"][$x][19];//tran_acc
      $su20 = $data->sheets[0]["cells"][$x][20];//tran_acc
      $su21 = $data->sheets[0]["cells"][$x][21];//tran_acc
      $su22 = $data->sheets[0]["cells"][$x][22];//tran_acc
      $su23 = $data->sheets[0]["cells"][$x][23];//tran_acc
      $su24 = $data->sheets[0]["cells"][$x][24];//tran_acc
      $su25 = $data->sheets[0]["cells"][$x][25];//tran_acc

     sqlsrv_query ($conn , "INSERT INTO [dbo].[myr_iv] ([myr]) VALUES ('$su18')");
     sqlsrv_query ($conn , "INSERT INTO [dbo].[date_chart_iv] ([date_tran]) VALUES ('$su4')");
     //sqlsrv_query ($conn , "INSERT INTO [dbo].[invest_company] ([roc_iv]) VALUES ('$su1')");
     sqlsrv_query ($conn ,"INSERT INTO [dbo].[bank_link] ([n_aka])  VALUES ('$su3')");
     sqlsrv_query ($conn ,"INSERT INTO [dbo].[invest_link] ([acc_no],[acc_no1])  VALUES ('$su3','$su3')");
    
      
      $sql2 = "INSERT INTO [jim].[dbo].[invest]
           ([ic_iv]
           ,[roc_iv]
           ,[acc_no]
           ,[cont_date]
           ,[buy_sell]
           ,[stock_name]
           ,[stock_code]
           ,[cont_no_tax_no]
           ,[quan]
           ,[price]
           ,[g_amount]
           ,[brokerage]
           ,[brokerage_amout]
           ,[cont_stamp]
           ,[clearing_fee]
           ,[tt_fee]
           ,[deli_bas]
           ,[traded_curr]
           ,[n_amount]
           ,[transac_no]
           ,[delivery_date]
           ,[payment_date]
           ,[maturity_date]
           ,[exempted_date]
           ,[lodgement_date])
     VALUES
           ('$su1'
           ,'$su2'
           ,'$su3'
           ,'$su4'
           ,'$su5'
           ,'$su6'
           ,'$su7'
           ,'$su8'
           ,'$su9'
           ,'$su10'
           ,'$su11'
           ,'$su12'
           ,'$su13'
           ,'$su14'
           ,'$su15'
           ,'$su16'
           ,'$su17'
           ,'$su18'
           ,'$su19'
           ,'$su20'
           ,'$su21'
           ,'$su22'
           ,'$su23'
           ,'$su24'
           ,'$su25')";
      $stmt2 = sqlsrv_query ($conn , $sql2);
      $c = $c + 1;
    }}
    if($_POST['ty'] == "txt") {


    $file1 = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];

    $file = fopen($file1,"r");
    fgets($file);
    $c = 0;
    while (!feof($file)){

      $content = fgets($file);
      $carray = explode("|", $content);
      list($su0,$su1,$su2,$su3,$su4,$su5,$su6,$su7,$su8,$su9,$su10,$su11,$su12,$su13,$su14,$su15,$su16,$su17,$su18,$su19,$su20,$su21,$su22,$su23,$su24) = $carray;

     sqlsrv_query ($conn , "INSERT INTO [dbo].[myr_iv] ([myr]) VALUES ('$su17')");
     sqlsrv_query ($conn , "INSERT INTO [dbo].[date_chart_iv] ([date_tran]) VALUES ('$su3')");
     sqlsrv_query ($conn ,"INSERT INTO [dbo].[bank_link] ([n_aka])  VALUES ('$su2')");
     sqlsrv_query ($conn ,"INSERT INTO [dbo].[invest_link] ([acc_no],[acc_no1])  VALUES ('$su2','$su2')");
      
      $stmt2 = sqlsrv_query($conn,"INSERT INTO [jim].[dbo].[invest]
           ([ic_iv]
           ,[roc_iv]
           ,[acc_no]
           ,[cont_date]
           ,[buy_sell]
           ,[stock_name]
           ,[stock_code]
           ,[cont_no_tax_no]
           ,[quan]
           ,[price]
           ,[g_amount]
           ,[brokerage]
           ,[brokerage_amout]
           ,[cont_stamp]
           ,[clearing_fee]
           ,[tt_fee]
           ,[deli_bas]
           ,[traded_curr]
           ,[n_amount]
           ,[transac_no]
           ,[delivery_date]
           ,[payment_date]
           ,[maturity_date]
           ,[exempted_date]
           ,[lodgement_date])
     VALUES
           ('$su0'
           ,'$su1'
           ,'$su2'
           ,'$su3'
           ,'$su4'
           ,'$su5'
           ,'$su6'
           ,'$su7'
           ,'$su8'
           ,'$su9'
           ,'$su10'
           ,'$su11'
           ,'$su12'
           ,'$su13'
           ,'$su14'
           ,'$su15'
           ,'$su16'
           ,'$su17'
           ,'$su18'
           ,'$su19'
           ,'$su20'
           ,'$su21'
           ,'$su22'
           ,'$su23'
           ,'$su24')");
      $c = $c + 1;
  }}
    
      if($stmt2){
        echo "You database has imported successfully. You have inserted ". $c ." records<BR>";
      }else{
        echo "Sorry! There is some problem.<br>";
        //echo "You database has imported successfully. You have inserted ". $c ." records<BR>";
      }

$editor = $fulname;
$transtype = "Import File $filename";
  
sqlsrv_query( $conn, "INSERT INTO [jim].[dbo].[log] ([ttype],[datee],[userk],[ip]) VALUES ('$transtype',CURRENT_TIMESTAMP,'$editor','$ip')" );
    }//invesment

    if($_POST['im'] == "fd") {
    if($_POST['ty'] == "csv") {
    $file = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];
    $handle = fopen($file, "r");
    $c = 0;

    fgetcsv($handle);
    while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
    {
      $su0 = $filesop[0];//ic
      $su1 = $filesop[1];//roc
      $su2 = $filesop[2];//acc no
      $su3 = $filesop[3];//inv amount
      $su4 = $filesop[4];//date
      $su5 = $filesop[5];//time
      $su6 = $filesop[6];//inv period
      $su7 = $filesop[7];//dividen rate
      $su8 = $filesop[8];//amount mat
      $su9 = $filesop[9];//withdrow
      $su10 = $filesop[10];//balance

     sqlsrv_query ($conn , "INSERT INTO [dbo].[myr_fd] ([myr]) VALUES ('$su3')");
     sqlsrv_query ($conn , "INSERT INTO [dbo].[date_chart_fd] ([date_tran]) VALUES ('$su4')");
     sqlsrv_query ($conn , "INSERT INTO [dbo].[bank_link] ([n_aka])  VALUES ('$su2')");
     sqlsrv_query ($conn , "INSERT INTO [dbo].[fd] ([acc_no],[acc_no1]) VALUES ('$su2','$su2')");
    
      
      $sql2 = "INSERT INTO [jim].[dbo].[fd_trans]
           ([ic]
           ,[roc]
           ,[acc_no]
           ,[inv_amount]
           ,[datefd]
           ,[timefd]
           ,[inv_period]
           ,[dividen_rate]
           ,[amount_mat]
           ,[withdraw]
           ,[balance])
     VALUES
           ('$su0'
           ,'$su1'
           ,'$su2'
           ,'$su3'
           ,'$su4'
           ,'$su5'
           ,'$su6'
           ,'$su7'
           ,'$su8'
           ,'$su9'
           ,'$su10')";
      $stmt2 = sqlsrv_query ($conn , $sql2);
      $c = $c + 1;
    }}
    if($_POST['ty'] == "xls") {


    $file = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];

    require_once 'src/excel_reader2.php';
    $data = new Spreadsheet_Excel_Reader();
    $data->setOutputEncoding('CP1251');
    $data->read($file);

    $c = 0;

    for ($x = 2; $x <= count($data->sheets[0]["cells"]); $x++) {

      $su1 = $data->sheets[0]["cells"][$x][1];//ref_no
      $su2 = $data->sheets[0]["cells"][$x][2];//rep_ins
      $su3 = $data->sheets[0]["cells"][$x][3];//rep_typr1
      $su4 = $data->sheets[0]["cells"][$x][4];//company
      $su5 = $data->sheets[0]["cells"][$x][5];//rep_typr
      $su6 = $data->sheets[0]["cells"][$x][6];//name
      $su7 = $data->sheets[0]["cells"][$x][7];//n_ic
      $su8 = $data->sheets[0]["cells"][$x][8];//o_ic
      $su9 = $data->sheets[0]["cells"][$x][9];//bis_no
      $su10 = $data->sheets[0]["cells"][$x][10];//acc_no
      $su11 = $data->sheets[0]["cells"][$x][11];//acc_ty

     sqlsrv_query ($conn , "INSERT INTO [dbo].[myr_fd] ([myr]) VALUES ('$su4')");
     sqlsrv_query ($conn , "INSERT INTO [dbo].[date_chart_fd] ([date_tran]) VALUES ('$su5')");
     sqlsrv_query ($conn , "INSERT INTO [dbo].[bank_link] ([n_aka])  VALUES ('$su3')");
     sqlsrv_query ($conn , "INSERT INTO [dbo].[fd] ([acc_no],[acc_no1]) VALUES ('$su3','$su3')");
    
      
      $sql2 = "INSERT INTO [jim].[dbo].[fd_trans]
           ([ic]
           ,[roc]
           ,[acc_no]
           ,[inv_amount]
           ,[datefd]
           ,[timefd]
           ,[inv_period]
           ,[dividen_rate]
           ,[amount_mat]
           ,[withdraw]
           ,[balance])
     VALUES
           ('$su1'
           ,'$su2'
           ,'$su3'
           ,'$su4'
           ,'$su5'
           ,'$su6'
           ,'$su7'
           ,'$su8'
           ,'$su9'
           ,'$su10'
           ,'$su11')";
      $stmt2 = sqlsrv_query ($conn , $sql2);
      $c = $c + 1;
    }}
    if($_POST['ty'] == "txt") {


    $file1 = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];

    $file = fopen($file1,"r");
    fgets($file);
    $c = 0;
    while (!feof($file)){

      $content = fgets($file);
      $carray = explode("|", $content);
      list($su0,$su1,$su2,$su3,$su4,$su5,$su6,$su7,$su8,$su9,$su10) = $carray;

     sqlsrv_query ($conn , "INSERT INTO [dbo].[myr_fd] ([myr]) VALUES ('$su3')");
     sqlsrv_query ($conn , "INSERT INTO [dbo].[date_chart_fd] ([date_tran]) VALUES ('$su4')");
     sqlsrv_query ($conn , "INSERT INTO [dbo].[bank_link] ([n_aka])  VALUES ('$su2')");
     sqlsrv_query ($conn , "INSERT INTO [dbo].[fd] ([acc_no],[acc_no1]) VALUES ('$su2','$su2')");
      
      $stmt2 = sqlsrv_query($conn,"INSERT INTO [jim].[dbo].[fd_trans]
           ([ic]
           ,[roc]
           ,[acc_no]
           ,[inv_amount]
           ,[datefd]
           ,[timefd]
           ,[inv_period]
           ,[dividen_rate]
           ,[amount_mat]
           ,[withdraw]
           ,[balance])
     VALUES
           ('$su0'
           ,'$su1'
           ,'$su2'
           ,'$su3'
           ,'$su4'
           ,'$su5'
           ,'$su6'
           ,'$su7'
           ,'$su8'
           ,'$su9'
           ,'$su10')");
      $c = $c + 1;
  }}
    
      if($stmt2){
        echo "You database has imported successfully. You have inserted ". $c ." records<BR>";
      }else{
        echo "Sorry! There is some problem.<br>";
        //echo "You database has imported successfully. You have inserted ". $c ." records<BR>";
      }

$editor = $fulname;
$transtype = "Import File $filename";
  
sqlsrv_query( $conn, "INSERT INTO [jim].[dbo].[log] ([ttype],[datee],[userk],[ip]) VALUES ('$transtype',CURRENT_TIMESTAMP,'$editor','$ip')" );
    }//invesment

    //tender start
    if($_POST['im'] == "td") {
    if($_POST['ty'] == "csv") {
    $file = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];
    $handle = fopen($file, "r");
    $c = 0;

    fgetcsv($handle);
    while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
    {

      for ($m=0; $m <= 10; $m++) { 
        ${'su'.$m} = $filesop[$m];
      }

     sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[com_pany_link] ([c_name],[no_c]) VALUES ('$su6','$su7')");
     sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[tender_link] ([c_no_from],[c_no_to]) VALUES ('$su7','$su7')");
    
      
      $sql2 = "INSERT INTO [dbo].[tender]
           ([td_name]
           ,[td_no]
           ,[td_type]
           ,[td_minister]
           ,[td_agency]
           ,[td_comp_name]
           ,[td_comp_no]
           ,[td_mof_no]
           ,[td_price]
           ,[td_date_create]
           ,[td_createby])
     VALUES
           ('$su1'
           ,'$su2'
           ,'$su3'
           ,'$su4'
           ,'$su5'
           ,'$su6'
           ,'$su7'
           ,'$su8'
           ,'$su10'
           ,''
           ,'')";
      $stmt2 = sqlsrv_query ($conn , $sql2);
      $c = $c + 1;
    }}
    if($_POST['ty'] == "xls") {


    $file = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];

    require_once 'src/excel_reader2.php';
    $data = new Spreadsheet_Excel_Reader();
    $data->setOutputEncoding('CP1251');
    $data->read($file);

    $c = 0;

    for ($x = 2; $x <= count($data->sheets[0]["cells"]); $x++) {

      for ($m=1; $m <= 11; $m++) { 
        ${'su'.$m} = $data->sheets[0]["cells"][$x][$m];//ref_no
      }

     sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[com_pany_link] ([c_name],[no_c]) VALUES ('$su7','$su8')");
     sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[tender_link] ([c_no_from],[c_no_to]) VALUES ('$su8','$su8')");

     $sql2 = "INSERT INTO [dbo].[tender]
           ([td_name]
           ,[td_no]
           ,[td_type]
           ,[td_minister]
           ,[td_agency]
           ,[td_comp_name]
           ,[td_comp_no]
           ,[td_mof_no]
           ,[td_price]
           ,[td_date_create]
           ,[td_createby])
     VALUES
           ('$su2'
           ,'$su3'
           ,'$su4'
           ,'$su5'
           ,'$su6'
           ,'$su7'
           ,'$su8'
           ,'$su9'
           ,'$su11'
           ,''
           ,'')";
      $stmt2 = sqlsrv_query ($conn , $sql2);
      $c = $c + 1;
    }}
    if($_POST['ty'] == "txt") {


    $file1 = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];

    $file = fopen($file1,"r");
    fgets($file);
    $c = 0;
    while (!feof($file)){

      $content = fgets($file);
      $carray = explode("|", $content);
      list($su0,$su1,$su2,$su3,$su4,$su5,$su6,$su7,$su8,$su9,$su10) = $carray;

     sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[com_pany_link] ([c_name],[no_c]) VALUES ($su6,$su7)");
      
      $stmt2 = sqlsrv_query($conn,"INSERT INTO [dbo].[tender]
           ([td_name]
           ,[td_no]
           ,[td_type]
           ,[td_minister]
           ,[td_agency]
           ,[td_comp_name]
           ,[td_comp_no]
           ,[td_mof_no]
           ,[td_price]
           ,[td_date_create]
           ,[td_createby])
     VALUES
           ('$su1'
           ,'$su2'
           ,'$su3'
           ,'$su4'
           ,'$su5'
           ,'$su6'
           ,'$su7'
           ,'$su8'
           ,''
           ,'')");
      $c = $c + 1;
  }}
    
      if($stmt2){
        echo "You database has imported successfully. You have inserted ". $c ." records<BR>";
      }else{
        echo "Sorry! There is some problem.<br>";
        //echo "You database has imported successfully. You have inserted ". $c ." records<BR>";
      }

$editor = $fulname;
$transtype = "Import File $filename";
  
sqlsrv_query( $conn, "INSERT INTO [jim].[dbo].[log] ([ttype],[datee],[userk],[ip]) VALUES ('$transtype',CURRENT_TIMESTAMP,'$editor','$ip')" );
    }//tender end

    //GST start
    if($_POST['im'] == "gst") {
    if($_POST['ty'] == "csv") {
    $file = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];
    $handle = fopen($file, "r");
    $c = 0;

    fgetcsv($handle);
    while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
    {

      for ($m=0; $m <= 18; $m++) { 
        ${'su'.$m} = $filesop[$m];
      }

     sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[com_pany_link] ([c_name],[no_c]) VALUES ('$su0','$su1')");
     sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[gst_link] ([c_no_from],[c_no_to]) VALUES ('$su1','$su1')");
    
      
      $sql2 = "INSERT INTO [jim].[dbo].[gst]
           ([acount_name]
           ,[company_no]
           ,[account_id]
           ,[return_fp]
           ,[standard_ra]
           ,[standard_rs]
           ,[input_t]
           ,[output_t]
           ,[amount_c]
           ,[amount_p]
           ,[bad_dr]
           ,[bad_dre]
           ,[capital_ga]
           ,[exempt_s]
           ,[export_s]
           ,[goods_i]
           ,[local_s]
           ,[gst_rs]
           ,[suspended_g])
     VALUES
           ('$su0'
           ,'$su1'
           ,'$su2'
           ,'$su3'
           ,'$su4'
           ,'$su5'
           ,'$su6'
           ,'$su7'
           ,'$su8'
           ,'$su9'
           ,'$su10'
           ,'$su11'
           ,'$su12'
           ,'$su13'
           ,'$su14'
           ,'$su15'
           ,'$su16'
           ,'$su17'
           ,'$su18')";
      $stmt2 = sqlsrv_query ($conn , $sql2);
      $c = $c + 1;
      
    }}
    if($_POST['ty'] == "xls") {



    //$file = "upload/".$eachfile['filename'];
    //$filename = $eachfile['filename'];
    $file = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];

    require_once 'src/excel_reader2.php';
    $data = new Spreadsheet_Excel_Reader();
    $data->setOutputEncoding('CP1251');
    $data->read($file);

    $c = 0;

    for ($x = 2; $x <= count($data->sheets[0]["cells"]); $x++) {

      for ($m=1; $m <= 19; $m++) { 
        ${'su'.$m} = $data->sheets[0]["cells"][$x][$m];//ref_no
      }

     sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[com_pany_link] ([c_name],[no_c]) VALUES ('$su1','$su2')");
     sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[gst_link] ([c_no_from],[c_no_to]) VALUES ('$su2','$su2')");

     $sql2 = "INSERT INTO [jim].[dbo].[gst]
           ([acount_name]
           ,[company_no]
           ,[account_id]
           ,[return_fp]
           ,[standard_ra]
           ,[standard_rs]
           ,[input_t]
           ,[output_t]
           ,[amount_c]
           ,[amount_p]
           ,[bad_dr]
           ,[bad_dre]
           ,[capital_ga]
           ,[exempt_s]
           ,[export_s]
           ,[goods_i]
           ,[local_s]
           ,[gst_rs]
           ,[suspended_g])
     VALUES
           ('$su1'
           ,'$su2'
           ,'$su3'
           ,'$su4'
           ,'$su5'
           ,'$su6'
           ,'$su7'
           ,'$su8'
           ,'$su9'
           ,'$su10'
           ,'$su11'
           ,'$su12'
           ,'$su13'
           ,'$su14'
           ,'$su15'
           ,'$su16'
           ,'$su17'
           ,'$su18'
           ,'$su19')";
      $stmt2 = sqlsrv_query ($conn , $sql2);
      $c = $c + 1;
    }}
    if($_POST['ty'] == "txt") {


    $file1 = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];

    $file = fopen($file1,"r");
    fgets($file);
    $c = 0;
    while (!feof($file)){

      $content = fgets($file);
      $carray = explode("|", $content);
      list($su0,$su1,$su2,$su3,$su4,$su5,$su6,$su7,$su8,$su9,$su10,$su11,$su12,$su13,$su14,$su15,$su16,$su17,$su18) = $carray;

     sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[com_pany_link] ([c_name],[no_c]) VALUES ($su0,$su1)");
     sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[gst_link] ([c_no_from],[c_no_to]) VALUES ('$su2','$su1')");
      
      $stmt2 = sqlsrv_query($conn,"INSERT INTO [jim].[dbo].[gst]
           ([acount_name]
           ,[company_no]
           ,[account_id]
           ,[return_fp]
           ,[standard_ra]
           ,[standard_rs]
           ,[input_t]
           ,[output_t]
           ,[amount_c]
           ,[amount_p]
           ,[bad_dr]
           ,[bad_dre]
           ,[capital_ga]
           ,[exempt_s]
           ,[export_s]
           ,[goods_i]
           ,[local_s]
           ,[gst_rs]
           ,[suspended_g])
     VALUES
           ('$su0'
           ,'$su1'
           ,'$su2'
           ,'$su3'
           ,'$su4'
           ,'$su5'
           ,'$su6'
           ,'$su7'
           ,'$su8'
           ,'$su9'
           ,'$su10'
           ,'$su11'
           ,'$su12'
           ,'$su13'
           ,'$su14'
           ,'$su15'
           ,'$su16'
           ,'$su17'
           ,'$su18')");
      $c = $c + 1;
  }}
    
      if($stmt2){
        echo "You database has imported successfully. You have inserted ". $c ." records<BR>";
      }else{
        echo "Sorry! There is some problem.<br>";
        //echo "You database has imported successfully. You have inserted ". $c ." records<BR>";
      }

$editor = $fulname;
$transtype = "Import File $filename";
  
sqlsrv_query( $conn, "INSERT INTO [jim].[dbo].[log] ([ttype],[datee],[userk],[ip]) VALUES ('$transtype',CURRENT_TIMESTAMP,'$editor','$ip')" );
    }//GST end

    //profile start
    if($_POST['im'] == "pr") {

    if($_POST['ty'] == "csv") {
    $file = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];
    $handle = fopen($file, "r");
    $c = 0;

    fgetcsv($handle);
    while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
    {
      $sql5 = "SELECT COUNT(*) FROM [jim].[dbo].[profile]";
    $stmt5 = sqlsrv_query( $conn, $sql5 );
    if( $stmt5 === false) {}
    while( $row64 = sqlsrv_fetch_array( $stmt5, SQLSRV_FETCH_NUMERIC) ) {
    $id5 = $row64[0];
    $id5++;
  }
      for ($m=0; $m <= 8; $m++) { 
        ${'su'.$m} = $filesop[$m];
      }

     $pro_id = "PRO/".$datemy."-".$id5;
    
      
      $sql2 = "INSERT INTO [jim].[dbo].[profile]
                ([id_fir]
                  ,[id_profil]
              ,[firstname])
            VALUES
                  ('DUMPDATA','$pro_id','$su0')";

      $stmt2 = sqlsrv_query ($conn , $sql2);
      sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[transac] ([profil_id]) VALUES ('$pro_id')");
      sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[passport_link] ([nomnew],[firstname]) VALUES ('$su5','$su0')");
      sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[passport] ([id_profil],[nomnew],[firstname]) VALUES ('$pro_id','$su5','$su0')");
      sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[ic_link] ([nom]) VALUES ('$su2')");
      sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[ic] ([id_fir],[id_profil],[nom]) VALUES ('DUMPDATA','$pro_id','$su2')");
      $c = $c + 1;
    }}
    if($_POST['ty'] == "xls") {



    //$file = "upload/".$eachfile['filename'];
    //$filename = $eachfile['filename'];
    $file = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];

    require_once 'src/excel_reader2.php';
    $data = new Spreadsheet_Excel_Reader();
    $data->setOutputEncoding('CP1251');
    $data->read($file);

    $c = 0;

    for ($x = 2; $x <= count($data->sheets[0]["cells"]); $x++) {

      $sql5 = "SELECT COUNT(*) FROM [jim].[dbo].[profile]";
    $stmt5 = sqlsrv_query( $conn, $sql5 );
    if( $stmt5 === false) {}
    while( $row64 = sqlsrv_fetch_array( $stmt5, SQLSRV_FETCH_NUMERIC) ) {
    $id5 = $row64[0];
    $id5++;
  }
      for ($m=1; $m <= 9; $m++) { 
        ${'su'.$m} = $data->sheets[0]["cells"][$x][$m];//ref_no
      }

     $pro_id = "PRO/".$datemy."-".$id5;


     $sql2 = "INSERT INTO [jim].[dbo].[profile]
                ([id_fir]
                  ,[id_profil]
              ,[firstname])
            VALUES
                  ('DUMPDATA','$pro_id','$su1')";
      $stmt2 = sqlsrv_query ($conn , $sql2);

      sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[transac] ([profil_id]) VALUES ('$pro_id')");
      sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[passport_link] ([nomnew],[firstname]) VALUES ('$su6','$su1')");
      sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[passport] ([id_profil],[nomnew],[firstname]) VALUES ('$pro_id','$su6','$su1')");
      sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[ic_link] ([nom]) VALUES ('$su3')");
      sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[ic] ([id_fir],[id_profil],[nom]) VALUES ('DUMPDATA','$pro_id','$su3')");
      $c = $c + 1;
    }}
    if($_POST['ty'] == "txt") {


    $file1 = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];

    $file = fopen($file1,"r");
    fgets($file);
    $c = 0;
    while (!feof($file)){

      $content = fgets($file);
      $carray = explode("|", $content);
      list($su0,$su1,$su2,$su3,$su4,$su5,$su6,$su7,$su8) = $carray;

      
      $sql5 = "SELECT COUNT(*) FROM [jim].[dbo].[profile]";
    $stmt5 = sqlsrv_query( $conn, $sql5 );
    if( $stmt5 === false) {}
    while( $row64 = sqlsrv_fetch_array( $stmt5, SQLSRV_FETCH_NUMERIC) ) {
    $id5 = $row64[0];
    $id5++;
  }
     $pro_id = "PRO/".$datemy."-".$id5;
      $stmt2 = sqlsrv_query($conn,"INSERT INTO [jim].[dbo].[profile]
                ([id_fir]
                  ,[id_profil]
              ,[firstname])
            VALUES
                  ('DUMPDATA','$pro_id','$su0')");
      sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[transac] ([profil_id]) VALUES ('$pro_id')");
      sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[passport_link] ([nomnew],[firstname]) VALUES ('$su5','$su0')");
      sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[passport] ([id_profil],[nomnew],[firstname]) VALUES ('$pro_id','$su5','$su0')");
      sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[ic_link] ([nom]) VALUES ('$su2')");
      sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[ic] ([id_fir],[id_profil],[nom]) VALUES ('DUMPDATA','$pro_id','$su2')");
      $c = $c + 1;
  }}
    
      if($stmt2){
        echo "You database has imported successfully. You have inserted ". $c ." records<BR>";
      }else{
        echo "Sorry! There is some problem.<br>";
        //echo "You database has imported successfully. You have inserted ". $c ." records<BR>";
      }

$editor = $fulname;
$transtype = "Import File $filename";
  
sqlsrv_query( $conn, "INSERT INTO [jim].[dbo].[log] ([ttype],[datee],[userk],[ip]) VALUES ('$transtype',CURRENT_TIMESTAMP,'$editor','$ip')" );
    }//profile end


    //ssm start
    if($_POST['im'] == "ssm") {

    if($_POST['ty'] == "csv") {
    $file = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];
    $handle = fopen($file, "r");
    $c = 0;

    fgetcsv($handle);
    while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
    {

      for ($m=0; $m <= 4; $m++) { 
        ${'su'.$m} = $filesop[$m];
      }
    
      $stmt7 = sqlsrv_query ($conn ,"SELECT * FROM [jim].[dbo].[com_pany_link] WHERE no_c = '$su0'");
      $r7 = sqlsrv_fetch_array($stmt7);
      if($r7['id'] == ""){

        $sql2 = "INSERT INTO [jim].[dbo].[com_pany_link]
                ([c_name]
            ,[no_c])
          VALUES
                ('$su1','$su0')";

        $stmt2 = sqlsrv_query ($conn , $sql2);
      }      

      $stmt8 = sqlsrv_query ($conn ,"SELECT * FROM [jim].[dbo].[ic] WHERE nom = '$su3'");
      $p8 = sqlsrv_fetch_array($stmt8);

      $stmt8 = sqlsrv_query ($conn ,"SELECT * FROM [jim].[dbo].[com_pany] WHERE no_c = '$su0'");
      $r8 = sqlsrv_fetch_array($stmt8);
      if($r8['id'] != ""){
        sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[com_pany] ([id_profil],[c_name],[no_c],[mili_s]) VALUES ('$p8[id_profil]','$su1','$su0','$su4')");
      }

        $c = $c + 1;
    }
  }

    if($_POST['ty'] == "xls") {

    //$file = "upload/".$eachfile['filename'];
    //$filename = $eachfile['filename'];
    $file = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];

    require_once 'src/excel_reader2.php';
    $data = new Spreadsheet_Excel_Reader();
    $data->setOutputEncoding('CP1251');
    $data->read($file);

    $c = 0;

    for ($x = 2; $x <= count($data->sheets[0]["cells"]); $x++) {

      for ($m=1; $m <= 5; $m++) { 
        ${'su'.$m} = $data->sheets[0]["cells"][$x][$m];//ref_no
      }
      //echo "SELECT * FROM [jim].[dbo].[com_pany_link] WHERE no_c = '$su1'";
      $stmt7 = sqlsrv_query ($conn ,"SELECT * FROM [jim].[dbo].[com_pany_link] WHERE no_c = '$su1'");
      $r7 = sqlsrv_fetch_array($stmt7);
      if($r7['id'] == ""){

        $sql2 = "INSERT INTO [jim].[dbo].[com_pany_link]
                ([c_name]
            ,[no_c])
          VALUES
                ('$su2','$su1')";

     // echo "INSERT INTO [jim].[dbo].[com_pany] ([c_name],[no_c]) VALUES ('$su2','$su1')";

        $stmt2 = sqlsrv_query ($conn , $sql2);
      }      

      //echo "SELECT * FROM [jim].[dbo].[ic] WHERE nom = '$su4'";
      $stmt8 = sqlsrv_query ($conn ,"SELECT * FROM [jim].[dbo].[ic] WHERE nom = '$su4'");
      $p8 = sqlsrv_fetch_array($stmt8);

      $stmt8 = sqlsrv_query ($conn ,"SELECT * FROM [jim].[dbo].[com_pany] WHERE no_c = '$su1'");
      $r8 = sqlsrv_fetch_array($stmt8);
      if($r8['id'] == ""){
        //echo "INSERT INTO [jim].[dbo].[com_pany] ([id_profil],[c_name],[no_c],[mili_s]) VALUES ('$p8[id_profil]','$su2','$su1','')";
        sqlsrv_query ($conn ,"INSERT INTO [jim].[dbo].[com_pany] ([id_profil],[c_name],[no_c],[mili_s]) VALUES ('$p8[id_profil]','$su2','$su1','$su5')");
      }

        $c = $c + 1;
    }
  }
    if($_POST['ty'] == "txt") {

    $file1 = "upload/".$eachfile['filename'];
    $filename = $eachfile['filename'];

    $file = fopen($file1,"r");
    fgets($file);
    $c = 0;
    while (!feof($file)){

      $content = fgets($file);
      $carray = explode("|", $content);
      list($su0,$su1,$su2,$su3,$su4) = $carray;


    
      $stmt7 = sqlsrv_query ($conn ,"SELECT * FROM [jim].[dbo].[com_pany_link] WHERE no_c = '$su0'");
      $r7 = sqlsrv_fetch_array($stmt7);
      if($r7['id'] == ""){

        $sql2 = "INSERT INTO [jim].[dbo].[com_pany_link]
                ([c_name]
            ,[no_c])
          VALUES
                ('$su1','$su0')";

        $stmt2 = sqlsrv_query ($conn , $sql2);
      }      
      $stmt8 = sqlsrv_query ($conn ,"SELECT * FROM [jim].[dbo].[ic] WHERE nom = '$su3'");
      $p8 = sqlsrv_fetch_array($stmt8);

      $stmt8 = sqlsrv_query ($conn ,"SELECT * FROM [jim].[dbo].[com_pany] WHERE no_c = '$su0'");
      $r8 = sqlsrv_fetch_array($stmt8);
      if($r8['id'] != ""){
        sqlsrv_query ($conn , "INSERT INTO [jim].[dbo].[com_pany] ([id_profil],[c_name],[no_c],[mili_s]) VALUES ('$p8[id_profil]','$su1','$su0','$su4')");
      }

        $c = $c + 1;
    }
  }
    
      if($stmt2){
        echo "You database has imported successfully. You have inserted ". $c ." records<BR>";
      }else{
        //echo "Sorry! There is some problem.<br>";
        echo "You database has imported successfully. You have inserted ". $c ." records<BR>";
      }

$editor = $fulname;
$transtype = "Import File $filename";
  
sqlsrv_query( $conn, "INSERT INTO [jim].[dbo].[log] ([ttype],[datee],[userk],[ip]) VALUES ('$transtype',CURRENT_TIMESTAMP,'$editor','$ip')" );
    }//SSM end
    }
    sqlsrv_query($conn, "DELETE FROM [jim].[dbo].[attach] WHERE user_id = '".$_COOKIE['id']."'");

    echo "<script> document.getElementById(\"loader\").style.display = \"none\"; </script>";
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
</section>
<?php include 'footer.php'; ?>
</div>
</div>
<?php include 'include/js.php'; ?>
</body>
</html>