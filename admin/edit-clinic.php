<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['meddbaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['update']))
{
$clinic_id=substr(base64_decode($_GET['cl_id']),0,-5);  

$deptname=$_POST['department_name']; 
$clinic=$_POST['clinic']; 

 $query=mysqli_query($con,"update tbldept_wise_clinic set department_name='$deptname', clinic='$clinic' where clinic_id='$clinic_id'"); 
 if($query)  {
    echo "<script>alert('Clinic updated successfully.');</script>";   
    echo "<script>window.location.href='manage-clinic.php'</script>";
   }
 else {
    echo "<script>alert('Something went wrong. Unable to update department.');</script>";   
    echo "<script>window.location.href='manage-clinic.php'</script>";
 }

}

    ?>
<!DOCTYPE html>
<html lang="xxx">

<head>
    
    <title>Admin: Edit Clinic</title>
    
</head>

<body>

<?php include_once('includes/header.php');
include_once('includes/sidebar.php');
include_once('includes/footer.php');
?>
<h1>Edit Clinic</h1>
<form method="post" novalidate>

<?php
$clinic_id=substr(base64_decode($_GET['cl_id']),0,-5);
$query=mysqli_query($con,"select * from tbldept_wise_clinic where clinic_id='$clinic_id'");
while($result=mysqli_fetch_array($query))
{    
?>                                       

<label style="color: black"><b>Department Name: </b></label>
<input type="text" size="60" value="<?php echo $result['department_name'];?>" name="department_name" required autocomplete="off"><br><br>

<label style="color: black"><b>Clinic: </b></label>
<input type="text" size="60" value="<?php echo $result['clinic'];?>" name="clinic" required autocomplete="off"><br><br>

<?php } ?>
<button type="submit" name="update">Update</button>
</form>
</body>
</html>
<?php } ?>