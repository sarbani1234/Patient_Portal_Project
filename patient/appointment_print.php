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
    <title>Patient: Manage Appointment Page</title>
</head>
<body>   
   
  
<?php include_once('includes/navbar.php');
include_once('includes/sidebar.php');
?>
     

 <div id="pdf">
<?php 

$pmode="Card";
$inid=$_SESSION['invoice'];
$query=mysqli_query($con,"select distinct Appointment_No,Invoice_No,Patient_Name,Guardian_Name,Email,City,State,Pincode,Mobile_no,Address,Payment_GenDate  from tblpatient_payment  where Invoice_No='$inid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{    
?>
<h1>Appointment form</h1>
<span style="font-size:20px;"><b>Date:  </b><span ><?php echo $row['Payment_GenDate'];?></span></span><br><br>
<span style="font-size:20px;"><b>Invoice / Receipt #  </b><span><?php echo $row['Invoice_No'];?></span></span><br><br>
<span style="font-size:20px;"><b>Appointment No #  </b><span><?php echo $row['Appointment_No'];?></span></span><br><br>
<span style="font-size:20px;"><b>Patient_Name #  </b><span><?php echo $row['Patient_Name'];?></span></span><br><br>
<span style="font-size:20px;"><b>Guardian Name #  </b><span><?php echo $row['Guardian_Name'];?></span></span><br><br>
<span style="font-size:20px;"><b>Mobile No #  </b><span><?php echo $row['Mobile_no'];?></span></span><br><br>
<span style="font-size:20px;"><b>Email #  </b><span><?php echo $row['Email'];?></span></span><br><br>
<span style="font-size:20px;"><b>Address#  </b><span><?php echo $row['Address'];?></span></span><br><br>
<span style="font-size:20px;"><b>City#  </b><span><?php echo $row['City'];?></span></span><br><br>
<span style="font-size:20px;"><b>State #  </b><span><?php echo $row['State'];?></span></span><br><br>
<span style="font-size:20px;"><b>Pin Code #  </b><span><?php echo $row['Pincode'];?></span></span><br><br>
<span style="font-size:20px;"><b>Payment Mode #  </b><span ><?php echo $pmode;?></span></span><br><br><br>

<?php } ?>

<table border="4">
<tbody >
  <tr>
<th>#</th>
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
$app_id=$_SESSION['appointment'];
$query=mysqli_query($con,"SELECT * from tblslot_booking where Appointment_no = '$app_id'");
while($row=mysqli_fetch_array($query))
{  
?>  

<tr>
<td style="font-size:20px;"><?php echo '#';?></td>
<td style="font-size:20px;"><?php echo $row['Appointment_Date'];?></td>
<td style="font-size:20px;"><?php echo $row['Appointment_Day'];?></td>
<td style="font-size:20px;"><?php echo $row['consultation'];?></td>
<td style="font-size:20px;"><?php echo $row['category'];?></td>
<td style="font-size:20px;"><?php echo $row['department_name'];?></td>
<td style="font-size:20px;"><?php echo $row['clinic'];?></td>
<td style="font-size:20px;"><?php echo $row['Doctor_Name'];?></td>
<td style="font-size:20px;"><?php echo $row['Fees'];?></td>
</tr> 
<tr>
<th colspan="9" style="text-align: center;font-style: oblique;font-family: monospace;color:blue; font-size:30px;">----------Paid----------</th> 

<?php } ?>                                             
                                            </tbody>
                                        </table>

</div>

<button style="text-align:center; font-size:20px;" onclick="printDiv('pdf','Title')">Print</button>                                      
      
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