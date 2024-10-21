<?php session_start();

if (isset($_POST['e_word'])) {//word
include('include/dbconn.php');
$filename = date("Ymdhms");

$id = $_POST['id'];

$sql = "SELECT * FROM [jim].[dbo].[admin] WHERE id = '$id'";
$stmt = sqlsrv_query ($conn , $sql);
$r = sqlsrv_fetch_array($stmt);
$id_fir = $r['id_fir'];

          header("Content-Type: application/vnd.msword");
          header("Expires: 0");
          header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
          header("content-disposition: attachment;filename=$filename.doc");

          echo "<html>
          <style>
            @page Section1 {size:595.45pt 841.7pt; margin:1.0in 1.25in 1.0in 1.25in;mso-header-margin:.5in;mso-footer-margin:.5in;mso-paper-source:0;}
            div.Section1 {page:Section1;}
          </style>
            <div class='row Section1'>
              <div class='col-md-12 col-sm-12 col-xs-12'>
                <div class='x_panel'>
                  <div class='x_title'>
                    <center><img src='http://localhost/profiling/img/Klogo.png.png' height='5%' width='5%'><center><br/>
                  <center>Demo</center>
                   <br/>
                    <center><h3>Maklumat Kes : &thinsp;$r[id_fir]</h3></center>
                  </div>
                    <br />
                        <table width='100%' style='font-family: calibri, Helvetica, sans-serif;'>
                            <tr><td width='50%' class='pull-left'><strong>Record ID (FIR)</strong></td>  <td width='50%' class='pull-left'>: $r[id_fir]</td></tr>
                            <tr><td width='50%' class='pull-left'><strong>Keutamaan Kes</strong></td>  <td width='50%' class='pull-left'>: $r[priority]</td></tr>

                            <tr><td width='50%' class='pull-left'><strong>Distribution</strong></td>  <td width='50%' class='pull-left'>: $r[distribution]</td></tr>
                            <tr><td width='50%' class='pull-left'><strong>Status Kes</strong></td>  <td width='50%' class='pull-left'>: $r[cs_status]</td></tr>

                            <tr><td width='50%' class='pull-left'><strong>Nombor Fail Perisikan</strong></td>  <td width='50%' class='pull-left'>: $r[intell_no]</td></tr>
                            <tr><td width='50%' class='pull-left'><strong>Nombor Fail Penyiasatan</strong></td>  <td width='50%' class='pull-left'>: $r[invest_no]</td></tr>

                            <tr><td width='50%' class='pull-left'><strong>Tajuk</strong></td>  <td width='50%' class='pull-left'>: $r[title]</td></tr>
                            <tr><td width='50%' class='pull-left'><strong>Klasifikasi Utama</strong></td>  <td width='50%' class='pull-left'>: $r[major]</td></tr>

                            <tr><td width='50%' class='pull-left'><strong>Klasifikasi Kecil</strong></td>  <td width='50%' class='pull-left'>: $r[minor]</td></tr>
                            <tr><td width='50%' class='pull-left'><strong>Tarikh Daftar</strong></td>  <td width='50%' class='pull-left'>: $r[date_regist]</td></tr>

                            <tr><td width='50%' class='pull-left'><strong>Pengendali Pendaftaran (RO)</strong></td>  <td width='50%' class='pull-left'>: $r[operator]</td></tr>
                            <tr><td width='50%' class='pull-left'><strong>Pegawai Kelulusan (AO)</strong></td>  <td width='50%' class='pull-left'>: $r[officer]</td></tr>

                            <tr><td width='50%' class='pull-left'><strong>Agensi/Jabatan Pelaporan</strong></td>  <td width='50%' class='pull-left'>: $r[department]</td></tr>
                            <tr><td width='50%' class='pull-left'><strong>Bahagian / Unit / Pasukan</strong></td>  <td width='50%' class='pull-left'>: $r[team]</td></tr>
                            
                            <tr><td width='50%' class='pull-left'><strong>Negeri</strong></td>  <td width='50%' class='pull-left'>: $r[state]</td></tr>
                            <tr><td width='50%' class='pull-left'><strong>Negara</strong></td>  <td width='50%' class='pull-left'>: $r[country]</td></tr>
                            
                            <tr><td width='50%' class='pull-left'><strong>Pegawai Penerima (DO)</strong></td>  <td width='50%' class='pull-left'>: $r[do]</td></tr>
                            <tr><td width='50%' class='pull-left'><strong>Nombor Telefon Pegawai Penerima</strong></td>  <td width='50%' class='pull-left'>: $r[do_num]</td></tr>
                            
                            <tr><td width='50%' class='pull-left'><strong>Emel Pegawai Penerima</strong></td>  <td width='50%' class='pull-left'>: $r[do_mail]</td></tr>
                            <tr><td width='50%' class='pull-left'><strong>Pegawai AHO/SFO</strong></td>  <td width='50%' class='pull-left'>: $r[aho_officer]</td></tr>
                            
                            <tr><td width='50%' class='pull-left'><strong>Nombor Telefon AHO/SFO</strong></td>  <td width='50%' class='pull-left'>: $r[aho_num]</td></tr>
                            <tr><td width='50%' class='pull-left'><strong>Pasukan Perisikan</strong></td>  <td width='50%' class='pull-left'>: $r[intell_team]</td></tr>
                            
                            <tr><td width='50%' class='pull-left'><strong>Pegawai SFO/FIO</strong></td>  <td width='50%' class='pull-left'>: $r[sfo_officer]</td></tr>
                            <tr><td width='50%' class='pull-left'><strong>Nombor Telefon SFO/FIO</strong></td>  <td width='50%' class='pull-left'>: $r[sfo_num]</td></tr>
                            
                            <tr><td width='50%' class='pull-left'><strong>Kitaran Perisikan Mula</strong></td>  <td width='50%' class='pull-left'>: $r[intell_start]</td></tr>
                            <tr><td width='50%' class='pull-left'><strong>Kitaran Perisikan Tamat</strong></td>  <td width='50%' class='pull-left'>: $r[intell_end]</td></tr>
                        </table>
                        <br clear=\"all\" style=\"page-break-before:always\" />
                        <div class='ln_solid'></div>
                       </div>
                     </div>
                  </div>";
          if($r['status'] == "SIASATAN" || $r['status'] == "BENTUK PASUKAN" || $r['status'] == "SEMAKAN SIASATAN" || $r['status'] == "SELESAI" || $r['status'] == "SEMAKAN PENGARAH" || $r['status'] == "TUTUP KES") {


$sql = "SELECT * FROM [jim].[dbo].[profile] WHERE id_fir = '$id_fir'";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {}
$no = 1;
while($row1=  sqlsrv_fetch_array($stmt1))
{ 
            echo "
          <style>
            @page Section2 {size:841.7pt 595.45pt;mso-page-orientation:landscape;margin:1.25in 1.0in 1.25in 1.0in;mso-header-margin:.5in;mso-footer-margin:.5in;mso-paper-source:0;}
            div.Section2 {page:Section2;}
          </style>
          <div class=Section2>";
            if($no != 1){
              echo "<br clear=\"all\" style=\"page-break-before:always\" />";
            }
            echo "$row1[firstname] $row1[lastname]<br>";

      $stmt3 = sqlsrv_query ($conn , "SELECT * FROM [jim].[dbo].[physical] WHERE id_profil = '$row1[id_profil]'");
      $r = sqlsrv_fetch_array($stmt3);
      if($r['id'] != ""){

            echo "<table width='100%' style=\"border-collapse: collapse;\">
                    <tr>
                      <td style=\"border: 1px solid black;\">Fizikal</td>
                    </tr>
                  </table>";
            echo "<table width='100%' style=\"border-collapse: collapse;\">
                    <tr>
                      <td style=\"border: 1px solid black;\">No</td>
                      <td style=\"border: 1px solid black;\">Tinggi</td>
                      <td style=\"border: 1px solid black;\">Berat</td>
                      <td style=\"border: 1px solid black;\">Warna Mata</td>
                      <td style=\"border: 1px solid black;\">Warna Rambut</td>
                      <td style=\"border: 1px solid black;\">Parut</td>
                      <td style=\"border: 1px solid black;\">Cermin Mata</td>
                      <td style=\"border: 1px solid black;\">Bentuk Badan</td>
                      <td style=\"border: 1px solid black;\">Panjang Rambut</td>
                      <td style=\"border: 1px solid black;\">Tatu</td>
                      <td style=\"border: 1px solid black;\">Darah</td>
                    </tr>";
      $sql2 = "SELECT * FROM [jim].[dbo].[physical] WHERE id_profil = '$row1[id_profil]'";
      $stmt2 = sqlsrv_query ($conn , $sql2);
      if( !$stmt2) {}
      $n2 = 1;
      while($row2=  sqlsrv_fetch_array($stmt2)){
            echo "<tr>
                      <td style=\"border: 1px solid black;\">".$n2++."</td>
                      <td style=\"border: 1px solid black;\">".$row2['height']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['weight']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['eyecolor']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['haircolor']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['scar']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['glasses']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['build']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['hairlength']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['tattoos']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['blood']."</td>
                    </tr>";

      }
            echo "</table><br>"; }

      $stmt3 = sqlsrv_query ($conn , "SELECT * FROM [jim].[dbo].[ic] WHERE id_profil = '$row1[id_profil]'");
      $r = sqlsrv_fetch_array($stmt3);
      if($r['id'] != ""){

            echo "<table width='100%' style=\"border-collapse: collapse;\">
                    <tr>
                      <td style=\"border: 1px solid black;\">Maklumat Kad Pengenalan</td>
                    </tr>
                  </table>";
            echo "<table width='100%' style=\"border-collapse: collapse;\">
                    <tr>
                      <td style=\"border: 1px solid black;\">No</td>
                      <td style=\"border: 1px solid black;\">No.KP</td>
                      <td style=\"border: 1px solid black;\">Status</td>
                      <td style=\"border: 1px solid black;\">Keselamatan</td>
                      <td style=\"border: 1px solid black;\">Jenis Kad</td>
                      <td style=\"border: 1px solid black;\">Nama</td>
                      <td style=\"border: 1px solid black;\">Alamat</td>
                      <td style=\"border: 1px solid black;\">Poskod</td>
                      <td style=\"border: 1px solid black;\">Bandar</td>
                      <td style=\"border: 1px solid black;\">Negeri</td>
                      <td style=\"border: 1px solid black;\">Negara</td>
                    </tr>";
      $sql2 = "SELECT * FROM [jim].[dbo].[ic] WHERE id_profil = '$row1[id_profil]'";
      $stmt2 = sqlsrv_query ($conn , $sql2);
      if( !$stmt2) {}
      $n2 = 1;
      while($row2=  sqlsrv_fetch_array($stmt2)){
            echo "<tr>
                      <td style=\"border: 1px solid black;\">".$n2++."</td>
                      <td style=\"border: 1px solid black;\">".$row2['nom']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['status']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['security']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['cardtype']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['firstname']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['add1']." ".$row2['add2']." ".$row2['add3']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['poscode']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['city']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['state']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['country']."</td>
                    </tr>";

      }
            echo "</table><br>";}

      $stmt3 = sqlsrv_query ($conn , "SELECT * FROM [jim].[dbo].[drivelicense] WHERE id_profil = '$row1[id_profil]'");
      $r = sqlsrv_fetch_array($stmt3);
      if($r['id'] != ""){

            echo "<table width='100%' style=\"border-collapse: collapse;\">
                    <tr>
                      <td style=\"border: 1px solid black;\">Maklumat Lesen Memandu</td>
                    </tr>
                  </table>";
            echo "<table width='100%' style=\"border-collapse: collapse;\">
                    <tr>
                      <td style=\"border: 1px solid black;\">No</td>
                      <td style=\"border: 1px solid black;\">NO Siri</td>
                      <td style=\"border: 1px solid black;\">Status</td>
                      <td style=\"border: 1px solid black;\">Kelas</td>
                      <td style=\"border: 1px solid black;\">Nama</td>
                      <td style=\"border: 1px solid black;\">Warganegara</td>
                      <td style=\"border: 1px solid black;\">Tarikh Mula</td>
                      <td style=\"border: 1px solid black;\">Tarikh Tamat</td>
                    </tr>";
      $sql2 = "SELECT * FROM [jim].[dbo].[drivelicense] WHERE id_profil = '$row1[id_profil]'";
      $stmt2 = sqlsrv_query ($conn , $sql2);
      if( !$stmt2) {}
      $n2 = 1;
      while($row2=  sqlsrv_fetch_array($stmt2)){
            echo "<tr>
                      <td style=\"border: 1px solid black;\">".$n2++."</td>
                      <td style=\"border: 1px solid black;\">".$row2['serialno']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['status']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['class']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['firstname']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['nationality']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['startdate']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['expireddate']."</td>
                    </tr>";

      }
            echo "</table><br>";}

      $stmt3 = sqlsrv_query ($conn , "SELECT * FROM [jim].[dbo].[transportation] WHERE id_profil = '$row1[id_profil]'");
      $r = sqlsrv_fetch_array($stmt3);
      if($r['id'] != ""){

            echo "<table width='100%' style=\"border-collapse: collapse;\">
                    <tr>
                      <td style=\"border: 1px solid black;\">Maklumat Pengangkutan</td>
                    </tr>
                  </table>";
            echo "<table width='100%' style=\"border-collapse: collapse;\">
                    <tr>
                      <td style=\"border: 1px solid black;\">No</td>
                      <td style=\"border: 1px solid black;\">Nombor Pendaftaran</td>
                      <td style=\"border: 1px solid black;\">Status</td>
                      <td style=\"border: 1px solid black;\">Jenis</td>
                      <td style=\"border: 1px solid black;\">Buatan</td>
                      <td style=\"border: 1px solid black;\">Model</td>
                      <td style=\"border: 1px solid black;\">Warna</td>
                      <td style=\"border: 1px solid black;\">Tahun</td>
                      <td style=\"border: 1px solid black;\">Tarikh Daftar</td>
                    </tr>";
      $sql2 = "SELECT * FROM [jim].[dbo].[transportation] WHERE id_profil = '$row1[id_profil]'";
      $stmt2 = sqlsrv_query ($conn , $sql2);
      if( !$stmt2) {}
      $n2 = 1;
      while($row2=  sqlsrv_fetch_array($stmt2)){
            echo "<tr>
                      <td style=\"border: 1px solid black;\">".$n2++."</td>
                      <td style=\"border: 1px solid black;\">".$row2['registno']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['status']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['type']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['maker']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['model']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['color']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['year']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['registdate']."</td>
                    </tr>";

      }
            echo "</table><br>";}

      $stmt3 = sqlsrv_query ($conn , "SELECT * FROM [jim].[dbo].[passport] WHERE id_profil = '$row1[id_profil]'");
      $r = sqlsrv_fetch_array($stmt3);
      if($r['id'] != ""){

            echo "<table width='100%' style=\"border-collapse: collapse;\">
                    <tr>
                      <td style=\"border: 1px solid black;\">Maklumat Pasport</td>
                    </tr>
                  </table>";
            echo "<table width='100%' style=\"border-collapse: collapse;\">
                    <tr>
                      <td style=\"border: 1px solid black;\">No</td>
                      <td style=\"border: 1px solid black;\">Status</td>
                      <td style=\"border: 1px solid black;\">No.Baru</td>
                      <td style=\"border: 1px solid black;\">No.Lama</td>
                      <td style=\"border: 1px solid black;\">MRZ</td>
                      <td style=\"border: 1px solid black;\">Jenis</td>
                      <td style=\"border: 1px solid black;\">Nama</td>
                      <td style=\"border: 1px solid black;\">Kod Negara</td>
                      <td style=\"border: 1px solid black;\">Jantina</td>
                    </tr>";
      $sql2 = "SELECT * FROM [jim].[dbo].[passport] WHERE id_profil = '$row1[id_profil]'";
      $stmt2 = sqlsrv_query ($conn , $sql2);
      if( !$stmt2) {}
      $n2 = 1;
      while($row2=  sqlsrv_fetch_array($stmt2)){
            echo "<tr>
                      <td style=\"border: 1px solid black;\">".$n2++."</td>
                      <td style=\"border: 1px solid black;\">".$row2['status']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['nomnew']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['nomold']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['mrz']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['type']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['firstname']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['countrycode']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['gender']."</td>
                    </tr>";

      }
            echo "</table><br>";}

      $stmt3 = sqlsrv_query ($conn , "SELECT * FROM [jim].[dbo].[house] WHERE id_profil = '$row1[id_profil]'");
      $r = sqlsrv_fetch_array($stmt3);
      if($r['id'] != ""){

            echo "<table width='100%' style=\"border-collapse: collapse;\">
                    <tr>
                      <td style=\"border: 1px solid black;\">Maklumat Rumah</td>
                    </tr>
                  </table>";
            echo "<table width='100%' style=\"border-collapse: collapse;\">
                    <tr>
                      <td style=\"border: 1px solid black;\">No</td>
                      <td style=\"border: 1px solid black;\">Jenis Rumah</td>
                      <td style=\"border: 1px solid black;\">Status</td>
                      <td style=\"border: 1px solid black;\">Sewa</td>
                      <td style=\"border: 1px solid black;\">Sewa Sejak</td>
                      <td style=\"border: 1px solid black;\">Warna</td>
                      <td style=\"border: 1px solid black;\">Pemilik</td>
                      <td style=\"border: 1px solid black;\">ID Pendaftaran</td>
                    </tr>";
      $sql2 = "SELECT * FROM [jim].[dbo].[house] WHERE id_profil = '$row1[id_profil]'";
      $stmt2 = sqlsrv_query ($conn , $sql2);
      if( !$stmt2) {}
      $n2 = 1;
      while($row2=  sqlsrv_fetch_array($stmt2)){
            echo "<tr>
                      <td style=\"border: 1px solid black;\">".$n2++."</td>
                      <td style=\"border: 1px solid black;\">".$row2['hse_type']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['hse_stat']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['month_rent']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['rent_since']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['hse_col']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['owner']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['id_regis']."</td>
                    </tr>";

      }
            echo "</table><br>";}

      $stmt3 = sqlsrv_query ($conn , "SELECT * FROM [jim].[dbo].[mobileno] WHERE id_profil = '$row1[id_profil]'");
      $r = sqlsrv_fetch_array($stmt3);
      if($r['id'] != ""){

            echo "<table width='100%' style=\"border-collapse: collapse;\">
                    <tr>
                      <td style=\"border: 1px solid black;\">Maklumat Nombor Telefon</td>
                    </tr>
                  </table>";
            echo "<table width='100%' style=\"border-collapse: collapse;\">
                    <tr>
                      <td style=\"border: 1px solid black;\">No</td>
                      <td style=\"border: 1px solid black;\">Nombor Telefon</td>
                      <td style=\"border: 1px solid black;\">Telco</td>
                      <td style=\"border: 1px solid black;\">Tarikh Daftar</td>
                      <td style=\"border: 1px solid black;\">Status</td>
                      <td style=\"border: 1px solid black;\">Tarikh Tamat</td>
                      <td style=\"border: 1px solid black;\">Menara Terdekat</td>
                    </tr>";
      $sql2 = "SELECT * FROM [jim].[dbo].[mobileno] WHERE id_profil = '$row1[id_profil]'";
      $stmt2 = sqlsrv_query ($conn , $sql2);
      if( !$stmt2) {}
      $n2 = 1;
      while($row2=  sqlsrv_fetch_array($stmt2)){
            echo "<tr>
                      <td style=\"border: 1px solid black;\">".$n2++."</td>
                      <td style=\"border: 1px solid black;\">".$row2['nom']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['service']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['registdate']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['status']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['terminatedate']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['tower']."</td>
                    </tr>";

      }
            echo "</table><br>";}

      $stmt3 = sqlsrv_query ($conn , "SELECT * FROM [jim].[dbo].[bank] WHERE id_profil = '$row1[id_profil]'");
      $r = sqlsrv_fetch_array($stmt3);
      if($r['id'] != ""){

            echo "<table width='100%' style=\"border-collapse: collapse;\">
                    <tr>
                      <td style=\"border: 1px solid black;\">Maklumat Nombor Bank</td>
                    </tr>
                  </table>";
            echo "<table width='100%' style=\"border-collapse: collapse;\">
                    <tr>
                      <td style=\"border: 1px solid black;\">No</td>
                      <td style=\"border: 1px solid black;\">Bank</td>
                      <td style=\"border: 1px solid black;\">No Akaun</td>
                      <td style=\"border: 1px solid black;\">Pemegang Akaun</td>
                      <td style=\"border: 1px solid black;\">Jenis</td>
                      <td style=\"border: 1px solid black;\">Baki</td>
                      <td style=\"border: 1px solid black;\">Lokasi</td>
                    </tr>";
      $sql2 = "SELECT * FROM [jim].[dbo].[bank] WHERE id_profil = '$row1[id_profil]'";
      $stmt2 = sqlsrv_query ($conn , $sql2);
      if( !$stmt2) {}
      $n2 = 1;
      while($row2=  sqlsrv_fetch_array($stmt2)){
            echo "<tr>
                      <td style=\"border: 1px solid black;\">".$n2++."</td>
                      <td style=\"border: 1px solid black;\">".$row2['n_bank']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['n_aka']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['p_aka']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['j_aka']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['b_aka']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['a_bank']."</td>
                    </tr>";

      }
            echo "</table><br>";}

      $stmt3 = sqlsrv_query ($conn , "SELECT * FROM [jim].[dbo].[com_pany] WHERE id_profil = '$row1[id_profil]'");
      $r = sqlsrv_fetch_array($stmt3);
      if($r['id'] != ""){

            echo "<table width='100%' style=\"border-collapse: collapse;\">
                    <tr>
                      <td style=\"border: 1px solid black;\">Maklumat Syarikat</td>
                    </tr>
                  </table>";
            echo "<table width='100%' style=\"border-collapse: collapse;\">
                    <tr>
                      <td style=\"border: 1px solid black;\">No</td>
                      <td style=\"border: 1px solid black;\">Syarikat</td>
                      <td style=\"border: 1px solid black;\">No.ROC</td>
                      <td style=\"border: 1px solid black;\">Milikan</td>
                      <td style=\"border: 1px solid black;\">Sektor</td>
                      <td style=\"border: 1px solid black;\">No.Tel</td>
                      <td style=\"border: 1px solid black;\">Web</td>
                    </tr>";
      $sql2 = "SELECT * FROM [jim].[dbo].[com_pany] WHERE id_profil = '$row1[id_profil]'";
      $stmt2 = sqlsrv_query ($conn , $sql2);
      if( !$stmt2) {}
      $n2 = 1;
      while($row2=  sqlsrv_fetch_array($stmt2)){
            echo "<tr>
                      <td style=\"border: 1px solid black;\">".$n2++."</td>
                      <td style=\"border: 1px solid black;\">".$row2['c_name']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['no_c']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['mili_s']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['sek']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['tel']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['web']."</td>
                    </tr>";

      }
            echo "</table><br>";}

      $stmt3 = sqlsrv_query ($conn , "SELECT * FROM [jim].[dbo].[msocial] WHERE id_profil = '$row1[id_profil]'");
      $r = sqlsrv_fetch_array($stmt3);
      if($r['id'] != ""){

            echo "<table width='100%' style=\"border-collapse: collapse;\">
                    <tr>
                      <td style=\"border: 1px solid black;\">Maklumat Media Sosial</td>
                    </tr>
                  </table>";
            echo "<table width='100%' style=\"border-collapse: collapse;\">
                    <tr>
                      <td style=\"border: 1px solid black;\">No</td>
                      <td style=\"border: 1px solid black;\">Jenis</td>
                      <td style=\"border: 1px solid black;\">Nama Pengguna</td>
                      <td style=\"border: 1px solid black;\">Nama Penuh</td>
                      <td style=\"border: 1px solid black;\">ID</td>
                      <td style=\"border: 1px solid black;\">URL</td>
                    </tr>";
      $sql2 = "SELECT * FROM [jim].[dbo].[msocial] WHERE id_profil = '$row1[id_profil]'";
      $stmt2 = sqlsrv_query ($conn , $sql2);
      if( !$stmt2) {}
      $n2 = 1;
      while($row2=  sqlsrv_fetch_array($stmt2)){
            echo "<tr>
                      <td style=\"border: 1px solid black;\">".$n2++."</td>
                      <td style=\"border: 1px solid black;\">".$row2['sm_type']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['sm_name']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['sm_fname']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['sm_id']."</td>
                      <td style=\"border: 1px solid black;\">".$row2['sm_url']."</td>
                    </tr>";

      }
            echo "</table><br>";}


            echo "</div>";



$no++;
}
          echo "</table>";
          echo "</html>"; 
            } 
            //echo "<acript>window.close()</script>";
            
        }

if (isset($_POST['e_excel'])) {//excel
include('include/dbconn.php');
$filename = date("Ymdhms");

$id = $_POST['id'];
$sql = "SELECT * FROM [jim].[dbo].[admin] WHERE id = '$id'";
$stmt = sqlsrv_query ($conn , $sql);
$r = sqlsrv_fetch_array($stmt);
$id_fir = $r['id_fir'];
/*
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=$filename.xls");


      echo "<div class='row'>
              <div class='col-md-12 col-sm-12 col-xs-12'>
                <div class='x_panel'>
                  <div class='x_title'>
                  <table>
                    <tr>
                    <td></td>
                    <td><center>Demo</center></td>
                    <td height='25%' ><center><img src='http://localhost/sprm_v2/img/small_logo.jpg' height='10%' width='10%'><center></td></tr>
                    <tr>
                    <td></td>
                    <td><center><h3>Maklumat Kes : &thinsp;$r[id_fir]</h3></center></td>
                    </tr>
                  </table
                  </div>
                    <br />
                        <table border='1' style='font-family: calibri, Helvetica, sans-serif;'>
                            <tr>
                              <td align='left'>1</td>
                              <td class='pull-left'><strong>Record ID (FIR)</strong></td>  <td class='pull-left'> $r[id_fir]</td>
                              <td class='pull-left'><strong>Bahagian / Unit / Pasukan</strong></td>  <td class='pull-left'> $r[team]</td>
                            </tr>
                            <tr>
                              <td align='left'>2</td>
                              <td class='pull-left'><strong>Keutamaan Kes</strong></td>  <td class='pull-left'> $r[priority]</td>
                              <td class='pull-left'><strong>Negeri</strong></td>  <td class='pull-left'> $r[state]</td>
                            </tr>

                            <tr>
                              <td align='left'>3</td>
                              <td class='pull-left'><strong>Distribution</strong></td>  <td class='pull-left'> $r[distribution]</td>
                              <td class='pull-left'><strong>Negara</strong></td>  <td class='pull-left'> $r[country]</td>
                            </tr>
                            <tr>
                              <td align='left'>4</td>
                              <td class='pull-left'><strong>Status Kes</strong></td>  <td class='pull-left'> $r[cs_status]</td>
                              <td class='pull-left'><strong>Pegawai Penerima (DO)</strong></td>  <td class='pull-left'> $r[do]</td>
                            </tr>

                            <tr>
                              <td align='left'>5</td>
                              <td class='pull-left'><strong>Nombor Telefon Pegawai Penerima</strong></td>  <td class='pull-left'> $r[do_num]</td>
                              <td class='pull-left'><strong>Nombor Fail Perisikan</strong></td>  <td class='pull-left'> $r[intell_no]</td>
                            </tr>
                            <tr>
                              <td align='left'>6</td>
                              <td class='pull-left'><strong>Nombor Fail Penyiasatan</strong></td>  <td class='pull-left'> $r[invest_no]</td>
                              <td class='pull-left'><strong>Emel Pegawai Penerima</strong></td>  <td class='pull-left'> $r[do_mail]</td>
                            </tr>

                            <tr>
                              <td align='left'>7</td>
                              <td class='pull-left'><strong>Tajuk</strong></td>  <td class='pull-left'> $r[title]</td>
                              <td class='pull-left'><strong>Pegawai AHO/SFO</strong></td>  <td class='pull-left'> $r[aho_officer]</td>
                            </tr>
                            <tr>
                              <td align='left'>8</td>
                              <td class='pull-left'><strong>Klasifikasi Utama</strong></td>  <td class='pull-left'> $r[major]</td>
                              <td class='pull-left'><strong>Nombor Telefon AHO/SFO</strong></td>  <td class='pull-left'> $r[aho_num]</td>
                            </tr>

                            <tr>
                              <td align='left'>9</td>
                              <td class='pull-left'><strong>Klasifikasi Kecil</strong></td>  <td class='pull-left'> $r[minor]</td>
                              <td class='pull-left'><strong>Pasukan Perisikan</strong></td>  <td class='pull-left'> $r[intell_team]</td>
                            </tr>
                            <tr>
                              <td align='left'>10</td>
                              <td class='pull-left'><strong>Tarikh Daftar</strong></td>  <td class='pull-left'> $r[date_regist]</td>
                              <td class='pull-left'><strong>Pegawai SFO/FIO</strong></td>  <td class='pull-left'> $r[sfo_officer]</td>
                            </tr>

                            <tr>
                              <td align='left'>11</td>
                              <td class='pull-left'><strong>Pengendali Pendaftaran (RO)</strong></td>  <td class='pull-left'> $r[operator]</td>
                              <td class='pull-left'><strong>Nombor Telefon SFO/FIO</strong></td>  <td class='pull-left'> $r[sfo_num]</td>
                            </tr>
                            <tr>
                              <td align='left'>12</td>
                              <td class='pull-left'><strong>Pegawai Kelulusan (AO)</strong></td>  <td class='pull-left'> $r[officer]</td>
                              <td class='pull-left'><strong>Kitaran Perisikan Mula</strong></td>  <td class='pull-left'> $r[intell_start]</td>
                            </tr>

                            <tr>
                              <td align='left'>13</td>
                              <td class='pull-left'><strong>Agensi/Jabatan Pelaporan</strong></td>  <td class='pull-left'> $r[department]</td>
                              <td class='pull-left'><strong>Kitaran Perisikan Tamat</strong></td>  <td class='pull-left'> $r[intell_end]</td>
                            </tr>
                        </table>
                       </div>
                     </div>
                  </div>";
      if($r['status'] == "SIASATAN" || $r['status'] == "BENTUK PASUKAN" || $r['status'] == "SEMAKAN SIASATAN" || $r['status'] == "SELESAI" || $r['status'] == "SEMAKAN PENGARAH" || $r['status'] == "TUTUP KES") {

            echo "<br>
              <strong>Maklumat Profil</strong>
               <table border='1' style='font-family: calibri, Helvetica, sans-serif;'>
                <thead>
                <tr>
                  <th align='left'>No</th>
                  <th align='left'>Nama</th>
                  <th align='left'>Nama Gelaran</th>
                  <th align='left'>Kaitan Jenayah</th>
                  <th align='left'>Jantina</th>
                  <th align='left'>Bangsa</th>
                  <th align='left'>Negara</th>
                  <th align='left'>Status</th>
                </tr>
                </thead>
                <tbody>";

$sql = "SELECT * FROM [jim].[dbo].[profile] WHERE id_fir = '$id_fir'";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {}
$no = 1;
while($row1=  sqlsrv_fetch_array($stmt1))
{

            echo "<tr>
                  <td align='left'>$no</td>
                  <td align='left'>$row1[firstname] $row1[lastname]</td>
                  <td align='left'>$row1[nickname]</td>
                  <td align='left'>$row1[crimetree]</td>
                  <td align='left'>$row1[gender]</td>
                  <td align='left'>$row1[race]</td>
                  <td align='left'>$row1[country]</td>
                  <td align='left'>$row1[status]</td>
                  </tr>";
$no++;
}
          echo "</tbody>";
          echo "</table>";
          echo "</html>"; 
}
*/
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
//date_default_timezone_set('Europe/London');

require_once dirname(__FILE__) . '\excel\Classes\PHPExcel.php';

$objPHPExcel = new PHPExcel();

$objPHPExcel->getProperties()->setCreator("Administrator System")
               ->setLastModifiedBy("Administrator System")
               ->setTitle("FIR")
               ->setSubject("FIR")
               ->setDescription("")
               ->setKeywords("")
               ->setCategory("");

$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A2', 'Record ID (FIR)')
            ->setCellValue('A3', 'Bahagian / Unit / Pasukan')
            ->setCellValue('A4', 'Keutamaan Kes')
            ->setCellValue('A5', 'Negeri')
            ->setCellValue('A6', 'Distribution')
            ->setCellValue('A7', 'Negara')
            ->setCellValue('A8', 'Status Kes')
            ->setCellValue('A9', 'Pegawai Penerima (DO)')
            ->setCellValue('A10', 'Nombor Telefon Pegawai Penerima')
            ->setCellValue('A11', 'Nombor Fail Perisikan')
            ->setCellValue('A12', 'Nombor Fail Penyiasatan')
            ->setCellValue('A13', 'Emel Pegawai Penerima')
            ->setCellValue('A14', 'Tajuk')
            ->setCellValue('A15', 'Pegawai AHO/SFO')
            ->setCellValue('A16', 'Klasifikasi Utama')
            ->setCellValue('A17', 'Nombor Telefon AHO/SFO')
            ->setCellValue('A18', 'Klasifikasi Kecil')
            ->setCellValue('A19', 'Pasukan Perisikan')
            ->setCellValue('A20', 'Tarikh Daftar')
            ->setCellValue('A21', 'Pegawai SFO/FIO')
            ->setCellValue('A22', 'Pengendali Pendaftaran (RO)')
            ->setCellValue('A23', 'Nombor Telefon SFO/FIO')
            ->setCellValue('A24', 'Pegawai Kelulusan (AO)')
            ->setCellValue('A25', 'Kitaran Perisikan Mula')
            ->setCellValue('A26', 'Agensi/Jabatan Pelaporan')
            ->setCellValue('A27', 'Kitaran Perisikan Tamat');

$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('B2', $r['id_fir'])
            ->setCellValue('B3', $r['team'])
            ->setCellValue('B4', $r['priority']) 
            ->setCellValue('B5', $r['state'])
            ->setCellValue('B6', $r['distribution'])
            ->setCellValue('B7', $r['country'])
            ->setCellValue('B8', $r['cs_status'])
            ->setCellValue('B9', $r['do'])
            ->setCellValue('B10', $r['do_num'])
            ->setCellValue('B11', $r['intell_no'])
            ->setCellValue('B12', $r['invest_no'])
            ->setCellValue('B13', $r['do_mail'])
            ->setCellValue('B14', $r['title'])
            ->setCellValue('B15', $r['aho_officer'])
            ->setCellValue('B16', $r['major'])
            ->setCellValue('B17', $r['aho_num'])
            ->setCellValue('B18', $r['minor'])
            ->setCellValue('B19', $r['intell_team'])
            ->setCellValue('B20', $r['date_regist'])
            ->setCellValue('B21', $r['sfo_officer'])
            ->setCellValue('B22', $r['operator'])
            ->setCellValue('B23', $r['sfo_num'])
            ->setCellValue('B24', $r['officer'])
            ->setCellValue('B25', $r['intell_start'])
            ->setCellValue('B26', $r['department'])
            ->setCellValue('B27', $r['intell_end']);

$objPHPExcel->getActiveSheet()->setTitle($id_fir);

$sql1 = "SELECT * FROM [jim].[dbo].[profile] WHERE id_fir = '$id_fir'";
$stmt1 = sqlsrv_query ($conn , $sql1);
if($stmt1 == false){}
$i = 1;
$l = 1;
$c = 1;
while($r = sqlsrv_fetch_array($stmt1)){



            $objPHPExcel->createSheet($i);
            $objPHPExcel->setActiveSheetIndex($i)
                        ->setCellValue('A'.$c, 'Profil no')
                        ->setCellValue('B'.$c, 'Status')
                        ->setCellValue('C'.$c, 'Kaitan Jenayah')
                        ->setCellValue('D'.$c, 'Style')
                        ->setCellValue('E'.$c, 'Hubungan')
                        ->setCellValue('F'.$c, 'Nama')
                        ->setCellValue('G'.$c, 'Bahasa')
                        ->setCellValue('H'.$c, 'Jantina')
                        ->setCellValue('I'.$c, 'Tarikh Lahir')
                        ->setCellValue('J'.$c, 'Umur')
                        ->setCellValue('K'.$c, 'Bangsa')
                        ->setCellValue('L'.$c, 'Etnik')
                        ->setCellValue('M'.$c, 'Negara')
                        ->setCellValue('N'.$c, 'Perkahwinan')
                        ->setCellValue('O'.$c, 'Warganegara')
                        ->setCellValue('P'.$c, 'Catatan');

$sql2 = "SELECT * FROM [jim].[dbo].[profile] WHERE id_profil = '$r[id_profil]'";
$stmt2 = sqlsrv_query ($conn , $sql2);
if($stmt2 == false){}
$l = 1;
$f = 2;
while($r2 = sqlsrv_fetch_array($stmt2)){

            $objPHPExcel->setActiveSheetIndex($i)
                        ->setCellValue('A'.$f, $r2['id_profil'])
                        ->setCellValue('B'.$f, $r2['status'])
                        ->setCellValue('C'.$f, $r2['crimetree'])
                        ->setCellValue('D'.$f, $r2['style'])
                        ->setCellValue('E'.$f, $r2['relationship'])
                        ->setCellValue('F'.$f, $r2['firstname'])
                        ->setCellValue('G'.$f, $r2['language'])
                        ->setCellValue('H'.$f, $r2['gender'])
                        ->setCellValue('I'.$f, $r2['birth'])
                        ->setCellValue('J'.$f, $r2['age'])
                        ->setCellValue('K'.$f, $r2['race'])
                        ->setCellValue('L'.$f, $r2['ethnic'])
                        ->setCellValue('M'.$f, $r2['country'])
                        ->setCellValue('N'.$f, $r2['marital'])
                        ->setCellValue('O'.$f, $r2['nationality'])
                        ->setCellValue('P'.$f, $r2['notes']);
                        $f++;
}

$p = $f +1 ;
            $objPHPExcel->setActiveSheetIndex($i)
                        ->setCellValue('A'.$p, 'Tinggi')
                        ->setCellValue('B'.$p, 'Berat')
                        ->setCellValue('C'.$p, 'Warna Mata')
                        ->setCellValue('D'.$p, 'Warna Rambut')
                        ->setCellValue('E'.$p, 'Parut')
                        ->setCellValue('F'.$p, 'Cermin Mata')
                        ->setCellValue('G'.$p, 'Bentuk Badan')
                        ->setCellValue('H'.$p, 'Panjang Rambut')
                        ->setCellValue('I'.$p, 'Tatu')
                        ->setCellValue('J'.$p, 'Darah');

$sql2 = "SELECT * FROM [jim].[dbo].[physical] WHERE id_profil = '$r[id_profil]'";
$stmt2 = sqlsrv_query ($conn , $sql2);
if($stmt2 == false){}
$l = 1;
$p = $p + 1;
while($r2 = sqlsrv_fetch_array($stmt2)){

            $objPHPExcel->setActiveSheetIndex($i)
                        ->setCellValue('A'.$p, $r2['height'])
                        ->setCellValue('B'.$p, $r2['weight'])
                        ->setCellValue('C'.$p, $r2['eyecolor'])
                        ->setCellValue('D'.$p, $r2['haircolor'])
                        ->setCellValue('E'.$p, $r2['scar'])
                        ->setCellValue('F'.$p, $r2['glasses'])
                        ->setCellValue('G'.$p, $r2['build'])
                        ->setCellValue('H'.$p, $r2['hairlength'])
                        ->setCellValue('I'.$p, $r2['tattoos'])
                        ->setCellValue('J'.$p, $r2['blood']);
                        $p++;
}

$p = $p +1 ;
            $objPHPExcel->setActiveSheetIndex($i)
                        ->setCellValue('A'.$p, 'No.KP')
                        ->setCellValue('B'.$p, 'Status')
                        ->setCellValue('C'.$p, 'Keselamatan')
                        ->setCellValue('D'.$p, 'Jenis Kad')
                        ->setCellValue('E'.$p, 'Nama')
                        ->setCellValue('F'.$p, 'Alamat')
                        ->setCellValue('G'.$p, 'Poskod')
                        ->setCellValue('H'.$p, 'Bandar')
                        ->setCellValue('I'.$p, 'Negeri')
                        ->setCellValue('J'.$p, 'Negara');

$sql2 = "SELECT * FROM [jim].[dbo].[ic] WHERE id_profil = '$r[id_profil]'";
$stmt2 = sqlsrv_query ($conn , $sql2);
if($stmt2 == false){}
$l = 1;
$p = $p + 1;
while($r2 = sqlsrv_fetch_array($stmt2)){

            $objPHPExcel->setActiveSheetIndex($i)
                        ->setCellValue('A'.$p, $r2['nom'])
                        ->setCellValue('B'.$p, $r2['status'])
                        ->setCellValue('C'.$p, $r2['security'])
                        ->setCellValue('D'.$p, $r2['cardtype'])
                        ->setCellValue('E'.$p, $r2['firstname'])
                        ->setCellValue('F'.$p, $r2['add1']." ".$r2['add2']." ".$r2['add3'])
                        ->setCellValue('G'.$p, $r2['poscode'])
                        ->setCellValue('H'.$p, $r2['city'])
                        ->setCellValue('I'.$p, $r2['state'])
                        ->setCellValue('J'.$p, $r2['country']);
                        $p++;
}
$p = $p +1 ;
            $objPHPExcel->setActiveSheetIndex($i)
                        ->setCellValue('A'.$p, 'NO Siri')
                        ->setCellValue('B'.$p, 'Status')
                        ->setCellValue('C'.$p, 'Kelas')
                        ->setCellValue('D'.$p, 'Nama')
                        ->setCellValue('E'.$p, 'Warganegara')
                        ->setCellValue('F'.$p, 'Tarikh Mula')
                        ->setCellValue('G'.$p, 'Tarikh Tamat');

$sql2 = "SELECT * FROM [jim].[dbo].[drivelicense] WHERE id_profil = '$r[id_profil]'";
$stmt2 = sqlsrv_query ($conn , $sql2);
if($stmt2 == false){}
$l = 1;
$p = $p + 1;
while($r2 = sqlsrv_fetch_array($stmt2)){

            $objPHPExcel->setActiveSheetIndex($i)
                        ->setCellValue('A'.$p, $r2['serialno'])
                        ->setCellValue('B'.$p, $r2['status'])
                        ->setCellValue('C'.$p, $r2['class'])
                        ->setCellValue('D'.$p, $r2['firstname'])
                        ->setCellValue('E'.$p, $r2['nationality'])
                        ->setCellValue('F'.$p, $r2['startdate'])
                        ->setCellValue('G'.$p, $r2['expireddate']);
                        $p++;
}
$p = $p +1 ;
            $objPHPExcel->setActiveSheetIndex($i)
                        ->setCellValue('A'.$p, 'Nombor Pendaftaran')
                        ->setCellValue('B'.$p, 'Status')
                        ->setCellValue('C'.$p, 'Jenis')
                        ->setCellValue('D'.$p, 'Buatan')
                        ->setCellValue('E'.$p, 'Model')
                        ->setCellValue('F'.$p, 'Warna')
                        ->setCellValue('G'.$p, 'Tahun')
                        ->setCellValue('H'.$p, 'Tarikh Daftar');

$sql2 = "SELECT * FROM [jim].[dbo].[transportation] WHERE id_profil = '$r[id_profil]'";
$stmt2 = sqlsrv_query ($conn , $sql2);
if($stmt2 == false){}
$l = 1;
$p = $p + 1;
while($r2 = sqlsrv_fetch_array($stmt2)){

            $objPHPExcel->setActiveSheetIndex($i)
                        ->setCellValue('A'.$p, $r2['registno'])
                        ->setCellValue('B'.$p, $r2['status'])
                        ->setCellValue('C'.$p, $r2['type'])
                        ->setCellValue('D'.$p, $r2['maker'])
                        ->setCellValue('E'.$p, $r2['model'])
                        ->setCellValue('F'.$p, $r2['color'])
                        ->setCellValue('G'.$p, $r2['year'])
                        ->setCellValue('H'.$p, $r2['registdate']);
                        $p++;
}
            $objPHPExcel->getActiveSheet()->setTitle('sheet'.$i);

$i++;
}

$objPHPExcel->setActiveSheetIndex(0);


header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');

}

if (isset($_POST['e_pdf'])) {//pdf

include('include/dbconn.php');
require('fpdf/password_pdf.php');
$filename = date("Ymdhms");

$id = $_POST['id'];
if (isset($_POST['key'])) {
  $sql = "SELECT * FROM [jim].[dbo].[admin] WHERE id_fir = '$id'";
}else{
  $sql = "SELECT * FROM [jim].[dbo].[admin] WHERE id = '$id'";
}
$stmt = sqlsrv_query ($conn , $sql);
$r = sqlsrv_fetch_array($stmt);
$id_fir = $r['id_fir'];
//include_once("../code128.php");


$pdf = new FPDF_Protection();
if (isset($_POST['key'])) {
  $pdf->SetProtection(array('print', 'copy', 'modify'), "$_POST[key]", "$_COOKIE[password]", 0, null);
}
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',11);
$pdf->Ln(25);
$pdf->Image('../img/Klogo.png',95,15,25);

$pdf->Ln(5);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(195,10,'Demo',0,0,'C');
$pdf->Ln();
$pdf->Cell(110,10,'Maklumat Kes : ',0,0,'R');
$pdf->Cell(70,10,$r['id_fir'],0,0,'L');

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Record ID(FIR)',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['id_fir'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Keutamaan Kes',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['priority'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Distribution',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['distribution'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Status Kes',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['cs_status'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Nombor Fail Perisikan',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['intell_no'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Nombor Fail Penyiasatan',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['invest_no'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Tajuk',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['title'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Klasifikasi Utama',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['major'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Klasifikasi Kecil',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['minor'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Tarikh Daftar',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['date_regist'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Pengendalian Pendaftaran (RO)',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['operator'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Pegawai Kelulusan (AO)',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['officer'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Agensi/Jabatan Pelaporan',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['department'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Bahagian/Unit/Pasukan',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['team'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Negeri',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['state'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Negara',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['country'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Pegawai Penerima (DO)',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['do'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Nombor Telefon Pegawai Penerima',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['do_num'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Emel Pegawai Penerima',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['do_mail'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Pegawai AHO/SFO',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['aho_officer'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Nombor Telefon AHO/SFO',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['aho_num'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Pasukan Perisikan',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['intell_team'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Pegawai SFO/FIO',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['sfo_officer'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Nombor Telefon SFO/FIO',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['sfo_num'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Kitaran Perisikan Mula',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['intell_start'],0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5,4,'',0,0,'L');
$pdf->Cell(90,4,'Kitaran Perisikan Tamat',0,0,'L');
$pdf->Cell(1,4,':',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(94,4,$r['intell_end'],0,0,'L');
$pdf->Ln();

if($r['status'] == "SIASATAN" || $r['status'] == "BENTUK PASUKAN" || $r['status'] == "SEMAKAN SIASATAN" || $r['status'] == "SELESAI" || $r['status'] == "SEMAKAN PENGARAH" || $r['status'] == "TUTUP KES") {
            
$w = 18;
$h = 7;
$sql = "SELECT * FROM [jim].[dbo].[profile] WHERE id_fir = '$id_fir'";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {}
$coun = 1;
while($row1=  sqlsrv_fetch_array($stmt1))
{

//$pdf->Ln(25); 
$pdf->AddPage('L');       
$pdf->SetFont('Arial','',11);
$pdf->Cell(190,4,$coun++.') '.$row1['firstname'],0,0,'L');
$pdf->Ln(5);
$sql = "SELECT COUNT(*) FROM [jim].[dbo].[physical] where id_profil = '$row1[id_profil]'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {}
while( $rowp = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {

if($rowp[0] <> "0"){
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(42,86,152);
$pdf->Cell(275 ,5,'Maklumat Fizikal',1,0,'L');
$pdf->SetTextColor(0,0,0);
$pdf->Ln();
$pdf->SetFont('Arial','B',8);
$x= $pdf->GetX();
$pdf->myCell(5,$h,$x, 'No');
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, 'Tinggi');
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, 'Berat');
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, 'Warna Mata');
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, 'Warna Rambut');
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, 'Parut');
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, 'Cermin Mata');
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, 'Bentuk Badan');
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, 'Panjang Rambut');
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, 'Tattoos');
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, 'Darah');
$pdf->Ln();

$sql2 = "SELECT * FROM [jim].[dbo].[physical] WHERE id_profil = '$row1[id_profil]'";
$stmt2 = sqlsrv_query ($conn , $sql2);
if( !$stmt2) {}
$a = 1;
while($row2=  sqlsrv_fetch_array($stmt2))
{
$x= $pdf->GetX();
$pdf->myCell(5,$h,$x, $a);
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, $row2['height']);
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, $row2['weight']);
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, $row2['eyecolor']);
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, $row2['haircolor']);
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, $row2['scar']);
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, $row2['glasses']);
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, $row2['build']);
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, $row2['hairlength']);
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, $row2['tattoos']);
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, $row2['blood']);
$pdf->Ln();
}
$a++;
}}

$sql = "SELECT COUNT(*) FROM [jim].[dbo].[ic] where id_profil = '$row1[id_profil]'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {}
while( $rowi = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {

if($rowi[0] <> "0"){
$pdf->Ln(5);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(42,86,152);
$pdf->Cell(275 ,5,'Maklumat Kad Pengenalan',1,0,'L');
$pdf->SetTextColor(0,0,0);
$pdf->Ln();
$pdf->SetFont('Arial','B',8);
$x= $pdf->GetX();
$pdf->myCell(5,$h,$x, 'No');
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, 'N.KP');
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, 'Status');
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, 'Keselamatan');
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, 'Jenis Kad');
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, 'Nama Pertama');
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, 'Nama Tengah');
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, 'Nama Akhir');
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, 'Alamat');
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, 'Poskod');
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, 'Bandar');
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, 'Negeri');
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, 'Negara');
$pdf->Ln();

$sql2 = "SELECT * FROM [jim].[dbo].[ic] WHERE id_profil = '$row1[id_profil]'";
$stmt2 = sqlsrv_query ($conn , $sql2);
if( !$stmt2) {}
$a = 1;
while($row2=  sqlsrv_fetch_array($stmt2))
{
$pdf->SetFont('Arial','B',8);
$x= $pdf->GetX();
$pdf->myCell(5,$h,$x, $a);
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, $row2['nom']);
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, $row2['status']);
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, $row2['security']);
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, $row2['cardtype']);
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, $row2['firstname']);
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, $row2['middlename']);
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, $row2['lastname']);
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, $row2['add1'].$row2['add2'].$row2['add3']);
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, $row2['poscode']);
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, $row2['city']);
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, $row2['state']);
$x= $pdf->GetX();
$pdf->myCell(22.5,$h,$x, $row2['country']);
$pdf->Ln();
}
$a++;
}}

$sql = "SELECT COUNT(*) FROM [jim].[dbo].[drivelicense] where id_profil = '$row1[id_profil]'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {}
while( $rowd = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {

if($rowd[0] <> "0"){
$pdf->Ln(5);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(42,86,152);
$pdf->Cell(275 ,5,'Maklumat Lesen Memandu',1,0,'L');
$pdf->SetTextColor(0,0,0);
$pdf->Ln();
$pdf->SetFont('Arial','B',8);
$x= $pdf->GetX();
$pdf->myCell(5,$h,$x, 'No');
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, 'No.Siri');
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, 'Status');
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, 'Kelas Lesen');
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, 'Nama');
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, 'Warganegara');
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, 'Tarikh Mula');
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, 'Tarikh Luput');
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, 'Tempat Daftar');
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, 'Negara');
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, 'Hilang Dan Jumpa');
$pdf->Ln();

$sql2 = "SELECT * FROM [jim].[dbo].[drivelicense] WHERE id_profil = '$row1[id_profil]'";
$stmt2 = sqlsrv_query ($conn , $sql2);
if( !$stmt2) {}
$a = 1;
while($row2=  sqlsrv_fetch_array($stmt2))
{
$pdf->SetFont('Arial','B',8);
$x= $pdf->GetX();
$pdf->myCell(5,$h,$x, $a);
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, $row2['serialno']);
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, $row2['status']);
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, $row2['class']);
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, $row1['firstname'].$row1['middlename'].$row1['lastname']);
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, $row2['nationality']);
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, $row2['startdate']);
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, $row2['expireddate']);
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, $row2['placeissue']);
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, $row2['country']);
$x= $pdf->GetX();
$pdf->myCell(27,$h,$x, $row2['lafr']);
$pdf->Ln();
}
$a++;
}}

$sql = "SELECT COUNT(*) FROM [jim].[dbo].[transportation] where id_profil = '$row1[id_profil]'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {}
while( $rowt = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {

if($rowt[0] <> "0"){
$pdf->Ln(5);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(42,86,152);
$pdf->Cell(275 ,5,'Maklumat Pengangkutan',1,0,'L');
$pdf->SetTextColor(0,0,0);
$pdf->Ln();
$pdf->SetFont('Arial','B',8);
$x= $pdf->GetX();
$pdf->myCell(5,$h,$x, 'No');
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, 'Nombor Pendaftaran');
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, 'Status');
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, 'Jenis');
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, 'Buatan');
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, 'Model');
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, 'Warna');
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, 'Tahun');
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, 'Tarikh Daftar');
$pdf->Ln();

$sql2 = "SELECT * FROM [jim].[dbo].[transportation] WHERE id_profil = '$row1[id_profil]'";
$stmt2 = sqlsrv_query ($conn , $sql2);
if( !$stmt2) {}
$a = 1;
while($row2=  sqlsrv_fetch_array($stmt2))
{
$pdf->SetFont('Arial','B',8);
$x= $pdf->GetX();
$pdf->myCell(5,$h,$x, $a);
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, $row2['registno']);
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, $row2['status']);
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, $row2['type']);
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, '');
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, $row2['model']);
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, $row2['color']);
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, $row2['year']);
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, $row2['registdate']);
$pdf->Ln();
}
$a++;
}}

$sql = "SELECT COUNT(*) FROM [jim].[dbo].[passport] where id_profil = '$row1[id_profil]'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {}
while( $rowp = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {

if($rowp[0] <> "0"){
$pdf->Ln(5);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(42,86,152);
$pdf->Cell(275 ,5,'Maklumat Pasport',1,0,'L');
$pdf->SetTextColor(0,0,0);
$pdf->Ln();
$pdf->SetFont('Arial','B',8);
$x= $pdf->GetX();
$pdf->myCell(5,$h,$x, 'No');
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, 'Status');
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, 'No.Baru');
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, 'No.Lama');
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, 'MRZ');
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, 'Jenis');
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, 'Nama');
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, 'Kod Negara');
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, 'Jantina');
$pdf->Ln();

$sql2 = "SELECT * FROM [jim].[dbo].[passport] WHERE id_profil = '$row1[id_profil]'";
$stmt2 = sqlsrv_query ($conn , $sql2);
if( !$stmt2) {}
$a = 1;
while($row2=  sqlsrv_fetch_array($stmt2))
{
$pdf->SetFont('Arial','B',8);
$x= $pdf->GetX();
$pdf->myCell(5,$h,$x, $a);
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, $row2['status']);
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, $row2['nomnew']);
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, $row2['nomold']);
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, $row2['mrz']);
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, $row2['type']);
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, $row1['firstname'].$row1['middlename'].$row1['lastname']);
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, $row2['countrycode']);
$x= $pdf->GetX();
$pdf->myCell(33.75,$h,$x, $row2['birth']);
$pdf->Ln();
}
$a++;
}}

$sql = "SELECT COUNT(*) FROM [jim].[dbo].[house] where id_profil = '$row1[id_profil]'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {}
while( $rowh = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {

if($rowh[0] <> "0"){
$pdf->Ln(5);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(42,86,152);
$pdf->Cell(275 ,5,'Maklumat Rumah',1,0,'L');
$pdf->SetTextColor(0,0,0);
$pdf->Ln();
$pdf->SetFont('Arial','B',8);
$x= $pdf->GetX();
$pdf->myCell(5,$h,$x, 'No');
$x= $pdf->GetX();
$pdf->myCell(38.57,$h,$x, 'Jenis Rumah');
$x= $pdf->GetX();
$pdf->myCell(38.57,$h,$x, 'Status');
$x= $pdf->GetX();
$pdf->myCell(38.57,$h,$x, 'Sewa');
$x= $pdf->GetX();
$pdf->myCell(38.57,$h,$x, 'Sewa Sejak');
$x= $pdf->GetX();
$pdf->myCell(38.57,$h,$x, 'Warna');
$x= $pdf->GetX();
$pdf->myCell(38.57,$h,$x, 'Pemilik');
$x= $pdf->GetX();
$pdf->myCell(38.57,$h,$x, 'ID Pendaftaran');
$pdf->Ln();

$sql2 = "SELECT * FROM [jim].[dbo].[house] WHERE id_profil = '$row1[id_profil]'";
$stmt2 = sqlsrv_query ($conn , $sql2);
if( !$stmt2) {}
$a = 1;
while($row2=  sqlsrv_fetch_array($stmt2))
{
$pdf->SetFont('Arial','B',8);
$x= $pdf->GetX();
$pdf->myCell(5,$h,$x, $a);
$x= $pdf->GetX();
$pdf->myCell(38.57,$h,$x, $row2['hse_type']);
$x= $pdf->GetX();
$pdf->myCell(38.57,$h,$x, $row2['hse_stat']);
$x= $pdf->GetX();
$pdf->myCell(38.57,$h,$x, $row2['month_rent']);
$x= $pdf->GetX();
$pdf->myCell(38.57,$h,$x, $row2['rent_since']);
$x= $pdf->GetX();
$pdf->myCell(38.57,$h,$x, $row2['hse_col']);
$x= $pdf->GetX();
$pdf->myCell(38.57,$h,$x, '');
$x= $pdf->GetX();
$pdf->myCell(38.57,$h,$x, $row2['id_regis']);
$pdf->Ln();
}
$a++;
}}

$sql = "SELECT COUNT(*) FROM [jim].[dbo].[mobileno] where id_profil = '$row1[id_profil]'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {}
while( $rowmo = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {

if($rowmo[0] <> "0"){
$pdf->Ln(5);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(42,86,152);
$pdf->Cell(275 ,5,'Maklumat Nombor Telefon',1,0,'L');
$pdf->SetTextColor(0,0,0);
$pdf->Ln();
$pdf->SetFont('Arial','B',8);
$x= $pdf->GetX();
$pdf->myCell(5,$h,$x, 'No');
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, 'Nombor Telefon');
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, 'Telco');
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, 'Tarikh Daftar');
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, 'Status');
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, 'Tarikh Tamat');
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, 'Menara Terdekat');
$pdf->Ln();

$sql2 = "SELECT * FROM [jim].[dbo].[mobileno] WHERE id_profil = '$row1[id_profil]'";
$stmt2 = sqlsrv_query ($conn , $sql2);
if( !$stmt2) {}
$a = 1;
while($row2=  sqlsrv_fetch_array($stmt2))
{
$pdf->SetFont('Arial','B',8);
$x= $pdf->GetX();
$pdf->myCell(5,$h,$x, $a);
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, $row2['nom']);
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, $row2['service']);
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, $row2['registdate']);
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, $row2['status']);
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, $row2['terminatedate']);
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, $row2['tower']);
$pdf->Ln();
}
$a++;
}}

$sql = "SELECT COUNT(*) FROM [jim].[dbo].[bank] where id_profil = '$row1[id_profil]'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {}
while( $rowb = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {

if($rowb[0] <> "0"){
$pdf->Ln(5);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(42,86,152);
$pdf->Cell(276 ,5,'Maklumat Nombor Bank',1,0,'L');
$pdf->SetTextColor(0,0,0);
$pdf->Ln();
$pdf->SetFont('Arial','B',8);
$x= $pdf->GetX();
$pdf->myCell(5,$h,$x, 'No');
$x= $pdf->GetX();
$pdf->myCell(50,$h,$x, 'Bank');
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, 'No Akaun');
$x= $pdf->GetX();
$pdf->myCell(41,$h,$x, 'Pemegang Akaun');
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, 'Jenis');
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, 'Baki');
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, 'Lokasi');
$pdf->Ln();

$sql2 = "SELECT * FROM [jim].[dbo].[bank] WHERE id_profil = '$row1[id_profil]'";
$stmt2 = sqlsrv_query ($conn , $sql2);
if( !$stmt2) {}
$a = 1;
while($row2=  sqlsrv_fetch_array($stmt2))
{
$pdf->SetFont('Arial','B',8);
$x= $pdf->GetX();
$pdf->myCell(5,$h,$x, $a);
$x= $pdf->GetX();
$pdf->myCell(50,$h,$x, $row2['n_bank']);
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, $row2['n_aka']);
$x= $pdf->GetX();
$pdf->myCell(41,$h,$x, $row2['p_aka']);
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, $row2['j_aka']);
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, $row2['b_aka']);
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, $row2['l_aka']);
$pdf->Ln();
}
$a++;
}}

$sql = "SELECT COUNT(*) FROM [jim].[dbo].[com_pany] where id_profil = '$row1[id_profil]'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {}
while( $rowc = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {

if($rowc[0] <> "0"){
$pdf->Ln(5);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(42,86,152);
$pdf->Cell(276 ,5,'Maklumat Syarikat',1,0,'L');
$pdf->SetTextColor(0,0,0);
$pdf->Ln();
$pdf->SetFont('Arial','B',8);
$x= $pdf->GetX();
$pdf->myCell(5,$h,$x, 'No');
$x= $pdf->GetX();
$pdf->myCell(41,$h,$x, 'Nama');
$x= $pdf->GetX();
$pdf->myCell(50,$h,$x, 'No.ROC');
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, 'Milikan');
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, 'Sektor');
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, 'NO.Tel');
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, 'Web');
$pdf->Ln();

$sql2 = "SELECT * FROM [jim].[dbo].[com_pany] WHERE id_profil = '$row1[id_profil]'";
$stmt2 = sqlsrv_query ($conn , $sql2);
if( !$stmt2) {}
$a = 1;
while($row2=  sqlsrv_fetch_array($stmt2))
{
$pdf->SetFont('Arial','B',8);
$x= $pdf->GetX();
$pdf->myCell(5,$h,$x, $a);
$x= $pdf->GetX();
$pdf->myCell(41,$h,$x, $row2['c_name']);
$x= $pdf->GetX();
$pdf->myCell(50,$h,$x, $row2['no_c']);
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, $row2['mili_s']);
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, $row2['sek']);
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, $row2['tel']);
$x= $pdf->GetX();
$pdf->myCell(45,$h,$x, $row2['web']);
$pdf->Ln();
}
$a++;
}}

$sql = "SELECT COUNT(*) FROM [jim].[dbo].[msocial] where id_profil = '$row1[id_profil]'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {}
while( $rowm = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {

if($rowm[0] <> "0"){
$pdf->Ln(5);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(42,86,152);
$pdf->Cell(275 ,5,'Maklumat Media Sosial',1,0,'L');
$pdf->SetTextColor(0,0,0);
$pdf->Ln();
$pdf->SetFont('Arial','B',8);
$x= $pdf->GetX();
$pdf->myCell(5,$h,$x, 'No');
$x= $pdf->GetX();
$pdf->myCell(54,$h,$x, 'Jenis');
$x= $pdf->GetX();
$pdf->myCell(54,$h,$x, 'Nama Pengguna');
$x= $pdf->GetX();
$pdf->myCell(54,$h,$x, 'Nama Penuh');
$x= $pdf->GetX();
$pdf->myCell(54,$h,$x, 'ID');
$x= $pdf->GetX();
$pdf->myCell(54,$h,$x, 'URL');
$pdf->Ln();

$sql2 = "SELECT * FROM [jim].[dbo].[msocial] WHERE id_profil = '$row1[id_profil]'";
$stmt2 = sqlsrv_query ($conn , $sql2);
if( !$stmt2) {}
$a = 1;
while($row2=  sqlsrv_fetch_array($stmt2))
{
$pdf->SetFont('Arial','B',8);
$x= $pdf->GetX();
$pdf->myCell(5,$h,$x, $a);
$x= $pdf->GetX();
$pdf->myCell(54,$h,$x, $row2['sm_type']);
$x= $pdf->GetX();
$pdf->myCell(54,$h,$x, $row2['sm_name']);
$x= $pdf->GetX();
$pdf->myCell(54,$h,$x, $row2['sm_fname']);
$x= $pdf->GetX();
$pdf->myCell(54,$h,$x, $row2['sm_id']);
$x= $pdf->GetX();
$pdf->myCell(54,$h,$x, $row2['sm_url']);
$pdf->Ln();
}
$a++;
}}

}
}


if (isset($_POST['key'])) {
  $filename="temp_pdf/".$_POST['filename'];
  $pdf->Output($pdf->Output('F', $filename, true));
  echo "<script>
          window.open('".$_SESSION['http']."');
        </script>";
}else{
  $pdf->Output();
}
}

if (isset($_POST['e_qrcode'])) {

  include 'include/dbconn.php';

  $stmt = sqlsrv_query($conn,"SELECT * FROM [jim].[dbo].[admin] WHERE id = '".$_POST['id']."'");
  $r = sqlsrv_fetch_array($stmt);

  $file = "../words_alpha.txt";
  $file_arr = file($file);
  $num_lines = count($file_arr);
  $last_arr_index = $num_lines - 1;
  $rand_index = rand(0, $last_arr_index);
  $rand_text = $file_arr[$rand_index];
//echo $rand_text;

  //$key =  base64_encode($r['id_fir']."|".date('Y-m-d h:i:s')."|".$_COOKIE['id']);
  $key =  $rand_text;
  $pdf_name = date('ymdhis').$_COOKIE['id'].".pdf";

//qrcode
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    $PNG_WEB_DIR = 'temp/';
    include "qrcode/qrlib.php";
    $filename = $PNG_TEMP_DIR.'test.png';

        $filename = $PNG_TEMP_DIR.md5(''.$_SESSION['http'].'cetak_fir.php?u='.base64_encode($_COOKIE['id']).'&c='.base64_encode($r['id_fir']).'&date='.base64_encode(date('Y-m-d h:i:s')).'&k='.base64_encode($key).'&f='.base64_encode($pdf_name).'|H|4').'.png';
        QRcode::png($_SESSION['http'].'cetak_fir.php?u='.base64_encode($_COOKIE['id']).'&c='.base64_encode($r['id_fir']).'&date='.base64_encode(date('Y-m-d h:i:s')).'&k='.base64_encode($key).'&f='.base64_encode($pdf_name).'', $filename,'H', '4', 2);  

        echo "<html>
                <body>

                <center>
                  <img src=\"".$_SESSION['http'].$PNG_WEB_DIR.basename($filename)."\" style=\"width: 150px;height: auto;\"/><br><h3><Strong>KEY : </strong>".$key."</h3>

                  <form method='post' action='cetak_fir.php' target='print_popup' onsubmit=\"window.open('about:blank','print_popup');\">
                  <div style='display: none;'>
                    <input type='text' name='key' value='".$key."'>
                    <input type='text' name='id' value='".$r['id_fir']."'>
                    <input type='text' name='filename' value='".$pdf_name."'>
                    </div>
                    <button type='submit' name='e_pdf' onclick=\"window.open('".$_SESSION['http'].$PNG_WEB_DIR.basename($filename)."','','width=300,height=200');\">Save Report</button>
                  </form>
                </center>

                </body>
              </html>";
//qrcode
}
if(isset($_GET['f'])){
  header("Location : temp_pdf/".base64_decode($_GET['f'])."");
}
?>