<?php
include ('include/dbconn.php');

if(isset($_POST['simpan_profile'])){

move_uploaded_file($_FILES["pic_left"]["tmp_name"],
      "./upload/" . $_FILES["pic_left"]["name"]);
      $p_left = $_FILES["pic_left"]["name"]; //<- This is it

move_uploaded_file($_FILES["pic_cntr"]["tmp_name"],
      "./upload/" . $_FILES["pic_cntr"]["name"]);
      $p_cntr = $_FILES["pic_cntr"]["name"]; //<- This is it

move_uploaded_file($_FILES["pic_right"]["tmp_name"],
      "./upload/" . $_FILES["pic_right"]["name"]);
      $p_right = $_FILES["pic_right"]["name"]; //<- This is it 

$status = $_POST['status'];
$tree = $_POST['tree'];
$relay = $_POST['relay'];
$f_name = $_POST['f_name'];
$m_name = $_POST['m_name'];
$l_name = $_POST['l_name'];
$n_name = $_POST['n_name'];
$lngge = $_POST['lngge'];
$gender_ = $_POST['gender_'];
$dob = $_POST['dob'];
$age_ = $_POST['age_'];
$race_ = $_POST['race_'];
$ethnc = $_POST['ethnc'];
$cob = $_POST['cob'];
$marital_ = $_POST['marital_'];
$national = $_POST['national'];
$notas = $_POST['notas'];

$sql = "INSERT INTO [jim].[dbo].[profile] 
			    ([picleft]
      		,[piccenter]
     		  ,[picright]
    		  ,[status]
      		,[crimetree]
      		,[relationship]
     		  ,[firstname]
      		,[middlename]
      		,[lastname]
      		,[nickname]
      		,[language]
      		,[gender]
      		,[birth]
      		,[age]
      		,[race]
      		,[ethnic]
      		,[country]
      		,[marital]
      		,[nationality]
      		,[Nota]) 
			
			VALUES 
			    ('$p_left'
			    ,'$p_cntr'
			    ,'$p_right'
			    ,'$status'
			    ,'$tree'
			    ,'$relay'
			    ,'$f_name'
			    ,'$m_name'
			    ,'$l_name'
			    ,'$n_name'
			    ,'$lngge'
			    ,'$gender_'
			    ,'$dob'
			    ,'$age_'
			    ,'$race_'
			    ,'$ethnc'
			    ,'$cob'
			    ,'$marital_'
			    ,'$national'
			    ,'$notas')";

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
}

header("Location: profile.php");
}
?>