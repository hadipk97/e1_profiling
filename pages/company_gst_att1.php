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
                <h3>KEMASKINI</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">

          </div>

            <form role="form" enctype="multipart/form-data" method="post" action="reg.php">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step8">
                        <div class="step8">
                            <center><h2 class="StepTitle"> KEMASKINI MAKLUMAT PENDAFTARAN GST SYARIKAT </h2></center>
                              <br/>
                              <?php include('include/dbconn.php');
      $id = $_POST['id'];

      $sql = "SELECT * FROM [dbo].[com_pany_gst_att] where id = '$id' ";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
        
      }
      $counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
  echo $row1['com_pany_id'];

?>
                          </div><br/>
                          <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">


                              <label>Syarikat <font color="red">*</font></label></label>
                                <select name="com_pany_id" class="form-control" required>
                                  <option value="<?=$row1['com_pany_id'];?>"><?=$row1['com_pany_id'];?></option>
                                  
                                 
                                </select>
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <label>Tarikh Pendaftaran</label>
                                <input name="registration_application_date" type="date" class="form-control" placeholder="registration_application_date" value="<?=$row1['registration_application_date'];?>">   
                            </div>   
                            
                          </div>
                        </div>
                        <br>
                        <div class="form group">
                           <div class="row">
                           <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tarikh Akaun Dibuka</label>
                                    <input name="account_commence_date" type="date" class="form-control" placeholder="account_commence_date" value="<?=$row1['account_commence_date'];?>">
                                   
                                   
                            </div>  
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tarikh Akaun Ditutup</label>
                                <input name="account_end" type="date" class="form-control" placeholder="account_end" value="<?=$row1['account_end'];?>">   
                            </div>  
                          </div>
                        </div>
                        <br>
                        <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Status  <font color="red">*</font></label>
                                <select name="status" class="form-control" required>
                                  <option value="<?=$row1['status'];?>"><?=$row1['status'];?></option>
                                  <option value="Aktif">Aktif</option>
                                  <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Sebab Ditutup</label>
                                <input name="closure_reason" type="text" class="form-control" placeholder="closure_reason" value="<?=$row1['closure_reason'];?>">   
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Jenis Pendaftaran</label>
                                <input name="registration_type" type="text" class="form-control" placeholder="registration_type" value="<?=$row1['registration_type'];?>">   
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Kekerapan Pemfailan Cukai</label>
                                <input name="tax_filing_frequency" type="text" class="form-control" placeholder="tax_filing_frequency" value="<?=$row1['tax_filing_frequency'];?>">   
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Bulan Akhir Tahun Fiskal</label>
                                <input name="fiscal_year_end_month" type="date" class="form-control" placeholder="fiscal_year_end_month" value="<?=$row1['fiscal_year_end_month'];?>">   
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Peratus Pengeluar</label>
                                <input name="supply_precentage" type="text" class="form-control" placeholder="supply_precentage" value="<?=$row1['supply_precentage'];?>"> 
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Standart</label>
                                <input name="standard" type="text" class="form-control" placeholder="standard" value="<?=$row1['standard'];?>">  
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Eksport</label>
                                <input name="export" type="text" class="form-control" placeholder="export" value="<?=$row1['export'];?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Rate 0 </label>
                                <input name="zero_rate" type="text" class="form-control" placeholder="zero_rate" value="<?=$row1['zero_rate'];?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Pengecualian</label>
                                <input name="exempt" type="text" class="form-control" placeholder="exempt" value="<?=$row1['exempt'];?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Jumlah pengeluaran dikenakan tax</label>
                                <input name="total_taxable_supplies" type="text" class="form-control" placeholder="total_taxable_supplies" value="<?=$row1['total_taxable_supplies'];?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tarikh Ambang Batas</label>
                                <input name="threshold_date" type="date" class="form-control" placeholder="threshold_date" value="<?=$row1['threshold_date'];?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Jumlah Perolehan</label>
                                <!--<input name="export" type="text" class="form-control" placeholder="total_turnover">-->
                                <input name="total_turnover" type="text" class="form-control" placeholder="total_turnover" value="<?=$row1['total_turnover'];?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Keputusan Permindahan </label>
                                <input name="result_transfer" type="text" class="form-control" placeholder="result_transfer" value="<?=$row1['result_transfer'];?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Rujukan Surat Menyurat</label>
                                <input name="correspondence_reference" type="text" class="form-control" placeholder="correspondence_reference" value="<?=$row1['correspondence_reference'];?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Akaun Utama</label>
                                <input name="principal_account" type="text" class="form-control" placeholder="principal_account" value="<?=$row1['principal_account'];?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Bayaran Asas</label>
                                <input name="payment_basis" type="text" class="form-control" placeholder="payment_basis" value="<?=$row1['payment_basis'];?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tarikh Pemindahan</label>
                                <input name="transfer_date" type="date" class="form-control" placeholder="transfer_date" value="<?=$row1['transfer_date'];?>">
                            </div>
                          </div>
                        </div>
                        <br>

                          </div>
                          </div>
                         </div>
                         <br/>
                        <ul class="list-inline pull-right">
                            <input type="hidden" name="id" value="<?=$row1['id'];?>">
                            <input type="hidden" name="id_profil" value="<?=$row1['id_profil'];?>">
                            <button type="submit" class="btn btn-primary" name="simpan_company_gst_att">Simpan</button>
                            </form>
                            
                            <form class="pull-left" method="post" action="sent.php">
                            <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                            <button type="submit" name="seterusnya_company" class="btn btn-default next-step">Kembali</button>
                            </form>
                        </ul>
                        <br>
                        <br>
                        <br>
<?php }
?>
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
    
  </body>
</html>