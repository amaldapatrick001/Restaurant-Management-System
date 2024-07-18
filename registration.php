<?php
require("db.php");
if(isset($_POST["submit"]))
{
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];
$con_password=$_POST["con_password"];

if($password!=$con_password){
    echo '<script>alert("Password should be similar")</script>';
    echo "<script>window.open('registration.html','_self')</script>";
    }
    


$query="insert into user values('','$fname','$lname','$email',$phone,'$password')";

$result = mysqli_query($con,$query);
if($result)
{
    echo "<script>alert('You have been Registered Successfully')</script>";

    echo "<script>window.open('login.php','_self')</script>";
}

}
?>