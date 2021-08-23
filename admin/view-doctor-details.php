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
  	<title>View Doctor Details</title>
  </head>
  <body>
    
  	<?php include_once('includes/header.php');?>
    <?php include_once('includes/sidebar.php');?>
	<?php include_once('includes/footer.php');?>

	<?php
$vid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from tbldocapprove where FullName='$vid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<h1>View details of <?php  echo $row['FullName'];?> </h1>
  <table border="2">

  <tr>
  <th>Image</th>
  <td><img src="../doctor/images/<?php echo $row['Images'];?>" width="200" height="150" value="<?php  echo $row['Images'];?>"></td>
  </tr>
  <tr>
  <th>Full Name</th>
  <td><?php  echo $row['FullName'];?></td>
  </tr>

   <th>Department Name</th>
  <td><?php  echo $row['Department_name'];?></td>
  </tr>

  <tr>
  <th>Email</th>
  <td><?php  echo $row['Email'];?></td>
  </tr>
  <tr>
  <th>Mobile Number</th>
  <td><?php  echo $row['Mobilenumber'];?></td>
  </tr>

<?php 
  $sql=mysqli_query($con,"select DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),DOB)), '%Y')+0 AS Age from tbldocapprove where FullName='$vid'");
  $sql1=mysqli_fetch_array($sql);
  $dob=$sql1['Age'];
  ?>

  <tr>
  <th>Age</th>
  <td><?php  echo $dob;?></td>
  </tr>
 
  <tr>
  <th>Gender</th>
  <td><?php  echo $row['Gender'];?></td>
  </tr>
  <tr>
  <th>Address</th>
  <td><?php  echo $row['Address'];?></td>
  </tr>
   <tr>
  <th>Pincode</th>
  <td><?php  echo $row['Pincode'];?></td>
  </tr>
  <tr>
  <th>City</th>
  <td><?php  echo $row['City'];?></td>
  </tr>
    <tr>
  <th>State</th>
  <td><?php  echo $row['State'];?></td>
  </tr>

   <tr>
  <th>District</th>
  <td><?php  echo $row['District'];?></td>
  </tr>
  <tr>
  <th>Nationality</th>
  <td><?php  echo $row['Nationality'];?></td>
  </tr>
   <tr>
  <th>Religion</th>
  <td><?php  echo $row['Religion'];?></td>
  </tr>
   <tr>
  <th>Marital Status</th>
  <td><?php  echo $row['Mstatus'];?></td>
  </tr>
  
  <tr>
  <th>Doctor Registration Date</th>
  <td><?php  echo $row['Doctor_RegDate'];?></td>
  </tr>

</table>
<a href="set-doctorid.php?editid=<?php echo $row['ID'];?>">Set Id</a>
<?php } ?>
  </body>
  </html>
  <?php } ?>