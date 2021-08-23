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

$medname=$_POST['medname']; 
$medcomp=$_POST['medcompany'];   
$medcompose=$_POST['medcomposition'];
$medtype=$_POST['medtype'];
$tab=$_POST['tablet'];
$price=$_POST['price'];

/*$imgs=$_FILES["mimages"]["name"];
$extension = substr($imgs,strlen($imgs)-4,strlen($imgs));
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
if(!in_array($extension,$allowed_extensions))   {
      echo "<script>alert('Featured image has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";  }
else  {
     $mimages=md5($imgs).time().$extension;
     move_uploaded_file($_FILES["mimages"]["tmp_name"],"med_images/".$mimages);
     $ret=mysqli_query($con, "select MedName from tblmedicines where MedName='$medname'");
     $result=mysqli_fetch_array($ret);
     if($result>0)  {
           echo "<script>alert('This medicine is already added');</script>";
          }
       else  {*/
         $query=mysqli_query($con,"insert into tblmedicines(MedName, Medcompany, Medcomposition, Medtype, Tablet, Price) values('$medname','$medcomp','$medcompose','$medtype','$tab','$price')"); 
          if($query)  {
             echo "<script>alert('Medicine added successfully.');</script>";   
             echo "<script>window.location.href='add-medicines.php'</script>";
             }
          else   {
             echo "<script>alert('Something went wrong. Please try again.');</script>";   
             echo "<script>window.location.href='add-medicines.php'</script>";    }
}


    ?>
    <!DOCTYPE html>
    <html>
    <head>
      <title>Admin: Add Medicines</title>
    </head>
    <body>
    <?php include_once('includes/header.php');?>
    <?php include_once('includes/sidebar.php');?>
    <?php include_once('includes/footer.php');?>

    <h1>Add Medicines</h1>
    <form class="needs-validation" method="post" novalidate>

    	<label style="color: black"><b>Medicine Name: </b></label>
           <input type="text" name="medname" required="true" placeholder="Medicine name"><br>
    	<label style="color: black"><b>Medicine Company: </b></label>
           <input type="text" name="medcompany" required="true" placeholder="Medicine company"><br>
    	<label style="color: black"><b>Medicine Composition: </b></label>
           <input type="text" name="medcomposition" required="true" placeholder="Medicine composition"><br>
    	<label style="color: black"><b>Medicine Type: </b></label>
           <input type="text" name="medtype" required="true" placeholder="Medicine type"><br>
    	<label style="color: black"><b>Tablet per sleve: </b></label>
           <input type="text" name="tablet" required="true" placeholder="Tablet per sleve"><br>
    	<label style="color: black"><b>Medicine price: </b></label>
           <input type="text" name="price" required="true" placeholder="Medicine price"><br><br>
    	<button type="submit" name="submit">Add</button>

</form>
    </body>
    </html>
<?php } ?>
