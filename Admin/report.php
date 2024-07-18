<style> 
   h1{
       color:  #ffffff;
   }
   div{
    
    background-color:rgb(255, 255, 255);
    width: 30%; 
    text-align: center;
    padding: 14px 16px;
    
  font-size: 18px;
   }
</style>  <?php
session_start();

if(!isset($_SESSION['email'])){
header("location: login.php"); 
}
?> <html> <head>
    <link rel="stylesheet" href="main1.css">
	<link rel="stylesheet" href="food.css">



            <title>Emerald resturant</title>
            

   </head>
   <body><header>
               <img src="logo.jpeg" width="10%" height="20%" >
               <ul class="nav">
                    <li><a href="aprofil.php" >Aprofil</a></li>
                    <li><a href="apanel.php" >Apanel</a>
                    <li><a href="updatedatabase.php" >UpdateDatabase</a></li>
                    <li style="float:right"><a href="login.html" class="active">Login</a></li>
                    <li style="float:right"><a href="logout.php" class="active">Logout</a></li>
                    
                </ul>
               </header><br><br><br><?php
session_start();

if(!isset($_SESSION['email'])){
header("location: login.php"); 
}

?><center><br><h1>
    REPORT</h1><br>
<div style=  padding: 50;  margin: 20; ">
<?php
require 'db.php';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql1="SELECT * FROM menus ";

if ($result=mysqli_query($con,$sql1))
  {
  // Return the number of fields in result set
  $fieldcount1=mysqli_num_fields($result);
  printf("Total number of food items: %d\n",$fieldcount1);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>
<br>


<?php
require 'db.php';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql2="SELECT * FROM `tables` ";

if ($result=mysqli_query($con,$sql2))
  {
  // Return the number of fields in result set
  $fieldcount2=mysqli_num_fields($result);
  printf("Total number of table style: %d\n",$fieldcount2);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>
<br>


<?php
require 'db.php';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql3="SELECT * FROM user ";

if ($result=mysqli_query($con,$sql3))
  {
  // Return the number of fields in result set
  $fieldcount3=mysqli_num_fields($result);
  printf("Total number of Customers: %d\n",$fieldcount3);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>
<br>


<?php
require 'db.php';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql4="SELECT * FROM employee ";

if ($result=mysqli_query($con,$sql4))
  {
  // Return the number of fields in result set
  $fieldcount4=mysqli_num_fields($result);
  printf("Total number of Employees: %d\n",$fieldcount4);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>
<br>


<?php
require 'db.php';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql5="SELECT * FROM admin ";

if ($result=mysqli_query($con,$sql5))
  {
  // Return the number of fields in result set
  $fieldcount5=mysqli_num_fields($result);
  printf("Total number of Admins: %d\n",$fieldcount5);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>
<br>


<?php
require 'db.php';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql6="SELECT * FROM delivary ";

if ($result=mysqli_query($con,$sql6))
  {
  // Return the number of fields in result set
  $fieldcount6=mysqli_num_fields($result);
  printf("Total number of delivary: %d\n",$fieldcount6);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>
<br>


<?php
require 'db.php';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql7="SELECT * FROM reservation ";

if ($result=mysqli_query($con,$sql7))
  {
  // Return the number of fields in result set
  $fieldcount7=mysqli_num_fields($result);
  printf("Total number of reservations: %d\n",$fieldcount7);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?></div></center>
</body></html>