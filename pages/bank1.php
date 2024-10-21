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

          <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="disabled">
                        <a title="Maklumat Profil">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a title="Maklumat Fizikal">
                            <span class="round-tab">
                                <i class="fa fa-male"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a title="Maklumat Kad Pengenalan">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a title="Maklumat Pasport">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a title="Maklumat Lesen Memandu">
                            <span class="round-tab">
                                <i class="fa fa-folder"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a title="Maklumat Pengangkutan">
                            <span class="round-tab">
                                <i class="fa fa-car"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="active">
                        <a href="bank1.php" title="Maklumat Bank">
                            <span class="round-tab">
                                <i class="fa fa-bank"></i>
                            </span>
                        </a>
                    </li>
                   <li role="presentation" class="disabled">
                        <a title="Maklumat Syarikat">
                            <span class="round-tab">
                                <i class="fa fa-building"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a title="Maklumat Media Sosial">
                            <span class="round-tab">
                                <i class="fa fa-ge"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a title="Maklumat Nombor Telefon">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-phone"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a title="Maklumat Rumah">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-home"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
          </div>

            <form role="form" enctype="multipart/form-data" method="post" action="edit.php">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step7">
                        <div class="step7">
                            <center><h2 class="StepTitle"> MAKLUMAT BANK </h2></center>
                              <br/>
                          <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>No.Akaun</label>
                                <input name="n_aka" type="text" class="form-control" placeholder="No.Akaun" value="<?php echo $_SESSION['n_aka']; ?>">   
                                <input name="n_aka1" type="hidden" value="<?php echo $_SESSION['n_aka']; ?>">   
                            </div>   
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Pemegang Akaun</label>
                                <input name="p_aka" type="text" class="form-control" placeholder="Nama Pemegang Akaun" value="<?php echo $_SESSION['p_aka']; ?>">   
                            </div>     
                          </div>
                         </div>
                         <br/>
                          <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Jenis Akaun</label>
                                <select name="j_aka" class="form-control">   
                                  <option value="<?php echo $_SESSION['j_aka']; ?>"><?php echo $_SESSION['j_aka']; ?></option>
                                  <option value="Current">Current</option>
                                  <option value="Deposit">Deposit</option>
                                  <option value="Fix Deposit">Fix Deposit</option>
                                  <option value="Joint Loan">Joint Loan</option>
                                  <option value="Loan">Loan</option>
                                  <option value="Saving">Saving</option>
                                  <option value="Other">Other</option>
                                  <option value="nknown">Unknown</option>
                                </select>
                            </div>   
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Lokasi Akaun</label>
                                <select name="l_aka" class="form-control">   
                                  <option value="<?php echo $_SESSION['l_aka']; ?>"><?php echo $_SESSION['l_aka']; ?></option>
                                  <option value="International">International</option>
                                  <option value="Domestic">Domestic</option>
                                  <option value="Other">Other</option>
                                  <option value="nknown">Unknown</option>
                                </select>  
                            </div>     
                          </div>
                         </div>
                         <br/>
                          <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Bank</label>
                                <select name="n_bank" class="form-control">  
                                  <option value="<?php echo $_SESSION['n_bank']; ?>"><?php echo $_SESSION['n_bank']; ?></option>  
                                  <?php include 'include/bank.php'; ?>
                                </select>
                            </div>   
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Baki Semasa</label>
                                <input name="b_aka" type="text" class="form-control" placeholder="Baki Semasa" value="<?php echo $_SESSION['b_aka']; ?>">   
                            </div>     
                          </div>
                         </div>
                         <br/>
                          <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Alamat Bank</label>
                                <textarea class="form-control" rows="3" name="a_bank"><?php echo $_SESSION['a_bank']; ?></textarea>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Catatan</label>
                                <textarea class="form-control" rows="3" name="note"><?php echo $_SESSION['note']; ?></textarea>
                            </div>
                          </div>
                         </div>
                         <br/>
                        <ul class="list-inline pull-right">
                            <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                            <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                            <input type="hidden" name="id" value="<?php if(isset($_SESSION['id'])) {echo $_SESSION['id'];} ?>">
                            <button type="submit" class="btn btn-primary next-step" name="edit_bank2">Kemaskini</button>
                        </ul>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  </form>
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
  </body>
</html>