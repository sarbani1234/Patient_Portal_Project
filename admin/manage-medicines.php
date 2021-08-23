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
    
    <title>Admin: Manage Medicines</title>
    
<body>
    
   
    
<?php include_once('includes/header.php');
include_once('includes/sidebar.php');
include_once('includes/footer.php');
?>

 <h1>Manage Medicines</h1>               
<table border="2">
   <thead>
        <tr>
           <th>#</th>
           <th>Medicine Name</th>
           <th>Medicine Company</th>
           <th>Medicine Composition</th>
           <th>Medicine Type</th>
           <th>Tablet per sleve</th>
           <th>Medicine price</th>
           <th>Action</th>
                                                    
        </tr>
    </thead>
      <tbody>

<?php
if(isset($_SESSION["meddbaid"])){
$rno=mt_rand(10000,99999);  
$query=mysqli_query($con,"select * from tblmedicines order  by  ID");
$num=mysqli_num_rows($query);
if($num>0){
$cnt=1;
while($row=mysqli_fetch_array($query))
{    
?>                                                
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['MedName'];?></td>
<td><?php echo $row['Medcompany'];?></td>
<td><?php echo $row['Medcomposition'];?></td>
<td><?php echo $row['Medtype'];?></td>
<td><?php echo $row['Tablet'];?></td>
<td><?php echo $row['Price'];?></td>
<td>
<a href="edit-medicines.php?eid=<?php echo base64_encode($row['ID'].$rno);?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit">Edit</a>
</td>
</tr>
<?php 
$cnt++;
}} else {
    echo "<script>alert('No medicines has uploaded!!')</script>"; 
}} ?>
                                                
                                            </tbody>
                                        </table>
                              
</body>
</html>
<?php } ?>