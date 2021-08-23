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

<h3>Registered Patient</h3>
<table border="2">
  <thead>
    <tr>
      <th>S.NO</th>
      <th>Patient Name</th>
      <th>Email</th>     
      <th>Mobile Number</th>
      <th>Action</th>
    </tr>
  </thead>
     
     <tbody>
     
     <?php                              
$ret=mysqli_query($con,"select * from  tblpatient");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                           <tr>
                  <td><?php echo $cnt;?></td>
            
                  <td><?php  echo $row['FullName'];?></td>
                  <td><?php  echo $row['Email'];?></td>
                  <td><?php  echo $row['Mobilenumber'];?></td>
                  <td><a href="view-patient-details.php?viewid=<?php echo $row['id'];?>">View Details</a></td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
</tbody>                                               
</body>
</html>
<?php }  ?>