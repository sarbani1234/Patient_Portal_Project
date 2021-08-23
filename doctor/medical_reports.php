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
    
    <title>Doctor: Medical Reports</title>
    
<body>
    
   
    
<?php include_once('includes/header.php');
include_once('includes/sidebar.php');
include_once('includes/footer.php');
?>

 <?php
if(isset($_SESSION["meddbdid"])){
$ret=mysqli_query($con,"select FullName from tbldocapprove where ID='$_SESSION[meddbdid]'");
while($row=mysqli_fetch_array($ret))
{
$dname=$row['FullName'];?>
<?php } } ?>

 <h1>Medical Reports</h1>               
<table border="5">
   <thead>
        <tr>
           <th>#</th>
           <th>Patient Name</th>
           <th>Department</th>
           <th>Disease Name</th>
           <th>Medicine Name</th>
           <th>Medicine Company</th>
           <th>Medicine Composition</th>
           <th>Medicine Type</th>
           <th>Medicine Tablet</th>
           <th>Medicine Price</th>
           <th>Presciption Gen. Date</th>
           <th>Action</th>
                                                    
        </tr>
    </thead>
      <tbody>

<?php
if(isset($_SESSION["meddbdid"])){
$rno=mt_rand(10000,99999);  
$query=mysqli_query($con,"select * from tblprescription where Doctor_Name = '$dname' order by Prescription_id ");
$num=mysqli_num_rows($query);
if($num>0){
$cnt=1;
while($row=mysqli_fetch_array($query))
{    
?>                                                
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['Patient_Name'];?></td>
<td><?php echo $row['Department'];?></td>
<td><?php echo $row['Diseases'];?></td>
<td><?php echo $row['MedName'];?></td>
<td><?php echo $row['MedCompany'];?></td>
<td><?php echo $row['MedComposition'];?></td>
<td><?php echo $row['MedType'];?></td>
<td><?php echo $row['MedTablet'];?></td>
<td><?php echo $row['MedPrice'];?></td>
<td><?php echo $row['Prescription_GenDate'];?></td>
<td>
<a href="get_prescription.php?med_id=<?php echo base64_encode($row['Prescription_id'].$rno);?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit">Get Prescription</a>
</td>
</tr>
<?php 
$cnt++;
}} else {
    echo "<script>alert('No appoinments has been made!!')</script>"; 
}} ?>
                                                
                                            </tbody>
                                        </table>
</body>
</html>
<?php } ?>