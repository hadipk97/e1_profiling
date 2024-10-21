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

?>
<div class="x_panel">
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
            <th>Tindakan</th>
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
                    echo "<td><button type='button' id='$row[id_fakta]' class='trashfakta'><span><i class='fa fa-trash primary' style='color: red;'></i></span></button></td>";
                    echo "<tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>
<form method="post" action="sent.php">
    <div class="x_panel">
        <div class="form-group">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <label for="Status Ke">Kes Kekurangan Cukai </label>
                    <select class="form-control" name="cukai" onchange="myCukai(this.value)">
                        <option value="">Sila Pilih</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12" id="cukai">

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <label for="Distribution">Kesalahan Disiasat</label>
                    <input type="text" name="kesalahan" class="form-control">
                </div>
            </div>
        </div>
        <br />
        <div class="form-group">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <label for="Record Id">Status Kes</label>
                    <select class="form-control" name="status" onchange="myKes(this.value)">
                        <option value="" selected="selected">Sila Pilih</option>
                        <option value="Dalam Siasatan">Dalam Siasatan</option>
                        <option value="Tindakan Mahkamah">Tindakan Mahkamah</option>
                        <option value="Kompaun Terus">Kompaun Terus</option>
                        <option value="Kompaun melalui Kertas Siasatan">Kompaun melalui Kertas Siasatan</option>
                        <option value="Lain-lain">Lain-lain</option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12" id="kes">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12" id="kompaun">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <label>Tarikh</label>
                    <input type="date" class="form-control" name="tarikh">
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label for="Tarikh Kes">Punca Perolehan Kes</label>
                    <select class="form-control" name="punca" onchange="myPunca(this.value)">
                        <option value="" selected="selected">Sila Pilih</option>
                        <option value="Risikan / Intelligent Driven">Risikan / Intelligent Driven</option>
                        <option value="Ampoma">Ampoma</option>
                        <option value="Aduan">Aduan</option>
                        <option value="Inisiatif Pegawai">Inisiatif Pegawai</option>
                        <option value="Rutin Penguatkuasa">Rutin Penguatkuasa</option>
                        <option value="Serahan Kes Dari Bahagian / Agensi">Serahan Kes Dari Bahagian / Agensi</option>
                        <option value="Lain-lain">Lain-lain</option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12" id="punca">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="pull-right">
            <input type="hidden" class="form-control" name="fir_" value="<?php echo $_SESSION['id_fir']; ?>">
            <button type="submit" class="btn btn-primary" name="simpan_fakta">Simpan</button>
        </div>
    </div>
</form>
<div class="modal fade" id="kemaskinifakta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php include('include/modal_kemaskinifakta.php'); ?>
</div>
<script>
    function myCukai(val) {
        switch (val) {
            case "Ya":
                document.getElementById("cukai").innerHTML = `
                    <label>Kekurangan Cukai Dipungut (RM)</label>
                    <input type="text" class="form-control" name="pungut">  
                    `
                break;
            case "Tidak":
                document.getElementById("cukai").innerHTML = `
                `
                break;
        }
    }

    function myKes(val) {
        switch (val) {
            case "Dalam Siasatan":
                document.getElementById("kes").innerHTML = `
                        `
                break;
            case "Tindakan Mahkamah":
                document.getElementById("kes").innerHTML = `
                        `
                break;
            case "Kompaun Terus":
                document.getElementById("kes").innerHTML = `
                        <label>Bayaran</label>
                        <select class="form-control" name="bayar" onchange="myBayar(this.value)">
                            <option value="Telah Dibayar">Telah Dibayar</option>
                            <option value="Amaun Kompaun">Amaun Kompaun</option>
                            <option value="Belum Dibayar">Belum Dibayar</option>
                        </select>
                        `
                break;
            case "Kompaun melalui Kertas Siasatan":
                document.getElementById("kes").innerHTML = `
                        <label>Bayaran</label>
                        <select class="form-control" name="bayar" onchange="myBayar(this.value)">
                            <option value="Telah Dibayar">Telah Dibayar</option>
                            <option value="Amaun Kompaun">Amaun Kompaun</option>
                            <option value="Belum Dibayar">Belum Dibayar</option>
                        </select>
                        `
                break;
            case "Lain-lain":
                document.getElementById("kes").innerHTML = `
                        <label>Nyatakan</label>
                        <input type="text" class="form-control" name="lain">
                        `
                break;
        }
    }

    function myBayar(val) {
        switch (val) {
            case "Telah Dibayar":
                document.getElementById("kompaun").innerHTML = `
                `
                break;
            case "Amaun Kompaun":
                document.getElementById("kompaun").innerHTML = `
                    <label>Kekurangan Cukai Dipungut (RM)</label>
                    <input type="text" class="form-control" name="pungut">
                `
                break;
            case "Belum Dibayar":
                document.getElementById("kompaun").innerHTML = `
                    <label>No Resit</label>
                    <input type="text" class="form-control" name="resit">
                `
                break;
        }
    }

    function myPunca(val) {
        switch (val) {
            case "Risikan / Intelligent Driven":
                document.getElementById("punca").innerHTML = `
                        `
                break;
            case "Ampoma":
                document.getElementById("punca").innerHTML = `
                        `
                break;
            case "Aduan":
                document.getElementById("punca").innerHTML = `
                        <label>Jenis Aduan</label>
                        <select class="form-control" name="aduan">
                            <option value="">Sila Pilih</option>
                            <option value="orang awam">Orang Awam</option>
                            <option value="tol free">Tol Free</option>
                            <option value="email">Email</option>
                            <option value="surat">Surat</option>
                        </select>
                        `
                break;
            case "Inisiatif Pegawai":
                document.getElementById("punca").innerHTML = `
                        `
                break;
            case "Rutin Penguatkuasa":
                document.getElementById("punca").innerHTML = `
                        `
                break;
            case "Serahan Kes Dari Bahagian / Agensi":
                document.getElementById("punca").innerHTML = `
                        <label>Jenis Serahan Kes</label> <br>
                        <input type="checkbox" name="serahan[]" value="CDN"> CDN<br>
                        <input type="checkbox" name="serahan[]" value="PDRM"> PDRM<br>
                        <input type="checkbox" name="serahan[]" value="APMM"> APMM<br>
                        <input type="checkbox" name="serahan[]" value="PERHILITAN"> PERHILITAN<br>
                        <input type="checkbox" name="serahan[]" value="Pematuhan"> Pematuhan<br>
                        <input type="checkbox" name="serahan[]" value="ATM"> ATM<br>
                        <input type="checkbox" name="serahan[]" value="KKM"> KKM<br>
                        `
                break;
            case "Lain-lain":
                document.getElementById("punca").innerHTML = `
                        <label>Nyatakan</label>
                        <input type="text" class="form-control" name="lainpunca"> `
                break;
        }
    }
</script>
<?php include 'include/js.php'; ?>