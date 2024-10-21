<?php
include ('include/dbconn.php');

if(isset($_POST['simpan_passport'])){

move_uploaded_file($_FILES["p_pic"]["tmp_name"],
      "./upload/" . $_FILES["p_pic"]["name"]);
      $pass_pic = $_FILES["p_pic"]["name"]; //<- This is it

move_uploaded_file($_FILES["chip_pic"]["tmp_name"],
      "./upload/" . $_FILES["chip_pic"]["name"]);
      $pass_chip = $_FILES["chip_pic"]["name"]; //<- This is it

move_uploaded_file($_FILES["sign_pic"]["tmp_name"],
      "./upload/" . $_FILES["sign_pic"]["name"]);
      $pass_sign = $_FILES["sign_pic"]["name"]; //<- This is it 
	
move_uploaded_file($_FILES["attch_"]["tmp_name"],
      "./upload/" . $_FILES["attch_"]["name"]);
      $attachment = $_FILES["attch_"]["name"]; //<- This is it
	
$p_status = $_POST['p_status'];
$pnom_new = $_POST['pnom_new'];
$pnom_old = $_POST['pnom_old'];
$mrz_no = $_POST['mrz_no'];
$p_type = $_POST['p_type'];
$f_name = $_POST['f_name'];
$m_name = $_POST['m_name'];
$l_name = $_POST['l_name'];
$coun_code = $_POST['coun_code'];
$gender_ = $_POST['gender_'];
$dob = $_POST['dob'];
$age_ = $_POST['age_'];
$national = $_POST['national'];
$d_issue = $_POST['d_issue'];
$d_exp = $_POST['d_exp'];
$issue_plce = $_POST['issue_plce'];
$issue_coun = $_POST['issue_coun'];
$height_ = $_POST['height_'];
$weight_ = $_POST['weight_'];
$lafr_ = $_POST['lafr_'];
$notas = $_POST['notas'];

$sql = "INSERT INTO [jim].[dbo].[passport] 
			([status]
			,[nomnew]
			,[nomold]
			,[mrz]
			,[type]
			,[firstname]
			,[middlename]
			,[lastname]
			,[passpic] 
			,[chippic]
			,[signpic]
			,[countrycode]
			,[gender]
			,[birth]
			,[age]
			,[nationality]
			,[dateissue]
			,[dateexpired]
			,[issueplace]
			,[issuecountry]
			,[height]
			,[weight]
			,[lafr]
			,[attch]
			,[note]) 
			
			VALUES 
			('$p_status'
			,'$pnom_new'
			,'$pnom_old'
			,'$mrz_no'
			,'$p_type'
			,'$f_name'
			,'$m_name'
			,'$l_name'
			,'$pass_pic'
			,'$pass_chip'
			,'$pass_sign'
			,'$coun_code'
			,'$gender_'
			,'$dob'
			,'$age_'
			,'$national'
			,'$d_issue'
			,'$d_exp'
			,'$issue_plce'
			,'$issue_coun'
			,'$height_'
			,'$weight_'
			,'$lafr_'
			,'$attachment'
			,'$notas')";

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
}

header("Location: passport.php");
}
?>