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
$category_id=substr(base64_decode($_GET['cat_id']),0,-5);    

$category=$_POST['category']; 

$query=mysqli_query($con,"update tblcategory_list set category='$category' where id='$category_id'"); 
 if($query)  {
    echo "<script>alert('Category updated successfully.');</script>";   
    echo "<script>window.location.href='manage-category.php'</script>";
   }
 else {
    echo "<script>alert('Something went wrong. Unable to update department.');</script>";   
    echo "<script>window.location.href='manage-category.php'</script>";
 }

}

    ?>
<!DOCTYPE html>
<html>

<head>
    
    <title>Admin: Edit Category</title>
    
</head>

<body>

<?php include_once('includes/header.php');
include_once('includes/sidebar.php');
include_once('includes/footer.php');
?>
<h1>Edit Category</h1>
<form method="post" novalidate>

<?php
$category_id=substr(base64_decode($_GET['cat_id']),0,-5);
$query=mysqli_query($con,"select * from tblcategory_list where id='$category_id'");
while($result=mysqli_fetch_array($query))
{    
?>                                       

<label style="color: black"><b>Category: </b></label>
<input type="text" size="60" value="<?php echo $result['category'];?>" name="category" required autocomplete="off"><br><br>

<?php } ?>
<button type="submit" name="update">Update</button>
</form>
</body>
</html>
<?php } ?>