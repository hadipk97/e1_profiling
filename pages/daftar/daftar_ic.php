<?php
include ('include/dbconn.php');

if(isset($_POST['simpan_ic'])){

move_uploaded_file($_FILES["id_pic"]["tmp_name"],
      "./upload/" . $_FILES["id_pic"]["name"]);
      $id_pic_ = $_FILES["id_pic"]["name"]; //<- This is it

move_uploaded_file($_FILES["ic_chip"]["tmp_name"],
      "./upload/" . $_FILES["ic_chip"]["name"]);
      $ic_chip_ = $_FILES["ic_chip"]["name"]; //<- This is it 
	
move_uploaded_file($_FILES["attch_"]["tmp_name"],
      "./upload/" . $_FILES["attch_"]["name"]);
      $attachment = $_FILES["attch_"]["name"]; //<- This is it
	
$ic_nom = $_POST['ic_nom'];
$ic_status = $_POST['ic_status'];
$sec_ref = $_POST['sec_ref'];
$card_type = $_POST['card_type'];
$f_name = $_POST['f_name'];
$m_name = $_POST['m_name'];
$l_name = $_POST['l_name'];
$add_1 = $_POST['add_1'];
$add_2 = $_POST['add_2'];
$add_3 = $_POST['add_3'];
$pos_code = $_POST['pos_code'];
$city_ = $_POST['city_'];
$state_ = $_POST['state_'];
$country_ = $_POST['country_'];
$lafr_ = $_POST['lafr_'];
$notas = $_POST['notas'];

$sql = "INSERT INTO [jim].[dbo].[ic] 
			([nom]
			,[status]
			,[idpic]
			,[chippic]
			,[security]
			,[cardtype]
			,[firstname]
			,[middlename]
			,[lastname]
			,[add1]
			,[add2]
			,[add3]
			,[poscode]
			,[city]
			,[state]
			,[country]
			,[lafr]
			,[attch]
			,[note]) 
			
			VALUES 
			('$ic_nom'
			,'$ic_status'
			,'$id_pic_'
			,'$ic_chip_'
			,'$sec_ref'
			,'$card_type'
			,'$f_name'
			,'$m_name'
			,'$l_name'
			,'$add_1'
			,'$add_2'
			,'$add_3'
			,'$pos_code'
			,'$city_'
			,'$state_'
			,'$country_'
			,'$lafr_'
			,'$attachment'
			,'$notas')";

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
}

header("Location: identitycard.php");
}
?>