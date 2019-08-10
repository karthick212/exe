<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="stylesheets/css/bootstrap.min3f0d.css">
<?php 

include 'config.php';
$invoiceno=$_GET['customer'];
$d=date("d/m/Y")

?><script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=1000,height=1000');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
           popupWin.document.close();
                }
     </script>
     <script>
function printPage(id)
{
   var html="<html>";
   html+= document.getElementById(id).innerHTML;

   html+="</html>";

   var printWin = window.open('', '_blank', 'width=1000,height=1000');
   printWin.document.write(html);
   printWin.document.close();
   printWin.focus();
   printWin.print();
   printWin.close();
}
</script>
     <script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>
 <script type="text/javascript">     

function myFunction() {
    window.print();
}
</script>
<body><div id="block1"> 
				
<table width="800" border="0" align="center">
  <tr>
    <td><table width="800" border="0" align="center">
      <tr>
        <td colspan="5" align="center"><img src="../mandral/images/user.png"? /></td>
       
      </tr>
      <tr>
        <td width="85">&nbsp;</td>
        <td width="170">&nbsp;</td>
        <td width="180">&nbsp;</td>
        <td width="199">&nbsp;</td>
        <td width="144">&nbsp;</td>
      </tr>
   <tr>
        <td height="150">&nbsp;</td>
       
        <td><span style="font-weight:bold;">Sree Balaje Matrimony:</span><br />17/B Nallathambi Street <br> Villapuram, &nbsp; Madurai-12.</td>
         <td>&nbsp;</td>
        <td align="right" >Invoice No:<br />Date:</td>
        <td style="font-weight:bold;" >&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:18px;"><?php echo $invoiceno;?></span><br /><?php echo $d;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr style="font-weight:bold;">
        <td>&nbsp;</td>
        <td>S.No</td>
        <td>No Of Profile</td>
        <td>Amount/Jathagam</td>
        <td>Total</td>
      </tr>
     <?php 
            
          
		
            $sel=mysql_query("select * from invoice where bill_no='$invoiceno'");
           
              while($row=mysql_fetch_array($sel))
              {
				 
				
  ?>

 <tr>
        <td height="69">&nbsp;</td>
        <td>1</td>
        <td><?php echo $row['quantity'];?></td>
        <td><?php echo $row['price'];?></td>
        <td><?php echo $row['netamount']; ?></td>
      </tr><?php } ?>
       <tr>
        <td height="136">&nbsp;</td>
        <td  valign="bottom">Amount(In Word)</td>
        <td valign="bottom" style="font-weight:bold;"><?php 
            
          
		  $sel=mysql_query("select * from invoice where bill_no='$invoiceno'");
           
              while($row1=mysql_fetch_array($sel))
              {
				  
				  $totalamount=$row1['netamount'];
				  
			  }
				   
				  ?>
                  
                  
                  
                  


Rs. <?php
  
   $s=$totalamount;
$number = $s;
   $no = round($number);
   $point = round($number - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'One', '2' => 'Two',
    '3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
    '7' => 'Seven', '8' => 'Eight', '9' => 'Nine',
    '10' => 'Ten', '11' => 'Eleven', '12' => 'Twelve',
    '13' => 'Thirteen', '14' => 'Fourteen',
    '15' => 'Fifteen', '16' => 'Sixteen', '17' => 'Seventeen',
    '18' => 'Eighteen', '19' =>'Nineteen', '20' => 'Twenty',
    '30' => 'Thirty', '40' => 'Forty', '50' => 'Fifty',
    '60' => 'Sixty', '70' => 'Seventy',
    '80' => 'Eighty', '90' => 'Ninety');
   $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);
  $points = ($point) ?
    "." . $words[$point / 10] . " " . 
          $words[$point = $point % 10] : '';
  echo $result . "Rupees only";
 ?></td>
        <td valign="bottom" align="right">Total:</td>
        <td valign="bottom" style="font-weight:bold;">150</td>
      </tr>
       <tr>
        <td height="55">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
       <tr>
        <td height="">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        
        <td colspan="2" align="center">Authorized Sign</td>
      </tr>
    </table></td>
  </tr>
</table></div><div align="center">
    <INPUT class="btn btn-success" type="button" value="Print" onclick="printPage('block1');"/> &nbsp; &nbsp; &nbsp;<a href="dashboard.php">Home</a>
    </div><script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=1000,height=1000');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
           popupWin.document.close();
                }
     </script>
     <script>
function printPage(id)
{
   var html="<html>";
   html+= document.getElementById(id).innerHTML;

   html+="</html>";

   var printWin = window.open('', '_blank', 'width=1000,height=1000');
   printWin.document.write(html);
   printWin.document.close();
   printWin.focus();
   printWin.print();
   printWin.close();
}
</script>
     <script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>
 <script type="text/javascript">     

function myFunction() {
    window.print();
}
</script>
</body>
</html>