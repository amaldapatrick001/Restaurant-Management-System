<?php
session_start();

if(!isset($_SESSION['email'])){
header("location: login.php"); 
}
?><?php
require("db.php");
session_start();
if(isset($_GET['del'])){
    $aid = $_GET['del'];
    
    $sql = "Delete from admin where aid=$aid";
    
    $query = mysqli_query($con,$sql);
    
    if($query){
        echo "<script type='text/javascript'> alert('Admin Item Is Removed.')</script>";
        echo '<script>window.location="udadmin.php"</script>';
    }
    else{
        echo mysqli_error($con);
    }
}
?>



<style>
    body,html {
  height: 100%;
 }
 h1{
    color: #ffffff;

}



td,th,table{
    
   border: 1px solid; 
    border-color: black;
    background-color:white 
}
</style>
<!DOCTYPE html>
<html>
<head>
      
    <title>Emerald resturant</title>
    
<link rel="stylesheet" href="main1.css">
   

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
               </header><br><br>
    <center><br><br><br>
    <h1>
        Update / Delete Admin Details</h1>
                            <table >
                                    <thead>
                                        <tr>
                                        <th>image</th>
                                            <th>AID</th>
                                            <th>Name</th>
											<th>email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>    
								<?php
    
                $sql = "select * from admin";
                $result = mysqli_query($con, $sql);

                if(mysqli_num_rows($result)>0)
                {
                
                            
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    echo "<tr>";
                                        echo "<td>";
                                        ?>
                                                     
                                            <img src="<?php echo 'imgs/' . $row['image'] ?>" width="150" height="100" alt='Profile pic' >
                                        <?php
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["aid"];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row["fname"];
                                            echo $row["lname"];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row["email"];
                                        echo "</td>";
                                    echo "<td>";
                                            echo $row["phone"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["hname"];
                                        echo $row["city"];
                                        echo $row["district"];
                                        echo $row["state"];
                                        echo $row["pin"];
                                        echo "</td>";
                                            ?>
                                            <td>
                                             <a href="udadmin.php?del=<?php echo $row["aid"];?>">Delete</a></td>
                                            <?php
                                        echo "</td>";
                                    echo "</tr>";
                                }
                            echo "</table>";
                        
                }
                else
                {
                    echo "There is no admin yet.";
                }
                mysqli_close($con);
            ?>                     
        </tbody>
            </table>
                            
    
    
   
</body>
</html>
