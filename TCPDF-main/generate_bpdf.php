<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+
 
 if(!isset($_SESSION)) 
    { 
        session_start(); 
        $batch = $_SESSION['batch'];
        $numrows1=0;
        $stotal=0;
        $spun=0;
        $m=0;
        $datapoints=array(array());
        
    }
require_once('../admin/fcon.php');
     
/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('config/tcpdf_config.php');
require_once('tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Feedback Report');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
// $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
// $pdf->setFooterData(array(0,64,0), array(0,64,128));

// // set header and footer fonts
// $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
// $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));
$html =
<<<EOD
<h3 style="text-align:center;">UNIVERSITY COLLEGE OF ENGINEERING-BIT CAMPUS</h3>
<h4 style="text-align:center;">FACULTY REPORT</h4>
<p></p>
EOD;

$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

$faculty = mysqli_query($confaculty,"SELECT * FROM faculty"); 
              $numrows=mysqli_num_rows($faculty);	
          if($numrows > 0){
              while($row1=mysqli_fetch_assoc($faculty)){
               $name=$row1['fname'];

            

// Set some content to print
$html =
<<<EOD
          <h4>Name of the Staff : $name</h4>
EOD;
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
 $feed=mysqli_query($confaculty,"SELECT * FROM feedback WHERE fnm='" .$name. "' && batch='".$batch."'"); 
              $numrows1=mysqli_num_rows($feed);	
              $stotal=0;
              if($numrows1 > 0){
              while($row=mysqli_fetch_assoc($feed)){
	              $fbid = $row['fbid'];
	              $sname = $row['stnm'];
	              $sem = $row['stem'];
	              $fname = $row['fnm'];
	               $sub = $row['sub'];
	              $pun = $row['pun'];
          $spun +=$pun;
			$con = $row['con'];
			$eleq = $row['eleq'];
			$syll = $row['syll'];
			$approach = $row['approach'];
			$grading = $row['grading'];
      $clarity=$row['clk'];
      $feedform=$row['fbf'];
      $advice=$row['adv'];
      $total = $pun+$con+$eleq+$syll+$approach+$grading+$clarity+$feedform+$advice;	
      $stotal +=$total;
   }
    $stotal=$stotal/$numrows1;
    $score=($stotal/45)*100;
   $score=round($score,2);

  
   $html=
<<<EOD
<p></p>
<p>Total Score : $score %</p>
<p></p>

EOD; 
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
            

              }
              else{
                $html=
<<<EOD
<p></p>
<p>No feedback submiitted by the student.</p>
<p></p>

EOD; 
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
            

    
              }

            for($i=1;$i<9;$i++)
         {  
        
       $feed=mysqli_query($confaculty,"SELECT * FROM feedback WHERE fnm='" .$name. "' && sem=$i  && batch='".$batch."'"); 
              $numrows1=mysqli_num_rows($feed);	
              $stotal=0;
              if($numrows1 == 0){
                continue;
              }
              while($row=mysqli_fetch_assoc($feed)){
	              $fbid = $row['fbid'];
	              $sname = $row['stnm'];
	              $sem = $row['stem'];
	              $fname = $row['fnm'];
	               $sub = $row['sub'];
	              $pun = $row['pun'];
          $spun +=$pun;
			$con = $row['con'];
			$eleq = $row['eleq'];
			$syll = $row['syll'];
			$approach = $row['approach'];
			$grading = $row['grading'];
      $clarity=$row['clk'];
      $feedform=$row['fbf'];
      $advice=$row['adv'];
      $total = $pun+$con+$eleq+$syll+$approach+$grading+$clarity+$feedform+$advice;	
      $stotal +=$total;
   }
   $stotal=$stotal/$numrows1;
    $score=($stotal/45)*100;
   $score=round($score,2);
          
   $spun = $spun/$numrows1;
  
$html=
<<<EOD
   <p>Subject :  $sub</p>
   <p>No of Feedback :  $numrows1</p>
   <p>Score : $score %</p>
   <p></p>
EOD; 
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
            

}
              }
            }
//$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
            

// Print text using writeHTMLCell()
$html_content =<<<EOD
       
<p>
       <p style="text-align:left;">IQAC-Coordinator</p>
<p style="text-align:right;">DEAN</p>
</p>
EOD;
   
 //$tcpdf->xfootertext($html_content);
//$pdf->writeHTMLCell(0, 0, '', '', $html_content, 0, 0, false,true, "R", true);
//$pdf->SetY(-0.5);  
    
$pdf->writeHTML($html_content, false, false, false, true,);
//$pdf->SetY(8);
// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('Report.pdf', 'I');

//============================================================+
// END OF FILE
//
?>