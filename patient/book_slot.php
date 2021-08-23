<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['meddbpid']==0)) {
  header('location:logout.php');
  } else{

  if(isset($_POST['submit']))
{?>
<?php
if(isset($_SESSION["meddbpid"])){
$ret=mysqli_query($con,"select FullName from tblpatient where ID='$_SESSION[meddbpid]'");
while($row=mysqli_fetch_array($ret))
{$name= $row['FullName'];} } 

$cons=$_POST['consultation']; 
$catname=$_POST['category'];   
$deptname=$_POST['department_name'];
$patient_id=$_SESSION["meddbpid"];

$sql0="SELECT ID from `tblslot_booking`";
    $runquery=mysqli_query($con,$sql0);
    if (mysqli_num_rows($runquery) == 0) {
        echo( mysqli_error($con));
        $ID=1;
    }else if (mysqli_num_rows($runquery) > 0) {
        $sql2="SELECT MAX(ID) AS max_val from `tblslot_booking`";
        $runquery1=mysqli_query($con,$sql2);
        $row = mysqli_fetch_array($runquery1);
        $ID= $row["max_val"];
        $ID=$ID+1;
        echo( mysqli_error($con));
    }

$query=mysqli_query($con,"insert into tblslot_booking(ID,Patient_Id,Patient_Name,consultation,category,department_name) values('$ID','$patient_id','$name','$cons','$catname','$deptname')"); 
if ($query) {
	echo "<script>alert('Your primary booking has done.');</script>";   
    echo "<script>window.location.href='view_book_slot.php'</script>";
}
else {
    echo "<script>alert('Something went wrong. Unable to update dates.');</script>";   
    echo "<script>window.location.href='book_slot.php'</script>";
 }
}


    ?>
<!DOCTYPE html>
<html lang="xxx">

<head>
    
    <title>Patient: Slot Booking</title>
     <link rel="stylesheet" type="text/css" href="headernew.css">
  <link rel="stylesheet" type="text/css" href="custlogin.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="tab.css">
    <link rel="stylesheet" type="text/css" href="topnav.css">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
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
<form  method="post" novalidate>
<div style="position: absolute;top: 1500px;width: 100%;">
<span style="position: absolute;font-family: monospace;color: #333;font-size: 20px;position: absolute;left: 25px;">Consultation:</span>
	 <span style="position: absolute;font-family: monospace;color: #333;font-size: 20px;position: absolute;left: 20px;top: 70px;"><select name="consultation" required>
	<option value="">Select one</option>
	<?php
	$ret=mysqli_query($con,"select Consultation from tblconsultation_list");
	while($row=mysqli_fetch_array($ret))
	{?>
	<option value="<?php echo $row['Consultation'];?>"><?php echo $row['Consultation'];?></option>
	<?php } ?>
	</select></span>


<span style="position: absolute;font-family: monospace;color: #333;font-size: 20px;position: absolute;left: 40%;">Category:</span>
	 <span style="position: absolute;font-family: monospace;color: #333;font-size: 20px;position: absolute;left: 40%;top: 70px;"><select name="category" required>
	<option value="">Select one</option>
	<?php
	$ret=mysqli_query($con,"select category from tblcategory_list");
	while($row=mysqli_fetch_array($ret))
	{?>
	<option value="<?php echo $row['category'];?>"><?php echo $row['category'];?></option>
	<?php } ?>
</select></span>

<span style="position: absolute;font-family: monospace;color: #333;font-size: 20px;position: absolute;right: 33%;">Department:</span> 
	 <span style="position: absolute;font-family: monospace;color: #333;font-size: 20px;position: absolute;right: 20px;top: 70px;"><select name="department_name" required>
	<option value="">Select one</option>
	<?php
	$ret=mysqli_query($con,"select department_name from tbldept_list");
	while($row=mysqli_fetch_array($ret))
	{
	  $dept_name=$row['department_name'];?>
	<option value="<?php echo $dept_name;?>"><?php echo $dept_name;?></option>
	<?php } ?>
	</select></span>


<button type="submit" name="submit" class="fill" style="position: absolute;left: 540px;top: 250px;">Confirmed primary settings and proceed</button>
</form>
    </div>
    
  
<?php include_once('includes/navbar.php');
include_once('includes/sidebar.php');
?>
<!--footer starts here-->
  <footer class="footer-distributed" style="position: absolute;top: 1900px;">
 
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
<?php } ?>