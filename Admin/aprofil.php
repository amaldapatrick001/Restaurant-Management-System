<?php
session_start();

if(!isset($_SESSION['email'])){
header("location: login.php"); 
}

?>
<html>
<head>
<link rel="stylesheet" href="l,s.css"><link rel="stylesheet" href="main1.css">
<style>
.star{
	color: blue;
    background:white;
    padding: 10px;
}
</style>
</head>
<body><header>
            <img src="logo.jpeg" width="10%" height="20%" >
            <ul class="nav">
                 <li><a href="aprofil.php" >AProfile</a></li>
                 <li><a href="apanel.php" >APanel</a>
                 <li><a href="updatedatabase.php" >Updation</a></li>
                 <li style="float:right"><a href="login.html" class="active">Login</a></li>
                 <li style="float:right"><a href="logout.php" class="active">Logout</a></li>
                 
             </ul>
            </header>
    <?php
    require("db.php");
    
   $email=$_SESSION['email'];
$sql = "select * from admin where aid =1";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($query);
        ?>
           
    
            <div class="center"> 
                <br><br>
                <?php
                echo "<h1>"."Welcome "."<i>".$row["fname"]." ".$row["lname"]."</i>"."</h1>";
            ?>
                <center><br><br>
            <img src="<?php echo 'imgs/' . $row['image'] ?>" width="200" height="220" alt='Profile pic' class="border border-dark img-thumbnail"><br /><br />
            <div class="star">
            <?php
                echo $row["fname"]." ".$row["lname"]."</b>"."<br />";
                echo $row["phone"]."<br />";
                echo $row["hname"]."(H)","<br />";
                echo $row["city"]."<br />";
                echo $row["district"]."<br />";
                echo $row["pin"]."<br />";
                echo "<br />";
            ?>
            
            <form action="apanel.php">
            <input type="submit" value="Admin Panel" name="submit">
            </form>
            </div></center>
        </div>
            </body>
</html>