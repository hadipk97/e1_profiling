<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
 <?php
session_start();
if(isset($_COOKIE['id'])){
$editor = $_COOKIE['id'];
}

include 'include/cache.php';
include ('include/dbconn.php');

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
  $ip = $_SERVER['REMOTE_ADDR'];
}

if (isset($_POST['daftar_user'])) {
	# code...
$n_penuh = $_POST['n_penuh'];
$userN= $_POST['userN'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$jwt = $_POST['jwt'];
$ngri = $_POST['ngri'];
$j_user = $_POST['j_user'];
$avatar = $_POST['avatar'];
$pass_e = md5($pass);

$sql = ("INSERT INTO [jim].[dbo].[login] ([username],[password],[role],[email],[fulname],[tel],[jwt],[ngri],[avatar]) VALUES ('$userN','$pass_e','$j_user','$email','$n_penuh','$tel','$jwt','$ngri','$avatar')");
$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

$sql = ("INSERT INTO [jim].[dbo].[log] ([type],[tdate],[usr],[ip])
     VALUES ('Daftar Pengguna $n_penuh',CURRENT_TIMESTAMP,'$editor','$ip')");
$stmt = sqlsrv_query( $conn, $sql );

header("Location : user.php");
}

if (isset($_POST['update_user'])) {

$pass = $_POST['pass'];
if ($pass == 0) {

$id = $_POST['id'];
$n_penuh = $_POST['n_penuh'];
$userN= $_POST['userN'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$jwt = $_POST['jwt'];
$ngri = $_POST['ngri'];
$j_user = $_POST['j_user'];
$avatar = $_POST['avatar'];

$sql = ("UPDATE [dbo].[login]
   SET [username] = '$userN'
      ,[role] = '$j_user'
      ,[email] = '$email'
      ,[fulname] = '$n_penuh'
      ,[tel] = '$tel'
      ,[jwt] = '$jwt'
      ,[ngri] = '$ngri'
      ,[avatar] = '$avatar'
 WHERE id = '$id'");
$stmt = sqlsrv_query( $conn, $sql );

$sql = ("INSERT INTO [jim].[dbo].[log] ([type],[tdate],[usr],[ip])
     VALUES ('Kemaskini Pengguna $n_penuh',CURRENT_TIMESTAMP,'$editor','$ip')");
$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

header("Location : user.php");
}

else{
$id = $_POST['id'];
$n_penuh = $_POST['n_penuh'];
$userN= $_POST['userN'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$jwt = $_POST['jwt'];
$ngri = $_POST['ngri'];
$j_user = $_POST['j_user'];
$avatar = $_POST['avatar'];
$key = md5($pass);

$sql = ("UPDATE [dbo].[login]
   SET [username] = '$userN'
      ,[role] = '$j_user'
      ,[password] = '$key'
      ,[email] = '$email'
      ,[fulname] = '$n_penuh'
      ,[tel] = '$tel'
      ,[jwt] = '$jwt'
      ,[ngri] = '$ngri'
      ,[avatar] = '$avatar'
 WHERE id = '$id'");
$stmt = sqlsrv_query( $conn, $sql );

$sql = ("INSERT INTO [jim].[dbo].[log] ([type],[tdate],[usr],[ip])
     VALUES ('Kemaskini Pengguna $n_penuh',CURRENT_TIMESTAMP,'$editor','$ip')");
$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

header("Location : user.php");
}
}
?>