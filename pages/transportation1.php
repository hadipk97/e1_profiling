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
                    <li role="presentation" class="active">
                        <a href="transportation1.php" title="Maklumat Pengangkutan">
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
                    <div class="tab-pane active" role="tabpanel" id="step6">
                        <div class="step6">
                            <center><h2 class="StepTitle"> MAKLUMAT PENGANGKUTAN </h2></center>
                              <br/>
                                <div class="form group">
                                <div align="center">
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <label for="exampleInputFile">Gambar</label><br>
                                    <?php echo $_SESSION['pic']; ?>
                                 <input name="trans_pic" type="file" id="exampleInputFile">
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
                                <label>Nombor Pendaftaran</label>
                                <input name="reg_nom" type="text" class="form-control" placeholder="Nombor Pendaftaran" value="<?php echo $_SESSION['registno']; ?>">   
                                <input name="reg_nom1" type="hidden" value="<?php echo $_SESSION['registno']; ?>">   
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Status Kenderaan</label>
                                <select id="pilih" name="vehic_status" class="form-control">
                                  <option value="<?php echo $_SESSION['status']; ?>"><?php echo $_SESSION['status']; ?></option>
                                  <option value="Rent">Rent</option>
                                  <option value="Own">Own</option>
                                  <option value="Lost">Lost</option>> 
                                  <option value="Others">Others</option>
                                  <option value="Unknown">Unknown</option>  
                                </select>
                            </div>      
                          </div>
                         </div>
                         <br/>
                          <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Jenis</label>
                                <select id="pilih" name="trans_type" class="form-control">
                                  <option value="<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['type']; ?></option>
                                  <?php include 'include/type_vehicle.php'; ?>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Maker</label>
                                <select id="pilih" name="trans_maker" class="form-control">
                                  <option value="<?php echo $_SESSION['maker']; ?>"><?php echo $_SESSION['maker']; ?></option>
                                  <?php include 'include/maker.php'; ?> 
                                </select>
                            </div>      
                          </div>
                         </div>
                          <br/>
                           <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Model</label>
                                <input name="trans_model" type="text" class="form-control" placeholder="Model" value="<?php echo $_SESSION['model']; ?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Warna</label>
                                <input name="trans_color" type="text" class="form-control" placeholder="Warna" value="<?php echo $_SESSION['color']; ?>">
                            </div>      
                          </div>
                         </div>
                          <br/>
                          <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tahun Kenderaan</label>
                                <input name="vehic_year" type="text" class="form-control" placeholder="Tahun Kenderaan" value="<?php echo $_SESSION['year']; ?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tarikh Daftar Kenderaan</label>
                                <fieldset>
                                    <div class="control-group">
                                    <div class="controls">
                                    <div class="xdisplay_inputx form-group has-feedback">
                                    <input name="reg_date" type="text" class="form-control has-feedback-left" id="datepicker1" placeholder="Tarikh Daftar Kenderaan" aria-describedby="inputSuccess2Status" value="<?php echo $_SESSION['registdate']; ?>">
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
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label>Nota</label>
                                <textarea name="notas" class="form-control" rows="3" placeholder="Nota"><?php echo $_SESSION['note']; ?></textarea>
                            </div>         
                          </div>
                         </div><br/>
                        <ul class="list-inline pull-right">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                          <input type="hidden" name="id" value="<?php if(isset($_SESSION['id'])) {echo $_SESSION['id'];} ?>">
                          <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                          <li><button type="submit" class="btn btn-primary" name="edit_transportation">Kemaskini</button></li>
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