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
                <h3>SENARAI PENGGUNA</h3>
              </div>
            </div>

            <div class="clearfix">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <br/>
<?php 
      include('include/dbconn.php');
                 
      $sql = "SELECT * FROM [jim].[dbo].[login] ORDER BY fulname DESC";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
?>
                     <table id="example1" class="table table-striped table-border">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th>Nama Penuh</th>
                          <th>Nama Pengguna</th>
                          <th>Emel</th>
                          <th>Nombor Telefon</th>
                          <th>Jawatan</th>
                          <th>Jenis Pengguna</th>
                          <th>Negeri</th>
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
                          <td><?php echo $row1['fulname']; ?></td>
                          <td><?php echo $row1['username']; ?></td>
                          <td><?php echo $row1['email']; ?></td>
                          <td><?php echo $row1['tel']; ?></td>
                          <td><?php echo $row1['jwt']; ?></td>
                          <td>
                            <?php 
                            $r = $row1['role']; 

                            if ($r == "0") {
                              # code...
                              echo "Ketua Unit";
                            }
                            elseif ($r == "1") {
                              # code...
                              echo "Pegawai Pendaftar";
                            }
                            elseif ($r == "2") {
                              # code...
                              echo "Pegawai Siasatan";
                            }
                            elseif ($r == "3") {
                              # code...
                              echo "Pengarah";
                            }
                            elseif ($r == "4") {
                              # code...
                              echo "Administrator";
                            }
                            else{
                              echo "LAIN-LAIN";
                            }
                            ?>
                            </td>
                            <td><?php echo $row1['ngri']; ?></td>
                          <td>
                            <center>
                              <div class="col-md-6">
                                <form method="post" action="edit.php">
                                    <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                                    <button type="submit" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Kemaskini" name="edit_user"><span class="glyphicon glyphicon-pencil"></span></button>
                                </form>
                              </div>
                              <div class="col-md-6">
                                <form method="post" action="delete.php">
                                    <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                                    <button type="submit" onclick="return confirm('Padam Pengguna Ini ???');" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Padam" name="delete_user"><span class="glyphicon glyphicon-trash"></span></button>
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