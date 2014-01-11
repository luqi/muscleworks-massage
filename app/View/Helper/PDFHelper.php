<?php

/* /app/View/Helper/LinkHelper.php */
App::uses('AppHelper', 'View/Helper');

class PDFHelper extends AppHelper {

    function ColoredTable($header, $data) {
        
// Header
        $w = array(50,100,210,100,100,100,100,100,100,100);
        $num_headers = count($header);
        $tbl= '<table cellpadding="0" cellspacing="0" border="0">';
  
        $time2 = date('d/m/Y');
        $tbl.='<div align="right" style="background-color:#fff"><p>Printed on:</p>'.$time2.'</div>';        
$tbl.='<tr bgcolor="#F78F20">';
        for ($i = 0; $i < $num_headers; ++$i) {
            $tbl.='<td class="heading" width="' . $w[$i] . '">' . $header[$i] . '</td>';
        }
        $tbl.="</tr>";

//$fill=0;
        $rowCount = 0;
        $bill=0;
        $total1=0;
        foreach ($data as $row) {
            
            if ($rowCount % 2 == 0) {
                $tbl.='<tr valign="top" bgcolor="#fff">';
            } else {
                $tbl.='<tr valign="top">';
            }
            $time = date('d/m/Y',strtotime($row['Taxvoucher']['date_purchase']));
            $tbl.="<td>" . $row['Taxvoucher']['id'] . "</td>";
            $tbl.="<td>" . $row['Taxvoucher']['from_name'] . "</td>";
            $tbl.="<td>" . $row['Taxvoucher']['from_email'] . "</td>";
            $tbl.="<td>" . $row['Taxvoucher']['phoneNumber_1'] . "</td>";
            $tbl.="<td>" . $row['Taxvoucher']['to_name'] . "</td>";
           $tbl.="<td>".$time."</td>";
           
            $tbl.="<td> $" . $row['Taxvoucher']['price'] . "</td>";
	    $tbl.="<td>" . $row['Taxvoucher']['status'] . "</td>";
            $tbl.="<td>" . $row['Taxvoucher']['payment'] . "</td>";
            $tbl.="</tr>";
            $total1=$total1+$row['Taxvoucher']['price'];
            $rowCount++;
        }
        
        
        $tbl.="<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
        $tbl.="<tr><td></td><td></td><td></td><td></td><td></td><td>Sub Total:</td><td>$".$total1."</td></tr>";
        $tbl.="<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
        $tbl.="</table>";
       
        
        return $tbl;
   
    }
    
        function ColoredTable1($header,$data) {
        
// Header
        $w = array(50,100,210,100,100,100,100,100,100,100);
        $num_headers = count($header);
        $tbl= '<table cellpadding="0" cellspacing="0" border="0">';
        $tbl.='<tr bgcolor="#F78F20">';
        for ($i = 0; $i < $num_headers; ++$i) {
            $tbl.='<td class="heading" width="' . $w[$i] . '">' . $header[$i] . '</td>';
        }
        $tbl.="</tr>";

//$fill=0;
        $rowCount = 0;
        $bill=0;
        $total=0;
        foreach ($data as $row) {
            
            if ($rowCount % 2 == 0) {
                $tbl.='<tr valign="top" bgcolor="#fff">';
            } else {
                $tbl.='<tr valign="top">';
            }
            $time = date('d/m/Y',strtotime($row['Voucher']['date_purchase']));
            $tbl.="<td>" . $row['Voucher']['id'] . "</td>";
            $tbl.="<td>" . $row['Voucher']['from_name'] . "</td>";
            $tbl.="<td>" . $row['Voucher']['from_email'] . "</td>";
            $tbl.="<td>" . $row['Voucher']['phoneNumber_1'] . "</td>";
            $tbl.="<td>" . $row['Voucher']['to_name'] . "</td>";
           $tbl.="<td>".$time."</td>";
           
            $tbl.="<td> $" . $row['Voucher']['price'] . "</td>";
	    $tbl.="<td>" . $row['Voucher']['status'] . "</td>";
            $tbl.="<td>" . $row['Voucher']['payment'] . "</td>";
            $tbl.="</tr>";
            $total=$total+ $row['Voucher']['price'];
            $rowCount++;
            
        }
        
        $tbl.="<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
        $tbl.="<tr><td></td><td></td><td></td><td></td><td></td><td>Sub Total:</td><td>$".$total."</td></tr>";
        $tbl.="<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
       
        $tbl.="</table>";

       
        
    }
    
    
    

}

?>
