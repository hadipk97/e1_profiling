<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php include('include/dbconn.php');
/*
    $stmt1 = sqlsrv_query( $conn, "SELECT COUNT(*) FROM [jim].[dbo].[admin] WHERE  id_fir = 'FIR$row64[0]'" );
    if( $stmt1 === false) {}
    while( $row65 = sqlsrv_fetch_array( $stmt1, SQLSRV_FETCH_NUMERIC) ) {
        
    if ($row65[0] > 0){
        $stmt2 = sqlsrv_query( $conn, "SELECT * FROM [jim].[dbo].[admin] ORDER BY id DESC");
        $r = sqlsrv_fetch_array($stmt2);

        $str = $r['id_fir'];
        $int = (int) filter_var($str, FILTER_SANITIZE_NUMBER_INT);
        $a = $int + 1;
    }*/
//else{$a = $row64[0]; $a++;}
// }

//$a++;
$sql = "SELECT * FROM [jim].[dbo].[mapk_aktiviti]";
$stmt = sqlsrv_query($conn, $sql);
if ($stmt == false) {
}
$row = sqlsrv_fetch_array($stmt);
if ($row['id_fir'] = $_SESSION['id_fir']) {
?>
    <form method="post" action="reg.php">
        <div class="x_panel">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <label for="Record Id">Nyatakan Aktiviti yang dijalankan dalam menghasilkan kes ini</label>
                        <br>
                        <?php
                        $sql = "SELECT * FROM [jim].[dbo].[aktiviti]";
                        $stmt = sqlsrv_query($conn, $sql);
                        if ($stmt === false) {
                        }
                        while ($row = sqlsrv_fetch_array($stmt)) { ?>
                            <input type="checkbox" name="aktiviti[]" value="<?php echo $row['aktiviti_id'] ?>"> <?php echo $row['aktiviti_name'] ?><br>
                        <?php }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="pull-right">
                <input type="hidden" name="id_fir" value="<?php echo $_SESSION['id_fir']; ?>">
                <button type="submit" class="btn btn-primary" name="simpan_aktiviti">Simpan</button>
            </div>
        </div>
    </form>
<?php } ?>