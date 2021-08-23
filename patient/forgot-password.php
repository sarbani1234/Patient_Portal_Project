<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
   
    $email=$_POST['email'];

        $query=mysqli_query($con,"select ID from tblpatient where  Email='$email' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['email']=$email;
     header('location:reset-password.php');
    }
    else{
       echo "<script>alert('Invalid details. Please try again.');</script>";
    }
  }
  ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    
    <title>Forgot Password Page</title>
    
</head>
<body>
  <h1>Forgot Password</h1>
 <p>Hey Buddies if you forgot your password reset from here !</p>
                    
                   <form method="post" action="">
                    
 <input type="text" placeholder="Email Address" name="email" required="true" autocomplete="off"><br>                             
<input type="submit" name="submit" value="Press">
<p>Already have an account?<a href="login.php" style="padding-left: 75px">Log In</a></p>
<p><a href="../index.php"> Back to Home!!</a></p> 
</form>
    
            
</body>
</html>