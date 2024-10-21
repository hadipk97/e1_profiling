
                          <div class="row">
                          <?= (!empty($_GET['individu0']))?  "<div class=\"col-md-12\"><p>PROFIL</p></div>":""?>

<?php for ($i=0; $i < $f; $i++) { 
${'ttl_profil'.$i} = 0;
  if(!empty($_GET['individu'.$i])){ ?>


                          <div class="col-md-<?= $tb; ?> ">
                          <div class="x_panel table-responsive"><p style="text-transform: uppercase"><?php echo (!empty($_GET['individu'.$i]))? $_GET['individu'.$i]:""; ?>&ensp;(PROFIL)</p>
                            <table class="table table-hover table-bordered">
                              <thead>
                                <tr style="font-size: 10px">
                                  <th>#</th>
                                  <th>ID FIR</th>
                                  <th>ID Profil</th>
                                  <th>Status</th>
                                  <th>CrimeTree</th>
                                  <th>Style</th>
                                  <th>Relation</th>
                                  <th>Firstname</th>
                                  <th>MiddleName</th>
                                  <th>Lastname</th>
                                  <th>NickName</th>
                                  <th>Language</th>
                                  <th>Gender</th>
                                  <th>Birth</th>
                                  <th>Age</th>
                                  <th>Race</th>
                                  <th>Ethnic</th>
                                  <th>Country</th>
                                  <th>Marital</th>
                                  <th>Nationality</th>
                                </tr>
                              </thead>
                              <tbody>
<?php 
include 'include/dbconn.php';
$invidu_firstname = $_GET['individu'.$i];

  $stmt1 = sqlsrv_query( $conn, "SELECT * FROM [jim].[dbo].[profile] WHERE firstname = '$invidu_firstname'" );
  $user_id = sqlsrv_fetch_array( $stmt1);

  $stmt = sqlsrv_query( $conn, "SELECT * FROM [jim].[dbo].[profile] WHERE id_profil = '$user_id[id_profil]'" );
  if(!$stmt){}
  $c = 1;
  while( $r = sqlsrv_fetch_array( $stmt)) {

?>
                                <tr style="font-size: 10px">
                                  <td scope="row"><?php echo $c; ?>
                                  <?php
                                  for ($z=0; $z < 23; $z++) { 
                                    if (in_array($z,array(1,2,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22), TRUE)) {
                                    $coloum1 = $r[$z]; $coloum2 = $m[$z]; include 'fomula.php'; 
                                    ${'ttl_profil'.$i} += ${'g'.$z}; 
                                    }
                                  }
                                  ?>
                                </tr>
<?php $c++; } ?>
                              </tbody>
                            </table>
                          </div>
                        </div>

<?php } }?>
                        </div>