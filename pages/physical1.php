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

                    <li role="presentation" class="active">
                        <a href="physical1.php" title="Maklumat Fizikal">
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
                        <a title="Maklumat Social Media">
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
                  <div class="tab-pane active" role="tabpane1" id="step2">
                    <div class="step2">
                      <center><h2 class="StepTitle">MAKLUMAT FIZIKAL</h2></center>
                    <div class="form group">
                      <div align="center">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label">Gambar Penuh</label><br><?php if(isset($_SESSION['fullpic'])) { echo $_SESSION['fullpic']; } ?>
                        <input type="file" name="pic_full">
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>Lampiran</label><br><?php if(isset($_SESSION['attch'])) { echo $_SESSION['attch']; } ?>
                        <input name="attch_" type="file" id="exampleInputFile">
                      </div>
                      </div>
                     </div>
                    <div class="form group">
                      <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tinggi (cm)</label>
                          <input name="height_" type="text" class="form-control" placeholder="Tinggi" value="<?php if(isset($_SESSION['height'])) { echo $_SESSION['height']; } ?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Berat (kg)</label>
                                <input name="weight_" type="text" class="form-control" placeholder="Berat" value="<?php if(isset($_SESSION['weight'])) { echo $_SESSION['weight']; } ?>">
                            </div>      
                          </div>
              			</div>
                        <br/>
                           <div class="form-group">
              			 <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label for="Eye Color">Warna Mata</label>
                                <select id="pilih" name="eye_col" class="form-control">
                                <option value="<?php if(isset($_SESSION['eyecolor'])) { echo $_SESSION['eyecolor']; } ?>"><?php if(isset($_SESSION['eyecolor'])) { echo $_SESSION['eyecolor']; } ?></option>
                                <?php include 'include/p_color.php'; ?>
                            </select>
                            </div>          
                          
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label for="Hair Color">Warna Rambut</label>
                                <select id="pilih" name="hair_col" class="form-control">
                                <option value="<?php if(isset($_SESSION['haircolor'])) { echo $_SESSION['haircolor']; } ?>"><?php if(isset($_SESSION['haircolor'])) { echo $_SESSION['haircolor']; } ?></option>
                                <?php include 'include/p_color.php'; ?>
                            </select>
                            </div> 
                           </div>
              			</div>
                         <br/>
                          <div class="form group">
              			<div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Parut atau/dan Tanda Lahir</label>
                                <input name="scar_bm" type="text" class="form-control" placeholder="Parut atau/dan Tanda Lahir" value="<?php if(isset($_SESSION['scar'])) { echo $_SESSION['scar']; } ?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label for="Wearing Glasses">Memakai Cermin Mata</label>
                                <p>
                            Ya:
                            <input type="radio" class="flat" name="glasses" value="Y" <?php if($_SESSION['glasses']=="Y") { echo "checked"; } ?> /> 
                            Tidak:
                            <input type="radio" class="flat" name="glasses" value="N" <?php if($_SESSION['glasses']=="N") { echo "checked"; } ?> />
                            </p>
                            </div>      
                          </div>
              			</div>
                          <br/>
                          <div class="form group">
              			<div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Susuk Badan</label>
                                <select id="pilih" name="build_" class="form-control">
                                <option value="<?php if(isset($_SESSION['build'])) { echo $_SESSION['build']; } ?>"><?php if(isset($_SESSION['build'])) { echo $_SESSION['build']; } ?></option>
                                <option value="Small (Thin)">Small (Thin)</option>
                                <option value="Medium (Average)">Medium (Average)</option>
                                <option value="Larger (Storky)">Larger (Storky)</option>
                                <option value="Others">Others</option>
                                <option value="Unknown">Unknown</option>
                            </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Panjang Rambut</label>
                                <select id="pilih" name="hair_length" class="form-control">
                                <option value="<?php if(isset($_SESSION['hairlength'])) { echo $_SESSION['hairlength']; } ?>"><?php if(isset($_SESSION['hairlength'])) { echo $_SESSION['hairlength']; } ?></option>
                                <option value="Bald and Shaved">Bald and Shaved</option>
                                <option value="Shorter than Collar Length">Shorter than Collar Length</option>
                                <option value="Collar Length">Collar Length</option>
                                <option value="Shoulder Length">Shoulder Length</option>
                                <option value="Longer than Shoulder Length">Longer than Shoulder Length</option>
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
                                <label>Tatu</label>
                                <select id="pilih" name="tattoo" class="form-control">
                                <option value="<?php if(isset($_SESSION['tattoos'])) { echo $_SESSION['tattoos']; } ?>"><?php if(isset($_SESSION['tattoos'])) { echo $_SESSION['tattoos']; } ?></option>
                                <option value="None">None</option>
                                <option value="Face, head, or neck">Face, head, or neck</option>
                                <option value="Arms or Hands">Arms or Hands</option>
                                <option value="Torso">Torso</option>
                                <option value="Buttocks">Buttocks</option>
                                <option value="Feet or legs">Feet or legs</option>
                                <option value="Others">Others</option>
                                <option value="Unknown">Unknown</option>
                            </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Jenis Darah</label>
                                <select id="pilih" name="blood_" class="form-control">
                                <option value="<?php if(isset($_SESSION['blood'])) { echo $_SESSION['blood']; } ?>"><?php if(isset($_SESSION['blood'])) { echo $_SESSION['blood']; } ?></option>
                                <?php include 'include/blood.php'; ?>
                            </select>
                            </div>           
                          </div>
                        </div>
                          <br/>
                          <div class="form group">
                          <div class="row"> 
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label>Nota</label>
                                <textarea name="notas" class="form-control" rows="3" placeholder="Nota" value="<?php if(isset($_SESSION['note'])) { echo $_SESSION['note']; } ?>"></textarea>
                            </div>          
                          </div>
                      </div><br/>
                        <ul class="list-inline pull-right">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                          <input type="hidden" name="id" value="<?php if(isset($_SESSION['id'])) {echo $_SESSION['id'];} ?>">
                          <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                          <li><button type="submit" class="btn btn-primary" name="edit_physical">Kemaskini</button></li>
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