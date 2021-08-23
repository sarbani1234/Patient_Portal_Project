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
$cid=substr(base64_decode($_GET['con_id']),0,-5);    

$cnsltn=$_POST['consultation']; 

$query=mysqli_query($con,"update tblconsultation_list set Consultation='$cnsltn' where id='$cid'"); 
 if($query)  {
    echo "<script>alert('Consultation updated successfully.');</script>";   
    echo "<script>window.location.href='manage-consultation.php'</script>";
   }
 else {
    echo "<script>alert('Something went wrong. Unable to update consultation.');</script>";   
    echo "<script>window.location.href='manage-consultation.php'</script>";
 }

}

    ?>
<!DOCTYPE html>
<html lang="xxx">

<head>
    
    <title>Admin: Edit Consultation</title>
    
</head>

<body>

<?php include_once('includes/header.php');
include_once('includes/sidebar.php');
include_once('includes/footer.php');
?>
<h1>Edit Consultation</h1>
<form method="post" novalidate>

<?php
$cnsltn=substr(base64_decode($_GET['con_id']),0,-5);
$query=mysqli_query($con,"select * from tblconsultation_list where id='$cnsltn'");
while($result=mysqli_fetch_array($query))
{    
?>                                       

<label style="color: black"><b>Consultation</b></label>
<input type="text" size="60" value="<?php echo $result['Consultation'];?>" name="consultation" required autocomplete="off"><br><br>

<?php } ?>
<button type="submit" name="update">Update</button>
</form>
</body>
</html>
<?php } ?>