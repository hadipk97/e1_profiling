<?php
include ('include/dbconn.php');

if(isset($_POST['simpan_fizikal'])){

move_uploaded_file($_FILES["pic_full"]["tmp_name"],
      "./upload/" . $_FILES["pic_full"]["name"]);
      $full_pic = $_FILES["pic_full"]["name"]; //<- This is it
	
move_uploaded_file($_FILES["attch_"]["tmp_name"],
      "./upload/" . $_FILES["attch_"]["name"]);
      $attachment = $_FILES["attch_"]["name"]; //<- This is it
	
$height_ = $_POST['height_'];
$weight_ = $_POST['weight_'];
$eye_col = $_POST['eye_col'];
$hair_col = $_POST['hair_col'];
$scar_bm = $_POST['scar_bm'];
$build_ = $_POST['build_'];
$hair_length = $_POST['hair_length'];
$tattoo = $_POST['tattoo'];
$blood_ = $_POST['blood_'];
$notas = $_POST['notas'];


$sql = "INSERT INTO [jim].[dbo].[admin] 
			([fullpic]
           	,[height]
           	,[weight]
           	,[eyecolor]
           	,[haircolor]
           	,[scar]
           	,[glasses]
           	,[build]
           	,[hairlength]
           	,[tattoos]
           	,[blood]
           	,[attch]
           	,[note]) 
			
			VALUES 
			('$full_pic'
			,'$height_'
			,'$weight_'
			,'$eye_col'
			,'$hair_col'
			,'$scar_bm'
			,'$build_'
			,'$hair_length'
			,'$tattoo'
			,'$blood_'
			,'$attachment'
			,'$notas')";

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
}

header("Location: physical.php");
}
?>