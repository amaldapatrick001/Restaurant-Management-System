<html>
    <head>
    <link rel="stylesheet" href="main1.css">
	<link rel="stylesheet" href="food.css">
</head>


<body>
	
        <header>
            <img src="logo.jpeg" width="10%" height="20%" >
            <ul class="nav">
                 <li><a href="homes.html">Home</a></li>
                 <li><a href="about.html" >About</a></li>
                 <li><a href="gallery.html" >Gallery</a>
                 <li><a href="food_view.php" >Menu</a></li>
                 <li><a href="table_view.php" >Table</a></li>
                 <li style="float:right"><a href="login.html" class="active">Login</a></li>
                 
                 <li style="float:right"><a href="" >My Cart</a></li>
             </ul>
            </header>

			

	


<form  method="POST" action="food_view.php" enctype="multipart/form-data">
            
<div class="side">

<button >Starters</button>
<button >Soups</button>
<button>Deserts</button>
<button>Salad</button>
<button>Rice_&_Biriyani</button>
<button>Bread</button>
<button>Non-veg</button>
<button>Veg</button>
<button>Tantoori_&_Tawan</button>
<button>Pizza</button>
<button>Burger</button>
<button>Sandwich</button>
<button>Icecreams</button>
<button>Shake</button>
<button>Cool_Drinks</button>
<button>Hot_Drinks</button>

<button>Dessert</button>
<button>Fruit_Salad</button>


</div>




<div class="fooditems"> <center><h1><br>Menu</h1></center><br>
			<?php
			
require("db.php");
	            $query = "SELECT * FROM menus WHERE cid in (SELECT cid FROM catogary where cname='Soups') ORDER BY pname ASC";
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
	                                <h3 class="text-info"><?php echo $row["pname"]; ?></h3>
	                            </div><?php echo $row["types"]; ?>
								  
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