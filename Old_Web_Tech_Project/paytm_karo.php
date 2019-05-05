<!DOCTYPE html>
<html>
<head>
	<link href="payment_option.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<title>DeliciousMenu.com</title>
	
</head>
<body onload="setTimeout(function(){location.href='food_being_prepared.php';},3000)">

		<div id="body">
			<div id = "navbar" class="navbar">
					<nav class="font">
						<a href="index_change.php"><strong>Home</strong></a>
						<a href="login_change.php"><strong>Login</strong></a>
						<a href="#about_us"><strong>About us!</strong></a>
						<select id="nav_to_shops" onchange="location = this.value;"> <!-- when an option is selected, redirect to the value !--> 
							<option class="shop_link" value="#">Choose Your Shop</option>
    						<option class="shop_link" value="./b_block_shop1.php">Food Court</option> <!-- change values to what is required !-->
    						<option class="shop_link" value="./b_block_shop2.php">Food Point</option>
    						<option class="shop_link" value="./food_point.php">B-Block Food Point</option>
    						<option class="shop_link" value="./ramesh_canteen.php">Ramesh Canteen</option>
						</select>
					</nav>
			</div>
			
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<div id='selected_image'>
				<section>
				<div style="text-align: center;color:rgb(61,61,61);font-size: 35px;">
			Please the scan the QR Code.<br>
			To pay PES Canteen.
		</div>
			</section>
			<img src="qrcode.jfif" height="300" width="500">


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