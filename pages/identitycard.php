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
                    <li role="presentation" class="active">
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
                    <div class="tab-pane active" role="tabpanel" id="step3">
                        <div class="step3">
                             <center><h2 class="StepTitle">MAKLUMAT KAD PENGENALAN</h2></center>
                      <br/>
                      <div class="form group">
                          <div align="center">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                              <label for="exampleInputFile">Gambar I/C</label>
                              <input name="id_pic" type="file" id="exampleInputFile">
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                              <label for="exampleInputFile">Gambar Microchip</label>
                              <input name="ic_chip" type="file" id="exampleInputFile">
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                              <label for="exampleInputFile">Lampiran</label>
                              <input name="attch_" type="file" id="exampleInputFile">
                            </div>
                          </div>
                      </div><br/><br/><br/><br/>
                      <div class="form group">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <label>Nombor I/C *Tanpa '-'</label>
                                <input type="text" name="ic_nom" class="form-control" maxlength="12" placeholder="Nombor I/C">     
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <label>Status I/C</label>
                              <select id="pilih" name="ic_status" class="form-control">
                                <option value="">Sila Pilih</option>
                                <?php include 'include/status.php'; ?>  
                              </select>   
                            </div>      
                          </div>
                        </div><br/>
                        <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <label>Rujukan Keselamatan</label>
                              <input name="sec_ref" type="text" class="form-control" placeholder="Rujukan Keselamatan"> 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Jenis Kad</label>
                              <select id="pilih" name="card_type" class="form-control">
                                <option value="">Sila Pilih</option>
                                <?php include 'include/c_type.php'; ?>
                              </select>
                            </div>      
                          </div>
                        </div><br/>
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
                        </div><br/>
                        <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Akhir</label>
                                <input name="l_name" type="text" class="form-control" placeholder="Nama Akhir">   
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Alamat 1</label>
                                <input name="add_1" type="text" class="form-control" placeholder="Alamat 1">
                            </div>      
                          </div>
                        </div><br/>
                        <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Alamat 2</label>
                                <input name="add_2" type="text" class="form-control" placeholder="Alamat 2">  
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Alamat 3</label>
                                <input name="add_3" type="text" class="form-control" placeholder="Alamat 3">
                            </div>      
                          </div>
                        </div><br/>
                        <div class="form group">
                                    <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Poskod</label>
                                <input name="pos_code" type="text" class="form-control" placeholder="Poskod">   
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Bandar / Wilayah</label>
                                <input name="city_" type="text" class="form-control" placeholder="Bandar / Wilayah">
                            </div>      
                          </div>
                        </div><br/>
                        <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Negeri</label>
                                <select id="pilih" name="state_" class="form-control">
                                  <option value="">Sila Pilih</option>
                                  <?php include 'include/negeri.php'; ?>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Negara</label>
                                <select id="pilih" name="country_" class="form-control">
                                  <option value="">Sila Pilih</option>
                                  <?php include 'include/negara.php'; ?>
                                </select>
                            </div>      
                          </div>
                        </div><br/>
                        <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Rekod Hilang dan Jumpa</label>
                                <textarea name="lafr_" class="form-control" rows="3" placeholder="Rekod Hilang dan Jumpa"></textarea>   
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Catatan</label>
                                <textarea name="notas" class="form-control" rows="3" placeholder="Catatan"></textarea>
                            </div>      
                          </div>
                         </div><br/>
                        <ul class="list-inline pull-right">
                            <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) { echo $_SESSION['id_profil'];} ?>">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) { echo $_SESSION['id_fir'];} ?>">
                            <button type="submit" class="btn btn-primary next-step" name="simpan_ic">Simpan</button>
                            </form>
                            <form class="pull-left" method="post" action="sent.php">
                            <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) { echo $_SESSION['id_profil'];} ?>">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) { echo $_SESSION['id_fir'];} ?>">
                            <button type="submit" name="kembali_identity" class="btn btn-default next-step">Kembali</button>
                            </form>
                        </ul>
                        <br>
                        <br>
                        <br>
<?php include('include/dbconn.php');
$id_profil = $_SESSION['id_profil'];
      $sql = "SELECT * FROM [jim].[dbo].[ic] Where id_profil = '$id_profil' ";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
?>
            <div class="box-header">
              <h3 class="box-title">Senarai IC</h3>
            </div>
            <!-- /.box-header -->
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>No.I/C</th>
                  <th>Status</th>
                  <th>Keselamatan</th>
                  <th>Jenis Kad</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Poskod</th>
                  <th>Bandar/Wilayah</th>
                  <th>Negeri</th>
                  <th>Negara</th>
                  <th>Hilang Dan Jumpa</th>
                  <th>Catatan</th>
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
                  <td><?php echo $row1['nom']; ?></td>
                  <td><?php echo $row1['status']; ?></td>
                  <td><?php echo $row1['security']; ?></td>
                  <td><?php echo $row1['cardtype']; ?></td>
                  <td><?php echo $row1['firstname']; ?> <?php echo $row1['middlename']; ?> <?php echo $row1['lastname']; ?></td>
                  <td><?php echo $row1['add1']; ?> <?php echo $row1['add2']; ?> <?php echo $row1['add3']; ?></td>
                  <td><?php echo $row1['poscode']; ?></td>
                  <td><?php echo $row1['city']; ?></td>
                  <td><?php echo $row1['state']; ?></td>
                  <td><?php echo $row1['country']; ?></td>
                  <td><?php echo $row1['lafr']; ?></td>
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
                       <button type="submit" class="btn btn-primary btn-xs" name="edit_identity" title="Kemaskini"><span class="glyphicon glyphicon-pencil"></span></button>
                      </form>
                      </div>
                      <div class="col-md-6">
                    <form method="post" action="delete.php">
                      <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                      <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                      <button type="submit" onclick="return confirm('Padam Data Ini ???');" title="Padam" name="delete_ic" class="btn-xs btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
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
                            <button type="submit" name="seterusnya_identity" class="btn btn-success next-step">Seterusnya</button>
                            </form>
                        <div class="pull-right">
                        <!--<form method="post" action="sent.php">
                            <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])){ echo $_SESSION['id_fir']; } ?>">
                            <button type="submit" class="btn btn-primary" name="sent_fir_profil">Hantar</button>
                        </form>
                        -->
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