<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
 <?php
session_start();
if(isset($_COOKIE['id'])){
?>
<?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
  $ip = $_SERVER['REMOTE_ADDR'];
}
include("include/dbconn.php");               
$editor = $_COOKIE['id'];
$transtype = 'logout';

if(isset($_COOKIE['id'])) { 
include "log.php";
	
session_set_cookie_params(0);
session_unset();
session_destroy();
setcookie ("member_login", "", time() - 3600);
setcookie ("password", "", time() - 3600);
setcookie ("id", "", time() - 3600);
setcookie ("avatar", "", time() - 3600);
setcookie ("last_link", "", time() - 3600);
//will reset cookie(client,browser)
unset($_COOKIE["member_login"]);
unset($_COOKIE["password"]);
unset($_COOKIE["id"]);
unset($_COOKIE["avatar"]);
unset($_COOKIE["last_link"]);
header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div id="load"></div>
<div id="contents">
</div>
</body>
</html>
<?php
}
else{
header("Location: index.php");
}
?>
