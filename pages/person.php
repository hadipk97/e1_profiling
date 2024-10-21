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

                    <li role="presentation" class="active">
                        <a href="#" title="Authorised Person">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="">
                        <a href="/sprm/pages/tender.php" title="Tender">
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
                            <center><h2 class="StepTitle"> MAKLUMAT PROFIL </h2></center>
                      <br/>
                               
                          </div><br/>
                          
                         
                          
                         </div>
                          <br/>
                           <div class="form group">
                                    <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama</label>
                                <input name="name" type="text" class="form-control" placeholder="nama">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Jenis</label>
                                <input name="type" type="text" value="Authorized Person" class="form-control" placeholder="Authorized Person">
                            </div>      
                          </div>
                         </div>
                          <br/>
                          <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nombor IC</label>
                                <input name="l_name" type="text" class="form-control" placeholder="No IC">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Appointed</label>
                                <input name="appointed" type="text" class="form-control" placeholder="9/6/2013 12:00:00 AM">
                            </div>      
                          </div>
                         </div>
                          <br/>
                          <div class="form group">
                                    <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Cease Date</label>
                                <input name="ceasedate" type="text" class="form-control" placeholder="01/17/2013 12:00:00 AM">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Passport No.</label>
                                <input name="passportno" type="text" class="form-control" placeholder="K83837462">
                            </div>      
                          </div>
                        </div><br/>
                         
                          <br/>
                          <div class="form group">
                                    <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <label>Warganegara</label>
                                <select id="pilih" name="national" class="form-control">
                                    <option value="">Sila Pilih</option>
                                  <?php include 'include/negara.php'; ?>
                                </select>
                            </div> 
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <label>Applicant?</label>
                                <input name="Applicant" type="text" class="form-control" placeholder="Y/N">
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Warehouse Data</label>
                                <textarea name="notas" class="form-control" rows="3" placeholder=""></textarea>
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