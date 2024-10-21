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
                <h3>DIARI KES</h3>
              </div>
            </div>

            <div class="clearfix">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Senarai Diari Kes</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <div class="form group">
                        <div class="row">
                        <div class="box-body">
                          
<?php 
include('include/dbconn.php');  # code...
      
      $sql = "SELECT * FROM [jim].[dbo].[admin]  where id_fir <> 'DUMPDATA' order by id_fir asc";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
?>
              <table id="example1" class="table table-striped table-border">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>FIR</th>
                  <th>Status Kes</th>
                  <th>Klasifikasi Utama</th>
                  <th>Klasifikasi Kecil</th>
                  <th>Status</th>
                  <th style="width: 15%">Tindakan</th>
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
                            <center>
                              <div class="row">
                                <div class="col-md-3">
                                <form method="post" action="edit.php">
                            <input type="hidden" name="id_fir" value="<?php echo $row1['id_fir']; ?>">
                            <button type="submit" class="btn btn-primary btn-xs" name="kemaskini_diari" title="Kemaskini"><span class="glyphicon glyphicon-pencil"></span></button>
                            </form>
                          </div>
                           <div class="col-md-3">
                            <form method="post" action="sent.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500,top=150,left=320');">
                            <input type="hidden" name="id_fir" value="<?php echo $row1['id_fir']; ?>">
                            <button type="submit" class="btn btn-success btn-xs" title="Cetak" name="print_diari"><span class="glyphicon glyphicon-print"></span></button>
                            </form>
                          </div>
                              <div class="col-md-3">
                                <form method="post" action="delete.php">
                            <input type="hidden" name="id_fir" value="<?php echo $row1['id_fir']; ?>">
                            <button type="submit" onclick="return confirm('Padam Diari Ini ???');" class="btn btn-danger btn-xs" name="delete_diari" title="Padam"><span class="glyphicon glyphicon-trash"></span></button>
                            </form>
                          </div>
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