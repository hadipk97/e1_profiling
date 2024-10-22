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
                  <li role="presentation" class="active">
                    <a href="company.php" title="Maklumat Syarikat">
                      <span class="round-tab">
                        <i class="fa fa-building"></i>
                      </span>
                    </a>
                  </li>
                  <li role="presentation">
                    <a href="company_gst_att.php" title="Maklumat GST Syarikat">
                      <span class="round-tab">
                        <i class="fa fa-building-o"></i>
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
                <div class="tab-pane active" role="tabpanel" id="step8">
                  <div class="step8">
                    <center>
                      <h2 class="StepTitle"> MAKLUMAT SYARIKAT </h2>
                    </center>
                    <br />
                    <div class="form group">
                      <div align="center">
                        <!--
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <label class="control-label">Laman Sesawang</label>
                                 <input type="file" name="web">
                                 </div>-->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <label class="control-label">Lampiran</label>
                          <input type="file" name="attch">
                        </div>
                      </div>
                    </div><br /><br /><br /><br />
                    <div class="form group">
                      <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <label>Nama Syarikat</label>
                          <input name="c_name" type="text" class="form-control" placeholder="Nama Syarikat">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <label>No. Pendaftaran Syarikat <font color="red">*</font></label>
                          <input name="no_c" type="text" class="form-control" placeholder="No. Pendaftaran Syarikat" required>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="form group">
                      <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <label>Status Milikan Syarikat</label>
                          <select name="mili_s" class="form-control">
                            <option value="">Sila Pilih</option>
                            <option value="Director">Director</option>
                            <option value="Shareholder">Shareholder</option>
                            <option value="Employee">Employee</option>
                          </select>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <label>Sektor Perniagaan</label>
                          <select id="pilih" name="sek" class="form-control">
                            <option value="">Sila Pilih</option>
                            <option value="Aerospace">Aerospace</option>
                            <option value="Defence">Defence</option>
                            <option value="Security">Security</option>
                            <option value="Airlines">Airlines</option>
                            <option value="Banking">Banking</option>
                            <option value="Chemistry & Pharma">Chemistry & Pharma</option>
                            <option value="Consumer Goods">Consumer Goods</option>
                            <option value="Health">Health</option>
                            <option value="Insurance">Insurance</option>
                            <option value="Manufacturing">Manufacturing</option>
                            <option value="Mining Industry">Mining Industry</option>
                            <option value="Public Sector">Public Sector</option>
                            <option value="Telecom">Telecom</option>
                            <option value="Tourism">Tourism</option>
                            <option value="Transportation">Transportation</option>
                            <option value="Utility & Energy">Utility & Energy</option>
                            <option value="Manpower">Manpower</option>
                            <option value="Cleaning Service">Cleaning Service</option>
                            <option value="Agriculture">Agriculture</option>
                            <option value="Others">Others</option>
                            <option value="Unknown">Unknown</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="form group">
                      <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <label>Alamat</label>
                          <input name="ala" type="text" class="form-control" placeholder="Alamat">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <label>No.Tel Syarikat</label>
                          <input name="tel" type="text" class="form-control" placeholder="No. Tel Syarikat">
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="form group">
                      <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <label>Sambungan Syarikat</label>
                          <input name="exttel" type="text" class="form-control" placeholder="Sambungan Syarikat">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <label>Faks</label>
                          <input name="fax" type="text" class="form-control" placeholder="Faks">
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="form group">
                      <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <label>E-mel</label>
                          <input name="email" type="text" class="form-control" placeholder="E-mel">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <label>Tarikh Tamat Pendaftaran</label>
                          <fieldset>
                            <div class="control-group">
                              <div class="controls">
                                <div class="xdisplay_inputx form-group has-feedback">
                                  <input name="exp_regist" type="text" class="form-control has-feedback-left" id="datepicker1" placeholder="Tarikh Tamat Pendaftaran" aria-describedby="inputSuccess2Status">
                                  <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                  <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                </div>
                              </div>
                            </div>
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <label>Laman Sesawang</label>
                          <input name="web" type="text" class="form-control" placeholder="Laman Sesawang">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <label>Catatan</label>
                          <textarea class="form-control" rows="3" name="note" placeholder="Cacatan"></textarea>
                        </div>
                      </div>
                    </div>
                    <br>

                  </div>
                </div>
              </div>
              <br />
              <ul class="list-inline pull-right">
                <input type="hidden" name="id_profil" value="<?php if (isset($_SESSION['id_profil'])) {
                                                                echo $_SESSION['id_profil'];
                                                              } ?>">
                <input type="hidden" name="id_fir" value="<?php if (isset($_SESSION['id_fir'])) {
                                                            echo $_SESSION['id_fir'];
                                                          } ?>">
                <button type="submit" class="btn btn-primary" name="simpan_company">Simpan</button>
            </form>

            <form class="pull-left" method="post" action="sent.php">
              <input type="hidden" name="id_profil" value="<?php if (isset($_SESSION['id_profil'])) {
                                                              echo $_SESSION['id_profil'];
                                                            } ?>">
              <input type="hidden" name="id_fir" value="<?php if (isset($_SESSION['id_fir'])) {
                                                          echo $_SESSION['id_fir'];
                                                        } ?>">
              <button type="submit" name="kembali_company" class="btn btn-default">Kembali</button>
            </form>
            </ul>
            <br>
            <br>
            <br>
            <?php include('include/dbconn.php');
            $id_profil = $_SESSION['id_profil'];

            $sql = "SELECT * FROM [jim].[dbo].[com_pany] Where id_profil = '$_SESSION[id_profil]' ";
            $stmt1 = sqlsrv_query($conn, $sql);
            if (!$stmt1) {
            }
            ?>
            <div class="box-header">
              <h3 class="box-title">Senarai Syarikat</h3>
            </div>
            <!-- /.box-header -->
            <table id="example1" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Syarikat</th>
                  <th>No.Daftar</th>
                  <th>Milikan</th>
                  <th>Sektor</th>
                  <th>Alamat</th>
                  <th>No.Tel</th>
                  <th>Faks</th>
                  <th>E-mel</th>
                  <th>Laman Sesawang</th>
                  <th>Maklumat Bank</th>
                  <th>Catatan</th>
                  <th width="10%">Tindakan</th>
                </tr>
              </thead>
              <?php
              $counter = 1;
              while ($row1 =  sqlsrv_fetch_array($stmt1)) {
              ?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo $row1['c_name']; ?></td>
                  <td><?php echo $row1['no_c']; ?></td>
                  <td><?php echo $row1['mili_s']; ?></td>
                  <td><?php echo $row1['sek']; ?></td>
                  <td><?php echo $row1['ala']; ?></td>
                  <td><?php echo $row1['tel']; ?></td>
                  <td><?php echo $row1['fax']; ?></td>
                  <td><?php echo $row1['email']; ?></td>
                  <td><?php echo $row1['web']; ?></td>
                  <td>
                    <?php
                    $sql = "SELECT * FROM [jim].[dbo].[bank_syarikat] Where id_syarikat = '$row1[no_c]' ";
                    $stmt2 = sqlsrv_query($conn, $sql);
                    if (!$stmt1) {
                    }
                    $a = 1;
                    while ($row2 =  sqlsrv_fetch_array($stmt2)) {
                      echo $a++ . ")" . $row2['n_bank'] . "<br>" . $row2['n_aka'] . "<br>";
                    }
                    ?>
                  </td>
                  <td><?php echo $row1['note']; ?></td>
                  <td>
                    <center>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="col-md-4">
                            <form method="post" action="edit.php">
                              <input type="hidden" name="id_profil" value="<?php if (isset($_SESSION['id_profil'])) {
                                                                              echo $_SESSION['id_profil'];
                                                                            } ?>">
                              <input type="hidden" name="id_fir" value="<?php if (isset($_SESSION['id_fir'])) {
                                                                          echo $_SESSION['id_fir'];
                                                                        } ?>">
                              <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                              <button type="submit" class="btn btn-primary btn-xs" name="edit_syarikat" title="Kemaskini"><span class="glyphicon glyphicon-pencil"></span></button>
                            </form>
                          </div>
                          <div class="col-md-4">
                            <button type="button" class="btn btn-success btn-xs" no_c="<?php echo $row1['no_c']; ?>" title="Tambah Maklumat Bank" data-toggle="modal" data-target="#add_bank"><span class="fa fa-plus"></span></button>
                          </div>
                          <div class="col-md-4">
                            <form method="post" action="delete.php">
                              <input type="hidden" name="id_profil" value="<?php if (isset($_SESSION['id_profil'])) {
                                                                              echo $_SESSION['id_profil'];
                                                                            } ?>">
                              <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                              <input type="hidden" name="id_fir" value="<?php if (isset($_SESSION['id_fir'])) {
                                                                          echo $_SESSION['id_fir'];
                                                                        } ?>">
                              <button type="submit" onclick="return confirm('Padam Data Ini ???');" title="Padam" name="delete_company" class="btn-xs btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
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
              <input type="hidden" name="id_fir" value="<?php if (isset($_SESSION['id_fir'])) {
                                                          echo $_SESSION['id_fir'];
                                                        } ?>">
              <button type="submit" name="tambah_profile" class="btn btn-info">Tambah Profil</button>
            </form>
            <form class="pull-right" method="post" action="sent.php">
              <input type="hidden" name="id_profil" value="<?php if (isset($_SESSION['id_profil'])) {
                                                              echo $_SESSION['id_profil'];
                                                            } ?>">
              <input type="hidden" name="id_fir" value="<?php if (isset($_SESSION['id_fir'])) {
                                                          echo $_SESSION['id_fir'];
                                                        } ?>">
              <button type="submit" name="seterusnya_company" class="btn btn-success next-step">Seterusnya</button>
            </form>
            <div class="pull-right">
              <!--<form method="post" action="sent.php">
                  <input type="hidden" name="id_fir" value="<?php if (isset($_SESSION['id_fir'])) {
                                                              echo $_SESSION['id_fir'];
                                                            } ?>">
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
<div class="modal fade" id="add_bank" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form id="add_bank_form" method="post" action="reg.php">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Tambah Bank</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <label>No.Akaun</label>
              <input name="n_aka" type="text" class="form-control" placeholder="No.Akaun">

              <label>Pemegang Akaun</label>
              <input name="p_aka" type="text" class="form-control" placeholder="Nama Pemegang Akaun">

              <label>Nama Bank</label>
              <select name="n_bank" class="form-control">
                <option value="">Sila Pilih</option>
                <?php include 'include/bank.php'; ?>
              </select>

              <label>Alamat Bank</label>
              <textarea class="form-control" rows="3" name="a_bank"></textarea>

            </div>
            <div class="col-md-6">
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

              <label>Lokasi Akaun</label>
              <select name="l_aka" class="form-control">
                <option value="">Sila Pilih</option>
                <option value="International">International</option>
                <option value="Domestic">Domestic</option>
                <option value="Other">Other</option>
                <option value="nknown">Unknown</option>
              </select>

              <label>Baki Semasa</label>
              <input name="b_aka" type="text" class="form-control" placeholder="Baki Semasa">

              <label>Catatan</label>
              <textarea class="form-control" rows="3" name="note"></textarea>

            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="no_c" placeholder="firstname">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="submit" name="add_com_bank" class="btn btn-primary">Simpan</button>
        </div>
      </form>
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
<script>
  $('#add_bank').on('show.bs.modal', function(e) {
    var opener = e.relatedTarget;
    var firstname = $(opener).attr('no_c');
    $('#add_bank_form').find('[name="no_c"]').val(firstname);
    $('#add_bank_form').find('[name="p_aka"]').val(firstname);

  });
</script>
</body>

</html>