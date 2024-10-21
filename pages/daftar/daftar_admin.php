<?php
include ('include/dbconn.php');

if(isset($_POST['simpan_admin'])){

	
$fir_ = $_POST['fir_'];
$distribute = $_POST['distribute'];
$cs_status = $_POST['cs_status'];
$intell_nom = $_POST['intell_nom'];
$title_ = $_POST['title_'];
$major_class = $_POST['major_class'];
$minor_class = $_POST['minor_class'];
$reg_date = $_POST['reg_date'];
$reg_oprtor = $_POST['reg_oprtor'];
$appr_offcr = $_POST['appr_offcr'];
$rep_dprmnt = $_POST['rep_dprmnt'];
$team_ = $_POST['team_'];
$state_ = $_POST['state_'];
$country_ = $_POST['country_'];
$dsk_offcr = $_POST['dsk_offcr'];
$dsk_offcr_nom = $_POST['dsk_offcr_nom'];
$dsk_offcr_mail = $_POST['dsk_offcr_mail'];
$aho_offcr = $_POST['aho_offcr'];
$aho_nom = $_POST['aho_nom'];
$intelli_team = $_POST['intelli_team'];
$sfo_offcr = $_POST['sfo_offcr'];
$sfo_nom = $_POST['sfo_nom'];
$intell_strt = $_POST['intell_strt'];
$intelli_end = $_POST['intelli_end'];

$sql = "INSERT INTO [jim].[dbo].[admin] 
			([id_fir]
			,[distribution]
            ,[cs_status]
            ,[intell_no]
            ,[invest_no]
            ,[title]
            ,[major]
            ,[minor]
            ,[date_regist]
            ,[operator]
            ,[officer]
            ,[department]
            ,[team]
            ,[state]
            ,[country]
            ,[do]
            ,[do_num]
            ,[do_mail]
            ,[aho_officer]
            ,[aho_num]
            ,[intell_team]
            ,[sfo_officer]
            ,[sfo_num]
            ,[intell_start]
            ,[intell_end]) 
			
			VALUES 
			('$fir_'
			,'$distribute'
			,'$cs_status'
			,'$intell_nom'
			,'$title_'
			,'$major_class'
			,'$minor_class'
			,'$reg_date'
			,'$reg_oprtor'
			,'$appr_offcr'
			,'$rep_dprmnt'
			,'$team_'
			,'$state_'
			,'$country_'
			,'$dsk_offcr'
			,'$dsk_offcr_nom'
			,'$dsk_offcr_mail'
			,'$aho_offcr'
			,'$aho_nom'
			,'$intelli_team'
			,'$sfo_offcr'
			,'$sfo_nom'
			,'$intell_strt'
			,'$intelli_end')";

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
}

header("Location: pendaftaran.php");
}
?>