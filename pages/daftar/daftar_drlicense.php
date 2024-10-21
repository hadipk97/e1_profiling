<?php
include ('include/dbconn.php');

if(isset($_POST['simpan_lesen'])){

move_uploaded_file($_FILES["dl_pic"]["tmp_name"],
      "./upload/" . $_FILES["dl_pic"]["name"]);
      $drive_pic = $_FILES["dl_pic"]["name"]; //<- This is it

move_uploaded_file($_FILES["dl_chip"]["tmp_name"],
      "./upload/" . $_FILES["dl_chip"]["name"]);
      $drive_chip = $_FILES["dl_chip"]["name"]; //<- This is it 
	
move_uploaded_file($_FILES["attch_"]["tmp_name"],
      "./upload/" . $_FILES["attch_"]["name"]);
      $attachment = $_FILES["attch_"]["name"]; //<- This is it
	
$serial_nom = $_POST['serial_nom'];
$dl_status = $_POST['dl_status'];
$drive_class = $_POST['drive_class'];
$f_name = $_POST['f_name'];
$m_name = $_POST['m_name'];
$l_name = $_POST['l_name'];
$national = $_POST['national'];
$st_date = $_POST['st_date'];
$exp_date = $_POST['exp_date'];
$issue_plce = $_POST['issue_plce'];
$country_ = $_POST['country_'];
$lafr_ = $_POST['lafr_'];
$notas = $_POST['notas'];

$sql = "INSERT INTO [jim].[dbo].[drivelicense] 
			([serialno]
			,[status]
			,[licensepic]
			,[chippic]
			,[class]
			,[firstname]
			,[middlename]
			,[lastname]
			,[nationality]
			,[startdate]
			,[expireddate]
			,[placeissue]
			,[country]
			,[lafr]
			,[attch]
			,[note]) 
			
			VALUES 
			('$serial_nom'
			,'$dl_status'
			,'$drive_pic'
			,'$drive_chip'
			,'$drive_class'
			,'$f_name'
			,'$m_name'
			,'$l_name'
			,'$national'
			,'$st_date'
			,'$exp_date'
			,'$issue_plce'
			,'$country_'
			,'$lafr_'
			,'$attachment'
			,'$notas')";

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
}

header("Location: drivinglicense.php");
}
?>