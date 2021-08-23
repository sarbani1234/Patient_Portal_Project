<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['meddbaid']==0)) {
  header('location:logout.php');
  } else{



  ?>
  <!DOCTYPE html>
  <html>
  <head>
      <title>Total Doctor Apply</title>
  </head>
  <body>
    <?php include_once('includes/header.php');
          include_once('includes/sidebar.php');
          include_once('includes/footer.php');?>

 <h1>Total Doctor Apply</h1>


    <table border="2">
    <thead>
      <tr>
        <th>Sl No</th>
        <th>Doctor name</th>
        <th>Email</th>
        <th>Department</th>
        <th>Address</th>
        <th>Mobilenumber</th>
      </tr>
    </thead>

    <tbody>
<?php
    $ret=mysqli_query($con,"select * from  tbldocapprove");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                           <tr>
                  <td><?php echo $cnt;?></td>           
                  <td><?php  echo $row['FullName'];?></td>
                  <td><?php  echo $row['Email'];?></td>
                  <td><?php  echo $row['Department_name'];?></td>
                  <td><?php  echo $row['Mobilenumber'];?></td>
                  <td><a href="doctor_approve-details.php?dvid=<?php echo $row['ID'];?>">View Details</a></td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
</tbody>
</table>

  </body>
  </html>
  <?php } ?>