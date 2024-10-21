<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php include 'include/bar.php'; ?>
<?php include ('include/dbconn.php');
    
$sql = "SELECT COUNT(*) FROM [jim].[dbo].[diari]";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
}
while( $row64 = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {

$a = $row64[0];
$a++;
?>
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
                    <form role="form" method="post" action="reg.php" enctype="multipart/form-data">
                    <div class="form group">
                        <div class="row">
                        <div class="box-body">

                       <div class="col-md-3"></div>   
                      <div class="form group">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <label for="Record Id">Record ID (FIR)</label>
                              <input type="text" class="form-control" placeholder="Record ID (FIR)" value="<?php if(isset($_SESSION['id_fir'])) { echo $_SESSION['id_fir']; } ?>" width="50%" disabled>
                              <input type="hidden" name="diari_no" value="<?php echo $a; ?>">
<?php } ?>
              </div> 
              </div> 
            </div>
            <div class="col-md-3"></div>
            <br/>
              <div class="form group">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label>Nama Petugas</label>
                  <input name="namep" type="text" class="form-control" placeholder="Nama Petugas" value="<?php echo $fulname; ?>">
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <label>Jawatan</label>
                  <?php  $r=  sqlsrv_fetch_array( sqlsrv_query( $conn, "SELECT * FROM [jim].[dbo].[u_role] WHERE id = '$role'" )); ?>
                  <input name="jwtan" type="text" class="form-control" placeholder="Jawatan" value="<?php echo $r["role"]; ?>">
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
                  <input style="text-transform: uppercase" type="text" class="form-control pull-right" id="datepicker" name="trik" value="<?php echo $date ; ?>">
                  </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                 <div class="bootstrap-timepicker">
                  <label for="exampleMasa">Masa Tugas</label>
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
                    <input style="text-transform: uppercase" type="text" class="form-control timepicker" id="timepicker" name="msa">
                    
             </div>
              </div>
				  </div>
              </div>
            </div>
              <br/>
              <div class="form group">
              <div class="row">
                  <div class="lampiran_diari col-md-6">
                    <button type="button" class="add_form_field btn btn-primary btn-xs"><span class="fa fa-plus"></span></button>
                    <div><input type="file" name="lampiran[]"/></div>
                  </div>
                <div class="col-md-6">
                  <label for="exampleInputEmail1">Butiran Tugas</label><font color="red">&ensp;* <a onclick="startDictation()"><img src="../img/mic.svg" height="auto" width="15px"></a></font>
                  <textarea class="form-control" rows="5" id="transcript" name="note" placeholder="Butiran...." required></textarea>
                  </div>
              </div>
              </div>
              <br/>
                        <ul class="list-inline pull-right">
                          <input type="hidden" name="id_fir" value="<?php if(isset($_SESSION['id_fir'])) { echo $_SESSION['id_fir']; } ?>">
                            <button type="submit" class="btn btn-primary next-step" name="simpan_diari">Simpan</button>
                            </form>
                        </ul>

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
<script>
$(document).ready(function() {
    var max_fields      = 10;
    var wrapper         = $(".lampiran_diari"); 
    var add_button      = $(".add_form_field"); 
    
    var x = 1; 
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++; 
            $(wrapper).append('<div><input type="file" name="lampiran[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
        }
    else
    {
    alert('You Reached the limits')
    }
    });
    
    $(wrapper).on("click",".delete", function(e){ 
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
<script>
  function startDictation() {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      //recognition.lang = "<?php// echo $r['lang'] ?>";
      recognition.lang = "ms-MY";
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById('transcript').value = e.results[0][0].transcript;
        recognition.stop();
        document.getElementById('labnol').submit();
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  }
</script>
  </body>
</html>