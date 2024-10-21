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
                <h3>Carian</h3>
              </div>
            </div>
            <div class="clearfix">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
          <div class="x_title">       
            <div class="title_right"> <div class="box-body">
             <form method="get" action="carian1.php">
              <div class="row">
                <div class="col-xs-2">
                  <label class="pull-right">Search By : <font color="red">&ensp;*</font></label>
                </div>
                <div class="col-xs-2">
                  <select class="form-control" name="search_by" required="required">
                    <option disabled selected>Option</option>
                     <option value="Lain-lain">Semua</option>
                    <option value="FIR" >FIR</option>
                    <option value="Profil" >Profil</option>
                    <option value="Fizikal" >Fizikal</option>
                    <option value="Kad Pengenalan" >Kad Pengenalan</option>
                    <option value="Pasport" >Pasport</option>
                    <option value="Lesen Memandu" >Lesen Memandu</option>
                    <option value="Pengangkutan" >Pengangkutan</option>
                    <option value="Bank" >Bank</option>
                    <option value="Syarikat" >Syarikat</option>
                    <option value="Media Sosial" >Media Sosial</option>
                    <option value="Nombor Telefon" >Nombor Telefon</option>
                    <option value="Rumah" >Rumah</option>
                    <option value="Transaksi" >Bank Statement</option>
                    <option value="iv">Investment</option>
                    <option value="lg">Ledger</option>
                    <option value="fd">Fix Deposit</option>
                    <option value="GST">GST</option>
                   
                  </select>
                </div>
                <div class="col-xs-4">
                  <input type="text" class="form-control" name="keyword">
                </div>
                <div class="col-xs-2">
                  <button type="submit" class="btn btn-primary" name="keyword_carian">Search</button>
                </div>
                <div class="col-xs-2"></div>
              </div>
              <br>
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