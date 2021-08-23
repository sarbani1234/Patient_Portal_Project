<?php
session_start();
include('includes/dbconnection.php');
if (strlen($_SESSION['meddbdid']==0)) {
  header('location:logout.php');
  } else{ ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor: Dashboard</title>
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
  <?php include_once('includes/header.php');
        include_once('includes/sidebar.php');
        
?>


</body>
</html>
  	<?php } ?>