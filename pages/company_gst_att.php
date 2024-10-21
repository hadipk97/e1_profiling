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
                <h3>DAFTAR</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">

          <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                   
                    <li role="presentation">
                        <a href="physical.php" title="Maklumat Fizikal">
                            <span class="round-tab">
                                <i class="fa fa-male"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="identitycard.php" title="Maklumat Kad Pengenalan">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="passport.php" title="Maklumat Pasport">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="drivinglicense.php" title="Maklumat Lesen Memandu">
                            <span class="round-tab">
                                <i class="fa fa-folder"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="transportation.php" title="Maklumat Pengangkutan">
                            <span class="round-tab">
                                <i class="fa fa-car"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="bank.php" title="Maklumat Bank">
                            <span class="round-tab">
                                <i class="fa fa-bank"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" >
                        <a href="company.php" title="Maklumat Syarikat">
                            <span class="round-tab">
                                <i class="fa fa-building"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="active">
                        <a href="company_gst_att.php" title="Maklumat GST Syarikat">
                            <span class="round-tab">
                                <i class="fa fa-building-o"></i>
                            </span>
                        </a>
                    </li>
                    
                    <li role="presentation">
                        <a href="smedia.php" title="Maklumat Media Sosial">
                            <span class="round-tab">
                                <i class="fa fa-ge"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="mobileno.php" title="Maklumat Nombor Telefon">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-phone"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="house.php" title="Maklumat Rumah">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-home"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
          </div>

            <form role="form" enctype="multipart/form-data" method="post" action="reg.php">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step8">
                        <div class="step8">
                            <center><h2 class="StepTitle"> MAKLUMAT PENDAFTARAN GST SYARIKAT </h2></center>
                              <br/>
                                
                          </div><br/>
                          <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
<?php include('include/dbconn.php');
$id_profil = $_SESSION['id_profil'];
      $sql = "SELECT * FROM [jim].[dbo].[com_pany] Where id_profil = '$_SESSION[id_profil]' ";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
?>

                              <label>Syarikat <font color="red">*</font></label>
                                <select name="com_pany_id" class="form-control" required>
                                  <option value="">Sila Pilih</option>
                                  <?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
  //echo "<option value='".$row1['c_name']."'>".$row1['c_name']."</option>";
  echo "<option value='".$row1['no_c']."'>".$row1['c_name']."</option>";
} 
?>
                                 
                                </select>
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tarikh Pendaftaran</label>
                                <input name="registration_application_date" type="date" class="form-control" placeholder="registration_application_date">   
                            </div>   
                            
                          </div>
                        </div>
                        <br>
                        <div class="form group">
                           <div class="row">
                           <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tarikh Akaun Dibuka</label>
                                    <input name="account_commence_date" type="date" class="form-control" placeholder="account_commence_date" >
                                   
                                   
                            </div>  
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tarikh Akaun Ditutup</label>
                                <input name="account_end" type="date" class="form-control" placeholder="account_end">   
                            </div>  
                          </div>
                        </div>
                        <br>
                        <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Status  <font color="red">*</font></label>
                                <select name="status" class="form-control" required>
                                  <option value="">Sila Pilih</option>
                                  <option value="Aktif">Aktif</option>
                                  <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Sebab Ditutup</label>
                                <input name="closure_reason" type="text" class="form-control" placeholder="closure_reason">   
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Jenis Pendaftaran</label>
                                <input name="registration_type" type="text" class="form-control" placeholder="registration_type">   
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Kekerapan Pemfailan Cukai</label>
                                <input name="tax_filing_frequency" type="text" class="form-control" placeholder="tax_filing_frequency">   
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Bulan Akhir Tahun Fiskal</label>
                                <input name="fiscal_year_end_month" type="date" class="form-control" placeholder="fiscal_year_end_month">   
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Peratus Pengeluar</label>
                                <input name="supply_precentage" type="text" class="form-control" placeholder="supply_precentage"> 
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Standart</label>
                                <input name="standard" type="text" class="form-control" placeholder="standard">  
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Eksport</label>
                                <input name="export" type="text" class="form-control" placeholder="export">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Rate 0 </label>
                                <input name="zero_rate" type="text" class="form-control" placeholder="zero_rate">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Pengecualian</label>
                                <input name="exempt" type="text" class="form-control" placeholder="exempt">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Jumlah pengeluaran dikenakan tax</label>
                                <input name="total_taxable_supplies" type="text" class="form-control" placeholder="total_taxable_supplies">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tarikh Ambang Batas</label>
                                <input name="threshold_date" type="date" class="form-control" placeholder="threshold_date">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Jumlah Perolehan</label>
                                <!--<input name="export" type="text" class="form-control" placeholder="total_turnover">-->
                                <input name="total_turnover" type="text" class="form-control" placeholder="total_turnover">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Keputusan Permindahan </label>
                                <input name="result_transfer" type="text" class="form-control" placeholder="result_transfer">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Rujukan Surat Menyurat</label>
                                <input name="correspondence_reference" type="text" class="form-control" placeholder="correspondence_reference">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Akaun Utama</label>
                                <input name="principal_account" type="text" class="form-control" placeholder="principal_account">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Bayaran Asas</label>
                                <input name="payment_basis" type="text" class="form-control" placeholder="payment_basis">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tarikh Pemindahan</label>
                                <input name="transfer_date" type="date" class="form-control" placeholder="transfer_date">
                            </div>
                          </div>
                        </div>
                        <br>

                          </div>
                          </div>
                         </div>
                         <br/>
                        <ul class="list-inline pull-right">
                            <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                            <button type="submit" class="btn btn-primary" name="simpan_company_gst_att">Simpan</button>
                            </form>
                            
                            <form class="pull-left" method="post" action="sent.php">
                            <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                            <button type="submit" name="kembali_media" class="btn btn-default next-step">Kembali</button>
                            </form>
                        </ul>
                        <br>
                        <br>
                        <br>
<?php include('include/dbconn.php');
$id_profil = $_SESSION['id_profil'];

      $sql = "SELECT * FROM [dbo].[com_pany_gst_att] where id_profil = '$_SESSION[id_profil]' ";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
?>
            <div class="box-header">
              <h3 class="box-title">Senarai Pendaftaran GST Syarikat</h3>
            </div>
            <!-- /.box-header -->
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Syarikat</th>
                  <th>Tarikh Pendaftaran</th>
                  <th>Tarikh Akaun Dibuka</th>
                  <th>Tarokh Akuan Ditutup</th>
                  <th>Status</th>
                  <th>Sebab ditutup</th>
                  <th>Akaun Prinsipal</th>
                  <th>Bayaran Basis</th>
                  <th>Tarikh Perpindahan Wang</th>
                  <th width="10%">Tindakan</th>
                </tr>
                </thead>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo $row1['com_pany_id']; ?></td>
                  <td><?php echo $row1['registration_application_date']; ?></td>
                  <td><?php echo $row1['account_commence_date']; ?></td>
                  <td><?php echo $row1['account_end']; ?></td>
                  <td><?php echo $row1['status']; ?></td>
                  <td><?php echo $row1['closure_reason']; ?></td>
                  <td><?php echo $row1['principal_account']; ?></td>
                  <td><?php echo $row1['payment_basis']; ?></td>
                  <td><?php echo $row1['transfer_date']; ?></td>
                  
                  <td>
                    <center>
                      <div class="row">
                        <div class="col-md-12">
                      <div class="col-md-4">
                      <form method="post" action="company_gst_att1.php">
                       <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                       <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                       <button type="submit" class="btn btn-primary btn-xs" name="edit_syarikat_gst_att" title="Kemaskini"><span class="glyphicon glyphicon-pencil"></span></button>
                      </form>
                      </div>
                      
                      <div class="col-md-4">
                    <form method="post" action="delete.php">
                      <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                      <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                      <button type="submit" onclick="return confirm('Padam Data Ini?');" title="Padam" name="delete_company_gst_att" class="btn-xs btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                    </form>
                  </div>
                </div>
              </div>
                    </center>
                  </td>
                </tr>
<?php } ?>
              </table>
              <form class="pull-right" method="post" action="sent.php">
                <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) { echo $_SESSION['id_fir']; }?>">
                <button type="submit" name="tambah_profile" class="btn btn-info">Tambah Profil</button>
              </form>
              <form class="pull-right" method="post" action="sent.php">
                <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                <button type="submit" name="seterusnya_company_gst_att" class="btn btn-success next-step">Seterusnya</button>
              </form>
              <div class="pull-right">
                <!--<form method="post" action="sent.php">
                  <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])){ echo $_SESSION['id_fir']; } ?>">
                  <button type="submit" class="btn btn-primary" name="sent_fir_profil">Hantar</button>
                </form>-->
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
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
  </div>

    <!-- jQuery -->
    <?php include 'include/js.php'; ?>
<script>
$('#add_bank').on('show.bs.modal', function (e) {
  var opener=e.relatedTarget;
  var firstname=$(opener).attr('no_c');
  $('#add_bank_form').find('[name="no_c"]').val(firstname);
  $('#add_bank_form').find('[name="p_aka"]').val(firstname);
   
});
</script>
  </body>
</html>