<?php
session_start();
error_reporting(0);
include 'include/dbconn.php';
if (!empty($_COOKIE["id"])) {
  $last_link = $_SERVER['REQUEST_URI'];
  setcookie("last_link", $last_link, time() + (10 * 365 * 24 * 60 * 60));
  $fulln = $_COOKIE['id'];

  $sql = "SELECT *  FROM [jim].[dbo].[login] WHERE id = '$fulln'";
  $stmt = sqlsrv_query($conn, $sql);
  if (!$stmt) {
  } else {
    $r = sqlsrv_fetch_array($stmt);
    $fulname = $r['fulname'];
    $role = $r['role'];
    $ngri = $r['ngri'];

    $sql = "SELECT *  FROM [jim].[dbo].[menu] WHERE role = '$role'";
    $stmt = sqlsrv_query($conn, $sql);
    if (!$stmt) {
    } else {
      $r = sqlsrv_fetch_array($stmt);
      $menu = $r['menu'];

?>
      <?php $year = date("Y"); ?>
      <?php $datet = date("Y-m-d"); ?>
      <?php $date = date("d-m-Y"); ?>
      <?php $datemy = date("m/y"); ?>
      <!DOCTYPE html>
      <html lang="en">

      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>&ensp; E1 Profiling </title>
        <?php include 'css.php'; ?>
      </head>

      <body class="<?= (!empty($_POST['individu0'])) ? "nav-sm" : "nav-md" ?> ?>">
        <div id="load"></div>
        <div id="contents">
          <div class="container body">
            <div class="main_container">
              <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                  <div align="center" class="navbar nav_title" style="border: 0;">
                    <a href="#" class="site_title"><img src="../pdrm.png" height="45px" width="45px"><span> Profiling </span></a>
                  </div>
                  <div class="clearfix"></div>
                  <div class="profile clearfix">
                    <div class="profile_pic">
                      <img src="../dist/img/<?php echo $_COOKIE['avatar'] ?>" class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                      <span>Selamat Datang</span>
                      <h2 style="text-transform: uppercase"><?php echo $fulname; ?></h2>
                    </div>
                  </div>
                  <br />
                  <?php echo $menu; ?>
                  <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php" style="width: 100%">
                      <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="top_nav">
              <div class="nav_menu">
                <nav>
                  <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                  </div>

                  <ul class="nav navbar-nav navbar-right">
                    <li class="">
                      <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="text-transform: uppercase">
                        <img src="../dist/img/<?php echo $_COOKIE['avatar'] ?>">
                        <?php echo $fulname; ?>
                        <span class=" fa fa-angle-down"></span>
                      </a>
                      <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="#">Profil</a></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Keluar</a></li>
                      </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                      <a href="#" style="text-transform: uppercase" data-toggle="modal" data-target="#aktiviti">
                        <i class="fa fa-tasks" style="color: #2b9dd7"></i>
                        &ensp; Log Aktiviti &thinsp;
                      </a>
                    </li><!--
                <li>
                  <a href="../pages/copy_data.php"><img src="../img/Pdlogowhitetext.png" style="height: 30px" data-tonggle="tooltip" title="Get Data From SnapD Viewer"></a>
                </li>-->
                  </ul>
                </nav>
              </div>
            </div>
            <div class="modal fade" id="aktiviti" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <table class="table table-striped table-border">
                      Log Aktiviti
                      <?php
                      include('include/dbconn.php');

                      $sql = "SELECT TOP 10 * FROM [jim].[dbo].[log] ORDER BY id DESC";
                      $stmt1 = sqlsrv_query($conn, $sql);
                      if (!$stmt1) {
                      }
                      $counter = 1;
                      while ($row1 =  sqlsrv_fetch_array($stmt1)) {
                      ?>
                        <tr>
                          <td>
                            <img src="../img/people_orig.png" height="30px" width="30px" class="pull-left">
                          </td>
                          <td>
                            <form method="post" action="view_map.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                              <strong><?php echo $counter++; ?>)</strong> <?php echo $row1['type']; ?> | <?php echo $row1['tdate']; ?>
                              <br>
                              <a data-toggle="tooltip" title="Pelantar : <?php echo $row1['pc_name']; ?>"><span class="fa fa-desktop"></span></a>&ensp;
                              <a data-toggle="tooltip" title="Pelantar ID : <?php echo $row1['pc_id']; ?>"><span class="fa fa-compass"></span></a>&ensp;
                              <a data-toggle="tooltip" title="Pelantar IP : <?php echo $row1['ip']; ?>"><span class="fa fa-wifi"></span></a>&ensp;
                              <input type="hidden" name="lat" value="<?php echo $row1['pc_lat']; ?>">
                              <input type="hidden" name="log" value="<?php echo $row1['pc_log']; ?>">
                              <button type="submit" data-toggle="tooltip" title="Lokasi" class="btn btn-default btn-xs"><span class="fa fa-map-marker" style="color: #2b9dd7"></span></button>
                            </form>
                          </td>
                        </tr>
                      <?php } ?>
                    </table>
                    <center>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </center>
                  </div>
                </div>
              </div>
            </div>
            <script>
              document.addEventListener('keydown', function(e) {
                // You may replace `m` with whatever key you want
                if ((e.ctrlKey) && (String.fromCharCode(e.which).toLowerCase() === 'g')) {
                  window.open('game.php', '_blank', 'width=900,height=500', 'true');
                }
              });
            </script>
      <?php
    }
  }
} else {
  header("Location : index.php");
}
      ?>