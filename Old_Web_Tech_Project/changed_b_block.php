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
	<link href="block_style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<title>PES E-Canteen</title>
	
</head>
<body>
		<div id="body">
			<div id = "navbar" class="navbar">
					<nav class="font">
						<a href="index_change.php"><strong>Home</strong></a>
						<a href="login_change.php"><strong>Logout </strong></a>
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
			<br><br><br><br><br><br><br><br><br><br><br><br>
			<div id='heading'>
			<h2><strong>B-Block</strong></h2><br>
			Click on the shop you want to order from!
		</div>
		

		<br>

		<div style="text-align: center;">
		<div >
			<h1>Food Point</h1>
					<a href="food_point.php"><img class="shop_image"  style="transform: rotate(90deg);" src="Food_point_img.jpg" alt="shop1" height="400" width="400"></a>
					
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
<!-- <!DOCTYPE html>
<html>
<head>
	<link href="block_style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<title>DeliciousMenu.com</title>
	
</head>
<body>
		<div id="body">
			<div id = "navbar" class="navbar">
					<nav class="font">
						<a href="index_change.php"><strong>Home</strong></a>
						<a href="login_change.php"><strong>Logout </strong></a>
						<a href="#about_us"><strong>About us!</strong></a>
					</nav>
			</div>
			<br><br><br><br><br><br><br><br>
			<div id='heading'>
			<h2><strong>B-Block</strong></h2><br>
			Click on the shop you want to order from!
		</div>
		

		<br>

		<table>
			<tr>
				<td><pre>                           </pre></td>
				<td class="shop_image">
						<h4>shop</h4>
					<a href="food_point.html"><img src="food1.jpg" alt="shop1"></a>
					<p class="shop_text">
					text about shop
					</p>
				</td>
			</tr>
		</table>
		<br>


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
			  <li><a href="#index_change.html"><img src="facebook.jpg" height="30" width="30"></a></li>
			  <li><a href="#index_change.html"><img src="pintrest.jpg" height="30" width="30"></a></li>
			  <li><a href="#index_change.html"><img src="instagram.jpg" height="30" width="30"></a></li>
			  <li><a href="#index_change.html"><img src="google+.jpg" height="30" width="30"></a></li>
			  <li><a href="#index_change.html"><img src="twitter.jpg" height="30" width="30"></a></li>
			  <li><a href="#index_change.html"><img src="whatsapp.jpg" height="30" width="30"></a></li>
			</ul>
		</div>
</body>
</html> -->