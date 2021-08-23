<?php
session_start();
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cleaveland Clinic</title>
	<link rel="stylesheet" type="text/css" href="headernew.css">
	<script src="https://kit.fontawesome.com/3c573beba0.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="topnav.css">
	<link rel="stylesheet" type="text/css" href="tab.css">
	 <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="custlogin.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
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
		<img class="logo" src="logo.png">
    	<a style="text-decoration: none;position: absolute;right: 20px;top: 30px;font-family: sans-serif;color: #333;" href="">Health Library</a>
	</div>
	<div class="topnav" id="myTopnav">
  <a href="" class="active">Covid19 vaccine</a>
  <a href="patient/login.php">Find a Doctor</a>
  <a href="doctor/login.php">Doctors portal</a>
  <a href="nurse/login.php">Nurse Portal</a>
  <a href="admin/login.php">Admin</a>
  <a href="#about" style="position: absolute;right: 10px;">About us</a>
  <a href="#about" style="position: absolute;right: 150px;">Contact us</a>
  	
</div>
	<div>
		<img style="position: absolute;top: 350px;width: 100%;" src="banner.png">
	</div>
	<div class="tabular">
		<div class="tabu1">
			<span style="font-family: cursive;font-size: 20px;position: absolute;left: 25%;top: 10px;">Our Doctors</span>
			<span style="font-family: sans-serif;font-size: 16px;position: absolute;top: 60px;">Choose by name, specialty, city and more.</span><br>
			<button style="position: absolute;top: 100px;left: 50px;" class="fill">FIND A DOCTOR</button>
		</div>
		<div class="tabu2">
			<span style="font-family: cursive;font-size: 20px;position: absolute;left: 30%;top: 10px;">location and direction</span>
			<span style="font-family: sans-serif;font-size: 16px;position: absolute;top: 60px;left: 23%;">Find maps and more for all locations.</span><br>
			<button style="position: absolute;top: 100px;left: 150px;" class="fill">GET DIRECTIONS</button>
		</div>
		<div class="tabu3">
			<span style="font-family: cursive;font-size: 20px;position: absolute;left: 27%;top: 10px;">Appointments</span>
			<span style="font-family: sans-serif;font-size: 16px;position: absolute;top: 60px;">More ways than ever to get care you need.</span><br>
			<button style="position: absolute;top: 100px;left: 10px;" class="fill">ACCESS APPOINTMENTS</button>
		</div>
	</div>
	<div style="position: absolute;top: 1300px;width: 100%;">
		<iframe style="position: absolute;right: 20px;" width="660" height="415" src="https://www.youtube.com/embed/trZA8FheF7A?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<span style="font-family: cursive;position: absolute;top: 100px;left: 100px;font-size: 50px;color: #F652A0;">You Are Our Priority</span>
	</div>
	<div style="position: absolute;top: 1750px;width: 100%;">
		<a href=""><img style="width: 25%;position: absolute;top: 150px;left: 40px;" src="centennial-soc-promo.jpg"></a>
		<a href=""><img style="width: 25%;position: absolute;top: 150px;left: 38%;" src="coronavirus-safe-care-promo.jpg"></a>
		<a href=""><img style="width: 25%;position: absolute;top: 150px;right: 40px;" src="coronavirus-vaccine-children-promo.jpg"></a>

	</div>
	<div style="width: 100%;position: absolute;top: 2400px;">
		<iframe width="660" height="415" style="position: absolute;left: 40px;" src="https://www.youtube.com/embed/EKjdzIVtKSo?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<span style="position: absolute;top: 150px;right: 100px;font-family: cursive;color: #0B7EBD;font-size: 50px;">Get Vaccinated Today</span>
	</div>
	<div style="position: absolute;top: 2850px;width: 100%;">
		<img style="width: 100%;" src="online.png">

	</div>
	<div>
		<a href="" style="position: absolute;right: 180px;top: 2970px;background-color: white;color: #0D638B;border-color: white;border-width: 20px 80px 20px 80px;border-style: solid;text-decoration: none;border-radius: 3px;">Learn more about virtual visit</a>
		<a href="" style="position: absolute;right: 550px;top: 3280px;background-color: #0D638B;color: white;border-color: #0D638B;border-width: 20px 80px 20px 80px;border-style: solid;text-decoration: none;border-radius: 4px;">Learn more about cardiac</a>

	</div>
	<div style="position: absolute;top: 3390px;width: 100%;">
		<img style="width: 100%;" src="notfrom.png">
	</div>
	<div>
		<a href="" style="position: absolute;right: 630px;top: 3550px;background-color: white;color: #0D638B;border-color: white;border-radius: 4px;border-width: 20px 80px 20px 80px;border-style: solid;text-decoration: none;">GET STARTED</a>
		
	</div>
	<!--lets talk buisness-->
    <!--lets talk buisness-->
      <div>
      <img src="letstalk.png" style="position: absolute;top: 3650px;width: 100%;height: 50%;">
      <div style="position: absolute;top: 3650px;left: 30%;padding: 300px 600px 50px 50px;">
      </div>
      <span>
        <h2 style="position: absolute;top: 3670px;left: 13%;color: #0D638B;font-family: sans-serif;font-stretch: ultra-expanded;">CLEAVELAND ASSISTANCE</h2>
        <h3 style="position: absolute;top: 3710px;left: 9%;font-family: sans-serif;color: #396D5C;">We're here to help – 24 hours a day, 365 days a year.</h3>
        <a style="position: absolute;top: 3950px;left: 34%;color: #0D638B;text-decoration: none;font-family: sans-serif;font-weight: bolder;font-size: 40px;" href="tel:Spanish:%20(0034)%2091%20678%208058%20">Spanish: (0034) 91 678 8058</a>
        <a style="position: absolute;top: 4000px;left: 34%;color: #0D638B;text-decoration: none;font-family: sans-serif;font-weight: bolder;font-size: 40px;" href="tel:English:%20(0044)%201274%20301260">English: (0044) 1274 301260</a>
      </span>
      </div>
	<!--footer starts here-->
	<footer class="footer-distributed" style="position: absolute;top: 4000px;">
 
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