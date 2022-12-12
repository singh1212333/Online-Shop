<!DOCTYPE>
<?php 

include("functions/functions.php");
?>
<html>

<head>

	<title>
	       Online Retail Shop
	</title>
	
	<link rel="stylesheet" href="styles/style.css" media="all" />
	
</head>

<body>
	<!--Main Start-->
	<div class="main_wrapper">
	
		
		<!--Menu Start-->
		<div class="menu_wrapper">
			
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="all_products.php">All product</a></li>
				<li><a href="customer/my_account.php">My account</a></li>
				<li><a href="customer_register.php">Sign Up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			
			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search a Product"/ > 
					<input type="submit" name="search" value="Search" />
				</form>
			
			</div>
		
		</div>
		<!--Menu End-->
	
		<!--Content Start-->
		<div class="content_wrapper">
		
			<div id="side"> 
				
				<div id="side_title">
					Category
				</div>
				
				<div id="category_title">
				
					<?php getCategory(); ?>
					
				</div>
				
				<div id="side_title">
					Brand
				</div>
				
				<div id="category_title">
					
					<?php getBrand(); ?>
					
				</div>
			
			</div>
			
			<div class="shopping_cart"> 
			<h2>My Shopping Cart   Total Items: <?php total_items(); ?> Total Price: <?php total_price(); ?></h2> 
			</div>
			
			<div class="product_wrapper"> 
			<?php getDetail(); ?>
			</div>
		</div>
		<!--Content End-->
		
		<!--Foot Start-->		
		<div class="foot_wrapper">
			<h3 style="text-align:center; ">&copy; 2022 by Ravishankar Bhardwaj Singh</h3>
		</div>
		<!--Foot End---->
	
	</div>
	<!--Main End-->
	
	
</body>

</html>
