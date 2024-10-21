<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
 <?php
session_start();
include("include/dbconn.php");
if(isset($_POST["submit"])){
$username = $_POST['username'];
$password = $_POST['password'];
$key=md5($password);


$sql = "SELECT * FROM [jim].[dbo].[login] WHERE username= '$username' AND password= '$key'";
$stmt = sqlsrv_query( $conn, $sql );
$row = sqlsrv_num_rows($stmt);
if($row == 0){
	echo "<script type='text/javascript'>alert('Salah Nama Pengguna atau Katalaluan');
	 window.location.href='index.php';</script>";
}

 

 while($r=  sqlsrv_fetch_array($stmt)){
	 
  $id  = $r["id"];
  $avatar  = $r["avatar"];
  if($r) {
      
      if(isset($_POST["remember"])) {
        setcookie ("member_login",$username,time()+ (10 * 365 * 24 * 60 * 60));
        setcookie ("password",$password,time()+ (10 * 365 * 24 * 60 * 60));
        setcookie ("id",$id,time()+ (10 * 365 * 24 * 60 * 60));
        setcookie ("avatar",$avatar,time()+ (10 * 365 * 24 * 60 * 60));
        header("Location: menu.php");
      } else {
          setcookie ("member_login","");
          setcookie ("password","$password");
          setcookie ("id","$id");
          setcookie ("avatar","$avatar");
        header("Location: menu.php");
      }
  
  /*$role=$r['role'];
  $_SESSION['role']=$role;
  if ($role==0){
   header("Location: menu.php");
   }
  else if($role==1){
   header("Location: acquisition.php");
   }
   else if($role==2){
   header("Location: analisa.php");
   }
   else if($role==3){
   header("Location: penyelia.php");
   }*/
 }
}

}
?>

<?php
include ('include/dbconn.php');

$editor = $id ;
$transtype = 'login';
include "log.php";
?>
<!DOCTYPE html>
<html>
<head>
 <title> Profiling </title>
  <?php include 'include/css.php'; ?>
</head>
<body>
<div id="load"></div>
<div id="contents">
</div>
<?php include 'include/js.php'; ?>
</body>
</html>


