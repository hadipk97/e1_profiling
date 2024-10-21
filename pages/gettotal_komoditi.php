<?php
date_default_timezone_set("Asia/Kuala_Lumpur");
$serverName = "Prismakhas"; //serverName\instanceName
$connectionInfo = array( "Database"=>"jim", "UID"=>"sa", "PWD"=>"Admin123");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$id = $_POST['id'];
$sql = "SELECT hargatotal FROM [jim].[dbo].[barang_kes] WHERE fir = '$id'";
$stmt = sqlsrv_query($conn, $sql);
$i=0;
while($row = sqlsrv_fetch_array($stmt)){
    $rows[$i] = $row['hargatotal'];
    $i++;
}
echo json_encode($rows);
?>