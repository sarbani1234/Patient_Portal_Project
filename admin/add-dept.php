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

$deptname=$_POST['deptname'];  

         $query=mysqli_query($con,"insert into tbldept_list(department_name) values('$deptname')"); 
          if($query)  {
             echo "<script>alert('Department added successfully.');</script>";   
             echo "<script>window.location.href='add-dept.php'</script>";
             }
          else   {
             echo "<script>alert('Something went wrong. Please try again.');</script>";   
             echo "<script>window.location.href='add-dept.php'</script>";    }
}


    ?>
    <!DOCTYPE html>
    <html>
    <head>
      <title>Admin: Add Department</title>
    </head>
    <body>
    <?php include_once('includes/header.php');?>
    <?php include_once('includes/sidebar.php');?>
    <?php include_once('includes/footer.php');?>

    <h1>Add Department</h1>
    <form class="needs-validation" method="post" novalidate>

    	<label style="color: black"><b>Department Name: </b></label>
           <input type="text" name="deptname" required="true" placeholder="Department name"><br>
    	
    	<button type="submit" name="submit">Add</button>

</form>
    </body>
    </html>
<?php } ?>
