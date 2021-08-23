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
$deid=substr(base64_decode($_GET['edid']),0,-5);    

$deptname=$_POST['deptname']; 

$query=mysqli_query($con,"update tbldept_list set department_name='$deptname' where dept_id='$deid'"); 
 if($query)  {
    echo "<script>alert('Department updated successfully.');</script>";   
    echo "<script>window.location.href='manage-dept.php'</script>";
   }
 else {
    echo "<script>alert('Something went wrong. Unable to update department.');</script>";   
    echo "<script>window.location.href='manage-dept.php'</script>";
 }

}

    ?>
<!DOCTYPE html>
<html lang="xxx">

<head>
    
    <title>Admin: Edit Department</title>
    
</head>

<body>

<?php include_once('includes/header.php');
include_once('includes/sidebar.php');
include_once('includes/footer.php');
?>
<h1>Edit Department</h1>
<form method="post" novalidate>

<?php
$deid=substr(base64_decode($_GET['edid']),0,-5);
$query=mysqli_query($con,"select * from tbldept_list where dept_id='$deid'");
while($result=mysqli_fetch_array($query))
{    
?>                                       

<label style="color: black"><b>Department Name</b></label>
<input type="text" size="60" value="<?php echo $result['department_name'];?>" name="deptname" required autocomplete="off"><br><br>

<?php } ?>
<button type="submit" name="update">Update</button>
</form>
</body>
</html>
<?php } ?>