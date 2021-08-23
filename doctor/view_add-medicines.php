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
 $med_id=substr(base64_decode($_GET['pres_id']),0,-5);
 
 $medname=$_POST['medname']; 
 $medcompany=$_POST['medcompany'];
 $medcomposition=$_POST['medcomposition'];
 $medtype=$_POST['medtype'];
 $medtablet=$_POST['medtablet'];
 $medprice=$_POST['medprice'];
 $period=$_POST['period'];

$query=mysqli_query($con,"update tblprescription set MedName='$medname', MedCompany='$medcompany', MedComposition='$medcomposition', MedType='$medtype', MedTablet='$medtablet', MedPrice='$medprice', Periods='$period' where Prescription_id='$med_id'"); 
 if($query)  {
    echo "<script>alert('Medicines add successfully.');</script>";  
    echo "<script>window.location.href='add_medicine.php'</script>";
   }
 else {
    echo "<script>alert('Something went wrong. Unable to add medicines.');</script>";   
    echo "<script>window.location.href='add_medicine.php'</script>";
 }

}

?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Doctor: Add Medicines</title>
    
<body>
      
    
<?php include_once('includes/header.php');
include_once('includes/sidebar.php');
include_once('includes/footer.php');
?>

 <h1>Add Medicines</h1>
 <form method="post" novalidate> 

 <?php
$view_id=substr(base64_decode($_GET['pres_id']),0,-5);
$sql=mysqli_query($con, "select * from tblprescription where Prescription_id = '$view_id'");
while($row=mysqli_fetch_array($sql))
{ ?>

   <h2 style="color: cornflowerblue; font-family: monospace;"><u>Patient Name:</u> <?php echo $row['Patient_Name'];?></h2>
   <h2 style="color: cornflowerblue; font-family: monospace;"><u>Department:</u> <?php echo $row['Department'];?></h2>
<?php } ?>

<h2 style="color: orchid; font-family: monospace;"><u>Enter the disease name:</u> 
   <input type="text" name="disease" placeholder="Enter the disease name" required="true" autocomplete="off"></h2>
<input type="submit" name="med" value="Proceed to add medicine">
</form>


<?php if(isset($_POST['med'])){
  
   $dis=$_POST['disease'];

$query=mysqli_query($con,"update tblprescription set Diseases='$dis' where Prescription_id='$view_id'"); ?>

<section>
<table border="2">
   <thead>
        <tr>
           <th>#</th>
           <th>Medicine Name</th>
           <th>Medicine Company</th>
           <th>Medicine Composition</th>
           <th>Medicine Type</th>
           <th>Tablet per sleve</th>
           <th>Medicine price</th>
           <th>Periods</th>
           <th>Action</th>
                                                    
        </tr>
    </thead>
      <tbody>

<?php 
$query=mysqli_query($con,"select * from tblmedicines order  by  ID");
$num=mysqli_num_rows($query);
if($num>0){
$cnt=1;
while($row=mysqli_fetch_array($query))
{    
?>  
<form method="post" novalidate>                                              
<tr>
<td><?php echo $cnt;?></td>
<td><input type="text" name="medname" value="<?php echo $row['MedName'];?>"></td>
<td><input type="text" name="medcompany" value="<?php echo $row['Medcompany'];?>"></td>
<td><input type="text" name="medcomposition" value="<?php echo $row['Medcomposition'];?>"></td>
<td><input type="text" name="medtype" value="<?php echo $row['Medtype'];?>"></td>
<td><input type="text" name="medtablet" value="<?php echo $row['Tablet'];?>"></td>
<td><input type="text" name="medprice" value="<?php echo $row['Price'];?>"></td>
<td><input type="text" name="period" placeholder="00" required="true" autocomplete="off"></td>
<td>
<button type="update" name="update">Add</button>
</td>
</tr>
</form>
<?php
$cnt++;
}} else {
    echo "<script>alert('No medicines has been uploaded!!')</script>"; 
}} ?>
                                                
                                            </tbody>
                                        </table>
                                     </section>
                              
</body>
</html>
<?php } ?>