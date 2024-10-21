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
                <h3>PENDAFTARAN PENGGUNA</h3>
              </div>
            </div>

            <div class="clearfix">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Maklumat Peribadi</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" method="post" action="dd_user.php" onSubmit="return validate();">

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Penuh <span style="color: red">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" placeholder="Nama Penuh" class="form-control col-md-7 col-xs-12" name="n_penuh" required>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Username">Nama Pengguna <span style="color: red">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" placeholder="Nama Penguna" class="form-control col-md-7 col-xs-12" name="userN" required>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Katalaluan <span style="color: red">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input id="password" type="password" placeholder="Katalaluan" class="form-control" name="pass" required>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Pengesahan Katalaluan <span style="color: red">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input id="confirm_password" type="password" name="password2" placeholder="Pengesahan Katalaluan" class="form-control" required>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="UserType">Negeri <span style="color: red">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control col-md-7 col-xs-12" name="ngri" required>
                                <option selected="selected" disabled>Sila Pilih</option>
                                <?php include 'include/negeri1.php'; ?>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Emel <span style="color: red">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" placeholder="Email" class="form-control col-md-7 col-xs-12" name="email" required>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">No Telefon </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" class="form-control col-md-7 col-xs-12" placeholder="No Telefon" name="tel">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Jawatan <span style="color: red">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" placeholder="Jawatan" name="jwt" required>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="UserType">Jenis Penguna <span style="color: red">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="pilih" class="form-control col-md-7 col-xs-12" name="j_user" required>
                                <option selected="selected" disabled>Sila Pilih</option>
                                <option value="4">Administrator</option>
                                <option value="0">Ketua Unit</option>
                                <option value="1">Pegawai Pendaftar</option>
                                <option value="2">Pegawai Siasatan</option>
                                <option value="3">Pengarah</option>
                                
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="UserType">Avatar </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <p>
                      <div class="row">
                      <div class="col-sm-3">
                        <img src="../dist/img/avatar.png" class="img-circle" height="60px" width="60px">
                        <input type="radio" class="flat" name="avatar" id="avatarM" value="avatar.png" checked="" /> 
                        <br>

                        <img src="../dist/img/avatar2.png" class="img-circle" height="60px" width="60px">
                        <input type="radio" class="flat" name="avatar" id="avatarF" value="avatar2.png" />
                      </div> 
                      <div class="col-sm-3">
                        <img src="../dist/img/avatar3.png" class="img-circle" height="60px" width="60px">
                        <input type="radio" class="flat" name="avatar" id="avatarM" value="avatar3.png" /> 
                        <br>

                        <img src="../dist/img/avatar04.png" class="img-circle" height="60px" width="60px">
                        <input type="radio" class="flat" name="avatar" id="avatarF" value="avatar04.png" />
                      </div>
                      <div class="col-sm-3">
                        <img src="../dist/img/avatar5.png" class="img-circle" height="60px" width="60px">
                        <input type="radio" class="flat" name="avatar" id="avatarM" value="avatar5.png" />
                      </div>
                        </div>
                      </p>
                      </div>
                      </div>
                      <div class="ln_solid"></div>
                      <center>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Batal</button>
                          <button id="send" type="submit" class="btn btn-success" name="daftar_user">Simpan</button>
                        </div>
                      </div>
                      </center>
                    </form>
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
    <!-- <script src="../gentelella-master/vendors/validator/validator.js"></script> -->
<script>
  var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Katalaluan Tidak Sepadan");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
  </body>
</html>