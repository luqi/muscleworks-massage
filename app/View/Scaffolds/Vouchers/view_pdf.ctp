<?php 
//App::import('Vendor','xtcpdf'); 
App::import('Vendor','tcpdf/tcpdf'); 
//Column titles 
$header = array('ID','FROM','EMAIL','MOBILE','TO','DATE','PRICE','STATUS','PAYMENT STATUS'); 

// create new PDF document 
$pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true); 
//$pdf = new XTCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true); 

// set document information 
$pdf->SetHeaderData(PDF_HEADER_LOGO,PDF_HEADER_LOGO_WIDTH,"All Paid Vouchers"); 

// set header and footer fonts 
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', 20)); 
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA)); 

// set default monospaced font 
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED,'', 12); 

//set margins 
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT); 
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER); 
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER); 

//set auto page breaks 
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM); 

//set image scale factor 
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO); 

// set font 
//$pdf->SetFont('helvetica', '', 11); 

//$pdf->SetTextColor(0,0,0); 

// add a page 
$pdf->AddPage(); 

$pdf->Ln(); 

$w=50; 
$h=10; 

$pdf->SetFillColor(114, 155, 120); 

echo $this->PDF->ColoredTable($header,$vouchers); 

$table= $this->PDF->ColoredTable($header,$vouchers); 

$pdf->writeHTML($table, true, true, true,true,'');  

ob_clean();

//Close and output PDF document 

$pdf->Output('vouchers.pdf', 'D'); 
exit(); 
?>