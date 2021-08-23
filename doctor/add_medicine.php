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
    
    <title>Doctor: Add Medicines</title>
    
<body>
    
   
    
<?php include_once('includes/header.php');
include_once('includes/sidebar.php');
include_once('includes/footer.php');
?>

 <h1>Add Medicines</h1>

 <?php
    if(isset($_SESSION["meddbdid"])){
        $ret=mysqli_query($con,"select FullName from tbldocapprove where ID='$_SESSION[meddbdid]'");
            while($row=mysqli_fetch_array($ret))
            {$dname=$row['FullName']; }}?>
             
<table border="2">
   <thead>
        <tr>
           <th>#</th>
           <th>Patient Name</th>
           <th>Department Name</th>
           <th>Clinic</th>
           <th>Action</th>
                                                    
        </tr>
    </thead>
      <tbody>

<?php
if(isset($_SESSION["meddbdid"])){
$rno=mt_rand(10000,99999);  
$query=mysqli_query($con,"select * from tblprescription");
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
<td><?php echo $row['Clinic'];?></td>
<td>
<a href="view_add-medicines.php?pres_id=<?php echo base64_encode($row['Prescription_id'].$rno);?>">Add Medicines</a></td>
</tr>
<?php 
$cnt++;
}} else {
    echo "<script>alert('You have not not viewed any of the appoinments !!')</script>"; 
}} ?>
                                                
                                            </tbody>
                                        </table>
                              
</body>
</html>
<?php } ?>