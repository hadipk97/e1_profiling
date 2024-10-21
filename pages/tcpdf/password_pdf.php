if (isset($_POST['generate_report'])) {
    
require_once('tcpdf_include.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

/**
 * Protect PDF from being printed, copied or modified. In order to being viewed, the user needs
 * to provide "ourcodeworld" as password.
 */
$pdf->SetProtection(array('print', 'copy', 'modify'), "$_POST[key]", "Codeislife", 0, null);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Code is life');
$pdf->SetTitle('REPORT');
$pdf->SetSubject('Report');
$pdf->SetKeywords('');
// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 016', PDF_HEADER_STRING);
// set header and footer fonts
$pdf->setHeaderFont(array('helvetica', '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array('helvetica', '', PDF_FONT_SIZE_DATA));
// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
// set margins
//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
//$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
//$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// add a page
$pdf->AddPage();

// set some text to print
$txt = "ujkilo;p";

// print a block of text using Write()
$pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);
$pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);
$pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);
$pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);

//Close and output PDF document to the browser
$pdf->Output('test.pdf', 'I');


}