<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['meddbpid']==0)) {
  header('location:logout.php');
  } else{

  if(isset($_POST['update']))
{
 $appointment_no= mt_rand(100000000, 999999999);
 $slot_id=substr(base64_decode($_GET['slot_book_id']),0,-5);
 
 $date=$_POST['date']; 
 $day=$_POST['day'];
 $fees=$_POST['fees'];

$query=mysqli_query($con,"update tblslot_booking set Appointment_no='".$appointment_no."', Appointment_Date='$date', Appointment_Day='$day', Fees='$fees' where ID='$slot_id'"); 
 if($query)  {
    echo "<script>alert('Appointment booked successfully.');</script>"; 
    $_SESSION['appointment']=$appointment_no;  
    echo "<script>window.location.href='payment.php'</script>";
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
<div style="position: absolute;top: 1400px;width: 100%;">
<?php
$slot_id=substr(base64_decode($_GET['slot_book_id']),0,-5);
$query=mysqli_query($con,"select * from tblslot_booking where ID='$slot_id'");
while($result=mysqli_fetch_array($query))
{ 
 $pname=$result['Patient_Name'];
 $cons=$result['consultation']; 
 $catname=$result['category'];   
 $deptname=$result['department_name'];  
?>                                       

<span style="color: #333; font-size:20px;font-family: sans-serif;position: absolute;left: 25%;font-weight: bolder;">Your Name: </span>
<span style="color: #333;position: absolute;left: 45%;font-family: cursive;font-style: 20px;"><?php echo $pname;?></span><br><br>

<span style="color: #333; font-size:20px;font-family: sans-serif;position: absolute;left: 25%;font-weight: bolder;">Consultation: </span>
   <span style="color: #333;position: absolute;left: 45%;font-family: cursive;font-style: 20px;"> <?php echo $cons;?></span><br><br>


<span style="color: #333; font-size:20px;font-family: sans-serif;position: absolute;left: 25%;font-weight: bolder;">Category: </span>
    <span style="color: #333;position: absolute;left: 45%;font-family: cursive;font-style: 20px;"><?php echo $catname;?></span><br><br>

<span style="color: #333; font-size:20px;font-family: sans-serif;position: absolute;left: 25%;font-weight: bolder;">Department: </span>
    <span style="color: #333;position: absolute;left: 45%;font-family: cursive;font-style: 20px;"><?php echo $deptname;?></span><br><br>


<span style="color: #333; font-size:20px;font-family: sans-serif;position: absolute;left: 25%;font-weight: bolder;font-family: sans-serif;">Choose the Clinic: </span>
   <span style="position: absolute;font-family: monospace;color: #333;font-size: 20px;position: absolute;left: 680px;top: 148px;"> <select name="clinic" required>
    <option value="<?php echo $row['clinic'];?>">Select Clinic</option>
    <?php
    $ret=mysqli_query($con,"select clinic from tbldept_wise_clinic where department_name = '$deptname'");
    while($row=mysqli_fetch_array($ret))
    {?>
    <option value="<?php echo $row['clinic'];?>"><?php echo $row['clinic'];?></option>
    <?php } ?>
    </select><br><br></span>
     <?php } ?>

    <div class="tabu2" style="position: absolute;top: 250px;"> 
       <span style="color: whitesmoke; font-size:20px;font-family: sans-serif;position: absolute;left: 160px;">CHOOSE DOCTOR: </span>
        
            <span style="color: floralwhite;position: absolute;top: 40px;left: 150px;">SLOTS VIEW BY DOCTOR</span>
                    <span style="color: antiquewhite; font-size:18px;font-family: cursive;position: absolute;top: 70px;left: 50px;">DOCTOR: </span>
                        <select style="position: absolute;font-family: monospace;color: #333;font-size: 20px;position: absolute;left: 165px;top: 70px;" name="doctor_name" required>
                        <option value="<?php echo $dr_name;?>">Select Doctor</option>
                        <?php
                        $ret=mysqli_query($con,"select Doctor_Name from tbldept_wise_dctr where Department_Name = '$deptname'");
                        while($row=mysqli_fetch_array($ret))
                        {$dr_name=$row['Doctor_Name'];?>
                        <option value="<?php echo $dr_name;?>"><?php echo $row['Doctor_Name'];?></option>
                        <?php } ?>
                        </select>
                        <input style="position: absolute;top: 65px;right: 20px;background-color: white;color: #0D638B;border-color: white;border-width: 10px 40px 10px 40px;border-style: solid;text-decoration: none;border-radius: 3px;" type="submit" name="view_slots" value="View Slots"></span>
    </div> 
</form>  

<?php if(isset($_POST['view_slots'])){

    $clinic=$_POST['clinic']; 
  $name=$_POST['doctor_name'];

$query=mysqli_query($con,"update tblslot_booking set clinic='$clinic', Doctor_Name='$name' where ID='$slot_id'"); ?>

 <section>
    <table style="position: absolute;top: 500px;left: 20%;" border="1">
        <thead>
            <tr>
              <th>#</th>
              <th>Doctor Name</th>
              <th>Department Name</th>
              <th>Date</th>
              <th>Day</th>
              <th>Fees</th>
            </tr>
        </thead>
           <tbody>

<?php
$query=mysqli_query($con,"select * from tbldate where DoctorName = '$dr_name'");
$num=mysqli_num_rows($query);
if($num>0){
$cnt=1;
while($row=mysqli_fetch_array($query))
{    
?>
<form method="post" novalidate>                                                  
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['DoctorName'];?></td>
<td><?php echo $row['DepartmentName'];?></td>
<td><input type="text" value="<?php echo $row['Date'];?>" name="date" required autocomplete="off"></td>
<td><input type="text" value="<?php echo $row['Day'];?>" name="day" required autocomplete="off"></td>
<td>
      <?php
    $query=mysqli_query($con,"select fees from tblcategory_wise_fees where category = '$catname'");
    $num=mysqli_num_rows($query);
    while($row=mysqli_fetch_array($query))
    {    
    ?>
    <input type="text" value="<?php echo $row['fees'];?>" name="fees" required autocomplete="off">
  <?php } ?>
</td>

    <button style="position: absolute;top: 600px;left: 45%;" type="update" name="update" class="pulse">Book Now</button>
</tr>
</form>
<?php 
$cnt++;
}} else { 
   echo "<script>alert('No record found against this slots!')</script>";
    }} ?>
                                                
                                            </tbody>
                                        </table>
                               
</section>                   
    
  </div>
<?php include_once('includes/navbar.php');
include_once('includes/sidebar.php');
?>
 <!--footer starts here-->
  <footer class="footer-distributed" style="position: absolute;top: 2000px;">
 
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