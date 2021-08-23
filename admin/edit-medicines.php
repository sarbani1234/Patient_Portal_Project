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
$meid=substr(base64_decode($_GET['eid']),0,-5);    

$medname=$_POST['medname']; 
$medcompany=$_POST['medcompany'];
$medcomposition=$_POST['medcomposition'];
$medtype=$_POST['medtype'];
$medtablet=$_POST['medtablet'];
$medprice=$_POST['medprice'];
$query=mysqli_query($con,"update tblmedicines set MedName='$medname',Medcompany='$medcompany',Medcomposition='$medcomposition',Medtype='$medtype',Tablet='$medtablet',Price='$medprice' where ID='$meid'"); 
 if($query)  {
    echo "<script>alert('Medicines updated successfully.');</script>";   
    echo "<script>window.location.href='manage-medicines.php'</script>";
   }
 else {
    echo "<script>alert('Something went wrong. Unable to update medicines.');</script>";   
    echo "<script>window.location.href='manage-medicines.php'</script>";
 }

}

    ?>
<!DOCTYPE html>
<html lang="xxx">

<head>
    
    <title>Admin: Edit Medicines</title>
    
</head>

<body>

<?php include_once('includes/header.php');
include_once('includes/sidebar.php');
include_once('includes/footer.php');
?>
<h1>Edit Medicines</h1>
<form method="post" novalidate>

<?php
$meid=substr(base64_decode($_GET['eid']),0,-5);
$query=mysqli_query($con,"select * from tblmedicines where ID='$meid'");
while($result=mysqli_fetch_array($query))
{    
?>                                       

<label style="color: black"><b>Medicine Name</b></label>
<input type="text" value="<?php echo $result['MedName'];?>" name="medname" required autocomplete="off"><br>

<label style="color: black"><b>Medicine Company</b></label>
<input type="text" value="<?php echo $result['Medcompany'];?>" name="medcompany" required autocomplete="off"><br>

<label style="color: black"><b>Medicine Composition</b></label>
<input type="text" value="<?php echo $result['Medcomposition'];?>" name="medcomposition" required autocomplete="off"><br>

<label style="color: black"><b>Medicine Type</b></label>
<input type="text" value="<?php echo $result['Medtype'];?>" name="medtype" required autocomplete="off"><br>

<label style="color: black"><b>Medicine Tablet</b></label>
<input type="text" value="<?php echo $result['Tablet'];?>" name="medtablet" required autocomplete="off"><br>

<label style="color: black"><b>Medicine Price</b></label>
<input type="text" value="<?php echo $result['Price'];?>" name="medprice" required autocomplete="off"><br><br>

<?php } ?>
<button type="submit" name="update">Update</button>
</form>
</body>
</html>
<?php } ?>