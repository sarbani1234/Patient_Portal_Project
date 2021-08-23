<?php
session_start();
include('includes/dbconnection.php');
?>

<!DOCTYPE html>
<html lang="xxx">

<head>
    
    <title>Patient: Payment Page</title>
    <link rel="stylesheet" type="text/css" href="headernew.css">
  <link rel="stylesheet" type="text/css" href="custlogin.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="tab.css">
    <link rel="stylesheet" type="text/css" href="topnav.css">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
 <style type="text/css">
        
        p {
              text-transform: uppercase;
              color: #4CAF50;
              font-weight: bold;
           }


.card{
  background:#16181a;  border-radius:14px; max-width: 300px; display:block; margin:auto;
  padding:60px; padding-left:20px; padding-right:20px;box-shadow: 2px 10px 40px black; z-index:99;
}

.logo-card{max-width:50px; margin-bottom:15px; margin-top: -19px;}

label{display:flex; font-size:15px; color:white; opacity:.4; font-weight: bold;}

input{font-family: 'Work Sans', sans-serif;background:transparent; border:none; border-bottom:1px solid transparent; color:#dbdce0; transition: border-bottom .4s; font-weight: bold;}
input:focus{border-bottom:1px solid #1abc9c; outline:none; font-weight: bold;}

.cardnumber{display:block; font-size:20px; margin-bottom:8px;}

.exp_date{display:block; font-size:15px; max-width: 200px; float:left; margin-bottom:15px;}

.toleft{float:left;}
.ccv{display:block;width:50px; margin-top:-35px; font-size:15px;margin-bottom:15px; margin-left: 240px;}

.receipt{background: #dbdce0; border-radius:4px; padding:5%; padding-top:200px; max-width:600px; display:block; margin:auto; margin-top:-180px; z-index:-999; position:relative; height: 450px;}

.col{width:50%; float:left; }
.bought-item{background:#f5f5f5; padding:2px;}
.bought-items{margin-top:-3px;}

.name{color:#3a7bd5; font-weight: bold;}
.dctr_name{color: #3a7bd5; font-weight: bold;}
.cons{color: #3a7bd5; font-weight: bold;}
.cat{color: #3a7bd5; font-weight: bold;}
.dept{color: #3a7bd5; font-weight: bold;}
.clinic{color: #3a7bd5; font-weight: bold;}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  position: absolute;
  left: 665px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
    </style>

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
    <div class="topnav" id="myTopnav">
  <a href="" class="active">Covid19 vaccine</a>
  <a href="profile.php">Profile</a>
  <a href="change-password.php">Settings</a>
  <a href="logout.php">Logout</a>
  <a href="#about" style="position: absolute;right: 10px;">About us</a>
  <a href="#about" style="position: absolute;right: 150px;">Contact us</a>
    
</div>
<?php 
include_once('includes/navbar.php');
include_once('includes/sidebar.php');


if (isset($_SESSION["meddbpid"])) {


    $invoiceno= mt_rand(100000000, 999999999); 
    $rno=mt_rand(10000,99999);
    $name = $_POST["firstname"];
    $category=$_POST['category'];
    $clinic=$_POST['clinic'];
    $consultation=$_POST['consultation'];
    $deptname=$_POST['dept'];
    $dctr=$_POST['doctor'];
    $fees=$_POST['fees'];
    $app_day=$_POST['appday'];
    $app_date=$_POST['appdate'];
    $cardnumber= $_POST['cardNumber'];
    $expdate= $_POST['expdate'];
    $cvv= $_POST['cvv'];

    $appointment = $_POST["appointment"];
    $email = $_POST['email'];
    $guardianname = $_POST['guardianname'];
    $mobilenumber = $_POST['mobile_no'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip= $_POST['zip'];
    $patient_id=$_SESSION["meddbpid"];

    $sql0="SELECT Payment_id from `tblpatient_payment`";
    $runquery=mysqli_query($con,$sql0);
    if (mysqli_num_rows($runquery) == 0) {
        echo( mysqli_error($con));
        $Payment_id=1;
    }else if (mysqli_num_rows($runquery) > 0) {
        $sql2="SELECT MAX(Payment_id) AS max_val from `tblpatient_payment`";
        $runquery1=mysqli_query($con,$sql2);
        $row = mysqli_fetch_array($runquery1);
        $Payment_id= $row["max_val"];
        $Payment_id=$Payment_id+1;
        echo( mysqli_error($con));
    }
   

    $sql =mysqli_query($con, "INSERT INTO `tblpatient_payment` (`Payment_id`, `Invoice_No`, `Appointment_No`,`Patient_id`,`Patient_Name`,`Guardian_Name`,`Department_name`,`Doctor_name`, `Email`,`Mobile_no`,`Address`,`City`, `State`,`Pincode`, `Appointment_Date`, `Appointment_Day`, `Consultation`, `Category`, `Clinic`) VALUES ('$Payment_id','".$invoiceno."','$appointment', '$patient_id','$name','$guardianname','$deptname','$dctr','$email','$mobilenumber','$address','$city', '$state', '$zip', '$app_date', '$app_day', '$consultation', '$category', '$clinic')");

        $_SESSION['invoice']=$invoiceno;
    
    ?>
  
  <form method="post" action="payment_process.php" novalidate>             
 <div class="container" style="position: absolute;top: 1500px;left: 450px;">
  <div class="card">
   <img src="https://seeklogo.com/images/V/VISA-logo-62D5B26FE1-seeklogo.com.png" class="logo-card">

 <label>Card number: </label>
 <input id="user" type="text" class="input cardnumber" value="<?php echo $cardnumber; ?>">

 <label>Exp Date: </label>
 <input class="input exp_date"  value="<?php echo $expdate; ?>">

 <label class="toleft">CCV:</label>
 <input class="input toleft ccv" value="<?php echo $cvv; ?>">
  </div>
  
  <div class="receipt">
   
  <h1 style="color: #00008B;font-weight: bold; text-align: center;">You have to pay <?php echo $fees; ?></h1>

    <div class="col"><p>Name:</p>
    <h2 class="name"><?php echo $name; ?></h2><br>

    <p>Consultation:</p>

      <h2 class="cons"><?php echo $consultation; ?></h2><br>
      <p>Category:</p>
      <h2 class="cat"><?php echo $category; ?></h2><br>

    </div>
    <div class="col">

        <p>Doctor Name:</p>
    <h2 class="dctr_name"><?php echo $dctr; ?></h2><br>  

      <p>Department Name:</p>
      <h2 class="dept"><?php echo $deptname; ?></h2><br>

      <p>Clinic:</p>
      <h2 class="clinic"><?php echo $clinic; ?></h2><br>    
    </div>
</div>
</div>
<button style="position: absolute;top: 2300px;left: 650px;" class="button button2" type="submit" name="submit">Continue to Pay</button>

</form>
<?php } ?>
<!--footer starts here-->
  <footer class="footer-distributed" style="position: absolute;top: 2400px;">
 
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