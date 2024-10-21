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
                    <li  role="presentation" class="active">
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
                    <li role="presentation" class="disabled">
                        <a title="Maklumat Bank">
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
                    <div class="tab-pane active" role="tabpanel" id="step5">
                        <div class="step5">
                            <center><h2 class="StepTitle"> Maklumat Lesen Memandu </h2></center>
                      <br/>
                          <div class="form group">
                            <div align="center">
                              <div class="col-md-4 col-sm-4 col-xs-12">
                                 <label for="exampleInputFile">Gambar Lesen Memandu</label><br>
                                    <?php echo $_SESSION['licensepic']; ?>
                                 <input name="dl_pic" type="file" id="exampleInputFile">
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-12">
                                 <label for="exampleInputFile">Gambar Microchip</label><br>
                                    <?php echo $_SESSION['chippic']; ?>
                                 <input name="dl_chip" type="file" id="exampleInputFile">
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-12">
                                 <label for="exampleInputFile">Lampiran</label><br>
                                    <?php echo $_SESSION['attch']; ?>
                                 <input name="attch_" type="file" id="exampleInputFile">
                              </div>
                             </div>
                          </div><br/><br/><br/><br/>
                          <div class="form group">
                            <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nombor Siri</label>
                                <input name="serial_nom" type="text" class="form-control" placeholder="Nombor Siri" value="<?php echo $_SESSION['serialno']; ?>">
                                <input name="serial_nom1" type="hidden" value="<?php echo $_SESSION['serialno']; ?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Status Lesen Memandu</label>
                                <select id="pilih" name="dl_status" class="form-control">
                                  <option value="<?php echo $_SESSION['status']; ?>"><?php echo $_SESSION['status']; ?></option>
                                  <?php include 'include/status.php'; ?>  
                                </select>
                            </div>      
                          </div>
                         </div>
                         <br/>
                          <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Kelas lesen</label>
                                <input name="drive_class" type="text" class="form-control" placeholder="Kelas lesen" value="<?php echo $_SESSION['class']; ?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Pertama</label>
                                <input name="f_name" type="text" class="form-control" placeholder="Nama Pertama" value="<?php echo $_SESSION['firstname']; ?>">
                            </div>      
                          </div>
                         </div>
                          <br/>
                           <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Tengah</label>
                                <input name="m_name" type="text" class="form-control" placeholder="Nama Tengah" value="<?php echo $_SESSION['middlename']; ?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Akhir</label>
                                <input name="l_name" type="text" class="form-control" placeholder="Nama Akhir" value="<?php echo $_SESSION['lastname']; ?>">
                            </div>      
                          </div>
                         </div>
                          <br/>
                          <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <label>Warganegara</label>
                                <select id="pilih" name="national" class="form-control">
                                  <option value="<?php echo $_SESSION['nationality']; ?>"><?php echo $_SESSION['nationality']; ?></option><option value="">Sila Pilih</option>
                                  <?php include 'include/negara.php'; ?>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tarikh Mula</label>
                                <fieldset>
                                    <div class="control-group">
                                    <div class="controls">
                                    <div class="xdisplay_inputx form-group has-feedback">
                                    <input name="st_date" type="text" class="form-control has-feedback-left" id="datepicker" placeholder="Tarikh Mula" aria-describedby="inputSuccess2Status" value="<?php echo $_SESSION['startdate']; ?>">
                                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                    </div>
                                    </div>
                                    </div>
                                </fieldset>
                            </div>      
                          </div>
                         </div>
                          <br/>
                          <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tarikh Luput</label>
                                <fieldset>
                                    <div class="control-group">
                                    <div class="controls">
                                    <div class="xdisplay_inputx form-group has-feedback">
                                    <input name="exp_date" type="text" class="form-control has-feedback-left" id="datepicker1" placeholder="Tarikh Luput" aria-describedby="inputSuccess2Status" value="<?php echo $_SESSION['expireddate']; ?>">
                                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                    </div>
                                    </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <label>Tempat Daftar</label>
                               <input name="issue_plce" type="text" class="form-control" placeholder="Tempat Daftar" value="<?php echo $_SESSION['placeissue']; ?>">
                            </div>      
                          </div>
                        </div><br/>
                          <div class="form group">
                            <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Negara</label>
                                <select id="pilih" name="country_" class="form-control">
                                  <option value="<?php echo $_SESSION['country']; ?>"><?php echo $_SESSION['country']; ?></option><option value="">Sila Pilih</option>
                                  <?php include 'include/negara.php'; ?>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <label>Lost And Found Record</label>
                               <textarea name="lafr_" class="form-control" rows="3" placeholder="Lost And Found Record"><?php echo $_SESSION['lafr']; ?></textarea>
                            </div>      
                          </div>
                         </div>
                          <br/>
                          <div class="form group">
                         <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label>Nota</label>
                                <textarea name="notas" class="form-control" rows="3" placeholder="Nota"><?php echo $_SESSION['note']; ?></textarea>
                            </div>         
                          </div>
                         </div><br/>
                        <ul class="list-inline pull-right">
                            <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                            <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                            <input type="hidden" name="id" value="<?php if(isset($_SESSION['id'])) {echo $_SESSION['id'];} ?>">
                            <button type="submit" class="btn btn-primary next-step" name="edit_license">Kemaskini</button>
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