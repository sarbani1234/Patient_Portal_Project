<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['meddbdid']==0)) {
  header('location:logout.php');
  } 
else{  

?>

<!DOCTYPE html>
<html>
<head>
    <title>Doctor: View Prescription</title>
    <style type="text/css">
     
.invoice{
  width:970px !important;
  margin:50px auto;}

  .invoice-header{
    padding:25px 25px 15px; }

    h1{
      margin:0
    }
      .media-body{
        font-size:.9em;
        margin:0;
      }

  .invoice-body{
    border-radius:10px;
    padding:25px;
    background:#F8F8FF;
  }

.logo{
  position: absolute;
  left: 900px;
  top: 835px;
  max-height:70px;
  border-radius:10px;
}

.media-body{
  position: absolute;
  left: 1060px;
  top: 835px;}

* {
  box-sizing: border-box;
}

.row {
  margin-left:-5px;
  margin-right:-5px;
}
  
.column {
  float: left;
  width: 50%;
  padding: 5px;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 2px solid #ddd;
}

th {
  text-align: center;
  padding: 16px;
  background-color: #FAEBD7;
  font-size: 20px;}

  td {
  text-align: left;
  padding: 16px;
}

.header {
  padding-top: 15px;
  padding-bottom: 35px;
  text-align: left;
  background: #FFFAFA;
  color: black;
  font-size: 12px;
  height: 20px;
}

.med{
  text-align: left;
  padding: 16px;
  background-color: #FAEBD7;
  font-size: 22px;
}

.med-border{
  border: 1px solid #ddd;
}

.div1 {
  width: 455px;
  height: 330px;  
  padding: 10px;
  border: 2px solid #ddd;
  font-size: 18px;
  font-weight: bold;
}

.div2 {
  left: 764px;
  width: 455px;
  height: 330px;  
  padding: 10px;
  border: 2px solid #ddd;
  font-size: 18px;
  position: absolute;
  top: 1620px;
}

.heading1 {
  padding: 15px;
  padding-bottom: 35px;
  text-align: left;
  background: #E3E4FA;
  color: black;
  font-size: 12px;
  height: 20px;
}

.heading {
  padding: 15px;
  padding-bottom: 35px;
  text-align: left;
  background: #E3E4FA;
  color: black;
  font-size: 12px;
  height: 20px;
}

@import url('https://fonts.googleapis.com/css?family=Muli:300,400,700,900');
.buttons > button{
  margin-right: 30px;
}

.btn-gradient{
background: #1462ff;
    color: white;
    border-radius: 12px;
    padding: 12px 48px;
    box-shadow: 0 6px 30px -10px #4a74c9;
    transition: all 0.5s ease;
    border: 0;
    letter-spacing: 1px;
    text-transform: uppercase;
}
.btn-gradient:hover{
  box-shadow: 0 0px 0px 0 rgba(0, 40, 120, 0);
  transform: scale(0.930);
}
.gradient3{
  background-image: linear-gradient(60deg, #8c38fe 10%, #b72ee4 50%, #9c66e5 100%);
  box-shadow: 0 2px 25px 0 rgba(111, 30, 138, .35);
  position: absolute;
  top: 1975px;
  left: 560px;
}

.gradient3:hover{
  box-shadow: 0 10px 30px #8c38fe, 0 5px 0 0 #9c66e5;
    transform: translateY(-5px);
}


  </style>
</head>
<body>   
   
  
<?php include_once('includes/header.php');
include_once('includes/sidebar.php');
include_once('includes/footer.php');
?>

<div id="pdf">
<?php 

date_default_timezone_set("Asia/Kolkata");
$form_no= mt_rand(1000, 9999);
$med_id=substr(base64_decode($_GET['med_id']),0,-5);
$query=mysqli_query($con,"select * from tblprescription  where Prescription_id='$med_id'");
while($row=mysqli_fetch_array($query))
{ $dname = $row['Doctor_Name'];
  $pname = $row['Patient_Name'];?>

<div class="container invoice">
  <div class="invoice-header">
    <div class="row">
      <div class="col-xs-8">
        <h1>CLEVELAND CLINIC</small></h1>
        <h4 class="text-muted">NO: <?php echo $form_no;?> | Date: <?php echo date("Y-m-d");?> | Time: <?php echo date("h:i:sa");?></h4>
      </div>
      <div class="col-xs-4">
        <div class="media">
          <div class="media-left">
            <img class="media-object logo" src="images/logo.gif" />
          </div>
          <ul class="media-body">
            <li><strong>-----</strong></li><br>
            <li>------</li><br>
            <li>------</li><br>
            <li>------</li><br>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="invoice-body">


    <div class="row">
  <div class="column">
    <table>
      <tr>
    <th colspan="2">Doctor Details</th> </tr>
    <tr>
              <td><strong>Name</strong></td>
              <td><strong><?php echo $dname;?></strong></td> </tr><?php } ?>

              <?php
              $sql = mysqli_query($con, "select DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),DOB)), '%Y')+0 AS Age from tbldocapprove where FullName = '$dname'");  { 
                $sql1=mysqli_fetch_array($sql);
                $dob=$sql1['Age'];?>
              <tr>
              <td><strong>Age</strong></td>
              <td><?php echo $dob;?></td></tr><?php } ?>

              <?php
              $sql = mysqli_query($con, "select * from tbldocapprove where FullName = '$dname'");
              while($row=mysqli_fetch_array($sql))  { ?> 
                <tr>
              <td><strong>Email</strong></td>
              <td><?php echo $row['Email'];?></td></tr>
              <tr>
              <td><strong>Address</strong></td>
              <td><?php echo $row['Address'];?></td></tr>
              <tr>
              <td><strong>Mobile Number</strong></td>
              <td><?php echo $row['Mobilenumber'];?></td></tr>
              <tr>
              <td><strong>Department</strong></td>
              <td><?php echo $row['Department_name'];?></td></tr>
              <tr> <td>&nbsp;</td>
              <td>&nbsp;</td></tr>
                
              <?php } ?>
              

              </table>
              </div>
         
             <div class="column">
               <table>
                 <tr>
            <th colspan="2">Patient Details</th></tr>
            <tr>
              <td><strong>Name</strong></td>
              <td><strong><?php echo $pname;?></strong></td></tr>

              <?php
              $sql = mysqli_query($con, "select DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),DOB)), '%Y')+0 AS Age from tblpatient where FullName = '$pname'");  { 
                $sql1=mysqli_fetch_array($sql);
                $dob=$sql1['Age'];?>
              <tr>
              <td><strong>Age</strong></td>
              <td><?php echo $dob;?></td></tr><?php } ?>

              <?php
              $sql = mysqli_query($con, "select * from tblpatient where FullName = '$pname'");
              while($row=mysqli_fetch_array($sql))  { ?>
                <tr>
              <td><strong>Email</strong></td>
              <td><?php echo $row['Email'];?></td></tr>
              <tr>
              <td><strong>Address</strong></td>
              <td><?php echo $row['Address'];?></td></tr>
              <tr>
              <td><strong>Mobile Number</strong></td>
              <td><?php echo $row['Mobilenumber'];?></td></tr> <?php } ?>

              <?php
              $info=substr(base64_decode($_GET['med_id']),0,-5);
              $sql = mysqli_query($con, "select * from tblprescription where Prescription_id = '$info'");
              while($row=mysqli_fetch_array($sql))  { ?>
                <tr>
              <td><strong>Department</strong></td>
              <td><?php echo $row['Department'];?></td></tr>
              <tr>
              <td><strong>Clinic</strong></td>
              <td><small><?php echo $row['Clinic'];?></small></td></tr> 
              </table>
  </div>
</div>
<div class="header">
  <h1>Disease: <?php echo $row['Diseases'];?></h1>
</div>
       <?php } ?>

    <table border="4">
      <thead>
        <tr>
          <th class="med" colspan="7">Medicines</th>
        </tr>

      <?php
      $med=substr(base64_decode($_GET['med_id']),0,-5);
      $sql = mysqli_query($con, "select * from tblprescription where Prescription_id = '$info'");
      $num=mysqli_num_rows($sql);
       if($num>0){
          $cnt=1;
          while($row=mysqli_fetch_array($sql))  { ?>
      
          <tr>
            <td style="font-size: 18px;" class="med-border"><b>Sl. No.</b></td>
            <td style="font-size: 18px;" class="med-border"><b>Name</b></td>
            <td style="font-size: 18px;" class="med-border"><b>Type</b></td>
            <td style="font-size: 18px;" class="med-border"><b>Company</b></td>
            <td style="font-size: 18px;" class="med-border"><b>Composition</b></td>
            <td style="font-size: 18px;" class="med-border"><b>Tablet</b></td>
            <td style="font-size: 18px;" class="med-border"><b>Periods</b></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="text-align: center;" class="med-border"><?php echo $cnt;?></td>
            <td style="text-align: center;" class="med-border">
              <?php echo $row['MedName'];?>
            </td>
            <td style="text-align: center;" class="med-border"><?php echo $row['MedType'];?></td>
            <td style="text-align: center;" class="med-border" class="med-border"><?php echo $row['MedCompany'];?></td>
            <td style="text-align: center;" class="med-border"><?php echo $row['MedComposition'];?></td>
            <td style="text-align: center;" class="med-border" class="med-border"><?php echo $row['MedTablet'];?></td>
            <td style="text-align: center;" class="med-border"><?php echo $row['Periods'];?> days</td>
          </tr>
          <?php 
           $cnt++;  }} ?>

        </tbody>
      </table><br>
   
 <div class="div1">
   <div class="heading">
     <h1>Comments / Notes</h1>
   </div>
   <p>1. Please make online appointments as far as possible.<br><br>
2. If you do not have credit / debit card or other payment modalities you are encouraged to do online pre-registration and contact customer service for help.<br><br>
3. If you reach Cleaveland Clinic, Durgapur without a confirmed appointment, please contact our staff for an early appointment.</p></div>

<div class="div2">
   <div class="heading1">
     <h1>Payment Methods</h1>
   </div>
   <?php
   $med_id=substr(base64_decode($_GET['med_id']),0,-5);
   $query=mysqli_query($con,"select * from tblprescription  where Prescription_id='$med_id'");
    while($row=mysqli_fetch_array($query))
    {$cons=$row['Consultation'];
     $category=$row['Category'];?>
  <p><b>You have chosen: <br><br> <u>Consultation:</u></b>  <?php echo $cons;?><br><br> <b><u>Category</u></b> <?php echo $category;?><br><br><?php } ?> 
    <?php
   $query=mysqli_query($con,"select * from tblcategory_wise_fees  where category='$category'");
    while($row=mysqli_fetch_array($query))
    {?>
    <b>The fees is</b> <?php echo $row['fees'];?></p>
    <b>ALREADY PAID</b> <?php } ?>
        
</div>
    
</div>
          
    </div>

</div>
<div class="buttons">
<button class="btn btn-gradient gradient3" style="text-align:center; font-size:20px;" onclick="printDiv('pdf','Title')">Print Prescription</button></div>
</body>
<script type="text/javascript">
  var doc = new jsPDF();

function printDiv(divId, title) {

  let mywindow = window.open('', 'PRINT', 'height=650,width=900,top=100,left=150');

  mywindow.document.write('</head><body >');
  mywindow.document.write(document.getElementById(divId).innerHTML);
  mywindow.document.write('</body></html>');

  mywindow.document.close(); 
  mywindow.focus(); 

  mywindow.print();
  mywindow.close();

  return true;
}

</script>
</html>
<?php } ?>