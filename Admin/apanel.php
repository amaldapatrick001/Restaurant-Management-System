<?php
session_start();

if(!isset($_SESSION['email'])){
header("location: login.php"); 
}
?>
<?php 
  include('db.php');
?>
<html>
    <head>
    <link rel="stylesheet" href="main1.css">
    <link rel="stylesheet" href="apanel.css"> 
    <style>
        header{
            /* align-self: baseline; */
            width: 100%;
        }
        .a {
display: flex;
justify-content: center;
align-items: center;
height: 400px;
width:500px;
border: 3px solid green;
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
                 <h2 style="float:right">Admin_</h2>
                <button><a href="order.php">Order Details</a></button>
                <button><a href="reservation.php">Reservation Details</a></button>
                <button><a href="report.php">View Report</a></button>
                <button><a href="vmenu.php">View Food List</a></button>
                <button><a href="vtable.php">View Table List</a></button>
            </div>    
            <div class="but">
            <h2 style="float:left">_Panel</h2>
                <button><a href="updatedatabase.php">Update Database</a></button>
                <button><a href="view_cust.php">View Customer List</a></button>
                <button><a href="vemployee.php">View Staff List</a></button>
                <button><a href="vadmin.php">View Admin List</a></button>
                <button><a href="aprofil.php">Admin Profil</a></button>
            </div>   
        </div>  
            
    </div></center>
    </body>
</html>