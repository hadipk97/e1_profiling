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
                        <a  title="Maklumat Fizikal">
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
                    <li role="presentation" class="active">
                        <a href="passsport1" title="Maklumat Pasport">
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
                    <div class="tab-pane active" role="tabpanel" id="step4">
                        <div class="step4">
                            <center><h2 class="StepTitle"> MAKLUMAT PASPORT</h2></center>
                      <br/>
                            <div class="form group">
                              <div align="center">
                                 <div class="col-md-3 col-sm-3 col-xs-12">
                                 <label for="exampleInputFile">Gambar Pasport</label><br><?php echo $_SESSION['passpic']; ?>
                                 <input name="p_pic" type="file" id="exampleInputFile">
                                 </div>
                                 <div class="col-md-3 col-sm-3 col-xs-12">
                                 <label for="exampleInputFile">Gambar Microchip</label><br><?php echo $_SESSION['chippic']; ?>
                                 <input name="chip_pic" type="file" id="exampleInputFile">
                                 </div>
                                 <div class="col-md-3 col-sm-3 col-xs-12">
                                 <label for="exampleInputFile">Gambar Tandatangan</label><br><?php echo $_SESSION['signpic']; ?>
                                 <input name="sign_pic" type="file" id="exampleInputFile">
                                 </div>
                                 <div class="col-md-3 col-sm-3 col-xs-12">
                                 <label for="exampleInputFile">Lampiran</label><br><?php echo $_SESSION['attch']; ?>
                                 <input name="attch_" type="file" id="exampleInputFile">
                                 </div>
                                </div>
                          </div><br/><br/><br/><br/>
                          <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <label>Status Pasport</label>
                                <select id="pilih" name="p_status" class="form-control">
                                  <option value="<?php echo $_SESSION['status']; ?>"><?php echo $_SESSION['status']; ?></option>
                                  <?php include 'include/status.php'; ?>   
                                </select>    
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nombor Pasport (Baru)</label>
                                <input name="pnom_new" type="text" class="form-control" placeholder="Nombor Pasport (Baru)" value="<?php if(isset($_SESSION['nomnew'])) { echo $_SESSION['nomnew']; } ?>">
                                <input name="pnom_new1" type="hidden" value="<?php if(isset($_SESSION['nomnew'])) { echo $_SESSION['nomnew']; } ?>">
                            </div>      
                          </div>
                        </div>
                        <br/>
                          <div class="form group">
                         <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nombor Pasport (Lama)</label>
                                <input name="pnom_old" type="text" class="form-control" placeholder="Nombor Pasport (Lama)" value="<?php if(isset($_SESSION['nomold'])) { echo $_SESSION['nomold']; } ?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nombor MRZ</label>
                                <input name="mrz_no" type="text" class="form-control" placeholder="Nombor MRZ" value="<?php if(isset($_SESSION['mrz'])) { echo $_SESSION['mrz']; } ?>">
                            </div>      
                          </div>
                         </div>
                          <br/>
                           <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <label>Jenis Pasport/Dokumen</label>
                                 <select id="pilih" name="p_type" class="form-control">
                                   <option value="<?php if(isset($_SESSION['type'])) { echo $_SESSION['type']; } ?>"><?php if(isset($_SESSION['type'])) { echo $_SESSION['type']; } ?></option>
                                   <?php include 'include/pss_type.php'; ?>
                                 </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Pertama</label>
                                <input name="f_name" type="text" class="form-control" placeholder="Nama Pertama" value="<?php if(isset($_SESSION['firstname'])) { echo $_SESSION['firstname']; } ?>">
                            </div>      
                          </div>
                        </div>
                          <br/>
                          <div class="form group">
                         <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Tengah</label>
                                <input name="m_name" type="text" class="form-control" placeholder="Nama Tengah" value="<?php if(isset($_SESSION['middlename'])) { echo $_SESSION['middlename']; } ?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Akhir</label>
                                <input name="l_name" type="text" class="form-control" placeholder="Nama Akhir" value="<?php if(isset($_SESSION['lastname'])) { echo $_SESSION['lastname']; } ?>">
                            </div>      
                          </div>
                        </div>
                          <br/>
                          <div class="form group">
                         <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Kod Negara</label>
                                <input name="coun_code" type="text" class="form-control" placeholder="Kod Negara" value="<?php if(isset($_SESSION['countrycode'])) { echo $_SESSION['countrycode']; } ?>">
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
                                <label>Warganegara</label>
                                 <select id="pilih" name="national" class="form-control">
                                   <option value="<?php if(isset($_SESSION['nationality'])) { echo $_SESSION['nationality']; } ?>"><?php if(isset($_SESSION['nationality'])) { echo $_SESSION['nationality']; } ?></option>
                                   <?php include 'include/negara.php'; ?>
                                 </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tarikh Daftar (Pasport)</label>
                                <fieldset>
                                    <div class="control-group">
                                    <div class="controls">
                                    <div class="xdisplay_inputx form-group has-feedback">
                                    <input name="d_issue" type="text" class="form-control has-feedback-left" id="datepicker1" placeholder="Date of Issue" aria-describedby="inputSuccess2Status" value="<?php if(isset($_SESSION['dateissue'])) { echo $_SESSION['dateissue']; } ?>">
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
                                <label>Tarikh Luput (Pasport)</label>
                                <fieldset>
                                    <div class="control-group">
                                    <div class="controls">
                                    <div class="xdisplay_inputx form-group has-feedback">
                                    <input name="d_exp" type="text" class="form-control has-feedback-left" id="datepicker2" placeholder="Tarikh Luput" aria-describedby="inputSuccess2Status" value="<?php if(isset($_SESSION['dateexpired'])) { echo $_SESSION['dateexpired']; } ?>">
                                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                    </div>
                                    </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tempat/ Pejabat Penghasilan</label>
                                <input name="issue_plce" type="text" class="form-control" placeholder="Issuing Place" value="<?php if(isset($_SESSION['issueplace'])) { echo $_SESSION['issueplace']; } ?>">
                            </div>           
                          </div>
                         </div>
                          <br/>
                          <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Negara Penghasilan</label>
                                  <select id="pilih" name="issue_coun" class="form-control">
                                    <option value="<?php if(isset($_SESSION['issuecountry'])) { echo $_SESSION['issuecountry']; } ?>"><?php if(isset($_SESSION['issuecountry'])) { echo $_SESSION['issuecountry']; } ?></option>
                                    <?php include 'include/negara.php'; ?>
                                  </select>
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tinggi (cm)</label>
                                <input name="height_" type="text" class="form-control" placeholder="Tinggi" value="<?php if(isset($_SESSION['height'])) { echo $_SESSION['height']; } ?>">
                            </div>         
                          </div>
                        </div><br/>
                        <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Berat (kg)</label>
                                <input name="weight_" type="text" class="form-control" placeholder="Berat" value="<?php if(isset($_SESSION['weight'])) { echo $_SESSION['weight']; } ?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Lost And Found Record</label>
                                <textarea name="lafr_" class="form-control" placeholder="Lost And Found Record"><?php if(isset($_SESSION['lafr'])) { echo $_SESSION['lafr']; } ?></textarea>
                            </div>         
                          </div>
                        </div><br/>
                        <div class="form group">
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label>Nota</label>
                                <textarea name="notas" class="form-control" rows="3" placeholder="Nota"><?php if(isset($_SESSION['note'])) { echo $_SESSION['note']; } ?></textarea>
                            </div>         
                          </div>
                        </div><br/>
                        <ul class="list-inline pull-right">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                          <input type="hidden" name="id" value="<?php if(isset($_SESSION['id'])) {echo $_SESSION['id'];} ?>">
                          <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                          <li><button type="submit" class="btn btn-primary" name="edit_passport">Kemaskini</button></li>
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