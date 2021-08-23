<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);

if(isset($_POST['submit']))
  {
    $contactno=$_SESSION['contactno'];
    $email=$_SESSION['email'];
    $password=md5($_POST['newpassword']);

        $query=mysqli_query($con,"update tblpatient set Password='$password'  where  Email='$email' && MobileNumber='$contactno' ");
   if($query)
   {
echo "<script>alert('Password successfully reset');</script>";
session_destroy();
   }
  
  }
  ?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Reset Password Page</title>
   
    <script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
</head>
<body>
<h1>Forgot Password</h1>
<p>Hey Buddies if you forgot your password reset from here !</p>
 <form method="post" action="" name="changepassword" onsubmit="return checkpass();">
 <input type="password" name="newpassword"  placeholder="New Password" required="true" autocomplete="off"><br>
<input type="password" name="confirmpassword" placeholder="Confirm Password" required="true" autocomplete="off"><br>
 <input type="submit" name="submit" value="Reset">
<p>Already have an account?<a href="login.php" style="padding-left: 75px">Log In</a></p>
<p class="forget-pass text-white"><a href="../index.php"> Back to Home!!</a></p>
 </form>
           
</body>
</html>