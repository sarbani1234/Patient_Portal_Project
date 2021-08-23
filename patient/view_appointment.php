<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['meddbpid']==0)) {
  header('location:logout.php');
  } 
else{  


?>
<!DOCTYPE html>
<html>
<head>
    <title>Patient: View Appointment</title>
    <link rel="stylesheet" type="text/css" href="headernew.css">
  <link rel="stylesheet" type="text/css" href="custlogin.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="tab.css">
    <link rel="stylesheet" type="text/css" href="topnav.css">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
</head>
<body>
<div>   
 <div id="pdf" style="position: absolute;top: 2000px;">
<?php 

$pmode="Card";
$inid=substr(base64_decode($_GET['invid']),0,-5);
$query=mysqli_query($con,"select distinct Appointment_No,Invoice_No,Patient_Name,Guardian_Name,Email,City,State,Pincode,Mobile_no,Address,Payment_GenDate  from tblpatient_payment  where Invoice_No='$inid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{ $appointment = $row['Appointment_No'];    
?>
<h1>Appointment form</h1>
<span style="font-size:20px;"><b>Date:  </b><span ><?php echo $row['Payment_GenDate'];?></span></span><br><br>
<span style="font-size:20px;"><b>Invoice / Receipt   </b><span><?php echo $row['Invoice_No'];?></span></span><br><br>
<span style="font-size:20px;"><b>Appointment No  </b><span><?php echo $appointment;?></span></span><br><br>
<span style="font-size:20px;"><b>Patient_Name  </b><span><?php echo $row['Patient_Name'];?></span></span><br><br>
<span style="font-size:20px;"><b>Guardian Name  </b><span><?php echo $row['Guardian_Name'];?></span></span><br><br>
<span style="font-size:20px;"><b>Mobile No </b><span><?php echo $row['Mobile_no'];?></span></span><br><br>
<span style="font-size:20px;"><b>Email  </b><span><?php echo $row['Email'];?></span></span><br><br>
<span style="font-size:20px;"><b>Address </b><span><?php echo $row['Address'];?></span></span><br><br>
<span style="font-size:20px;"><b>City  </b><span><?php echo $row['City'];?></span></span><br><br>
<span style="font-size:20px;"><b>State  </b><span><?php echo $row['State'];?></span></span><br><br>
<span style="font-size:20px;"><b>Pin Code  </b><span><?php echo $row['Pincode'];?></span></span><br><br>
<span style="font-size:20px;"><b>Payment Mode  </b><span ><?php echo $pmode;?></span></span><br><br><br>

<?php } ?>

<?php
$query=mysqli_query($con,"select Fees from  tblslot_booking where Appointment_no = '$appointment'");
while($row=mysqli_fetch_array($query))
{ $fees=$row['Fees']; }?> 



<table border="4">
<tbody >
<tr>
<th>Sl</th>
<th style="font-size:20px;">Date</th>
<th style="font-size:20px;">Day</th>
<th style="font-size:20px;">Consultation</th>
<th style="font-size:20px;">Category</th>
<th style="font-size:20px;">Department</th>
<th style="font-size:20px;">Clinic</th>
<th style="font-size:20px;">Doctor Name</th>
<th style="font-size:20px;">Fees</th>

</tr>
                                            </thead>
                                            <tbody>
<?php 
$query=mysqli_query($con,"select * from  tblpatient_payment where Invoice_No = '$inid'");
while($row=mysqli_fetch_array($query))
{  
?>  

<tr>
<td style="font-size:20px;"><?php echo '#';?></td>
<td style="font-size:20px;"><?php echo $row['Appointment_Date'];?></td>
<td style="font-size:20px;"><?php echo $row['Appointment_Day'];?></td>
<td style="font-size:20px;"><?php echo $row['Consultation'];?></td>
<td style="font-size:20px;"><?php echo $row['Category'];?></td>
<td style="font-size:20px;"><?php echo $row['Department_name'];?></td>
<td style="font-size:20px;"><?php echo $row['Clinic'];?></td>
<td style="font-size:20px;"><?php echo $row['Doctor_name'];?></td>
<?php } ?>
<td style="font-size:20px;"><?php echo $fees;?></td>
</tr> 
<tr>
<th colspan="9" style="text-align: center;font-style: oblique;font-family: monospace;color:blue; font-size:30px;">----------Paid----------</th> 

                                             
                                            </tbody>
                                        </table>

</div>

<button style="position: absolute;top: 2000px;" class="pulse" style="" onclick="printDiv('pdf','Title')">Print</button>                                      
</tr>
</tbody>
</tbody>
</table>
</div>        
 </div> 
<?php include_once('includes/navbar.php');
include_once('includes/sidebar.php');
?>
     

 
</body>
<script type="text/javascript">
  var doc = new jsPDF();

function printDiv(divId, title) {

  let mywindow = window.open('', 'PRINT', 'height=650,width=900,top=100,left=150');

  mywindow.document.write('</head><body >');
  mywindow.document.write(document.getElementById(divId).innerHTML);
  mywindow.document.write('</body></html>');

  mywindow.document.close(); 
  mywindow.focus(); 

  mywindow.print();
  mywindow.close();

  return true;
}

</script>
</html>
<?php } ?>