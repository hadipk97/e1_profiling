<?php
include('include/dbconn.php');
$sql = "SELECT * FROM [jim].[dbo].[mapk_fakta] WHERE id_fir = '$_SESSION[id_fir]'";
$stmt = sqlsrv_query($conn, $sql);
$row = sqlsrv_fetch_array($stmt);
?>
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form method="post" action="sent.php">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel"><b>KEMASKINI FAKTA KES</b></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <label for="Status Ke">Kes Kekurangan Cukai </label>
                            <select class="form-control" name="cukai" onchange="myKurangCukai(this.value)">
                                <option value="<?php echo $row['cukai'] ?>"><?php echo $row['cukai'] ?></option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <?php if ($row['cukai'] == 'Tidak') { ?>
                            <div class="col-md-4 col-sm-6 col-xs-12" id="kurangcukai">
                                <label>Kekurangan Cukai Dipungut (RM)</label>
                                <input type="text" class="form-control" name="pungut" value="<?php echo $row['pungut']; ?>">
                            </div>
                        <?php } elseif ($row['cukai'] == 'Ya') { ?>
                            <div class="col-md-4 col-sm-6 col-xs-12" id="kurangcukai">
                            </div>
                        <?php } ?>
                        <!-- <div class="col-md-4 col-sm-6 col-xs-12" id="kurangcukai">

                        </div> -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <label for="Distribution">Kesalahan Disiasat</label>
                            <input type="text" name="kesalahan" class="form-control" value="<?php echo $row['kesalahan'] ?>">
                        </div>
                    </div>
                </div>
                <br />
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <label for="Record Id">Status Kes</label>
                            <select class="form-control" name="status" onchange="myStatusKes(this.value)">
                                <option value="<?php echo $row['status'] ?>"><?php echo $row['status'] ?></option>
                                <option value="Dalam Siasatan">Dalam Siasatan</option>
                                <option value="Tindakan Mahkamah">Tindakan Mahkamah</option>
                                <option value="Kompaun Terus">Kompaun Terus</option>
                                <option value="Kompaun melalui Kertas Siasatan">Kompaun melalui Kertas Siasatan</option>
                                <option value="Lain-lain">Lain-lain</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12" id="statuskes">
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
                                <option value=""><?php echo $row['punca'] ?></option>
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
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <input type="hidden" name="id" value="<?php echo $row['id_fakta']; ?>">
                <button type="submit" class="btn btn-success">Kemaskini</button>
            </div>
        </form>
    </div>
</div>
<script>
    function myKurangCukai(val) {
        switch (val) {
            case "Ya":
                document.getElementById("kurangcukai").innerHTML = `
                        `
                break;
            case "Tidak":
                document.getElementById("kurangcukai").innerHTML = `
                    <label>Kekurangan Cukai Dipungut (RM)</label>
                    <input type="text" class="form-control" name="pungut">        
                `
                break;
        }
    }
</script>