<html>
    <head>
    <link rel="stylesheet" href="main1.css">
    <style>
        h1{
            color: while;
        }<style>
    body,html {
  height: 100%;
 }

body {
  padding-top: 50px;


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
    <link rel="stylesheet" href="main1.css">

    </style>
</head>


<body>
	
        <header>
            <img src="logo.jpeg" width="10%" height="20%" >
            <ul class="nav">
                 <li><a href="homes.html">Home</a></li>
                 <li><a href="about.html" >About</a></li>
                 <li><a href="gallery.html" >Gallery</a>
                 <li><a href="food_view.php" >Menu</a></li>
                 <li><a href="" >Table</a></li>
                 <li style="float:right"><a href="login.html" class="active">Login</a></li>
                 
                 <li style="float:right"><a href="" >My Cart</a></li>
             </ul>
            </header>

<center><h1 style="color: white" >Table</h1></center><br>
<div class="fooditems"> 
			<?php
require("db.php");
	            $query = "SELECT * FROM tables  ORDER BY tname ASC";
	            $result = mysqli_query($con,$query);
	            if(mysqli_num_rows($result) > 0) {

	                while ($row = mysqli_fetch_array($result)) {

	                    ?>
	                    <div style="float: left; width: 30%;  padding: 20;  margin: 20; background-color:white;">

                            <div class="item"><center>
                            	<div class="foodpic"><br>
	                                <img src="<?php echo 'imgs/' . $row['image'] ?>" width="300" height="200" alt='Food pic' class="img-responsive"><br /><br />
	                            </div>
	                            <div class="description">
	                                <h3 class="text-info"><?php echo $row["tname"]; ?></h3>
                    </div>
	                            <div class="pricetag">
	                                <h4 class="text-danger">Rs. <?php echo $row["price"]; ?></h4>
	                            </div> 

					<div>
					<button>Add To Cart</button>
					</div>
					</center>            
                            </div>
	                        
	                    </div>
	                    
	                    <?php
	                }
	                
	            }
	        ?>
            </body>
            </html>