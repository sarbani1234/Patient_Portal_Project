<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['meddbpid']==0)) {
  header('location:logout.php');
  } else{


?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Patient: View Appointment</title>
    
<body>
    
   
    
<?php include_once('includes/navbar.php');
include_once('includes/sidebar.php');
?>

 <h1>View Appointment</h1>
 <?php
if(isset($_SESSION["meddbpid"])){
$ret=mysqli_query($con,"select FullName from tblpatient where ID='$_SESSION[meddbpid]'");
while($row=mysqli_fetch_array($ret))
{$name= $row['FullName'];} } ?>              
<table border="2">
   <thead>
        <tr>
           <th>#</th>
           <th>Appointment No</th>
           <th>Invoice No</th>
           <th>Department Name</th>
           <th>Doctor Name</th>
           <th>Appointment Gen. Date</th>
           <th>Action</th>
                                                    
        </tr>
    </thead>
      <tbody>

<?php
if(isset($_SESSION["meddbpid"])){
$rno=mt_rand(10000,99999);  
$query=mysqli_query($con,"select * from tblpatient_payment where Patient_Name = '$name'");
$num=mysqli_num_rows($query);
if($num>0){
$cnt=1;
while($row=mysqli_fetch_array($query))
{    
?>
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['Appointment_No'];?></td>
<td><?php echo $row['Invoice_No'];?></td>
<td><?php echo $row['Department_name'];?></td>
<td><?php echo $row['Doctor_name'];?></td>
<td><?php echo $row['Payment_GenDate'];?></td>
<td>
<a href="view_appointment.php?invid=<?php echo base64_encode($row['Invoice_No'].$rno);?>">View Details</a></td>
</tr>
<?php 
$cnt++;
}} else {
    echo "<script>alert('Unable to show your Appointment!!')</script>"; 
}} ?>
                                                
                                            </tbody>
                                        </table>
                              
</body>
</html>
<?php } ?>