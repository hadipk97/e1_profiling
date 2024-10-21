<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php include 'include/bar.php'; ?>
        <!-- /top navigation -->

<!-- page content -->
    <section class="content">
        <div class="right_col" role="main">
          <div class="">
          <div class="page-title">
            
              <div class="title_left">
                <h3>Query</h3>
              </div>
            </div>
            <div class="clearfix">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
          <div class="x_title">       
            <div class="title_right"> 
              <div class="box-body">
              <div class="row">
             <form method="post" action="querya.php">
                <div class="col-xs-2">
                  <select class="form-control" name="query_by" required="required">
                    <option disabled selected>Option <font color="red">#</font></option>
                    <option value="bank" >Bank</option><!-- Done -->
                    <option value="bank_syarikat" >Bank Syarikat</option><!-- Done -->
                    <option value="fd" >Deposit Tetap</option><!-- Done -->
                    <option value="admin" >FIR</option><!-- Done -->
                    <option value="physical" >Fizikal</option><!-- Done -->
                    <option value="inv" >Invesment</option><!-- Done -->
                    <option value="ic" >Kad Pengenalan</option><!-- Done -->
                    <option value="transportation" >Kenderaan</option><!-- Done -->
                    <option value="lg" >Ledger</option><!-- Done -->
                    <option value="drivelicense" >Lesen Memandu</option><!-- Done -->
                    <option value="msocial" >Media Sosial</option><!-- Done -->
                    <option value="mobileno" >Nombor Telefon</option><!-- Done -->
                    <option value="passport" >Pasport</option><!-- Done -->
                    <option value="profile" >Profil</option><!-- Done -->
                    <option value="house" >Rumah</option><!-- Done -->
                    <option value="com_pany" >Syarikat</option><!-- Done -->
                    <option value="transaction" >Transaksi</option><!-- Done -->
                    <option value="gst" >GST</option><!-- inprogress -->
                  </select>
                </div>
                <div class="col-xs-2">
                  <button type="submit" class="btn btn-primary" name="show_field">Search</button>
                </div>
              </form>
              </div>
              <br>
            </div>
            </div>
          </div>
          <div><button type="button" class="btn btn-default" data-toggle="collapse" data-target="#A1"><span>Pengurusan Query</span></button></div>
          <div class="row">
            <div id="A1" class="collapse">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Tajuk</th>
                  <th>Tarikh Cipta</th>
                  <th>Tarikh Edit</th>
                  <th>Pengguna</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

$query_tbl = "SELECT * FROM [jim].[dbo].[query_mgr] ORDER BY date_c ASC";

$sql = "$query_tbl";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['title']; ?></td>
                  <td><?php if(!empty($row1['date_c'])) {echo $row1['date_c']->format('d-m-Y H:s a');} ?></td>
                  <td><?php if(!empty($row1['date_e'])) {echo $row1['date_e']->format('d-m-Y H:s a');} ?></td>
                  <td><?php echo $row1['userk']; ?></td>
                  <td>
                      <center>
                    <div class="col-md-6">
                      <form method="post" action="querya.php">
                      <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                      <input type="hidden" name="conti1" value="1">
                      <input type="hidden" name="query_by" value="<?php echo $row1['tbl']; ?>">
                      <button type="submit" class="btn btn-primary btn-xs" title="Kemaskini" name="edit_query"><span class="fa fa-pencil"></span></button>
                      </form>
                      </div>
                    <div class="col-md-6">
                      <form method="post" action="delete.php">
                      <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                      <button type="submit" class="btn btn-danger btn-xs" title="Padam" name="delete_query"><span class="fa fa-trash"></span></button>
                      </form>
                      </div>
                      </center>
                    </td>
                </tr>
<?php } ?>
              </table>
            </div>
        </div>
          </div>
     </div>
        </div>
        
		</div>
        </div>
      </section>
        <!-- footer content -->
        <?php include 'footer.php'; ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <?php include 'include/js.php'; ?>
  </body>
</html>