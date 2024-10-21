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
                    <li role="presentation" class="active">
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

            <form role="form" enctype="multipart/form-data" method="post" action="reg.php">
                <div class="tab-content">
                  <div class="tab-pane active" role="tabpane1" id="step2">
                    <div class="step2">
                      <center><h2 class="StepTitle">MAKLUMAT FIZIKAL</h2></center>
                    <div class="form group">
                      <div align="center">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label">Gambar Penuh</label>
                        <input type="file" name="pic_full" >
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>Lampiran</label>
                        <input name="attch_" type="file" id="exampleInputFile">
                      </div>
                      </div>
                     </div>
                    <div class="form group">
                      <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tinggi (cm)</label>
                          <input name="height_" type="text" class="form-control" placeholder="Tinggi">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Berat (kg)</label>
                                <input name="weight_" type="text" class="form-control" placeholder="Berat">
                            </div>      
                          </div>
              			</div>
                        <br/>
                           <div class="form-group">
              			 <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label for="Eye Color">Warna Mata</label>
                                <select id="pilih" name="eye_col" class="form-control">
                                <option value="">Sila Pilih</option>
                                <?php include 'include/p_color.php'; ?>
                            </select>
                            </div>          
                          
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label for="Hair Color">Warna Rambut</label>
                                <select id="pilih" name="hair_col" class="form-control">
                                <option value="">Sila Pilih</option>
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
                                <input name="scar_bm" type="text" class="form-control" placeholder="Parut atau/dan Tanda Lahir">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label for="Wearing Glasses">Memakai Cermin Mata</label>
                                <p>
                            Ya:
                            <input type="radio" class="flat" name="glasses" value="Y" checked="" required /> 
                            Tidak:
                            <input type="radio" class="flat" name="glasses" value="N" />
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
                                <option value="">Sila Pilih</option>
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
                                <option value="">Sila Pilih</option>
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
                                <option value="">Sila Pilih</option>
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
                                <option value="">Sila Pilih</option>
                                <?php include 'include/blood.php'; ?>
                            </select>
                            </div>           
                          </div>
                        </div>
                          <br/>
                          <div class="form group">
                          <div class="row"> 
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label>Catatan</label>
                                <textarea name="notas" class="form-control" rows="3" placeholder="Catatan"></textarea>
                            </div>          
                          </div>
                      </div>
                        </div>
                        <br/>
                        <ul class="list-inline pull-right">
                           
                            <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                            <button type="submit" class="btn btn-primary next-step" name="simpan_fizikal">Simpan</button>
                            </form>
                            
                            <form class="pull-left" method="post" action="sent.php">
                            <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                          <input type="hidden" name="id" value="<?php if(isset($_SESSION['id'])) {echo $_SESSION['id'];} ?>">
                            <button type="submit" name="kembali_physical" class="btn btn-default next-step">Kembali</button>
                            </form>
                        </ul>
                        <br>
                        <br>
                        <br>
<?php 
include('include/dbconn.php');
$id_profil = $_SESSION['id_profil'];
      $sql = "SELECT * FROM [jim].[dbo].[physical] Where id_profil = '$id_profil' ";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
?>
            <div class="box-header">
              <h3 class="box-title">Senarai Fizikal</h3>
            </div>
            <!-- /.box-header -->
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">NO</th>
                  <th>Tinggi (cm)</th>
                  <th>Berat (kg)</th>
                  <th>Warna Mata</th>
                  <th>Warna Rambut</th>
                  <th>Parut/Tanda Lahir</th>
                  <th>Cermin Mata</th>
                  <th>Bentuk Badan</th>
                  <th>Panjang Rambut</th>
                  <th>Tatu</th>
                  <th>Darah</th>
                  <th>Catatan</th>
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
                  <td><?php echo $row1['height']; ?></td>
                  <td><?php echo $row1['weight']; ?></td>
                  <td><?php echo $row1['eyecolor']; ?></td>
                  <td><?php echo $row1['haircolor']; ?></td>
                  <td><?php echo $row1['scar']; ?></td>
                  <td><?php  if ($row1['glasses'] == "Y") {echo "Yes";} elseif ($row1['glasses'] == "N") {echo "No";}?></td>
                  <td><?php echo $row1['build']; ?></td>
                  <td><?php echo $row1['hairlength']; ?></td>
                  <td><?php echo $row1['tattoos']; ?></td>
                  <td><?php echo $row1['blood']; ?></td>
                  <td><?php echo $row1['note']; ?></td>
                  <td>
                      <center>
                      <div class="row">
                        <div class="col-md-12">
                      <div class="col-md-6">
                      <form method="post" action="edit.php">
                       <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                       <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                       <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                       <button type="submit" class="btn btn-primary btn-xs" name="edit_fizikal" title="Kemaskini"><span class="glyphicon glyphicon-pencil"></span></button>
                      </form>
                      </div>
                      <div class="col-md-6">
                      <form method="post" action="delete.php">
                       <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                       <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                       <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                       <button type="submit" onclick="return confirm('Padam Data Ini ???');" title="Padam" name="delete_physical" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button>
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
                            <button type="submit" name="seterusnya_physical" class="btn btn-success next-step">Seterusnya</button>
                            </form>
                        <div class="pull-right">
                        <!--<form method="post" action="sent.php">
                            <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])){ echo $_SESSION['id_fir']; } ?>">
                            <button type="submit" class="btn btn-primary" name="sent_fir_profil">Hantar</button>
                        </form>
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