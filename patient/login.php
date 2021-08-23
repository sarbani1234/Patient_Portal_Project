<?php
session_start();
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
   $emailcon=$_POST['emailcont'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tblpatient where  (Email='$emailcon' || MobileNumber='$emailcon') && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['meddbpid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{
      echo "<script>alert('Your email address or password is incorrect. Please try again. If you've forgotten your sign in details, just click the 'Forgot your password?' link below.');</script>";  
    }
  }
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cleaveland Clinic|Paitient Login</title>
  <link rel="stylesheet" type="text/css" href="headernew.css">
  <link rel="stylesheet" type="text/css" href="custlogin.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="tab.css">

</head>
<body topmargin = 0 leftmargin = 0>
  <div class="covidalert">
    <i style="position: absolute;left: 40px;top: 0px;font-size: 20px;" class="fa fa-exclamation-triangle" aria-hidden="true">   Covid19 Alert</i><br>
    <span class="coviddata">Now scheduling COVID-19 vaccine appointments for ages 12+<br></span>
    <a class="linkcovid" href="">Schedule a vaccine appointment</a><br>
    <a class="linkcovid" href="">COVID-19 vaccine FAQs</a><br>
    <span class="coviddata">Going to a Cleveland Clinic location?</span><br>
    <a class="linkcovid" href="">New visitation hours</a><br>
    <a class="linkcovid" href="">Masks are required for patients and visitors (even if you're vaccinated)</a><br>
  </div>
  <div class="header">
    <a href="../index.php"><img class="logo" src="logo.png"></a>
      <a style="text-decoration: none;position: absolute;right: 20px;top: 30px;font-family: sans-serif;color: #333;" href="">Health Library</a>
  </div>
  
	<form method="post" action="">
    <div style="position: absolute;top: 350px;width: 100%;">
      <img src="banner.png" style="width: 100%;">
      <span style="position: absolute;top: 50px;left: 20px;font-family: monospace;font-size: 40px;color: #333;">Patients & Visitors</span><br><br><br><br>
      <span style="position: absolute;left: 20%;font-family: sans-serif;font-size: 20px;color: #333;">We’re here to assist you before, during and after your visit to Cleveland Clinic. Find everything you</span><br>
      <span style="position: absolute;left: 30%;font-family: sans-serif;color: #333;font-size: 20px;">need to make your visit as pleasant and comfortable as possible.</span>
    </div>
  <div style="position: absolute;top: 1050px;width: 100%;">
	<input style="position: absolute;top: 150px;left: 50px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" id="email" name="emailcont" required="true" placeholder="Registered Email or Contact Number" autocomplete="off"><br>
	<input style="position: absolute;top: 250px;left: 50px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="password" name="password" required="true" placeholder="Password" autocomplete="off"><br>
	<button type="submit" name="login" class="offset" style="position: absolute;top: 550px;left: 45%;">Sign In</button><br>
  <iframe width="660" height="415" style="position: absolute;right: 50px;" src="https://www.youtube.com/embed/cTZ197Gbmx0?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <a href="forgot-password.php" style="position: absolute;top: 400px;left: 50px;text-decoration: none;font-family: cursive;font-size: 30px;color: #333;"> Have you forgot your password ?</a>
                        <p><a href="patient_register.php" style="position: absolute;top: 450px;left: 50px;font-family: cursive;color: #333;font-size: 30px;text-decoration: none;">Create Account</a></p>
                      </div>
                        <!--footer starts here-->
  <footer class="footer-distributed" style="position: absolute;top: 1700px;">
 
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
</body>
</html>
