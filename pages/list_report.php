<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php include 'include/bar.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="../plugins/bootstrap.min.js"></script>
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            <?php include 'flash.php'; ?>
              <div class="title_left">
                <h3>LAPORAN KES</h3>
              </div>
            </div>

            <div class="clearfix">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Senarai Laporan Kes</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <div class="form group">
                        <div class="row">
                        <div class="box-body">
                          
<?php 
include('include/dbconn.php');  # code...
$date = date("Y-m-d");

      if($_GET['s'] != ""){
        $sql = $_GET['s']. "AND masa like '%$_GET[m]%'";
      }else{
        $sql = "SELECT * FROM [jim].[dbo].[admin]  where id_fir <> 'DUMPDATA'";
      }
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
                  <th>Tempoh Kes</th>
                  <th style="width: 10%">Tindakan</th>
                </tr>
                </thead>
                <tbody>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>              <tr>
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
                        echo "<label class='label label-success'>TUTUP KES</label>";
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
                      <div class="row">
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-xs" id="<?php echo $row1['id']; ?>" data-toggle="modal" data-target="#j_cetak" title="Cetak"><span class="glyphicon glyphicon-print"></span></button>
                        </div>
                        <div class="col-md-4">
                          <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=600,top=100,left=250,resizable=no');">
                            <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                            <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                          </form>
                        </div>
                      </div>
                    </center>
                  </td>
                </tr>
        <?php } ?>
              </tbody>
            </table>
            <div class="modal fade" id="j_cetak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Export</h4>
                  </div>
                  <div class="modal-body">
                    <form id="j_cetak_form" method="post" action="cetak_fir.php" target="print_popup" onsubmit="window.open('about:blank','print_popup');">
                      <input type="hidden" name="id" value="firstname">
                      <button type="submit" class="btn btn-default" name="e_pdf" data-toggle="tooltip" title="Cetak PDF"><img src="../img/pdf.png" width="30%" height="auto"></button>
                      <button type="submit" class="btn btn-default" name="e_excel" data-toggle="tooltip" title="Cetak Excel"><img src="../img/excel.png" width="30%" height="auto"></button>
                      <button type="submit" class="btn btn-default" name="e_word" data-toggle="tooltip" title="Cetak Word"><img src="../img/word.png" width="30%" height="auto"></button>
                    </form>
                    <form id="j_cetak_form1" method="post" action="cetak_fir.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=600,top=100,left=250,resizable=no');">
                      <input type="hidden" name="id" value="firstname">
                      <button type="submit" class="btn btn-default" name="e_qrcode" data-toggle="tooltip" title="Generate QRcode" style="width: 98%"><img src="qrcode/temp/test.png" width="30%" height="auto"></button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
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
</div>
</div>
</div>
        <?php include 'footer.php'; ?>
        <!-- /footer content -->
      </div>
  </div>
<script>
$('#j_cetak').on('show.bs.modal', function (e) {
  var opener=e.relatedTarget;
  var firstname=$(opener).attr('id');
  $('#j_cetak_form').find('[name="id"]').val(firstname);
  $('#j_cetak_form1').find('[name="id"]').val(firstname);
});
</script>
    <?php include 'include/js.php'; ?>
  </body>
</html>