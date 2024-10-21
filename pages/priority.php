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
            <?php include 'flash.php'; ?>
              <div class="title_left">
                <h3>Senarai Keseluruhan Kes <strong><?php echo $_SESSION['priority']; ?></strong> <?php echo $year; ?></h3>
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
      include('include/dbconn.php');

      if ($role == 1 || $role == 2){
        $sql = "SELECT * FROM [jim].[dbo].[admin] where priority = '$_SESSION[priority]' AND masa LIKE '%$year%' AND userk = '$fulln'";
      }else{
        $sql = "SELECT * FROM [jim].[dbo].[admin] where priority = '$_SESSION[priority]' AND masa LIKE '%$year%'";
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
                        echo "<label class='label label-info'>SEMAKAN PENYELIA</label>";
                        }
                        elseif ($s == "BENTUK PASUKAN") {
                        echo "<label class='label label-success'>BENTUK PASUKAN</label>";
                        }
                        elseif ($s == "SIASATAN") {
                        echo "<label class='label label-info'>SIASATAN</label>";
                        }
                        elseif ($s == "SEMAKAN SIASATAN") {
                        echo "<label class='label label-warning'>SEMAKAN SIASATAN</label>";
                        }
                        elseif ($s == "TUTUP KES") {
                        echo "<label class='label label-default'>TUTUP KES</label>";
                        }
                        elseif ($s == "SEMAKAN PENGARAH") {
                        echo "<label class='label label-default'>SEMAKAN PENGARAH</label>";
                        }
                        else {
                        echo "<label class='label label-danger'>KES SELESAI</label>";
                        }
                        ?>
                  </td>
                  <td>
                  <?php 
                  $m= $row1['masa']->format("Y-m-d");
                  $date1=date_create("$datet");
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
                                 if ($s == "SELESAI") {
                                   # code...
                                  echo "";
                                }
                                  else {
                                    echo "<form method='post' action='k_fir.php'>
                                            <input type='hidden' name='id' value='$row1[id]'>
                                            <button type='submit' class='btn btn-primary btn-xs' title='Kemaskini'><span class='glyphicon glyphicon-pencil'></span></button>
                                          </form>";
                                  }
                                ?>
                          </div>
                              <div class="col-md-6">
                            <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
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