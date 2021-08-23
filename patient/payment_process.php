<?php
session_start();
include('includes/dbconnection.php');
defined('SALT') ? null : define('SALT','xxxxxxxxxxxxxxx');

  if (isset($_SESSION['meddbpid'])){

    $inid=$_SESSION['invoice'];
    $cardname= $_POST['cardname'];
    $cardnumber= $_POST['cardnumber'];
    $expdate= $_POST['expdate'];
    $cvv= $_POST['cvv'];
    $cardnumberstr=(string)$cardnumber;

    $sql =mysqli_query($con, "update tblpatient_payment set Cardname = AES_ENCRYPT('$cardname','".SALT."'), Cardnumber = AES_ENCRYPT('$cardnumberstr','".SALT."'), Expdate = AES_ENCRYPT('$expdate','".SALT."'), Cvv = AES_ENCRYPT('$cvv','".SALT."') where Invoice_No ='$inid' ");
     if($sql) {
        echo "<script>alert('Payment done successfully')</script>";
        echo "<script>window.location.href='appointment_print.php'</script>";
     }
     else{
         echo "<script>alert('Unable to placed your order')</script>";
        echo "<script>window.location.href='payment.php'</script>";
     }
    
    }  

    else{

        echo(mysqli_error($con));
        
    }?>