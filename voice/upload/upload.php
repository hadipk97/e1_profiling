<?php
$uploadDir = 'uploads';
include 'dbconn.php';

if(isset($_POST['delete'])){
	echo $sql = "DELETE FROM [dropzone].[dbo].[file_u]
      		WHERE id = '$_POST[id]'";
	$stmt2 = sqlsrv_query ($conn , $sql);

 	header("Location : index.php");
}

if(isset($_POST['deletedall'])){
	$sql = "DELETE  FROM [dropzone].[dbo].[file_u]";
	$stmt2 = sqlsrv_query ($conn , $sql);

 	header("Location : index.php");
}
?>