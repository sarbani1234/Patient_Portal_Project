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
  	<?php include_once('includes/header.php');?>
    <?php include_once('includes/sidebar.php');?>
  <?php include_once('includes/footer.php');?>

	<?php
$vid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from tblpatient where id='$vid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<h1>View details of <?php  echo $row['FullName'];?> </h1>
  <table border="2">

  <tr>
  <th>Image</th>
  <td><img src="../patient/images/<?php echo $row['Images'];?>" width="200" height="150" value="<?php  echo $row['Images'];?>"></td>
  </tr>
  <tr>
  <th>Full Name</th>
  <td><?php  echo $row['FullName'];?></td>
  </tr>

  <tr>
  <th>Guardian Name</th>
  <td><?php  echo $row['Gname'];?></td>
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
  $sql=mysqli_query($con,"select DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),DOB)), '%Y')+0 AS Age from tbldocapprove where id='$vid'");
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
  <th>Occupation</th>
  <td><?php  echo $row['Occupation'];?></td>
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
  <th>Patient Registration Date</th>
  <td><?php  echo $row['Pregdate'];?></td>
  </tr>

</table>
<a href="set-patientid.php?editid=<?php echo $row['id'];?>">Set Id</a>
<?php } ?>
  </body>
  </html>
  <?php } ?>