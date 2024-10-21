<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php include 'include/bar.php'; ?>
<?php include 'dbconn.php'; ?>
<?php 

//if (isset($_GET['submit'])) {

  $d = "";
  for ($i=1; $i <= 12; $i++) { 
    if($i <10){$i1 = "0".$i;}else{$i1 = $i;}
    if (!empty($_GET['keutamaan_kes'])){$keutamaan_kes = "AND priority = '".$_GET['keutamaan_kes']."'";}else{$keutamaan_kes="";}
    if (!empty($_GET['distribution'])){$distribution = "AND distribution = '".$_GET['distribution']."'";}else{$distribution="";}
    if (!empty($_GET['status_kes'])){$status_kes = "AND cs_status = '".$_GET['status_kes']."'";}else{$status_kes="";}
    if (!empty($_GET['major'])){$major = "AND major = '".$_GET['major']."'";}else{$major="";}
    if (!empty($_GET['minor'])){$minor = "AND minor = '".$_GET['minor']."'";}else{$minor="";}
    if (!empty($_GET['operator'])){$operator = "AND operator = '".$_GET['operator']."'";}else{$operator="";}
    if (!empty($_GET['ao'])){$ao = "AND officer = '".$_GET['ao']."'";}else{$ao="";}
    if (!empty($_GET['agensi'])){$agensi = "AND department = '".$_GET['agensi']."'";}else{$agensi="";}
    if (!empty($_GET['negeri'])){$negeri = "AND state = '".$_GET['negeri']."'";}else{$negeri="";}
    if (!empty($_GET['negara'])){$negara = "AND country = '".$_GET['negara']."'";}else{$negara="";}
    if (!empty($_GET['do'])){$do = "AND do = '".$_GET['do']."'";}else{$do="";}
    if (!empty($_GET['aho'])){$aho = "AND aho_officer = '".$_GET['aho']."'";}else{$aho="";}
    if (!empty($_GET['intelligence'])){$intelligence = "AND intell_team = '".$_GET['intelligence']."'";}else{$intelligence="";}
    if (!empty($_GET['sfo'])){$sfo = "AND sfo_officer = '".$_GET['sfo']."'";}else{$sfo="";}
    if (!empty($_GET['tarikh_mula'])){$tarikh_mula = "AND masa >= '".$_GET['tarikh_mula']."'";}else{$tarikh_mula = "";}
    if (!empty($_GET['tarikh_tamat'])){$tarikh_tamat = "AND masa <= '".$_GET['tarikh_tamat']."'";}else{$tarikh_tamat = "";}
    if (!empty($_GET['pegawai_pendaftar'])){$pegawai_pendaftar = "AND userk = '".$_GET['pegawai_pendaftar']."'";}else{$pegawai_pendaftar = "";}
    if (!empty($_GET['pegawai_risik'])){$pegawai_risik = "AND user_siasatan = '".$_GET['pegawai_risik']."'";}else{$pegawai_risik = "";}

    $stmt = "SELECT COUNT(0) FROM [jim].[dbo].[admin] WHERE id_fir <> 'DUMPDATA' AND masa LIKE '%-".$i1."-%' $keutamaan_kes $distribution $status_kes $major $minor $operator $ao $agensi $negeri $negara $do $aho $intelligence $sfo $tarikh_mula $tarikh_tamat $pegawai_pendaftar $pegawai_risik";
    $sql = sqlsrv_query($conn, $stmt);
    if( $r = sqlsrv_fetch_array( $sql, SQLSRV_FETCH_NUMERIC) ) {

      if($d!="")
        $d .=",";
        $d .= $r[0];
    }
  }

//}
?>
        <!-- /top navigation -->


        <div class="right_col" role="main">
          <div class="">
          <div class="page-title">
            <?php include 'flash.php'; ?>
              <div class="title_left">
                <h3>Statistik</h3>
              </div>
            </div>
            <div class="clearfix">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
          <div class="x_content">
            <div class="form group">
              <div class="row">
                <div class="box-body">

              <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="x_panel">
                    <form>
                  <div class="x_title">
                    <h2><i class="fa fa-bar-chart"></i> Carta Bar</h2> &ensp;
                    <select onchange="this.form.submit()" name="chart_type" style="border: 1px solid #007BEF;border-radius: 5px;">
                      <option value="">Pilihan</option>
                      <option value="bar">Bar</option>
                      <option value="area">Area</option>
                      <option value="spline">Spline</option>
                      <option value="pie">Pie</option>
                      <option value="column">Column</option>
                      <option value="pyramid">Pyramid</option>
                    </select>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                    </form>
                  <div class="x_content">
                    <?php if(isset($_GET['kpi'])){ ?>
                      <center>
                        <label class="label label-primary">Pendaftaran</label>
                        <label class="label label-success">Siasatan</label>
                      </center>
<?php 
  if (isset($_GET['kpi'])) {
    $sql = sqlsrv_query($conn,"SELECT * FROM [jim].[dbo].[login]");
    if($sql == false){}
    $Kes1 = "";
    while ($r = sqlsrv_fetch_array($sql)) {
?>                      <center>
                        <div class="col-md-2 col-sm-12">
                          <ul class="verticle_bars list-inline">
                            <li>
                              <?php 
                                $sql1 = sqlsrv_query($conn, "SELECT COUNT(0) FROM [jim].[dbo].[admin] WHERE id_fir <> 'DUMPDATA' AND userk = '".$r['id']."'");
                                $pendaftaran = sqlsrv_fetch_array( $sql1, SQLSRV_FETCH_NUMERIC);
                              ?>
                              <div class="progress vertical bottom">
                                <div class="progress-bar  progress-bar-success" role="progressbar" data-transitiongoal="<?php echo $pendaftaran[0];?>" data-toggle="tooltip" title="Pendaftaran : <?php echo $pendaftaran[0];?>"><?php echo $pendaftaran[0];?></div>
                              </div>
                            </li>
                            <li>
                              <?php 
                                $sql2 = sqlsrv_query($conn, "SELECT COUNT(0) FROM [jim].[dbo].[admin] WHERE id_fir <> 'DUMPDATA' AND user_siasatan = '".$r['id']."'");
                                $siasatan = sqlsrv_fetch_array( $sql2, SQLSRV_FETCH_NUMERIC);
                              ?>
                              <div class="progress vertical bottom">
                                <div class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="<?php echo $siasatan[0];?>" data-toggle="tooltip" title="Risik : <?php echo $siasatan[0];?>"><?php echo $siasatan[0];?></div>
                              </div>
                            </li>
                          </ul>
                          <?php echo $r['fulname'] ?>
                        </div>
                      </center>
<?php } } ?>
                    <?php }else{ ?>
                      <!--<canvas id="stat_chart"></canvas>-->
<div id="chartContainer" style="height: 300px; max-width: 920px; margin: 0px auto;"></div>
                    <?php } ?>
                  </div>
                  <form method="post" action="export.php">
                    <?php if(isset($_GET['kpi'])){ ?>
                      <button type="submit" class="btn btn-primary pull-right" name="ex_kpi"><i class="fa fa-file"></i> Export</button>
                    <?php }else{ ?>
                      <input type="hidden" name="sql" value="<?php echo "SELECT * FROM [jim].[dbo].[admin] WHERE id_fir <> 'DUMPDATA' AND id LIKE '%%' $keutamaan_kes $distribution $status_kes $major $minor $operator $ao $agensi $negeri $negara $do $aho $intelligence $sfo ORDER BY masa ASC" ?>">
                      <button type="submit" class="btn btn-primary pull-right" name="ex_stat"><i class="fa fa-file"></i> Export</button>
                    <?php } ?>
                  </form>
                </div>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-12">
                <form method="get" action="stat.php">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-filter"></i> Pilihan</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-2">
                    <!--
                    <ul id="myTab" class="nav nav-tabs tabs-left">
                      <li role="presentation" class="active"><a href="#tab1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" title="Kertas Siasatan"><i class="fa fa-file"></i></a></li>
                      <li role="presentation" class=""><a href="#tab2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false" title="Profil"><i class="fa fa-user"></i></a></li>
                      <li role="presentation" class=""><a href="#tab3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false" title="Fizikal"><i class="fa fa-male"></i></a></li>
                      <li role="presentation" class=""><a href="#tab4" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false" title="Kad Pengenalan"><i class="fa fa-pencil"></i></a></li>
                      <li role="presentation" class=""><a href="#tab5" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false" title="Pasport"><i class="fa fa-image"></i></a></li>
                      <li role="presentation" class=""><a href="#tab6" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false" title="Lesen Memandu"><i class="fa fa-car"></i></a></li>
                      <li role="presentation" class=""><a href="#tab7" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false" title="Bank"><i class="fa fa-institution"></i></a></li>
                      <li role="presentation" class=""><a href="#tab8" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false" title="Syarikat"><i class="fa fa-building"></i></a></li>
                      <li role="presentation" class=""><a href="#tab9" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false" title="Media Sosial"><i class="fa fa-empire"></i></a></li>
                      <li role="presentation" class=""><a href="#tab10" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false" title="Telefon"><i class="fa fa-tablet"></i></a></li>
                      <li role="presentation" class=""><a href="#tab11" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false" title="Rumah"><i class="fa fa-home"></i></a></li>
                      <li role="presentation" class=""><a href="#tab12" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" title="Pegawai"><i class="fa fa-users"></i></a></li>
                      <li role="presentation" class=""><a href="#tab13" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" title="Tarikh/Masa"><i class="fa fa-calendar"></i></a></li>
                    </ul>-->
                    <ul id="myTab" class="nav nav-tabs tabs-left">
                      <li role="presentation" class="active"><a href="#tab1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" title="Kertas Siasatan"><i class="fa fa-file"></i></a></li>
                      <li role="presentation" class=""><a href="#tab2" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" title="Pegawai"><i class="fa fa-users"></i></a></li>
                      <li role="presentation" class=""><a href="#tab3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" title="Tarikh/Masa"><i class="fa fa-calendar"></i></a></li>
                      <li role="presentation" class=""><a href="#tab4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" title="Chart"><i class="fa fa-bar-chart"></i></a></li>
                    </ul>
                  </div>
                  <div class="col-md-10 col-sm-10 col-xs-10">
                    <div id="myTabContent" class="tab-content">
                      <div role="tabpanel" class="tab-pane fade active in" id="tab1" aria-labelledby="home-tab">
                        <div class="row">
                          <div class="col-xs-6">
                            <label>Keutamaan Kes</label>
                            <select class="form-control" name="keutamaan_kes">
                              <option value="<?php echo $_GET['keutamaan_kes'] ?>"><?php echo $_GET['keutamaan_kes'] ?></option>
                              <option value="Standard">Standard</option>
                              <option value="Urgent">Urgent</option>
                              <option value="Critical">Critical</option>
                              <option value="Important">Important</option>
                            </select>
                            
                            <label>Distribution</label>
                            <select class="form-control" name="distribution">
                              <option value="<?php echo $_GET['distribution'] ?>"><?php echo $_GET['distribution'] ?></option>
                              <?php include 'include/distribution.php'; ?>
                            </select>
                            
                            <label>Status Kes</label>
                            <select class="form-control" name="status_kes">
                              <option value="<?php echo $_GET['status_kes'] ?>"><?php echo $_GET['status_kes'] ?></option>
                              <option value="Closed(Inactive)">Closed(Inactive)</option>
                              <option value="Open(Active)">Open (Active)</option>
                              <option value="Keep In View(KIV)">Keep In View (KIV)</option>
                            </select>
                            
                            <label>Klasifikasi Utama</label>
                            <select class="form-control" name="major">
                              <option value="<?php echo $_GET['major'] ?>"><?php echo $_GET['major'] ?></option>
                              <?php include 'include/major.php'; ?>
                            </select>
                            
                            <label>Klasifikasi Kecil</label>
                            <select class="form-control" name="minor">
                              <option value="<?php echo $_GET['minor'] ?>"><?php echo $_GET['minor'] ?></option>
                              <?php include 'include/minor.php'; ?>
                            </select>
                            
                            <label>Pengendali Pendaftaran</label>
                            <select class="form-control" name="operator">
                              <option value="<?php echo $_GET['operator'] ?>"><?php echo $_GET['operator'] ?></option>
                              <?php include 'include/regist_operator.php'; ?>
                            </select>
                            
                            <label>Pegawai Kelulusan</label>
                            <select class="form-control" name="ao">
                              <option value="<?php echo $_GET['ao'] ?>"><?php echo $_GET['ao'] ?></option>
                              <?php include 'include/ao.php'; ?>
                            </select>
                          </div>
                          <div class="col-xs-6">
                            <label>Agensi/Jabatan Pelaporan</label>
                            <select class="form-control" name="agensi">
                              <option value="<?php echo $_GET['agensi'] ?>"><?php echo $_GET['agensi'] ?></option>
                              <?php include 'include/agensi.php'; ?>
                            </select>
                            
                            <label>Negeri</label>
                            <select class="form-control" name="negeri">
                              <option value="<?php echo $_GET['negeri'] ?>"><?php echo $_GET['negeri'] ?></option>
                              <?php include 'include/negeri.php'; ?>
                            </select>
                            
                            <label>Negara</label>
                            <select class="form-control" name="negara">
                              <option value="<?php echo $_GET['negara'] ?>"><?php echo $_GET['negara'] ?></option>
                              <?php include 'include/negara.php'; ?>
                            </select>
                            
                            <label>Pegawai Penerima</label>
                            <select class="form-control" name="do">
                              <option value="<?php echo $_GET['do'] ?>"><?php echo $_GET['do'] ?></option>
                              <?php include 'include/do.php'; ?>
                            </select>
                            
                            <label>Pegawai AHO/SFO</label>
                            <select class="form-control" name="aho">
                              <option value="<?php echo $_GET['aho'] ?>"><?php echo $_GET['aho'] ?></option>
                              <?php include 'include/aho.php'; ?>
                            </select>
                            
                            <label>Pasukan Perisikan</label>
                            <select class="form-control" name="intelligence">
                              <option value="<?php echo $_GET['intelligence'] ?>"><?php echo $_GET['intelligence'] ?></option>
                              <?php include 'include/intelligence.php'; ?>
                            </select>
                            
                            <label>Pegawai SFO/FIO</label>
                            <select class="form-control" name="sfo">
                              <option value="<?php echo $_GET['sfo'] ?>"><?php echo $_GET['sfo'] ?></option>
                              <?php include 'include/sfo.php'; ?>
                            </select>
                          </div>
                        </div>
                          <center>
                            <a href="stat.php"><button type="button" class="btn btn-danger pull-right" style="margin-top: 10px;text-align: center;width: 47%"><i class="fa fa-refresh"></i> Set Semula</button></a>
                            <button type="submit" name="submit" class="btn btn-primary pull-right" style="margin-top: 10px;text-align: center;width: 47%"><i class="fa fa-filter"></i> Papar</button>
                          </center>
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="tab2" aria-labelledby="profile-tab">
                        <div class="row">
                          <div class="col-xs-12">
                            <label>Pegawai Pendaftar</label>
                            <select class="form-control" name="pegawai_pendaftar">
                              <?php 
                                $sql = sqlsrv_query($conn,"SELECT * FROM [jim].[dbo].[login] WHERE id = '".$_GET['pegawai_pendaftar']."'");
                                $r1 = sqlsrv_fetch_array($sql);
                              ?>
                              <option value="<?php echo $_GET['pegawai_pendaftar'] ?>"><?php echo $r1['fulname'] ?></option>
                              <?php 
                                $sql = sqlsrv_query($conn,"SELECT * FROM [jim].[dbo].[login] ORDER BY fulname ASC");
                                if($sql == false){}
                                while($r = sqlsrv_fetch_array($sql)){
                                  echo "<option value='".$r['id']."'>".$r['fulname']."</option>";
                                }

                              ?>
                            </select>

                            <label>Pegawai Risik</label>
                            <select class="form-control" name="pegawai_risik">
                              <?php 
                                $sql = sqlsrv_query($conn,"SELECT * FROM [jim].[dbo].[login] WHERE id = '".$_GET['pegawai_risik']."'");
                                $r2 = sqlsrv_fetch_array($sql);
                              ?>
                              <option value="<?php echo $_GET['pegawai_risik'] ?>"><?php echo $r2['fulname'] ?></option>
                              <?php 
                                $sql = sqlsrv_query($conn,"SELECT * FROM [jim].[dbo].[login] WHERE role = '2' ORDER BY fulname ASC");
                                if($sql == false){}
                                while($r = sqlsrv_fetch_array($sql)){
                                  echo "<option value='".$r['id']."'>".$r['fulname']."</option>";
                                }

                              ?>
                            </select>
                            <!--
                            <label>Pegawai Aktif</label>
                            <select class="form-control"></select>
                            -->
                          </div>
                        </div>
                          <center>
                            <a href="stat.php"><button type="button" class="btn btn-danger pull-right" style="margin-top: 10px;text-align: center;width: 47%"><i class="fa fa-refresh"></i> Set Semula</button></a>
                            <button type="submit" name="submit" class="btn btn-primary pull-right" style="margin-top: 10px;text-align: center;width: 47%"><i class="fa fa-filter"></i> Papar</button>
                          </center>
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="tab3" aria-labelledby="profile-tab">
                        <div class="row">
                          <div class="col-xs-6">
                            <label>Tarikh Mula</label>
                            <input type="date" name="tarikh_mula" class="form-control" value="<?php echo $_GET['tarikh_mula']; ?>">
                          </div>
                          <div class="col-xs-6">
                            <label>Tarikh Tamat</label>
                            <input type="date" name="tarikh_tamat" class="form-control" value="<?php echo $_GET['tarikh_tamat'] ?>">
                          </div>
                        </div>
                        <input type="hidden" name="chart_type" value="<?php echo $_GET['chart_type'] ?>">
                          <center>
                            <a href="stat.php"><button type="button" class="btn btn-danger pull-right" style="margin-top: 10px;text-align: center;width: 47%"><i class="fa fa-refresh"></i> Set Semula</button></a>
                            <button type="submit" name="submit" class="btn btn-primary pull-right" style="margin-top: 10px;text-align: center;width: 47%"><i class="fa fa-filter"></i> Papar</button>
                          </center>
                      </div>
              </form>
                      <div role="tabpanel" class="tab-pane fade" id="tab4" aria-labelledby="profile-tab">
                        <div class="row">
                          <form method="get" action="stat.php">
                            <div class="col-xs-12">
                              <button type="submit" name="kpi" class="btn btn-default">KPI Pegawai</button>
                            </div>
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
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <div class="form group">
              <div class="row">
                <div class="box-body">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                      <h2><i class="fa fa-table"></i> Maklumat </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content  collapse">
                    <table class="table table-bordered">
                      <tr>
                        <th>No</th>
                        <th>NO FIR</th>
                        <th>Status</th>
                        <th>Tarikh Daftar</th>
                        <th width="10%">Tindakan</th>
                      </tr>
<?php

    if (!empty($_GET['keutamaan_kes'])){$keutamaan_kes = "AND priority = '".$_GET['keutamaan_kes']."'";}else{$keutamaan_kes="";}
    if (!empty($_GET['distribution'])){$distribution = "AND distribution = '".$_GET['distribution']."'";}else{$distribution="";}
    if (!empty($_GET['status_kes'])){$status_kes = "AND cs_status = '".$_GET['status_kes']."'";}else{$status_kes="";}
    if (!empty($_GET['major'])){$major = "AND major = '".$_GET['major']."'";}else{$major="";}
    if (!empty($_GET['minor'])){$minor = "AND minor = '".$_GET['minor']."'";}else{$minor="";}
    if (!empty($_GET['operator'])){$operator = "AND operator = '".$_GET['operator']."'";}else{$operator="";}
    if (!empty($_GET['ao'])){$ao = "AND officer = '".$_GET['ao']."'";}else{$ao="";}
    if (!empty($_GET['agensi'])){$agensi = "AND department = '".$_GET['agensi']."'";}else{$agensi="";}
    if (!empty($_GET['negeri'])){$negeri = "AND state = '".$_GET['negeri']."'";}else{$negeri="";}
    if (!empty($_GET['negara'])){$negara = "AND country = '".$_GET['negara']."'";}else{$negara="";}
    if (!empty($_GET['do'])){$do = "AND do = '".$_GET['do']."'";}else{$do="";}
    if (!empty($_GET['aho'])){$aho = "AND aho_officer = '".$_GET['aho']."'";}else{$aho="";}
    if (!empty($_GET['intelligence'])){$intelligence = "AND intell_team = '".$_GET['intelligence']."'";}else{$intelligence="";}
    if (!empty($_GET['sfo'])){$sfo = "AND sfo_officer = '".$_GET['sfo']."'";}else{$sfo="";}
    if (!empty($_GET['tarikh_mula'])){$tarikh_mula = "AND masa >= '".$_GET['tarikh_mula']."'";}else{$tarikh_mula = "";}
    if (!empty($_GET['tarikh_tamat'])){$tarikh_tamat = "AND masa <= '".$_GET['tarikh_tamat']."'";}else{$tarikh_tamat = "";}
    if (!empty($_GET['pegawai_pendaftar'])){$pegawai_pendaftar = "AND userk = '".$_GET['pegawai_pendaftar']."'";}else{$pegawai_pendaftar = "";}
    if (!empty($_GET['pegawai_risik'])){$pegawai_risik = "AND user_siasatan = '".$_GET['pegawai_risik']."'";}else{$pegawai_risik = "";}

if(isset($_GET['submit'])){
  $q1 = "SELECT * FROM [jim].[dbo].[admin] WHERE id_fir <> 'DUMPDATA' AND id LIKE '%%' $keutamaan_kes $distribution $status_kes $major $minor $operator $ao $agensi $negeri $negara $do $aho $intelligence $sfo $tarikh_mula $tarikh_tamat $pegawai_pendaftar $pegawai_risik";
  $q = "SELECT * FROM [jim].[dbo].[admin] WHERE id_fir <> 'DUMPDATA' AND id LIKE '%%' $keutamaan_kes $distribution $status_kes $major $minor $operator $ao $agensi $negeri $negara $do $aho $intelligence $sfo $tarikh_mula $tarikh_tamat $pegawai_pendaftar $pegawai_risik ORDER BY masa ASC";
  $sql = sqlsrv_query($conn,$q);
}else{
  $q1 = "SELECT * FROM [jim].[dbo].[admin] WHERE id LIKE '%%' AND id_fir <> 'DUMPDATA' ";
  $q = "SELECT * FROM [jim].[dbo].[admin] where id_fir <> 'DUMPDATA' ORDER BY masa ASC";
  $sql = sqlsrv_query($conn,$q);
}
if($sql == false){}
$c = 1;
while ($r = sqlsrv_fetch_array($sql)) {
?>
                      <tr>
                        <td><?php echo $c++ ?></td>
                        <td><?php echo $r['id_fir']; ?></td>
                        <td><?php echo $r['status']; ?></td>
                        <td><?php echo $r['masa']->format("d/m/Y"); ?></td>
                        <td>
                          <center>
                          <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=600,top=100,left=250,resizable=no');">
                            <input type="hidden" name="id" value="<?php echo $r['id']; ?>">
                            <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                          </form>
                          </center>
                        </td>
                      </tr>
<?php } ?>
                    </table>
                  </div>
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /footer content -->
<?php include 'footer.php'; ?>
<!-- /footer content -->
</div>
</div>
<!-- jQuery -->
<?php include 'include/js.php'; ?>
<?php// echo $Kes1; ?>
<!--
<script type="text/javascript">
  if($("#stat_chart").length){
    var f=document.getElementById("stat_chart");
    new Chart(f,{
      type:"bar",
      data:{
        labels:["Jan", "Feb", "Mac", "Apr", "May", "Jun", "Jul","Ogo","Sept","Oct","Nov","Dis"],
        datasets:[
                  {
                    label:"FIR",
                    backgroundColor:"#26B99A",
                    click: onClick,
                    data:[<?php echo $d ?>]
                  }
                ]
              },
        options:{
          scales:{
            yAxes:[{
              ticks:{
                beginAtZero:!0
              }
            }
            ]
          }
        }
      }
      )
  chart.render();

  function onClick(e) {
    window.open('');
  }
 }
</script>-->
<?php 
  $data = explode(',', $d);

  $c = 1;
  foreach ($data as $r) {
    ${'s'.$c} = $r;
    $c++;
  }
    $ct = "column";
  if ($_GET['chart_type'] != "") {
      $ct = $_GET['chart_type'];
  }
?>
<script type="text/javascript">
window.onload = function () {
  var chart = new CanvasJS.Chart("chartContainer",
  {
    theme: "light2",
    animationEnabled: true,
    title:{
     // text: "FIR By Month"
    },
      axisX:{
        gridThickness: 1
      },
      axisY:{
        gridThickness: 1
      },
    data: [
    {
      type: "<?php echo $ct ?>",
      click: onClick,
      dataPoints: [
        { x: 10, y: <?php echo $s1 ?>,label:'Jan',bln:'-01-'},
        { x: 20, y: <?php echo $s2 ?>,label:'Feb',bln:'-02-'},
        { x: 30, y: <?php echo $s3 ?> ,label:'Mac',bln:'-03-'},
        { x: 40, y: <?php echo $s4 ?> ,label:'Apr',bln:'-04-'},
        { x: 50, y: <?php echo $s5 ?> ,label:'May',bln:'-05-'},
        { x: 60, y: <?php echo $s6 ?> ,label:'Jun',bln:'-06-'},
        { x: 70, y: <?php echo $s7 ?> ,label:'Jul',bln:'-07-'},
        { x: 80, y: <?php echo $s8 ?> ,label:'Ogo',bln:'-08-'},
        { x: 90, y: <?php echo $s9 ?>,label:'Sept',bln:'-09-'},
        { x: 100, y: <?php echo $s10 ?>,label:'Oct',bln:'-10-'},
        { x: 110, y: <?php echo $s11 ?>,label:'Nov',bln:'-11-'},
        { x: 120, y: <?php echo $s12 ?>,label:'Dis',bln:'-12-'}
      ]
    }
    ]
  });
  chart.render();

  function onClick(e) {
    //window.open("all_kes.php?s=<?php echo $q1 ?>&m="+ e.dataPoint.bln);
    window.open("list_report.php?s=<?php echo $q1 ?>&m="+ e.dataPoint.bln);
  }
}
</script>
<script src="../plugins/canvas.js"></script>
</body>
</html>