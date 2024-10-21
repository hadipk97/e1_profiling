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
$editor = $r['id'];
}
}

if (isset($_POST['delete_fir'])) {
$id = $_POST['id'];

$sql = "DELETE FROM [jim].[dbo].[admin] WHERE id = '$id'";

$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

$transtype = "Delete Fir : $id";
include "log.php";

header("Location: menu.php");
}

if (isset($_POST['delete_user'])) {

$id = $_POST['id'];

$sql = "DELETE FROM [jim].[dbo].[login] WHERE id = '$id'";
$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

$transtype = "Delete User : $id";
include "log.php";

header("Location: user.php");
}

if (isset($_POST['delete_diari'])) {

$id_fir = $_POST['id_fir'];

$sql = "DELETE FROM [jim].[dbo].[diari] WHERE id_fir = '$id_fir'";

$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

$transtype = "Delete diari : $id_fir";
include "log.php";


header("Location: diari.php");
}	

if (isset($_POST['delete_diari1'])) {

$id = $_POST['id'];
$_SESSION['id_fir'] = $_POST['id_fir'];

$sql = "DELETE FROM [jim].[dbo].[diari] WHERE id = '$id'";
$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

$transtype = "Delete diari : $id";
include "log.php";

header("Location: diari_fir.php");
}


if (isset($_POST['delete_pro'])) {
  # code...
$id = $_POST['id'];
$_SESSION['id_fir']  = $_POST['id_fir'];

$sql = "DELETE FROM [jim].[dbo].[transac] WHERE profil_id = '$_POST[id_profil]'";
$stmt = sqlsrv_query( $conn, $sql );

$sql = "DELETE FROM [jim].[dbo].[profile] WHERE id = $id";
$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

$transtype = "Delete Profil : $id";
include "log.php";

header("Location : pro.php");
}

if (isset($_POST['delete_physical'])) {

$_SESSION['id_profil'] = $_POST['id_profil'];
$_SESSION['id_fir'] = $_POST['id_fir'];
$id = $_POST['id'];

$sql = "DELETE FROM [jim].[dbo].[physical] WHERE id = '$id'";
$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

$transtype = "Delete Physical : $id";
include "log.php";

header("Location : physical.php");
}		

if (isset($_POST['delete_bank'])) {

$_SESSION['id_profil'] = $_POST['id_profil'];
$_SESSION['id_fir'] = $_POST['id_fir'];
$id = $_POST['id'];

$sql = "DELETE FROM [jim].[dbo].[bank] WHERE id = '$id'";
$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

$transtype = "Delete Bank : $id";
include "log.php";

header("Location : bank.php");
}

if (isset($_POST['delete_company'])) {

$_SESSION['id_profil'] = $_POST['id_profil'];
$_SESSION['id_fir'] = $_POST['id_fir'];
$id = $_POST['id'];

$sql = "DELETE FROM [jim].[dbo].[com_pany] WHERE id = '$id'";
$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

$transtype = "Delete Company : $id";
include "log.php";

header("Location : company.php");
}	

if (isset($_POST['delete_house'])) {

$_SESSION['id_profil'] = $_POST['id_profil'];
$_SESSION['id_fir'] = $_POST['id_fir'];
$id = $_POST['id'];

$sql = "DELETE FROM [jim].[dbo].[house] WHERE id = '$id'";
$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

$transtype = "Delete House : $id";
include "log.php";

header("Location : house.php");
}	

if (isset($_POST['delete_smedia'])) {

$_SESSION['id_profil'] = $_POST['id_profil'];
$_SESSION['id_fir'] = $_POST['id_fir'];
$id = $_POST['id'];

$sql = "DELETE FROM [jim].[dbo].[msocial] WHERE id = '$id'";
$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

$transtype = "Delete Social Media : $id";
include "log.php";

header("Location : smedia.php");
}		

if (isset($_POST['delete_ic'])) {

$_SESSION['id_profil'] = $_POST['id_profil'];
$_SESSION['id_fir'] = $_POST['id_fir'];
$id = $_POST['id'];

$sql = "DELETE FROM [jim].[dbo].[ic] WHERE id = '$id'";
$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

$transtype = "Delete IC : $id";
include "log.php";

header("Location : identitycard.php");
}	

if (isset($_POST['delete_passport'])) {

$_SESSION['id_profil'] = $_POST['id_profil'];
$_SESSION['id_fir'] = $_POST['id_fir'];
$id = $_POST['id'];

$sql = "DELETE FROM [jim].[dbo].[passport] WHERE id = '$id'";
$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

$transtype = "Delete Passport : $id";
include "log.php";

header("Location : passport.php");
}		

if (isset($_POST['delete_dl'])) {

$_SESSION['id_profil'] = $_POST['id_profil'];
$_SESSION['id_fir'] = $_POST['id_fir'];
$id = $_POST['id'];

$sql = "DELETE FROM [jim].[dbo].[drivelicense] WHERE id = '$id'";
$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

$transtype = "Delete Driving License : $id";
include "log.php";

header("Location : drivinglicense.php");
}	

if (isset($_POST['delete_transport'])) {

$_SESSION['id_profil'] = $_POST['id_profil'];
$_SESSION['id_fir'] = $_POST['id_fir'];
$id = $_POST['id'];

$sql = "DELETE FROM [jim].[dbo].[transportation] WHERE id = '$id'";
$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

$transtype = "Delete Transport : $id";
include "log.php";

header("Location : transportation.php");
}	

if (isset($_POST['delete_mobile'])) {

$_SESSION['id_profil'] = $_POST['id_profil'];
$_SESSION['id_fir'] = $_POST['id_fir'];
$id = $_POST['id'];

$sql = "DELETE FROM [jim].[dbo].[mobileno] WHERE id = '$id'";
$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

$transtype = "Delete MObile : $id";
include "log.php";

header("Location : mobileno.php");
}	

if (isset($_POST['delete_team'])) {

$_SESSION['id_fir'] = $_POST['id_fir'];
$id = $_POST['id'];

$sql = "DELETE FROM [jim].[dbo].[team] WHERE id = '$id'";
$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

$transtype = "Delete Team : $id";
include "log.php";

header("Location : c_team.php");
}	

if (isset($_POST['dele_atc'])) {

$sql = "DELETE FROM [jim].[dbo].[lampiran] WHERE id = '$_POST[id]'";
$stmt = sqlsrv_query( $conn, $sql );

$transtype = "Delete Attch : $_POST[id]";
include "log.php";

header("Location : diari_k.php");
}		

if (isset($_POST['delete_query'])) {

$sql = "DELETE FROM [jim].[dbo].[query_mgr] WHERE id = '$_POST[id]'";
$stmt = sqlsrv_query( $conn, $sql );

$transtype = "Delete Query : $_POST[id]";
include "log.php";

header("Location : query.php");
}

if (isset($_POST['remove_all_trans'])) {

sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[transaction]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[myr]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[date_chart]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[time_chart]" );

$transtype = "Delete All Transaction";
include "log.php";

header("Location : view_e.php");
}

if (isset($_POST['remove_all_invest'])) {

sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[invest]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[invest_link]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[myr_iv]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[date_chart_iv]" );

$transtype = "Delete All Investment";
include "log.php";

header("Location : view_e.php");
}	

if (isset($_POST['remove_all_ledger'])) {

sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[ledger]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[ledger_link]" );
//sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[myr_iv]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[date_chart_lg]" );

$transtype = "Delete All Ledger";
include "log.php";

header("Location : view_e.php");
}	

if (isset($_POST['remove_all_fd'])) {

sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[fd]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[fd_trans]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[myr_fd]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[date_chart_fd]" );

$transtype = "Delete All Fix Deposit";
include "log.php";

header("Location : view_e.php");
}

if (isset($_POST['remove_all_tender'])) {

sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[tender]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[tender_link]" );

$transtype = "Delete All Tender";
include "log.php";

header("Location : view_e.php");
}	

if (isset($_POST['remove_all_gst'])) {

sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[gst]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[gst_link]" );

$transtype = "Delete All Tender";
include "log.php";

header("Location : view_e.php");
}

if (isset($_GET['act']) == "remove_attch") {

	sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[attach] WHERE id = '".$_GET['id']."'" );

	header("Location : import_e.php");
}

?>