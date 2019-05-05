<html>
	<link href="shop_style.css" rel="stylesheet">
</html>
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
	<link href="shop_style.css" rel="stylesheet">
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
				<br><br><br><br>
			<h2><strong>Pi-R-Cube</strong></h2><br>
			Click on the shop you want to order from!
		</div>
		
		<br>
		<table>
			<tr>
				
				<th class="shop_image">
						<h4>Food Court</h4>
					<a href="b_block_shop1.php"><img width="300" height="300" src="pi-r-cube_food.jfif" alt="shop1"></a>
				</th>
				<th class="shop_image">
						<h4>Food Point</h4>
					<a href="b_block_shop2.php"><img width="300" height="300" src="pi_r_cube.jpg" alt="shop1"></a>
				</th>
			</tr>
		</table>
		<br>


		
		<p id="menu">Food Court</p>
	<section class="shop_items">
		<img class="shop_items_img" src="baay_corn.jpeg" width="200px" height="200px">
		<p class="item_description"><strong>Baby Corn Manchurian</strong><br>Description</p>
		<span class="price">price : 50</span>
		<p><button id='bs11' onclick="addToCart(this.id)" class="price_button">+</button><button id="but1" class="price_button">Add</button><button id="bs11" onclick="removeFromCart(this.id)" class="price_button">-</button></p>
	</section>

	<section class="shop_items">
		<img class="shop_items_img" src="veg_hakka.jpeg" width="200px" height="200px">
		<p class="item_description"><strong>Veg Hakka Noodles</strong><br>Description</p>
		<span class="price">price : 60</span>
		<p><button id='bs12' onclick="addToCart(this.id)" class="price_button">+</button><button id="but2" class="price_button">Add</button><button id="bs12" onclick="removeFromCart(this.id)" class="price_button">-</button></p>		
	</section>
	
	<section class="shop_items">
		<img class="shop_items_img" src="aloo_gobi.jpeg" width="200px" height="200px">
		<p class="item_description"><strong>Aloo Gobi</strong><br>Description</p>
		<span class="price">price : 50</span>
		<p><button id='bs13' onclick="addToCart(this.id)" class="price_button">+</button><button id="but3" class="price_button">Add</button><button id="bs13" onclick="removeFromCart(this.id)" class="price_button">-</button></p>		
	</section>

	<section class="shop_items">
		<img class="shop_items_img" src="ckn_biryani.jpeg" width="200px" height="200px">
		<p class="item_description"><strong>Chicken Biryani</strong><br>Description</p>
		<span class="price">price : 80</span>
		<p><button id='bs14' onclick="addToCart(this.id)" class="price_button">+</button><button id="but4" class="price_button">Add</button><button id="bs14" onclick="removeFromCart(this.id)" class="price_button">-</button></p>		
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
			const price1=50,price2=60,price3=50,price4=80;
			//add to cart stores the variable in session storage if it is not selected any time 
			//then it add the number of times it is clicked to store the item

		function addToCart(id)
		{
			if(id=='bs11')
			{ 
				if(sessionStorage.getItem('list_of_food_selected_b_shop1_1')!=null)
				{
					num1=num1+1;
					sessionStorage.setItem('list_of_food_selected_b_shop1_1',id+','+num1+','+price1+','+"baay_corn.jpeg");
				}
				else
				{
					num1=1;
					sessionStorage.setItem('list_of_food_selected_b_shop1_1',id+','+num1+','+price1+','+'baay_corn.jpeg');
			    }
			    button1.innerHTML=num1;
			}
			else if(id=='bs12')
			{
				if(sessionStorage.getItem('list_of_food_selected_b_shop1_2')!=null)
				{
					num2+=1;
					sessionStorage.setItem('list_of_food_selected_b_shop1_2',id+','+num2+','+price2+','+'veg_hakka.jpeg');
				}
				else
				{
				num2=1;
				sessionStorage.setItem('list_of_food_selected_b_shop1_2',id+','+num2+','+price2+','+'veg_hakka.jpeg');
			    }
			    button2.innerHTML=num2;
			}
			else if(id=='bs13')
			{
				if(sessionStorage.getItem('list_of_food_selected_b_shop1_3')!=null)
				{
					num3+=1;
					sessionStorage.setItem('list_of_food_selected_b_shop1_3',id+','+num3+','+price2+','+'aloo_gobi.jpeg');
				}
				else
				{
				num3=1;
				sessionStorage.setItem('list_of_food_selected_b_shop1_3',id+','+num3+','+price3+','+'aloo_gobi.jpeg');
				}
				 button3.innerHTML=num3;
			}
			else
			{
				if(sessionStorage.getItem('list_of_food_selected_b_shop1_4')!=null)
				{
					num4+=1;
					sessionStorage.setItem('list_of_food_selected_b_shop1_4',id+','+num4+','+price4+','+'ckn_biryani.jpeg');
				}
				else
				{
				num4=1;
				sessionStorage.setItem('list_of_food_selected_b_shop1_4',id+','+num4+','+price4+','+'ckn_biryani.jpeg');
			}
			button4.innerHTML=num4;

		}
	}
		//when clicked on removeFromCart the number of food items ordered is decreased by 1.
		function removeFromCart(id)
		{
			if(id=='bs11'&& num1>=0)
			{ 
				if(num1==0)
					{	//console.log('working');
						alert("No item added to the cart");
						return;

					}
				if(sessionStorage.getItem('list_of_food_selected_b_shop1_1')!=null)
				{
					num1=num1-1;
					if(num1==0)
					{	//console.log('working');
						sessionStorage.removeItem('list_of_food_selected_b_shop1_1');
						button1.innerHTML='Add';
						return;

					}
					sessionStorage.setItem('list_of_food_selected_b_shop1_1',id+','+num1+','+price1+','+'baay_corn.jpeg');
					button1.innerHTML=num1;
				}
			}
			else if(id=='bs12'&& num2>=0)
			{
				if(num2==0)
					{	//console.log('working');
						alert("No item added to the cart");
						return;

					}
				if(sessionStorage.getItem('list_of_food_selected_b_shop1_2')!=null)
				{
					num2=num2-1;
					if(num2==0)
					{	//console.log('working');
						sessionStorage.removeItem('list_of_food_selected_b_shop1_2');
						button2.innerHTML='Add';
						return;

					}
					sessionStorage.setItem('list_of_food_selected_b_shop1_2',id+','+num2+','+price2+','+'veg_hakka.jpeg');
					button2.innerHTML=num2;
				}
				
			}
			else if(id=='bs13'&& num3>=0)
			{
				if(num3==0)
					{	//console.log('working');
						alert("No item added to the cart");
						return;
					}
				if(sessionStorage.getItem('list_of_food_selected_b_shop1_3')!=null && num3>0)
				{
					num3-=1;
					if(num3==0)
					{
						button3.innerHTML='Add';
						sessionStorage.removeItem('list_of_food_selected_b_shop1_3');
						return;
					}
					sessionStorage.setItem('list_of_food_selected_b_shop1_3',id+','+num3+','+price2+','+'aloo_gobi.jpeg');
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
			if(sessionStorage.getItem('list_of_food_selected_b_shop1_4')!=null && num4>0)
			{
				num4-=1;
				if(num4==0)
				{	//console.log('working');
					sessionStorage.removeItem('list_of_food_selected_b_shop1_4');
					button4.innerHTML='Add';
					return;
				}
				sessionStorage.setItem('list_of_food_selected_b_shop1_4',id+','+num4+','+price4+','+'ckn_biryani.jpeg');
				button4.innerHTML=num4;
			}
		}
	}

	</script>
		
</body>
</html>
<!-- <!DOCTYPE html>
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
						<a href="index_change.php"><strong>Home</strong></a>
						<a href="login_change.php"><strong>Logout </strong></a>
						<a href="#about_us"><strong>About us!</strong></a>
					</nav>
			</div>
			<br><br><br><br><br><br><br><br>
			<div id='heading'>
			<h2><strong>B Block</strong></h2><br>
			Click on the shop you want to order from!
		</div>
		
		<br>
		<table>
			<tr>
				
				<th class="shop_image">
						<h4>Food Court</h4>
					<a href="b_block_shop1.html"><img src="food1.jpg" alt="shop1"></a>
					<p class="shop_text">
					text about shop
					</p>
				</th>
				<th class="shop_image">
						<h4>Juice and snack point</h4>
					<a href="b_block_shop2.html"><img  src="pi_r_cube.jpg" alt="shop1"></a>
					<p class="shop_text">
					text about shop
					</p>
				</th>
			</tr>
		</table>
		<br>


		
		<p id="menu">Food Court</p>
	<section class="shop_items">
		<img class="shop_items_img" src="food1.jpg" width="200px" height="200px">
		<p class="item_description"><strong>Samosa</strong><br>Description</p>
		<span class="price">price : 30</span>
		<p><button id='bs11' onclick="addToCart(this.id)" class="price_button">+</button><button id="but1" class="price_button">Add</button><button id="bs11" onclick="removeFromCart(this.id)" class="price_button">-</button></p>
	</section>

	<section class="shop_items">
		<img class="shop_items_img" src="food1.jpg" width="200px" height="200px">
		<p class="item_description"><strong>Samosa</strong><br>Description</p>
		<span class="price">price : 30</span>
		<p><button id='bs12' onclick="addToCart(this.id)" class="price_button">+</button><button id="but2" class="price_button">Add</button><button id="bs12" onclick="removeFromCart(this.id)" class="price_button">-</button></p>		
	</section>
	
	<section class="shop_items">
		<img class="shop_items_img" src="food1.jpg" width="200px" height="200px">
		<p class="item_description"><strong>Samosa</strong><br>Description</p>
		<span class="price">price : 30</span>
		<p><button id='bs13' onclick="addToCart(this.id)" class="price_button">+</button><button id="but3" class="price_button">Add</button><button id="bs13" onclick="removeFromCart(this.id)" class="price_button">-</button></p>		
	</section>

	<section class="shop_items">
		<img class="shop_items_img" src="food1.jpg" width="200px" height="200px">
		<p class="item_description"><strong>Samosa</strong><br>Description</p>
		<span class="price">price : 30</span>
		<p><button id='bs14' onclick="addToCart(this.id)" class="price_button">+</button><button id="but4" class="price_button">Add</button><button id="bs14" onclick="removeFromCart(this.id)" class="price_button">-</button></p>		
	</section>

	<a id="payment" href="payment.html"><strong>PROCEED TO PAY.</strong></a>

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
			  <li><a href="#index_change.html"><img src="facebook.jpg" height="30" width="30"></a></li>
			  <li><a href="#index_change.html"><img src="pintrest.jpg" height="30" width="30"></a></li>
			  <li><a href="#index_change.html"><img src="instagram.jpg" height="30" width="30"></a></li>
			  <li><a href="#index_change.html"><img src="google+.jpg" height="30" width="30"></a></li>
			  <li><a href="#index_change.html"><img src="twitter.jpg" height="30" width="30"></a></li>
			  <li><a href="#index_change.html"><img src="whatsapp.jpg" height="30" width="30"></a></li>
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
			if(id=='bs11')
			{ 
				if(sessionStorage.getItem('list_of_food_selected_b_shop1_1')!=null)
				{
					num1=num1+1;
					sessionStorage.setItem('list_of_food_selected_b_shop1_1',id+','+num1+','+price1+','+'food1.jpg');
				}
				else
				{
					num1=1;
					sessionStorage.setItem('list_of_food_selected_b_shop1_1',id+','+num1+','+price1+','+'food1.jpg');
			    }
			    button1.innerHTML=num1;
			}
			else if(id=='bs12')
			{
				if(sessionStorage.getItem('list_of_food_selected_b_shop1_2')!=null)
				{
					num2+=1;
					sessionStorage.setItem('list_of_food_selected_b_shop1_2',id+','+num2+','+price2+','+'food1.jpg');
				}
				else
				{
				num2=1;
				sessionStorage.setItem('list_of_food_selected_b_shop1_2',id+','+num2+','+price2+','+'food1.jpg');
			    }
			    button2.innerHTML=num2;
			}
			else if(id=='bs13')
			{
				if(sessionStorage.getItem('list_of_food_selected_b_shop1_3')!=null)
				{
					num3+=1;
					sessionStorage.setItem('list_of_food_selected_b_shop1_3',id+','+num3+','+price2+','+'food1.jpg');
				}
				else
				{
				num3=1;
				sessionStorage.setItem('list_of_food_selected_b_shop1_3',id+','+num3+','+price3+','+'food1.jpg');
				}
				 button3.innerHTML=num3;
			}
			else
			{
				if(sessionStorage.getItem('list_of_food_selected_b_shop1_4')!=null)
				{
					num4+=1;
					sessionStorage.setItem('list_of_food_selected_b_shop1_4',id+','+num4+','+price4+','+'food1.jpg');
				}
				else
				{
				num4=1;
				sessionStorage.setItem('list_of_food_selected_b_shop1_4',id+','+num4+','+price4+','+'food1.jpg');
			}
			button4.innerHTML=num4;

		}
	}
		//when clicked on removeFromCart the number of food items ordered is decreased by 1.
		function removeFromCart(id)
		{
			if(id=='bs11'&& num1>=0)
			{ 
				if(num1==0)
					{	//console.log('working');
						alert("No item added to the cart");
						return;

					}
				if(sessionStorage.getItem('list_of_food_selected_b_shop1_1')!=null)
				{
					num1=num1-1;
					if(num1==0)
					{	//console.log('working');
						sessionStorage.removeItem('list_of_food_selected_b_shop1_1');
						button1.innerHTML='Add';
						return;

					}
					sessionStorage.setItem('list_of_food_selected_b_shop1_1',id+','+num1+','+price1+','+'food1.jpg');
					button1.innerHTML=num1;
				}
			}
			else if(id=='bs12'&& num2>=0)
			{
				if(num2==0)
					{	//console.log('working');
						alert("No item added to the cart");
						return;

					}
				if(sessionStorage.getItem('list_of_food_selected_b_shop1_2')!=null)
				{
					num2=num2-1;
					if(num2==0)
					{	//console.log('working');
						sessionStorage.removeItem('list_of_food_selected_b_shop1_2');
						button2.innerHTML='Add';
						return;

					}
					sessionStorage.setItem('list_of_food_selected_b_shop1_2',id+','+num2+','+price2+','+'food1.jpg');
					button2.innerHTML=num2;
				}
				
			}
			else if(id=='bs13'&& num3>=0)
			{
				if(num3==0)
					{	//console.log('working');
						alert("No item added to the cart");
						return;
					}
				if(sessionStorage.getItem('list_of_food_selected_b_shop1_3')!=null && num3>0)
				{
					num3-=1;
					if(num3==0)
					{
						button3.innerHTML='Add';
						sessionStorage.removeItem('list_of_food_selected_b_shop1_3');
						return;
					}
					sessionStorage.setItem('list_of_food_selected_b_shop1_3',id+','+num3+','+price2+','+'food1.jpg');
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
			if(sessionStorage.getItem('list_of_food_selected_b_shop1_4')!=null && num4>0)
			{
				num4-=1;
				if(num4==0)
				{	//console.log('working');
					sessionStorage.removeItem('list_of_food_selected_b_shop1_4');
					button4.innerHTML='Add';
					return;
				}
				sessionStorage.setItem('list_of_food_selected_b_shop1_4',id+','+num4+','+price4+','+'food1.jpg');
				button4.innerHTML=num4;
			}
		}
	}

	</script>
		
</body>
</html> -->