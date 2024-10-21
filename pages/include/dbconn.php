<?php
//session_start();

date_default_timezone_set("Asia/Kuala_Lumpur");
$serverName = "LATITUDE3540"; //serverName\instanceName
$connectionInfo = array("Database" => "jim", "UID" => "sa", "PWD" => "Admin123");
$conn = sqlsrv_connect($serverName, $connectionInfo);

//if( isset($conn) ) {
//}
$_SESSION['http'] = "http://localhost/profiling/pages/";
