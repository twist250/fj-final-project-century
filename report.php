<?php
ob_start();
include('authentication.php');
include('dbconfig.php');
?>
<html>
<head>
  <link  rel="stylesheet" type="text/css" href="css/report1.css"/>
</head>
<body>
<div class="img"><img src="img/century.png"/></div><br>
<b>Century Cinemas</b><br>
<b>Description: Daily tickets bookings Report</b><br>
<b>Date:<?php echo date('Y-m-d');?></b><br>
<b>Hour:<?php echo date("h:i");?></b>
<div id="address">
<b>Century Cinemas</b><br>
<b>KCT,KN 2 St,Kigali</b><br>
<b>0789122222</b><br><br><br>
</div>
<table width='600' style="border: 2px solid;">
<tr style="background-color:rgb(204, 102, 0);">
  <th>NO</th>
  <th>First name</th>
  <th>Last name</th>
  <th>Movie</th>
  <th>Date</th>
  <th>Hour</th>
  <th>Tickets</th>
  <th>Payment</th>
</tr>

<?php
mysql_connect("localhost","root","");
mysql_select_db("century");
$today=date('Y-m-d');
$qry="SELECT * from payment";
$run=mysql_query($qry);
$qry1=mysql_query("SELECT * from user where='$usernow'");
while($row=mysql_fetch_array($run))
{
  $pid=$row[0];
  $fname=$row[1];
  $lname=$row[2];
  $mid=$row[3];
  $date=$row[4];
  $time=$row[5];
  $tkt=$row[6];
  $payment=$row[7];
?>
<tr>
<td><?php echo $pid; ?></td>
<td style="text-align: center"><?php echo $fname; ?></td>
<td><?php echo $lname; ?></td>
<td><?php echo $mid; ?></td>
<td><?php echo $date; ?></td>
<td><?php echo $time; ?></td>
<td><?php echo $tkt; ?></td>
<td><?php echo $payment; ?></td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>
<?php
include("mpdf60/mpdf.php");
$mpdf=new mPDF('P','A4');
$mpdf->SetDisplayMode('fullpage');
$stylesheet = file_get_contents('mpdf60/mpdfstyletables.css');
$mpdf->WriteHTML($stylesheet,1);
$report_content=ob_get_contents();
$mpdf->WriteHTML($report_content,2);
$mpdf->Output('Century_cinemas.pdf','I');
exit;
?>
