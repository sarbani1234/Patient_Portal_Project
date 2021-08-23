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
    
    <title>Doctor: Manage Dates</title>
    
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

 <h1>Manage Dates</h1>               
<table border="5">
   <thead>
        <tr>
           <th>#</th>
           <th >Doctor Name</th>
           <th >Department Name</th>
           <th >Dates</th>
           <th>Day</th>
           <th>Action</th>
                                                    
        </tr>
    </thead>
      <tbody>

<?php
if(isset($_SESSION["meddbdid"])){
$rno=mt_rand(10000,99999);  
$query=mysqli_query($con,"select * from tbldate where DoctorName = '$dname' order by ID");
$num=mysqli_num_rows($query);
if($num>0){
$cnt=1;
while($row=mysqli_fetch_array($query))
{    
?>                                                
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['DoctorName'];?></td>
<td><?php echo $row['DepartmentName'];?></td>
<td><?php echo $row['Date'];?></td>
<td><?php echo $row['Day'];?></td>
<td>
<a href="edit_date.php?dates_id=<?php echo base64_encode($row['ID'].$rno);?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit">Edit</a>
</td>
</tr>
<?php 
$cnt++;
}} else {
    echo "<script>alert('Dates has not been uploaded!!')</script>"; 
}} ?>
                                                
                                            </tbody>
                                        </table>
                              
</body>
</html>
<?php } ?>