<?php
session_start();
include('includes/dbconnection.php');

if (isset($_SESSION["meddbdid"])) {

    $app_day=$_POST['appday'];
    $app_date=$_POST['appdate'];
    $category=$_POST['cat'];
    $clinic=$_POST['clinic'];
    $consultation=$_POST['cons'];
    $deptname=$_POST['dept'];
    $name = $_POST["pname"];

    $sql0="SELECT Prescription_id from `tblprescription`";
    $runquery=mysqli_query($con,$sql0);
    if (mysqli_num_rows($runquery) == 0) {
        echo( mysqli_error($con));
        $Prescription_id=1;
    }else if (mysqli_num_rows($runquery) > 0) {
        $sql2="SELECT MAX(Prescription_id) AS max_val from `tblprescription`";
        $runquery1=mysqli_query($con,$sql2);
        $row = mysqli_fetch_array($runquery1);
        $Prescription_id= $row["max_val"];
        $Prescription_id=$Prescription_id+1;
        echo( mysqli_error($con));
    }?>

    <?php
    if(isset($_SESSION["meddbdid"])){
        $ret=mysqli_query($con,"select FullName from tbldocapprove where ID='$_SESSION[meddbdid]'");
            while($row=mysqli_fetch_array($ret))
            {$dname=$row['FullName']; }}?>

    <?php
    $sql =mysqli_query($con, "insert into tblprescription (Prescription_id, Doctor_Name, Patient_Name, Department, Consultation, Category, Clinic, Appointment_Date, Appointment_Day) values('$Prescription_id', '$dname', '$name', '$deptname', '$consultation', '$category', '$clinic', '$app_date', '$app_day')");
    if ($sql) {
        // code...
        echo "<script>alert('You have viewed the appointment')</script>";
        echo "<script>window.location.href='view_all_appointment.php'</script>";
    }
    else {
        echo "<script>alert('Something went wrong!')</script>";
        echo "<script>window.location.href='view_all_appointment.php'</script>";
    }
    ?>

<?php } ?>