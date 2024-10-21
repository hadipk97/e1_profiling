<?php 
include 'dbconn.php';

if (isset($_POST['q'])) {
//echo $_POST['q'];
//echo substr($_POST['q'], 6);
	if ($_POST['q'] == "menu utama") {
		header("Location : desktop.php");
	}elseif ($_POST['q'] == "muat naik") {
		header("Location : index.php");
	}elseif ($_POST['q'] == "upload please") {
		header("Location : index.php");
	}elseif ($_POST['q'] == "upload") {
		header("Location : index.php");
	}elseif ($_POST['q'] == "padam semua") {

		$sql = "DELETE  FROM [dropzone].[dbo].[file_u]";
		$stmt2 = sqlsrv_query ($conn , $sql);
		header("Location : index.php");
		
	}elseif (substr($_POST['q'], 0, 5) == "padam") {
		$id = substr($_POST['q'], 6);
		$sql = "DELETE  FROM [dropzone].[dbo].[file_u] where id = $id";
		$stmt2 = sqlsrv_query ($conn , $sql);
		header("Location : index.php");
		
	}else{
		echo "Error : Code RED (please check with developer)";
	}
}
if (isset($_POST['lang'])) {

	sqlsrv_query($conn,"UPDATE [dropzone].[dbo].[language]
   						   SET [lang] = '$_POST[lang]'");
	header("Location : index.php");
}
?>