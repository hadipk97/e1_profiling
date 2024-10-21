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
                <h3>DAFTAR</h3>
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

                    <li role="presentation">
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
                    <li role="presentation" class="active">
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

            <form role="form" enctype="multipart/form-data" method="post" action="reg.php">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step4">
                        <div class="step4">
                            <center><h2 class="StepTitle"> MAKLUMAT PASPORT</h2></center>
                      <br/>
                            <div class="form group">
                              <div align="center">
                                 <div class="col-md-3 col-sm-3 col-xs-12">
                                 <label for="exampleInputFile">Gambar Pasport</label>
                                 <input name="p_pic" type="file" id="exampleInputFile">
                                 </div>
                                 <div class="col-md-3 col-sm-3 col-xs-12">
                                 <label for="exampleInputFile">Gambar Microchip</label>
                                 <input name="chip_pic" type="file" id="exampleInputFile">
                                 </div>
                                 <div class="col-md-3 col-sm-3 col-xs-12">
                                 <label for="exampleInputFile">Gambar Tandatangan</label>
                                 <input name="sign_pic" type="file" id="exampleInputFile">
                                 </div>
                                 <div class="col-md-3 col-sm-3 col-xs-12">
                                 <label for="exampleInputFile">Lampiran</label>
                                 <input name="attch_" type="file" id="exampleInputFile">
                                 </div>
                                </div>
                          </div><br/><br/><br/><br/>
                          <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <label>Status Pasport</label>
                                <select id="pilih" name="p_status" class="form-control">
                                  <option value="">Sila Pilih</option>
                                  <?php include 'include/status.php'; ?>   
                                </select>    
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nombor Pasport (Baru)</label>
                                <input name="pnom_new" type="text" class="form-control" placeholder="Nombor Pasport (Baru)">
                            </div>      
                          </div>
                        </div>
                        <br/>
                          <div class="form group">
                         <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nombor Pasport (Lama)</label>
                                <input name="pnom_old" type="text" class="form-control" placeholder="Nombor Pasport (Lama)">
                            </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nombor MRZ</label>
                                <input name="mrz_no" type="text" class="form-control" placeholder="Nombor MRZ">
                            </div>      
                          </div>
                         </div>
                          <br/>
                           <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <label>Jenis Pasport/Dokumen</label>
                                 <select id="pilih" name="p_type" class="form-control">
                                   <option value="">Sila Pilih</option>
                                   <?php include 'include/pss_type.php'; ?>
                                 </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Pertama</label>
                                <input name="f_name" type="text" class="form-control" placeholder="Nama Pertama">
                            </div>      
                          </div>
                        </div>
                          <br/>
                          <div class="form group">
                         <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Tengah</label>
                                <input name="m_name" type="text" class="form-control" placeholder="Nama Tengah">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Akhir</label>
                                <input name="l_name" type="text" class="form-control" placeholder="Nama Akhir">
                            </div>      
                          </div>
                        </div>
                          <br/>
                          <div class="form group">
                         <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Kod Negara</label>
                                <input name="coun_code" type="text" class="form-control" placeholder="Kod Negara">
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
                                <label>Nationality on Document</label>
                                 <select id="pilih" name="national" class="form-control">
                                   <option value="">Sila Pilih</option>
                                   <?php include 'include/negara.php'; ?>
                                 </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tarikh Daftar (Pasport)</label>
                                <fieldset>
                                    <div class="control-group">
                                    <div class="controls">
                                    <div class="xdisplay_inputx form-group has-feedback">
                                    <input name="d_issue" type="text" class="form-control has-feedback-left" id="datepicker1" placeholder="Date of Issue" aria-describedby="inputSuccess2Status">
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
                                    <input name="d_exp" type="text" class="form-control has-feedback-left" id="datepicker2" placeholder="Tarikh Luput" aria-describedby="inputSuccess2Status">
                                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                    </div>
                                    </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Issuing Office/Place</label>
                                <input name="issue_plce" type="text" class="form-control" placeholder="Issuing Place">
                            </div>           
                          </div>
                         </div>
                          <br/>
                          <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Issuing Country</label>
                                  <select id="pilih" name="issue_coun" class="form-control">
                                    <option value="">Sila Pilih</option>
                                    <?php include 'include/negara.php'; ?>
                                  </select>
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tinggi (cm)</label>
                                <input name="height_" type="text" class="form-control" placeholder="Tinggi">
                            </div>         
                          </div>
                        </div><br/>
                        <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Berat (kg)</label>
                                <input name="weight_" type="text" class="form-control" placeholder="Berat">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Lost And Found Record</label>
                                <textarea name="lafr_" class="form-control" placeholder="Lost And Found Record"></textarea>
                            </div>         
                          </div>
                        </div><br/>
                        <div class="form group">
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label>Nota</label>
                                <textarea name="notas" class="form-control" rows="3" placeholder="Nota"></textarea>
                            </div>         
                          </div>
                        </div><br/>
                        <ul class="list-inline pull-right">
                            <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                            <button type="submit" class="btn btn-primary next-step" name="simpan_passport">Simpan</button>
                            </form>
                            
                             <form class="pull-left" method="post" action="identitycard.php">
                            <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                            <button type="submit" name="kembali_passport" class="btn btn-default next-step">Kembali</button>
                            </form>
                        </ul>
                        <br>
                        <br>
                        <br>
<?php include('include/dbconn.php');
$id_profil = $_SESSION['id_profil'];
      $sql = "SELECT * FROM [jim].[dbo].[passport] Where id_profil = '$id_profil' ";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
?>
            <div class="box-header">
              <h3 class="box-title">Senarai Pasport</h3>
            </div>
            <!-- /.box-header -->
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Status</th>
                  <th>No.Pasport</th>
                  <th>No.Pasport(Lama)</th>
                  <th>MRZ</th>
                  <th>Jenis</th>
                  <th>Nama</th>
                  <th>Kod Negara</th>
                  <th>Jantina</th>
                  <th>Tarikh Lahir</th>
                  <th>Umur</th>
                  <th>Tinggi (cm)</th>
                  <th>Berat (kg)</th>
                  <th width="10%">Tindakan</th>
                </tr>
                </thead>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo $row1['status']; ?></td>
                  <td><?php echo $row1['nomnew']; ?></td>
                  <td><?php echo $row1['nomold']; ?></td>
                  <td><?php echo $row1['mrz']; ?></td>
                  <td><?php echo $row1['type']; ?></td>
                  <td><?php echo $row1['firstname']; ?> <?php echo $row1['middlename']; ?> <?php echo $row1['lastname']; ?></td>
                  <td><?php echo $row1['countrycode']; ?></td>
                  <td><?php echo $row1['gender']; ?></td>
                  <td><?php echo $row1['birth']; ?></td>
                  <td><?php echo $row1['age']; ?></td>
                  <td><?php echo $row1['height']; ?></td>
                  <td><?php echo $row1['weight']; ?></td>
                  <td>
                    <center>
                      <div class="row">
                        <div class="col-md-12">
                      <div class="col-md-6">
                      <form method="post" action="edit.php">
                       <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                       <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                       <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                       <button type="submit" class="btn btn-primary btn-xs" name="edit_pasport" title="Kemaskini"><span class="glyphicon glyphicon-pencil"></span></button>
                      </form>
                      </div>
                      <div class="col-md-6">
                    <form method="post" action="delete.php">
                      <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                      <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                      <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                      <button type="submit" onclick="return confirm('Padam Data Ini ???');" title="Padam" name="delete_passport" class="btn-xs btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                    </form>
                  </div>
                </div>
              </div>
                    </center>
                  </td>
                </tr>
<?php } ?>
              </table>
              <form class="pull-right" method="post" action="sent.php">
                <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) { echo $_SESSION['id_fir']; }?>">
                <button type="submit" name="tambah_profile" class="btn btn-info">Tambah Profil</button>
              </form>
              <form class="pull-right" method="post" action="sent.php">
                <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                <button type="submit" name="seterusnya_passport" class="btn btn-success next-step">Seterusnya</button>
              </form>
              <div class="pull-right">
                <!--<form method="post" action="sent.php">
                  <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])){ echo $_SESSION['id_fir']; } ?>">
                  <button type="submit" class="btn btn-primary" name="sent_fir_profil">Hantar</button>
                </form>-->
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
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