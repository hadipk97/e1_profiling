<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php include('include/dbconn.php');

$sql = "SELECT id FROM [jim].[dbo].[admin]" . " ORDER BY id DESC";
$stmt = sqlsrv_query($conn, $sql);
if ($stmt === false) {
} else {
    $r = sqlsrv_fetch_array($stmt);
    $id = $r['id'];
    $id++;
?>
    <!-- /top navigation -->
    <?php
    include('include/dbconn.php');
    $id_fir = "FIR" . $a;

    $sql = "SELECT * FROM [jim].[dbo].[profile] WHERE id_fir = '$id_fir'";
    $stmt1 = sqlsrv_query($conn, $sql);
    if (!$stmt1) {
    }
    ?>
    <div class="clearfix">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Senarai Profil <strong><?php echo $_SESSION['id_fir']; ?></strong></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <div class="form group">
                            <div class="row">
                                <div class="box-body">
                                    <table id="profil" class="table table-striped table-border">
                                        <thead>
                                            <tr>
                                                <th style="width: 1%">No</th>
                                                <th>FIR</th>
                                                <th>Nama</th>
                                                <th>Hubungan Jenayah</th>
                                                <th>Tarikh Lahir</th>
                                                <th>Status</th>
                                                <th style="width: 10%">Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $counter = 1;
                                            while ($row1 =  sqlsrv_fetch_array($stmt1)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $counter++; ?></td>
                                                    <td><?php echo $row1['id_fir']; ?></td>
                                                    <td><?php echo $row1['firstname']; ?>
                                                        <?php echo $row1['lastname']; ?></td>
                                                    <td><?php echo $row1['crimetree']; ?></td>
                                                    <td><?php echo $row1['birth']; ?></td>
                                                    <td><?php echo $row1['status']; ?></td>
                                                    <td>
                                                        <center>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="col-md-4">
                                                                        <form method="post" action="sent.php">
                                                                            <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                                                                            <button type="submit" class="btn btn-primary btn-xs" title="Kemaskini" name="edit_pro"><span class="glyphicon glyphicon-pencil"></span></button>
                                                                        </form>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <form method="post" action="delete.php">
                                                                            <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                                                                            <input type="hidden" name="id_profil" value="<?php echo $row1['id_profil']; ?>">
                                                                            <input type="hidden" name="id_fir" value="<?php echo $row1['id_fir']; ?>">
                                                                            <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Padam Data Ini ???');" name="delete_pro" title="Padam"><span class="glyphicon glyphicon-trash"></span></button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </center>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <div class="pull-right">
                                        <form method="post" action="reg.php">
                                            <input type="hidden" name="id_fir" value="<?php echo $_SESSION['id_fir'] ?>">
                                            <button type="submit" class="btn btn-indigo" name="daftar_profil" title="Tambah"><span class="glyphicon glyphicon-plus"></span></button>
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
<?php } ?>