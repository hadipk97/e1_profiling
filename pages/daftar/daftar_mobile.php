<?php
include ('include/dbconn.php');

if(isset($_POST['simpan_mobile'])){

move_uploaded_file($_FILES["call_record"]["tmp_name"],
      "./upload/" . $_FILES["call_record"]["name"]);
      $cll_record = $_FILES["call_record"]["name"]; //<- This is it 
	
move_uploaded_file($_FILES["attch_"]["tmp_name"],
      "./upload/" . $_FILES["attch_"]["name"]);
      $attachment = $_FILES["attch_"]["name"]; //<- This is it
	
$mob_nom = $_POST['mob_nom'];
$srvc_prov = $_POST['srvc_prov'];
$reg_date = $_POST['reg_date'];
$conn_status = $_POST['conn_status'];
$term_date = $_POST['term_date'];
$near_tower = $_POST['near_tower'];
$notas = $_POST['notas'];

$sql = "INSERT INTO [jim].[dbo].[mobileno]
           ([nom]
           ,[service]
           ,[registdate]
           ,[status]
           ,[terminatedate]
           ,[tower]
           ,[record]
           ,[attch]
           ,[note]) 
			
			VALUES 
			('$mob_nom'
			,'$srvc_prov'
			,'$reg_date'
			,'$conn_status'
			,'$term_date'
			,'$near_tower'
			,'$cll_record'
			,'$attachment'
			,'$notas')";

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
}

header("Location: mobileno.php");
}
?>