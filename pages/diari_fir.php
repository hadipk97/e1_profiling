<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php include 'include/bar.php'; ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            
              <div class="title_left">
                <h3>MAKLUMAT DIARI</h3>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <br />
                      <!--<div id="mainb" style="height:350px;"></div>-->
                      <div>
                        <div class ="row">
                        <div class="col-md-6">
                        <h3>Diari Siasatan</h3>
            </div>
                        </div>
                        <table id="example1" class="table table-striped" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th width="10%"></th>
                          <th width="70%"></th>
                          <th width="20%"></th>
                        </tr>
                      </thead>
<?php include('include/dbconn.php');
$id_fir = $_SESSION['id_fir']; 

      $sql = "SELECT * FROM [jim].[dbo].[diari] WHERE id_fir = '$id_fir'";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
?>

                      <tbody>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
 //$id_d[] = $row1['diari_no'];
?>
                        <tr>
                          <td align="center">
                            <img src="../img/Klogo.png" width="50px" height="50px">
                          </td>
                          <td>
                          <h5 class="heading"><?php echo $row1['nm_ptgas']; ?></h5>
                          <blockquote class="message"><?php echo $row1['butiran']; ?></blockquote>
                          <?php 
                          //foreach ($id_d as $id_d1) {
                            //echo $id_d1;
                            $sql = "SELECT * FROM [jim].[dbo].[lampiran] where diari_no = '$row1[diari_no]'";
                            $stmt = sqlsrv_query( $conn, $sql );
                            if( $stmt === false) {}
                              while($row2=  sqlsrv_fetch_array($stmt)){
                                echo "<a href='upload/$row2[filename]' class='btn-link' target='_blank'>$row2[filename]</a><br>";
                              }
                           // }
                          ?>
                          </td>
                          <td>
                            <div class="message_date">
                              <h5 class="date text-info"><?php echo $row1['trkh']; ?></h5>
                              <center>
                      <div class="row">
                      <div class="col-md-3">
                      <form method="post" action="edit.php">
                      <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                      <button type="submit" class="btn btn-primary btn-xs" title="Kemaskini" name="kemaskini_cdiari"><span class="glyphicon glyphicon-pencil"></span></button>
                      </form>
                      </div>
                      <div class="col-md-3">
                      <form method="post" action="sent.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500,top=150,left=320');">
                      <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                      <button type="submit" class="btn btn-success btn-xs" title="Cetak" name="print_diari2"><span class="glyphicon glyphicon-print"></button>
                      </form>
                      </div>
                      <div class="col-md-3">
                      <form method="post" action="delete.php">
                      <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                      <input type="hidden" name="id_fir" value="<?php echo $row1['id_fir']; ?>">
                      <button type="submit" onclick="return confirm('Padam Data Ini ???');" name="delete_diari1" class="btn-xs btn btn-danger" title="Padam"><span class="glyphicon glyphicon-trash"></span></button>
                      </form>
                      </div>
                  	  </div>
                    </center>
                            </div>
                          </td>
                        </tr>
<?php } ?>
                      </tbody>
                    </table>

                        <!-- end of user messages -->
                        
                        <!-- end of user messages -->
                      </div>
                      <div class="pull-right">
                      <form method="post" action="sent.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500,top=150,left=320');">
                      <input type="hidden" name="id_fir" value="<?php echo $id_fir; ?>">
                      <button type="submit" class="btn btn-success" title="Cetak" name="print_diari"><span class="glyphicon glyphicon-print"></button>
                      </form>
                      </div>
						<div class="pull-right">
                        <form method="post" action="reg.php">
                            <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                            <button type="submit" class="btn btn-indigo" name="create_diari" title="Tambah"><span class="glyphicon glyphicon-plus"></span></button>
                        </form>
                        </div>

                    </div>
<?php 
include 'include/dbconn.php';

$sql = "SELECT *  FROM [jim].[dbo].[admin] WHERE id_fir = '$id_fir'";
$stmt = sqlsrv_query ($conn , $sql);
if( !$stmt) {
}
else{
$r = sqlsrv_fetch_array($stmt);
$id_fir= $r['id_fir'];
$userk = $r['userk'];
$title = $r['title'];
$id_pe = $r['user_siasatan'];
}

$sql = "SELECT *  FROM [jim].[dbo].[login] WHERE id = '$id_pe'";
$stmt = sqlsrv_query ($conn , $sql);
if( !$stmt) {
}
else{
$r = sqlsrv_fetch_array($stmt);
$fulname_risik= $r['fulname'];
}

$sql = "SELECT *  FROM [jim].[dbo].[login] WHERE id = '$userk'";
$stmt = sqlsrv_query ($conn , $sql);
if( !$stmt) {
}
else{
$r = sqlsrv_fetch_array($stmt);
$fulname = $r['fulname'];
}
?>
                    <!-- start project-detail sidebar -->
                    <div class="col-md-3 col-sm-3 col-xs-12">

                      <section class="panel">

                        <div class="x_title">
                          <h2>Maklumat Pasukan</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                          <!--<h3 class="green"><i class="fa fa-paint-brush"></i> Gentelella</h3>-->
                           <center>
                           <img src="../img/Klogo.png" alt="..." class="" width="50" height="50">
                           </center>
                          <br />

                          <div class="project_detail">

                            <p class="title">Record ID (FIR)</p>
                            <p><?php echo $id_fir; ?></p>
                            <p class="title">Ketua Pasukan</p>
                            <p><i class="fa fa-user"></i> <?php echo $fulname_risik; ?></p>
                          

                          <br />
                          <p class="title">Ahli Pasukan</p>
                          <ul class="list-unstyled project_files">
<?php
$sql = "SELECT id_nama,
MAX(nama) AS nama ,    
MAX(id_fir) AS id_fir ,     
MAX(ngri) AS ngri ,   
MAX(catatan) AS catatan    
FROM [jim].[dbo].[team]  
Where id_fir = '$id_fir'
group by id_nama";


$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                            <li><i class="fa fa-user"></i> <?php echo $row1['nama']; ?></li>
<?php } ?>
                          </ul>
                          </div>
                          <br />
                        </div>

                      </section>
                      

                    </div>
                    <!-- end project-detail sidebar -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php include 'footer.php'; ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <?php include 'include/js.php'; ?>
  </body>
</html>