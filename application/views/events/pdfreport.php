<?php
/// extend TCPF with custom functions
// create new PDF document
$pdf=new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// set document information
$pdf->SetCreator(PDF_CREATOR);
//$pdf->SetAuthor('Nicola Asuni');
//$pdf->SetTitle('TCPDF Example 005');
//$pdf->SetSubject('TCPDF Tutorial');
//$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 005', PDF_HEADER_STRING);
// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
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
if (@file_exists(dirname(__FILE__).'/lang/chi.php')) {
      require_once(dirname(__FILE__).'/lang/chi.php');
      $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------
// set font
$pdf->SetFont('times', '', 10);
$pdf->SetFont('cid0ct', '', 20);        //這個應該也可以

// add a page
$pdf->AddPage();
// test Cell stretching
// Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')


$style = array('width' => 3, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));

// Line
$pdf->Line(20, 0, 0, 20, $style);
$pdf->Line(30, 0, 0, 30, $style);


$text = "大家好";
/// create some HTML content
$html =
'<table width="650" bgcolor="black" border="1">
      <tr bgcolor="white">
            <td width="640" colspan="4" align="center">人資表</td>
      </tr>
      <tr bgcolor="white">
            <td width="110">姓名</td>
            <td width="210" align="center">TD 2</td>
            <td width="110">證號</td>
            <td width="210" align="center">TD 2</td>
      </tr>
      <tr bgcolor="white">
            <td width="110">駐地</td>
            <td width="100" align="center">TD 2</td>
            <td width="110">生日</td>
            <td width="110" align="center">TD 2</td>
            <td width="110">性別</td>
            <td width="100" align="center">TD 2</td>
      </tr>
      <tr bgcolor="white">
            <td width="110">經歷</td>
            <td width="530" align="center">TD 2</td>
      </tr>
      <tr bgcolor="white">
            <td width="110" rowspan="2">聯繫方式</td>
            <td width="60">電話</td>
            <td width="205">駐地</td>
            <td width="60">微信</td>
            <td width="205">駐地</td>
      </tr>
       <tr bgcolor="white">
            <td width="60">電郵</td>
            <td width="205">駐地</td>
            <td width="60">地址</td>
            <td width="205">駐地</td>
      </tr>
      <tr bgcolor="white">
            <td width="110">接觸經過</td>
            <td width="530" align="center">TD 2</td>
      </tr>
      <tr bgcolor="white">
            <td width="110">考核策進</td>
            <td width="530" align="center">TD 2</td>
      </tr>
       <tr bgcolor="white">
            <td width="110">運用規劃</td>
            <td width="530" align="center">TD 2</td>
      </tr>
      <tr bgcolor="white">
            <td width="110">工作成效</td>
            <td width="530" align="center">TD 2</td>
      </tr>
</table>';
  


// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');


//$pdf->Ln(5);

//Close and output PDF document
$pdf->Output('example_004.pdf', 'I');

?>