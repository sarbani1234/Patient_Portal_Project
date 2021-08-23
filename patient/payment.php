  <?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

  ?>

<!DOCTYPE html>
<html>
<head>
    <title>Patient: Payment Page</title>
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
   <div style="position: absolute;top: 1400px;width: 100%;"> 
 <?php
$app_id=$_SESSION['appointment']; 
$app = mysqli_query($con,"SELECT * FROM tblslot_booking WHERE Appointment_no = '$app_id'");
    while($row=mysqli_fetch_array($app))
		{$appointment= $row['Appointment_no'];
	     $money=$row['Fees'];
	     $aap_date=$row['Appointment_Date'];
	     $app_day=$row['Appointment_Day'];
         $dept_name= $row['department_name'];
         $category= $row['category'];
         $consultation=$row['consultation'];
         $clinic=$row['clinic'];
         $dctr_name= $row['Doctor_Name'];}
         echo'

				        <form method="post" action="payment_page.php" novalidate>
				        

						<label>You have chosen <b>Department: </b></label><input type="text" class="form-control" size=60 name="dept" value="'.$dept_name.'"> and <label><b>Doctor: </b></label><input type="text" class="form-control" name="doctor" value="Dr. '.$dctr_name.'"><br><br>

						<label><b>Fees: </b></label><input type="text" class="form-control" name="fees" value="Rs. '.$money.'"><br><br>

						<label><b>Clinic: </b></label>
						<input type="text" class="form-control" name="clinic" size=60 value="'.$clinic.'"><br><br>

						<label><b>Category: </b></label>
						<input type="text" class="form-control" name="category" value="'.$category.'"><br><br>

						<label><b>Consultation: </b></label>
						<input type="text" class="form-control" size=60 name="consultation" value="'.$consultation.'"><br><br>

						<label><b>Your Appointment No: </b></label>
						<input type="text" class="form-control" name="appointment" value="'.$appointment.'"><br> <br>

						<label><b>Your Appointment Date: </b></label>
						<input type="text" class="form-control" name="appdate" value="'.$aap_date.'"><br> <br>

						<label><b>Your Appointment Day: </b></label>
						<input type="text" class="form-control" name="appday" value="'.$app_day.'"><br> <br>';

		if(isset($_SESSION["meddbpid"])){
			$sql = "SELECT * FROM tblpatient WHERE ID='$_SESSION[meddbpid]'";
			$query = mysqli_query($con,$sql);
			$row=mysqli_fetch_array($query);
		
		echo'
						<label><b>Full Name: </b></label>
						<input type="text" id="fname" class="form-control" name="firstname" pattern="^[a-zA-Z ]+$"  value="'.$row["FullName"].'"><br> <br>

						<label><b>Guardian Name: </b></label>
						<input type="text" id="gname" class="form-control" name="guardianname" pattern="^[a-zA-Z ]+$"  value="'.$row["Gname"].'"><br> <br>

						<label><b>Email: </b></label>
						<input type="text" id="email" name="email" class="form-control" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$" value="'.$row["Email"].'" required><br> <br>

						<label><b>Address: </b></label>
						<input type="text" id="adr" name="address" class="form-control" value="'.$row["Address"].'" required><br> <br>

						<label><b>City: </b></label>
						<input type="text" id="city" name="city" class="form-control" value="'.$row["City"].'" pattern="^[a-zA-Z ]+$" required><br> <br>

						  <label><b>Mobile Number: </b></label>
                                    <input type="text" id="mobilenumber" name="mobile_no" class="form-control" pattern="[789][0-9]{9}" value="'.$row["Mobilenumber"].'" required> <br> <br>

							<label><b>State: </b></label>
							<input type="text" id="state" name="state" class="form-control" value="'.$row["State"].'"  pattern="^[a-zA-Z ]+$" required><br> <br>

					
							<label><b>Pincode: </b></label>
							<input type="text" id="zip" name="zip" class="form-control" value="'.$row["Pincode"].'"  pattern="^[0-9]{6}(?:-[0-9]{4})?$" required><br> <br>

						
					
					
						<h3><b>Payment</b></h3>

						<label for="fname">Accepted Cards</label>
						<i class="fa fa-cc-visa" style="color:navy;"></i>
						<i class="fa fa-cc-amex" style="color:blue;"></i>
						<i class="fa fa-cc-mastercard" style="color:red;"></i>
						<i class="fa fa-cc-discover" style="color:orange;"></i>
						<br> <br>

						
						
						<label for="cname"><b>Name on Card</b></label>
						<input type="text" id="cname" name="cardname" class="form-control" pattern="^[a-zA-Z ]+$" required><br> <br>

						
						
                        <label for="cardNumber"><b>Card Number</b></label>
                        <input type="text" class="form-control" id="cardNumber" pattern="^(?:4[0-9]{12}(?:[0-9]{3})?)$" name="cardNumber" required><br> <br>

                  
						<label for="expdate"><b>Exp Date</b></label>
						<input type="text" id="expdate" name="expdate" class="form-control" pattern="^((0[1-9])|(1[0-2]))\/(\d{2})$" required><br> <br>

						

						
								<label for="cvv"><b>CVV</b></label>
								<input type="text" class="form-control" pattern="^[0-9]{4}(?:-[0-9]{3})?$" name="cvv" id="cvv" required><br> <br>

					
					<label><input type="CHECKBOX" name="q" class="roomselect" value="conform" required><b> Shipping address same as billing</b>
					</label><br> <br>

					<input type="submit" id="submit" name="proceed" value="Proceed">
					 </form></div>';
							
		}else{
			echo"<script>alert('Something went wrong')</script>";
		}
		?>
	</div>	  
	
<?php include_once('includes/navbar.php');
include_once('includes/sidebar.php');
?>


</body>
</html>