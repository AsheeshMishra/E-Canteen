 <?php
 	session_start();
 	if (!(isset($_SESSION['uname'])))
 	{
 		echo "<script>location.href='login_change.php'</script>";
 	}
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="index_change_style.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
	<title>PES E-Canteen</title>
	
</head>

	<body>
		<div id="body">
		<!-- the div with id body removed -->
		<!-- code for the navigation bar -->

		<div id="navbar" class="font navbar">
		<nav>
				<a href="index_change.php"><strong>Home </strong></a> <a href="login_change.php"><strong>Logout</strong></a> <a href="#about_us"><strong>About us!</strong></a>
				<select id="nav_to_shops" onchange="location = this.value;"> <!-- when an option is selected, redirect to the value !--> 
							<option class="shop_link" value="#">Choose Your Shop</option>
    						<option class="shop_link" value="./b_block_shop1.php">Food Court</option> <!-- change values to what is required !-->
    						<option class="shop_link" value="./b_block_shop2.php">Food Point</option>
    						<option class="shop_link" value="./food_point.php">B-Block Food Point</option>
    						<option class="shop_link" value="./ramesh_canteen.php">Ramesh Canteen</option>
						</select>
			</nav>
		</div>		<br><br><br><br>
		
			
	
	<div id="content">
			
		<header id="website_name">
			PES E-Canteen
		</header>

			
			<div class="container">
			        <h3 class="court_info">1.B-Block</h3>
					<a href="changed_b_block.php"><img class="food_img"src="b-block.jpg"></a><br>
			        <h3 class="court_info">2.Pi-R-Cube</h3>
					<a href="pi_r_cube.php"><img class="food_img"  class="food_img" src="pi_r_cube.jpg"></a><br>
			        <h3 class="court_info">3.Parking-Lot</h3>
					<a href="parking_lot.php"><img  class="food_img" src="Parking_lot_img.jpg"></a><br>
					
			</div>
	</div>



		<div id="about_us">
			<strong>About Us</strong>
				<div id="some_data">
					<div class="some_thing">
						<strong>Address</strong>:Outer Ring Rd, Banashankari 3rd Stage, Banashankari, Bengaluru, Karnataka 560085
					</div>
					<div class="some_thing">
						<strong>Campus</strong>:Urban
					</div>	
					<div class="some_thing">
						<strong>Terms Of Use.</strong>
						
					</div>
					<div class="some_thing">
						<strong>License</strong>:All rights reserved.
					</div>
				</div>
		</div>
	</div>
		<div id="social_media">
			<ul>
			  <li><a href="#index_change.php"><img src="facebook.jpg" height="30" width="30"></a></li>
			  <li><a href="#index_change.php"><img src="pintrest.jpg" height="30" width="30"></a></li>
			  <li><a href="#index_change.php"><img src="instagram.jpg" height="30" width="30"></a></li>
			  <li><a href="#index_change.php"><img src="google+.jpg" height="30" width="30"></a></li>
			  <li><a href="#index_change.php"><img src="twitter.jpg" height="30" width="30"></a></li>
			  <li><a href="#index_change.php"><img src="whatsapp.jpg" height="30" width="30"></a></li>
			</ul>
		</div>
</body>
</html>