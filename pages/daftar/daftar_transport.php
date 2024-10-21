<?php
include ('include/dbconn.php');

if(isset($_POST['simpan_transport'])){

move_uploaded_file($_FILES["trans_pic"]["tmp_name"],
      "./upload/" . $_FILES["trans_pic"]["name"]);
      $trans_photo = $_FILES["trans_pic"]["name"]; //<- This is it 
	
move_uploaded_file($_FILES["attch_"]["tmp_name"],
      "./upload/" . $_FILES["attch_"]["name"]);
      $attachment = $_FILES["attch_"]["name"]; //<- This is it
	
$reg_nom = $_POST['reg_nom'];
$vehic_status = $_POST['vehic_status'];
$trans_type = $_POST['trans_type'];
$trans_maker = $_POST['trans_makers'];
$trans_model = $_POST['trans_model'];
$trans_color = $_POST['trans_color'];
$vehic_year = $_POST['vehic_year'];
$reg_date = $_POST['reg_date'];
$notas = $_POST['notas'];

$sql = "INSERT INTO [jim].[dbo].[transportation]
           ([pic]
           ,[registno]
           ,[status]
           ,[type]
           ,[maker]
           ,[model]
           ,[color]
           ,[year]
           ,[registdate]
           ,[attch]
           ,[note]) 
			
			VALUES 
			('$trans_photo'
			,'$reg_nom'
			,'$vehic_status'
			,'$trans_type'
			,'$trans_maker'
			,'$trans_model'
			,'$trans_color'
			,'$vehic_year'
			,'$reg_date'
			,'$attachment'
			,'$notas')";

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
}

header("Location: transportation.php");
}
?>