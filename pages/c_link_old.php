<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php include 'include/bar.php'; ?>
<?php include 'cssscript.php'; ?>
<!-- page content -->
    <section class="content">
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Padanan Data <!--<blink><font color="Red">R&D Stage</font></blink>--></h3>
            </div>
          </div>
          <button type="button" onclick="topFunction()" class="btn btn-warning fa fa-angle-down" id="myBtn" data-toggle="tooltip" data-placement="left" title="Go to bottom"></button>
          <button type="button" onclick="topFunction1()" class="btn btn-success fa fa-angle-up" id="myBtn1" data-toggle="tooltip" data-placement="left" title="Go to top"></button>
          <div class="clearfix">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12"><center>
                <div class="x_panel">
                  <div class="x_title">   
                      <div class="box-body">
                        <form autocomplete="off" action="c_link.php" method="post">
                          <div class="row">
                          <div class="col-md-3"></div>
                          <div class="col-md-6" align="Center">
<?php for ($i=0; $i < $f; $i++) { ?>
                          <div id="A<?= $i ?>" <?= ($i == "0" || !empty($_POST['individu'.$i]))? "":"class=\"collapse\"" ?>>
                            <div class="autocomplete<?= $i ?>" style="width:300px;">
                              <input id="myauto_complete<?= $i ?>" type="text" name="individu<?= $i ?>" placeholder="Nama <?= ($i == "0")? "Target":"Individu" ?> " class="form-control" value="<?php echo (!empty($_POST['individu'.$i]))? $_POST['individu'.$i]:""; ?>" <?= ($i == "0")? "required":"" ?>>
                            </div>
<?php if($i == ($f-1)){echo "&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;";}else{ ?><button type="button" class="btn-sm btn btn-default" data-toggle="collapse" data-target="#A<?= $i+1 ?>"><span>+/-</span></button><?php } ?>
                          </div>
<?php  $i-1;  } ?>
                          
                          <br>
                          <button type="submit" class="btn btn-primary form-control" style="width:345px;">Semak Maklumat</button>
                          </div>
                          <div class="col-md-3"></div>
                          </div>
                        </form>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
<?php 
if(!empty($_POST['individu0'])){

$invidu_firstname = $_POST['individu0'];

$stmt1 = sqlsrv_query( $conn, "SELECT * FROM [jim].[dbo].[profile] WHERE firstname = '$invidu_firstname'" );
$user_id = sqlsrv_fetch_array( $stmt1);

$stmt = sqlsrv_query( $conn, "SELECT * FROM [jim].[dbo].[profile] WHERE id_profil = '$user_id[id_profil]'" );
$m = sqlsrv_fetch_array( $stmt);

$stmt = sqlsrv_query( $conn, "SELECT * FROM [jim].[dbo].[physical] WHERE id_profil = '$user_id[id_profil]'" );
$ph = sqlsrv_fetch_array( $stmt);

$stmt = sqlsrv_query( $conn, "SELECT * FROM [jim].[dbo].[ic] WHERE id_profil = '$user_id[id_profil]'" );
$ic = sqlsrv_fetch_array( $stmt);

$stmt = sqlsrv_query( $conn, "SELECT * FROM [jim].[dbo].[passport] WHERE id_profil = '$user_id[id_profil]'" );
$pp = sqlsrv_fetch_array( $stmt);

$stmt = sqlsrv_query( $conn, "SELECT * FROM [jim].[dbo].[drivelicense] WHERE id_profil = '$user_id[id_profil]'" );
$ls = sqlsrv_fetch_array( $stmt);

$stmt = sqlsrv_query( $conn, "SELECT * FROM [jim].[dbo].[transportation] WHERE id_profil = '$user_id[id_profil]'" );
$kd = sqlsrv_fetch_array( $stmt);

$stmt = sqlsrv_query( $conn, "SELECT * FROM [jim].[dbo].[bank] WHERE id_profil = '$user_id[id_profil]'" );
$bk = sqlsrv_fetch_array( $stmt);

$stmt = sqlsrv_query( $conn, "SELECT * FROM [jim].[dbo].[com_pany] WHERE id_profil = '$user_id[id_profil]'" );
$cm = sqlsrv_fetch_array( $stmt);

$stmt = sqlsrv_query( $conn, "SELECT * FROM [jim].[dbo].[msocial] WHERE id_profil = '$user_id[id_profil]'" );
$mm = sqlsrv_fetch_array( $stmt);

$stmt = sqlsrv_query( $conn, "SELECT * FROM [jim].[dbo].[house] WHERE id_profil = '$user_id[id_profil]'" );
$rm = sqlsrv_fetch_array( $stmt);
}
?>
            <?php include 'mm_profile.php';?>
            <?php include 'mm_physical.php';?>
            <?php include 'mm_ic.php';?>
            <?php include 'mm_passport.php';?>
            <?php include 'mm_lesen.php';?>
            <?php include 'mm_kenderaan.php';?>
            <?php include 'mm_bank.php';?>
            <?php include 'mm_company.php';?>
            <?php include 'mm_media.php';?>
            <?php include 'mm_rumah.php';?>

<?php if(!empty($_POST['individu0'])){ ?>
  <div class="row">
    <div class="x_title"></div>
    <?php for ($i=0; $i < $f; $i++) { 
        if(!empty($_POST['individu'.$i])){ ?>
      <?php if($i == 0) { ?>
        <div class="col-md-<?= $tb ?>"></div>
      <?php }else{ ?>
        <div class="col-md-<?= $tb ?>">
            <?php $prts = (${'ttl'.$i} + ${'ttl_profil'.$i} + ${'ttl_profil'.$i} + ${'ttl_ic'.$i} + ${'ttl_passport'.$i} + ${'ttl_lesen'.$i} + ${'ttl_bank'.$i} + ${'ttl_company'.$i} + ${'ttl_media'.$i} + ${'ttl_rumah'.$i}) ;
              $round = round(($prts/163) * 100, 2);
              if ($round <= 25) {
                $color = "286090";
              }elseif($round <= 52) {
                $color = "169f85";
              }elseif($round <= 75) {
                $color = "ec971f";
              }elseif($round <= 100) {
                $color = "c9302c";
              }else{
                $color = "798ea2";
              }
              ?>
          <center><font style="font-size: 50px;color: #<?= $color ?>"><?= $round ?>%</font></center>
        </div>
    <?php } ?>
    <?php } } ?>
  </div>
<?php } ?>
            </div>
          </div>
        </div>
      </section>
       <div class="modal fade" id="edit_loop" tabindex="-1" role="dialog" aria-labelledby="edit_loop" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <form method="post" action="edit.php">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Edit Amount of Field (The Big Number will take time to be done)</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <label>No of Field</label>
                <input type="Number" class="form-control" name="loop_no" min="1" value="<?php echo $f ; ?>">
                <br>
                <label>Table Size</label>
                <input type="Number" class="form-control" name="table_no" min="1" max="12" value="<?= $tb; ?>">
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="edit_loop_btn">Save</button>
          </div>
        </form>
        </div>
      </div>
    </div>

<?php include 'jsscript.php'; ?>
</body>
</html>