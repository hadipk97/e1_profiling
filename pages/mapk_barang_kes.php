<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php include('include/dbconn.php');

$totalfromdb = 0;
$sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin]";
$stmt = sqlsrv_query($conn, $sql);
if ($stmt === false) {
}
while ($row64 = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_NUMERIC)) {

    $a1 = $row64[0];
    $stmt1 = sqlsrv_query($conn, "SELECT COUNT(*) FROM [jim].[dbo].[admin] WHERE  id_fir = 'FIR$a1'");
    if ($stmt1 === false) {
    }
    while ($row65 = sqlsrv_fetch_array($stmt1, SQLSRV_FETCH_NUMERIC)) {
        if ($row65[0] > 0) {
            $a = $a1 + 1;
        } else {
            $a = $row64[0];
            $a++;
        }
    }
?>
    <!-- /top navigation -->

    <!-- page content -->
    <!-- <div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Daftar Baru</h3>
            </div>
        </div> -->

    <div class="clearfix">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <h2>KOMODITI SEDIA ADA</h2>
                    <table class="table table-striped table-border">
                        <thead>
                        <th>Komoditi</th>
                        <th>No. Kontena</th>
                        <th>Unit</th>
                        <th>Kuantiti</th>
                        <th>Harga Seunit</th>
                        <th>Jumlah Harga</th>
                        <th>Padam Komoditi</th>
                        </thead>
                        <tbody>
                        <?php
                            $sql = "SELECT * FROM [jim].[dbo].[barang_kes] WHERE id_fir = '$_SESSION[id_fir]'";
                            $stmt = sqlsrv_query($conn, $sql);
                            $rows = sqlsrv_has_rows( $stmt );
                            if(!$rows){
                                echo "<tr>";
                                echo "<td colspan = '8'>Tiada Data</td>";
                                echo "</tr>";
                            }else{
                                while($row = sqlsrv_fetch_array($stmt)){
                                    $totalfromdb += $row['hargatotal'];
                                    echo "<tr>";
                                    echo "<td>$row[komoditi]</td>";
                                    echo "<td>$row[nokontena]</td>";
                                    echo "<td>$row[unit]</td>";
                                    echo "<td>$row[kuantiti]</td>";
                                    echo "<td>$row[hargaperunit]</td>";
                                    echo "<td class ='hargatotalfromdb'>$row[hargatotal]</td>";
                                    echo "<td><button type='button' id='$row[id]' class='trash'><span><i class='fa fa-trash primary' style='color: red;'></i></span></button></td>";
                                    echo "</tr>";
                                }
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
                <div class="x_panel">
                    <div class="x_content">
                        <h2>TAMBAH KOMODITI</h2>
                        <div class="row">
                            <div class="col-sm-3">
                                <button type="button" id="add_komoditi" class="btn btn-primary">Tambah <span><i class="fa fa-plus primary" style="color: white;"></i></span></button>
                            </div>
                        </div>
                        <!-- hidden select list -->
                        <div class="container" style="display:none" id="list_select_komoditi">
                            <div class="row">
                                <div class="col-sm-4">
                                    <select id="komoditi_" name="komoditi[]" class="form-control" required>
                                        <?php include 'include/komoditi.php' ?>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <input style="text-transform: uppercase" type="text" class="form-control" id="nokontena_" placeholder="No Kontena" name="nokontena[]" required>
                                </div>
                                <div class="col-sm-2">
                                    <select id="komoditi_" name="unit[]" class="form-control" required>
                                        <?php include 'include/komoditi_unit.php' ?>
                                    </select>
                                </div>
                                <div class="col-sm-1">
                                    <input style="text-transform: uppercase" type="number" class="form-control" id="kuantiti_" onkeyup="countHargaTotalFromKuantiti(this.value, this.id)" placeholder="##" name="kuantiti[]" required>
                                </div>
                                <div class="col-sm-1">
                                    <input style="text-transform: uppercase" type="float" class="form-control" id="harga_" onkeyup="countHargaTotalFromHarga(this.value, this.id)" placeholder="RM" name="harga[]" required>
                                </div>
                                <div class="col-sm-2">
                                    <input style="text-transform: uppercase" type="float" class="form-control" id="hargatotal_" name="hargatotal[]" readonly>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <!-- end -->
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form method="post" action="sent.php">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="Status Ke">Pilih Barang Kes (Komoditi) <span style="color: red">*</span></label>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="Status Ke">No Kontena<span style="color: red">*</span></label>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="Status Ke">Unit<span style="color: red">*</span></label>
                                    </div>
                                    <div class="col-sm-1">
                                        <label for="Status Ke">Kuantiti<span style="color: red">*</span></label>
                                    </div>
                                    <div class="col-sm-1">
                                        <label for="Status Ke">Harga seunit (RM)<span style="color: red">*</span></label>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="Status Ke">Jumlah Harga (RM)<span style="color: red">*</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="container" id="list_komoditi" data-list_length='0'>

                            </div>
                    </div>
                    <hr>
                    <div class="col-sm-3">
                        <h2>JUMLAH KESELURUHAN: </h2>
                    </div>
                    <div class="col-sm-2">
                        <input style="text-transform: uppercase" type="text" class="form-control" id="total" name="total" value="RM <?php echo $totalfromdb ?>" readonly>
                    </div>
                    <div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="pull-right">
                            <input name="fir_" type="hidden" value="<?php echo $_SESSION['id_fir'] ?>">
                            <button type="button" id="clear_komoditi" class="btn btn-warning">Reset <span><i class="fa fa-refresh" style="color: white;"></i></span></button>
                            <button type="submit" id="simpan_komoditi" class="btn btn-primary" name="simpan_komoditi">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /page content -->

    <!-- footer content -->
    <!-- /footer content -->
    <!-- </div>
</div> -->

    <!-- jQuery -->
    <?php include 'include/komoditi_js.php'; ?>
    </body>

    </html>
<?php } ?>