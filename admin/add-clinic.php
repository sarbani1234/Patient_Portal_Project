<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['meddbaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
{

$deptname=$_POST['department_name']; 
$clinic=$_POST['clinic'];   

$query=mysqli_query($con,"insert into tbldept_wise_clinic(department_name,clinic) values('$deptname','$clinic')"); 
if($query){
echo "<script>alert('Clinic added successfully.');</script>";   
echo "<script>window.location.href='add-clinic.php'</script>";
} else{
echo "<script>alert('Something went wrong. Please try again.');</script>";   
echo "<script>window.location.href='add-clinic.php'</script>";    
}
}

    ?>
    
<!DOCTYPE html>
    <html>
    <head>
      <title>Admin: Add Clinic</title>
    </head>
    <body>
    <?php include_once('includes/header.php');?>
    <?php include_once('includes/sidebar.php');?>
    <?php include_once('includes/footer.php');?>

    <h1>Add Clinic</h1>
    <form class="needs-validation" method="post" novalidate>

        <label style="color: black"><b>Dapartment Name: </b></label>
        <select name="department_name" required>
        <option value="">Select Department</option>
        <?php
        $ret=mysqli_query($con,"select * from tbldept_list");
        while($row=mysqli_fetch_array($ret))
        {?>
        <option value="<?php echo $row['department_name'];?>"><?php echo $row['department_name'];?></option>
        <?php } ?>
    </select><br><br>


        <label style="color: black"><b>Clinic: </b></label>
           <input type="text" name="clinic" required="true" placeholder="Clinic"><br>
        
        <button type="submit" name="submit">Add</button>

</form>
    </body>
    </html>
<?php } ?>