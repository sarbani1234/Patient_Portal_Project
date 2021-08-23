<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['meddbpid']==0)) {
  header('location:logout.php');
  } else{

if(!empty($_GET["action"])) {
switch($_GET["action"]) {


    case "add":
        if(!empty($_POST["quantity"])) {
            $pid=$_GET["aid"];
            $result=mysqli_query($con,"select * from tbldate where ID='$aid'");
              while($productByCode=mysqli_fetch_array($result)){
            $itemArray = array($productByCode["ID"]=>array('dept'=>$productByCode["DepartmentName"], 'name'=>$productByCode["DoctorName"], 'appdate'=>$productByCode["Date"], 'appday'=>$_POST["Day"], 'code'=>$productByCode["ID"]));
            if(!empty($_SESSION["cart_item"])) {
                if(in_array($productByCode["ID"],array_keys($_SESSION["cart_item"]))) {
                    foreach($_SESSION["cart_item"] as $k => $v) {
                            if($productByCode["ID"] == $k) {
                                if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                                    $_SESSION["cart_item"][$k]["quantity"] = 0;
                                }
                                $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                            }
                    }
                } else {
                    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                }
            }  else {
                $_SESSION["cart_item"] = $itemArray;
            }
        }
    
                echo "<script>alert('Product has been added to the cart! Go to cart!!')</script>";
        echo "<script>window.location.href='dashboard.php'</script>";
    }

    break;

    
    
}
}



?>
<!DOCTYPE html>
<html lang="xxx">

<head>
   
    <title>Search Product</title>
  
</head>

<body>
    
    
    

<?php include_once('includes/header.php');
include_once('includes/footer.php');
?>
       


       
           
<li class="breadcrumb-item"><a href="#">Search</a></li>
<li class="breadcrumb-item active" aria-current="page">appointment </li>
               
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span>Search appointment</h4>
                </div>
               


<form class="needs-validation" method="post" novalidate>
                                       
<div class="form-row">
<div class="col-md-6 mb-10">
<label for="validationCustom03">Product Name</label>
<input type="text" class="form-control" id="validationCustom03" placeholder="Product Name" name="productname" required autocomplete="off">
<div class="invalid-feedback">Please provide a valid product name.</div>
</div>
</div>

                                 
<button class="btn btn-primary" type="submit" name="search">search</button>
</form>


<?php if(isset($_POST['search'])){?>
 <section class="hk-sec-wrapper">
     
                            
                                        <table id="datable_1" class="table table-hover w-100 display pb-30" border="1">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Category</th>
                                                    <th>ProductName</th>
                                                    <th>ProductQuantity</th>
                                                    <th>Pricing/Kg</th>
                                                    <th>Quantity</th>
                                                    <th>Clinic</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
$pname=$_POST['departmentname'];
$query=mysqli_query($con,"select * from tbldate where DepartmentName like '%$dept%'");
$num=mysqli_num_rows($query);
if($num>0){
$cnt=1;
while($row=mysqli_fetch_array($query))
{    
?>
<form method="post" action="search_app.php?action=add&pid=<?php echo $row["ID"]; ?>">                                                  
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['DepartmentName'];?></td>
<td><?php echo $row['DoctorName'];?></td>
<td><?php echo $row['Date'];?></td>
<td><?php echo $row['Day'];?></td>
<td><input type="text" class="product-quantity" name="quantity" value="1" size="2" /></td>
<td><select><option value="alpha">alpha clinic</option>
<option value="private">private clinic</option>
<option value="opd">OPD clinic</option>
</select>
</td>

<td>
<input type="submit" value="Add to Cart" class="btnAddAction" />
</td>
</tr>
</form>
<?php 
$cnt++;
}} else { 
   echo "<script>alert('No record found against this search!')</script>";
    }} ?>
                                                
                                            </tbody>
                                        </table>
                               
</section>




</body>
</html>
<?php } ?>