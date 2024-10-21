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

                    <li role="presentation" class="active">
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
                    <div class="tab-pane active" role="tabpanel" id="complete">
                        <div class="step11">
                             <center><h2 class="StepTitle">MAKLUMAT RUMAH</h2></center>
                      <br/>
                      <div class="form group">
                          <div align="center">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <label for="exampleInputFile">Lampiran</label>
                              <input name="attch_" type="file" id="exampleInputFile">
                            </div>
                          </div>
                      </div><br/><br/><br/><br/>
                      <div class="form group">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <label>Jenis Rumah</label>
                                <select id="pilih" name="hse_type" class="form-control">
                                  <option disabled selected="selected">Sila Pilih</option>
                                  <option>Rumah Teres</option>
                                  <option>Rumah Pangsa</option>
                                  <option>Pangsapuri</option>
                                  <option>Bunglow</option>
                                  <option>Rumah Kedai</option>
                                  <option>Rumah Papan</option>
                                  <option>Lain-lain</option>
                                  <!--
                                  <option value="Teres 1 Tingkat">Teres 1 Tingkat</option>
                                  <option value="Teres 2 Tingkat">Teres 2 Tingkat</option>
                                  <option value="Teres 3 Tingkat">Teres 3 Tingkat</option>
                                  <option value="Banglow">Banglow</option>
                                  <option value="Rumah Bandar">Rumah Bandar</option>
                                  <option value="Rumah Kampung">Rumah Kampung</option>
                                  <option value="Pangsapuri">Pangsapuri</option>
                                  <option value="Rumah Pangsa">Rumah Pangsa</option>
                                  <option value="Rumah Kedai">Rumah Kedai</option>-->
                                  <!--<option value="Others">Others</option>
                                  <option value="Unknown">Unknown</option>-->
                                  <option value="Tidak Di Ketahui">Tidak Di Ketahui</option>
                                </select>     
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <label>Status</label>
                                <select id="pilih" name="hse_stat" class="form-control">
                                  <option disabled selected="selected">Sila Pilih</option>
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
                              <input type="text" name="month_rent" class="form-control" placeholder="Sewa Bulanan/Sendiri">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <!--<label>Sewa/Sendiri Semenjak</label>-->
                                <label>Tarikh Menetap</label>
                              <input type="date" name="rent_since" class="form-control" placeholder="Sewa/Sendiri Sejak"> 
                            </div>      
                          </div>
                        </div><br/>
                        <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Warna</label>
                                <select id="pilih" name="hse_col" class="form-control">
                                  <option disabled selected="selected">Sila Pilih</option>
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
                                <input name="owner" type="text" class="form-control" placeholder="Pemilik">
                            </div>      
                          </div>
                        </div><br/>
                        <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>ID Pendaftaran/No Rujukan</label>
                                <input name="id_regis" type="text" class="form-control" placeholder="Identiti Pendaftaran">   
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nota</label>
                                <textarea name="notas" class="form-control" rows="3" placeholder="Nota"></textarea>
                            </div>      
                          </div>
                         </div><br/>
                        <ul class="list-inline pull-right">
                            <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) { echo $_SESSION['id_profil'];} ?>">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) { echo $_SESSION['id_fir'];} ?>">
                            <button type="submit" class="btn btn-primary next-step" name="simpan_house">Simpan</button>
                            </form>
                            <form class="pull-left" method="post" action="sent.php">
                            <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) { echo $_SESSION['id_profil'];} ?>">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) { echo $_SESSION['id_fir'];} ?>">
                            <button type="submit" name="kembali_house" class="btn btn-default next-step">Kembali</button>
                            </form>
                        </ul>
                        <br>
                        <br>
                        <br>
<?php include('include/dbconn.php');
$id_profil = $_SESSION['id_profil'];
      $sql = "SELECT * FROM [jim].[dbo].[house] Where id_profil = '$id_profil' ";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
?>
            <div class="box-header">
              <h3 class="box-title">Senarai Rumah</h3>
            </div>
            <!-- /.box-header -->
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Jenis Rumah</th>
                  <th>Status</th>
                  <th>Sewa Bulanan/Sendiri</th>
                  <th>Sewa/Sendiri Sejak</th>
                  <th>Warna</th>
                  <th>Pemilik</th>
                  <th>ID Pendaftaran</th>
                  <th>Nota</th>
                  <th width="10%">Tindakan</th>
                </tr>
                </thead>
                <tbody>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo $row1['hse_type']; ?></td>
                  <td><?php echo $row1['hse_stat']; ?></td>
                  <td><?php echo $row1['month_rent']; ?></td>
                  <td><?php echo $row1['rent_since']; ?></td>
                  <td><?php echo $row1['hse_col']; ?></td>
                  <td><?php echo $row1['owner']; ?></td>
                  <td><?php echo $row1['id_regis']; ?></td>
                  <td><?php echo $row1['notas']; ?></td>
                  <td>
                    <center>
                      <div class="row">
                        <div class="col-md-12">
                      <div class="col-md-6">
                      <form method="post" action="edit.php">
                       <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                       <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                       <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                       <button type="submit" class="btn btn-primary btn-xs" name="edit_rumah" title="Kemaskini"><span class="glyphicon glyphicon-pencil"></span></button>
                      </form>
                      </div>
                      <div class="col-md-6">
                    <form method="post" action="delete.php">
                      <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                      <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                      <button type="submit" onclick="return confirm('Padam Data Ini ???');" title="Padam" name="delete_house" class="btn-xs btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
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
                        <div class="pull-right">
                        <form method="post" action="sent.php">
                            <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])){ echo $_SESSION['id_fir']; } ?>">
                            <button type="submit" class="btn btn-primary" name="sent_fir_profil">Hantar</button>
                        </form>
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