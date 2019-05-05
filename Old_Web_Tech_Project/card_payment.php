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
	<link href="signup_style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<title>DeliciousMenu.com</title>
	
</head>
<body>

		<div id="banner">
		<div id = "navbar" class="toy">
			<nav class="font">
				<a href="index_change.php"><strong>Home </strong></a>
				<a href="login_change.php"><strong>Logout</strong></a>
				<a href="#about_us"><strong>About us!</strong></a>
			</nav>
		</div><br><br><br><br>
		<fieldset id="signup_form" >
			<legend><strong>Card Details</strong></legend>
			<form   method="POST" action="food_being_prepared.php">
		<br>
				<input class="cn"type="text" name="cardnum" value="Card Number" width="300"><br>
				<input id="id1" type="text" name="validthrough" value="Valid Through (MM/YY)" width="250"><input id="id2"type="text" name="cvv" value="CVV" width="50"><br>
				<input class="cn"type="text" name="usn" value="Name On Card" width="200"><br>
				<input type="checkbox" name="secure" checked>Securely save the card for the faster checkout next time.<br><br>
				<input type="submit" name="Submit" value="Submit" onclick="location.href='food_being_prepared.php'">
				<button id="cancel" onclick="index_change.php">Cancel</button>
			</form>
		</fieldset>
		
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


	</div>
</body>
</html>







