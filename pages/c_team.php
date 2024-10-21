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
                <h3>KES <strong><?php echo  $_SESSION['id_fir']; ?></strong></h3>
              </div>
            </div>

            <div class="clearfix">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>BENTUK PASUKAN</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form role="form" method="post" action="reg.php">
                    <div class="form group">
                        <div class="row">
                        <div class="box-body">

                       <div class="col-md-3"></div>   
                      <div class="form group">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <label for="Record Id">Record ID (FIR)</label>
                              <input type="text" class="form-control" placeholder="Record ID (FIR)" value="<?php if(isset($_SESSION['id_fir'])) { echo $_SESSION['id_fir']; } ?>" width="50%" disabled>
              </div> 
              </div> 
            </div>
            <div class="col-md-3"></div>
            <br/>
            <div class="col-md-4">
              <div class="form group">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <label>Pegawai</label>
                  <select id="pilih" class="form-control" name="pgawai">
                    <option disabled selected="selected">Sila Pilih</option>
<?php 
      include('include/dbconn.php');
                 
      $sql = "SELECT * FROM [jim].[dbo].[login] ORDER BY id DESC";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>           <option value=" <?php echo $row1['id']; ?>"><?php echo $row1['fulname']; ?></option>
<?php } ?>
                  </select>
              </div>
              </div>
             </div>

              <br/>
              <div class="form group">
              <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
                  <label for="exampleInputEmail1">Butiran Tugas</label><font color="red">&ensp;*</font>
                  <textarea class="form-control" rows="5" id="exampleInputEmail" name="note" placeholder="Butiran...." required></textarea>
                  </div>
            </div>
          </div>
              <br/>
                        <ul class="list-inline pull-left">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) { echo $_SESSION['id_fir']; } ?>">
                            <button type="submit" class="btn btn-primary next-step" name="create_team">Simpan</button>
                            </form>
                        </ul>
                        <br>
                        <br>
                        <br>
        </div>
<?php include('include/dbconn.php');
$id_fir = $_SESSION['id_fir']; 

      $sql = "SELECT * FROM [jim].[dbo].[team] WHERE id_fir='$id_fir'";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
?>
<div class="col-md-8">
            <div class="box-header">
              <h3 class="box-title">Senarai Pegawai Terlibat</h3>
            </div>
            <!-- /.box-header -->
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Nama</th>
                  <th>Negeri</th>
                  <th>Butiran Tugas</th>
                  <th style="width: 10%">Tindakan</th>
                </tr>
                </thead>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++; echo $row1['id_name'];?></td>
                  <td><?php echo $row1['nama']; ?></td>
                  <td><?php echo $row1['ngri']; ?></td>
                  <td><?php echo $row1['catatan']; ?></td>
                  <td>
                    <center>
                      <div class="row">
                        <!--
                      <div class="col-xs-3"></div>
                      <div class="col-xs-4">
                      <form method="post" action="edit.php">
                      <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                      <button type="submit" class="btn btn-primary btn-xs" title="Kemaskini" name="kemaskini_cdiari"><span class="glyphicon glyphicon-pencil"></span></button>
                      </form>
                      </div>-->
                      <div class="col-sm-12">
                      <form method="post" action="delete.php">
                      <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                      <input type="hidden" name="id_fir" value="<?php echo $row1['id_fir']; ?>">
                      <button type="submit" onclick="return confirm('Padam Data Ini ???');" name="delete_team" class="btn btn-danger btn-xs" title="Padam"><span class="glyphicon glyphicon-trash"></span></button>
                      </form>
                      </div>
                  </div>
                    </center>
                  </td>
                </tr>
<?php } ?>
              </table> 
                        <form method="post" action="sent.php">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) { echo $_SESSION['id_fir']; } ?>">
                          <button type="submit" class="btn btn-success pull-right" name="update_risik">Bentuk Pasukan</button>
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
