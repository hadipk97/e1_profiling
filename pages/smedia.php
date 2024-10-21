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
                    <li role="presentation" >
                        <a href="company.php" title="Maklumat Syarikat">
                            <span class="round-tab">
                                <i class="fa fa-building"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" >
                        <a href="company_gst_att.php" title="Maklumat GST Syarikat">
                            <span class="round-tab">
                                <i class="fa fa-building-o"></i>
                            </span>
                        </a>
                    </li>
                    
                    <li role="presentation" class="active">
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
                    <div class="tab-pane active" role="tabpanel" id="step9">
                        <div class="step9">
                            <center><h2 class="StepTitle"> MAKLUMAT MEDIA SOSIAL </h2></center>
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
                                <label>Jenis Media Sosial</label>
                                <select id="pilih" name="sm_type" class="form-control">
                                  <option value="">Sila Pilih</option>
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
                                <input name="sm_id" type="text" class="form-control" placeholder="ID Sosial Media" required>   
                            </div>     
                          </div>
                         </div>
                         <br/>
                          <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>URL</label>
                                <input name="sm_url" type="text" class="form-control" placeholder="www.facebook.com/?18961354918"> 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Pengguna</label>
                                <input name="sm_name" type="text" class="form-control" placeholder="Nama Pengguna">  
                            </div>      
                          </div>
                         </div>
                          <br/>
                           <div class="form group">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Penuh</label>
                                <input name="sm_fname" type="text" class="form-control" placeholder="Nama Penuh">
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nota</label>
                                <textarea name="notas" class="form-control" rows="3" placeholder="Nota"></textarea>
                            </div>
                          </div>
                         </div>
                          <br/>
                          <br/>
                        <ul class="list-inline pull-right">
                            <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                            <button type="submit" class="btn btn-primary next-step" name="simpan_media">Simpan</button>
                            </form>
                            
                            <form class="pull-left" method="post" action="sent.php">
                            <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                            <button type="submit" name="kembali_media" class="btn btn-default next-step">Kembali</button>
                            </form>
                        </ul>
                        <br>
                        <br>
                        <br>
<?php include('include/dbconn.php');
$id_profil = $_SESSION['id_profil'];
      $sql = "SELECT * FROM [jim].[dbo].[msocial] Where id_profil = '$id_profil' ";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
?>
            <div class="box-header">
              <h3 class="box-title">Senarai Media Sosial</h3>
            </div>
            <!-- /.box-header -->
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Jenis Media</th>
                  <th>Nama Pengguna</th>
                  <th>Nama Penuh</th>
                  <th>ID Media Sosial</th>
                  <th>URL</th>
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
                  <td><?php echo $row1['sm_type']; ?></td>
                  <td><?php echo $row1['sm_name']; ?></td>
                  <td><?php echo $row1['sm_fname']; ?></td>
                  <td><?php echo $row1['sm_id']; ?></td>
                  <td><?php echo $row1['sm_url']; ?></td>
                  <td>
                    <center>
                      <div class="row">
                        <div class="col-md-12">
                      <div class="col-md-6">
                      <form method="post" action="edit.php">
                       <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                       <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                       <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                       <button type="submit" class="btn btn-primary btn-xs" name="edit_media" title="Kemaskini"><span class="glyphicon glyphicon-pencil"></span></button>
                      </form>
                      </div>
                      <div class="col-md-6">
                    <form method="post" action="delete.php">
                      <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                      <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                      <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                      <button type="submit" onclick="return confirm('Padam Data Ini ???');" title="Padam" name="delete_smedia" class="btn-xs btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
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
                <button type="submit" name="seterusnya_media" class="btn btn-success next-step">Seterusnya</button>
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