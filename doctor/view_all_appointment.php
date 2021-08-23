<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['meddbdid']==0)) {
  header('location:logout.php');
  } else{


?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Doctor: All Appointment</title>
    
<body>
    
   
    
<?php include_once('includes/header.php');
include_once('includes/sidebar.php');
include_once('includes/footer.php');
?>

 <h1>View Appointment</h1>
 <?php
if(isset($_SESSION["meddbdid"])){
$ret=mysqli_query($con,"select FullName from bldocapprove where ID='$_SESSION[meddbdid]'");
while($row=mysqli_fetch_array($ret))
{$name= $row['FullName'];} } ?>              
<table border="2">
   <thead>
        <tr>
           <th>#</th>
           <th>Appointment No</th>
           <th>Patient Name</th>
           <th>Department Name</th>
           <th>Appointment Gen. Date</th>
           <th>Action</th>
                                                    
        </tr>
    </thead>
      <tbody>

<?php
if(isset($_SESSION["meddbdid"])){
$rno=mt_rand(10000,99999);  
$query=mysqli_query($con,"select * from tblpatient_payment where Doctor_name = 'Dr. $name'");
$num=mysqli_num_rows($query);
if($num>0){
$cnt=1;
while($row=mysqli_fetch_array($query))
{    
?>
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['Appointment_No'];?></td>
<td><?php echo $row['Patient_Name'];?></td>
<td><?php echo $row['Department_name'];?></td>
<td><?php echo $row['Payment_GenDate'];?></td>
<td>
<a href="booked_appointment.php?invid=<?php echo base64_encode($row['Invoice_No'].$rno);?>">View Details</a></td>
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