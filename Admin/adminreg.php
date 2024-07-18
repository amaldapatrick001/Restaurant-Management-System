<?php
require("db.php");
if(isset($_POST["submit"]))
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    
    $hname = $_POST["hname"];
    $city = $_POST["city"];
    $district = $_POST["district"];
    $state = $_POST["state"];
    $pin = $_POST["pin"];
    $password = $_POST["password"];
    $con_password=$_POST["con_password"];


    $imagename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
     move_uploaded_file($tempname, "imgs/$imagename");
     
$query="insert into admin values ('','$fname','$lname','$email',$phone,'$hname','$city','$district','$state',$pin,'$password','$imagename')";

$result = mysqli_query($con,$query);
if($result)
{
    echo "<script>alert('New admin have been Registered Successfully')</script>";

    echo "<script>window.open('updatedatabase.php','_self')</script>";
}
else
{
    die(mysqli_connect_error());
}

mysqli_close($con);
}
?>