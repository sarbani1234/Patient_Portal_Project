<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['meddbdid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['update']))
{
$date_id=substr(base64_decode($_GET['dates_id']),0,-5);  

$doctorname=$_POST['doctor_name'];
$deptname=$_POST['department_name']; 
$dates=$_POST['dates']; 
$days = date("l", strtotime($dates));

 $query=mysqli_query($con,"update tbldate set DoctorName='$doctorname', DepartmentName='$deptname', Date='$dates', Day='$days' where ID='$date_id'"); 
 if($query)  {
    echo "<script>alert('Dates updated successfully.');</script>";   
    echo "<script>window.location.href='manage_date.php'</script>";
   }
 else {
    echo "<script>alert('Something went wrong. Unable to update dates.');</script>";   
    echo "<script>window.location.href='manage_date.php'</script>";
 }

}

    ?>
<!DOCTYPE html>
<html lang="xxx">

<head>
    
    <title>Doctor: Edit Dates</title>
    
</head>

<body>

<?php include_once('includes/header.php');
include_once('includes/sidebar.php');
include_once('includes/footer.php');
?>
<h1>Edit Dates</h1>
<form method="post" novalidate>

<?php
$date_id=substr(base64_decode($_GET['dates_id']),0,-5);
$query=mysqli_query($con,"select * from tbldate where ID='$date_id'");
while($result=mysqli_fetch_array($query))
{    
?>                                       

<label style="color: black"><b>Doctor Name: </b></label>
<input type="text" size="60" value="<?php echo $result['DoctorName'];?>" name="doctor_name" required autocomplete="off"><br><br>

<label style="color: black"><b>Department Name: </b></label>
<input type="text" size="60" value="<?php echo $result['DepartmentName'];?>" name="department_name" required autocomplete="off"><br><br>

<label style="color: black"><b>Dates: </b></label>
<input type="date" size="60" value="<?php echo $result['Date'];?>" name="dates" required autocomplete="off"><br><br>


<?php } ?>
<button type="submit" name="update">Update</button>
</form>
</body>
</html>
<?php } ?>