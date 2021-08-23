<?php
$did=$_SESSION['meddbdid'];
$ret=mysqli_query($con,"select * from tbldocapprove where ID='$did'");
$row=mysqli_fetch_array($ret);
$name=$row['FullName'];
$imgs=$row['Images'];
$gender=$row['Gender'];
$dept_name=$row['Department_name'];
?> 
<!DOCTYPE html>
<html>
<head>
	
</head>
<body  topmargin = 0 leftmargin = 0>
  <div>
	<img style="width: 200px;position: absolute;top: 400px;right: 20px;" src="images/<?php echo $imgs; ?>">
  <span style="position: absolute;top: 650px;left: 50px;font-family: cursive;font-size: 40px;color: #333;"><?php echo $name; ?></span>
<div>
	<div>
	  GENDER: <?php echo $gender; ?>
      
  <?php
  $did=$_SESSION['meddbdid'];
  $sql=mysqli_query($con,"select DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),DOB)), '%Y')+0 AS Age from tbldocapprove where ID='$did'");
  $sql1=mysqli_fetch_array($sql);
  $dob=$sql1['Age'];
  ?>
  AGE: <?php echo $dob; ?>
  DEPARTMENT NAME: <?php echo $dept_name; ?>
</div>
    <a href="profile.php">Profile &nbsp;</a>
    <a href="change-password.php">Settings &nbsp;</a>
    <a href="logout.php"></i>Logout</a>
</body>
</html>