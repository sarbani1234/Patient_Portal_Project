<?php
session_start();
include('includes/dbconnection.php');


if (isset($_SESSION["meddbaid"])) {

    $name = $_POST["firstname"];
    $deptname = $_POST['deptname'];

    
    $sql0="SELECT id from `tbldept_wise_dctr`";
    $runquery=mysqli_query($con,$sql0);
    if (mysqli_num_rows($runquery) == 0) {
        echo( mysqli_error($con));
        $id=1;
    }else if (mysqli_num_rows($runquery) > 0) {
        $sql2="SELECT MAX(id) AS max_val from `tbldept_wise_dctr`";
        $runquery1=mysqli_query($con,$sql2);
        $row = mysqli_fetch_array($runquery1);
        $id= $row["max_val"];
        $id=$id+1;
        echo( mysqli_error($con));
    }
   

    $sql =mysqli_query($con, "INSERT INTO `tbldept_wise_dctr` (`Doctor_Name`, `Department_Name`) VALUES ('$name','$deptname')");
     if($sql) {
        echo "<script>alert('The product approve successfully')</script>";
        echo "<script>window.location.href='doctor-approve.php'</script>";
         }
     else{
         echo "<script>alert('Something went wrong')</script>";
        echo "<script>window.location.href='doctor-approve.php'</script>";
     }
    
    }  

    else{

        echo(mysqli_error($con));
        
    }
?>