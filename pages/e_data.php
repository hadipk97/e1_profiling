<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
 <?php
include('include/dbconn.php');

if (isset($_POST['e_fir'])) {//fir

$filename = date("Ymdhms");

  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=$filename.xls");

            echo "<br>
              <strong>Maklumat FIR</strong>
               <table border='1' style='font-family: calibri, Helvetica, sans-serif;'>
                <thead>
                <tr style='background-color:#169f85;'>
                  <th align='left'>No</th>
                  <th align='left'>FIR</th>
                  <th align='left'>Keutamaan Kes</th>
                  <th align='left'>Distribution</th>
                  <th align='left'>Status</th>
                  <th align='left'>Nombor Fail Perisikan</th>
                  <th align='left'>Nombor Fail Penyiasatan</th>
                  <th align='left'>Tajuk</th>
                  <th align='left'>Klasifikasi Utama</th>
                  <th align='left'>Klasifikasi Kecil</th>
                  <th align='left'>Tarikh Daftar</th>
                  <th align='left'>Pengendali Pendaftaran (RO)</th>
                  <th align='left'>Pegawai Kelulusan (AO)</th>
                  <th align='left'>Agensi/Jabatan Pelaporan</th>
                  <th align='left'>Bahagian / Unit / Pasukan</th>
                  <th align='left'>Negeri</th>
                  <th align='left'>Negara</th>
                  <th align='left'>Pegawai Penerima (DO)</th>
                  <th align='left'>Nombor Telefon Pegawai Penerima</th>
                  <th align='left'>Emel Pegawai Penerima</th>
                  <th align='left'>Pegawai AHO/SFO</th>
                  <th align='left'>Nombor Telefon AHO/SFO</th>
                  <th align='left'>Pasukan Perisikan</th>
                  <th align='left'>Pegawai SFO/FIO</th>
                  <th align='left'>Nombor Telefon SFO/FIO</th>
                  <th align='left'>Kitaran Perisikan Mula</th>
                  <th align='left'>Kitaran Perisikan Tamat</th>
                </tr>
                </thead>
                <tbody>";

$sql = $_POST['query_script'];
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {}
$no = 1;
while($row1=  sqlsrv_fetch_array($stmt1))
{

             echo "<tr>
                  <td align='left'>$no</td>
                  <td align='left'>$row1[id_fir]</td>
                  <td align='left'>$row1[priority]</td>
                  <td align='left'>$row1[distribution]</td>
                  <td align='left'>$row1[cs_status]</td>
                  <td align='left'>$row1[intell_no]</td>
                  <td align='left'>$row1[invest_no]</td>
                  <td align='left'>$row1[title]</td>
                  <td align='left'>$row1[major]</td>
                  <td align='left'>$row1[minor]</td>
                  <td align='left'>$row1[date_regist]</td>
                  <td align='left'>$row1[operator]</td>
                  <td align='left'>$row1[officer]</td>
                  <td align='left'>$row1[department]</td>
                  <td align='left'>$row1[team]</td>
                  <td align='left'>$row1[state]</td>
                  <td align='left'>$row1[country]</td>
                  <td align='left'>$row1[do]</td>
                  <td align='left'>$row1[do_num]</td>
                  <td align='left'>$row1[do_mail]</td>
                  <td align='left'>$row1[aho_officer]</td>
                  <td align='left'>$row1[aho_num]</td>
                  <td align='left'>$row1[intell_team]</td>
                  <td align='left'>$row1[sfo_officer]</td>
                  <td align='left'>$row1[sfo_num]</td>
                  <td align='left'>$row1[intell_start]</td>
                  <td align='left'>$row1[intell_end]</td>
                  </tr>";
$no++;
}
          echo "</tbody>";
          echo "</table>";
          echo "</html>"; 

}

if (isset($_POST['e_transaction'])) {//transaction

$filename = date("Ymdhms");

  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=$filename.xls");

            echo "<br>
              <strong>Maklumat Transaksi</strong>
               <table border='1' style='font-family: calibri, Helvetica, sans-serif;'>
                <thead>
                <tr align='left' style='background-color:#169f85;'>
                  <th>No</th>
                  <th>Nama Bank</th>
                  <th>Syarikat</th>
                  <th>Signatory</th>
                  <th>Akaun A</th>
                  <th>Tarikh Transaksi</th>
                  <th>Masa Transaksi</th>
                  <th>MYR</th>
                  <th>Akaun B</th>
                </tr>
                </thead>
                <tbody>";

$sql = $_POST['query_script'];
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {}
$no = 1;
while($row1=  sqlsrv_fetch_array($stmt1))
{
$date_tr = $row1['trans_date_from']->format("Y-m-d");
$myr = number_format($row1['myr'], 2);
             echo "<tr align='left'>
                  <td>$no</td>
                  <td>$row1[rep_ins]</td>
                  <td>$row1[company]</td>
                  <td>$row1[name]</td>
                  <td>$row1[acc_no]</td>
                  <td>$date_tr</td>
                  <td>$row1[time_trans]</td>
                  <td>MYR $myr</td>
                  <td>$row1[transa_ac]</td>
                  </tr>";
$no++;
}
          echo "</tbody>";
          echo "</table>";
          echo "</html>"; 

}

if (isset($_POST['e_profile'])) {//profile

$filename = date("Ymdhms");

  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=$filename.xls");

            echo "<br>
              <strong>Maklumat Profil</strong>
               <table border='1' style='font-family: calibri, Helvetica, sans-serif;'>
                <thead>
                <tr align='left' style='background-color:#169f85;'>
                  <th>No</th>
                  <th>FIR</th>
                  <th>ID Profil</th>
                  <th>Status</th>
                  <th>Hubungan Jenayah</th>
                  <th>Style</th>
                  <th>Hubungan</th>
                  <th>Nama Pertama</th>
                  <th>Nama Tengah</th>
                  <th>Nama Akhir</th>
                  <th>Gelaran</th>
                  <th>Bahasa</th>
                  <th>Jantina</th>
                  <th>Tarikh Lahir</th>
                  <th>Umur</th>
                  <th>Bangsa</th>
                  <th>Etnik</th>
                  <th>Negara</th>
                  <th>Status Perkahwinan</th>
                  <th>Warganegara</th>
                  <th>Catatan</th>
                </tr>
                </thead>
                <tbody>";

$sql = $_POST['query_script'];
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {}
$no = 1;
while($row1=  sqlsrv_fetch_array($stmt1))
{
             echo "<tr align='left'>
                  <td>$no</td>
                  <td>$row1[id_fir]</td>
                  <td>$row1[id_profil]</td>
                  <td>$row1[status]</td>
                  <td>$row1[crimetree]</td>
                  <td>$row1[style]</td>
                  <td>$row1[relationship]</td>
                  <td>$row1[firstname]</td>
                  <td>$row1[middlename]</td>
                  <td>$row1[lastname]</td>
                  <td>$row1[nickname]</td>
                  <td>$row1[language]</td>
                  <td>$row1[gender]</td>
                  <td>$row1[birth]</td>
                  <td>$row1[age]</td>
                  <td>$row1[race]</td>
                  <td>$row1[ethnic]</td>
                  <td>$row1[country]</td>
                  <td>$row1[marital]</td>
                  <td>$row1[nationality]</td>
                  <td>$row1[notes]</td>
                  </tr>";
$no++;
}
          echo "</tbody>";
          echo "</table>";
          echo "</html>"; 

}

if (isset($_POST['e_physical'])) {//physical

$filename = date("Ymdhms");

  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=$filename.xls");

            echo "<br>
              <strong>Maklumat Physical</strong>
               <table border='1' style='font-family: calibri, Helvetica, sans-serif;'>
                <thead>
                <tr align='left' style='background-color:#169f85;'>
                  <th>No</th>
                  <th>ID Profil</th>
                  <th>Tinggi</th>
                  <th>Berat</th>
                  <th>Warna Mata</th>
                  <th>Warna Rambut</th>
                  <th>Parut</th>
                  <th>Cermin Mata</th>
                  <th>Bentuk Badan</th>
                  <th>Panjang Rambut</th>
                  <th>Tattoos</th>
                  <th>Darah</th>
                  <th>Catatan</th>
                </tr>
                </thead>
                <tbody>";

$sql = $_POST['query_script'];
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {}
$no = 1;
while($row1=  sqlsrv_fetch_array($stmt1))
{
             echo "<tr align='left'>
                  <td>$no</td>
                  <td>$row1[id_profil]</td>
                  <td>$row1[height]</td>
                  <td>$row1[weight]</td>
                  <td>$row1[eyecolor]</td>
                  <td>$row1[haircolor]</td>
                  <td>$row1[scar]</td>
                  <td>$row1[glasses]</td>
                  <td>$row1[build]</td>
                  <td>$row1[hairlength]</td>
                  <td>$row1[tattoos]</td>
                  <td>$row1[blood]</td>
                  <td>$row1[note]</td>
                  </tr>";
$no++;
}
          echo "</tbody>";
          echo "</table>";
          echo "</html>"; 

}

if (isset($_POST['e_ic'])) {//ic

$filename = date("Ymdhms");

  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=$filename.xls");

            echo "<br>
              <strong>Maklumat KP</strong>
               <table border='1' style='font-family: calibri, Helvetica, sans-serif;'>
                <thead>
                <tr align='left' style='background-color:#169f85;'>
                  <th>No</th>
                  <th>ID Profil</th>
                  <th>No.KP</th>
                  <th>Status</th>
                  <th>Keselamatan</th>
                  <th>Jenis Kad</th>
                  <th>Nama Pertama</th>
                  <th>Nama Tengah</th>
                  <th>Nama Akhir</th>
                  <th>Alamat</th>
                  <th>Poskod</th>
                  <th>Bandar</th>
                  <th>Negeri</th>
                  <th>Negara</th>
                  <th>Catatan</th>
                </tr>
                </thead>
                <tbody>";

$sql = $_POST['query_script'];
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {}
$no = 1;
while($row1=  sqlsrv_fetch_array($stmt1))
{
             echo "<tr align='left'>
                  <td>$no</td>
                  <td>$row1[id_profil]</td>
                  <td>$row1[nom]</td>
                  <td>$row1[status]</td>
                  <td>$row1[security]</td>
                  <td>$row1[cardtype]</td>
                  <td>$row1[firstname]</td>
                  <td>$row1[middlename]</td>
                  <td>$row1[lastname]</td>
                  <td>$row1[add1] $row1[add2] $row1[add3]</td>
                  <td>$row1[poscode]</td>
                  <td>$row1[city]</td>
                  <td>$row1[state]</td>
                  <td>$row1[country]</td>
                  <td>$row1[note]</td>
                  </tr>";
$no++;
}
          echo "</tbody>";
          echo "</table>";
          echo "</html>"; 

}

if (isset($_POST['e_passport'])) {//passport

$filename = date("Ymdhms");

  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=$filename.xls");

            echo "<br>
              <strong>Maklumat Passport</strong>
               <table border='1' style='font-family: calibri, Helvetica, sans-serif;'>
                <thead>
                <tr align='left' style='background-color:#169f85;'>
                  <th>No</th>
                  <th>ID Profil</th>
                  <th>Status</th>
                  <th>No Baru</th>
                  <th>No Lama</th>
                  <th>MRZ</th>
                  <th>Jenis</th>
                  <th>Nama Pertama</th>
                  <th>Nama Tengah</th>
                  <th>Nama Akhir</th>
                  <th>Kod Negara</th>
                  <th>Gender</th>
                  <th>Tarikh Lahir</th>
                  <th>Umur</th>
                  <th>Warganegara</th>
                  <th>Tarikh Isu</th>
                  <th>Tarikh Tamat</th>
                  <th>Tempat Isu</th>
                  <th>Negara Isu</th>
                  <th>Tinggi</th>
                  <th>Berat</th>
                  <th>Catatan</th>
                </tr>
                </thead>
                <tbody>";

$sql = $_POST['query_script'];
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {}
$no = 1;
while($row1=  sqlsrv_fetch_array($stmt1))
{
             echo "<tr align='left'>
                  <td>$no</td>
                  <td>$row1[id_profil]</td>
                  <td>$row1[status]</td>
                  <td>$row1[nomnew]</td>
                  <td>$row1[nomold]</td>
                  <td>$row1[mrz]</td>
                  <td>$row1[type]</td>
                  <td>$row1[firstname]</td>
                  <td>$row1[middlename]</td>
                  <td>$row1[lastname]</td>
                  <td>$row1[countrycode]</td>
                  <td>$row1[gender]</td>
                  <td>$row1[birth]</td>
                  <td>$row1[age]</td>
                  <td>$row1[nationality]</td>
                  <td>$row1[dateissue]</td>
                  <td>$row1[dateexpired]</td>
                  <td>$row1[issueplace]</td>
                  <td>$row1[issuecountry]</td>
                  <td>$row1[height]</td>
                  <td>$row1[weight]</td>
                  <td>$row1[note]</td>
                  </tr>";
$no++;
}
          echo "</tbody>";
          echo "</table>";
          echo "</html>"; 

}

if (isset($_POST['e_drivelicense'])) {//drivelicense

$filename = date("Ymdhms");

  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=$filename.xls");

            echo "<br>
              <strong>Maklumat Lesen Memandu</strong>
               <table border='1' style='font-family: calibri, Helvetica, sans-serif;'>
                <thead>
                <tr align='left' style='background-color:#169f85;'>
                  <th>No</th>
                  <th>ID Profil</th>
                  <th>No Siri</th>
                  <th>Status</th>
                  <th>Kelas</th>
                  <th>Nama Pertama</th>
                  <th>Nama Tengah</th>
                  <th>Nama Akhir</th>
                  <th>Warganegara</th>
                  <th>Tarikh Mula</th>
                  <th>Tarikh Tamt</th>
                  <th>Tempat Isu</th>
                  <th>Negara</th>
                  <th>Catatan</th>
                </tr>
                </thead>
                <tbody>";

$sql = $_POST['query_script'];
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {}
$no = 1;
while($row1=  sqlsrv_fetch_array($stmt1))
{
             echo "<tr align='left'>
                  <td>$no</td>
                  <td>$row1[id_profil]</td>
                  <td>$row1[serialno]</td>
                  <td>$row1[status]</td>
                  <td>$row1[class]</td>
                  <td>$row1[firstname]</td>
                  <td>$row1[middlename]</td>
                  <td>$row1[lastname]</td>
                  <td>$row1[nationality]</td>
                  <td>$row1[startdate]</td>
                  <td>$row1[expireddate]</td>
                  <td>$row1[placeissue]</td>
                  <td>$row1[country]</td>
                  <td>$row1[note]</td>
                  </tr>";
$no++;
}
          echo "</tbody>";
          echo "</table>";
          echo "</html>"; 

}

if (isset($_POST['e_transportation'])) {//transportation

$filename = date("Ymdhms");

  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=$filename.xls");

            echo "<br>
              <strong>Maklumat Tranport</strong>
               <table border='1' style='font-family: calibri, Helvetica, sans-serif;'>
                <thead>
                <tr align='left' style='background-color:#169f85;'>
                  <th>No</th>
                  <th>ID Profil</th>
                  <th>No Pendaftaran</th>
                  <th>Status</th>
                  <th>Jenis</th>
                  <th>Buatan</th>
                  <th>Model</th>
                  <th>Warna</th>
                  <th>Tahun</th>
                  <th>Tarikh Daftar</th>
                  <th>Catatan</th>
                </tr>
                </thead>
                <tbody>";

$sql = $_POST['query_script'];
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {}
$no = 1;
while($row1=  sqlsrv_fetch_array($stmt1))
{
             echo "<tr align='left'>
                  <td>$no</td>
                  <td>$row1[id_profil]</td>
                  <td>$row1[registno]</td>
                  <td>$row1[status]</td>
                  <td>$row1[type]</td>
                  <td>$row1[maker]</td>
                  <td>$row1[model]</td>
                  <td>$row1[color]</td>
                  <td>$row1[year]</td>
                  <td>$row1[registdate]</td>
                  <td>$row1[note]</td>
                  </tr>";
$no++;
}
          echo "</tbody>";
          echo "</table>";
          echo "</html>"; 

}

if (isset($_POST['e_mobileno'])) {//mobileno

$filename = date("Ymdhms");

  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=$filename.xls");

            echo "<br>
              <strong>Maklumat Telekomunikasi</strong>
               <table border='1' style='font-family: calibri, Helvetica, sans-serif;'>
                <thead>
                <tr align='left' style='background-color:#169f85;'>
                  <th>No</th>
                  <th>ID Profil</th>
                  <th>No.Tel</th>
                  <th>Services</th>
                  <th>Tarikh Daftar</th>
                  <th>Tarikh Tamat</th>
                  <th>Status</th>
                  <th>Menara</th>
                  <th>Rekod</th>
                  <th>Catatan</th>
                </tr>
                </thead>
                <tbody>";

$sql = $_POST['query_script'];
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {}
$no = 1;
while($row1=  sqlsrv_fetch_array($stmt1))
{
             echo "<tr align='left'>
                  <td>$no</td>
                  <td>$row1[id_profil]</td>
                  <td>$row1[nom]</td>
                  <td>$row1[service]</td>
                  <td>$row1[registdate]</td>
                  <td>$row1[terminatedate]</td>
                  <td>$row1[status]</td>
                  <td>$row1[tower]</td>
                  <td>$row1[record]</td>
                  <td>$row1[note]</td>
                  </tr>";
$no++;
}
          echo "</tbody>";
          echo "</table>";
          echo "</html>"; 

}

if (isset($_POST['e_msocial'])) {//msocial

$filename = date("Ymdhms");

  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=$filename.xls");

            echo "<br>
              <strong>Maklumat Media Sosial</strong>
               <table border='1' style='font-family: calibri, Helvetica, sans-serif;'>
                <thead>
                <tr align='left' style='background-color:#169f85;'>
                  <th>No</th>
                  <th>ID Profil</th>
                  <th>Jenis Media Sosial</th>
                  <th>Id Pengguna</th>
                  <th>Nama Penuh</th>
                  <th>Nama Pengguna</th>
                  <th>URL</th>
                  <th>Catatan</th>
                </tr>
                </thead>
                <tbody>";

$sql = $_POST['query_script'];
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {}
$no = 1;
while($row1=  sqlsrv_fetch_array($stmt1))
{
             echo "<tr align='left'>
                  <td>$no</td>
                  <td>$row1[id_profil]</td>
                  <td>$row1[sm_id]</td>
                  <td>$row1[sm_type]</td>
                  <td>$row1[sm_fname]</td>
                  <td>$row1[sm_name]</td>
                  <td>$row1[sm_url]</td>
                  <td>$row1[notas]</td>
                  </tr>";
$no++;
}
          echo "</tbody>";
          echo "</table>";
          echo "</html>"; 

}

if (isset($_POST['e_bank'])) {//bank

$filename = date("Ymdhms");

  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=$filename.xls");

            echo "<br>
              <strong>Maklumat Bank</strong>
               <table border='1' style='font-family: calibri, Helvetica, sans-serif;'>
                <thead>
                <tr align='left' style='background-color:#169f85;'>
                  <th>No</th>
                  <th>ID Profil</th>
                  <th>Nama Bank</th>
                  <th>No.Akaun</th>
                  <th>Pemegang Akaun</th>
                  <th>Jenis Akaun</th>
                  <th>Lokasi Akaun</th>
                  <th>Baki Akaun</th>
                  <th>Alamat Bank</th>
                  <th>Catatan</th>
                </tr>
                </thead>
                <tbody>";

$sql = $_POST['query_script'];
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {}
$no = 1;
while($row1=  sqlsrv_fetch_array($stmt1))
{
             echo "<tr align='left'>
                  <td>$no</td>
                  <td>$row1[id_profil]</td>
                  <td>$row1[n_bank]</td>
                  <td>$row1[n_aka]</td>
                  <td>$row1[p_aka]</td>
                  <td>$row1[j_aka]</td>
                  <td>$row1[l_aka]</td>
                  <td>$row1[b_aka]</td>
                  <td>$row1[a_bank]</td>
                  <td>$row1[note]</td>
                  </tr>";
$no++;
}
          echo "</tbody>";
          echo "</table>";
          echo "</html>"; 

}

if (isset($_POST['e_bank_syarikat'])) {//bank_syarikat

$filename = date("Ymdhms");

  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=$filename.xls");

            echo "<br>
              <strong>Maklumat Bank</strong>
               <table border='1' style='font-family: calibri, Helvetica, sans-serif;'>
                <thead>
                <tr align='left' style='background-color:#169f85;'>
                  <th>No</th>
                  <th>No.Syarikat</th>
                  <th>Nama Bank</th>
                  <th>No.Akaun</th>
                  <th>Pemegang Akaun</th>
                  <th>Jenis Akaun</th>
                  <th>Lokasi Akaun</th>
                  <th>Baki Akaun</th>
                  <th>Alamat Bank</th>
                  <th>Catatan</th>
                </tr>
                </thead>
                <tbody>";

$sql = $_POST['query_script'];
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {}
$no = 1;
while($row1=  sqlsrv_fetch_array($stmt1))
{
             echo "<tr align='left'>
                  <td>$no</td>
                  <td>$row1[id_syarikat]</td>
                  <td>$row1[n_bank]</td>
                  <td>$row1[n_aka]</td>
                  <td>$row1[p_aka]</td>
                  <td>$row1[j_aka]</td>
                  <td>$row1[l_aka]</td>
                  <td>$row1[b_aka]</td>
                  <td>$row1[a_bank]</td>
                  <td>$row1[note]</td>
                  </tr>";
$no++;
}
          echo "</tbody>";
          echo "</table>";
          echo "</html>"; 

}

if (isset($_POST['e_com_pany'])) {//com_pany

$filename = date("Ymdhms");

  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=$filename.xls");

            echo "<br>
              <strong>Maklumat Syarikat</strong>
               <table border='1' style='font-family: calibri, Helvetica, sans-serif;'>
                <thead>
                <tr align='left' style='background-color:#169f85;'>
                  <th>No</th>
                  <th>ID Profil</th>
                  <th>Nama Syarikat</th>
                  <th>Milikan</th>
                  <th>No.Syarikat</th>
                  <th>Tarikh Luput</th>
                  <th>Sektor</th>
                  <th>Alamat</th>
                  <th>No.Tel</th>
                  <th>Sambungan Syarikat</th>
                  <th>Fax</th>
                  <th>Emel</th>
                  <th>Laman Sesawang</th>
                  <th>Catatan</th>
                </tr>
                </thead>
                <tbody>";

$sql = $_POST['query_script'];
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {}
$no = 1;
while($row1=  sqlsrv_fetch_array($stmt1))
{
             echo "<tr align='left'>
                  <td>$no</td>
                  <td>$row1[id_profil]</td>
                  <td>$row1[c_name]</td>
                  <td>$row1[mili_s]</td>
                  <td>$row1[no_c]</td>
                  <td>$row1[exp_regist]</td>
                  <td>$row1[sek]</td>
                  <td>$row1[ala]</td>
                  <td>$row1[tel]</td>
                  <td>$row1[exttel]</td>
                  <td>$row1[fax]</td>
                  <td>$row1[email]</td>
                  <td>$row1[web]</td>
                  <td>$row1[note]</td>
                  </tr>";
$no++;
}
          echo "</tbody>";
          echo "</table>";
          echo "</html>"; 

}

if (isset($_POST['e_house'])) {//house

$filename = date("Ymdhms");

  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=$filename.xls");

            echo "<br>
              <strong>Maklumat Rumah</strong>
               <table border='1' style='font-family: calibri, Helvetica, sans-serif;'>
                <thead>
                <tr align='left' style='background-color:#169f85;'>
                  <th>No</th>
                  <th>ID Profil</th>
                  <th>ID Pendaftaran</th>
                  <th>Jenis Rumah</th>
                  <th>Status Rumah</th>
                  <th>Sewa Bulanan</th>
                  <th>Tarikh Mula Sewa</th>
                  <th>Warna Rumah</th>
                  <th>Pemilik</th>
                  <th>Catatan</th>
                </tr>
                </thead>
                <tbody>";

$sql = $_POST['query_script'];
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {}
$no = 1;
while($row1=  sqlsrv_fetch_array($stmt1))
{
             echo "<tr align='left'>
                  <td>$no</td>
                  <td>$row1[id_profil]</td>
                  <td>$row1[id_regis]</td>
                  <td>$row1[hse_type]</td>
                  <td>$row1[hse_stat]</td>
                  <td>$row1[month_rent]</td>
                  <td>$row1[rent_since]</td>
                  <td>$row1[hse_col]</td>
                  <td>$row1[owner]</td>
                  <td>$row1[notas]</td>
                  </tr>";
$no++;
}
          echo "</tbody>";
          echo "</table>";
          echo "</html>"; 

}
?>