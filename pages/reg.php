<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php
session_start();
include 'include/dbconn.php';
include 'include/cache.php';
if (isset($_COOKIE['id'])) {
	$last_link = $_SERVER['REQUEST_URI'];
	setcookie("last_link", $last_link, time() + (10 * 365 * 24 * 60 * 60));
	$fulln = $_COOKIE['id'];

	$sql = "SELECT *  FROM [jim].[dbo].[login] WHERE id = '$fulln'";
	$stmt = sqlsrv_query($conn, $sql);
	if ($stmt === false) {
	} else {
		$r = sqlsrv_fetch_array($stmt);
		$editor = $r['id'];
		$fulname = $r['fulname'];
		$role = $r['role'];
		$ngri = $r['ngri'];
	}
}

if (isset($_POST['simpan_diari'])) {

	$_SESSION['id_fir'] = $_POST['id_fir'];
	$diari_no = $_POST['diari_no'];
	$_SESSION['namep'] = $_POST['namep'];
	$_SESSION['jwtan'] = $_POST['jwtan'];
	$_SESSION['trik'] = $_POST['trik'];
	$_SESSION['msa'] = $_POST['msa'];
	$_SESSION['note'] = $_POST['note'];



	foreach ($_FILES['lampiran']['name'] as $key => $name) {

		$newFilename = $name;
		move_uploaded_file($_FILES['lampiran']['tmp_name'][$key], './upload/' . $newFilename);
		$location = $newFilename;

		$sql = "INSERT INTO [jim].[dbo].[lampiran] ([id_fir],[filename],[diari_no]) VALUES ('$_SESSION[id_fir]','$location','$diari_no')";
		$stmt1 = sqlsrv_query($conn, $sql);
	}

	$sql = "INSERT INTO [jim].[dbo].[diari] 
      ([id_fir]
      ,[diari_no]
      ,[nm_ptgas]
      ,[jwt]
      ,[trkh]
      ,[ms]
      ,[butiran]
      ,[userk]
      ,[masa]
      ,[status]) 
      
      VALUES 
      ('$_SESSION[id_fir]'
      ,'$diari_no'
      ,'$_SESSION[namep]'
      ,'$_SESSION[jwtan]'
      ,'$_SESSION[trik]'
      ,'$_SESSION[msa]'
      ,'$_SESSION[note]'
      ,'$fulname'
      ,CURRENT_TIMESTAMP
      ,'M')";

	$stmt = sqlsrv_query($conn, $sql);
	if ($stmt == 0) {
		$_SESSION['flash'] = "Gagal";
		$_SESSION['clr'] = "alert-danger";
	} else {
		$_SESSION['flash'] = "Berjaya";
		$_SESSION['clr'] = "alert-success";
	}

	$transtype = "save Diari";
	include "log.php";

	header("Location : diari_fir.php");
}
if (isset($_POST['save_game'])) {

	foreach ($_FILES['lampiran']['name'] as $key => $name) {

		$newFilename = $name;
		move_uploaded_file($_FILES['lampiran']['tmp_name'][$key], './upload/' . $newFilename);
		$location = $newFilename;

		$sql = "INSERT INTO [jim].[dbo].[game_pic] ([game_id],[pic]) VALUES ('$_POST[id]','$location')";
		$stmt1 = sqlsrv_query($conn, $sql);
	}

	sqlsrv_query($conn, "INSERT INTO [jim].[dbo].[game]
           ([game_id]
           ,[game_ttl]
           ,[game_rating]
           ,[game_desc]
           ,[game_link])
     VALUES
           ('$_POST[id]',
            '$_POST[ttl]',
            '$_POST[rat]',
            '$_POST[desc]',
            '$_POST[link]')");

	$transtype = "save Game";
	include "log.php";

	header("Location : game.php");
}


if (isset($_POST['list_pro'])) {

	$_SESSION['id_fir'] = $_POST['id_fir'];

	header("Location : pro.php");
}

if (isset($_POST['daftar_profil'])) {
	# code...
	$_SESSION['id_fir'] = $_POST['id_fir'];

	header("Location : profile.php");
}

if (isset($_POST['simpan_profile'])) {

	move_uploaded_file(
		$_FILES["pic_left"]["tmp_name"],
		"./upload/" . $_FILES["pic_left"]["name"]
	);
	$_SESSION['picleft'] = $_FILES["pic_left"]["name"]; //<- This is it

	move_uploaded_file(
		$_FILES["pic_cntr"]["tmp_name"],
		"./upload/" . $_FILES["pic_cntr"]["name"]
	);
	$_SESSION['piccenter'] = $_FILES["pic_cntr"]["name"]; //<- This is it

	move_uploaded_file(
		$_FILES["pic_right"]["tmp_name"],
		"./upload/" . $_FILES["pic_right"]["name"]
	);
	$_SESSION['picright'] = $_FILES["pic_right"]["name"]; //<- This is it 

	$_SESSION['id_profil'] = $_POST['id_profil'];
	$_SESSION['id_fir'] = $_POST['id_fir'];
	$_SESSION['status'] = $_POST['status'];
	$_SESSION['crimetree'] = $_POST['tree'];
	$_SESSION['relationship'] = $_POST['relay'];
	$_SESSION['firstname'] = $_POST['f_name'];
	$_SESSION['middlename'] = $_POST['m_name'];
	$_SESSION['lastname'] = $_POST['l_name'];
	$_SESSION['nickname'] = $_POST['n_name'];
	$_SESSION['language'] = $_POST['lngge'];
	$_SESSION['gender'] = $_POST['gender_'];
	$_SESSION['birth'] = $_POST['dob'];
	$_SESSION['age'] = $_POST['age_'];
	$_SESSION['race'] = $_POST['race_'];
	$_SESSION['ethnic'] = $_POST['ethnc'];
	$_SESSION['country'] = $_POST['cob'];
	$_SESSION['marital'] = $_POST['marital_'];
	$_SESSION['nationality'] = $_POST['national'];
	$_SESSION['notes'] = $_POST['notas'];
	// var_dump($_SESSION['f_name']);
	// die();
	$sql = "INSERT INTO [jim].[dbo].[profile] 
			([id_profil]
          	,[id_fir]
			,[picleft]
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
      		,[notes]) 
			
			VALUES 
		    ('$_SESSION[id_profil]'
        	,'$_SESSION[id_fir]'
   			,'$_SESSION[picleft]'
		    ,'$_SESSION[piccenter]'
		    ,'$_SESSION[picright]'
		    ,'$_SESSION[status]'
		    ,'$_SESSION[crimetree]'
		    ,'$_SESSION[relationship]'
		    ,'$_SESSION[firstname]'
		    ,'$_SESSION[middlename]'
		    ,'$_SESSION[lastname]'
		    ,'$_SESSION[nickname]'
		    ,'$_SESSION[language]'
		    ,'$_SESSION[gender]'
		    ,'$_SESSION[birth]'
		    ,'$_SESSION[age]'
		    ,'$_SESSION[race]'
		    ,'$_SESSION[ethnic]'
		    ,'$_SESSION[country]'
		    ,'$_SESSION[marital]'
		    ,'$_SESSION[nationality]'
		    ,'$_SESSION[notes]')";

	$stmt = sqlsrv_query($conn, $sql);
	if ($stmt == 0) {
		$_SESSION['flash'] = "Gagal";
		$_SESSION['clr'] = "alert-danger";
	} else {
		$_SESSION['flash'] = "Berjaya";
		$_SESSION['clr'] = "alert-success";
	}

	$sql = "INSERT INTO [jim].[dbo].[transac]
           ([profil_id])
     VALUES
           ('$_POST[id_profil]')";
	$stmt = sqlsrv_query($conn, $sql);

	$transtype = "Daftar Profil";
	include "log.php";

	header("Location : physical.php");
}

if (isset($_POST['simpan_fizikal'])) {

	move_uploaded_file(
		$_FILES["pic_full"]["tmp_name"],
		"./upload/" . $_FILES["pic_full"]["name"]
	);
	$_SESSION['full_pic'] = $_FILES["pic_full"]["name"]; //<- This is it 

	move_uploaded_file(
		$_FILES["attch_"]["tmp_name"],
		"./upload/" . $_FILES["attch_"]["name"]
	);
	$_SESSION['attachment'] = $_FILES["attch_"]["name"]; //<- This is it

	$_SESSION['id_profil'] = $_POST['id_profil'];
	$_SESSION['id_fir'] = $_POST['id_fir'];
	$_SESSION['height_'] = $_POST['height_'];
	$_SESSION['weight_'] = $_POST['weight_'];
	$_SESSION['eye_col'] = $_POST['eye_col'];
	$_SESSION['hair_col'] = $_POST['hair_col'];
	$_SESSION['scar_bm'] = $_POST['scar_bm'];
	$_SESSION['glasses'] = $_POST['glasses'];
	$_SESSION['build_'] = $_POST['build_'];
	$_SESSION['hair_length'] = $_POST['hair_length'];
	$_SESSION['tattoo'] = $_POST['tattoo'];
	$_SESSION['blood_'] = $_POST['blood_'];
	$_SESSION['notas'] = $_POST['notas'];

	$sql = "INSERT INTO [jim].[dbo].[physical]
           ([id_profil]
		   ,[fullpic]
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
			('$_SESSION[id_profil]'
			,'$_SESSION[full_pic]'
			,'$_SESSION[height_]'
			,'$_SESSION[weight_]'
			,'$_SESSION[eye_col]'
			,'$_SESSION[hair_col]'
			,'$_SESSION[scar_bm]'
			,'$_SESSION[glasses]'
			,'$_SESSION[build_]'
			,'$_SESSION[hair_length]'
			,'$_SESSION[tattoo]'
			,'$_SESSION[blood_]'
			,'$_SESSION[attachment]'
			,'$_SESSION[notas]')";

	$stmt = sqlsrv_query($conn, $sql);
	if ($stmt == 0) {
		$_SESSION['flash'] = "Gagal";
		$_SESSION['clr'] = "alert-danger";
	} else {
		$_SESSION['flash'] = "Berjaya";
		$_SESSION['clr'] = "alert-success";
	}

	$transtype = "Register Physical";
	include "log.php";

	header("Location : physical.php");
}

if (isset($_POST['simpan_ic'])) {

	move_uploaded_file(
		$_FILES["id_pic"]["tmp_name"],
		"./upload/" . $_FILES["id_pic"]["name"]
	);
	$_SESSION['id_pic_'] = $_FILES["id_pic"]["name"]; //<- This is it

	move_uploaded_file(
		$_FILES["ic_chip"]["tmp_name"],
		"./upload/" . $_FILES["ic_chip"]["name"]
	);
	$_SESSION['ic_chip_'] = $_FILES["ic_chip"]["name"]; //<- This is it 

	move_uploaded_file(
		$_FILES["attch_"]["tmp_name"],
		"./upload/" . $_FILES["attch_"]["name"]
	);
	$_SESSION['attachment'] = $_FILES["attch_"]["name"]; //<- This is it

	$_SESSION['id_profil'] = $_POST['id_profil'];
	$_SESSION['id_fir'] = $_POST['id_fir'];
	$_SESSION['ic_nom'] = $_POST['ic_nom'];
	$_SESSION['ic_status'] = $_POST['ic_status'];
	$_SESSION['sec_ref'] = $_POST['sec_ref'];
	$_SESSION['card_type'] = $_POST['card_type'];
	$_SESSION['f_name'] = $_POST['f_name'];
	$_SESSION['m_name'] = $_POST['m_name'];
	$_SESSION['l_name'] = $_POST['l_name'];
	$_SESSION['add_1'] = $_POST['add_1'];
	$_SESSION['add_2'] = $_POST['add_2'];
	$_SESSION['add_3'] = $_POST['add_3'];
	$_SESSION['pos_code'] = $_POST['pos_code'];
	$_SESSION['city_'] = $_POST['city_'];
	$_SESSION['state_'] = $_POST['state_'];
	$_SESSION['country_'] = $_POST['country_'];
	$_SESSION['lafr_'] = $_POST['lafr_'];
	$_SESSION['notas'] = $_POST['notas'];

	$sql = "SELECT *  FROM [jim].[dbo].[admin] WHERE id_fir = '$_SESSION[id_fir]'";
	$stmt = sqlsrv_query($conn, $sql);
	if (!$stmt) {
	} else {
		$r = sqlsrv_fetch_array($stmt);
		$id_fir_kes = $r['id_fir'];
		$state_kes = $r['ngri'];
	}

	echo $sql1 = "INSERT INTO [jim].[dbo].[ic_link] 
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
			,[note]
			,[state_kes]) 
			
			VALUES 
			('$_SESSION[ic_nom]'
			,'$_SESSION[ic_status]'
			,'$_SESSION[id_pic_]'
			,'$_SESSION[ic_chip_]'
			,'$_SESSION[sec_ref]'
			,'$_SESSION[card_type]'
			,'$_SESSION[f_name]'
			,'$_SESSION[m_name]'
			,'$_SESSION[l_name]'
			,'$_SESSION[add_1]'
			,'$_SESSION[add_2]'
			,'$_SESSION[add_3]'
			,'$_SESSION[pos_code]'
			,'$_SESSION[city_]'
			,'$_SESSION[state_]'
			,'$_SESSION[country_]'
			,'$_SESSION[lafr_]'
			,'$_SESSION[attachment]'
			,'$_SESSION[notas]'
			,'$state_kes')";

	$stmt1 = sqlsrv_query($conn, $sql1);
	echo "<br>";
	echo $sql = "INSERT INTO [jim].[dbo].[ic] 
			([id_profil]
			,[nom]
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
			,[note]
			,[id_fir]
			,[state_kes]) 
			
			VALUES 
			('$_SESSION[id_profil]'
			,'$_SESSION[ic_nom]'
			,'$_SESSION[ic_status]'
			,'$_SESSION[id_pic_]'
			,'$_SESSION[ic_chip_]'
			,'$_SESSION[sec_ref]'
			,'$_SESSION[card_type]'
			,'$_SESSION[f_name]'
			,'$_SESSION[m_name]'
			,'$_SESSION[l_name]'
			,'$_SESSION[add_1]'
			,'$_SESSION[add_2]'
			,'$_SESSION[add_3]'
			,'$_SESSION[pos_code]'
			,'$_SESSION[city_]'
			,'$_SESSION[state_]'
			,'$_SESSION[country_]'
			,'$_SESSION[lafr_]'
			,'$_SESSION[attachment]'
			,'$_SESSION[notas]'
			,'$id_fir_kes'
			,'$state_kes')";

	$stmt = sqlsrv_query($conn, $sql);
	if ($stmt == 0) {
		$_SESSION['flash'] = "Gagal";
		$_SESSION['clr'] = "alert-danger";
	} else {
		$_SESSION['flash'] = "Berjaya";
		$_SESSION['clr'] = "alert-success";
	}

	$transtype = "Register IC";
	include "log.php";

	header("Location : identitycard.php");
}

if (isset($_POST['simpan_passport'])) {

	move_uploaded_file(
		$_FILES["p_pic"]["tmp_name"],
		"./upload/" . $_FILES["p_pic"]["name"]
	);
	$_SESSION['pass_pic'] = $_FILES["p_pic"]["name"]; //<- This is it

	move_uploaded_file(
		$_FILES["chip_pic"]["tmp_name"],
		"./upload/" . $_FILES["chip_pic"]["name"]
	);
	$_SESSION['pass_chip'] = $_FILES["chip_pic"]["name"]; //<- This is it

	move_uploaded_file(
		$_FILES["sign_pic"]["tmp_name"],
		"./upload/" . $_FILES["sign_pic"]["name"]
	);
	$_SESSION['pass_sign'] = $_FILES["sign_pic"]["name"]; //<- This is it 

	move_uploaded_file(
		$_FILES["attch_"]["tmp_name"],
		"./upload/" . $_FILES["attch_"]["name"]
	);
	$_SESSION['attachment'] = $_FILES["attch_"]["name"]; //<- This is it

	$_SESSION['id_profil'] = $_POST['id_profil'];
	$_SESSION['id_fir'] = $_POST['id_fir'];
	$_SESSION['p_status'] = $_POST['p_status'];
	$_SESSION['pnom_new'] = $_POST['pnom_new'];
	$_SESSION['pnom_old'] = $_POST['pnom_old'];
	$_SESSION['mrz_no'] = $_POST['mrz_no'];
	$_SESSION['p_type'] = $_POST['p_type'];
	$_SESSION['f_name'] = $_POST['f_name'];
	$_SESSION['m_name'] = $_POST['m_name'];
	$_SESSION['l_name'] = $_POST['l_name'];
	$_SESSION['coun_code'] = $_POST['coun_code'];
	$_SESSION['gender_'] = $_POST['gender_'];
	$_SESSION['dob'] = $_POST['dob'];
	$_SESSION['age_'] = $_POST['age_'];
	$_SESSION['national'] = $_POST['national'];
	$_SESSION['d_issue'] = $_POST['d_issue'];
	$_SESSION['d_exp'] = $_POST['d_exp'];
	$_SESSION['issue_plce'] = $_POST['issue_plce'];
	$_SESSION['issue_coun'] = $_POST['issue_coun'];
	$_SESSION['height_'] = $_POST['height_'];
	$_SESSION['weight_'] = $_POST['weight_'];
	$_SESSION['lafr_'] = $_POST['lafr_'];
	$_SESSION['notas'] = $_POST['notas'];

	$sql1 = "INSERT INTO [jim].[dbo].[passport_link] 
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
			('$_SESSION[p_status]'
			,'$_SESSION[pnom_new]'
			,'$_SESSION[pnom_old]'
			,'$_SESSION[mrz_no]'
			,'$_SESSION[p_type]'
			,'$_SESSION[f_name]'
			,'$_SESSION[m_name]'
			,'$_SESSION[l_name]'
			,'$_SESSION[pass_pic]'
			,'$_SESSION[pass_chip]'
			,'$_SESSION[pass_sign]'
			,'$_SESSION[coun_code]'
			,'$_SESSION[gender_]'
			,'$_SESSION[dob]'
			,'$_SESSION[age_]'
			,'$_SESSION[national]'
			,'$_SESSION[d_issue]'
			,'$_SESSION[d_exp]'
			,'$_SESSION[issue_plce]'
			,'$_SESSION[issue_coun]'
			,'$_SESSION[height_]'
			,'$_SESSION[weight_]'
			,'$_SESSION[lafr_]'
			,'$_SESSION[attachment]'
			,'$_SESSION[notas]')";

	$stmt1 = sqlsrv_query($conn, $sql1);

	$sql = "INSERT INTO [jim].[dbo].[passport] 
			([id_profil]
			,[status]
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
			('$_SESSION[id_profil]'
			,'$_SESSION[p_status]'
			,'$_SESSION[pnom_new]'
			,'$_SESSION[pnom_old]'
			,'$_SESSION[mrz_no]'
			,'$_SESSION[p_type]'
			,'$_SESSION[f_name]'
			,'$_SESSION[m_name]'
			,'$_SESSION[l_name]'
			,'$_SESSION[pass_pic]'
			,'$_SESSION[pass_chip]'
			,'$_SESSION[pass_sign]'
			,'$_SESSION[coun_code]'
			,'$_SESSION[gender_]'
			,'$_SESSION[dob]'
			,'$_SESSION[age_]'
			,'$_SESSION[national]'
			,'$_SESSION[d_issue]'
			,'$_SESSION[d_exp]'
			,'$_SESSION[issue_plce]'
			,'$_SESSION[issue_coun]'
			,'$_SESSION[height_]'
			,'$_SESSION[weight_]'
			,'$_SESSION[lafr_]'
			,'$_SESSION[attachment]'
			,'$_SESSION[notas]')";

	$stmt = sqlsrv_query($conn, $sql);
	if ($stmt == 0) {
		$_SESSION['flash'] = "Gagal";
		$_SESSION['clr'] = "alert-danger";
	} else {
		$_SESSION['flash'] = "Berjaya";
		$_SESSION['clr'] = "alert-success";
	}

	$transtype = "Register Passport";
	include "log.php";

	header("Location : passport.php");
}

if (isset($_POST['simpan_lesen'])) {

	move_uploaded_file(
		$_FILES["dl_pic"]["tmp_name"],
		"./upload/" . $_FILES["dl_pic"]["name"]
	);
	$_SESSION['drive_pic'] = $_FILES["dl_pic"]["name"]; //<- This is it

	move_uploaded_file(
		$_FILES["dl_chip"]["tmp_name"],
		"./upload/" . $_FILES["dl_chip"]["name"]
	);
	$_SESSION['drive_chip'] = $_FILES["dl_chip"]["name"]; //<- This is it 

	move_uploaded_file(
		$_FILES["attch_"]["tmp_name"],
		"./upload/" . $_FILES["attch_"]["name"]
	);
	$_SESSION['attachment'] = $_FILES["attch_"]["name"]; //<- This is it

	$_SESSION['id_profil'] = $_POST['id_profil'];
	$_SESSION['id_fir'] = $_POST['id_fir'];
	$_SESSION['serial_nom'] = $_POST['serial_nom'];
	$_SESSION['dl_status'] = $_POST['dl_status'];
	$_SESSION['drive_class'] = $_POST['drive_class'];
	$_SESSION['f_name'] = $_POST['f_name'];
	$_SESSION['m_name'] = $_POST['m_name'];
	$_SESSION['l_name'] = $_POST['l_name'];
	$_SESSION['national'] = $_POST['national'];
	$_SESSION['st_date'] = $_POST['st_date'];
	$_SESSION['exp_date'] = $_POST['exp_date'];
	$_SESSION['issue_plce'] = $_POST['issue_plce'];
	$_SESSION['country_'] = $_POST['country_'];
	$_SESSION['lafr_'] = $_POST['lafr_'];
	$_SESSION['notas'] = $_POST['notas'];

	$sql1 = "INSERT INTO [jim].[dbo].[drivelicense_link] 
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
			('$_SESSION[serial_nom]'
			,'$_SESSION[dl_status]'
			,'$_SESSION[drive_pic]'
			,'$_SESSION[drive_chip]'
			,'$_SESSION[drive_class]'
			,'$_SESSION[f_name]'
			,'$_SESSION[m_name]'
			,'$_SESSION[l_name]'
			,'$_SESSION[national]'
			,'$_SESSION[st_date]'
			,'$_SESSION[exp_date]'
			,'$_SESSION[issue_plce]'
			,'$_SESSION[country_]'
			,'$_SESSION[lafr_]'
			,'$_SESSION[attachment]'
			,'$_SESSION[notas]')";

	$stmt1 = sqlsrv_query($conn, $sql1);

	$sql = "INSERT INTO [jim].[dbo].[drivelicense] 
			([id_profil]
			,[serialno]
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
			('$_SESSION[id_profil]'
			,'$_SESSION[serial_nom]'
			,'$_SESSION[dl_status]'
			,'$_SESSION[drive_pic]'
			,'$_SESSION[drive_chip]'
			,'$_SESSION[drive_class]'
			,'$_SESSION[f_name]'
			,'$_SESSION[m_name]'
			,'$_SESSION[l_name]'
			,'$_SESSION[national]'
			,'$_SESSION[st_date]'
			,'$_SESSION[exp_date]'
			,'$_SESSION[issue_plce]'
			,'$_SESSION[country_]'
			,'$_SESSION[lafr_]'
			,'$_SESSION[attachment]'
			,'$_SESSION[notas]')";

	$stmt = sqlsrv_query($conn, $sql);
	if ($stmt == 0) {
		$_SESSION['flash'] = "Gagal";
		$_SESSION['clr'] = "alert-danger";
	} else {
		$_SESSION['flash'] = "Berjaya";
		$_SESSION['clr'] = "alert-success";
	}

	$transtype = "Register License";
	include "log.php";

	header("Location : drivinglicense.php");
}

if (isset($_POST['simpan_transport'])) {

	move_uploaded_file(
		$_FILES["trans_pic"]["tmp_name"],
		"./upload/" . $_FILES["trans_pic"]["name"]
	);
	$_SESSION['trans_photo'] = $_FILES["trans_pic"]["name"]; //<- This is it 

	move_uploaded_file(
		$_FILES["attch_"]["tmp_name"],
		"./upload/" . $_FILES["attch_"]["name"]
	);
	$_SESSION['attachment'] = $_FILES["attch_"]["name"]; //<- This is it

	$_SESSION['id_profil'] = $_POST['id_profil'];
	$_SESSION['id_fir'] = $_POST['id_fir'];
	$_SESSION['reg_nom'] = $_POST['reg_nom'];
	$_SESSION['vehic_status'] = $_POST['vehic_status'];
	$_SESSION['trans_type'] = $_POST['trans_type'];
	$_SESSION['trans_maker'] = $_POST['trans_maker'];
	$_SESSION['trans_model'] = $_POST['trans_model'];
	$_SESSION['trans_color'] = $_POST['trans_color'];
	$_SESSION['vehic_year'] = $_POST['vehic_year'];
	$_SESSION['reg_date'] = $_POST['reg_date'];
	$_SESSION['notas'] = $_POST['notas'];

	$sql1 = "INSERT INTO [jim].[dbo].[transportation_link]
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
			('$_SESSION[trans_photo]'
			,'$_SESSION[reg_nom]'
			,'$_SESSION[vehic_status]'
			,'$_SESSION[trans_type]'
			,'$_SESSION[trans_maker]'
			,'$_SESSION[trans_model]'
			,'$_SESSION[trans_color]'
			,'$_SESSION[vehic_year]'
			,'$_SESSION[reg_date]'
			,'$_SESSION[attachment]'
			,'$_SESSION[notas]')";

	$stmt1 = sqlsrv_query($conn, $sql1);

	$sql = "INSERT INTO [jim].[dbo].[transportation]
           ([id_profil]
		   ,[pic]
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
			('$_SESSION[id_profil]'
			,'$_SESSION[trans_photo]'
			,'$_SESSION[reg_nom]'
			,'$_SESSION[vehic_status]'
			,'$_SESSION[trans_type]'
			,'$_SESSION[trans_maker]'
			,'$_SESSION[trans_model]'
			,'$_SESSION[trans_color]'
			,'$_SESSION[vehic_year]'
			,'$_SESSION[reg_date]'
			,'$_SESSION[attachment]'
			,'$_SESSION[notas]')";

	$stmt = sqlsrv_query($conn, $sql);
	if ($stmt == 0) {
		$_SESSION['flash'] = "Gagal";
		$_SESSION['clr'] = "alert-danger";
	} else {
		$_SESSION['flash'] = "Berjaya";
		$_SESSION['clr'] = "alert-success";
	}

	$transtype = "Register Transport";
	include "log.php";

	header("Location : transportation.php");
}

if (isset($_POST['simpan_mobile'])) {

	move_uploaded_file(
		$_FILES["call_record"]["tmp_name"],
		"./upload/" . $_FILES["call_record"]["name"]
	);
	$_SESSION['cll_record'] = $_FILES["call_record"]["name"]; //<- This is it 

	move_uploaded_file(
		$_FILES["attch_"]["tmp_name"],
		"./upload/" . $_FILES["attch_"]["name"]
	);
	$_SESSION['attachment'] = $_FILES["attch_"]["name"]; //<- This is it

	$_SESSION['id_profil'] = $_POST['id_profil'];
	$_SESSION['id_fir'] = $_POST['id_fir'];
	$_SESSION['mob_nom'] = $_POST['mob_nom'];
	$_SESSION['srvc_prov'] = $_POST['srvc_prov'];
	$_SESSION['reg_date'] = $_POST['reg_date'];
	$_SESSION['conn_status'] = $_POST['conn_status'];
	$_SESSION['term_date'] = $_POST['term_date'];
	$_SESSION['near_tower'] = $_POST['near_tower'];
	$_SESSION['notas'] = $_POST['notas'];

	$sql = "INSERT INTO [jim].[dbo].[mobileno_link]
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
			('$_SESSION[mob_nom]'
			,'$_SESSION[srvc_prov]'
			,'$_SESSION[reg_date]'
			,'$_SESSION[conn_status]'
			,'$_SESSION[term_date]'
			,'$_SESSION[near_tower]'
			,'$_SESSION[cll_record]'
			,'$_SESSION[attachment]'
			,'$_SESSION[notas]')";

	$stmt = sqlsrv_query($conn, $sql);

	$sql = "INSERT INTO [jim].[dbo].[mobileno]
           ([id_profil]
		   ,[nom]
           ,[service]
           ,[registdate]
           ,[status]
           ,[terminatedate]
           ,[tower]
           ,[record]
           ,[attch]
           ,[note]) 
			
			VALUES 
			('$_SESSION[id_profil]'
			,'$_SESSION[mob_nom]'
			,'$_SESSION[srvc_prov]'
			,'$_SESSION[reg_date]'
			,'$_SESSION[conn_status]'
			,'$_SESSION[term_date]'
			,'$_SESSION[near_tower]'
			,'$_SESSION[cll_record]'
			,'$_SESSION[attachment]'
			,'$_SESSION[notas]')";

	$stmt = sqlsrv_query($conn, $sql);
	if ($stmt == 0) {
		$_SESSION['flash'] = "Gagal";
		$_SESSION['clr'] = "alert-danger";
	} else {
		$_SESSION['flash'] = "Berjaya";
		$_SESSION['clr'] = "alert-success";
	}

	$transtype = "Register Mobile";
	include "log.php";

	header("Location : mobileno.php");
}

if (isset($_POST['create_team'])) {

	$_SESSION['id_fir'] = $_POST['id_fir'];
	$_SESSION['pgawai'] = $_POST['pgawai'];
	$_SESSION['note'] = $_POST['note'];


	$sql = "SELECT *  FROM [jim].[dbo].[login] WHERE id = '$_SESSION[pgawai]'";
	$stmt = sqlsrv_query($conn, $sql);
	if (!$stmt) {
	} else {
		$r = sqlsrv_fetch_array($stmt);
		$fulname = $r['fulname'];


		$sql = "INSERT INTO [dbo].[team]
           ([id_fir]
           ,[id_nama]
           ,[nama]
           ,[catatan])
     VALUES
           ('$_SESSION[id_fir]'
           ,'$_SESSION[pgawai]'
           ,'$fulname'
           ,'$_SESSION[note]')";

		$stmt = sqlsrv_query($conn, $sql);
		if ($stmt == 0) {
			$_SESSION['flash'] = "Gagal";
			$_SESSION['clr'] = "alert-danger";
		} else {
			$_SESSION['flash'] = "Berjaya";
			$_SESSION['clr'] = "alert-success";
		}

		$transtype = "Register Team";
		include "log.php";

		header("Location : c_team.php");
	}
}

if (isset($_POST['create_diari'])) {

	$_SESSION['id_fir'] = $_POST['id_fir'];

	header("Location : diari1.php");
}

if (isset($_POST['simpan_media'])) {

	$_SESSION['id_profil'] = $_POST['id_profil'];
	$_SESSION['id_fir'] = $_POST['id_fir'];

	$sql1 = "INSERT INTO [jim].[dbo].[msocial_link]
           ([sm_id])
     VALUES
           ('$_POST[sm_id]')";

	$stmt1 = sqlsrv_query($conn, $sql1);

	$sql = "INSERT INTO [jim].[dbo].[msocial]
           ([id_profil]
           ,[sm_type]
           ,[sm_fname]
           ,[sm_name]
           ,[sm_url]
           ,[sm_id])
     VALUES
           ('$_SESSION[id_profil]'
           ,'$_POST[sm_type]'
           ,'$_POST[sm_fname]'
           ,'$_POST[sm_name]'
           ,'$_POST[sm_url]'
           ,'$_POST[sm_id]')";

	$stmt = sqlsrv_query($conn, $sql);
	if ($stmt == 0) {
		$_SESSION['flash'] = "Gagal";
		$_SESSION['clr'] = "alert-danger";
	} else {
		$_SESSION['flash'] = "Berjaya";
		$_SESSION['clr'] = "alert-success";
	}
	header("Location : smedia.php");
}

if (isset($_POST['simpan_bank'])) {

	$_SESSION['id_profil'] = $_POST['id_profil'];
	$_SESSION['id_fir'] = $_POST['id_fir'];
	$_SESSION['n_bank'] = $_POST['n_bank'];
	$_SESSION['p_aka'] = $_POST['p_aka'];
	$_SESSION['j_aka'] = $_POST['j_aka'];
	$_SESSION['l_aka'] = $_POST['l_aka'];
	$_SESSION['n_aka'] = $_POST['n_aka'];
	$_SESSION['b_aka'] = $_POST['b_aka'];
	$_SESSION['a_bank'] = $_POST['a_bank'];
	$_SESSION['note'] = $_POST['note'];

	$sql1 = "INSERT INTO [jim].[dbo].[bank_link]
           ([n_bank]
           ,[p_aka]
           ,[j_aka]
           ,[l_aka]
           ,[n_aka]
           ,[b_aka]
           ,[a_bank]
           ,[note])
     VALUES
           ('$_POST[n_bank]'
           ,'$_POST[p_aka]'
           ,'$_POST[j_aka]'
           ,'$_POST[l_aka]'
           ,'$_POST[n_aka]'
           ,'$_POST[b_aka]'
           ,'$_POST[a_bank]'
           ,'$_POST[note]')";

	$stmt1 = sqlsrv_query($conn, $sql1);

	$sql = "INSERT INTO [jim].[dbo].[bank]
           ([id_profil]
           ,[n_bank]
           ,[p_aka]
           ,[j_aka]
           ,[l_aka]
           ,[n_aka]
           ,[b_aka]
           ,[a_bank]
           ,[note])
     VALUES
           ('$_SESSION[id_profil]'
           ,'$_POST[n_bank]'
           ,'$_POST[p_aka]'
           ,'$_POST[j_aka]'
           ,'$_POST[l_aka]'
           ,'$_POST[n_aka]'
           ,'$_POST[b_aka]'
           ,'$_POST[a_bank]'
           ,'$_POST[note]')";

	$stmt = sqlsrv_query($conn, $sql);
	if ($stmt == 0) {
		$_SESSION['flash'] = "Gagal";
		$_SESSION['clr'] = "alert-danger";
	} else {
		$_SESSION['flash'] = "Berjaya";
		$_SESSION['clr'] = "alert-success";
	}
	header("Location : bank.php");
}

if (isset($_POST['simpan_company'])) {
	/*
move_uploaded_file($_FILES["web"]["tmp_name"],
      "./upload/" . $_FILES["web"]["name"]);
      $web = $_FILES["web"]["name"]; //<- This is it 
	*/
	move_uploaded_file(
		$_FILES["attch"]["tmp_name"],
		"./upload/" . $_FILES["attch"]["name"]
	);
	$attachment = $_FILES["attch"]["name"]; //<- This is it

	$_SESSION['id_profil'] = $_POST['id_profil'];
	$_SESSION['id_fir'] = $_POST['id_fir'];
	$_SESSION['c_name'] = $_POST['c_name'];
	$_SESSION['no_c'] = $_POST['no_c'];
	$_SESSION['exp_regist'] = $_POST['exp_regist'];
	$_SESSION['sek'] = $_POST['sek'];
	$_SESSION['ala'] = $_POST['ala'];
	$_SESSION['tel'] = $_POST['tel'];
	$_SESSION['exttel'] = $_POST['exttel'];
	$_SESSION['fax'] = $_POST['fax'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['note'] = $_POST['note'];



	$sql1 = "INSERT INTO [jim].[dbo].[com_pany_link]
           ([c_name]
      	   ,[no_c]
      	   ,[sek]
      	   ,[ala]
      	   ,[tel]
      	   ,[exttel]
      	   ,[fax]
      	   ,[email]
      	   ,[web]
           ,[note])
     VALUES
           ('$_POST[c_name]'
           ,'$_POST[no_c]'
           ,'$_POST[sek]'
           ,'$_POST[ala]'
           ,'$_POST[tel]'
           ,'$_POST[exttel]'
           ,'$_POST[fax]'
           ,'$_POST[email]'
           ,'$_POST[web]'
           ,'$_POST[note]')";

	$stmt1 = sqlsrv_query($conn, $sql1);

	$sql = "INSERT INTO [jim].[dbo].[com_pany]
           ([id_profil]
           ,[c_name]
      	   ,[no_c]
      	   ,[mili_s]
      	   ,[attch]
      	   ,[exp_regist]
      	   ,[sek]
      	   ,[ala]
      	   ,[tel]
      	   ,[exttel]
      	   ,[fax]
      	   ,[email]
      	   ,[web]
           ,[note])
     VALUES
           ('$_SESSION[id_profil]'
           ,'$_POST[c_name]'
           ,'$_POST[no_c]'
           ,'$_POST[mili_s]'
           ,'$attachment'
           ,'$_POST[exp_regist]'
           ,'$_POST[sek]'
           ,'$_POST[ala]'
           ,'$_POST[tel]'
           ,'$_POST[exttel]'
           ,'$_POST[fax]'
           ,'$_POST[email]'
           ,'$_POST[web]'
           ,'$_POST[note]')";

	$stmt = sqlsrv_query($conn, $sql);
	if ($stmt == 0) {
		$_SESSION['flash'] = "Gagal";
		$_SESSION['clr'] = "alert-danger";
	} else {
		$_SESSION['flash'] = "Berjaya";
		$_SESSION['clr'] = "alert-success";
	}
	header("Location : company.php");
}

if (isset($_POST['simpan_company_gst_att'])) {
	if (isset($_POST['id'])) {
		//update
		$sql = "UPDATE [dbo].[com_pany_gst_att]
SET 
[com_pany_id] = '$_POST[com_pany_id]',
[registration_application_date] = '$_POST[registration_application_date]',
[account_commence_date] = '$_POST[account_commence_date]',
[account_end] = '$_POST[account_end]',
[status] = '$_POST[status]',
[closure_reason] = '$_POST[closure_reason]',
[registration_type] = '$_POST[registration_type]',
[tax_filing_frequency] = '$_POST[tax_filing_frequency]',
[fiscal_year_end_month] = '$_POST[fiscal_year_end_month]',
[supply_precentage] = '$_POST[supply_precentage]',
[standard] = '$_POST[standard]',
[export] = '$_POST[export]',
[zero_rate] = '$_POST[zero_rate]',
[exempt] = '$_POST[exempt]',
[total_taxable_supplies] = '$_POST[total_taxable_supplies]',
[threshold_date] = '$_POST[threshold_date]',
[total_turnover] = '$_POST[total_turnover]',
[result_transfer] = '$_POST[result_transfer]',
[correspondence_reference] = '$_POST[correspondence_reference]',
[principal_account] = '$_POST[principal_account]',
[payment_basis] = '$_POST[payment_basis]',
[transfer_date] = '$_POST[transfer_date]'
WHERE [id] = '$_POST[id]' AND [id_profil] = '$_POST[id_profil]'";
	} else {
		//insert 
		$sql = "INSERT INTO [dbo].[com_pany_gst_att_link]
 ([com_pany_id_to],[company_id_from])
VALUES
 ('$_POST[com_pany_id]','$_POST[com_pany_id]')";
		$stmt = sqlsrv_query($conn, $sql);

		$sql = "INSERT INTO [dbo].[com_pany_gst_att]
 ([com_pany_id]
 ,[registration_application_date]
 ,[account_commence_date]
 ,[account_end]
 ,[status]
 ,[closure_reason]
 ,[registration_type]
 ,[tax_filing_frequency]
 ,[fiscal_year_end_month]
 ,[supply_precentage]
 ,[standard]
 ,[export]
 ,[zero_rate]
 ,[exempt]
 ,[total_taxable_supplies]
 ,[threshold_date]
 ,[total_turnover]
 ,[result_transfer]
 ,[correspondence_reference]
 ,[principal_account]
 ,[payment_basis]
 ,[transfer_date]
 ,[id_profil])
VALUES
 ('$_POST[com_pany_id]'
 ,'$_POST[registration_application_date]'
 ,'$_POST[account_commence_date]'
 ,'$_POST[account_end]'
 ,'$_POST[status]'
 ,'$_POST[closure_reason]'
 ,'$_POST[registration_type]'
 ,'$_POST[tax_filing_frequency]'
 ,'$_POST[fiscal_year_end_month]'
 ,'$_POST[supply_precentage]'
 ,'$_POST[standard]'
 ,'$_POST[export]'
 ,'$_POST[zero_rate]'
 ,'$_POST[exempt]'
 ,'$_POST[total_taxable_supplies]'
 ,'$_POST[threshold_date]'
 ,'$_POST[total_turnover]'
 ,'$_POST[result_transfer]'
 ,'$_POST[correspondence_reference]'
 ,'$_POST[principal_account]'
 ,'$_POST[payment_basis]'
 ,'$_POST[transfer_date]'
 ,'$_POST[id_profil]')";
	}
	$stmt = sqlsrv_query($conn, $sql);
	if ($stmt == 0) {
		$_SESSION['flash'] = "Gagal";
		$_SESSION['clr'] = "alert-danger";
	} else {
		$_SESSION['flash'] = "Berjaya";
		$_SESSION['clr'] = "alert-success";
	}
	header("Location : company_gst_att.php");
}

if (isset($_POST['simpan_house'])) {

	move_uploaded_file(
		$_FILES["attch_"]["tmp_name"],
		"./upload/" . $_FILES["attch_"]["name"]
	);
	$attachment = $_FILES["attch_"]["name"]; //<- This is it

	$_SESSION['id_profil'] = $_POST['id_profil'];
	$_SESSION['id_fir'] = $_POST['id_fir'];
	$_SESSION['hse_type'] = $_POST['hse_type'];
	$_SESSION['hse_stat'] = $_POST['hse_stat'];
	$_SESSION['month_rent'] = $_POST['month_rent'];
	$_SESSION['rent_since'] = $_POST['rent_since'];
	$_SESSION['hse_col'] = $_POST['hse_col'];
	$_SESSION['owner'] = $_POST['owner'];
	$_SESSION['id_regis'] = $_POST['id_regis'];
	$_SESSION['notas'] = $_POST['notas'];

	$sql1 = "INSERT INTO [jim].[dbo].[house_link]
           ([hse_type]
     	   ,[hse_stat]
     	   ,[attch_]
     	   ,[month_rent]
     	   ,[rent_since]
     	   ,[hse_col]
     	   ,[owner]
     	   ,[id_regis]
     	   ,[notas])
     	  VALUES
           ('$_POST[hse_type]'
           ,'$_POST[hse_stat]'
           ,'$attachment'
           ,'$_POST[month_rent]'
           ,'$_POST[rent_since]'
           ,'$_POST[hse_col]'
           ,'$_POST[owner]'
           ,'$_POST[id_regis]'
           ,'$_POST[notas]')";

	$stmt1 = sqlsrv_query($conn, $sql1);

	$sql = "INSERT INTO [jim].[dbo].[house]
           ([id_profil]
           ,[hse_type]
     	   ,[hse_stat]
     	   ,[attch_]
     	   ,[month_rent]
     	   ,[rent_since]
     	   ,[hse_col]
     	   ,[owner]
     	   ,[id_regis]
     	   ,[notas])
     	  VALUES
           ('$_SESSION[id_profil]'
           ,'$_POST[hse_type]'
           ,'$_POST[hse_stat]'
           ,'$attachment'
           ,'$_POST[month_rent]'
           ,'$_POST[rent_since]'
           ,'$_POST[hse_col]'
           ,'$_POST[owner]'
           ,'$_POST[id_regis]'
           ,'$_POST[notas]')";

	$stmt = sqlsrv_query($conn, $sql);
	if ($stmt == 0) {
		$_SESSION['flash'] = "Gagal";
		$_SESSION['clr'] = "alert-danger";
	} else {
		$_SESSION['flash'] = "Berjaya";
		$_SESSION['clr'] = "alert-success";
	}
	header("Location : house.php");
}

if (isset($_POST['reg_role'])) {

	$sql = "INSERT INTO [jim].[dbo].[u_role]
           ([role]
           ,[created_by]
           ,[date_created])
     VALUES
           ('$_POST[role]'
           ,CURRENT_TIMESTAMP
           ,'$_COOKIE[id]')";

	$stmt = sqlsrv_query($conn, $sql);
	header("Location : d_role.php");
}

if (isset($_POST['add_com_bank'])) {

	$sql1 = "INSERT INTO [jim].[dbo].[bank_link]
           ([n_bank]
           ,[p_aka]
           ,[j_aka]
           ,[l_aka]
           ,[n_aka]
           ,[b_aka]
           ,[a_bank]
           ,[note])
     VALUES
           ('$_POST[n_bank]'
           ,'$_POST[p_aka]'
           ,'$_POST[j_aka]'
           ,'$_POST[l_aka]'
           ,'$_POST[n_aka]'
           ,'$_POST[b_aka]'
           ,'$_POST[a_bank]'
           ,'$_POST[note]')";

	$stmt1 = sqlsrv_query($conn, $sql1);

	$sql = "INSERT INTO [jim].[dbo].[bank_syarikat]
           ([id_syarikat]
           ,[n_bank]
           ,[p_aka]
           ,[j_aka]
           ,[l_aka]
           ,[n_aka]
           ,[b_aka]
           ,[a_bank]
           ,[note])
     VALUES
           ('$_POST[no_c]'
           ,'$_POST[n_bank]'
           ,'$_POST[p_aka]'
           ,'$_POST[j_aka]'
           ,'$_POST[l_aka]'
           ,'$_POST[n_aka]'
           ,'$_POST[b_aka]'
           ,'$_POST[a_bank]'
           ,'$_POST[note]')";

	$stmt = sqlsrv_query($conn, $sql);
	if ($stmt == 0) {
		$_SESSION['flash'] = "Gagal";
		$_SESSION['clr'] = "alert-danger";
	} else {
		$_SESSION['flash'] = "Berjaya";
		$_SESSION['clr'] = "alert-success";
	}
	header("Location : company.php");
}

?>