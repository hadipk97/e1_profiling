<?php
$serverName = "GT23\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array( "Database"=>"dropzone", "UID"=>"sa", "PWD"=>"145139299");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( isset($conn) ) {
}
?>
