<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (isset($_POST['submit'])) {
	
	  $fullname=$_POST['fullname'];
	  $dob=$_POST['dob'];
	  $nationality=$_POST['nationality'];
	  $occupation=$_POST['occupation'];
	  $gname=$_POST['gname'];
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
    $password=md5($_POST['password']);

    $imgs=$_FILES["pimages"]["name"];
    $extension = substr($imgs,strlen($imgs)-4,strlen($imgs));
    $allowed_extensions = array(".jpg","jpeg",".png",".gif");
    if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Featured image has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{

$pimages=md5($imgs).time().$extension;
 move_uploaded_file($_FILES["pimages"]["tmp_name"],"images/".$pimages);
  $ret=mysqli_query($con, "select Email from tblpatient where Email='$email' || MobileNumber='$mobno'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
      echo "<script>alert('This email or Contact Number already associated with another account');</script>";
    }
    else{
    $query=mysqli_query($con, "insert into tblpatient(FullName,DOB,Nationality,Occupation,Gname,Email,Mstatus,Religion,Mobilenumber,Gender,Address,Pincode,City,State,District,Images,Password) value('$fullname','$dob','$nationality','$occupation','$gname','$email','$mstatus','$rel','$mobno','$gender','$addr','$pincode','$city','$state','$district','$pimages','$password')");
    if ($query) {
      echo "<script>alert('You have successfully registered');</script>";
  }
  else
    {
      echo "<script>alert('Something went wrong. Please try again');</script>";
    }
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient Registration Page</title>
  <link rel="stylesheet" type="text/css" href="headernew.css">
  <link rel="stylesheet" type="text/css" href="custlogin.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="tab.css">
  
<body topmargin = 0 leftmargin = 0>
	<div class="covidalert">
    <i style="position: absolute;left: 40px;top: 0px;font-size: 20px;" class="fa fa-exclamation-triangle" aria-hidden="true">   Covid19 Alert</i><br>
    <span class="coviddata">Now scheduling COVID-19 vaccine appointments for ages 12+<br></span>
    <a class="linkcovid" href="">Schedule a vaccine appointment</a><br>
    <a class="linkcovid" href="">COVID-19 vaccine FAQs</a><br>
    <span class="coviddata">Going to a Cleveland Clinic location?</span><br>
    <a class="linkcovid" href="">New visitation hours</a><br>
    
  </div>
    <div class="header">
    <a href="../index.php"><img class="logo" src="logo.png"></a>
      <a style="text-decoration: none;position: absolute;right: 20px;top: 30px;font-family: sans-serif;color: #333;" href="">Health Library</a>
  </div>
	<form  action="" name="signup" method="post" onsubmit="return checkpass();" enctype="multipart/form-data">
    <div style="position: absolute;top: 350px;width: 100%;">
      <img src="bannerpatientreg.png" style="width: 100%;">
      <span style="position: absolute;top: 120px;left: 20px;font-family: monospace;font-size: 40px;color: white;">Create Your Safecare</span><br><br><br><br>
      <span style="position: absolute;left: 20%;font-family: sans-serif;font-size: 20px;color: #333;">At Cleveland Clinic, we're here when you need us most. That's why we're bringing you more</span><br>
      <span style="position: absolute;left: 30%;font-family: sans-serif;color: #333;font-size: 20px;">ways to get the care you need than ever before.</span>
    </div>
    <div style="position: absolute;top: 1000px;width: 100%;">
      <span style="position: absolute;top: 100px;left: 50px;font-family: monospace;color: #333;font-size: 40px;">Yes, It's Safe to Come In</span>
      <span style="position: absolute;top: 170px;left: 50px;font-family: sans-serif;font-size: 20px;color: #333;">We know the COVID-19 pandemic weighs heavy on your minds right<br>now. You may wonder if it’s safe to come in to get care? Yes,<br>Cleveland Clinic is among the safest places in healthcare today.</span>
      <span style="position: absolute;top: 260px;left: 50px;font-family: monospace;font-size: 25px;color: #333;">
        You should feel confident we're<br>keeping your family — and<br>our caregivers — safe.
      </span>
      <span style="position: absolute;top: 370px;left: 50px;font-family: sans-serif;font-size: 20px;color: #333;">No matter what brings you in, know that we take steps every single<br>day to keep you safe during your appointment, procedure or surgery.</span>
      <span style="position: absolute;top: 430px;left: 50px;font-family: sans-serif;font-size: 20px;color: #333;">Learn about some of the steps we have taken to increase safety at<br>our family health centers, emergency rooms and hospitals — and a<br>few changes we’ve put in place to keep Cleveland Clinic a safe place<br>for our patients, visitors and caregivers, including:</span>
      <span style="position: absolute;top: 550px;left: 50px;font-family: sans-serif;font-size: 20px;color: #333;">
        1. Limiting visitors.<br>
        2. Encouraging physical distancing.<br>
        3. Disinfecting common areas frequently.<br>
        4. Requiring masks.<br>
      </span>
      <iframe width="660" height="415" style="position: absolute;top: 200px;right: 50px;" src="https://www.youtube.com/embed/ILZSFqJte2g?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <span style="position: absolute;font-family: cursive;font-size: 50px;color: #333;top: 700px;left: 30%;">Connect With Cleveland Clinic</span>
      <img src="virtual.jpg" style="position: absolute;top: 800px;left: 20px;">
      <span style="position: absolute;top: 1150px;left: 120px;color: #0B7EBD;font-family: sans-serif;font-size: 30px;font-weight: bolder;">Virtual Visits</span>
      
      <img src="online.jpg" style="position: absolute;top: 800px;left: 36%;">
      <span style="position: absolute;top: 1150px;left: 37%;color: #0B7EBD;font-family: sans-serif;font-size: 30px;font-weight: bolder;">Manage Your Health Online</span>
      <img src="second.jpg" style="position: absolute;top: 800px;right: 20px;">
      <span style="position: absolute;top: 1150px;right: 50px;color: #0B7EBD;font-family: sans-serif;font-size: 30px;font-weight: bolder;">Get a Virtual Second Opinion</span>
    </div>
    <div style="position: absolute;top: 2300px;width: 100%;">
      <span style="position: absolute;left: 40%;color: #0B7EBD;font-family: cursive;font-size: 40px;">Register Yourself</span>
	<input style="position: absolute;top: 150px;left: 50px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" name="fullname" id="fullname" required="true" placeholder="Full Name"><br>
	<input style="position: absolute;top: 250px;left: 50px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" name="gname" id="gname" required="true" placeholder="Enter your Guardian Name"><br>
	<input style="position: absolute;top: 350px;left: 50px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" name="email" id="email"  required="true" placeholder="Enter your Email"><br>
	<input style="position: absolute;top: 450px;left: 50px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" name="mobilenumber" id="mobilenumber" required="true" placeholder="Enter your Mobile Number"><br>
	<label style="position: absolute;top: 550px;left: 50px;font-family: cursive;color: grey;font-size: 20px;" style="color: black">Gender: </label>
              <input style="position: absolute;top: 653px;left: 130px;color: dimgray;" type="radio" name="gender" id="gender" value="Female"><strong style="color: darkgray;position: absolute;top: 650px;left: 50px;font-size: 20px;">Female :</strong>
              <label>
              <input style="position: absolute;top: 653px;left: 250px;color: darkgray;" type="radio" name="gender" id="gender" value="Male"><strong style="color: darkgray;position: absolute;top: 650px;left: 180px;font-size: 20px;">Male :</strong>
              </label><br>
    <input style="position: absolute;top: 750px;left: 50px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="date" name="dob" id="dob" required="true" placeholder="Enter your Date of Birth"><br>
	<input style="position: absolute;top: 850px;left: 50px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" name="address" id="address" required="true" placeholder="Enter your Adress"><br>
	<input style="position: absolute;top: 950px;left: 50px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" name="city" id="city" required="true" placeholder="Enter your City"><br>
    <input style="position: absolute;top: 1050px;left: 50px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" name="pincode" id="pincode" required="true" placeholder="Enter your Pincode"><br>
    <input style="position: absolute;top: 1150px;left: 50px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" name="state" id="state" required="true" placeholder="Enter your State"><br>
    <input style="position: absolute;top: 1250px;left: 50px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" name="district" id="district" required="true" placeholder="Enter your District"><br>
	<input style="position: absolute;top: 1350px;left: 50px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" name="nationality" id="nationality" required="true" placeholder="Enter your Nationality"><br>
	<input style="position: absolute;top: 1450px;left: 50px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" name="religion" id="religion" required="true" placeholder="Enter your Religion"><br>
	<input style="position: absolute;top: 1550px;left: 50px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" name="occupation" id="occupation" required="true" placeholder="Enter your Occupation"><br>
	<input style="position: absolute;top: 1650px;left: 50px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" name="mstatus" id="mstatus" required="true" placeholder="Enter your Marital Status"><br>
	<label style="position: absolute;top: 1750px;left: 50px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" style="color: black">Upload your image: </label>
     <input style="position: absolute;top: 1850px;left: 50px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="file" name="pimages" title="Images" required="true"><br>
	<input style="position: absolute;top: 1950px;left: 50px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="password" name="password" id="password" required="true" placeholder="Enter Password"><br>
	<input style="position: absolute;top: 2050px;left: 50px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="password" name="password" id="password" placeholder="Re-Enter the password" required="true"><br><br>
	
	<button style="position: absolute;top: 2250px;left: 50%;" class="offset" type="submit" name="submit">Register</button><br><br>
  <a href="login.php" style="position: absolute;top: 2150px;text-decoration: none;left: 50px;color: #333;font-family: monospace;font-size: 30px;"> Already Have an Account ? </a></p>
  
</div>
<!--footer starts here-->
  <footer class="footer-distributed" style="position: absolute;top: 4800px;">
 
      <div class="footer-left">
          <img src="logo.png">
        <h3>About<span style="color: #0B7EBD;">Cleaveland Clinic</span></h3>
 
        <p class="footer-links">
          <a href="index.php">Home</a>
          |
          <a href="">Patient</a>
          |
          <a href="#">Doctor </a>
          |
          <a href="../contact.php">Contact</a>
        </p>
 
        <p style="color: #0B7EBD;" class="footer-company-name">© 2019 Cleaveland Clinic</p>
      </div>
 
      <div class="footer-center">
        <div>
          <a class="marker" href=""><i class="fa fa-map-marker"></i></a>
            <p><span>309 - Rupa Solitaire,
             Bldg. No. A - 1, Sector - 1</span>
            Mahape, Navi Mumbai - 400710</p>
        </div>
 
        <div>
          <i class="fa fa-phone"></i>
          <p>1234567890</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="#">support@Cleavelandclinic.com</a></p>
        </div>
      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span style="color: #0B7EBD;">About the company</span>
          With more than 125 years of successful business, we have a lot to tell. Learn more about ours history, discover the role we play in sustainable transport and read all our news.</p>
        <div class="footer-icons">
          <a class="facebook" href="https://www.facebook.com/campaign/landing.php?campaign_id=1653993517&extra_1=s%7Cc%7C318504235901%7Ce%7Cfacebook%20%27%7C&placement=&creative=318504235901&keyword=facebook%20%27&partner_id=googlesem&extra_2=campaignid%3D1653993517%26adgroupid%3D63066387003%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D1t1%26target%3D%26targetid%3Dkwd-360705453827%26loc_physical_ms%3D9040190%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=CjwKCAiA98TxBRBtEiwAVRLqu44a2Kavp8vnsMkQMHOmFEkUHSwMrZRWF_B1_4LsmBW2fK96wd-gJBoCCOkQAvD_BwE"><i class="fa fa-facebook"></i></a>
          <a class="twitter" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
          <a class="instagram" href="https://www.instagram.com/accounts/login/"><i class="fa fa-instagram"></i></a>
          <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
          <a class="youtube" href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
        </div>
      </div>
    </footer>
</form>
</body>
</html>



