<?php 
error_reporting(0);
include('include/dbconn.php');

if (isset($_POST['ex_stat'])) {
$filename = date("Ymdhms");

$sql = $_POST['sql'];
$stmt = sqlsrv_query ($conn , $sql);
if ($stmt == false) {}

require_once dirname(__FILE__) . '/excel/Classes/PHPExcel.php';
$filename = date('ymdhis');
$objPHPExcel = new PHPExcel();

$objPHPExcel->getProperties()->setCreator($_COOKIE['member_login'])
            ->setLastModifiedBy($_COOKIE['member_login'])
            ->setTitle("Auto Generate From System")
            ->setSubject("Auto Generate")
            ->setDescription("")
            ->setKeywords("")
            ->setCategory("");


$s = 0;
while ($r = sqlsrv_fetch_array($stmt)){


     $objPHPExcel->createSheet($s);
     $objPHPExcel->setActiveSheetIndex($s);
     $objPHPExcel->getActiveSheet()->getStyle('A1:Z1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('01CB9F');
     $objPHPExcel->getActiveSheet()->getStyle('A4:D4')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('D3D3D3');
     $objPHPExcel->getActiveSheet()->setTitle($r['id_fir']);
     $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'No FIR')
                                   ->SetCellValue('B1', 'Keutamaan Kes')
                                   ->SetCellValue('C1', 'Distribution')
                                   ->SetCellValue('D1', 'Status Kes')
                                   ->SetCellValue('E1', 'Nombor Fail Perisikan')
                                   ->SetCellValue('F1', 'Nombor Fail Penyiasatan')
                                   ->SetCellValue('G1', 'Tajuk')
                                   ->SetCellValue('H1', 'Klasifikasi Utama')
                                   ->SetCellValue('I1', 'Klasifikasi Kecil')
                                   ->SetCellValue('J1', 'Tarikh Daftar')
                                   ->setCellValue('K1','Pengendali Pendaftaran (RO)')
                                   ->setCellValue('L1','Pegawai Kelulusan (AO)')
                                   ->setCellValue('M1','Agensi/Jabatan Pelaporan')
                                   ->setCellValue('N1','Bahagian / Unit / Pasukan')
                                   ->setCellValue('O1','Negeri')
                                   ->setCellValue('P1','Negara')
                                   ->setCellValue('Q1','Pegawai Penerima (DO)')
                                   ->setCellValue('R1','Nombor Telefon Pegawai Penerima')
                                   ->setCellValue('S1','Emel Pegawai Penerima')
                                   ->setCellValue('T1','Pegawai AHO/SFO')
                                   ->setCellValue('U1','Nombor Telefon AHO/SFO')
                                   ->setCellValue('V1','Pasukan Perisikan')
                                   ->setCellValue('W1','Pegawai SFO/FIO')
                                   ->setCellValue('X1','Nombor Telefon SFO')
                                   ->setCellValue('Y1','Kitaran Perisikan Mula')
                                   ->setCellValue('Z1','Kitaran Perisikan Tamat');


  $stmt1 = sqlsrv_query ($conn , "SELECT * FROM [jim].[dbo].[admin] WHERE id = '".$r['id']."'");
  if ($stmt1 == false) {}
  $f = 2;
  while ($r1 = sqlsrv_fetch_array($stmt1)){
     $objPHPExcel->getActiveSheet()->SetCellValue('A'.$f,$r1['id_fir'])
                                   ->SetCellValue('B'.$f,$r1['priority'])
                                   ->SetCellValue('C'.$f,$r1['distribution'])
                                   ->SetCellValue('D'.$f,$r1['cs_status'])
                                   ->SetCellValue('E'.$f,$r1['intell_no'])
                                   ->SetCellValue('F'.$f,$r1['invest_no'])
                                   ->SetCellValue('G'.$f,$r1['title'])
                                   ->SetCellValue('H'.$f,$r1['major'])
                                   ->SetCellValue('I'.$f,$r1['minor'])
                                   ->SetCellValue('J'.$f,$r1['date_regist'])
                                   ->setCellValue('K'.$f,$r1['operator'])
                                   ->setCellValue('L'.$f,$r1['officer'])
                                   ->setCellValue('M'.$f,$r1['department'])
                                   ->setCellValue('N'.$f,$r1['team'])
                                   ->setCellValue('O'.$f,$r1['state'])
                                   ->setCellValue('P'.$f,$r1['country'])
                                   ->setCellValue('Q'.$f,$r1['do'])
                                   ->setCellValue('R'.$f,$r1['do_num'])
                                   ->setCellValue('S'.$f,$r1['do_mail'])
                                   ->setCellValue('T'.$f,$r1['aho_officer'])
                                   ->setCellValue('U'.$f,$r1['aho_num'])
                                   ->setCellValue('V'.$f,$r1['intell_team'])
                                   ->setCellValue('W'.$f,$r1['sfo_officer'])
                                   ->setCellValue('X'.$f,$r1['sfo_num'])
                                   ->setCellValue('Y'.$f,$r1['intell_start'])
                                   ->setCellValue('Z'.$f,$r1['intell_end']);
  }

     $objPHPExcel->getActiveSheet()->SetCellValue('A4','No')
                                   ->SetCellValue('B4','Nama')
                                   ->SetCellValue('C4','Nama Gelaran')
                                   ->SetCellValue('D4','Status');

  $stmt2 = sqlsrv_query ($conn , "SELECT * FROM [jim].[dbo].[profile] WHERE id_fir = '".$r['id_fir']."'");
  if ($stmt2 == false) {}
  $p = 5;
  $c = 1;
  while ($r2 = sqlsrv_fetch_array($stmt2)){

     $objPHPExcel->getActiveSheet()->SetCellValue('A'.$p,$c++)
                                   ->SetCellValue('B'.$p,$r2['firstname']." ".$r2['lastname'])
                                   ->SetCellValue('C'.$p,$r2['nickname'])
                                   ->SetCellValue('D'.$p,$r2['status']);
  $p++;
  }

$s++;
}


header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
}


if (isset($_POST['ex_kpi'])) {
$filename = date("Ymdhms");

$stmt = sqlsrv_query ($conn , "SELECT * FROM [jim].[dbo].[login]");
if ($stmt == false) {}

require_once dirname(__FILE__) . '/excel/Classes/PHPExcel.php';
$filename = date('ymdhis');
$objPHPExcel = new PHPExcel();

$objPHPExcel->getProperties()->setCreator($_COOKIE['member_login'])
            ->setLastModifiedBy($_COOKIE['member_login'])
            ->setTitle("Auto Generate From System")
            ->setSubject("Auto Generate")
            ->setDescription("")
            ->setKeywords("")
            ->setCategory("");

$styleArray = array(
  'borders' => array(
    'allborders' => array(
      'style' => PHPExcel_Style_Border::BORDER_THIN
    )
  )
);
$s = 0;
while ($r = sqlsrv_fetch_array($stmt)){


     $objPHPExcel->createSheet($s);
     $objPHPExcel->setActiveSheetIndex($s);
     $objPHPExcel->getActiveSheet()->getStyle('A1:D1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('01CB9F');
     $objPHPExcel->getActiveSheet()->getStyle('A4:B4')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('D3D3D3');
     $objPHPExcel->getActiveSheet()->getStyle('A5:B5')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('D3D3D3');
     $objPHPExcel->getActiveSheet()->getStyle('D4:E4')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('D3D3D3');
     $objPHPExcel->getActiveSheet()->getStyle('D5:E5')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('D3D3D3');
     $objPHPExcel->getActiveSheet()->getStyle('A1:D2')->applyFromArray($styleArray);
     $objPHPExcel->getActiveSheet()->setTitle(substr(str_replace('/', ' ', $r['fulname']), 0, 30));
     $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Nama')
                                   ->SetCellValue('B1', 'No Telefon')
                                   ->SetCellValue('C1', 'Email')
                                   ->SetCellValue('D1', 'Akses');


  $stmt1 = sqlsrv_query ($conn , "SELECT * FROM [jim].[dbo].[login] WHERE id = '".$r['id']."'");
  $r1 = sqlsrv_fetch_array($stmt1);
     $objPHPExcel->getActiveSheet()->SetCellValue('A2',$r1['fulname'])
                                   ->SetCellValue('B2',$r1['tel'])
                                   ->SetCellValue('C2',$r1['email'])
                                   ->SetCellValue('D2',$r1['role']);
  

     $objPHPExcel->getActiveSheet()->SetCellValue('A4','Pendaftaran')
                                   ->SetCellValue('A5','No')
                                   ->SetCellValue('B5','FIR');

  $stmt2 = sqlsrv_query ($conn , "SELECT * FROM [jim].[dbo].[admin] WHERE userk = '".$r['id']."'");
  if ($stmt2 == false) {}
  $p = 6;
  $c = 1;
  while ($r2 = sqlsrv_fetch_array($stmt2)){

     $objPHPExcel->getActiveSheet()->SetCellValue('A'.$p,$c++)
                                   ->SetCellValue('B'.$p,$r2['id_fir']);
  $p++;
  }
     $objPHPExcel->getActiveSheet()->SetCellValue('D4','Siasatan')
                                   ->SetCellValue('D5','No')
                                   ->SetCellValue('E5','FIR');

  $stmt3 = sqlsrv_query ($conn , "SELECT * FROM [jim].[dbo].[admin] WHERE user_siasatan = '".$r['id']."'");
  if ($stmt3 == false) {}
  $l = 6;
  $c = 1;
  while ($r3 = sqlsrv_fetch_array($stmt3)){

     $objPHPExcel->getActiveSheet()->SetCellValue('D'.$l,$c++)
                                   ->SetCellValue('E'.$l,$r3['id_fir']);
  $l++;
  }

$s++;
}


header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
}
?>