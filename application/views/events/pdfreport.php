<?php
      class MYPDF extends TCPDF {
            //Page header
            public function Header() {
                  $this->SetY(20);
                  // Set font
                  $this->SetFont('kaiu', 'B', 12);
                  // Title
                  $this->Cell(0, 15, '嘰嘰喳喳(好久好久以後...)', 0, false, 'L', 0, '', 0, false, 'M', 'M');
            }

            // Page footer
            public function Footer() {
                  // Position at 15 mm from bottom
                  $this->SetY(-15);
                  // Set font
                  $this->SetFont('kaiu', 'I', 12);
                  // Page number
                  $this->Cell(0, 14, '第'.$this->getAliasNumPage().'頁，共'.$this->getAliasNbPages().'頁', 0, false, 'C', 0, '', 0, false, 'T', 'M');
            }
      }
      
      /// extend TCPF with custom functions
      // create new PDF document
      $pdf=new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
      // set document information
      $pdf->SetCreator(PDF_CREATOR);
      // $pdf->SetAuthor('Nicola Asuni');
      // $pdf->SetTitle('TCPDF Example 005');
      // $pdf->SetSubject('TCPDF Tutorial');
      // $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
      // set default header data
      $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.'', PDF_HEADER_STRING);
      // set header and footer fonts
      $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
      $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
      // set default monospaced font
      // $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
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
      // $pdf->SetFont('kaiu', '', 14);      

      // add a page
      $pdf->AddPage();
      // test Cell stretching
      // Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')

      $style = array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));

      // Line
      $pdf->Line(30, -10, -10, 30, $style);
      $pdf->Line(40, -10, -10, 40, $style);

      /// create some HTML content
      if (!$records->updated_at) {
            $records->updated_at = $records->created_at;
      }
      $html =
      '<div width="640" colspan="4" align="right"><font size="12">製表日期：'.$records->updated_at.'</font></div>
      <table width="650" bgcolor="black" border="1">
            <tr bgcolor="white">
                  <td width="640" colspan="4"><font size="20">人資表</font></td>
            </tr>
            <tr bgcolor="white">
                  <td width="80" align="center">姓名</td>
                  <td width="150">'.$records->event_name.'</td>
                  <td width="80" align="center">證號</td>
                  <td width="130">'.$records->idnumber.'</td>
                  <td width="80" align="center">資審</td>
                  <td width="120">'.$records->validate.'</td>
            </tr>
            <tr bgcolor="white">
                  <td width="80" align="center">駐地</td>
                  <td width="150">'.$records->station.'</td>
                  <td width="80" align="center">生日</td>
                  <td width="130">'.$records->birthday.'</td>
                  <td width="80" align="center">性別</td>
                  <td width="120">'.$records->gender.'</td>
            </tr>
            <tr bgcolor="white">
                  <td width="80" align="center">學歷</td>
                  <td width="560">'.$records->education.'</td>
            </tr>
            <tr bgcolor="white">
                  <td width="80" align="center">經歷</td>
                  <td width="560">'.$records->experience.'</td>
            </tr>
            <tr bgcolor="white">
                  <td width="80" rowspan="2" align="center">聯繫方式</td>
                  <td width="50" align="center">電話</td>
                  <td width="200">'.$records->phone.'</td>
                  <td width="80" align="center">即時通訊</td>
                  <td width="230">'.$records->contact.'</td>
            </tr>
            <tr bgcolor="white">
                  <td width="50" align="center">電郵</td>
                  <td width="200">'.$records->email.'</td>
                  <td width="80" align="center">地址</td>
                  <td width="230">'.$records->address.'</td>
            </tr>
            <tr bgcolor="white">
                  <td width="80" align="center">接觸經過</td>
                  <td width="560">'.$records->process.'</td>
            </tr>
            <tr bgcolor="white">
                  <td width="80" align="center">考核策進</td>
                  <td width="560">'.$records->assess.'</td>
            </tr>
            <tr bgcolor="white">
                  <td width="80" align="center">運用規劃</td>
                  <td width="560">'.$records->use.'</td>
            </tr>
            <tr bgcolor="white">
                  <td width="80" align="center">匯補紀錄</td>
                  <td width="560">'.$records->money.'</td>
            </tr>
            <tr bgcolor="white">
                  <td width="80" align="center">工作成效</td>
                  <td width="560">'.$records->effect.'</td>
            </tr>
      </table>';
      
      // output the HTML content
      $pdf->writeHTML($html, true, false, true, false, '');

      // $pdf->Ln(5);

      //Close and output PDF document
      $date = date('YmdHis');
      $pdf->Output($records->event_name.$date.'.pdf', 'I');

?>