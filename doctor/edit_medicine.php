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
$med_id=substr(base64_decode($_GET['med_id']),0,-5);    

$medname=$_POST['medname']; 
$medcompany=$_POST['medcompany'];
$medcomposition=$_POST['medcomposition'];
$medtype=$_POST['medtype'];
$medtablet=$_POST['medtablet'];
$medprice=$_POST['medprice'];
$query=mysqli_query($con,"update tblprescription set MedName='$medname',MedCompany='$medcompany',MedComposition='$medcomposition',MedType='$medtype',MedTablet='$medtablet',MedPrice='$medprice' where Prescription_id='$med_id'"); 
 if($query)  {
    echo "<script>alert('Medicines updated successfully.');</script>";   
    echo "<script>window.location.href='manage_medicine.php'</script>";
   }
 else {
    echo "<script>alert('Something went wrong. Unable to update medicines.');</script>";   
    echo "<script>window.location.href='manage_medicine.php'</script>";
 }

}

    ?>
<!DOCTYPE html>
<html lang="xxx">

<head>
    
    <title>Doctor: Edit Medicines</title>
    
</head>

<body>

<?php include_once('includes/header.php');
include_once('includes/sidebar.php');
include_once('includes/footer.php');
?>
<h1>Edit Medicines</h1>
<form method="post" novalidate>

<?php
$med_id=substr(base64_decode($_GET['med_id']),0,-5);
$query=mysqli_query($con,"select * from tblprescription where Prescription_id='$med_id'");
while($result=mysqli_fetch_array($query))
{    
?> 

<h2 style="color: navy; font-family: unset;"><u>Patient Name:</u> <?php echo $result['Patient_Name'];?></h2>
<h2 style="color: navy; font-family: unset;"><u>Department:</u> <?php echo $result['Department'];?></h2>
<h2 style="color: navy; font-family: unset;"><u>Clinic:</u> <?php echo $result['Clinic'];?></h2>
<h2 style="color: navy; font-family: unset;"><u>Disease:</u> <?php echo $result['Diseases'];?></h2>                                      

<h2><label style="color: navy; font-family: unset;"><u>Medicine Name:</u> </label>
   <select name="medname" required>
    <option value="<?php echo $result['MedName'];?>"><?php echo $result['MedName'];?></option>
    <?php
    $ret=mysqli_query($con,"select * from tblmedicines");
    while($row=mysqli_fetch_array($ret))
    {?>
    <option value="<?php echo $row['MedName'];?>"><?php echo $row['MedName'];?></option>
    <?php } ?>
    </select></h2>

<h2><label style="color: navy; font-family: unset;"><u>Medicine Company:</u> </label>
   <select name="medcompany" required>
    <option value="<?php echo $result['MedCompany'];?>"><?php echo $result['MedCompany'];?></option>
    <?php
    $ret=mysqli_query($con,"select * from tblmedicines");
    while($row=mysqli_fetch_array($ret))
    {?>
    <option value="<?php echo $row['Medcompany'];?>"><?php echo $row['Medcompany'];?></option>
    <?php } ?>
    </select></h2>

<h2><label style="color: navy; font-family: unset;"><u>Medicine Composition:</u> </label>
   <select name="medcomposition" required>
    <option value="<?php echo $result['MedComposition'];?>"><?php echo $result['MedComposition'];?></option>
    <?php
    $ret=mysqli_query($con,"select * from tblmedicines");
    while($row=mysqli_fetch_array($ret))
    {?>
    <option value="<?php echo $row['Medcomposition'];?>"><?php echo $row['Medcomposition'];?></option>
    <?php } ?>
    </select></h2>

<h2><label style="color: navy; font-family: unset;"><u>Medicine Type:</u> </label>
   <select name="medtype" required>
    <option value="<?php echo $result['MedType'];?>"><?php echo $result['MedType'];?></option>
    <?php
    $ret=mysqli_query($con,"select * from tblmedicines");
    while($row=mysqli_fetch_array($ret))
    {?>
    <option value="<?php echo $row['Medtype'];?>"><?php echo $row['Medtype'];?></option>
    <?php } ?>
    </select></h2>

<h2><label style="color: navy; font-family: unset;"><u>Medicine Tablet:</u> </label>
   <select name="medtablet" required>
    <option value="<?php echo $result['MedTablet'];?>"><?php echo $result['MedTablet'];?></option>
    <?php
    $ret=mysqli_query($con,"select * from tblmedicines");
    while($row=mysqli_fetch_array($ret))
    {?>
    <option value="<?php echo $row['Tablet'];?>"><?php echo $row['Tablet'];?></option>
    <?php } ?>
    </select></h2>

<h2><label style="color: navy; font-family: unset;"><u>Medicine Price:</u> </label>
   <select name="medprice" required>
    <option value="<?php echo $result['MedPrice'];?>"><?php echo $result['MedPrice'];?></option>
    <?php
    $ret=mysqli_query($con,"select * from tblmedicines");
    while($row=mysqli_fetch_array($ret))
    {?>
    <option value="<?php echo $row['Price'];?>"><?php echo $row['Price'];?></option>
    <?php } ?>
    </select></h2>

<?php } ?>
<button type="submit" name="update">Update</button>
</form>
</body>
</html>
<?php } ?>