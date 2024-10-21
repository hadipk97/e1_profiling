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

                    <li role="presentation" class="disabled">
                        <a title="Maklumat Nombor Telefon">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-phone"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="active">
                        <a href="house1.php" title="Maklumat Rumah">
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
                    <div class="tab-pane active" role="tabpanel" id="complete">
                        <div class="step11">
                             <center><h2 class="StepTitle">MAKLUMAT RUMAH</h2></center>
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
                              <label>Jenis Rumah</label>
                                <select id="pilih" name="hse_type" class="form-control">
                                  <option value="<?php echo $_SESSION['hse_type']; ?>"><?php echo $_SESSION['hse_type']; ?></option>
                                  <option>Rumah Teres</option>
                                  <option>Rumah Pangsa</option>
                                  <option>Pangsapuri</option>
                                  <option>Bunglow</option>
                                  <option>Rumah Kedai</option>
                                  <option>Rumah Papan</option>
                                  <option>Lain-lain</option>
                                  <!--<option value="Others">Others</option>
                                  <option value="Unknown">Unknown</option>-->
                                  <option value="Tidak Di Ketahui">Tidak Di Ketahui</option>
                                </select>     
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <label>Status</label>
                                <select id="pilih" name="hse_stat" class="form-control">
                                  <option value="<?php echo $_SESSION['hse_stat']; ?>"><?php echo $_SESSION['hse_stat']; ?></option>
                                  <option value="Sewa">Sewa</option>
                                  <option value="Sendiri">Sendiri</option>
                                  <!--<option value="Others">Others</option>
                                  <option value="Unknown">Unknown</option>-->
                                  <option value="Tidak Di Ketahui">Tidak Di Ketahui</option>
                                </select>  
                            </div>      
                          </div>
                        </div><br/>
                        <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <!--<label>Sewa Bulanan/Sendiri</label>-->
                              <label>Jumlah Bayaran Bulanan</label>
                              <input type="text" name="month_rent" class="form-control" placeholder="Sewa Bulanan/Sendiri" value="<?php echo $_SESSION['month_rent']; ?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <!--<label>Sewa/Sendiri Semenjak</label>-->
                                <label>Tarikh Menetap</label>
                              <input type="date" name="rent_since" class="form-control" placeholder="Sewa/Sendiri Sejak" value="<?php echo $_SESSION['rent_since']; ?>"> 
                            </div>      
                          </div>
                        </div><br/>
                        <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Warna</label>
                                <select id="pilih" name="hse_col" class="form-control">
                                  <option value="<?php echo $_SESSION['hse_col']; ?>"><?php echo $_SESSION['hse_col']; ?></option>
                                  <option value="Putih">Putih</option>
                                  <option value="Biru">Biru</option>
                                  <option value="Kuning">Kuning</option>
                                  <option value="Merah">Merah</option>
                                  <option value="Jingga">Jingga</option>
                                  <option value="Hijau">Hijau</option>
                                  <option value="Sian">Sian</option>
                                  <option value="Ungu">Ungu</option>
                                  <!--<option value="Others">Others</option>
                                  <option value="Unknown">Unknown</option>-->
                                  <option value="Tidak Di Ketahui">Tidak Di Ketahui</option>
                                </select>   
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Pemilik</label>
                                <input name="owner" type="text" class="form-control" placeholder="Pemilik" value="<?php echo $_SESSION['owner']; ?>">
                            </div>      
                          </div>
                        </div><br/>
                        <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>ID Pendaftaran/No Rujukan</label>
                                <input name="id_regis" type="text" class="form-control" placeholder="Identiti Pendaftaran" value="<?php echo $_SESSION['id_regis']; ?>">
                                <input name="id_regis1" type="hidden" value="<?php echo $_SESSION['id_regis']; ?>">   
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nota</label>
                                <textarea name="notas" class="form-control" rows="3" placeholder="Nota"><?php echo $_SESSION['notas']; ?></textarea>
                            </div>      
                          </div>
                         </div><br/>
                        <ul class="list-inline pull-right">
                            <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) { echo $_SESSION['id_profil'];} ?>">
                            <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) { echo $_SESSION['id_fir'];} ?>">
                            <input type="hidden" name="id" value="<?php if(isset($_SESSION['id'])) { echo $_SESSION['id'];} ?>">
                            <button type="submit" class="btn btn-primary next-step" name="edit_house">Kemaskini</button>
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