<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
 <?php 
session_start();
include 'include/dbconn.php';
include 'include/cache.php';
if(isset($_COOKIE['id'])){
$last_link = $_SERVER['REQUEST_URI'];
setcookie ("last_link",$last_link,time()+ (10 * 365 * 24 * 60 * 60));
$fulln = $_COOKIE['id'];

$sql = "SELECT *  FROM [jim].[dbo].[login] WHERE id = '$fulln'";
$stmt = sqlsrv_query ($conn , $sql);
if( !$stmt) {
}
else{
$r = sqlsrv_fetch_array($stmt);
$fulname= $r['fulname'];
$role = $r['role'];
$ngri = $r['ngri'];
}
}

if (isset($_POST['kemaskini_diari'])) {
  # code...
$_SESSION['id_fir'] = $_POST['id_fir'];

header("Location : diari_fir.php");
}

if(isset($_POST['kemaskini_cdiari'])){
	
$id = $_POST['id'];
	
$sql = "SELECT * FROM [jim].[dbo].[diari] WHERE id = '$id'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
}

else{
$r = sqlsrv_fetch_array($stmt);
$_SESSION['id'] = $r['id'];
$_SESSION['id_fir'] = $r['id_fir'];
$_SESSION['diari_no'] = $r['diari_no'];
$_SESSION['nm_ptgas'] = $r['nm_ptgas'];
$_SESSION['jwt'] = $r['jwt'];
$_SESSION['trkh'] = $r['trkh'];
$_SESSION['ms'] = $r['ms'];
$_SESSION['butiran'] = $r['butiran'];

header("Location : diari_k.php");
}
}

if(isset($_POST['kemaskini_diari1'])){
	
$id = $_POST['id'];
$_SESSION['id_fir'] = $_POST['id_fir'];
$_SESSION['namep'] = $_POST['namep'];
$_SESSION['jwtan'] = $_POST['jwtan'];
$_SESSION['trik'] = $_POST['trik'];
$_SESSION['msa'] = $_POST['msa'];
$_SESSION['note'] = $_POST['note'];
	
$sql = "UPDATE [jim].[dbo].[diari]
   SET [nm_ptgas] = '$_SESSION[namep]'
      ,[jwt] = '$_SESSION[jwtan]'
      ,[trkh] = '$_SESSION[trik]'
      ,[ms] = '$_SESSION[msa]'
      ,[butiran] = '$_SESSION[note]'
       WHERE id = '$id'";
$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

header("Location : diari_fir.php");
}

if(isset($_POST['hantar_pengarah'])){
  
$id = $_POST['id'];
  
$sql = "UPDATE [jim].[dbo].[admin]
          SET [status] = 'SEMAKAN PENGARAH'
        WHERE id = '$id'";
$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

header("Location : menu.php");
}

if(isset($_POST['tutup_Kes'])){
  
$id = $_POST['id'];
  
$sql = "UPDATE [jim].[dbo].[admin]
          SET [status] = 'TUTUP KES', [cs_status] = 'Closed(Completed)'

        WHERE id = '$id'";
$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

header("Location : menu.php");
}

if(isset($_POST['buka_semula'])){
  
$id = $_POST['id'];
$cttn = $_POST['cttn'];
  
$sql = "UPDATE [jim].[dbo].[admin]
          SET [status] = 'SEMAKAN SIASATAN', [cs_status] = 'Active(Reopend Case)'
             ,[catatan_pengarah] = '$cttn'
        WHERE id = '$id'";
$stmt = sqlsrv_query( $conn, $sql );
if ($stmt == 0){  $_SESSION['flash'] = "Gagal";  $_SESSION['clr'] = "alert-danger";}
else {  $_SESSION['flash'] = "Berjaya";  $_SESSION['clr'] = "alert-success";}

header("Location : menu.php");
}

if (isset($_POST['edit_user'])) {

$id = $_POST['id'];

$sql = "SELECT * FROM [jim].[dbo].[login] WHERE id = '$id'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
}
else{
$r = sqlsrv_fetch_array($stmt);
$_SESSION['id']= $r['id'];
$_SESSION['fulname']= $r['fulname'];
$_SESSION['username']= $r['username'];
$_SESSION['password']= $r['password'];
$_SESSION['ngri']= $r['ngri'];
$_SESSION['email']= $r['email'];
$_SESSION['tel']= $r['tel'];
$_SESSION['jwt']= $r['jwt'];
$_SESSION['role']= $r['role'];
}

header("Location : e_user.php");
}
		
if (isset($_POST['kemaskini_fir'])) {

$id_fir = $_POST['id_fir'];

$sql = "SELECT * FROM [jim].[dbo].[admin] WHERE id_fir = '$id_fir'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
}
else{
$r = sqlsrv_fetch_array($stmt);
$_SESSION['id_fir'] = $r['id_fir'];
$_SESSION['distribution'] = $r['distribution'];
$_SESSION['cs_status'] = $r['cs_status'];
$_SESSION['intell_no'] = $r['intell_no'];
$_SESSION['invest_no'] = $r['invest_no'];
$_SESSION['title'] = $r['title'];
$_SESSION['major'] = $r['major'];
$_SESSION['minor'] = $r['minor'];
$_SESSION['date_regist'] = $r['date_regist'];
$_SESSION['operator'] = $r['operator'];
$_SESSION['officer'] = $r['officer'];
$_SESSION['department'] = $r['department'];
$_SESSION['team'] = $r['team'];
$_SESSION['state'] = $r['state'];
$_SESSION['country'] = $r['country'];
$_SESSION['do'] = $r['do'];
$_SESSION['do_num'] = $r['do_num'];
$_SESSION['do_mail'] = $r['do_mail'];
$_SESSION['aho_officer'] = $r['aho_officer'];
$_SESSION['aho_num'] = $r['aho_num'];
$_SESSION['intell_team'] = $r['intell_team'];
$_SESSION['sfo_officer'] = $r['sfo_officer'];
$_SESSION['sfo_num'] = $r['sfo_num'];
$_SESSION['intell_start'] = $r['intell_start'];
$_SESSION['intell_end'] = $r['intell_end'];
$_SESSION['priority'] = $r['priority'];
$_SESSION['status'] = $r['status'];
}
header("Location : k_fir.php");
}

if (isset($_POST['bentuk_pasukan'])) {

$_SESSION['id_fir'] = $_POST['id_fir'];

header("Location : c_team.php");
}

if(isset($_POST['edit_profile'])){

move_uploaded_file($_FILES["pic_left"]["tmp_name"],
      "./upload/" . $_FILES["pic_left"]["name"]);
      $p_left = $_FILES["pic_left"]["name"]; //<- This is it

move_uploaded_file($_FILES["pic_cntr"]["tmp_name"],
      "./upload/" . $_FILES["pic_cntr"]["name"]);
      $p_cntr = $_FILES["pic_cntr"]["name"]; //<- This is it

move_uploaded_file($_FILES["pic_right"]["tmp_name"],
      "./upload/" . $_FILES["pic_right"]["name"]);
      $p_right = $_FILES["pic_right"]["name"]; //<- This is it 

$sql = "UPDATE [jim].[dbo].[profile] SET
      [id_profil] = '$_POST[id_profil]'
      ,[id_fir] = '$_POST[id_fir]'
      ,[picleft] = '$p_left'
      ,[piccenter] = '$p_cntr'
      ,[picright] = '$p_right'
      ,[status] = '$_POST[status]'
      ,[crimetree] = '$_POST[tree]'
      ,[relationship] = '$_POST[relay]'
      ,[firstname] = '$_POST[f_name]'
      ,[middlename] = '$_POST[m_name]'
      ,[lastname] = '$_POST[l_name]'
      ,[nickname] = '$_POST[n_name]'
      ,[language] = '$_POST[lngge]'
      ,[gender] = '$_POST[gender_]'
      ,[birth] = '$_POST[dob]'
      ,[age] = '$_POST[age_]'
      ,[race] = '$_POST[race_]'
      ,[ethnic] = '$_POST[ethnc]'
      ,[country] = '$_POST[cob]'
      ,[marital] = '$_POST[marital_]'
      ,[nationality] = '$_POST[national]'
      ,[notes] = '$_POST[notas]'
      WHERE id = '$_POST[id]'";

$stmt = sqlsrv_query( $conn, $sql );

$sql = "SELECT * FROM [jim].[dbo].[profile] WHERE id = '$_POST[id]'";
$stmt = sqlsrv_query( $conn, $sql );
$r = sqlsrv_fetch_array($stmt);

$_SESSION['id_fir'] = $r['id_fir'];
$_SESSION['id_profil'] = $r['id_profil'];
$_SESSION['picleft'] = $r['picleft'];
$_SESSION['piccenter'] = $r['piccenter'];
$_SESSION['picright'] = $r['picright'];
$_SESSION['status'] = $r['status'];
$_SESSION['crimetree'] = $r['crimetree'];
$_SESSION['relationship'] = $r['relationship'];
$_SESSION['firstname'] = $r['firstname'];
$_SESSION['middlename'] = $r['middlename'];
$_SESSION['lastname'] = $r['lastname'];
$_SESSION['nickname'] = $r['nickname'];
$_SESSION['language'] = $r['language'];
$_SESSION['gender'] = $r['gender'];
$_SESSION['birth'] = $r['birth'];
$_SESSION['age'] = $r['age'];
$_SESSION['race'] = $r['race'];
$_SESSION['ethnic'] = $r['ethnic'];
$_SESSION['country'] = $r['country'];
$_SESSION['marital'] = $r['marital'];
$_SESSION['nationality'] = $r['nationality'];
$_SESSION['notes'] = $r['notes'];


header("Location : physical.php");
}

if (isset($_POST['edit_fizikal'])) {
    # code...
$_SESSION['id'] = $_POST['id'];

$sql = "SELECT * FROM [jim].[dbo].[physical] WHERE id = '$_SESSION[id]'";
$stmt = sqlsrv_query( $conn, $sql );
$r = sqlsrv_fetch_array($stmt);

$_SESSION['id_profil'] = $r['id_profil'];
$_SESSION['fullpic'] = $r['fullpic'];
$_SESSION['height'] = $r['height'];
$_SESSION['weight'] = $r['weight'];
$_SESSION['eyecolor'] = $r['eyecolor'];
$_SESSION['haircolor'] = $r['haircolor'];
$_SESSION['scar'] = $r['scar'];
$_SESSION['glasses'] = $r['glasses'];
$_SESSION['build'] = $r['build'];
$_SESSION['hairlength'] = $r['hairlength'];
$_SESSION['tattoos'] = $r['tattoos'];
$_SESSION['blood'] = $r['blood'];
$_SESSION['attch'] = $r['attch'];
$_SESSION['note'] = $r['note'];

header("Location : physical1.php");
}

if(isset($_POST['edit_physical'])){

move_uploaded_file($_FILES["pic_full"]["tmp_name"],
      "./upload/" . $_FILES["pic_full"]["name"]);
      $full_pic = $_FILES["pic_full"]["name"]; //<- This is it 
      
move_uploaded_file($_FILES["attch_"]["tmp_name"],
      "./upload/" . $_FILES["attch_"]["name"]);
      $attachment = $_FILES["attch_"]["name"]; //<- This is it

$sql = "UPDATE [jim].[dbo].[physical] SET

            [id_profil] = '$_POST[id_profil]'
           ,[fullpic] = '$full_pic'
           ,[height] = '$_POST[height_]'
           ,[weight] = '$_POST[weight_]'
           ,[eyecolor] = '$_POST[eye_col]'
           ,[haircolor] = '$_POST[hair_col]'
           ,[scar] = '$_POST[scar_bm]'
           ,[glasses] = '$_POST[glasses]'
           ,[build] = '$_POST[build_]'
           ,[hairlength] = '$_POST[hair_length]'
           ,[tattoos] = '$_POST[tattoo]'
           ,[blood] = '$_POST[blood_]'
           ,[attch] = '$attachment'
           ,[note] = '$_POST[notas]'
           WHERE id = '$_POST[id]'";

$stmt = sqlsrv_query( $conn, $sql );
header("Location : physical.php");
}

if (isset($_POST['edit_identity'])) {
    # code...
$_SESSION['id'] = $_POST['id'];

$sql = "SELECT * FROM [jim].[dbo].[ic] WHERE id = '$_SESSION[id]'";
$stmt = sqlsrv_query( $conn, $sql );
$r = sqlsrv_fetch_array($stmt);

$_SESSION['id_fir'] = $r['id_fir'];
$_SESSION['id_profil'] = $r['id_profil'];
$_SESSION['nom'] = $r['nom'];
$_SESSION['status'] = $r['status'];
$_SESSION['idpic'] = $r['idpic'];
$_SESSION['chippic'] = $r['chippic'];
$_SESSION['security'] = $r['security'];
$_SESSION['cardtype'] = $r['cardtype'];
$_SESSION['firstname'] = $r['firstname'];
$_SESSION['middlename'] = $r['middlename'];
$_SESSION['lastname'] = $r['lastname'];
$_SESSION['add1'] = $r['add1'];
$_SESSION['add2'] = $r['add2'];
$_SESSION['add3'] = $r['add3'];
$_SESSION['poscode'] = $r['poscode'];
$_SESSION['city'] = $r['city'];
$_SESSION['state'] = $r['state'];
$_SESSION['country'] = $r['country'];
$_SESSION['lafr'] = $r['lafr'];
$_SESSION['attch'] = $r['attch'];
$_SESSION['note'] = $r['note'];

header("Location : identitycard1.php");
}

if(isset($_POST['edit_ic'])){

move_uploaded_file($_FILES["id_pic"]["tmp_name"],
      "./upload/" . $_FILES["id_pic"]["name"]);
      $id_pic_ = $_FILES["id_pic"]["name"]; //<- This is it

move_uploaded_file($_FILES["ic_chip"]["tmp_name"],
      "./upload/" . $_FILES["ic_chip"]["name"]);
      $ic_chip_ = $_FILES["ic_chip"]["name"]; //<- This is it 
  
move_uploaded_file($_FILES["attch_"]["tmp_name"],
      "./upload/" . $_FILES["attch_"]["name"]);
      $attachment = $_FILES["attch_"]["name"]; //<- This is it


$sql = "UPDATE [jim].[dbo].[ic_link] SET
            [idpic] = '$id_pic_'
           ,[chippic] = '$ic_chip_'
           ,[nom] = '$_POST[ic_nom]'
           ,[status] = '$_POST[ic_status]'
           ,[security] = '$_POST[sec_ref]'
           ,[cardtype] = '$_POST[card_type]'
           ,[firstname] = '$_POST[f_name]'
           ,[middlename] = '$_POST[m_name]'
           ,[lastname] = '$_POST[l_name]'
           ,[add1] = '$_POST[add_1]'
           ,[add2] = '$_POST[add_2]'
           ,[add3] = '$_POST[add_3]'
           ,[poscode] = '$_POST[pos_code]'
           ,[city] = '$_POST[city_]'
           ,[state] = '$_POST[state_]'
           ,[country] = '$_POST[country_]'
           ,[lafr] = '$_POST[lafr_]'
           ,[attch] = '$attachment'
           ,[note] = '$_POST[notas]'
           WHERE nom = '$_POST[ic_nom1]'";

$stmt = sqlsrv_query( $conn, $sql );

$sql = "UPDATE [jim].[dbo].[ic] SET
            [id_fir] = '$_POST[id_fir]'
           ,[id_profil] = '$_POST[id_profil]'
           ,[idpic] = '$id_pic_'
           ,[chippic] = '$ic_chip_'
           ,[nom] = '$_POST[ic_nom]'
           ,[status] = '$_POST[ic_status]'
           ,[security] = '$_POST[sec_ref]'
           ,[cardtype] = '$_POST[card_type]'
           ,[firstname] = '$_POST[f_name]'
           ,[middlename] = '$_POST[m_name]'
           ,[lastname] = '$_POST[l_name]'
           ,[add1] = '$_POST[add_1]'
           ,[add2] = '$_POST[add_2]'
           ,[add3] = '$_POST[add_3]'
           ,[poscode] = '$_POST[pos_code]'
           ,[city] = '$_POST[city_]'
           ,[state] = '$_POST[state_]'
           ,[country] = '$_POST[country_]'
           ,[lafr] = '$_POST[lafr_]'
           ,[attch] = '$attachment'
           ,[note] = '$_POST[notas]'
           WHERE id = '$_POST[id]'";

$stmt = sqlsrv_query( $conn, $sql );
header("Location : identitycard.php");
}

if (isset($_POST['edit_pasport'])) {
    # code...
$_SESSION['id'] = $_POST['id'];

$sql = "SELECT * FROM [jim].[dbo].[passport] WHERE id = '$_SESSION[id]'";
$stmt = sqlsrv_query( $conn, $sql );
$r = sqlsrv_fetch_array($stmt);

$_SESSION['id_profil'] = $r['id_profil'];
$_SESSION['status'] = $r['status'];
$_SESSION['nomnew'] = $r['nomnew'];
$_SESSION['nomold'] = $r['nomold'];
$_SESSION['mrz'] = $r['mrz'];
$_SESSION['type'] = $r['type'];
$_SESSION['firstname'] = $r['firstname'];
$_SESSION['middlename'] = $r['middlename'];
$_SESSION['lastname'] = $r['lastname'];
$_SESSION['passpic'] = $r['passpic'];
$_SESSION['chippic'] = $r['chippic'];
$_SESSION['signpic'] = $r['signpic'];
$_SESSION['countrycode'] = $r['countrycode'];
$_SESSION['gender'] = $r['gender'];
$_SESSION['birth'] = $r['birth'];
$_SESSION['age'] = $r['age'];
$_SESSION['nationality'] = $r['nationality'];
$_SESSION['dateissue'] = $r['dateissue'];
$_SESSION['dateexpired'] = $r['dateexpired'];
$_SESSION['issueplace'] = $r['issueplace'];
$_SESSION['issuecountry'] = $r['issuecountry'];
$_SESSION['height'] = $r['height'];
$_SESSION['weight'] = $r['weight'];
$_SESSION['lafr'] = $r['lafr'];
$_SESSION['attch'] = $r['attch'];
$_SESSION['note'] = $r['note'];

header("Location : passport1.php");
}

if(isset($_POST['edit_passport'])){

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

$sql = "UPDATE [jim].[dbo].[passport_link] SET
            [passpic] = '$pass_pic'
           ,[chippic] = '$pass_chip'
           ,[signpic] = '$pass_sign'
           ,[status] = '$_POST[p_status]'
           ,[nomnew] = '$_POST[pnom_new]'
           ,[nomold] = '$_POST[pnom_old]'
           ,[mrz] = '$_POST[mrz_no]'
           ,[type] = '$_POST[p_type]'
           ,[firstname] = '$_POST[f_name]'
           ,[middlename] = '$_POST[m_name]'
           ,[lastname] = '$_POST[l_name]'
           ,[countrycode] = '$_POST[coun_code]'
           ,[gender] = '$_POST[gender_]'
           ,[birth] = '$_POST[dob]'
           ,[age] = '$_POST[age_]'
           ,[nationality] = '$_POST[national]'
           ,[dateissue] = '$_POST[d_issue]'
           ,[dateexpired] = '$_POST[d_exp]'
           ,[issueplace] = '$_POST[issue_plce]'
           ,[issuecountry] = '$_POST[issue_coun]'
           ,[height] = '$_POST[height_]'
           ,[weight] = '$_POST[weight_]'
           ,[lafr] = '$_POST[lafr_]'
           ,[attch] = '$attachment'
           ,[note] = '$_POST[notas]'
           WHERE nomnew = '$_POST[pnom_new1]'";

$stmt = sqlsrv_query( $conn, $sql );

$sql = "UPDATE [jim].[dbo].[passport] SET
            [id_profil] = '$_POST[id_profil]'
           ,[passpic] = '$pass_pic'
           ,[chippic] = '$pass_chip'
           ,[signpic] = '$pass_sign'
           ,[status] = '$_POST[p_status]'
           ,[nomnew] = '$_POST[pnom_new]'
           ,[nomold] = '$_POST[pnom_old]'
           ,[mrz] = '$_POST[mrz_no]'
           ,[type] = '$_POST[p_type]'
           ,[firstname] = '$_POST[f_name]'
           ,[middlename] = '$_POST[m_name]'
           ,[lastname] = '$_POST[l_name]'
           ,[countrycode] = '$_POST[coun_code]'
           ,[gender] = '$_POST[gender_]'
           ,[birth] = '$_POST[dob]'
           ,[age] = '$_POST[age_]'
           ,[nationality] = '$_POST[national]'
           ,[dateissue] = '$_POST[d_issue]'
           ,[dateexpired] = '$_POST[d_exp]'
           ,[issueplace] = '$_POST[issue_plce]'
           ,[issuecountry] = '$_POST[issue_coun]'
           ,[height] = '$_POST[height_]'
           ,[weight] = '$_POST[weight_]'
           ,[lafr] = '$_POST[lafr_]'
           ,[attch] = '$attachment'
           ,[note] = '$_POST[notas]'
           WHERE id = '$_POST[id]'";

$stmt = sqlsrv_query( $conn, $sql );
header("Location : passport.php");
}

if (isset($_POST['edit_lesen'])) {
    # code...
$_SESSION['id'] = $_POST['id'];

$sql = "SELECT * FROM [jim].[dbo].[drivelicense] WHERE id = '$_SESSION[id]'";
$stmt = sqlsrv_query( $conn, $sql );
$r = sqlsrv_fetch_array($stmt);

$_SESSION['id_profil'] = $r['id_profil'];
$_SESSION['serialno'] = $r['serialno'];
$_SESSION['status'] = $r['status'];
$_SESSION['licensepic'] = $r['licensepic'];
$_SESSION['chippic'] = $r['chippic'];
$_SESSION['class'] = $r['class'];
$_SESSION['firstname'] = $r['firstname'];
$_SESSION['middlename'] = $r['middlename'];
$_SESSION['lastname'] = $r['lastname'];
$_SESSION['nationality'] = $r['nationality'];
$_SESSION['startdate'] = $r['startdate'];
$_SESSION['expireddate'] = $r['expireddate'];
$_SESSION['placeissue'] = $r['placeissue'];
$_SESSION['country'] = $r['country'];
$_SESSION['lafr'] = $r['lafr'];
$_SESSION['attch'] = $r['attch'];
$_SESSION['note'] = $r['note'];

header("Location : drivinglicense1.php");
}

if(isset($_POST['edit_license'])){

move_uploaded_file($_FILES["dl_pic"]["tmp_name"],
      "./upload/" . $_FILES["dl_pic"]["name"]);
      $drive_pic = $_FILES["dl_pic"]["name"]; //<- This is it

move_uploaded_file($_FILES["dl_chip"]["tmp_name"],
      "./upload/" . $_FILES["dl_chip"]["name"]);
      $drive_chip = $_FILES["dl_chip"]["name"]; //<- This is it 
  
move_uploaded_file($_FILES["attch_"]["tmp_name"],
      "./upload/" . $_FILES["attch_"]["name"]);
      $attachment = $_FILES["attch_"]["name"]; //<- This is it

$sql = "UPDATE [jim].[dbo].[drivelicense_link] SET
            [licensepic] = '$drive_pic'
           ,[chippic] = '$drive_chip'
           ,[serialno] = '$_POST[serial_nom]'
           ,[status] = '$_POST[dl_status]'
           ,[class] = '$_POST[drive_class]'
           ,[firstname] = '$_POST[f_name]'
           ,[middlename] = '$_POST[m_name]'
           ,[lastname] = '$_POST[l_name]'
           ,[nationality] = '$_POST[national]'
           ,[startdate] = '$_POST[st_date]'
           ,[expireddate] = '$_POST[exp_date]'
           ,[placeissue] = '$_POST[issue_plce]'
           ,[country] = '$_POST[country_]'
           ,[lafr] = '$_POST[lafr_]'
           ,[attch] = '$attachment'
           ,[note] = '$_POST[notas]'
           WHERE serialno = '$_POST[serial_nom1]'";

$stmt = sqlsrv_query( $conn, $sql );

$sql = "UPDATE [jim].[dbo].[drivelicense] SET
            [id_profil] = '$_POST[id_profil]'
           ,[licensepic] = '$drive_pic'
           ,[chippic] = '$drive_chip'
           ,[serialno] = '$_POST[serial_nom]'
           ,[status] = '$_POST[dl_status]'
           ,[class] = '$_POST[drive_class]'
           ,[firstname] = '$_POST[f_name]'
           ,[middlename] = '$_POST[m_name]'
           ,[lastname] = '$_POST[l_name]'
           ,[nationality] = '$_POST[national]'
           ,[startdate] = '$_POST[st_date]'
           ,[expireddate] = '$_POST[exp_date]'
           ,[placeissue] = '$_POST[issue_plce]'
           ,[country] = '$_POST[country_]'
           ,[lafr] = '$_POST[lafr_]'
           ,[attch] = '$attachment'
           ,[note] = '$_POST[notas]'
           WHERE id = '$_POST[id]'";

$stmt = sqlsrv_query( $conn, $sql );
header("Location : drivinglicense.php");
}

if (isset($_POST['edit_transport'])) {
    # code...
//$_SESSION['id'] = $_POST['id'];

$sql = "SELECT * FROM [jim].[dbo].[transportation] WHERE id = '$_POST[id]'";
$stmt = sqlsrv_query( $conn, $sql );
$r = sqlsrv_fetch_array($stmt);

$_SESSION['id'] = $_POST['id'];
$_SESSION['id_profil'] = $r['id_profil'];
$_SESSION['pic'] = $r['pic'];
$_SESSION['registno'] = $r['registno'];
$_SESSION['status'] = $r['status'];
$_SESSION['type'] = $r['type'];
$_SESSION['maker'] = $r['maker'];
$_SESSION['model'] = $r['model'];
$_SESSION['color'] = $r['color'];
$_SESSION['year'] = $r['year'];
$_SESSION['registdate'] = $r['registdate'];
$_SESSION['attch'] = $r['attch'];
$_SESSION['note'] = $r['note'];

header("Location : transportation1.php");
}

if(isset($_POST['edit_transportation'])){

move_uploaded_file($_FILES["trans_pic"]["tmp_name"],
      "./upload/" . $_FILES["trans_pic"]["name"]);
      $trans_photo = $_FILES["trans_pic"]["name"]; //<- This is it 
  
move_uploaded_file($_FILES["attch_"]["tmp_name"],
      "./upload/" . $_FILES["attch_"]["name"]);
      $attachment = $_FILES["attch_"]["name"]; //<- This is it


$sql = "UPDATE [jim].[dbo].[transportation_link] SET
            [pic] = '$trans_photo'
           ,[registno] = '$_POST[reg_nom]'
           ,[status] = '$_POST[vehic_status]'
           ,[type] = '$_POST[trans_type]'
           ,[maker] = '$_POST[trans_maker]'
           ,[model] = '$_POST[trans_model]'
           ,[color] = '$_POST[trans_color]'
           ,[year] = '$_POST[vehic_year]'
           ,[registdate] = '$_POST[reg_date]'
           ,[attch] = '$attachment'
           ,[note] = '$_POST[notas]'
           WHERE registno = '$_POST[reg_nom1]'";

$stmt = sqlsrv_query( $conn, $sql );

$sql = "UPDATE [jim].[dbo].[transportation] SET
            [id_profil] = '$_POST[id_profil]'
           ,[pic] = '$trans_photo'
           ,[registno] = '$_POST[reg_nom]'
           ,[status] = '$_POST[vehic_status]'
           ,[type] = '$_POST[trans_type]'
           ,[maker] = '$_POST[trans_maker]'
           ,[model] = '$_POST[trans_model]'
           ,[color] = '$_POST[trans_color]'
           ,[year] = '$_POST[vehic_year]'
           ,[registdate] = '$_POST[reg_date]'
           ,[attch] = '$attachment'
           ,[note] = '$_POST[notas]'
           WHERE id = '$_POST[id]'";

$stmt = sqlsrv_query( $conn, $sql );
header("Location : transportation.php");
}

if (isset($_POST['edit_bank'])) {
    # code...
$_SESSION['id'] = $_POST['id'];

$sql = "SELECT * FROM [jim].[dbo].[bank] WHERE id = '$_SESSION[id]'";
$stmt = sqlsrv_query( $conn, $sql );
$r = sqlsrv_fetch_array($stmt);

$_SESSION['id_profil'] = $r['id_profil'];
$_SESSION['n_bank'] = $r['n_bank'];
$_SESSION['p_aka'] = $r['p_aka'];
$_SESSION['j_aka'] = $r['j_aka'];
$_SESSION['l_aka'] = $r['l_aka'];
$_SESSION['n_aka'] = $r['n_aka'];
$_SESSION['b_aka'] = $r['b_aka'];
$_SESSION['a_bank'] = $r['a_bank'];
$_SESSION['note'] = $r['note'];

header("Location : bank1.php");
}

if(isset($_POST['edit_bank2'])){

$sql = "UPDATE [jim].[dbo].[bank_link] SET
            [n_aka] = '$_POST[n_aka]'
           ,[p_aka] = '$_POST[p_aka]'
           ,[j_aka] = '$_POST[j_aka]'
           ,[l_aka] = '$_POST[l_aka]'
           ,[n_bank] = '$_POST[n_bank]'
           ,[b_aka] = '$_POST[b_aka]'
           ,[a_bank] = '$_POST[a_bank]'
           ,[note] = '$_POST[note]'
           WHERE n_aka = '$_POST[n_aka1]'";

$stmt = sqlsrv_query( $conn, $sql );

$sql = "UPDATE [jim].[dbo].[bank] SET
            [id_profil] = '$_POST[id_profil]'
           ,[n_aka] = '$_POST[n_aka]'
           ,[p_aka] = '$_POST[p_aka]'
           ,[j_aka] = '$_POST[j_aka]'
           ,[l_aka] = '$_POST[l_aka]'
           ,[n_bank] = '$_POST[n_bank]'
           ,[b_aka] = '$_POST[b_aka]'
           ,[a_bank] = '$_POST[a_bank]'
           ,[note] = '$_POST[note]'
           WHERE id = '$_POST[id]'";

$stmt = sqlsrv_query( $conn, $sql );
header("Location : bank.php");
}

if (isset($_POST['edit_syarikat'])) {
    # code...
$_SESSION['id'] = $_POST['id'];

$sql = "SELECT * FROM [jim].[dbo].[com_pany] WHERE id = '$_SESSION[id]'";
$stmt = sqlsrv_query( $conn, $sql );
$r = sqlsrv_fetch_array($stmt);

$_SESSION['id_profil'] = $r['id_profil'];
$_SESSION['c_name'] = $r['c_name'];
$_SESSION['no_c'] = $r['no_c'];
$_SESSION['attch'] = $r['attch'];
$_SESSION['exp_regist'] = $r['exp_regist'];
$_SESSION['sek'] = $r['sek'];
$_SESSION['ala'] = $r['ala'];
$_SESSION['tel'] = $r['tel'];
$_SESSION['exttel'] = $r['exttel'];
$_SESSION['fax'] = $r['fax'];
$_SESSION['email'] = $r['email'];
$_SESSION['web'] = $r['web'];
$_SESSION['note'] = $r['note'];

header("Location : company1.php");
}

if(isset($_POST['edit_company'])){
/*
move_uploaded_file($_FILES["web"]["tmp_name"],
      "./upload/" . $_FILES["web"]["name"]);
      $web = $_FILES["web"]["name"]; //<- This is it 
  */
move_uploaded_file($_FILES["attch"]["tmp_name"],
      "./upload/" . $_FILES["attch"]["name"]);
      $attachment = $_FILES["attch"]["name"]; //<- This is it

$sql = "UPDATE [jim].[dbo].[com_pany_link] SET
           [c_name] = '$_POST[c_name]'
           ,[no_c] = '$_POST[no_c]'
           ,[attch] = '$attachment'
           ,[exp_regist] = '$_POST[exp_regist]'
           ,[sek] = '$_POST[sek]'
           ,[ala] = '$_POST[ala]'
           ,[tel] = '$_POST[tel]'
           ,[exttel] = '$_POST[exttel]'
           ,[fax] = '$_POST[fax]'
           ,[email] = '$_POST[email]'
           ,[web] = '$_POST[web]'
           ,[note] = '$_POST[note]'
           WHERE no_c = '$_POST[no_c1]'";

$stmt = sqlsrv_query( $conn, $sql );

$sql = "UPDATE [jim].[dbo].[com_pany] SET
            [id_profil] = '$_POST[id_profil]'
           ,[c_name] = '$_POST[c_name]'
           ,[no_c] = '$_POST[no_c]'
           ,[attch] = '$attachment'
           ,[exp_regist] = '$_POST[exp_regist]'
           ,[sek] = '$_POST[sek]'
           ,[ala] = '$_POST[ala]'
           ,[tel] = '$_POST[tel]'
           ,[exttel] = '$_POST[exttel]'
           ,[fax] = '$_POST[fax]'
           ,[email] = '$_POST[email]'
           ,[web] = '$_POST[web]'
           ,[note] = '$_POST[note]'
           WHERE id = '$_POST[id]'";

$stmt = sqlsrv_query( $conn, $sql );
header("Location : company.php");
}

if (isset($_POST['edit_media'])) {
    # code...
$_SESSION['id'] = $_POST['id'];

$sql = "SELECT * FROM [jim].[dbo].[msocial] WHERE id = '$_SESSION[id]'";
$stmt = sqlsrv_query( $conn, $sql );
$r = sqlsrv_fetch_array($stmt);

$_SESSION['id_profil'] = $r['id_profil'];
$_SESSION['attch_'] = $r['attch_'];
$_SESSION['sm_type'] = $r['sm_type'];
$_SESSION['sm_fname'] = $r['sm_fname'];
$_SESSION['sm_name'] = $r['sm_name'];
$_SESSION['sm_url'] = $r['sm_url'];
$_SESSION['sm_id'] = $r['sm_id'];
$_SESSION['notas'] = $r['notas'];

header("Location : smedia1.php");
}

if(isset($_POST['edit_smedia'])){

move_uploaded_file($_FILES["attch_"]["tmp_name"],
      "./upload/" . $_FILES["attch_"]["name"]);
      $attachment = $_FILES["attch_"]["name"]; //<- This is it

$sql = "UPDATE [jim].[dbo].[msocial] SET
            [id_profil] = '$_POST[id_profil]'
           ,[sm_type] = '$_POST[sm_type]'
           ,[sm_fname] = '$_POST[sm_fname]'
           ,[attch_] = '$attachment'
           ,[sm_name] = '$_POST[sm_name]'
           ,[sm_url] = '$_POST[sm_url]'
           ,[sm_id] = '$_POST[sm_id]'
           ,[notas] = '$_POST[notas]'
           WHERE id = '$_POST[id]'";

$stmt = sqlsrv_query( $conn, $sql );
header("Location : smedia.php");
}

if (isset($_POST['edit_mobile'])) {
    # code...
$_SESSION['id'] = $_POST['id'];

$sql = "SELECT * FROM [jim].[dbo].[mobileno] WHERE id = '$_SESSION[id]'";
$stmt = sqlsrv_query( $conn, $sql );
$r = sqlsrv_fetch_array($stmt);

$_SESSION['id_profil'] = $r['id_profil'];
$_SESSION['attch'] = $r['attch'];
$_SESSION['nom'] = $r['nom'];
$_SESSION['service'] = $r['service'];
$_SESSION['registdate'] = $r['registdate'];
$_SESSION['status'] = $r['status'];
$_SESSION['terminatedate'] = $r['terminatedate'];
$_SESSION['tower'] = $r['tower'];
$_SESSION['record'] = $r['record'];
$_SESSION['note'] = $r['note'];

header("Location : mobileno1.php");
}

if(isset($_POST['edit_mobileno'])){

move_uploaded_file($_FILES["call_record"]["tmp_name"],
      "./upload/" . $_FILES["call_record"]["name"]);
      $cll_record = $_FILES["call_record"]["name"]; //<- This is it 
  
move_uploaded_file($_FILES["attch_"]["tmp_name"],
      "./upload/" . $_FILES["attch_"]["name"]);
      $attachment = $_FILES["attch_"]["name"]; //<- This is it

$sql = "UPDATE [jim].[dbo].[mobileno_link] SET
            [nom] = '$_POST[mob_nom]'
           ,[service] = '$_POST[srvc_prov]'
           ,[registdate] = '$_POST[reg_date]'
           ,[status] = '$_POST[conn_status]'
           ,[terminatedate] = '$_POST[term_date]'
           ,[tower] = '$_POST[near_tower]'
           ,[record] = '$cll_record'
           ,[attch] = '$attachment'
           ,[note] = '$_POST[notas]'
           WHERE nom = '$_POST[mob_nom1]'";

$stmt = sqlsrv_query( $conn, $sql );

$sql = "UPDATE [jim].[dbo].[mobileno] SET
            [id_profil] = '$_POST[id_profil]'
           ,[nom] = '$_POST[mob_nom]'
           ,[service] = '$_POST[srvc_prov]'
           ,[registdate] = '$_POST[reg_date]'
           ,[status] = '$_POST[conn_status]'
           ,[terminatedate] = '$_POST[term_date]'
           ,[tower] = '$_POST[near_tower]'
           ,[record] = '$cll_record'
           ,[attch] = '$attachment'
           ,[note] = '$_POST[notas]'
           WHERE id = '$_POST[id]'";

$stmt = sqlsrv_query( $conn, $sql );
header("Location : mobileno.php");
}

if (isset($_POST['edit_rumah'])) {
    # code...
$_SESSION['id'] = $_POST['id'];

$sql = "SELECT * FROM [jim].[dbo].[house] WHERE id = '$_SESSION[id]'";
$stmt = sqlsrv_query( $conn, $sql );
$r = sqlsrv_fetch_array($stmt);

$_SESSION['id_profil'] = $r['id_profil'];
$_SESSION['attch_'] = $r['attch_'];
$_SESSION['hse_type'] = $r['hse_type'];
$_SESSION['hse_stat'] = $r['hse_stat'];
$_SESSION['month_rent'] = $r['month_rent'];
$_SESSION['rent_since'] = $r['rent_since'];
$_SESSION['hse_col'] = $r['hse_col'];
$_SESSION['owner'] = $r['owner'];
$_SESSION['id_regis'] = $r['id_regis'];
$_SESSION['notas'] = $r['notas'];

header("Location : house1.php");
}

if(isset($_POST['edit_house'])){
  
move_uploaded_file($_FILES["attch_"]["tmp_name"],
      "./upload/" . $_FILES["attch_"]["name"]);
      $attachment = $_FILES["attch_"]["name"]; //<- This is it

$sql = "UPDATE [jim].[dbo].[house_link] SET
            [hse_type] = '$_POST[hse_type]'
           ,[hse_stat] = '$_POST[hse_stat]'
           ,[month_rent] = '$_POST[month_rent]'
           ,[rent_since] = '$_POST[rent_since]'
           ,[hse_col] = '$_POST[hse_col]'
           ,[owner] = '$_POST[owner]'
           ,[id_regis] = '$_POST[id_regis]'
           ,[attch_] = '$attachment'
           ,[notas] = '$_POST[notas]'
           WHERE id_regis = '$_POST[id_regis1]'";

$stmt = sqlsrv_query( $conn, $sql );

$sql = "UPDATE [jim].[dbo].[house] SET
            [id_profil] = '$_POST[id_profil]'
           ,[hse_type] = '$_POST[hse_type]'
           ,[hse_stat] = '$_POST[hse_stat]'
           ,[month_rent] = '$_POST[month_rent]'
           ,[rent_since] = '$_POST[rent_since]'
           ,[hse_col] = '$_POST[hse_col]'
           ,[owner] = '$_POST[owner]'
           ,[id_regis] = '$_POST[id_regis]'
           ,[attch_] = '$attachment'
           ,[notas] = '$_POST[notas]'
           WHERE id = '$_POST[id]'";

$stmt = sqlsrv_query( $conn, $sql );
header("Location : house.php");
}

if(isset($_POST['edit_loop_btn'])){

sqlsrv_query( $conn, "UPDATE [jim].[dbo].[loop] SET [loop_q] = '$_POST[loop_no]'" );
sqlsrv_query( $conn, "UPDATE [jim].[dbo].[table_size] SET [table_q] = '$_POST[table_no]'" );

header("Location : c_link.php");

}

?>