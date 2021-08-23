<?php
$aid=$_SESSION['meddbaid'];
$ret=mysqli_query($con,"select Adminname,Images from tbladmin where ID='$aid'");
$row=mysqli_fetch_array($ret);
$name=$row['Adminname'];
$imgs=$row['Images'];
?> 
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<h1><img style="width: 200px;" src="images/<?php echo $imgs; ?>"><?php echo $name; ?></h1>
    <a href="change-password.php">Settings</a>
    <a href="logout.php">Logout</a><br><br>

	<a href="total-registered-doctor.php">Total registered Doctor&nbsp; &nbsp; &nbsp;</a>
	<a href="total_registered_patient.php">Total registered Patient&nbsp; &nbsp; &nbsp;</a>
	<a href="total_registered_nurse.php">Total registered Nurse&nbsp; &nbsp; &nbsp;</a>
	<a href="doctor-approve.php">Total Doctor apply&nbsp; &nbsp; &nbsp;</a>
	<a href="appointment.php">Total Appoinment generated&nbsp; &nbsp; &nbsp;</a><br>
	
</body>
</html>