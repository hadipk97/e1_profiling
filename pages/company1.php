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

                    <li role="presentation">
                        <a href="profile1.php" title="Maklumat Profil">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                        </a>
                    </li>
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
                    <li role="presentation" class="active">
                        <a href="company.php" title="Maklumat Syarikat">
                            <span class="round-tab">
                                <i class="fa fa-building"></i>
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

            <form role="form" enctype="multipart/form-data" method="post" action="edit.php">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step8">
                        <div class="step8">
                            <center><h2 class="StepTitle"> MAKLUMAT SYARIKAT </h2></center>
                              <br/>
                                <div class="form group">
                                <div align="center"><!--
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <label class="control-label">Laman Sesawang</label><br>
                                    <?php// echo $_SESSION['web']; ?>
                                 <input type="file" name="web">
                                 </div>-->
                                 <div class="col-md-12 col-sm-12 col-xs-12">
                                 <label class="control-label">Lampiran</label><br>
                                    <?php echo $_SESSION['attch']; ?>
                                 <input type="file" name="attch">
                                 </div>
                                </div>
                          </div><br/><br/><br/><br/>
                          <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Syarikat</label>
                                <input name="c_name" type="text" class="form-control" placeholder="Nama Syarikat" value="<?php echo $_SESSION['c_name']; ?>">   
                            </div>   
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>No. Pendaftaran Syarikat</label>
                                <input name="no_c" type="text" class="form-control" placeholder="No. Pendaftaran Syarikat" value="<?php echo $_SESSION['no_c']; ?>">   
                                <input name="no_c1" type="hidden" value="<?php echo $_SESSION['no_c']; ?>">   
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tarikh Tamat Pendaftaran</label>
                                <fieldset>
                                    <div class="control-group">
                                    <div class="controls">
                                    <div class="xdisplay_inputx form-group has-feedback">
                                    <input name="exp_regist" type="text" class="form-control has-feedback-left" id="datepicker1" placeholder="Tarikh Tamat Pendaftaran" aria-describedby="inputSuccess2Status" value="<?php echo $_SESSION['exp_regist']; ?>">
                                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                    </div>
                                    </div>
                                    </div>
                                </fieldset>
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Sektor Perniagaan</label>
                                <select id="pilih" name="sek" class="form-control"> 
                                  <option value="<?php echo $_SESSION['sek']; ?>"><?php echo $_SESSION['sek']; ?></option>
                                  <option value="Aerospace">Aerospace</option>
                                  <option value="Defence">Defence</option>
                                  <option value="Security">Security</option>
                                  <option value="Airlines">Airlines</option>
                                  <option value="Banking">Banking</option>
                                  <option value="Chemistry & Pharma">Chemistry & Pharma</option>
                                  <option value="Consumer Goods">Consumer Goods</option>
                                  <option value="Health">Health</option>
                                  <option value="Insurance">Insurance</option>
                                  <option value="Manufacturing">Manufacturing</option>
                                  <option value="Mining Industry">Mining Industry</option>
                                  <option value="Public Sector">Public Sector</option>
                                  <option value="Telecom">Telecom</option>
                                  <option value="Tourism">Tourism</option>
                                  <option value="Transportation">Transportation</option>
                                  <option value="Utility & Energy">Utility & Energy</option>
                                  <option value="Manpower">Manpower</option>
                                  <option value="Cleaning Service">Cleaning Service</option>
                                  <option value="Agriculture">Agriculture</option>
                                  <option value="Others">Others</option>
                                  <option value="Unknown">Unknown</option>
                                </select>  
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Alamat</label>
                                <input name="ala" type="text" class="form-control" placeholder="Alamat" value="<?php echo $_SESSION['ala']; ?>">   
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>No.Tel Syarikat</label>
                                <input name="tel" type="text" class="form-control" placeholder="No. Tel Syarikat" value="<?php echo $_SESSION['tel']; ?>">   
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Sambungan Syarikat</label>
                                <input name="exttel" type="text" class="form-control" placeholder="Sambungan Syarikat" value="<?php echo $_SESSION['exttel']; ?>">   
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Faks</label>
                                <input name="fax" type="text" class="form-control" placeholder="Faks" value="<?php echo $_SESSION['fax']; ?>">   
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Laman Sesawang</label>
                                <input name="web" type="text" class="form-control" placeholder="Laman Sesawang" value="<?php echo $_SESSION['web']; ?>">   
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>E-mel</label>
                                <input name="email" type="text" class="form-control" placeholder="E-mel" value="<?php echo $_SESSION['email']; ?>">   
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nota</label>
                                <textarea class="form-control" rows="3" name="note" placeholder="Nota"><?php echo $_SESSION['note']; ?></textarea>  
                            </div>
                          </div>
                        </div>
                        <br>
                        <ul class="list-inline pull-right">
                            <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                            <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                            <input type="hidden" name="id" value="<?php if(isset($_SESSION['id'])) {echo $_SESSION['id'];} ?>">
                            <button type="submit" class="btn btn-primary" name="edit_company">Kemaskini</button>
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