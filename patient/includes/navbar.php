<?php
$pid=$_SESSION['meddbpid'];
$ret=mysqli_query($con,"select * from tblpatient where id='$pid'");
$row=mysqli_fetch_array($ret);
$name=$row['FullName'];
$gender=$row['Gender'];
$imgs=$row['Images'];
?> 
<img src="banner.png" style="width: 100%;position: absolute;top: 400px;">
<img style="width: 200px;position: absolute;top: 600px;right: 50px;" src="images/<?php echo $imgs; ?>">
<span style="position: absolute;top: 800px;left: 50px;font-family: cursive;font-size: 40px;color: #333;"><?php echo $name; ?></span>

  <?php
  $pid=$_SESSION['meddbpid'];
  $sql=mysqli_query($con,"select DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),DOB)), '%Y')+0 AS Age from tblpatient where id='$pid'");
  $sql1=mysqli_fetch_array($sql);
  $dob=$sql1['Age'];
  ?>
  <span style="position: absolute;top: 850px;left: 50px;font-family: cursive;font-size: 30px;color: #333;">AGE: <?php echo $dob; ?> Yrs</span>
  <div class="tabular" style="position: absolute;top: 985px;">
    <div class="tabu1">
      <span style="font-family: cursive;font-size: 20px;position: absolute;left: 30%;top: 10px;">Our Doctors</span>
      <span style="font-family: sans-serif;font-size: 16px;position: absolute;top: 60px;">Choose by name, specialty, city and more.</span><br>
      <a href="book_slot.php" style="position: absolute;top: 120px;left: 28px;background-color: white;color: #0D638B;border-color: white;border-width: 20px 80px 20px 80px;border-style: solid;text-decoration: none;border-radius: 3px;">BOOK SLOT</a>
    </div>
    <div class="tabu2">
      <span style="font-family: cursive;font-size: 20px;position: absolute;left: 30%;top: 10px;">location and direction</span>
      <span style="font-family: sans-serif;font-size: 16px;position: absolute;top: 60px;left: 23%;">Find maps and more for all locations.</span><br>
      <a href="appointment.php" style="position: absolute;top: 120px;left: 120px;background-color: white;color: #0D638B;border-color: white;border-width: 20px 80px 20px 80px;border-style: solid;text-decoration: none;border-radius: 3px;">APPOINTMENT</a>
    </div>
    <div class="tabu3">
      <span style="font-family: cursive;font-size: 20px;position: absolute;left: 27%;top: 10px;">Appointments</span>
      <span style="font-family: sans-serif;font-size: 16px;position: absolute;top: 60px;">More ways than ever to get care you need.</span><br>
      <a href="https://www.cowin.gov.in/" style="position: absolute;top: 120px;left: 28px;background-color: white;color: #0D638B;border-color: white;border-width: 20px 80px 20px 80px;border-style: solid;text-decoration: none;border-radius: 3px;">VACCINE</a>
    </div>
  </div>