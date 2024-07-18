<?php
session_start();

if(!isset($_SESSION['email'])){
header("location: login.php"); 
}
?><?php 
  include('db.php');
?>
<html>
    <head>
    <link rel="stylesheet" href="main1.css">
    <link rel="stylesheet" href="apanel.css">
    <style>
        .a {
display: flex;
justify-content: center;
align-items: center;
height: 400px;
width:500px;
border: 3px solid green;
}

        header{
            /* align-self: baseline; */
            width: 100%;
        }
    </style>
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
            </header><br><br><center>
    <div class="center"> 
        <div class="a">
        
        
            <div class="buts">
            <h2 style="float:right">Update_</h2>
                <button><a href="addfoods.php">Add food</a></button>
                <button><a href="atable.php">Add table</a></button>
                <button><a href="empreg.php">Add Staff</a></button>
                <button><a href="adminreg.html">Add admin</a></button>
                <!-- <button><a href="reservation_u.php">Reservation status</a></button> -->
                <button><a href="logout.php">Log Out</a></button>
            </div>    
            <div class="but">
            <h2 style="float:left">_Database</h2>
                <button><a href="udfood.php">Update or Delete food</a></button>
                <button><a href="udtable.php">Update or Delete table</a></button>
                <button><a href="udemployee.php">Update or Delete Staff</a></button>
                <button><a href="udadmin.php">Update or Delete Admin</a></button>
                <!-- <button><a href="order_u.php">Delevary status</a></button> -->
                <button><a href="apanel.php"> Back To Admin Panel</a></button>
            </div>   
        </div>  
            
    </div>
    </body>
</html>