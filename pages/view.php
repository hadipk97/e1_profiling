<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
 <?php 
session_start();
include 'include/dbconn.php';
include 'include/cache.php';
if(isset($_COOKIE['id'])){
$last_link = $_SERVER['REQUEST_URI'];
setcookie ("last_link",$last_link,time()+ (10 * 365 * 24 * 60 * 60));
$fulln = $_COOKIE['id'];

$sql = "SELECT *  FROM [jim].[dbo].[login] WHERE id = '$fulln'";
$stmt = sqlsrv_query ($conn , $sql);
if( !$stmt) {
}
else{
$r = sqlsrv_fetch_array($stmt);
$fulname= $r['fulname'];
$role = $r['role'];
$ngri = $r['ngri'];
}
}

if (isset($_POST['papar_fir'])) {

$sql = "SELECT * FROM [jim].[dbo].[admin] WHERE id = '$_POST[id]'";
$stmt = sqlsrv_query ($conn , $sql);
if( !$stmt) {
}
else{
$r = sqlsrv_fetch_array($stmt);

$_SESSION['id_fir'] = $r['id_fir'];
$_SESSION['distribution'] = $r['distribution'];
$_SESSION['cs_status'] = $r['cs_status'];
$_SESSION['intell_no'] = $r['intell_no'];
$_SESSION['invest_no'] = $r['invest_no'];
$_SESSION['title'] = $r['title'];
$_SESSION['major'] = $r['major'];
$_SESSION['minor'] = $r['minor'];
$_SESSION['date_regist'] = $r['date_regist'];
$_SESSION['operator'] = $r['operator'];
$_SESSION['officer'] = $r['officer'];
$_SESSION['department'] = $r['department'];
$_SESSION['team'] = $r['team'];
$_SESSION['state'] = $r['state'];
$_SESSION['country'] = $r['country'];
$_SESSION['do']  = $r['do'];
$_SESSION['do_num'] = $r['do_num'];
$_SESSION['do_mail'] = $r['do_mail'];
$_SESSION['aho_officer'] = $r['aho_officer'];
$_SESSION['aho_num'] = $r['aho_num'];
$_SESSION['intell_team'] = $r['intell_team'];
$_SESSION['sfo_officer'] = $r['sfo_officer'];
$_SESSION['sfo_num'] = $r['sfo_num'];
$_SESSION['intell_start'] = $r['intell_start'];
$_SESSION['intell_end'] = $r['intell_end'];
$_SESSION['priority'] = $r['priority'];
$_SESSION['status'] = $r['status'];

header("Location : fir.php");
}
}

if (isset($_POST['papar_fir_carian'])) {
	# code...
$id_fir = $_POST['id_fir'];

$sql = "SELECT * FROM [jim].[dbo].[admin] WHERE id_fir = '$id_fir'";
$stmt = sqlsrv_query ($conn , $sql);
if( !$stmt) {
}
else{
$r = sqlsrv_fetch_array($stmt);

$_SESSION['id_fir'] = $r['id_fir'];
$_SESSION['distribution'] = $r['distribution'];
$_SESSION['cs_status'] = $r['cs_status'];
$_SESSION['intell_no'] = $r['intell_no'];
$_SESSION['invest_no'] = $r['invest_no'];
$_SESSION['title'] = $r['title'];
$_SESSION['major'] = $r['major'];
$_SESSION['minor'] = $r['minor'];
$_SESSION['date_regist'] = $r['date_regist'];
$_SESSION['operator'] = $r['operator'];
$_SESSION['officer'] = $r['officer'];
$_SESSION['department'] = $r['department'];
$_SESSION['team'] = $r['team'];
$_SESSION['state'] = $r['state'];
$_SESSION['country'] = $r['country'];
$_SESSION['do']  = $r['do'];
$_SESSION['do_num'] = $r['do_num'];
$_SESSION['do_mail'] = $r['do_mail'];
$_SESSION['aho_officer'] = $r['aho_officer'];
$_SESSION['aho_num'] = $r['aho_num'];
$_SESSION['intell_team'] = $r['intell_team'];
$_SESSION['sfo_officer'] = $r['sfo_officer'];
$_SESSION['sfo_num'] = $r['sfo_num'];
$_SESSION['intell_start'] = $r['intell_start'];
$_SESSION['intell_end'] = $r['intell_end'];
$_SESSION['priority'] = $r['priority'];
$_SESSION['status'] = $r['status'];

header("Location : carian_fir.php");
}
}

if (isset($_POST['cetak_fir'])) {
	# code...
$id = $_POST['id'];

$sql = "SELECT * FROM [jim].[dbo].[admin] WHERE id = '$id'";
$stmt = sqlsrv_query ($conn , $sql);
if( !$stmt) {
}
else{
$r = sqlsrv_fetch_array($stmt);

$_SESSION['id_fir'] = $r['id_fir'];
$_SESSION['distribution'] = $r['distribution'];
$_SESSION['cs_status'] = $r['cs_status'];
$_SESSION['intell_no'] = $r['intell_no'];
$_SESSION['invest_no'] = $r['invest_no'];
$_SESSION['title'] = $r['title'];
$_SESSION['major'] = $r['major'];
$_SESSION['minor'] = $r['minor'];
$_SESSION['date_regist'] = $r['date_regist'];
$_SESSION['operator'] = $r['operator'];
$_SESSION['officer'] = $r['officer'];
$_SESSION['department'] = $r['department'];
$_SESSION['team'] = $r['team'];
$_SESSION['state'] = $r['state'];
$_SESSION['country'] = $r['country'];
$_SESSION['do']  = $r['do'];
$_SESSION['do_num'] = $r['do_num'];
$_SESSION['do_mail'] = $r['do_mail'];
$_SESSION['aho_officer'] = $r['aho_officer'];
$_SESSION['aho_num'] = $r['aho_num'];
$_SESSION['intell_team'] = $r['intell_team'];
$_SESSION['sfo_officer'] = $r['sfo_officer'];
$_SESSION['sfo_num'] = $r['sfo_num'];
$_SESSION['intell_start'] = $r['intell_start'];
$_SESSION['intell_end'] = $r['intell_end'];
$_SESSION['priority'] = $r['priority'];
$_SESSION['status'] = $r['status'];

header("Location : cetak_fir.php");
}
}

if (isset($_POST['submit'])) {
	
$_SESSION['search'] = $_POST['search'];
  # code...
header("Location : carian1.php");
}

if (isset($_POST['kemaskini_fir'])) {
	# code...
$id = $_POST['id'];

$sql = "SELECT * FROM [jim].[dbo].[admin] WHERE id = '$id'";
$stmt = sqlsrv_query ($conn , $sql);
if( !$stmt) {
}
else{
$r = sqlsrv_fetch_array($stmt);

$_SESSION['id_fir'] = $r['id_fir'];
$_SESSION['distribution'] = $r['distribution'];
$_SESSION['cs_status'] = $r['cs_status'];
$_SESSION['intell_no'] = $r['intell_no'];
$_SESSION['invest_no'] = $r['invest_no'];
$_SESSION['title'] = $r['title'];
$_SESSION['major'] = $r['major'];
$_SESSION['minor'] = $r['minor'];
$_SESSION['date_regist'] = $r['date_regist'];
$_SESSION['operator'] = $r['operator'];
$_SESSION['officer'] = $r['officer'];
$_SESSION['department'] = $r['department'];
$_SESSION['team'] = $r['team'];
$_SESSION['state'] = $r['state'];
$_SESSION['country'] = $r['country'];
$_SESSION['do']  = $r['do'];
$_SESSION['do_num'] = $r['do_num'];
$_SESSION['do_mail'] = $r['do_mail'];
$_SESSION['aho_officer'] = $r['aho_officer'];
$_SESSION['aho_num'] = $r['aho_num'];
$_SESSION['intell_team'] = $r['intell_team'];
$_SESSION['sfo_officer'] = $r['sfo_officer'];
$_SESSION['sfo_num'] = $r['sfo_num'];
$_SESSION['intell_start'] = $r['intell_start'];
$_SESSION['intell_end'] = $r['intell_end'];
$_SESSION['priority'] = $r['priority'];
$_SESSION['ngri'] = $r['ngri'];
$_SESSION['edit'] = $r['edit'];


header("Location : kemas_fir.php");
}
}

if (isset($_POST['papar_maklumat_profil'])) {
	# code...
$_SESSION['id'] = $_POST['id'];
$_SESSION['id_fir'] = $_POST['id_fir'];
$_SESSION['firstname'] = $_POST['firstname'];
$_SESSION['id_profil'] = $_POST['id_profil'];

header("Location : fir_profil.php");
}
?>