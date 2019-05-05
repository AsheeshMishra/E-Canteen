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
	<link href="payment_style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<title>DeliciousMenu.com</title>
	
</head>
<body>

		<div id="body">
			<div id = "navbar" class="navbar">
					<nav class="font">
						<a href="index_change.php"><strong>Home</strong></a>
						<a href="login_change.php"><strong>Logout</strong></a>
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
			The Payment Page.
			<p>The items ordered are: </p>
		</div>
			</section>
			
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



		<script type="text/javascript">
			var TotalPrice=0;

			for (var i = 0; i < sessionStorage.length-2; i++)
			{
			    //if(sessionStorage.getItem(sessionStorage.key(i)=='uname')) continue;
			    var img=document.createElement('img');
			    //get image for each type of item stored
			    //spilt the string and get the name of each image
			    //create an image element , with this source and append it to the document body.
			    img.src=sessionStorage.getItem(sessionStorage.key(i)).split(',')[3];
			    var div=document.getElementById('selected_image');
			    div.appendChild(img);
			    var para=document.createElement('p');
			    para.setAttribute('class','para_style');
			    var t=document.createTextNode('Price:₹ '+sessionStorage.getItem(sessionStorage.key(i)).split(',')[2] + ' x '+sessionStorage.getItem(sessionStorage.key(i)).split(',')[1]);
			    para.appendChild(t);
			    div.appendChild(para);
			    TotalPrice=TotalPrice+Number(sessionStorage.getItem(sessionStorage.key(i)).split(',')[2]*sessionStorage.getItem(sessionStorage.key(i)).split(',')[1]);
			}
			sessionStorage.setItem('total',TotalPrice);
			var button=document.createElement('button');
			var t = document.createTextNode('Pay ₹'+ String(TotalPrice));
			button.appendChild(t);
			button.setAttribute('style',"background-color: green;color:white;border:1px rgb(61,61,41) solid;margin-left:1300px;width:100px; height:40px;font-size:20px;margin-bottom:20px; ");
			button.setAttribute('onclick',`location.href='payment_option.php'`);
			div.appendChild(button);
			// var price=document.createElement('p');
			//  t=document.createTextNode(String("Total Price:₹ "+TotalPrice));
			// price.appendChild(t);
			// price.setAttribute('class','price_style');
			// div.appendChild(price);

	</script>
		
</body>
</html>