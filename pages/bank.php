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
                    <li role="presentation" class="active">
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
                    <div class="tab-pane active" role="tabpanel" id="step7">
                        <div class="step7">
                            <center><h2 class="StepTitle"> MAKLUMAT BANK </h2></center>
                              <br/>
                          <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>No.Akaun</label>
                                <input name="n_aka" type="text" class="form-control" placeholder="No.Akaun">   
                            </div>   
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Pemegang Akaun</label>
                                <input name="p_aka" type="text" class="form-control" placeholder="Nama Pemegang Akaun">   
                            </div>     
                          </div>
                         </div>
                         <br/>
                          <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Jenis Akaun</label>
                                <select name="j_aka" class="form-control">   
                                  <option value="">Sila Pilih</option>
                                  <option value="Current">Current</option>
                                  <option value="Deposit">Deposit</option>
                                  <option value="Fix Deposit">Fix Deposit</option>
                                  <option value="Joint Loan">Joint Loan</option>
                                  <option value="Loan">Loan</option>
                                  <option value="Saving">Saving</option>
                                  <option value="Other">Other</option>
                                  <option value="nknown">Unknown</option>
                                </select>
                            </div>   
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Lokasi Akaun</label>
                                <select name="l_aka" class="form-control">   
                                  <option value="">Sila Pilih</option>
                                  <option value="International">International</option>
                                  <option value="Domestic">Domestic</option>
                                  <option value="Other">Other</option>
                                  <option value="nknown">Unknown</option>
                                </select>  
                            </div>     
                          </div>
                         </div>
                         <br/>
                          <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Nama Bank</label>
                                <select name="n_bank" class="form-control">  
                                  <option value="">Sila Pilih</option>  
                                  <?php include 'include/bank.php'; ?>
                                </select>
                            </div>   
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Baki Semasa</label>
                                <input name="b_aka" type="text" class="form-control" placeholder="Baki Semasa">   
                            </div>     
                          </div>
                         </div>
                         <br/>
                          <div class="form group">
                           <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Alamat Bank</label>
                                <textarea class="form-control" rows="3" name="a_bank"></textarea>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Catatan</label>
                                <textarea class="form-control" rows="3" name="note"></textarea>
                            </div>
                          </div>
                         </div>
                         <br/>
                        <ul class="list-inline pull-right">
                            <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                            <button type="submit" class="btn btn-primary next-step" name="simpan_bank">Simpan</button>
                            </form>
                            
                            <form class="pull-left" method="post" action="sent.php">
                            <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                            <button type="submit" name="kembali_bank" class="btn btn-default next-step">Kembali</button>
                            </form>
                        </ul>
                        <br>
                        <br>
                        <br>
<?php include('include/dbconn.php');
$id_profil = $_SESSION['id_profil'];

      $sql = "SELECT * FROM [jim].[dbo].[bank] Where id_profil = '$id_profil' ";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
?>
            <div class="box-header">
              <h3 class="box-title">Senarai Bank</h3>
            </div>
            <!-- /.box-header -->
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Bank</th>
                  <th>No Akaun</th>
                  <th>Pemegang Akaun</th>
                  <th>Jenis Akaun</th>
                  <th>Baki Akaun</th>
                  <th>Lokasi Akaun</th>
                  <th>Alamat Bank</th>
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
                  <td><?php echo $row1['n_bank']; ?></td>
                  <td><?php echo $row1['n_aka']; ?></td>
                  <td><?php echo $row1['p_aka']; ?></td>
                  <td><?php echo $row1['j_aka']; ?></td>
                  <td><?php echo $row1['b_aka']; ?></td>
                  <td><?php echo $row1['l_aka']; ?></td>
                  <td><?php echo $row1['a_bank']; ?></td>
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
                       <button type="submit" class="btn btn-primary btn-xs" name="edit_bank" title="Kemaskini"><span class="glyphicon glyphicon-pencil"></span></button>
                      </form>
                      </div>
                      <div class="col-md-6">
                    <form method="post" action="delete.php">
                      <input type="hidden" name="id_profil" value="<?php if(isset($_SESSION['id_profil'])) {echo $_SESSION['id_profil'];} ?>">
                      <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                      <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) {echo $_SESSION['id_fir'];} ?>">
                      <button type="submit" onclick="return confirm('Padam Data Ini ???');" title="Padam" name="delete_bank" class="btn-xs btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
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
                <button type="submit" name="seterusnya_bank" class="btn btn-success next-step">Seterusnya</button>
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