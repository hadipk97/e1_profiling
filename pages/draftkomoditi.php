<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php include 'include/bar.php'; ?>
<?php include ('include/dbconn.php');
    
$sql = "SELECT COUNT(*) FROM [jim].[dbo].[admin]";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {}
while( $row64 = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {

    $a1 = $row64[0];
     $stmt1 = sqlsrv_query( $conn, "SELECT COUNT(*) FROM [jim].[dbo].[admin] WHERE  id_fir = 'FIR$a1'" );
    if( $stmt1 === false) {}
    while( $row65 = sqlsrv_fetch_array( $stmt1, SQLSRV_FETCH_NUMERIC) ) {
    if ($row65[0] > 0){
        $a = $a1 + 1;
    }else{
        $a = $row64[0]; $a++;
    }
}
?>
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Daftar Baru</h3>
            </div>
        </div>

        <div class="clearfix">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>KOMODITI</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form method="post" action="sent.php">
                                <br />
                                <div class="form group">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label for="Status Ke">Pilih Barang Kes (Komoditi) <span
                                                        style="color: red">*</span></label>
                                                <select name="priority" class="form-control" required>
                                                    <option value="" selected="selected">Sila Pilih</option>
                                                    <option value="Standard">Standard</option>
                                                    <option value="Urgent">Urgent</option>
                                                    <option value="Critical">Critical</option>
                                                    <option value="Important">Important</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="Status Ke">Keutamaan Kes <span
                                                        style="color: red">*</span></label>
                                                <select name="priority" class="form-control" required>
                                                    <option value="" selected="selected">Sila Pilih</option>
                                                    <option value="Standard">Standard</option>
                                                    <option value="Urgent">Urgent</option>
                                                    <option value="Critical">Critical</option>
                                                    <option value="Important">Important</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="ln_solid"></div>
                                <div class="row">
                                    <div class="pull-right">
                                        <input type="hidden" name="ngri" value="<?php echo $ngri; ?>">
                                        <button type="submit" class="btn btn-primary" name="simpan_fir">Simpan</button>
                                    </div>
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-success"
                                            name="sent_fir_new">Hantar</button>
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
<?php } ?>