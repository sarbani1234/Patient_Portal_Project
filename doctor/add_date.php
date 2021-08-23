<?php
session_start();

include('includes/dbconnection.php');

if (strlen($_SESSION['meddbdid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
{
$dept=$_POST['department_name']; 
$name=$_POST['doctorname'];   
$appdate=$_POST['dates'];
$appday = date("l", strtotime($appdate));
$query=mysqli_query($con,"insert into tbldate(DoctorName,DepartmentName,Date,Day) values('$name','$dept','$appdate','$appday')"); 
if($query){
echo "<script>alert('Date added successfully');</script>";   
echo "<script>window.location.href='add_date.php'</script>";
} else{
echo "<script>alert('Something went wrong. Please try again.');</script>";   
echo "<script>window.location.href='add_date.php'</script>";    
}
}

?>
    <!DOCTYPE html>
    <html>
    <head>
    	<title>Doctor: Add Dates</title>
    </head>
    <body>
    	<?php include_once('includes/header.php');
        include_once('includes/sidebar.php');
		include_once('includes/footer.php');
		?>
        <h1>Add Dates</h1>
		<form class="needs-validation" method="post" novalidate>

		<label style="color: black"><b>Your name: </b></label>
            <?php
            if(isset($_SESSION["meddbdid"])){
            $ret=mysqli_query($con,"select FullName from tbldocapprove where ID='$_SESSION[meddbdid]'");
            while($row=mysqli_fetch_array($ret))
            {?>
            <input type="text" placeholder="Your name" name="doctorname" value="<?php echo $row['FullName'];?>" required autocomplete="off">
            <?php } } ?> <br><br>

        <label style="color: black"><b>Dapartment Name: </b></label>
            <?php
            if(isset($_SESSION["meddbdid"])){
            $ret=mysqli_query($con,"select Department_name from tbldocapprove where ID='$_SESSION[meddbdid]'");
            while($row=mysqli_fetch_array($ret))
            {?>
            <input type="text" size=60 placeholder="Department name" name="department_name" value="<?php echo $row['Department_name'];?>" required autocomplete="off">
            <?php } } ?> <br><br>

        <label style="color: black"><b>Date: </b></label>
            <input type="date" id="dates" name="dates"><br><br>


			<button type="submit" name="submit">Add Date</button>

    </body>
    </html>
    <?php } ?>