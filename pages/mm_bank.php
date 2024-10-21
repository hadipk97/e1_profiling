
                          <div class="row">
                          <?= (!empty($_GET['individu0']))? "<div class=\"col-md-12\"><p>BANK</p></div>":""?>

<?php for ($i=0; $i < $f; $i++) { 
${'ttl_bank'.$i} = 0;
  if(!empty($_GET['individu'.$i])){ 
  include 'include/dbconn.php';

  $invidu_firstname = $_GET['individu'.$i];

  $stmt1 = sqlsrv_query( $conn, "SELECT * FROM [jim].[dbo].[profile] WHERE firstname = '$invidu_firstname'" );
  $user_id = sqlsrv_fetch_array( $stmt1);


  $count ="";
  $stmt = sqlsrv_query( $conn, "SELECT * FROM [jim].[dbo].[bank] WHERE id_profil = '$user_id[id_profil]'" );
  if(!$stmt){}
  while( $r = sqlsrv_fetch_array( $stmt)) {
    $count .=",";
    $count .='"'.$r['id_profil'].'"';
  }
  //echo  $count;
//echo sizeof(array($count));
  if(sizeof(array($count)) > 0){

    ?>


                          <div class="col-md-<?= $tb; ?> ">
                          <div class="x_panel table-responsive"><p style="text-transform: uppercase"><?php echo (!empty($_GET['individu'.$i]))? $_GET['individu'.$i]:""; ?>&ensp;(BANK)</p>
                            <table class="table table-hover table-bordered">
                              <thead>
                                <tr style="font-size: 10px">
                                  <th>#</th>
                                  <th>ID Profil</th>
                                  <th>Bank</th>
                                  <th>Pemegang Akaun</th>
                                  <th>Jenis</th>
                                  <th>Lokasi</th>
                                  <th>No.acc</th>
                                  <th>Baki</th>
                                  <th>Alamat Bank</th>
                                </tr>
                              </thead>
                              <tbody>
<?php 
include 'include/dbconn.php';

  $stmt = sqlsrv_query( $conn, "SELECT * FROM [jim].[dbo].[bank] WHERE id_profil = '$user_id[id_profil]'" );
  if(!$stmt){}
  $c = 1;
  while( $r = sqlsrv_fetch_array( $stmt)) {

?>
                                <tr style="font-size: 10px">
                                  <td scope="row"><?php echo $c; ?>
                                  <?php
                                  for ($z=0; $z < 10; $z++) { 
                                    if (in_array($z,array(1,2,3,4,5,6,7,8), TRUE)) {
                                    $coloum1 = $r[$z]; $coloum2 = $bk[$z]; include 'fomula.php'; 
                                      ${'ttl_bank'.$i} += ${'g'.$z}; 
                                    }
                                  }
                                   ?>
                                </tr>
<?php $c++; } ?>
                              </tbody>
                            </table>
                          </div>
                        </div>

<?php } } }?>
                        </div>