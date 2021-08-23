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

$category=$_POST['category'];  

         $query=mysqli_query($con,"insert into tblcategory_list(category) values('$category')"); 
          if($query)  {
             echo "<script>alert('Category added successfully.');</script>";   
             echo "<script>window.location.href='add-category.php'</script>";
             }
          else   {
             echo "<script>alert('Something went wrong. Please try again.');</script>";   
             echo "<script>window.location.href='add-category.php'</script>";    }
}


    ?>
    <!DOCTYPE html>
    <html>
    <head>
      <title>Admin: Add Category</title>
    </head>
    <body>
    <?php include_once('includes/header.php');?>
    <?php include_once('includes/sidebar.php');?>
    <?php include_once('includes/footer.php');?>

    <h1>Add Category</h1>
    <form class="needs-validation" method="post" novalidate>

    	<label style="color: black"><b>Category: </b></label>
           <input type="text" name="category" required="true" placeholder="Category"><br><br>
    	
    	<button type="submit" name="submit">Add</button>

</form>
    </body>
    </html>
<?php } ?>
