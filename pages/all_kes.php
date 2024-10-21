
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
                <h3>Senarai Keseluruhan Kes</h3>
              </div>
            </div>
            <div class="clearfix">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
          <div class="x_title">       
            <div class="title_right">&ensp;
            </div>
          </div>
                  <div class="x_content">
                  <div class="form group">
                        <div class="row">
                        <div class="box-body">
                          
<?php 
include('include/dbconn.php');  # code...
      
      if($_GET['s'] != ""){
        $sql = $_GET['s']. "AND masa like '%$_GET[m]%'";
      }else{
        $sql = "SELECT * FROM [jim].[dbo].[admin] where id_fir <> 'DUMPDATA'";
      }
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
?>
              <table id="example2" class="table table-striped table-border">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>FIR</th>
                  <th>Status Kes</th>
                  <th>Klasifikasi Utama</th>
                  <th>Klasifikasi Kecil</th>
                  <th>Status</th>
                  <th>Tempoh</th>
                  <th style="width: 10%">Tindakan</th>
                </tr>
                </thead>
                <tbody>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo $row1['id_fir']; ?></td>
                  <td><?php echo $row1['cs_status']; ?></td>
                  <td><?php echo $row1['major']; ?></td>
                  <td><?php echo $row1['minor']; ?></td>
                  <td>
                    <?php
                       $s = $row1['status']; 
                       if ($s == "BARU") {
                        echo "<label class='label label-primary'>BARU</label>";
                        }
                        elseif ($s == "SEMAKAN PENYELIA") {
                        echo "<label class='label label-warning'>SEMAKAN PENYELIA</label>";
                        }
                        elseif ($s == "BENTUK PASUKAN") {
                        echo "<label class='label label-info'>BENTUK PASUKAN</label>";
                        }
                        elseif ($s == "SIASATAN") {
                        echo "<label class='label label-danger'>SIASATAN</label>";
                        }
                        elseif ($s == "SEMAKAN SIASATAN") {
                        echo "<label class='label label-warning'>SEMAKAN SIASATAN</label>";
                        }
                        elseif ($s == "TUTUP KES") {
                        echo "<label class='label label-success'>KES TUTUP</label>";
                        }
                        elseif ($s == "SEMAKAN PENGARAH") {
                        echo "<label class='label label-warning'>SEMAKAN PENGARAH</label>";
                        }
                        else {
                        echo "<label class='label label-default'>KES SELESAI</label>";
                        }
                        ?>
                  </td>
                  <td>
                  <?php 
                  $m= $row1['masa']->format("Y-m-d");
                  $date1=date_create("$date");
                  $date2=date_create("$m");
                  $diff=date_diff($date1,$date2);
                  $dt = $diff->format("%a Hari"); 

                  if ($dt == "0 Hari") {
                    # code...
                    echo "1 Hari";
                  }
                  else {
                    echo "$dt";
                  }
                   ?>
                   </td>
                  <td>
                            <center>

                              <div class="col-md-6">
                                <?php
                       $s = $row1['status']; 
                       if ($s == "BARU" || $s ==  "SIASATAN") {
                        echo "<a class='btn btn-info btn-xs' href='mapk_register.php?fir=".$row1[id_fir]."'><span class='glyphicon glyphicon-pencil'></span></a>";
                        // echo "<form method='post' action='edit.php'>
                        //     <input type='hidden' name='id_fir' value='$row1[id_fir]'>
                        //     <button type='submit' class='btn btn-primary btn-xs' name='kemaskini_fir' title='Kemaskini'><span class='glyphicon glyphicon-pencil'></span></button>
                        //     </form>";
                        }
                        elseif ($s == "BENTUK PASUKAN") {
                        echo "<form method='post' action='edit.php'>
                            <input type='hidden' name='id_fir' value='$row1[id_fir]'>
                            <button type='submit' class='btn btn-info btn-xs' title='BENTUK PASUKAN' name='bentuk_pasukan'><span class='fa fa-group'></span></button>
                            </form>";
                        }
                        elseif ($s == "SELESAI") {
                        echo "";
                        }
                        elseif ($s == "KES TUTUP" || $s == "SEMAKAN PENGARAH" && $role == 3 ) {
                        echo "<button type='button' class='btn btn-danger btn-xs' id='$row1[id]' fir='$row1[id_fir]' data-toggle='modal' data-target='#hantar_semula' title='Buka Semula' ><span class='fa fa-folder-open'></span></button>";
                        }
                        ?>
                          </div>
                              <div class="col-md-6">
                            <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                            <input type="hidden" name="id_fir" value="<?php echo $row1['id_fir']; ?>">
                            <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                            <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                            </form>
                          </div>
                            </center>
                          </td>
        </tr>
        <?php } ?>
          </tbody>
              </table>
            </div>
              
              
              </div>
          </div>
     </div>

                  <div class="modal fade" id="hantar_semula" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form id="hantar_semula" method="post" action="edit.php">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Buka Semula Kes</h4>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">FIR</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text"  class="form-control" name="fir" disabled >
                              <input type="hidden" name="fir" >
                              <input type="hidden" name="id" >
                            </div>
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="form-group">
                            <div class="col-md-4">
                              <label class="pull-right">Catatan <span style="color: red">*</span></label>
                            </div>
                            <div class="col-md-8">
                              <textarea class="form-control" name="cttn" required></textarea>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="reset" class="btn btn-default" data-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-primary" name="buka_semula">Hantar</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
     </div>
        </div>
        
    </div>
        </div>
        <!-- footer content -->
        <?php include 'footer.php'; ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <?php include 'include/js.php'; ?>
  </body>
</html>
