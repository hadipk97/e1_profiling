<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php include 'include/bar.php'; ?>
<?php include('include/dbconn.php');
$getUriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

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
    //if edit/fir already exists
    if ($_GET['fir'] != null) {

        $a = str_replace("FIR", "", strtoupper($_GET['fir']));
    }

    $_SESSION['id_fir'] = "FIR$a";



?>


    <!-- /top navigation -->

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Daftar Baru </h3>
                </div>
            </div>

            <div class="clearfix">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>MAKLUMAT AWAL PEROLEHAN KES</h2>

                                <div class="clearfix"></div>
                                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                        <?php $stmt2 = sqlsrv_query($conn, "SELECT COUNT(*) FROM [jim].[dbo].[admin] WHERE  id_fir = 'FIR$a'");
                                        //var_dump("SELECT COUNT(*) FROM [jim].[dbo].[admin] WHERE  id_fir = 'FIR$a'");
                                        while ($row_new = sqlsrv_fetch_array($stmt2, SQLSRV_FETCH_NUMERIC)) {
                                            $fir_new = $row_new[0];
                                        }
                                        if ($fir_new === 0) { ?>
                                            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Pendaftaran</a>
                                            </li>
                                            <li role="presentation" class="disabled"><a href="#tab_content2" id="profile-tab1" role="tab" data-toggle="tab" aria-expanded="false">Profil</a>
                                            </li>
                                            <li role="presentation" class="disabled"><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Fakta Kes</a>
                                            </li>
                                            <li role="presentation" class="disabled"><a href="#tab_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Barang Kes</a>
                                            </li>
                                            <li role="presentation" class="disabled"><a href="#tab_content5" role="tab" id="profile-tab4" data-toggle="tab" aria-expanded="false">Aktiviti</a>
                                            </li>
                                            <li role="presentation" class="disabled"><a href="#tab_content6" role="tab" id="profile-tab5" data-toggle="tab" aria-expanded="false">Rumusan</a>
                                            </li>
                                        <?php } else { ?>
                                            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Pendaftaran</a>
                                            </li>
                                            <li role="presentation" class=""><a href="#tab_content2" id="profile-tab1" role="tab" data-toggle="tab" aria-expanded="false">Profil</a>
                                            </li>
                                            <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Fakta Kes</a>
                                            </li>
                                            <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Barang Kes</a>
                                            </li>
                                            <li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab4" data-toggle="tab" aria-expanded="false">Aktiviti</a>
                                            </li>
                                            <li role="presentation" class=""><a href="#tab_content6" role="tab" id="profile-tab5" data-toggle="tab" aria-expanded="false">Rumusan</a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                            <?php

                                            if ($fir_new === 0) {
                                                include 'mapk_daftar.php';
                                            } else {
                                                include 'mapk_daftar1.php';
                                            }
                                            ?>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab1">
                                            <?php include 'mapk_profil.php'; ?>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab2">
                                            <?php include 'mapk_fakta.php'; ?>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab3">
                                            <?php include 'mapk_barang_kes.php' ?>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab4">
                                            <?php include 'mapk_aktiviti.php'; ?>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="profile-tab5">
                                            <?php include 'mapk_rumusan.php'; ?>
                                        </div>
                                    </div>
                                </div>
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
    <script>
        $('a[data-toggle="tab"]').click(function(e) {
            var hash = $(this).attr('href');
            location.hash = hash;
        });
        $(function() {
            var hash = window.location.hash;
            var $nav = $('ul.nav a[href="' + hash + '"]');
            hash && $nav.trigger('click');
        });
    </script>

    </html>
<?php } ?>