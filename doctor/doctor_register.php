<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (isset($_POST['submit'])) {

	$fullname=$_POST['fullname'];
    $dob=$_POST['dob'];
    $nationality=$_POST['nationality'];
    $mstatus=$_POST['mstatus'];
    $rel=$_POST['religion'];
    $email=$_POST['email'];
    $mobno=$_POST['mobilenumber'];
    $gender=$_POST['gender'];
    $addr=$_POST['address'];
    $pincode=$_POST['pincode'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $district=$_POST['district'];
    $dept_name=$_POST['department_name'];
    $password=md5($_POST['password']);


     /*$filename = $_FILES['myfile']['name'];
 $allowed_ext =[".zip",".pdf",".docx"];
 $arr=explode(".",$filename);
 $ext=strtolower(end($arr));
 if (!in_array($ext,$allowed_ext)) {
      echo "<script>alert('Featured file has Invalid format. Your file extension must be .zip, .pdf or .docx');</script>";
    } 
 elseif ($_FILES['myfile']['size'] > 1000000) { 
        echo "<script>alert('File too large');</script>";
    } 
 else {
       move_uploaded_file($_FILES["myfile"]["tmp_name"],"uploads/".$filename);*/

    $imgs=$_FILES["dimages"]["name"];
    $extension = substr($imgs,strlen($imgs)-4,strlen($imgs));
    $allowed_extensions = array(".jpg","jpeg",".png",".gif");
    if(!in_array($extension,$allowed_extensions))
   {
      echo "<script>alert('Featured image has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
   }
   else
   {
     $dimages=md5($imgs).time().$extension;
     move_uploaded_file($_FILES["dimages"]["tmp_name"],"images/".$dimages); 
       $ret=mysqli_query($con, "select Email from tbldocapprove where Email='$email' || Mobilenumber='$mobno'");
       $result=mysqli_fetch_array($ret);
       if($result>0){
           echo "<script>alert('This email or Contact Number already associated with another account');</script>";
          }
       else{
          $query=mysqli_query($con, "insert into tbldocapprove(FullName,DOB,Nationality,Email,Mstatus,Religion,Mobilenumber,Department_name,Gender,Address,Pincode,City,State,District,Images,Password) value('$fullname','$dob','$nationality','$email','$mstatus','$rel','$mobno','$dept_name','$gender','$addr','$pincode','$city','$state','$district','$dimages','$password')");
       if ($query) {
          echo "<script>alert('You have successfully registered');</script>";
          }
       else  {
          echo "<script>alert('Something went wrong. Please try again');</script>"; }
}
}
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Doctor Registration Page</title>
</head>
<body>
  <h1>Doctor Registration Page</h1>
  <form  action="" name="signup" method="post" onsubmit="return checkpass();" enctype="multipart/form-data">

  <input type="text" name="fullname" id="fullname" required="true" placeholder="Full Name"><br>
  <input type="text" name="email" id="email"  required="true" placeholder="Enter your Email"><br>
  <input type="text" name="mobilenumber" id="mobilenumber" required="true" placeholder="Enter your Mobile Number"><br>
  <label style="color: black">Gender: </label>
              <input type="radio" name="gender" id="gender" value="Female"><strong style="color: black">Female</strong>
              <label>
              <input type="radio" name="gender" id="gender" value="Male"><strong style="color: black">Male</strong>
              </label><br>
    <input type="date" name="dob" id="dob" required="true" placeholder="Enter your Date of Birth"><br>
  <input type="text" name="address" id="address" required="true" placeholder="Enter your Adress"><br>
  <input type="text" name="city" id="city" required="true" placeholder="Enter your City"><br>
    <input type="text" name="pincode" id="pincode" required="true" placeholder="Enter your Pincode"><br>
    <input type="text" name="state" id="state" required="true" placeholder="Enter your State"><br>
    <input type="text" name="district" id="district" required="true" placeholder="Enter your District"><br>

    <select name="department_name" required>
    <option value=""  size="30">Choose Department</option>
<?php
$ret=mysqli_query($con,"select department_name from tbldept_list");
while($row=mysqli_fetch_array($ret))
{
  $dept_name=$row['department_name'];?>
<option value="<?php echo $dept_name;?>"><?php echo $dept_name;?></option>
<?php } ?>
</select><br>

  <input type="text" name="nationality" id="nationality" required="true" placeholder="Enter your Nationality"><br>
  <input type="text" name="religion" id="religion" required="true" placeholder="Enter your Religion"><br>
<input type="text" name="mstatus" id="mstatus" required="true" placeholder="Enter your Marital Status"><br>
  <label style="color: black">Upload your image: </label>
     <input type="file" name="dimages" title="Images" required="true"><br>
  
  <input type="password" name="password" id="password" required="true" placeholder="Enter Password"><br>
  <input type="password" name="password" id="password" placeholder="Re-Enter the password" required="true"><br><br>
  
  <button type="submit" name="submit">Register</button><br><br>
  <a href="login.php"> Already Have an Account ? </a></p>
  <p><a href="../index.php"> Back to Home!!</a></p>
</form>
</body>
</html>
