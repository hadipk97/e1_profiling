<?php
include ('include/dbconn.php');

if(isset($_POST['simpan_diari'])){

	
$fir_ = $_POST['fir_'];
$namep = $_POST['namep'];
$jwtan = $_POST['jwtan'];
$trik = $_POST['trik'];
$msa = $_POST['msa'];
$note = $_POST['note'];


$sql = "INSERT INTO [jim].[dbo].[diari] 
			([id_fir]
			,[nm_ptgas]
      		,[jwt]
      		,[trkh]
      		,[ms]
      		,[butiran]
      		,[userk]
      		,[masa]
      		,[status]) 
			
			VALUES 
			('$fir_'
			,'$namep'
			,'$jwtan'
			,'$trik'
			,'$msa'
			,'$note')";

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
}

header("Location: diari1.php");
}
?>