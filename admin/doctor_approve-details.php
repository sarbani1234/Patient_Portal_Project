<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['meddbaid']==0)) {
  header('location:logout.php');
  } else{

  ?>
<!DOCTYPE html>
<html >
<head>
    <title>Doctor Approve Details</title>

</head>
<body topmargin = 0 leftmargin = 0>

<?php include_once('includes/header.php');?>
<?php include_once('includes/sidebar.php');?>
<?php include_once('includes/footer.php');?>
<h1>Doctor Approve Details</h1>
                   
 <?php
$rno=mt_rand(10000,99999); 
$did=$_GET['dvid'];
$ret=mysqli_query($con,"select * from tbldocapprove where ID='$did'");
$cnt=1;
while($row=mysqli_fetch_array($ret)) {
  $name=$row['FullName'];
  $imgs=$row['Images'];

echo'
<h2 style="font-family: red serif ;font-stretch: extra-expanded;font-weight: bold; font-variant: small-caps; font-size: 35px"><img style="width: 200px;" src="../doctor/images/'.$imgs.'">'.$name.'</h2>


        <form id="checkout_form" action="doctor_approve-process.php" method="POST" class="was-validated">

            <label>Full Name</label>
            <input type="text" id="fname" class="form-control" name="firstname" value="'.$name.'"><br> <br>

            <label>Department Name</label>
            <input type="text" id="deptname" class="form-control" name="deptname" size="30"  value="'.$row["Department_name"].'"><br> <br>

            <label>Gender</label>
            <input type="text" id="gender" class="form-control" name="gender" value="'.$row["Gender"].'"><br> <br>

            <label>Email</label>
            <input type="text" id="email" name="email" class="form-control" value="'.$row["Email"].'" required><br> <br>

            <label>Mobile Number</label>
            <input type="text" id="mobilenumber" name="mobile_no" class="form-control" value="'.$row["Mobilenumber"].'" required> <br> <br>';

  $ddid=$_GET['dvid'];          
  $sql=mysqli_query($con,"select DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),DOB)), '%Y')+0 AS Age from tbldocapprove where ID='$ddid'");
  $sql1=mysqli_fetch_array($sql);
  $dob=$sql1['Age'];
  
  echo'
            <label>Age</label>
            <input type="text" id="age" class="form-control" name="age" value="'.$dob.'"><br> <br>

            <label>Address</label>
            <input type="text" id="adr" name="address" class="form-control" value="'.$row["Address"].'" required><br> <br>

            <label>City</label>
            <input type="text" id="city" name="city" class="form-control" value="'.$row["City"].'" pattern="^[a-zA-Z ]+$" required><br> <br>

            <label>Pincode</label>
            <input type="text" id="zip" name="zip" class="form-control" value="'.$row["Pincode"].'" required><br> <br>

            <label>District</label>
            <input type="text" id="district" name="dictrict" class="form-control" value="'.$row["District"].'" required><br> <br>

            <label>State</label>
            <input type="text" id="state" name="state" class="form-control" value="'.$row["State"].'" required><br> <br>

            <label>Nationality</label>
            <input type="text" id="nationality" name="nationality" class="form-control" value="'.$row["Nationality"].'" required><br> <br>

            <label>Religion</label>
            <input type="text" id="religion" name="religion" class="form-control" value="'.$row["Religion"].'" required><br> <br>

            <label>Marital Status</label>
            <input type="text" id="mstatus" name="mstatus" class="form-control" value="'.$row["Mstatus"].'" required><br> <br>

            <label>Doctor Registration Date</label>
            <input type="text" id="doctor_regdate" name="doctor_regdate" class="form-control" value="'.$row["Doctor_RegDate"].'" required><br> <br>';

      
        echo'
          
          <input type="submit" id="submit"  name="submit" value="Approve" class="checkout-btn">
        </form>';
    }
    ?>
                                                
</body>
</html>
<?php } ?>
