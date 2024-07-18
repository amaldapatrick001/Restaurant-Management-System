<?php
session_start();

if(!isset($_SESSION['email'])){
header("location: login.php"); 
}
?>


<style>
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
        Orders for Delivary Details</h1>
                                <table >
                                    <thead>
                                        <tr>
                                            <th>DID</th>
                                            <th>EMAIL</th>
											<th>NAME</th>
                                            <th>ORDER DATE</th>
                                            <th>DELIVARY DATE</th>
											<th>DELIVARY TIME</th>
                                            <th>ADDRESS</th>
                                            <th>PHONE NO</th>
                                            <th>STATUS</th>
                                            <th>VIEW</th>
                                        </tr>
                                    </thead>
                                    <tbody>    
								<?php
                                
require("db.php");
    
                $sql = "select * from delivary";
                $result = mysqli_query($con, $sql);

                if(mysqli_num_rows($result)>0)
                {
                            
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    echo "<tr>";
                                        
                                        ?>
                                        <?php
                                        
                                        echo "<td>";
                                        echo $row["did"];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row["email"];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row["fname"]." ";
                                            echo $row["lname"];
                                        echo "</td>";
                                        
                                        echo "<td>";
                                        echo $row["o_date"];
                                    echo "</td>";
                                    echo "<td>";
                                        echo $row["d_date"];
                                    echo "</td>";
                                    echo "<td>";
                                        echo $row["d_time"];
                                    echo "</td>";
                                        echo "<td>";
                                        echo $row["hname"]." ";
                                        echo $row["city"]." ";
                                        echo $row["district"]." ";
                                        echo $row["pincode"]. " ";
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["phone1"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["action"];
                                        echo "</td>";
                                         
                                        
                                            ?><td>
                                        <a href="v_cart.php?view=<?php echo $row["email"]. $row["o_date"];?>">Orders</a>
                                        </td>;
                                            
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
                            
    
            </center>
   
</body>
</html>
