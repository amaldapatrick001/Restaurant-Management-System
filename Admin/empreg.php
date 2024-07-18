<?php
session_start();

if(!isset($_SESSION['email'])){
header("location: login.php"); 
}
?><!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title> Registration </title>
        <link rel="stylesheet" href="reg.css">
    </head>
    <body>
        <div class="container">
            <h1>Employee Registration</h1>
            <form action="empreg.php" method="post" enctype="multipart/form-data">
                <div class="user-details">
                    <div class="input-box">
                        <input type="text" placeholder="First name" name = "fname" required>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Last name" name = "lname" required>
                    </div>
                    <div class="input-box">
                        <input type="email" placeholder="E-mail" name = "email" required>
                    </div>
                    <div class="input-box">
                        <input type="number" placeholder="Phone Number" name = "phone" required>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="House name" name = "hname" required>
                    </div>
                    <div class="input-box">
                        
                        <input type="text" placeholder="City" name = "city" required>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="District" name = "district" required>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="State" name = "state" required>
                    </div>
                    <div class="input-box">
                        <input type="number" placeholder="Pin code" name = "pin" required>
                    </div>
                    <div class="input-box">
                     </div>
                    <div class="input-box">
                        <input type="number" placeholder="Salary" name = "salary" required>
                    </div>
                    <div class="input-box">
                    <span class="details">Job:</span>
                <select name="job" required>
                <option value=" ">  </option>
                <option value="Supplier">Supplier</option>
                <option value="Manager">Manager</option>
                <option value="Cheff">Cheff</option>
                <option value="Delevary">Delevary</option>
                    </div>
                    </div><br>
                    <div class="input-box">
                        <input value="date" type="date" placeholder="Date of join" name ="doj" required>
                    </div>
                    <div class="input-box">
                        <input  type="password" placeholder="Password" name ="password" required>
                    </div>
                    <div class="input-box">
                        <input type="file" name="image" required placeholder="Select image"><br>
                   </div>
                  
                </div>
                
                <div class="button">
                    <input type="submit"  value="Register" name="submit">
                </div>
                <div class="log"><div class="log">Back to <a href="apanel.php">Admin Panel</a>  or  <a href="updatedatabase.php">Update Panel</a> </div><br>
</a>
            </form>
        </div>
    </body>
</html>



<?php
require("db.php");
if(isset($_POST['submit'])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $hname = $_POST["hname"];
    $city = $_POST["city"];
    $district = $_POST["district"];
    $state = $_POST["state"];
    $pin = $_POST["pin"];
    $salary = $_POST["salary"];
    $job = $_POST["job"];
    $doj = $_POST["doj"];
    $password = $_POST["password"];

    $imagename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
     move_uploaded_file($tempname, "imgs/$imagename");
     
$query="INSERT INTO `employee`(`eid`, `fname`, `lname`, `phone`, `email`, `hname`, `city`, `district`, `state`, `pin`, `salary`, `job`, `doj`, `password`, `image`) VALUES  ('','$fname','$lname',$phone,'$email','$hname','$city','$district','$state',$pin,'$salary','$job',' $doj','$password','$imagename')";

$result = mysqli_query($con,$query);
if($result)
{
    echo "<script>alert('New Employee have been Added Successfully')</script>";

    echo "<script>window.open('updatedatabase.php','_self')</script>";
}
else
{
    die(mysqli_connect_error());
}

mysqli_close($con);
}
?>
