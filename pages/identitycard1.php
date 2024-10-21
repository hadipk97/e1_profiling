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
                    <li role="presentation" class="active">
                        <a href="identity1.php" title="Maklumat Kad Pengenalan">
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
                    <div class="tab-pane active" role="tabpanel" id="step3">
                        <div class="step3">
                             <center><h2 class="StepTitle">MAKLUMAT KAD PENGENALAN</h2></center>
                      <br/>
                      <div class="form group">
                          <div align="center">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                              <label for="exampleInputFile">Gambar I/C</label><br><?php if(isset($_SESSION['idpic'])) { echo $_SESSION['idpic']; } ?>
                              <input name="id_pic" type="file" id="exampleInputFile">
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                              <label for="exampleInputFile">Gambar Microchip</label><br><?php if(isset($_SESSION['chippic'])) { echo $_SESSION['chippic']; } ?>
                              <input name="ic_chip" type="file" id="exampleInputFile">
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                              <label for="exampleInputFile">Lampiran</label><br><?php if(isset($_SESSION['attch'])) { echo $_SESSION['attch']; } ?>
                              <input name="attch_" type="file" id="exampleInputFile">
                            </div>
                          </div>
                      </div><br/><br/><br/><br/>
                      <div class="form group">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <label>Nombor I/C *Tanpa '-'</label>
                                <input type="text" name="ic_nom" class="form-control" maxlength="12" placeholder="Nombor I/C" value="<?php if(isset($_SESSION['nom'])) { echo $_SESSION['nom']; } ?>">     
                                <input type="hidden" name="ic_nom1" value="<?php if(isset($_SESSION['nom'])) { echo $_SESSION['nom']; } ?>">     
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <label>Status I/C</label>
                              <select id="pilih" name="ic_status" class="form-control">
                                <option value="<?php if(isset($_SESSION['status'])) { echo $_SESSION['status']; } ?>"><?php if(isset($_SESSION['status'])) { echo $_SESSION['status']; } ?></option>
                                <?php include 'include/status.php'; ?>  
                              </select>   
                            </div>      
                          </div>
                        </div><br/>
                        <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <label>Rujukan Keselamatan</label>
                              <input name="sec_ref" type="text" class="form-control" placeholder="Rujukan Keselamatan" value="<?php if(isset($_SESSION['security'])) { echo $_SESSION['security']; } ?>"> 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Jenis Kad</label>
                              <select id="pilih" name="card_type" class="form-control">
                                <option value="<?php if(isset($_SESSION['cardtype'])) { echo $_SESSION['cardtype']; } ?>"><?php if(isset($_SESSION['cardtype'])) { echo $_SESSION['cardtype']; } ?></option>
                                <?php include 'include/c_type.php'; ?>
                              </select>
                            </div>      
                          </div>
                        </div><br/>
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
                        </div><br/>
                        <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Akhir</label>
                                <input name="l_name" type="text" class="form-control" placeholder="Nama Akhir" value="<?php if(isset($_SESSION['lastname'])) { echo $_SESSION['lastname']; } ?>">   
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Alamat 1</label>
                                <input name="add_1" type="text" class="form-control" placeholder="Alamat 1" value="<?php if(isset($_SESSION['add1'])) { echo $_SESSION['add1']; } ?>">
                            </div>      
                          </div>
                        </div><br/>
                        <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Alamat 2</label>
                                <input name="add_2" type="text" class="form-control" placeholder="Alamat 2" value="<?php if(isset($_SESSION['add2'])) { echo $_SESSION['add2']; } ?>">  
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Alamat 3</label>
                                <input name="add_3" type="text" class="form-control" placeholder="Alamat 3" value="<?php if(isset($_SESSION['add3'])) { echo $_SESSION['add3']; } ?>">
                            </div>      
                          </div>
                        </div><br/>
                        <div class="form group">
                                    <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Poskod</label>
                                <input name="pos_code" type="text" class="form-control" placeholder="Poskod" value="<?php if(isset($_SESSION['poscode'])) { echo $_SESSION['poscode']; } ?>">   
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Bandar / Wilayah</label>
                                <input name="city_" type="text" class="form-control" placeholder="Bandar / Wilayah" value="<?php if(isset($_SESSION['city'])) { echo $_SESSION['city']; } ?>">
                            </div>      
                          </div>
                        </div><br/>
                        <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Negeri</label>
                                <select id="pilih" name="state_" class="form-control">
                                  <option value="<?php if(isset($_SESSION['state'])) { echo $_SESSION['state']; } ?>"><?php if(isset($_SESSION['state'])) { echo $_SESSION['state']; } ?></option>
                                  <?php include 'include/negeri.php'; ?>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Negara</label>
                                <select id="pilih" name="country_" class="form-control">
                                  <option value="<?php if(isset($_SESSION['country'])) { echo $_SESSION['country']; } ?>"><?php if(isset($_SESSION['country'])) { echo $_SESSION['country']; } ?></option>
                                  <?php include 'include/negara.php'; ?>
                                </select>
                            </div>      
                          </div>
                        </div><br/>
                        <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Rekod Hilang dan Jumpa</label>
                                <textarea name="lafr_" class="form-control" rows="3" placeholder="Rekod Hilang dan Jumpa"><?php if(isset($_SESSION['lafr'])) { echo $_SESSION['lafr']; } ?></textarea>   
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nota</label>
                                <textarea name="notas" class="form-control" rows="3" placeholder="Nota"><?php if(isset($_SESSION['note'])) { echo $_SESSION['note']; } ?></textarea>
                            </div>      
                          </div>
                         </div><br/>
                        <ul class="list-inline pull-right">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                          <input type="hidden" name="id" value="<?php if(isset($_SESSION['id'])) {echo $_SESSION['id'];} ?>">
                          <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                          <li><button type="submit" class="btn btn-primary" name="edit_ic">Kemaskini</button></li>
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