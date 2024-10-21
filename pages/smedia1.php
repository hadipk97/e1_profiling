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
                    <li role="presentation" class="active">
                        <a href="smedia1.php" title="Maklumat Media Sosial">
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
                    <div class="tab-pane active" role="tabpanel" id="step9">
                        <div class="step9">
                            <center><h2 class="StepTitle"> MAKLUMAT MEDIA SOSIAL </h2></center>
                              <br/>
                      <div class="form group">
                          <div align="center">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <label for="exampleInputFile">Lampiran</label><br>
                                    <?php echo $_SESSION['attch_']; ?>
                              <input name="attch_" type="file" id="exampleInputFile">
                            </div>
                          </div>
                      </div><br/><br/><br/><br/>
                          <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Jenis Media Sosial</label>
                                <select id="pilih" name="sm_type" class="form-control">
                                  <option value="<?php echo $_SESSION['sm_type']; ?>"><?php echo $_SESSION['sm_type']; ?></option>
                                  <option value="Facebook">Facebook</option>
                                  <option value="Twitter">Twitter</option>
                                  <option value="Instagram">Instagram</option>
                                  <option value="Linkedin">Linkedin</option>
                                  <option value="Tumblr">Tumblr</option>
                                  <option value="Other">Other</option>
                                </select> 
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>ID Media Sosial <font color="red">*</font></label>
                                <input name="sm_id" type="text" class="form-control" placeholder="ID Sosial Media" value="<?php echo $_SESSION['sm_id']; ?>" required>   
                            </div>     
                          </div>
                         </div>
                         <br/>
                          <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>URL</label>
                                <input name="sm_url" type="text" class="form-control" placeholder="www.facebook.com/?18961354918" value="<?php echo $_SESSION['sm_url']; ?>"> 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Pengguna</label>
                                <input name="sm_name" type="text" class="form-control" placeholder="Nama Pengguna" value="<?php echo $_SESSION['sm_name']; ?>">  
                            </div>      
                          </div>
                         </div>
                          <br/>
                           <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Penuh</label>
                                <input name="sm_fname" type="text" class="form-control" placeholder="Nama Penuh" value="<?php echo $_SESSION['sm_fname']; ?>">
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nota</label>
                                <textarea name="notas" class="form-control" rows="3" placeholder="Nota"><?php echo $_SESSION['notas']; ?></textarea>
                            </div>
                          </div>
                         </div>
                          <br/>
                          <br/>
                        <ul class="list-inline pull-right">
                            <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                            <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                            <input type="hidden" name="id" value="<?php if(isset($_SESSION['id'])) {echo $_SESSION['id'];} ?>">
                            <button type="submit" class="btn btn-primary next-step" name="edit_smedia">Kemaskini</button>
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