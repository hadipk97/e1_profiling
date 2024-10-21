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

                    <li role="presentation" class="active">
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
                    <li role="presentation">
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

            <form enctype="multipart/form-data" method="post" action="edit.php">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="step1">
                            <center><h2 class="StepTitle"> MAKLUMAT PROFIL </h2></center>
                      <br/>
                                <div class="form group">
                                <div align="center">
                                  <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label class="control-label">Gambar Sisi Kiri</label><br>
                                    <?php echo $_SESSION['picleft']; ?>
                                    <input type="file" name="pic_left">
                                  </div>
                                  <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label class="control-label">Gambar Hadapan</label><br>
                                    <?php if(isset($_SESSION['piccenter'])) { echo $_SESSION['piccenter']; } ?>
                                    <input type="file" name="pic_cntr">
                                  </div>
                                  <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label class="control-label">Gambar Sisi Kanan</label><br>
                                    <?php if(isset($_SESSION['picright'])) { echo $_SESSION['picright']; } ?>
                                    <input type="file" name="pic_right">
                                  </div>
                                </div>
                          </div><br/><br/><br/><br/>
                          <div class="form group">
                                    <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>ID Profil</label>
                                <input type="text" class="form-control" disabled value="<?php if(isset($_SESSION['id_profil'])) { echo $_SESSION['id_profil']; } ?>">
                                <input type="hidden" name="id_profil" class="form-control" value="<?php if(isset($_SESSION['id_profil'])) { echo $_SESSION['id_profil']; } ?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Status Profil</label>
                                <select id="pilih" name="status" class="form-control">
                                    <option value="<?php if(isset($_SESSION['status'])) { echo $_SESSION['status']; } ?>"><?php if(isset($_SESSION['status'])) { echo $_SESSION['status']; } ?></option>
                                  <?php include 'include/p_status.php'; ?>
                                </select>
                            </div>      
                          </div>
                         </div>
                         <br/>
                          <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Hubungan Jenayah/Sindiket</label>
                                <select id="pilih" name="tree" class="form-control">
                                    <option value="<?php if(isset($_SESSION['crimetree'])) { echo $_SESSION['crimetree']; } ?>"><?php if(isset($_SESSION['crimetree'])) { echo $_SESSION['crimetree']; } ?></option>
                                  <?php include 'include/tree.php'; ?>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Hubungan Keluarga</label>
                                <select id="pilih" name="relay" class="form-control">
                                    <option value="<?php if(isset($_SESSION['relationship'])) { echo $_SESSION['relationship']; } ?>"><?php if(isset($_SESSION['relationship'])) { echo $_SESSION['relationship']; } ?></option>
                                  <?php include 'include/hubungan.php'; ?>
                                </select>
                            </div>      
                          </div>
                         </div>
                          <br/>
                           <div class="form group">
                                    <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Pertama</label>
                                <input name="f_name" type="text" class="form-control" placeholder="Nama Pertama" value="<?php if(isset($_SESSION['firstname'])) { echo $_SESSION['firstname']; } ?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Tengah</label>
                                <input name="m_name" type="text" class="form-control" placeholder="Nama Tengah" value="<?php if(isset($_SESSION['middlename'])) { echo $_SESSION['middlename']; } ?>">
                            </div>      
                          </div>
                         </div>
                          <br/>
                          <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Akhir</label>
                                <input name="l_name" type="text" class="form-control" placeholder="Nama Akhir" value="<?php if(isset($_SESSION['lastname'])) { echo $_SESSION['lastname']; } ?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Samaran</label>
                                <input name="n_name" type="text" class="form-control" placeholder="Nama Samaran" value="<?php if(isset($_SESSION['nickname'])) { echo $_SESSION['nickname']; } ?>">
                            </div>      
                          </div>
                         </div>
                          <br/>
                          <div class="form group">
                                    <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Bahasa Percakapan</label>
                                <input name="lngge" type="text" class="form-control" placeholder="Bahasa Percakapan" value="<?php if(isset($_SESSION['language'])) { echo $_SESSION['language']; } ?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Jantina</label>
                                <select id="pilih" name="gender_" class="form-control">
                                    <option value="<?php if(isset($_SESSION['gender'])) { echo $_SESSION['gender']; } ?>"><?php if(isset($_SESSION['gender'])) { echo $_SESSION['gender']; } ?></option>
                                  <?php include 'include/gender.php'; ?>
                                </select>
                            </div>      
                          </div>
                        </div><br/>
                          <div class="form group">
                            <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label for="Date of birth">Tarikh Lahir</label>
                                <fieldset>
                                    <div class="control-group">
                                    <div class="controls">
                                    <div class="xdisplay_inputx form-group has-feedback">
                                    <input name="dob" type="text" class="form-control has-feedback-left" id="datepicker" placeholder="Tarikh Lahir" aria-describedby="inputSuccess2Status" value="<?php if(isset($_SESSION['birth'])) { echo $_SESSION['birth']; } ?>">
                                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                    </div>
                                    </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <label>Umur</label>
                                <input name="age_" type="text" class="form-control" placeholder="Umur" value="<?php if(isset($_SESSION['age'])) { echo $_SESSION['age']; } ?>">
                            </div>      
                          </div>
                         </div>
                          <br/>
                          <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Bangsa</label>
                                <select id="pilih" name="race_" class="form-control">
                                  <option value="<?php if(isset($_SESSION['race'])) { echo $_SESSION['race']; } ?>"><?php if(isset($_SESSION['race'])) { echo $_SESSION['race']; } ?></option>
                                  <option value="Malay">Malay</option>
                                  <option value="Chinese">Chinese</option>
                                  <option value="Indian">Indian</option>
                                  <option value="Bumiputera">Bumiputera</option>
                                  <option value="Others">Others</option>
                                  <option value="Unknown">Unknown</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Etnik</label>
                                <select id="pilih" name="ethnc" class="form-control">
                                    <option value="<?php if(isset($_SESSION['ethnic'])) { echo $_SESSION['ethnic']; } ?>"><?php if(isset($_SESSION['ethnic'])) { echo $_SESSION['ethnic']; } ?></option>
                                  <?php include 'include/ethnic.php'; ?>
                                </select>
                            </div>           
                          </div>
                          </div>
                          <br/>

                           <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Negara Kelahiran</label>
                                <select id="pilih" name="cob" class="form-control">
                                    <option value="<?php if(isset($_SESSION['country'])) { echo $_SESSION['country']; } ?>"><?php if(isset($_SESSION['country'])) { echo $_SESSION['country']; } ?></option>
                                  <?php include 'include/negara.php'; ?>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Status Perkahwinan</label>
                                <select id="pilih" name="marital_" class="form-control">
                                    <option value="<?php if(isset($_SESSION['marital'])) { echo $_SESSION['marital']; } ?>"><?php if(isset($_SESSION['marital'])) { echo $_SESSION['marital']; } ?></option>
                                  <option value="Married">Married</option>
                                  <option value="Single">Single</option>
                                  <option value="Divorced">Divorced</option>
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
                                <label>Warganegara</label>
                                <select id="pilih" name="national" class="form-control">
                                    <option value="<?php if(isset($_SESSION['nationality'])) { echo $_SESSION['nationality']; } ?>"><?php if(isset($_SESSION['nationality'])) { echo $_SESSION['nationality']; } ?></option>
                                  <?php include 'include/negara.php'; ?>
                                </select>
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Catatan</label>
                                <textarea name="notas" class="form-control" rows="3" placeholder="Catatan"><?php if(isset($_SESSION['notes'])) { echo $_SESSION['notes']; } ?></textarea>
                            </div>         
                          </div>
                          </div><br/>
                        <ul class="list-inline pull-right">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                          <input type="hidden" name="id" value="<?php if(isset($_SESSION['id'])) {echo $_SESSION['id'];} ?>">
                          <li><button type="submit" class="btn btn-primary" name="edit_profile">Kemaskini</button></li>
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

    <!-- jQuery -->
    <?php include 'include/js.php'; ?>
  </body>
</html>