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
                <h3>&ensp;</h3>
              </div>
            </div>

            <div class="clearfix">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>KEMASKINI KES</h2>
                    
                    <div class="clearfix"></div>
                    <div class="row col-md-12"><br/> <?php if ($_SESSION['status'] == "SIASATAN") : ?>
                        <div class="pull-right">
                        <form method="post" action="reg.php">
                            <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])){ echo $_SESSION['id_fir']; } ?>">
                            <button type="submit" class="btn btn-info" name="list_pro">Daftar Profil</button>
                        </form>
                        </div>
                        <div class="pull-right">
                        <form method="post" action="sent.php">
                            <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])){ echo $_SESSION['id_fir']; } ?>">
                            <button type="submit" class="btn btn-warning" name="list_dia">Diari Siasatan</button>
                        </form>
                        </div>
                        <?php endif ; ?> </div>
                  </div>
                  <div class="x_content">
                    <form method="post" action="sent.php">
                    <br />
                    <div class="form group">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
						  		<label for="Record Id">Record ID (FIR)</label>
                            	<input type="text" class="form-control" placeholder="Record ID (FIR)" value="<?php if(isset($_SESSION['id_fir'])){ echo $_SESSION['id_fir']; } ?>" width="50%" disabled >
                              <input name="fir_" type="hidden" value="<?php if(isset($_SESSION['id_fir'])){ echo $_SESSION['id_fir']; } ?>">
							</div>  
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label for="Status Ke">Keutamaan Kes <span style="color: red">*</span></label>
                                <select name="priority" class="form-control" required>
                                    <option><?php if(isset($_SESSION['priority'])){ echo $_SESSION['priority']; } ?></option>
                                    <option value="Standard">Standard</option>
                                    <option value="Urgent">Urgent</option>
                                    <option value="Critical">Critical</option>
                                    <option value="Important">Important</option>
                                </select>
                            </div>
					    </div>
                        </div>
                        <br/>
                        <div class="form group">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            	<label for="Distribution">Distribution</label>
                                <select id="pilih" name="distribute" class="form-control">
                                	<option value=""><?php if(isset($_SESSION['distribution'])){ echo $_SESSION['distribution']; } ?></option>
                                	<?php include 'include/distribution.php'; ?>
                            	</select>
							</div>
                           	<div class="col-md-6 col-sm-6 col-xs-12">
                            	<label for="Status Ke">Status Kes <span style="color: red">*</span></label>
                                <select name="cs_status" class="form-control" required>
                                	<option><?php if(isset($_SESSION['cs_status'])){ echo $_SESSION['cs_status']; } ?></option>
                                	<option value="Closed(Inactive)">Closed(Inactive)</option>
                                	<option value="Open(Active)">Open (Active)</option>
                                	<option value="Keep In View(KIV)">Keep In View (KIV)</option>
                            	</select>
							</div>
		    			</div>
                        </div>
			    		<br/>
                        <div class="form group">
                        <div class="row">
				    		<div class="col-md-6 col-sm-6 col-xs-12">
						  		<label>Nombor Fail Perisikan</label>
                            	<input name="intell_nom" type="text" class="form-control" placeholder="Nombor Fail Perisikan" value="<?php if(isset($_SESSION['intell_no'])){ echo $_SESSION['intell_no']; } ?>">
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
						  		<label>Nombor Fail Penyiasatan</label>
                            	<input name="invest_nom" type="text" class="form-control" placeholder="Nombor Fail Penyiasatan" value="<?php if(isset($_SESSION['invest_no'])){ echo $_SESSION['invest_no']; } ?>">
							</div>
					    </div>
                        </div>
                        <br/>
                        <div class="form group">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
						  		<label>Tajuk</label>
                            	<input name="title_" type="text" class="form-control" placeholder="Tajuk" value="<?php if(isset($_SESSION['title'])){ echo $_SESSION['title']; } ?>">
							</div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            	<label>Klasifikasi Utama</label>
                                <select id="pilih" name="major_class" class="form-control">
                                <option value="<?php if(isset($_SESSION['major'])){ echo $_SESSION['major']; } ?>"><?php if(isset($_SESSION['major'])){ echo $_SESSION['major']; } ?></option>
                                <?php include 'include/major.php'; ?>
                            	</select>
							</div>
					    </div>
                        </div>
                        <br/>
                        <div class="form group">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            	<label>Klasifikasi Kecil</label>
                                <select id="pilih" name="minor_class" class="form-control">
                                <option value="<?php if(isset($_SESSION['minor'])){ echo $_SESSION['minor']; } ?>"><?php if(isset($_SESSION['minor'])){ echo $_SESSION['minor']; } ?></option>
                                <?php include 'include/minor.php'; ?>
                            	</select>
							</div>
				            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Tarikh Daftar</label>
                                <fieldset>
                          			<div class="control-group">
                                    <div class="controls">
                                    <div class="xdisplay_inputx form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" name="reg_date" id="datepicker" placeholder="Date of Registration" aria-describedby="inputSuccess2Status" value="<?php if(isset($_SESSION['date_regist'])){ echo $_SESSION['date_regist']; } ?>">
                                    <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
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
                            	<label>Pengendali Pendaftaran (RO)</label>
                                <select id="pilih" name="reg_oprtor" class="form-control">
                                <option value="<?php if(isset($_SESSION['operator'])){ echo $_SESSION['operator']; } ?>"><?php if(isset($_SESSION['operator'])){ echo $_SESSION['operator']; } ?></option>
                                <?php include 'include/regist_operator.php'; ?>
                            	</select>
							</div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            	<label>Pegawai Kelulusan (AO)</label>
                                <select id="pilih" name="appr_offcr" class="form-control">
                                <option value="<?php if(isset($_SESSION['officer'])){ echo $_SESSION['officer']; } ?>"><?php if(isset($_SESSION['officer'])){ echo $_SESSION['officer']; } ?></option>
                                <?php include 'include/ao.php'; ?>
                            	</select>
							</div>
					    </div>
                        </div>
                        <br/>
                        <div class="form group">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            	<label>Agensi/Jabatan Pelaporan</label>
                                <select id="pilih" name="rep_dprmnt" class="form-control">
                                <option value="<?php if(isset($_SESSION['department'])){ echo $_SESSION['department']; } ?>"><?php if(isset($_SESSION['department'])){ echo $_SESSION['department']; } ?></option>
                                <?php include 'include/agensi.php'; ?>
                            	</select>
							</div>
				    		<div class="col-md-6 col-sm-6 col-xs-12">
						  		<label>Bahagian / Unit / Pasukan</label>
                            	<input name="team_" type="text" class="form-control" placeholder="Bahagian / Unit / Pasukan" value="<?php if(isset($_SESSION['team'])){ echo $_SESSION['team']; } ?>">
							</div>
					    </div>
                        </div>
                        <br/>
                        <div class="form group">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            	<label for="States">Negeri</label>
                                <select id="pilih" name="state_" class="form-control">
                                <option value="<?php if(isset($_SESSION['state'])){ echo $_SESSION['state']; } ?>"><?php if(isset($_SESSION['state'])){ echo $_SESSION['state']; } ?></option>
                                <?php include 'include/negeri.php'; ?>
                            	</select>
							</div>
				    		<div class="col-md-6 col-sm-6 col-xs-12">
                            	<label for="Countries">Negara</label>
                                <select id="pilih" name="country_" class="form-control">
                                <option value="<?php if(isset($_SESSION['country'])){ echo $_SESSION['country']; } ?>"><?php if(isset($_SESSION['country'])){ echo $_SESSION['country']; } ?></option>
                                <?php include 'include/negara.php'; ?>
                            	</select>
							</div>
					    </div>
                        </div>
                        <br/>
                        <div class="form group">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            	<label>Pegawai Penerima (DO)</label>
                                <select id="pilih" name="dsk_offcr" class="form-control">
                                <option value="<?php if(isset($_SESSION['do'])){ echo $_SESSION['do']; } ?>"><?php if(isset($_SESSION['do'])){ echo $_SESSION['do']; } ?></option>
                                <?php include 'include/do.php'; ?>
                            	</select>
							</div>
				    		<div class="col-md-6 col-sm-6 col-xs-12">
                            	<label>Nombor Telefon Pegawai Penerima</label>
                            	<input name="dsk_offcr_nom" type="text" class="form-control" placeholder="Nombor Telefon Pegawai Penerima" value="<?php if(isset($_SESSION['do_num'])){ echo $_SESSION['do_num']; } ?>">
							</div>
					    </div>
                        </div>
                        <br/>
                        <div class="form group">
                        <div class="row">
				    		<div class="col-md-6 col-sm-6 col-xs-12">
						  		<label for="Desk Officer E-mail">Emel Pegawai Penerima</label>
                            	<input name="dsk_offcr_mail" type="text" class="form-control" placeholder="Desk Officer E-mail" value="<?php if(isset($_SESSION['do_mail'])){ echo $_SESSION['do_mail']; } ?>">
							</div>
				    		<div class="col-md-6 col-sm-6 col-xs-12">
                            	<label>Pegawai AHO/SFO</label>
                                <select id="pilih" name="aho_offcr" class="form-control">
                                <option value="<?php if(isset($_SESSION['aho_officer'])){ echo $_SESSION['aho_officer']; } ?>"><?php if(isset($_SESSION['aho_officer'])){ echo $_SESSION['aho_officer']; } ?></option>
                                <?php include 'include/aho.php'; ?>
                            	</select>
							</div>
					    </div>
                        </div>
                        <br/>
                        <div class="form group">
                        <div class="row">
				    		<div class="col-md-6 col-sm-6 col-xs-12">
						  		<label>Nombor Telefon AHO/SFO</label>
                            	<input name="aho_nom" type="text" class="form-control" placeholder="Nombor Telefon AHO/SFO" value="<?php if(isset($_SESSION['aho_num'])){ echo $_SESSION['aho_num']; } ?>">
							</div>
				    		<div class="col-md-6 col-sm-6 col-xs-12">
                            	<label>Pasukan Perisikan</label>
                                <select id="pilih" name="intelli_team" class="form-control">
                                <option value="<?php if(isset($_SESSION['intell_team'])){ echo $_SESSION['intell_team']; } ?>"><?php if(isset($_SESSION['intell_team'])){ echo $_SESSION['intell_team']; } ?></option>
                                <?php include 'include/intelligence.php'; ?>
                            	</select>
							</div>
					    </div>
                        </div>
                        <br/>
                        <div class="form group">
                        <div class="row">
				    		<div class="col-md-6 col-sm-6 col-xs-12">
                            	<label>Pegawai SFO/FIO</label>
                                <select id="pilih" name="sfo_offcr" class="form-control">
                                <option value="<?php if(isset($_SESSION['sfo_officer'])){ echo $_SESSION['sfo_officer']; } ?>"><?php if(isset($_SESSION['sfo_officer'])){ echo $_SESSION['sfo_officer']; } ?></option>
                                <?php include 'include/sfo.php'; ?>
                            	</select>
							</div>
				    		<div class="col-md-6 col-sm-6 col-xs-12">
						  		<label>Nombor Telefon SFO/FIO</label>
                            	<input name="sfo_nom" type="text" class="form-control" placeholder="Nombor Telefon SFO/FIO" value="<?php if(isset($_SESSION['sfo_num'])){ echo $_SESSION['sfo_num']; } ?>">
							</div>
					    </div>
                        </div>
                           <br/>
                        <div class="form group">
                        <div class="row">
                        	<div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Kitaran Perisikan Mula</label>
                                <fieldset>
                          			<div class="control-group">
                            		<div class="controls">
                              		<div class="xdisplay_inputx form-group has-feedback">
                                	<input name="intell_strt" type="text" class="form-control has-feedback-left" id="datepicker1" placeholder="Kitaran Perisikan Mula" aria-describedby="inputSuccess2Status" value="<?php if(isset($_SESSION['intell_start'])){ echo $_SESSION['intell_start']; } ?>">
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
                                	<input name="intelli_end" type="text" class="form-control has-feedback-left" id="datepicker2" placeholder="Kitaran Perisikan Tamat" aria-describedby="inputSuccess2Status" value="<?php if(isset($_SESSION['intell_end'])){ echo $_SESSION['intell_end']; } ?>">
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
                          <input type="hidden" name="ngri" value="<?php if(isset($_SESSION['ngri'])) { echo $_SESSION['ngri']; } ?>">
                          <button type="submit" class="btn btn-primary" name="kemas_fir">Kemaskini</button>
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