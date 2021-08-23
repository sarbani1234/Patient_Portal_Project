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

$cnsltn=$_POST['consultation'];  

         $query=mysqli_query($con,"insert into tblconsultation_list(Consultation) values('$cnsltn')"); 
          if($query)  {
             echo "<script>alert('Consultation added successfully.');</script>";   
             echo "<script>window.location.href='add-consultation.php'</script>";
             }
          else   {
             echo "<script>alert('Something went wrong. Please try again.');</script>";   
             echo "<script>window.location.href='add-consultation.php'</script>";    }
}


    ?>
    <!DOCTYPE html>
    <html>
    <head>
      <title>Admin: Add Consultation</title>
    </head>
    <body>
    <?php include_once('includes/header.php');?>
    <?php include_once('includes/sidebar.php');?>
    <?php include_once('includes/footer.php');?>

    <h1>Add Consultation</h1>
    <form class="needs-validation" method="post" novalidate>

    	<label style="color: black"><b>Consultation: </b></label>
           <input type="text" name="consultation" required="true" placeholder="Consultation"><br>
    	
    	<button type="submit" name="submit">Add</button>

</form>
    </body>
    </html>
<?php } ?>
