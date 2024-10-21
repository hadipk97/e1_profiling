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
                <h3>DIARI KES</h3>
              </div>
            </div>

            <div class="clearfix">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Isi Diari Kes</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form role="form" method="post" action="edit.php">
                    <div class="form group">
                        <div class="row">
                        <div class="box-body">

                       <div class="col-md-3"></div>   
                      <div class="form group">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <label for="Record Id">Record ID (FIR)</label>
                              <input type="text" class="form-control" placeholder="Record ID (FIR)" value="<?php if(isset($_SESSION['id_fir'])) { echo $_SESSION['id_fir']; } ?>" width="50%" disabled>
              </div> 
              </div> 
            </div>
            <div class="col-md-3"></div>
            <br/>
              <div class="form group">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label>Nama Petugas</label>
                  <input name="namep" type="text" class="form-control" placeholder="Nama Petugas" value="<?php if(isset($_SESSION['nm_ptgas'])) { echo $_SESSION['nm_ptgas']; } ?>">
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <label>Jawatan</label>
                  <input name="jwtan" type="text" class="form-control" placeholder="Jawatan" value="<?php if(isset($_SESSION['jwt'])) { echo $_SESSION['jwt']; } ?>">
              </div>
              </div>
             </div>

              <br/>
              <div class="form group">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label>Tarikh Tugas</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>          
                  <input style="text-transform: uppercase" type="text" class="form-control pull-right" id="datepicker" name="trik" value="<?php if(isset($_SESSION['trkh'])) { echo $_SESSION['trkh']; } ?>">
                  </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="exampleMasa">Masa Tugas</label>
                  <div class="input-group">
                    <input style="text-transform: uppercase" type="text" class="form-control timepicker" name="msa" value="<?php if(isset($_SESSION['ms'])) { echo $_SESSION['ms']; } ?>">
                    <div class="input-group-addon"><em class="fa fa-clock-o"></em></div>
             </div>
              </div>
              </div>
            </div>
              <br/>
              <div class="form group">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <label for="exampleInputEmail1">Butiran Tugas</label><font color="red">&ensp;*</font>
                  <textarea  style="text-transform: uppercase" class="form-control" rows="5" id="exampleInputEmail" name="note" placeholder="Butiran...." required><?php if(isset($_SESSION['butiran'])) { echo $_SESSION['butiran']; } ?></textarea>
                  </div>
              </div>
              </div>
              <br/>
                        <ul class="list-inline pull-right">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) { echo $_SESSION['id_fir']; } ?>">
                          <input type="hidden" name="id" value="<?php if(isset($_SESSION['id'])) { echo $_SESSION['id']; } ?>">
                            <button type="submit" class="btn btn-primary next-step" name="kemaskini_diari1">Kemaskini</button>
                            </form>
                        </ul>
                        <table>
                          <?php 
                          $sql = "SELECT * FROM [jim].[dbo].[lampiran] where diari_no = '$_SESSION[diari_no]'";
                            $stmt = sqlsrv_query( $conn, $sql );
                            if( $stmt === false) {}
                              while($row2=  sqlsrv_fetch_array($stmt)){
                                ?>
                          <tr>
                            <td>
                              <a href="upload/<?php echo $row2['filename']; ?>" class='btn-link' target='_blank'><?php echo $row2['filename']; ?></a>&ensp;
                            </td>
                            <td>
                              <form method="post" action="delete.php">
                                <input type="hidden" name="id" value="<?php echo $row2['id']; ?>">
                                <button type="submit" class="btn btn-danger btn-xs" name="dele_atc" onclick="return confirm('Padam Data Ini ???')"><span class="fa fa-trash"></span></button>
                              </form>
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