<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['meddbdid']==0)) {
  header('location:logout.php');
  } 
else{  


?>
<!DOCTYPE html>
<html>
<head>
    <title>Doctor: View Appointment</title>
</head>
<body>   
   
 
<?php include_once('includes/header.php');
include_once('includes/sidebar.php');
include_once('includes/footer.php');
?>
     
<form method="post" action="appointment_process.php" novalidate>
 <div id="pdf">
<?php 

$pmode="Card";
$inid=substr(base64_decode($_GET['invid']),0,-5);
$query=mysqli_query($con,"select distinct Appointment_No,Invoice_No,Patient_Name,Guardian_Name,Email,City,State,Pincode,Mobile_no,Address,Payment_GenDate  from tblpatient_payment  where Invoice_No='$inid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{ $appointment = $row['Appointment_No'];    
?>
<h1>Appointment form</h1>
<span style="font-size:20px;"><b>Date:  </b><span ><u><?php echo $row['Payment_GenDate'];?></u></span></span><br><br>
<span style="font-size:20px;"><b>Invoice / Receipt #  </b><span><u><?php echo $row['Invoice_No'];?></u></span></span><br><br>
<span style="font-size:20px;"><b>Appointment No #  </b><span><u><?php echo $appointment;?></u></span></span><br><br>
<span style="font-size:20px;"><b>Patient_Name #  </b><span><u><?php echo $row['Patient_Name'];?></u></span></span><br><br>
<span style="font-size:20px;"><b>Guardian Name #  </b><span><u><?php echo $row['Guardian_Name'];?></u></span></span><br><br>
<span style="font-size:20px;"><b>Mobile No #  </b><span><u><?php echo $row['Mobile_no'];?></u></span></span><br><br>
<span style="font-size:20px;"><b>Email #  </b><span><u><?php echo $row['Email'];?></u></span></span><br><br>
<span style="font-size:20px;"><b>Address#  </b><span><u><?php echo $row['Address'];?></u></span></span><br><br>
<span style="font-size:20px;"><b>City#  </b><span><u><?php echo $row['City'];?></u></span></span><br><br>
<span style="font-size:20px;"><b>State #  </b><span><u><?php echo $row['State'];?></u></span></span><br><br>
<span style="font-size:20px;"><b>Pin Code #  </b><span><u><?php echo $row['Pincode'];?></u></span></span><br><br>
<span style="font-size:20px;"><b>Payment Mode #  </b><span ><u><?php echo $pmode;?></u></span></span><br><br><br>

<?php } ?>

<?php
$query=mysqli_query($con,"select Fees from  tblslot_booking where Appointment_no = '$appointment'");
while($row=mysqli_fetch_array($query))
{ $fees=$row['Fees']; }?> 


<table border="4">
<thead>
<tr>
<th>#</th>
<th style="font-size:20px;">Date</th>
<th style="font-size:20px;">Day</th>
<th style="font-size:20px;">Patient Name</th>
<th style="font-size:20px;">Consultation</th>
<th style="font-size:20px;">Category</th>
<th style="font-size:20px;">Department</th>
<th style="font-size:20px;">Clinic</th>
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
<td style="font-size:20px;"><input name="appdate" value="<?php echo $row['Appointment_Date'];?>"></td>
<td style="font-size:20px;"><input name="appday" value="<?php echo $row['Appointment_Day'];?>"></td>
<td style="font-size:20px;"><input name="pname" value="<?php echo $row['Patient_Name'];?>"></td>
<td style="font-size:20px;"><input name="cons" value="<?php echo $row['Consultation'];?>"></td>
<td style="font-size:20px;"><input name="cat" value="<?php echo $row['Category'];?>"></td>
<td style="font-size:20px;"><input name="dept" value="<?php echo $row['Department_name'];?>"></td>
<td style="font-size:20px;"><input name="clinic" value="<?php echo $row['Clinic'];?>"></td>
<?php } ?>
<td style="font-size:20px;"><input name="fees" value="<?php echo $fees;?>"></td>
</tr> 
<tr>
<th colspan="9" style="text-align: center;font-style: oblique;font-family: monospace;color:blue; font-size:30px;">----------Paid----------</th> 

                                             
                                            </tbody>
                                        </table>

</div>

<button style="text-align:center; font-size:20px;">Mark as view</button>
</form>                                      
      
</body>

</html>
<?php } ?>