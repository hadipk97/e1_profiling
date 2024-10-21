<?php
include('include/dbconn.php');
?>
<h3>Pendaftaran</h3>
<form method="post" action="sent.php">
    <?php
    $sql = "SELECT * FROM [jim].[dbo].[mapk_daftar] WHERE id_fir = '$_SESSION[id_fir]'";
    $stmt = sqlsrv_query($conn, $sql);
    if ($stmt == false) {
    }
    $row = sqlsrv_fetch_array($stmt);
    if ($row['fir'] = $_SESSION['id_fir']) {
    ?>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label>Negeri</label>
                    <input type="text" class="form-control" value="<?php echo $row['negeri']; ?>" disabled>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label>Stesen</label>
                    <input type="text" class="form-control" value="<?php echo $row['stesen']; ?>" disabled>
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label>No. Kertas Siasatan</label>
                    <input type="text" class="form-control" disabled placeholder="Record ID (FIR)" value="<?php echo $row['fir']; ?>">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label>No Repot Polis</label>
                    <input type="text" class="form-control" value="<?php echo $row['repot']; ?>" disabled>
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <label for="Tarikh Kes">Tarikh Kejadian</label>
                    <input type="text" class="form-control" value="<?php echo $row['tarikh_kejadian']; ?>" disabled>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <label for="Masa Kes">Masa Kejadian</label>
                    <input type="text" class="form-control" value="<?php echo date('H:i A', strtotime($row['masa_kejadian'])); ?>" disabled>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label for="Masa Kes">Alamat</label>
                    <textarea type="text" class="form-control" rows="3" disabled><?php echo $row['alamat']; ?></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label>Jenis Kes</label>
                    <input type="text" class="form-control" value="<?php echo $row['jenis_kes']; ?>" disabled>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <label for="Daerah">Daerah</label>
                    <input type="text" class="form-control" value="<?php echo $row['daerah']; ?>" disabled>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <label for="Poskod">Poskod</label>
                    <input type="text" class="form-control" value="<?php echo $row['poskod']; ?>" disabled>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <label for="Negeri">Negeri</label>
                    <input type="text" class="form-control" value="<?php echo $row['alamat_negeri']; ?>" disabled>
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <label for="Operasi">Nama Operasi</label>
                    <input type="text" class="form-control" value="<?php echo $row['nama_operasi']; ?>" disabled>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <label>Tempoh Operasi</label>
                    <input type="text" class="form-control" value="<?php echo $row['tempoh']; ?>" disabled>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <label>Nama Pegawai Penyiasat</label>
                    <input type="text" class="form-control" value="<?php echo $row['pegawai']; ?>" disabled>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <label>Telefon Bimbit </label>
                    <input type="text" class="form-control" value="<?php echo $row['telefon']; ?>" disabled>
                </div>
            </div>
        </div>
    <?php } ?>
    <hr>
    <table class="table table-striped table-border">
        <thead>
            <th>No</th>
            <th>Kes Kekurangan Cukai</th>
            <th>Kekurangan Cukai Dipungut</th>
            <th>Kesalahan Disiasat</th>
            <th>Status Kes</th>
            <th>Bayaran</th>
            <th>Catatan</th>
            <th>Punca Perolehan Kes</th>
            <th>Aduan</th>
            <th>Serahan Kes Dari Bahagian / Agensi</th>
            <th>Tarikh</th>
        </thead>
        <tbody>
            <?php
            $i = 1;
            $sql = "SELECT * FROM [jim].[dbo].[mapk_fakta] WHERE id_fir = '$_SESSION[id_fir]'";
            $stmt = sqlsrv_query($conn, $sql);
            $rows = sqlsrv_has_rows($stmt);

            if (!$rows) {
                echo "<tr>";
                echo "<td colspan = '8'>Tiada Data</td>";
                echo "</tr>";
            } else {
                while ($row = sqlsrv_fetch_array($stmt)) {
                    echo "<tr>";
                    echo '<td>' . $i++ . '</td>';
                    echo "<td>$row[cukai]</td>";
                    echo "<td>$row[pungut]</td>";
                    echo "<td>$row[kesalahan]</td>";
                    echo "<td>$row[status]</td>";
                    echo "<td>$row[bayaran]</td>";
                    echo "<td>$row[lain_lain]</td>";
                    echo "<td>$row[punca]</td>";
                    echo "<td>$row[aduan]</td>";
                    echo "<td>$row[serahan]</td>";
                    echo "<td>$row[tarikh]</td>";
                    echo "<tr>";
                }
            }
            ?>
        </tbody>
    </table>
</form>
<h3>Profile</h3>
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
    $id_fir = $_SESSION[id_fir];

    $sql = "SELECT * FROM [jim].[dbo].[profile] WHERE id_fir = '$id_fir'";
    $stmt234 = sqlsrv_query($conn, $sql);

    ?>
    <div class="clearfix">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Senarai Profil <strong></strong></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <div class="form group">
                            <div class="row">
                                <div class="box-body">
                                    <table class="table table-striped table-border">
                                        <thead>
                                            <tr>
                                                <th style="width: 1%">No</th>
                                                <th>FIR</th>
                                                <th>Nama</th>
                                                <th>Hubungan Jenayah</th>
                                                <th>Tarikh Lahir</th>
                                                <th>Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $counter = 1;
                                            while ($row2 =  sqlsrv_fetch_array($stmt234)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $counter++; ?></td>
                                                    <td><?php echo $row2['id_fir']; ?></td>
                                                    <td><?php echo $row2['firstname']; ?>
                                                        <?php echo $row2['lastname']; ?></td>
                                                    <td><?php echo $row2['crimetree']; ?></td>
                                                    <td><?php echo $row2['birth']; ?></td>
                                                    <td><?php echo $row2['status']; ?></td>

                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<h3>Barang Kes </h3>
<div class="clearfix">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <table class="table table-striped table-border">
                    <thead>
                        <th>Komoditi</th>
                        <th>No. Kontena</th>
                        <th>Unit</th>
                        <th>Kuantiti</th>
                        <th>Harga Seunit</th>
                        <th>Jumlah Harga</th>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM [jim].[dbo].[barang_kes] WHERE id_fir = '$_SESSION[id_fir]'";
                        $stmt = sqlsrv_query($conn, $sql);
                        $rows = sqlsrv_has_rows($stmt);
                        if (!$rows) {
                            echo "<tr>";
                            echo "<td colspan = '8'>Tiada Data</td>";
                            echo "</tr>";
                        } else {
                            while ($row = sqlsrv_fetch_array($stmt)) {
                                echo "<tr>";
                                echo "<td>$row[komoditi]</td>";
                                echo "<td>$row[nokontena]</td>";
                                echo "<td>$row[unit]</td>";
                                echo "<td>$row[kuantiti]</td>";
                                echo "<td>$row[hargaperunit]</td>";
                                echo "<td>$row[hargatotal]</td>";
                                echo "</tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>


        </div>
        <hr>
    </div>
    <!-- end -->
    <!-- <form method="post" action="sent.php">
        <div class="pull-right">
            <button type="submit" class="btn btn-success" name="sent_fir_new">Hantar</button>
    </form> -->