<?php 

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
  $ip = $_SERVER['REMOTE_ADDR'];
}

$pc_name =  gethostbyaddr($_SERVER['REMOTE_ADDR']);
$pc_id = $_SERVER['HTTP_USER_AGENT'].$_SERVER['LOCAL_ADDR'].$_SERVER['REMOTE_ADDR'];
$locat = @unserialize (file_get_contents('http://ip-api.com/php/'));

if ($locat && $locat['status'] == 'success') {
 $pc_locat = $locat['country']."<br>".$locat['regionName']."<br>".$locat['city']."<br>".$locat['lat']."<br>".$locat['lon']."<br>".$locat['zip']."<br>".$locat['timezone']."<br>".$locat['org']."<br>"; 
 $pc_lat = $locat['lat']; 
 $pc_log = $locat['lon']; 
}
else { 
 $pc_locat = "Tracking disable on client";
 $pc_lat = ""; 
 $pc_log = ""; }

sqlsrv_query( $conn, "INSERT INTO [jim].[dbo].[log] ([type],[tdate],[usr],[ip],[pc_name],[pc_id],[pc_location],[pc_lat],[pc_log]) VALUES ('$transtype',CURRENT_TIMESTAMP,'$editor','$ip','$pc_name','$pc_id','$pc_locat','$pc_lat','$pc_log')" );

?>