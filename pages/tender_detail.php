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
                <h3>Detail Tender</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">

          <div class="wizard">
            <div class="wizard-inner">
                
                
            </div>

            <form enctype="multipart/form-data" method="post" action="reg.php">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        
                         </div>
                          
                           <div class="form group">
                                    <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label>Tajuk</label>
                                <p>MEMBEKAL RANGSUM PUKAL MINUMAN (KORDIALBUAH/ BERPERISA) UNTUK ANGKATAN TENTERA MALAYSIA (ATM) BAGI KAWASAN I DAN II SEMENANJUNG (PERLIS, KEDAH, PULAU PINANG DAN PERAK) BAGI TEMPOH TIGA (3) TAHUN</p>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nombor Tender</label>
                                <p>QT190000000035753</p>

                            </div>      
                          </div>
                         </div>
                          <br/>
                          <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Kategori Perolehan</label>
                                <p>Bekalan</p>
                                  
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Kementerian</label>
                                <p>KEMENTERIAN PERTAHANAN</p>
                            </div>      
                          </div>
                         </div>
                          <br/>
                          <div class="form group">
                                    <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Agensi</label>
                                <p>BAHAGIAN PEROLEHAN</p>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Pertender Berjaya</label>
                                <p>FRESHIE (M) SDN. BHD. NO. DAFTAR SYARIKAT: 88337-M</p>
                            </div>      
                          </div>
                        </div><br/>
                         
                          <br/>
                          <div class="form group">
                                    <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Harga Setuju Terima</label>
                                <p>MYR 1816231.20</p>
                            </div> 
                            
                          </div>
                          </div>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                </div>
              </div>
            </div>
            <div class="row">
            <h3>Penyata GST found for FRESHIE (M) SDN BHD<h3>
            <style type="text/css">
	table.tableizer-table {
		font-size: 12px;
		border: 1px solid #CCC; 
		font-family: Arial, Helvetica, sans-serif;
	} 
	.tableizer-table td {
		padding: 4px;
		margin: 3px;
		border: 1px solid #CCC;
	}
	.tableizer-table th {
		background-color: #104E8B; 
		color: #FFF;
		font-weight: bold;
	}
</style>
<table class="tableizer-table">
<thead><tr class="tableizer-firstrow"><th>Account Name</th><th>Account ID</th><th>Return Filing Period</th><th>Standard Rated Acquisition</th><th>Standard Rated Supply</th><th>Input Tax</th><th>Output Tax</th><th>Amount Claimable</th><th>Amount Payable</th><th>Bad Debt Recovered</th><th>Bad Debt Relief</th><th>Capital Goods Acquired</th><th>Exempt Supplies</th><th>Export Supplies</th><th>Goods Imported</th><th>Local Supplies</th><th>GST Relief Supplies</th><th>Suspended GST</th></tr></thead><tbody>
 <tr><td>FRESHIE (M) SDN BHD</td><td>002055217152</td><td>30-Jun-2015</td><td>1,000.00</td><td>600.00</td><td>0.00</td><td>0.00</td><td>100.00</td><td>500.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td></tr>
 <tr><td>FRESHIE (M) SDN BHD</td><td>002055217152</td><td>30-Sep-2015</td><td>2,000.00</td><td>600.00</td><td>0.00</td><td>0.00</td><td>200.00</td><td>400.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td></tr>
 <tr><td>FRESHIE (M) SDN BHD</td><td>002055217152</td><td>31-Dec-2015</td><td>3,000.00</td><td>600.00</td><td>0.00</td><td>0.00</td><td>300.00</td><td>300.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td></tr>
 <tr><td>FRESHIE (M) SDN BHD</td><td>002055217152</td><td>31-Mar-2016</td><td>4,000.00</td><td>600.00</td><td>0.00</td><td>0.00</td><td>400.00</td><td>200.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td></tr>
 <tr><td>FRESHIE (M) SDN BHD</td><td>002055217152</td><td>30-Jun-2016</td><td>5,000.00</td><td>600.00</td><td>0.00</td><td>0.00</td><td>500.00</td><td>100.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td></tr>
 <tr><td>FRESHIE (M) SDN BHD</td><td>002055217152</td><td>30-Sep-2016</td><td>1,000.00</td><td>600.00</td><td>0.00</td><td>0.00</td><td>100.00</td><td>500.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td></tr>
 <tr><td>FRESHIE (M) SDN BHD</td><td>002055217152</td><td>31-Dec-2016</td><td>2,000.00</td><td>600.00</td><td>0.00</td><td>0.00</td><td>200.00</td><td>400.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td></tr>
 <tr><td>FRESHIE (M) SDN BHD</td><td>002055217152</td><td>31-Mar-2017</td><td>3,000.00</td><td>600.00</td><td>0.00</td><td>0.00</td><td>300.00</td><td>300.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td></tr>
 <tr><td>FRESHIE (M) SDN BHD</td><td>002055217152</td><td>30-Jun-2017</td><td>4,000.00</td><td>600.00</td><td>0.00</td><td>0.00</td><td>400.00</td><td>200.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td></tr>
 <tr><td>FRESHIE (M) SDN BHD</td><td>002055217152</td><td>30-Sep-2017</td><td>5,000.00</td><td>600.00</td><td>0.00</td><td>0.00</td><td>500.00</td><td>100.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td></tr>
 <tr><td>FRESHIE (M) SDN BHD</td><td>002055217152</td><td>31-Dec-2017</td><td>1,000.00</td><td>600.00</td><td>0.00</td><td>0.00</td><td>100.00</td><td>500.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td></tr>
 <tr><td>FRESHIE (M) SDN BHD</td><td>002055217152</td><td>31-Mar-2018</td><td>2,000.00</td><td>600.00</td><td>0.00</td><td>0.00</td><td>200.00</td><td>400.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td></tr>
 <tr><td>FRESHIE (M) SDN BHD</td><td>002055217152</td><td>30-Jun-2018</td><td>3,000.00</td><td>600.00</td><td>0.00</td><td>0.00</td><td>300.00</td><td>300.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td></tr>
 <tr><td>FRESHIE (M) SDN BHD</td><td>002055217152</td><td>30-Sep-2018</td><td>4,000.00</td><td>600.00</td><td>0.00</td><td>0.00</td><td>400.00</td><td>200.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td></tr>
 <tr><td>FRESHIE (M) SDN BHD</td><td>002055217152</td><td>30-Dec-2018</td><td>5,000.00</td><td>600.00</td><td>0.00</td><td>0.00</td><td>500.00</td><td>100.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td></tr>
</tbody></table>
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