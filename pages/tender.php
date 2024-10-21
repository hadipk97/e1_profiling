<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php include 'include/bar.php'; ?>
<?php include ('include/dbconn.php');
    
$sql = "SELECT COUNT(*) FROM [jim].[dbo].[profile]";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
}
while( $row64 = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
$id = $row64[0];
$id++;
?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            
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
                
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="">
                        <a href="/sprm/pages/person.php" title="Authorised Person">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="active">
                        <a href="#" title="Tender">
                            <span class="round-tab">
                                <i class="fa fa-male"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#" title="Maklumat Kad Pengenalan">
                            <span class="round-tab">
							      <i class="glyphicon glyphicon-pencil"></i>
							</span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#" title="Maklumat Pasport">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>
                    
                </ul>
            </div>

            <form enctype="multipart/form-data" method="post" action="reg.php">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="step1">
                            <center><h2 class="StepTitle"> MAKLUMAT Tender </h2></center>
                      <br/>
                               
                          </div><br/>
                          
                         
                          
                         </div>
                          <br/>
                           <div class="form group">
                                    <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label>Tajuk</label>
                                <input name="name" type="text" class="form-control" placeholder="MEMBEKAL RANGSUM PUKAL MINUMAN (KORDIALBUAH/ BERPERISA) UNTUK ANGKATAN TENTERA MALAYSIA (ATM) BAGI KAWASAN I DAN II SEMENANJUNG (PERLIS, KEDAH, PULAU PINANG DAN PERAK) BAGI TEMPOH TIGA (3) TAHUN">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nombor Tender</label>
                                <input name="type" type="text" value="Authorized Person" class="form-control" placeholder="Authorized Person">
                            </div>      
                          </div>
                         </div>
                          <br/>
                          <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Kategori Perolehan</label>
                                <select id="pilih" name="national" class="form-control">
                                    <option value="">Sila Pilih</option>
                                    <option value="">Bekalan</option>
                                    <option value="">Perkhidmatan Bukan Perunding</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Kementerian</label>
                                <input name="Kementerian" type="text" class="form-control" placeholder="KEMENTERIAN PERTAHANAN">
                            </div>      
                          </div>
                         </div>
                          <br/>
                          <div class="form group">
                                    <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Agensi</label>
                                <input name="ceasedate" type="text" class="form-control" placeholder="BAHAGIAN PEROLEHAN">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Pertender Berjaya</label>
                                <input name="passportno" type="text" class="form-control" placeholder="FRESHIE (M) SDN. BHD. NO. DAFTAR SYARIKAT: 88337-M NO. DAFTAR MOF/PKK:">
                            </div>      
                          </div>
                        </div><br/>
                         
                          <br/>
                          <div class="form group">
                                    <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Harga Setuju Terima</label>
                                MYR <input name="hst" type="text" class="form-control" placeholder="1816231.20">
                            </div> 
                            
                          </div>
                          </div>
                          <br/>
                          <ul class="list-inline pull-right">
                            <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                            <li><button type="submit" class="btn btn-primary" name="simpan_profile">Seterusnya</button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
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

    <!-- jQuery -->
    <?php include 'include/js.php'; ?>
  </body>
</html>
<?php } ?>