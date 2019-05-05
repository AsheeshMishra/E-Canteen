<?php
 	session_start();
 	if (!(isset($_SESSION['uname'])))
 	{
 		echo "<script>location.href='login_change.php'</script>";
 	}
?>
<?php
	
?>
<!DOCTYPE html>
<html>
<head>
	<link href="shop_style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<title>DeliciousMenu.com</title>
	
</head>
<body>

	
		<div id="body">
			<div id = "navbar" class="navbar">
					<nav class="font">
						<a href="index_change.php"><strong>Home </strong></a>
						<a href="login_change.php"><strong>Logout  </strong></a>
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
			<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<div id="heading">
			<h2><strong>B-Block</strong></h2><br>
			Click on the shop you want to order from!
			</div>
		<br>
		<div style="text-align: center;">
		<div >
			<h1>Food Point</h1>
					<a href="food_point.php"><img class="shop_image"  style="transform: rotate(90deg);" src="Food_point_img.jpg" alt="shop1" height="300" width="300"></a>
					
		</div>
	</div>
		<br>


		
		<p id="menu">Food Point</p>
	<section class="shop_items">
		<img class="shop_items_img" src="maggi.jpeg" width="200px" height="200px">
		<p class="item_description"><strong>Maggi</strong><br>Description</p>
		<span class="price">price : 30</span>
		<p id="list_of_food_selected_food_point1"  >
			<button id="fp1" onclick="addToCart(this.id)" class="price_button">+</button><button id='but1' class='price_button'>Add</button><button id="fp1" onclick="removeFromCart(this.id)" class="price_button">-</button>
			
		</p>

	</section>
	<section class="shop_items">
		<img class="shop_items_img" src="bread_pakora.jpeg" width="200px" height="200px">
		<p class="item_description"><strong>Bread Pakoda</strong><br>Description</p>
		<span class="price">price : 40</span>
		<p id="fp2"  >
			<button id="fp2" onclick="addToCart(this.id)" class="price_button">+</button><button id='but2' class='price_button'>Add</button><button id="fp2" onclick="removeFromCart(this.id)" class="price_button">-</button>
			
		</p>

	</section>
	<section class="shop_items">
		<img class="shop_items_img" src="sandwich.jpeg" width="200px" height="200px">
		<p class="item_description"><strong>Sandwich</strong><br>Description</p>
		<span class="price">price : 50</span>
		<p id="fp3"  >
			<button id="fp3" onclick="addToCart(this.id)" class="price_button">+</button><button id='but3' class='price_button'>Add</button><button id="fp3" onclick="removeFromCart(this.id)" class="price_button">-</button>
		
		</p>

	</section>
	<section class="shop_items">
		<img class="shop_items_img" src="veg_hakka.jpeg" width="200px" height="200px">
		<p class="item_description"><strong>Veg Hakka Noodles</strong><br>Description</p>
		<span class="price">price : 30</span>
		<p id="fp4"  >
			<button id="fp4" onclick="addToCart(this.id);" class="price_button">+</button><button id='but4' class='price_button'>Add</button><button id="fp4" onclick="removeFromCart(this.id);" class="price_button">-</button>
			
		</p>

	</section>
	<a id="payment" href="payment.php"><strong>GO TO CART!</strong></a>
	<br><br>

		<div id="about_us">
			<h2><strong>About Us</strong></h2>
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
			//All changes to javascript
			var button1=document.getElementById('but1');
			var button2=document.getElementById('but2');
			var button3=document.getElementById('but3');
			var button4=document.getElementById('but4');
			var num1=0,num2=0,num3=0,num4=0;
			const price1=30,price2=40,price3=50,price4=60;
			//add to cart stores the variable in session storage if it is not selected any time 
			//then it add the number of times it is clicked to store the item
		function addToCart(id)
		{
			if(id=='fp1')
			{ 
				if(sessionStorage.getItem('list_of_food_selected_food_point1')!=null)
				{
					num1=num1+1;
					sessionStorage.setItem('list_of_food_selected_food_point1',id+','+num1+','+price1+','+'maggi.jpeg');
				}
				else
				{
					num1=1;
					sessionStorage.setItem('list_of_food_selected_food_point1',id+','+num1+','+price1+','+'maggi.jpeg');
			    }
			    button1.innerHTML=num1;
			}
			else if(id=='fp2')
			{
				if(sessionStorage.getItem('list_of_food_selected_food_point2')!=null)
				{
					num2+=1;
					sessionStorage.setItem('list_of_food_selected_food_point2',id+','+num2+','+price2+','+'bread_pakora.jpeg');
				}
				else
				{
				num2=1;
				sessionStorage.setItem('list_of_food_selected_food_point2',id+','+num2+','+price2+','+'bread_pakora.jpeg');
			    }
			    button2.innerHTML=num2;
			}
			else if(id=='fp3')
			{
				if(sessionStorage.getItem('list_of_food_selected_food_point3')!=null)
				{
					num3+=1;
					sessionStorage.setItem('list_of_food_selected_food_point3',id+','+num3+','+price2+','+'sandwich.jpeg');
				}
				else
				{
				num3=1;
				sessionStorage.setItem('list_of_food_selected_food_point3',id+','+num3+','+price3+','+'sandwich.jpeg');
			}
			button3.innerHTML=num3;
			}
			else
			{
				if(sessionStorage.getItem('list_of_food_selected_food_point4')!=null)
				{
					num4+=1;
					sessionStorage.setItem('list_of_food_selected_food_point4',id+','+num4+','+price4+','+'veg_hakka.jpeg');
				}
				else
				{
				num4=1;
				sessionStorage.setItem('list_of_food_selected_food_point4',id+','+num4+','+price4+','+'veg_hakka.jpeg');
			}
			button4.innerHTML=num4;

		}
	}
		//when clicked on removeFromCart the number of food items ordered is decreased by 1.
		function removeFromCart(id)
		{	console.log('a');
			if(id=='fp1'&& num1>=0)
			{ 
				if(num1==0)

					{	//console.log('working');
						alert("No item added to the cart");
						console.log('b');
						return;

					}
				if(sessionStorage.getItem('list_of_food_selected_food_point1')!=null)
				{console.log('c');
					num1=num1-1;
					if(num1==0)
					{	//console.log('working');
						console.log('d');
						sessionStorage.removeItem('list_of_food_selected_food_point1');
						button1.innerHTML='Add';
						return;

					}
					sessionStorage.setItem('list_of_food_selected_food_point1',id+','+num1+','+price1+','+'maggi.jpeg');
					button1.innerHTML=num1;
				}
			}
			else if(id=='fp2'&& num2>=0)
			{
				if(num2==0)
					{	//console.log('working');
						alert("No item added to the cart");
						return;

					}
				if(sessionStorage.getItem('list_of_food_selected_food_point2')!=null)
				{
					num2=num2-1;
					if(num2==0)
					{	//console.log('working');
						sessionStorage.removeItem('list_of_food_selected_food_point2');
						button2.innerHTML='Add';
						return;

					}
					sessionStorage.setItem('list_of_food_selected_food_point2',id+','+num2+','+price2+','+'bread_pakora.jpeg');
					button2.innerHTML=num2;
				}
				
			}
			else if(id=='fp3'&& num3>=0)
			{
				if(num3==0)
					{	//console.log('working');
						alert("No item added to the cart");
						return;
					}
				if(sessionStorage.getItem('list_of_food_selected_food_point3')!=null && num3>0)
				{
					num3-=1;
					if(num3==0)
					{
						button3.innerHTML='Add';
						sessionStorage.removeItem('list_of_food_selected_food_point3');
						return;
					}
					sessionStorage.setItem('list_of_food_selected_food_point3',id+','+num3+','+price2+','+'sandwich.jpeg');
					button3.innerHTML=num3;
				}
				
			
		}
		else
		{
			if(num4==0)
			{	//console.log('working');
			
				alert("No item added to the cart");
				
				return;
			}
			if(sessionStorage.getItem('list_of_food_selected_food_point4')!=null && num4>0)
			{
				num4-=1;
				if(num4==0)
				{	//console.log('working');
					sessionStorage.removeItem('list_of_food_selected_food_point4');
					button4.innerHTML='Add';
					return;
				}
				sessionStorage.setItem('list_of_food_selected_food_point4',id+','+num4+','+price4+','+'veg_hakka.jpeg');
				button4.innerHTML=num4;
			}
		}
	}
	
	</script>
	
</body>
</html>