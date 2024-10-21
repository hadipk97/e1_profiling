<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php include('include/dbconn.php');
$sql2 = "SELECT COUNT(*) FROM [jim].[dbo].[admin]";
$stmt1 = sqlsrv_query($conn, $sql2);
if ($stmt1 === false) {
}
while ($row64 = sqlsrv_fetch_array($stmt1, SQLSRV_FETCH_NUMERIC)) {
    $a1 = $row64[0];
    $stmt2 = sqlsrv_query($conn, "SELECT COUNT(*) FROM [jim].[dbo].[admin] WHERE  id_fir = 'FIR$a1'");
    if ($stmt2 === false) {
    }
    while ($row65 = sqlsrv_fetch_array($stmt2, SQLSRV_FETCH_NUMERIC)) {
        if ($row65[0] > 0) {
            $a = $a1 + 1;
        } else {
            $a = $row64[0];
            $a++;
        }
    }
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
?>
    <form method="post" action="sent.php">
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label for="Status Ke">Negeri <span style="color: red">*</span></label>
                    <select name="negeri" class="form-control" required>
                        <option value="" selected="selected">Sila Pilih</option>
                        <option value="Selangor">Selangor</option>
                        <option value="KLIA">KLIA</option>
                        <option value="Pulau Pinang">Pulau Pinang</option>
                        <option value="Johor">Johor</option>
                        <option value="Kedah">Kedah</option>
                        <option value="Sabah">Sabah</option>
                        <option value="WPKL">WPKL</option>
                        <option value="Perak">Perak</option>
                        <option value="Kelantan">Kelantan</option>
                        <option value="Negeri Sembilan">Negeri Sembilan</option>
                        <option value="USFP">USFP</option>
                        <option value="Perlis">Perlis</option>
                        <option value="Sarawak">Sarawak</option>
                        <option value="Pahang">Pahang</option>
                        <option value="Terengganu">Terengganu</option>
                        <option value="Labuan">Labuan</option>
                        <option value="Melaka">Melaka</option>
                        <option value="Narkotik">Narkotik</option>
                    </select>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label for="Distribution">Stesen</label>
                    <select id="pilih" name="stesen" class="form-control">
                        <option value="">Sila Pilih</option>
                        <option value="Stesen1">Stesen 1</option>
                    </select>
                </div>
            </div>
        </div>
        <br />
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label for="Record Id">No. Kertas Siasatan</label>
                    <input type="text" class="form-control" disabled placeholder="Record ID (FIR)" value="FIR<?php echo $a; ?>" width="50%">
                    <input name="fir_" type="hidden" value="FIR<?php echo $a; ?>">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label for="Status Ke">No Repot Polis</label>
                    <input type="text" class="form-control" name="repot">
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <label for="Tarikh Kes">Tarikh Kejadian</label>
                    <input type="date" class="form-control" name="tarikh">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <label for="Masa Kes">Masa Kejadian</label>
                    <input type="time" class="form-control" name="masa">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label for="Masa Kes">Alamat</label>
                    <textarea type="text" class="form-control" name="alamat" rows="3"></textarea>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label>Jenis Kes</label>
                    <select class="form-control" name="jenis">
                        <option value="" selected="selected">Sila Pilih</option>
                        <option value="rampasan">Rampasan</option>
                        <option value="tangkapan">Tangkapan</option>
                    </select>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <label for="Daerah">Daerah</label>
                    <input type="text" class="form-control" name="daerah">
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <label for="Poskod">Poskod</label>
                    <input type="text" class="form-control" name="poskod">
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <label for="Negeri">Negeri</label>
                    <select class="form-control" name="negeri2">
                        <option value="" selected="selected">Sila Pilih</option>
                        <option value="Selangor">Selangor</option>
                        <option value="Pulau Pinang">Pulau Pinang</option>
                        <option value="Johor">Johor</option>
                        <option value="Kedah">Kedah</option>
                        <option value="Sabah">Sabah</option>
                        <option value="WPKL">WPKL</option>
                        <option value="Perak">Perak</option>
                        <option value="Kelantan">Kelantan</option>
                        <option value="Negeri Sembilan">Negeri Sembilan</option>
                        <option value="Perlis">Perlis</option>
                        <option value="Sarawak">Sarawak</option>
                        <option value="Pahang">Pahang</option>
                        <option value="Terengganu">Terengganu</option>
                        <option value="Labuan">Labuan</option>
                        <option value="Melaka">Melaka</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <label for="Operasi">Nama Operasi</label>
                    <input type="text" class="form-control" name="operasi">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <label>Tempoh Operasi</label>
                    <input type="text" class="form-control" name="tempoh">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <label>Nama Pegawai Penyiasat</label>
                    <input type="text" class="form-control" name="pegawai">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <label>Telefon Bimbit </label>
                    <input type="text" class="form-control" name="telefon">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="pull-right">
                <button type="submit" class="btn btn-primary" name="simpan_daftar">Simpan</button>
            </div>
        </div>
    </form>
<?php } ?>