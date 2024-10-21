<?php include('include/dbconn.php');
$sql = "SELECT * FROM [jim].[dbo].[mapk_daftar] WHERE fir = '$_SESSION[id_fir]'";
$stmt = sqlsrv_query($conn, $sql);
if ($stmt == false) {
}
$row = sqlsrv_fetch_array($stmt);
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
if ($row['fir'] = $_SESSION['id_fir']) {
?>
    <form method="post" action="sent.php">
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label for="Status Ke">Negeri <span style="color: red">*</span></label>
                    <select name="negeri" class="form-control" required>
                        <option value="<?php echo $row['negeri']; ?>" selected="selected"><?php echo $row['negeri']; ?></option>
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
                        <option value="<?php echo $row['stesen']; ?>" selected="selected"><?php echo $row['stesen']; ?></option>
                        <option value="Stesen 1">Stesen 1</option>
                    </select>
                </div>
            </div>
        </div>
        <br />
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label for="Record Id">No. Kertas Siasatan</label>
                    <input type="text" class="form-control" disabled placeholder="Record ID (FIR)" value="<?php echo $_SESSION['id_fir']; ?>" width="50%">
                    <input name="fir_" type="hidden" value="<?php echo $_SESSION['id_fir']; ?>">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label for="Status Ke">No Repot Polis</label>
                    <input type="text" class="form-control" name="repot" value="<?php echo $row['repot']; ?>">
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <label for="Tarikh Kes">Tarikh Kejadian</label>
                    <input type="date" class="form-control" name="tarikh" value="<?php echo $row['tarikh_kejadian']; ?>">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <label for="Masa Kes">Masa Kejadian</label>
                    <input type="text" class="form-control" name="masa" value="<?php echo date('H:i A', strtotime($row['masa_kejadian'])); ?>">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label for="Masa Kes">Alamat</label>
                    <textarea type="text" class="form-control" name="alamat" rows="3"><?php echo $row['alamat']; ?></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label>Jenis Kes</label>
                    <select class="form-control" name="jenis">
                        <option value="<?php echo $row['jenis_kes']; ?>" selected="selected"><?php echo $row['jenis_kes']; ?></option>
                        <option value="Rampasan">Rampasan</option>
                        <option value="Tangkapan">Tangkapan</option>
                    </select>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <label for="Daerah">Daerah</label>
                    <input type="text" class="form-control" name="daerah" value="<?php echo $row['daerah']; ?>">
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <label for="Poskod">Poskod</label>
                    <input type="text" class="form-control" name="poskod" value="<?php echo $row['poskod']; ?>">
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <label for="Negeri">Negeri</label>
                    <select class="form-control" name="negeri2">
                        <option value="<?php echo $row['alamat_negeri']; ?>" selected="selected"><?php echo $row['alamat_negeri']; ?></option>
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
        <br>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <label for="Operasi">Nama Operasi</label>
                    <input type="text" class="form-control" name="operasi" value="<?php echo $row['nama_operasi']; ?>">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <label>Tempoh Operasi</label>
                    <input type="text" class="form-control" name="tempoh" value="<?php echo $row['tempoh']; ?>">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <label>Nama Pegawai Penyiasat</label>
                    <input type="text" class="form-control" name="pegawai" value="<?php echo $row['pegawai']; ?>">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <label>Telefon Bimbit </label>
                    <input type="text" class="form-control" name="telefon" value="<?php echo $row['telefon']; ?>">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="pull-right">
                <button type="submit" class="btn btn-primary" name="update_daftar">Kemaskini</button>
            </div>
        </div>
    </form>
<?php }  ?>