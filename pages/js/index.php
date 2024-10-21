<?php 
include 'include/dbconn.php';
session_start();
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
$n_penuh= $r['n_penuh'];
$jwtP= $r['jwt'];
?>
<?php
$year = date("Y");
?>
<?php 
      include ('include/dbconn.php');

      $user = $_COOKIE['id'];
                 
      $sql = "SELECT *  FROM [jim].[dbo].[login] WHERE username = '$user'";
      $stmt = sqlsrv_query ($conn , $sql);
      if( !$stmt) {
      }
      else{
      $r = sqlsrv_fetch_array($stmt);
      $role= $r['role'];
?>

<?php 
      include ('include/dbconn.php');
                 
      $sql = "SELECT *  FROM [jim].[dbo].[mnu] WHERE usr = '$role'";
      $stmt = sqlsrv_query ($conn , $sql);
      if( !$stmt) {
      }
      else{
      $r = sqlsrv_fetch_array($stmt);
      $do= $r['akses'];
?>
<?php
include ('include/../dbconn.php');
$username = $_COOKIE['id'];
$sql = "SELECT * FROM login where username ='$username'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
   
}
	else{
$r = sqlsrv_fetch_array($stmt);
$gambar1= $r['gambar'];
$cawangan= $r['cawangan'];

?>


<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Demo | Timeline</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="shortcut icon" href="../images/jim.png">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  
    <style type="text/css">
        #custom-search-input{
    padding: 3px;
    border: solid 1px #E4E4E4;
    border-radius: 6px;
    background-color: #fff;
}

#custom-search-input input{
    border: 0;
    box-shadow: none;
}

#custom-search-input button{
    margin: 2px 0 0 0;
    background: none;
    box-shadow: none;
    border: 0;
    color: #666666;
    padding: 0 8px 0 10px;
    border-left: solid 1px #ccc;
}

#custom-search-input button:hover{
    border: 0;
    box-shadow: none;
    border-left: solid 1px #ccc;
}

#custom-search-input .glyphicon-search{
    font-size: 23px;
}
    </style>
    
	<script src="../bootstrap/bootstrap/js/jquery-1.11.1.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="../main.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini"><img src="../image/JIM.jpg" width="50" height="50" alt=""/></span>
      <!-- logo for regular state and mobile devices -->
		<span class="logo-lg"><b>SP</b>JIM</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu"> </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu"> </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
<li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <img class="img-circle" img src="data:image/jpeg;base64,<?php echo base64_encode( $gambar1 ); ?>" width="20" height="20" alt=""/>
            <span class="hidden-xs"><?php echo $fulname; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
               <img class="img-circle" img src="data:image/jpeg;base64,<?php echo base64_encode( $gambar1 ); ?>" class="img-circle" alt="User Image"/>
                <p>
                  <?php echo $fulname; ?><br><?php echo $jwtP;?>
                  <small><?php echo $cawangan;?></small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                <form name="form" method="post" action="../profile.php">
                <input name="username" type="hidden" value="<?php echo $fulname; ?>">
                 <input type="submit" name="profile" class="btn btn-default btn-flat" value="Profil">
                 </form>
                </div>
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-default btn-flat">Log Keluar</a>
                </div>
              </li>
            </ul>
          </li>
          </li>
              <!-- Menu Footer-->
                        <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
            </ul>
          
          <!-- Control Sidebar Toggle Button -->

        
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
       
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Demo</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Daftar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../RegFIR_New.php"><i class="fa fa-file"></i>Kes(FIR)</a></li>
            <li class="active"><a href="../daftarcarian_Profile.php"><i class="fa fa-user"></i>Profil</a></li>
            <li class="active"><a href="../RegSindiket_New.php"><i class="fa fa-group"></i>Sindiket</a></li>
          </ul>
          </li>
        <li class="treeview">
         <a href="#"> 
         <em class="fa fa-search"></em> 
         <span>Carian</span> <span class="pull-right-container"> <em class="fa fa-angle-left pull-right"></em> </span> </a>
          <ul class="treeview-menu">
            <li><a href="../Search_FIR_carian.php"><i class="fa fa-file"></i>Kes(FIR)</a></li>
            <li class="active"><a href="../daftarcarian_Profile2m.php"><i class="fa fa-user"></i>Profil</a></li>
            <li class="active"><a href="../RegSindiket_Newcarian.php"><i class="fa fa-group"></i>Sindiket</a></li>
            <li class="active"><a href="../intelsearchi.php"><i class="fa fa-search-plus"></i>Carian I2</a></li>
          </ul>
          </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-unlock"></i>
            <span>Kemaskini</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../Search_FIR.php"><i class="fa fa-file"></i>Kes(FIR)</a></li>
            <li class="active"><a href="../daftarcarian_Profile_kemaskini.php"><i class="fa fa-user"></i>Profil</a></li>
            <li class="active"><a href="../RegSindiket_Newkemaskini.php"><i class="fa fa-group"></i>Sindiket</a></li>
          </ul>
          </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text-o"></i>
            <span>Laporan Kes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../Search_FIRlaporan.php"><i class="fa fa-file"></i>Kes(FIR)</a></li>
            <li class="active"><a href="../daftarcarian_Profile1m.php"><i class="fa fa-user"></i>Profil</a></li>
            <li class="active"><a href="../RegSindiket_Newlaporan.php"><i class="fa fa-group"></i>Sindiket</a></li>
          </ul>
          </li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Diari</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../siasatan.php"><i class="fa fa-book"></i>Siasatan</a></li>
			  <li class="active"><a href="../carian_diari.php"><i class="fa fa-search"></i>Carian Diari</a></li>
          </ul>
          </li>
        
        
        
        <li><a href="../arahanpengguna.html"><i class="fa fa-book"></i> <span>Arahan Pengguna</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        404 Error Page
      </h1>
      <ol class="breadcrumb">
        <li><a href="../main.php"><i class="fa fa-home"></i> Menu Utama</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="error-page">
        <h2 class="headline text-yellow"> 404</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>

          <p>
            We could not find the page you were looking for.
            Meanwhile, you may <a href="../main.php">return to Menu Utama</a> or try using the search form.
          </p>

            <div class="form-group">
            <div class="input-group">
             <form method="get" action="http://www.google.com/search">
			    <div id="custom-search-input">
            		    <div class="input-group col-md-12">
            		        <input type="text" class="" name="q" placeholder="Search" />
            		        <span class="input-group-btn">
            		            <button class="btn btn-info btn-lg" type="submit">
            		                <i class="glyphicon glyphicon-search"></i>
            		            </button>
            		        </span>
            		    </div>
            		</div>
				<script type="text/javascript">
				</script>
				</form>
              </div>
              </div>
            </div>
          
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->

  <footer class="main-footer">
   <div class="box box-info">
      <div class="box-footer">Hakcipta <?php echo $year; ?> <a href="#" onClick="window.open('http://www.prismakhas.com', '_blank')">www.prismakhas.com</a> </div>
    </section>
  </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <ul class="control-sidebar-menu">
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
<?php
} } } } }
else{
header("Location: index.php");
}
?>