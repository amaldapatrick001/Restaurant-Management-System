
<?php
session_start();

if(!isset($_SESSION['email'])){
header("location: login.php"); 
}
?>

<style>
    body,html {
  height: 100%;
 }


#myBtn{
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: green;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}
#myBtn:hover {
  background-color: darkgreen;
  color: white;
}

.bg-4{
  background-color: #2f2f2f;
  color: #ffffff;

}
h1{
    color: #ffffff;

}

footer{
  display: block;
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

<
       
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
                      </header><center><br><br><br>
<h1>Customers Regestered
</h1>
                                <table >
                                    <thead>
                                        <tr>
                                            <th>uid</th>
                                            <th>Name</th>
											<th>email</th>
                                            <th>Phone</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>    
								<?php
                                
require("db.php");
    
                $sql = "select * from user";
                $result = mysqli_query($con, $sql);

                if(mysqli_num_rows($result)>0)
                {
                            
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    echo "<tr>";
                                        
                                        ?>
                                                     
                                              <?php
                                        
                                        echo "<td>";
                                        echo $row["uid"];
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
                                        ?>
                                            
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
