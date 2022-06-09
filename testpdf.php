<?php

use setasign\Fpdi\Tcpdf\Fpdi;

require('./vendor/autoload.php');

$pdf = new Fpdi();

// set the source file
$pageCount = $pdf->setSourceFile("report.pdf");

//Import whole pages
for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {

    //Import single page 
    $templateId = $pdf->importPage($pageNo);

    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);

    //get the siz eof the importd page
    $size = $pdf->getTemplateSize($templateId);

    // //Create a Page (Landscape or Portrait depends on page)
    if ($size['w'] > $size['h']) {
        $pdf->AddPage('L', array($size['w'], $size['h']));
    } else {
        $pdf->AddPage('P', array($size['w'], $size['h']));
    }

    $pdf->useTemplate($templateId, '', '', 280, 260, true);
    // $pdf->useTemplate(
    //     $templateId, null, null, 
    //     0, 0, true
    // );
    //$pdf->useTemplate($templateId, '', '', 280, 260, true);
    //Page - 1
    if ($pageNo == 1) {

        $pdf->SetFont('freeserif');
        $pdf->SetTextColor(255, 0, 0);
        $pdf->SetXY(36, 30);
        $pdf->Write(0, 'ਮੈਂ ਘਰ ਜਾ ਰਿਹਾ ਹਾਂ');

        $pdf->SetXY(36, 40);
        $pdf->Write(0, 'ਮੈਂ ਘਰ ਜਾ ਰਿਹਾ ਹਾਂ');
    }

    //Page - 2
    if ($pageNo == 2) {

        $pdf->SetFont('freeserif');
        $pdf->SetTextColor(255, 0, 0);
        $pdf->SetXY(36, 30);
        $pdf->Write(0, 'ਮੈਂ ਘਰ ਜਾ ਰਿਹਾ ਹਾਂ');
    }

    //Page - 3
    if ($pageNo == 3) {

        $pdf->SetFont('freeserif');
        $pdf->SetTextColor(255, 0, 0);
        $pdf->SetXY(36, 10);
        $pdf->Write(0, 'ਮੈਂ ਘਰ ਜਾ ਰਿਹਾ ਹਾਂ');
    }

    //Page - 4
    if ($pageNo == 4) {

        $pdf->SetFont('freeserif');
        $pdf->SetTextColor(255, 0, 0);
        $pdf->SetXY(38, 34);
        $pdf->Write(0, 'ਮੈਂ ਘਰ ਜਾ ਰਿਹਾ ਹਾਂ');
    }
}
//ob_end_clean();
$pdf->Output(); 





// import page 1
// $tplId = $pdf->importPage(2);
// use the imported page and place it at point 10,10 with a width of 100 mm
// $data = $pdf->useTemplate($tplId, 10, 10, 380, 480, true);


// $pdf->SetFont('freeserif');
// $pdf->SetTextColor(255, 0, 0);
// $pdf->SetXY(40, 70);
// $pdf->Write(0, 'ਮੈਂ ਘਰ ਜਾ ਰਿਹਾ ਹਾਂ');

//print_r($data);
// $pdf->SetFont('freeserif', '', 24);
// $pdf->Cell(190, 18, 'Arabic: انا و انت',0, 1);


// $pdf->output('test.pdf', 'I');
