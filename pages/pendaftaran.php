+
<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php include 'include/bar.php'; ?>
<?php include('include/dbconn.php');

$sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin]";
$stmt = sqlsrv_query($conn, $sql);
if ($stmt === false) {
}
while ($row64 = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_NUMERIC)) {

  $a1 = $row64[0];
  $stmt1 = sqlsrv_query($conn, "SELECT COUNT(*) FROM [jim].[dbo].[admin] WHERE  id_fir = 'FIR$a1'");
  if ($stmt1 === false) {
  }
  while ($row65 = sqlsrv_fetch_array($stmt1, SQLSRV_FETCH_NUMERIC)) {
    if ($row65[0] > 0) {
      $a = $a1 + 1;
    } else {
      $a = $row64[0];
      $a++;
    }
  }
  /*
    $stmt1 = sqlsrv_query( $conn, "SELECT COUNT(*) FROM [jim].[dbo].[admin] WHERE  id_fir = 'FIR$row64[0]'" );
    if( $stmt1 === false) {}
    while( $row65 = sqlsrv_fetch_array( $stmt1, SQLSRV_FETCH_NUMERIC) ) {
        
    if ($row65[0] > 0){
        $stmt2 = sqlsrv_query( $conn, "SELECT * FROM [jim].[dbo].[admin] ORDER BY id DESC");
        $r = sqlsrv_fetch_array($stmt2);

        $str = $r['id_fir'];
        $int = (int) filter_var($str, FILTER_SANITIZE_NUMBER_INT);
        $a = $int + 1;
    }*/
  //else{$a = $row64[0]; $a++;}
  // }

  //$a++;
?>
  <!-- /top navigation -->

  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Daftar Baru</h3>
        </div>
      </div>

      <div class="clearfix">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>PENDAFTARAN KES</h2>

                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <form method="post" action="sent.php">
                  <br />
                  <div class="form group">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label for="Record Id">Record ID (FIR)</label>
                        <input type="text" class="form-control" disabled placeholder="Record ID (FIR)" value="FIR<?php echo $a; ?>" width="50%">
                        <input name="fir_" type="hidden" value="FIR<?php echo $a; ?>">
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label for="Status Ke">Negeri <span style="color: red">*</span></label>
                        <select name="priority" class="form-control" required>
                          <option value="" selected="selected">Sila Pilih</option>
                          <option value="Selangor">Selangor</option>
                          <option value="KLIA">KLIA</option>
                          <option value="Pulau Pinang">Pulau Pinang</option>
                          <option value="Johor">Johor</option>
                          <option value="Kedah">Kedah</option>
                          <option value="Sabah">Sabah</option>
                          <option value="WPKL">WPKL</option>
                          <option value="Perak">Perak</option>
                          <option value="Kelantan">Kelantan</option>
                          <option value="Negeri Sembilan">Negeri Sembilan</option>
                          <option value="USFP">USFP</option>
                          <option value="Perlis">Perlis</option>
                          <option value="Sarawak">Sarawak</option>
                          <option value="Pahang">Pahang</option>
                          <option value="Terengganu">Terengganu</option>
                          <option value="Labuan">Labuan</option>
                          <option value="Melaka">Melaka</option>
                          <option value="Narkotik">Narkotik</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <br />
                  <div class="form group">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label for="Distribution">Stesen</label>
                        <select id="pilih" name="distribute" class="form-control">
                          <option value="">Sila Pilih</option>
                          <?php include 'include/distribution.php'; ?>
                        </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label for="Status Ke">Status Kes <span style="color: red">*</span></label>
                        <select name="cs_status" class="form-control" required>
                          <option value="" selected="selected">Sila Pilih</option>
                          <option value="Closed(Inactive)">Closed(Inactive)</option>
                          <option value="Open(Active)">Open (Active)</option>
                          <option value="Keep In View(KIV)">Keep In View (KIV)</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <br />
                  <div class="form group">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>Nombor Fail Perisikan</label>
                        <input name="intell_nom" type="text" class="form-control" placeholder="Nombor Fail Perisikan">
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>Nombor Fail Penyiasatan</label>
                        <input name="invest_nom" type="text" class="form-control" placeholder="Nombor Fail Penyiasatan">
                      </div>
                    </div>
                  </div>
                  <br />
                  <div class="form group">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>Tajuk</label>
                        <input name="title_" type="text" class="form-control" placeholder="Tajuk">
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>Klasifikasi Utama</label>
                        <select id="pilih" name="major_class" class="form-control">
                          <option value="">Sila Pilih</option>
                          <?php include 'include/major.php'; ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <br />
                  <div class="form group">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>Klasifikasi Kecil</label>
                        <select id="pilih" name="minor_class" class="form-control">
                          <option value="">Sila Pilih</option>
                          <?php include 'include/minor.php'; ?>
                        </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>Tarikh Daftar</label>
                        <fieldset>
                          <div class="control-group">
                            <div class="controls">
                              <div class="xdisplay_inputx form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" name="reg_date" id="datepicker" placeholder="Date of Registration" aria-describedby="inputSuccess2Status">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                  <br />
                  <div class="form group">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>Pengendali Pendaftaran (RO)</label>
                        <select id="pilih" name="reg_oprtor" class="form-control">
                          <option value="">Sila Pilih</option>
                          <?php include 'include/regist_operator.php'; ?>
                        </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>Pegawai Kelulusan (AO)</label>
                        <select id="pilih" name="appr_offcr" class="form-control">
                          <option value="">Sila Pilih</option>
                          <?php include 'include/ao.php'; ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <br />
                  <div class="form group">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>Agensi/Jabatan Pelaporan</label>
                        <select id="pilih" name="rep_dprmnt" class="form-control">
                          <option value="">Sila Pilih</option>
                          <?php include 'include/agensi.php'; ?>
                        </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>Bahagian / Unit / Pasukan</label>
                        <input name="team_" type="text" class="form-control" placeholder="Bahagian / Unit / Pasukan">
                      </div>
                    </div>
                  </div>
                  <br />
                  <div class="form group">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label for="States">Negeri</label>
                        <select id="pilih" name="state_" class="form-control">
                          <option value="">Sila Pilih</option>
                          <?php include 'include/negeri.php'; ?>
                        </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label for="Countries">Negara</label>
                        <select id="pilih" name="country_" class="form-control">
                          <option value="">Sila Pilih</option>
                          <?php include 'include/negara.php'; ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <br />
                  <div class="form group">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>Pegawai Penerima (DO)</label>
                        <select id="pilih" name="dsk_offcr" class="form-control">
                          <option value="">Sila Pilih</option>
                          <?php include 'include/do.php'; ?>
                        </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>Nombor Telefon Pegawai Penerima</label>
                        <input name="dsk_offcr_nom" type="text" class="form-control" placeholder="Nombor Telefon Pegawai Penerima">
                      </div>
                    </div>
                  </div>
                  <br />
                  <div class="form group">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>Emel Pegawai Penerima</label>
                        <input name="dsk_offcr_mail" type="text" class="form-control" placeholder="Desk Officer E-mail">
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>Pegawai AHO/SFO</label>
                        <select id="pilih" name="aho_offcr" class="form-control">
                          <option value="">Sila Pilih</option>
                          <?php include 'include/aho.php'; ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <br />
                  <div class="form group">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>Nombor Telefon AHO/SFO</label>
                        <input name="aho_nom" type="text" class="form-control" placeholder="Nombor Telefon AHO/SFO">
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>Pasukan Perisikan</label>
                        <select id="pilih" name="intelli_team" class="form-control">
                          <option value="">Sila Pilih</option>
                          <?php include 'include/intelligence.php'; ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <br />
                  <div class="form group">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>Pegawai SFO/FIO</label>
                        <select id="pilih" name="sfo_offcr" class="form-control">
                          <option value="">Sila Pilih</option>
                          <?php include 'include/sfo.php'; ?>
                        </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>Nombor Telefon SFO/FIO</label>
                        <input name="sfo_nom" type="text" class="form-control" placeholder="Nombor Telefon SFO/FIO">
                      </div>
                    </div>
                  </div>
                  <br />
                  <div class="form group">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>Kitaran Perisikan Mula</label>
                        <fieldset>
                          <div class="control-group">
                            <div class="controls">
                              <div class="xdisplay_inputx form-group has-feedback">
                                <input name="intell_strt" type="text" class="form-control has-feedback-left" id="datepicker1" placeholder="Kitaran Perisikan Mula" aria-describedby="inputSuccess2Status">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>Kitaran Perisikan Tamat</label>
                        <fieldset>
                          <div class="control-group">
                            <div class="controls">
                              <div class="xdisplay_inputx form-group has-feedback">
                                <input name="intelli_end" type="text" class="form-control has-feedback-left" id="datepicker2" placeholder="Kitaran Perisikan Tamat" aria-describedby="inputSuccess2Status">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="row">
                    <div class="pull-right">
                      <input type="hidden" name="ngri" value="<?php echo $ngri; ?>">
                      <button type="submit" class="btn btn-primary" name="simpan_fir">Simpan</button>
                    </div>
                    <div class="pull-right">
                      <button type="submit" class="btn btn-success" name="sent_fir_new">Hantar</button>
                </form>
              </div>
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

  <!-- jQuery -->
  <?php include 'include/js.php'; ?>
  </body>

  </html>
<?php } ?>