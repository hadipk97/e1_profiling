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
                <h3>SENARAI PERANAN</h3>
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
                 
      $sql = "SELECT * FROM [jim].[dbo].[u_role] ORDER BY role ASC";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
?>
                     <table id="example1" class="table table-striped table-border">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th>Peranan</th>
                          <th>Senarai Pengguna</th>
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
                          <td><?php echo $row1['role']; ?></td>
                          <td>
                            <?php 
                            $sql = "SELECT * FROM [jim].[dbo].[login] where role = '$row1[id]'";
                            $stmt = sqlsrv_query( $conn, $sql );
                            if( $stmt === false) {}
                              $c = 1;
                              while($row2=  sqlsrv_fetch_array($stmt)){
                                echo $c++.") ".$row2['fulname']."<br>";
                              }
                          ?>
                          </td>
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
                    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Tambah</button>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <form method="post" action="reg.php">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Peranan</h4>
      </div>
      <div class="modal-body">
          <input class="form-control" name="role">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary" name="reg_role">Simpan</button>
      </div>
       </form>
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