<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php include 'include/bar.php'; ?>
<?php include ('include/dbconn.php');
    
$sql = "SELECT COUNT(*) FROM [jim].[dbo].[profile]";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
}
while( $row64 = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
$id = $row64[0];
$id++;
?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            
              <div class="title_left">
                <h3>Daftar Profil #<a href="/profiling/pages/mapk_register.php?fir=<?=$_SESSION['id_fir']?>#tab_content2" ><?=$_SESSION['id_fir']?></a></h3>
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
                        <a href="#" title="Maklumat Profil">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#" title="Maklumat Fizikal">
                            <span class="round-tab">
                                <i class="fa fa-male"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#" title="Maklumat Kad Pengenalan">
                            <span class="round-tab">
							      <i class="glyphicon glyphicon-pencil"></i>
							</span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#" title="Maklumat Pasport">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#" title="Maklumat Lesen Memandu">
                            <span class="round-tab">
                                <i class="fa fa-folder"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#" title="Maklumat Pengangkutan">
                            <span class="round-tab">
                                <i class="fa fa-car"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#" title="Maklumat Bank">
                            <span class="round-tab">
                                <i class="fa fa-bank"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#" title="Maklumat Syarikat">
                            <span class="round-tab">
                                <i class="fa fa-building"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#" title="Maklumat Media Sosial">
                            <span class="round-tab">
                                <i class="fa fa-ge"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#" title="Maklumat Nombor Telefon">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-phone"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#" title="Maklumat Rumah">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-home"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <form enctype="multipart/form-data" method="post" action="reg.php">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="step1">
                            <center><h2 class="StepTitle"> MAKLUMAT PROFIL </h2></center>
                      <br/>
                                <div class="form group">
                                 <div align="center">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label class="control-label">Gambar Sisi Kiri</label>
                                    <input type="file" name="pic_left">
                                 </div>
                                 <div class="col-md-4 col-sm-4 col-xs-12">
                                 <label class="control-label">Gambar Hadapan</label>
                                 <input type="file" name="pic_cntr">
                                 </div>
                                 <div class="col-md-4 col-sm-4 col-xs-12">
                                 <label class="control-label">Gambar Sisi Kanan</label>
                                 <input type="file" name="pic_right">
                                 </div>
                                </div>
                          </div><br/><br/><br/><br/>
                          <div class="form group">
                                    <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>ID Profil</label>
                                <input type="text" class="form-control" disabled value="PRO/<?php echo $datemy; ?>-<?php echo $id; ?>">
                                <input type="hidden" name="id_profil" class="form-control" value="PRO/<?php echo $datemy; ?>-<?php echo $id; ?>">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Status Profil</label>
                                <select id="pilih" name="status" class="form-control">
                                    <option value="">Sila Pilih</option>
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
                                    <option value="">Sila Pilih</option>
                                  <?php include 'include/tree.php'; ?>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Hubungan Keluarga</label>
                                <select id="pilih" name="relay" class="form-control">
                                    <option value="">Sila Pilih</option>
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
                                <input name="f_name" type="text" class="form-control" placeholder="Nama Pertama">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Tengah</label>
                                <input name="m_name" type="text" class="form-control" placeholder="Nama Tengah">
                            </div>      
                          </div>
                         </div>
                          <br/>
                          <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Akhir</label>
                                <input name="l_name" type="text" class="form-control" placeholder="Nama Akhir">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Samaran</label>
                                <input name="n_name" type="text" class="form-control" placeholder="Nama Samaran">
                            </div>      
                          </div>
                         </div>
                          <br/>
                          <div class="form group">
                                    <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Bahasa Percakapan</label>
                                <input name="lngge" type="text" class="form-control" placeholder="Bahasa Percakapan">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Jantina</label>
                                <select id="pilih" name="gender_" class="form-control">
                                    <option value="">Sila Pilih</option>
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
                                    <input name="dob" type="text" class="form-control has-feedback-left" id="datepicker" placeholder="Tarikh Lahir" aria-describedby="inputSuccess2Status">
                                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                    </div>
                                    </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <label>Umur</label>
                                <input name="age_" type="text" class="form-control" placeholder="Umur">
                            </div>      
                          </div>
                         </div>
                          <br/>
                          <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Bangsa</label>
                                <select id="pilih" name="race_" class="form-control">
                                  <option value="">Sila Pilih</option>
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
                                    <option value="">Sila Pilih</option>
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
                                    <option value="">Sila Pilih</option>
                                  <?php include 'include/negara.php'; ?>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Status Perkahwinan</label>
                                <select id="pilih" name="marital_" class="form-control">
                                  <option value="">Sila Pilih</option>
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
                                    <option value="">Sila Pilih</option>
                                  <?php include 'include/negara.php'; ?>
                                </select>
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nota</label>
                                <textarea name="notas" class="form-control" rows="3" placeholder="Nota"></textarea>
                            </div>         
                          </div>
                          </div>
                          <br/>
                          <ul class="list-inline pull-right">
                            <?php 
                             //By Faizul
                             //Bypass Create fir will create profil under DUMPDATA 
                             //Check if DUMPDATA EXISTS?
                             if(!isset($_SESSION['id_fir'])){
                                $sql = "SELECT id,id_fir FROM [jim].[dbo].[admin] WHERE id_fir = 'DUMPDATA'";
                                $stmt1 = sqlsrv_query ($conn , $sql);
                                 $row = sqlsrv_fetch_array($stmt1);
                                 if ($row[0] == null){
                                   //create new DUMPDATA CASE
                                   $sql2 ="INSERT [jim].[dbo].[admin] ([id_fir], [distribution], [cs_status], [intell_no], [invest_no], [title], [major], [minor], [date_regist], [operator], [officer], [department], [team], [state], [country], [do], [do_num], [do_mail], [aho_officer], [aho_num], [intell_team], [sfo_officer], [sfo_num], [intell_start], [intell_end], [userk], [masa], [status], [user_siasatan], [catatan_penyelia], [catatan_pengarah], [priority], [ngri], [edit]) VALUES (N'DUMPDATA', N'Public', N'Open(Active)', NULL, NULL, NULL, NULL, NULL, N'25-07-2019', NULL, NULL, NULL, N'KASTAM', NULL, N'MALAYSIA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, N'25-07-2019', NULL, NULL, CAST(N'2019-07-25' AS Date), N'SIASATAN', N'', NULL, NULL, N'Standard', NULL, NULL)";
                                   $stmt2 = sqlsrv_query( $conn, $sql2);
                                   $stmt1 = sqlsrv_query ($conn , $sql);
                                   $row = sqlsrv_fetch_array($stmt1);
                                   $_SESSION['id_fir'] = "DUMPDATA";
                                 }else{
                                   //DUMPDATA EXISTS
                                   $_SESSION['id_fir'] = $row[1];
                                 }
                                
                              }
                               //echo "id_fir = ".$_SESSION['id_fir'];

                            ?>
                            <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                            <li><button type="submit" class="btn btn-primary" name="simpan_profile">Seterusnya</button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <?php include 'footer.php'; ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <?php include 'include/js.php'; ?>
  </body>
</html>
<?php } ?>