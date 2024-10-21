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
                    <li role="presentation" class="active">
                        <a href="mobileno1.php" title="Maklumat Nombor Telefon">
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
                     <div class="tab-pane active" role="tabpanel" id="step10">
                        <div class="step10">
                            <center><h2 class="StepTitle"> MAKLUMAT NOMBOR TELEFON</h2></center>
                      <br/>
                            <div class="form group">
                              <div align="center">
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <label for="exampleInputFile">Rekod Transaksi Panggilan</label><br>
                                    <?php echo $_SESSION['record']; ?>
                                 <input name="call_record" type="file" id="exampleInputFile">
                                 </div>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <label for="exampleInputFile">Lampiran</label><br>
                                    <?php echo $_SESSION['attch']; ?>
                                 <input name="attch_" type="file" id="exampleInputFile">
                                 </div>
                                </div>
                          </div><br/><br/><br/><br/>
                          <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <label>Nombor Telefon  *+ 'Kod Negara'</label>
                               <input name="mob_nom" type="text" class="form-control" placeholder="Nombor Telefon" value="<?php echo $_SESSION['nom']; ?>">
                               <input name="mob_nom1" type="hidden" value="<?php echo $_SESSION['nom']; ?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Pembekal perkhidmatan</label>
                                <select id="pilih" name="srvc_prov" class="form-control">
                                  <option value="<?php echo $_SESSION['service']; ?>"><?php echo $_SESSION['service']; ?></option>
                                  <?php include 'include/service.php'; ?>  
                                </select>
                            </div>      
                          </div>
                        </div>
                        <br/>
                          <div class="form group">
                         <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tarikh Daftar</label>
                                <fieldset>
                                    <div class="control-group">
                                    <div class="controls">
                                    <div class="xdisplay_inputx form-group has-feedback">
                                    <input name="reg_date" type="text" class="form-control has-feedback-left" id="datepicker" placeholder="Tarikh Daftar" aria-describedby="inputSuccess2Status" value="<?php echo $_SESSION['registdate']; ?>">
                                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                    </div>
                                    </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Status Sambungan</label>
                                <select id="pilih" name="conn_status" class="form-control">
                                  <option value="<?php echo $_SESSION['status']; ?>"><?php echo $_SESSION['status']; ?></option>
                                  <?php include 'include/connectivity1.php'; ?>  
                                </select>
                            </div>      
                          </div>
                         </div>
                          <br/>
                           <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <label>Termination Date</label>
                                <fieldset>
                                    <div class="control-group">
                                    <div class="controls">
                                    <div class="xdisplay_inputx form-group has-feedback">
                                    <input name="term_date" type="text" class="form-control has-feedback-left" id="datepicker1" placeholder="Termination Date" aria-describedby="inputSuccess2Status" value="<?php echo $_SESSION['terminatedate']; ?>">
                                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                    </div>
                                    </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Menara terdekat</label>
                                <input name="near_tower" type="text" class="form-control" placeholder="Menara terdekat" value="<?php echo $_SESSION['tower']; ?>">
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
                            <li><button type="submit" class="btn btn-primary next-step" name="edit_mobileno">Kemaskini</button></li>
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