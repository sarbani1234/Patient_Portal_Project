<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['meddbaid']==0)) {
  header('location:logout.php');
  } else{


?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Admin: Manage Clinic</title>
    
<body>
    
   
    
<?php include_once('includes/header.php');
include_once('includes/sidebar.php');
include_once('includes/footer.php');
?>

 <h1>Manage Clinic</h1>               
<table border="5">
   <thead>
        <tr>
           <th>#</th>
           <th >Department Name</th>
           <th >Clinic</th>
           <th>Action</th>
                                                    
        </tr>
    </thead>
      <tbody>

<?php
if(isset($_SESSION["meddbaid"])){
$rno=mt_rand(10000,99999);  
$query=mysqli_query($con,"select * from tbldept_wise_clinic");
$num=mysqli_num_rows($query);
if($num>0){
$cnt=1;
while($row=mysqli_fetch_array($query))
{    
?>                                                
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['department_name'];?></td>
<td><?php echo $row['clinic'];?></td>
<td>
<a href="edit-clinic.php?cl_id=<?php echo base64_encode($row['clinic_id'].$rno);?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit">Edit</a>
</td>
</tr>
<?php 
$cnt++;
}} else {
    echo "<script>alert('No clinic has uploaded!!')</script>"; 
}} ?>
                                                
                                            </tbody>
                                        </table>
                              
</body>
</html>
<?php } ?>