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
$email = $_SESSION["email"];
$no_chair=$_POST["no_chair"];
$bdate = $_POST["bdate"];
$btime = $_POST["btime"];
$phone1 = $_POST["phone1"];

$query="INSERT INTO `reservation`(`email`, `fname`,`lname`,`no_chair`,`phone1`, `btime`, `bdate`, `r_action`) VALUES ('$email','$fname','$lname','$no_chair','$phone1','$btime','$bdate','Reserved')";

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
        <style>
           
        </style>
    <body>
        <div class="container">
            <h1>Reservation details</h1>
            <form action="reservation.php" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">FULL NAME:</span>
                        <input type="text" placeholder="Fname" name = "fname" required>
                    </div>
                    <div class="input-box"><span><br></span>
                        <input type="text" placeholder="Lname" name = "lname" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Numbers:</span>
                        <input type="number" placeholder="Phone Number1" name = "phone1" required>
                    </div>
                    <div class="input-box">
                        <span class="details"> Number of chairs:</span>
                        <input type="number" placeholder="Chair no" name = "no_chair" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Reserved Date:</span>
                        <input type="date" placeholder="Reserved Date" name = "bdate" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Reserved Time:</span>
                        <input type="time" placeholder="Reserved Time" name = "btime" required>
                    </div>
                   
                 <div class="log">Back to <a href="cart.html">Cart</a></div>
                <div class="button"><center>
                    <input type="submit"  value="Submit" name="submit"></center>
                </div>

               
                <div class="log">Back to <a href="homes.html">HOME</a></div>
          </form>
        </div>
    </body>
</html>


