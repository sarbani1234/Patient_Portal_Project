<?php
session_start();
include('includes/dbconnection.php');
if (strlen($_SESSION['meddbaid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
  <?php include_once('includes/header.php');
            include_once('includes/sidebar.php');
            include_once('includes/footer.php');?>
 
<h3>Registered Doctor</h3>
<table border="2">
  <thead>
    <tr>
      <th>S.NO</th>
      <th>Department Name</th>
      <th>Doctor Name</th>     
      <th>Action</th>
    </tr>
  </thead>
     
     <tbody>
     
     <?php                              
$ret=mysqli_query($con,"select * from  tbldept_wise_dctr");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                           <tr>
                  <td><?php echo $cnt;?></td>
            
                  <td><?php  echo $row['Department_Name'];?></td>
                  <td><?php  echo $row['Doctor_Name'];?></td>
                  <td><a href="view-doctor-details.php?viewid=<?php echo $row['Doctor_Name'];?>">View Details</a></td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
</tbody>                                               
</body>
</html>
<?php }  ?>