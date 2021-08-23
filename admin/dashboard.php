<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['meddbaid']==0)) {
  header('location:logout.php');
  } else{ ?>
  	
  	<!DOCTYPE html>
  	<html>
  	<head>
  		<title>Admin: Dashboard</title>
      <style type="text/css">
        .box {
         width: 500px;
         height: 305px;
         border: 3px solid green;
        }
      </style>
  	</head>
  	<body>
  		<?php include_once('includes/header.php');
            include_once('includes/sidebar.php');
            include_once('includes/footer.php');?>

<div class="box">      
      <?php
$query=mysqli_query($con,"select id from tbldept_wise_dctr");
$listeddoc=mysqli_num_rows($query);
?>
<div style="font-family: red serif ;font-stretch: extra-expanded;font-weight: bold; font-variant: small-caps; font-size: 20px">Registered Doctors:&nbsp; <u><?php echo $listeddoc;?>&nbsp; Total Registered Doctors</u></div><br>

<?php
$query=mysqli_query($con,"select ID from tbldocapprove");
$appddoc=mysqli_num_rows($query);
?>
<div style="font-family: red serif ;font-stretch: extra-expanded;font-weight: bold; font-variant: small-caps; font-size: 20px">Total Doctors applied:&nbsp; <u><?php echo $appddoc;?>&nbsp; Total Doctors applied</u></div><br>

<?php
$query=mysqli_query($con,"select dept_id from tbldept_list");
$deptlist=mysqli_num_rows($query);
?>
<div style="font-family: red serif ;font-stretch: extra-expanded;font-weight: bold; font-variant: small-caps; font-size: 20px">Total Departments:&nbsp; <u><?php echo $deptlist;?>&nbsp; Total Uploaded Departments</u></div><br>

<?php
$query=mysqli_query($con,"select clinic_id from tbldept_wise_clinic");
$cliniclist=mysqli_num_rows($query);
?>
<div style="font-family: red serif ;font-stretch: extra-expanded;font-weight: bold; font-variant: small-caps; font-size: 20px">Total Clinic:&nbsp; <u><?php echo $cliniclist;?>&nbsp; Total Uploaded Clinic</u></div><br>

<?php
$query=mysqli_query($con,"select id from tblcategory_list");
$categorylist=mysqli_num_rows($query);
?>
<div style="font-family: red serif ;font-stretch: extra-expanded;font-weight: bold; font-variant: small-caps; font-size: 20px">Total Category:&nbsp; <u><?php echo $categorylist;?>&nbsp; Total Uploaded Category</u></div><br>

<?php
$query=mysqli_query($con,"select id from tblconsultation_list");
$conlist=mysqli_num_rows($query);
?>
<div style="font-family: red serif ;font-stretch: extra-expanded;font-weight: bold; font-variant: small-caps; font-size: 20px">Total Consultation:&nbsp; <u><?php echo $conlist;?>&nbsp; Total Uploaded Consultation</u></div><br>

<?php
$query=mysqli_query($con,"select ID from tblmedicines");
$medlist=mysqli_num_rows($query);
?>
<div style="font-family: red serif ;font-stretch: extra-expanded;font-weight: bold; font-variant: small-caps; font-size: 20px">Total Medicines:&nbsp; <u><?php echo $medlist;?>&nbsp; Total Uploaded Medicines</u></div><br>

<?php
$query=mysqli_query($con,"select id from tblpatient");
$listedpat=mysqli_num_rows($query);
?>
<div style="font-family: red serif ;font-stretch: extra-expanded;font-weight: bold; font-variant: small-caps; font-size: 20px">Registered Patients:&nbsp; <u><?php echo $listedpat;?>&nbsp; Total Registered Patients</u></div>
</div>



  	</body>
  	</html>
<?php }?>