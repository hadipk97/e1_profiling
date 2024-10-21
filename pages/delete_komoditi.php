<?php
date_default_timezone_set("Asia/Kuala_Lumpur");
$serverName = "DESKTOP-OC6USPN"; //serverName\instanceName
$connectionInfo = array("Database" => "jim", "UID" => "sa", "PWD" => "Admin123");
$conn = sqlsrv_connect($serverName, $connectionInfo);
$_SESSION['http'] = "http://localhost:8080/profiling/pages/";
$id = $_POST['del_id'];
$sql = "DELETE FROM [jim].[dbo].[barang_kes] WHERE id = $id";
$stmt = sqlsrv_query($conn, $sql);
if (!$stmt) {
} else {
    echo "YES";
}
