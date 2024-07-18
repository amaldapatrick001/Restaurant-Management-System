<?php
session_start();
require 'db.php';
if(!isset($_SESSION['email'])){
header("login.php"); 
}
?>

   

<?php
require("db.php");
if(isset($_POST["submit"]))
{
$fname = $_POST["fname"];
$lname = $_POST["lname"]; 
$email=$_SESSION['email'];
$d_time = $_POST["d_time"];
$d_date = $_POST["d_date"];
$hname = $_POST["hname"];
$city = $_POST["city"];
$district=$_POST["district"];
$pincode = $_POST["pincode"];
$phone1 = $_POST["phone1"];



$query="INSERT INTO `delivary`( `email`, `fname`, `lname`, `d_date`, `d_time`, `hname`, `city`, `district`, `pincode`, `phone1`, `action`) VALUES('$email','$fname','$lname','$d_date','$d_time','$hname','$city','$district','$pincode',$phone1,'Ordered')";

$result = mysqli_query($con,$query);
if($result)
{
    echo "<script>alert('You have been Reserved Successfully')</script>";

    echo "<script>window.open('homes.html','_self')</script>";
}

}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration </title>
        <link rel="stylesheet" href="reg.css">
        <script src="https://kit.fontawesome.com/ee1af068c0.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Delivery Details</h1>
            <form action="delivary.php" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">FULL NAME:</span>
                        <input type="text" placeholder="Fname" name = "fname" required>
                    </div>
                    <div class="input-box"><span><br></span>
                        <input type="text" placeholder="Lname" name = "lname" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number:</span>
                        <input type="number" placeholder="Phone Number" name = "phone1" required>
                    </div>
                    <div class="input-box">
</div>
                    <div class="input-box">
                        <span class="details">Delivary Date:</span>
                        <input type="date" placeholder="Date" name = "d_date" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Delivary Time:</span>
                        <input type="time" placeholder="Time" name = "d_time" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Address</span>
                        <input type="text" placeholder="House name" name = "hname" required>
                    </div>
                    <div class="input-box">
                        
                        <span class="details"><br> </span>
                        <input type="text" placeholder="City" name = "city" required>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="District" name = "district" required>
                    </div>
                    <div class="input-box">
                        <input type="number" placeholder="Pin code" name = "pincode" required>
                    </div>
                </div>
                
                <div class="button">
                    <input type="submit"  value="Submit" name="submit">
                </div>
                
                <div class="log">Back to <a href="cart.php">Cart</a></div>
                <div class="log">Back to <a href="homes.html">HOME</a></div>
            </form>
        </div>
    </body>
</html>


