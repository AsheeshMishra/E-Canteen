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
			<br><br><br><br><br><br><br><br>
			<div id='heading'>
				<br><br><br>
			<h2><strong>Ramesh Canteen</strong></h2><br>
			Click on the shop you want to order from.
		</div>
		
		<br>
		<table id='head_img'>
			<tr>
				
				<th><pre>                                     </pre></th>
				<th class="shop_image">
						<h4>Ramesh Canteen</h4>
					<a href="ramesh_canteen.php"><img src="ramesh_cant_img.jpg" height="300" width="300" style="transform:rotate(90deg);" alt="shop1"></a>
				</th>
			</tr>
		</table>
		<br>


		
		<p id="menu">Food Point</p>
	<section class="shop_items">
		<img class="shop_items_img" src="idli.jpeg" width="200px" height="200px">
		<p class="item_description"><strong>Idli</strong><br>Description</p>
		<span class="price">price : 30</span>
		<p><button id="rc1" onclick="addToCart(this.id)" class="price_button">+</button><button id='but1' class='price_button'>Add</button><button id="rc1" onclick="removeFromCart(this.id)" class="price_button">-</button></p>
		
	</section>
	<section class="shop_items">
		<img class="shop_items_img" src="upma_sheera.jpeg" width="200px" height="200px">
		<p class="item_description"><strong>Upma Sheera</strong><br>Description</p>
		<span class="price">price : 50</span>
		<p><button id="rc2" onclick="addToCart(this.id)" class="price_button">+</button><button id='but2' class='price_button'>Add</button><button id="rc2" onclick="removeFromCart(this.id)" class="price_button">-</button></p>
		
	</section>
	<section class="shop_items">
		<img class="shop_items_img" src="puri.jpeg" width="200px" height="200px">
		<p class="item_description"><strong>Puri</strong><br>Description</p>
		<span class="price">price : 40</span>
		<p><button id="rc3" onclick="addToCart(this.id)" class="price_button">+</button><button id='but3' class='price_button'>Add</button><button id="rc3" onclick="removeFromCart(this.id)" class="price_button">-</button></p>
		
	</section>
	<section class="shop_items">
		<img class="shop_items_img" src="masala_dosa.jpeg" width="200px" height="200px">
		<p class="item_description"><strong>Masala Dosa</strong><br>Description</p>
		<span class="price">price : 50</span>
		<p><button id="rc4" onclick="addToCart(this.id)" class="price_button">+</button><button id='but4' class='price_button'>Add</button><button id="rc4" onclick="removeFromCart(this.id)" class="price_button">-</button></p>
		
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
			if(id=='rc1')
			{ 
				if(sessionStorage.getItem('list_of_food_selected_rc_1')!=null)
				{
					num1=num1+1;
					sessionStorage.setItem('list_of_food_selected_rc_1',id+','+num1+','+price1+','+'idli.jpeg');
				}
				else
				{
					num1=1;
					sessionStorage.setItem('list_of_food_selected_rc_1',id+','+num1+','+price1+','+'idli.jpeg');
			    }
			    button1.innerHTML=num1;
			}
			else if(id=='rc2')
			{
				if(sessionStorage.getItem('list_of_food_selected_rc_2')!=null)
				{
					num2+=1;
					sessionStorage.setItem('list_of_food_selected_rc_2',id+','+num2+','+price2+','+'upma_sheera.jpeg');
				}
				else
				{
				num2=1;
				sessionStorage.setItem('list_of_food_selected_rc_2',id+','+num2+','+price2+','+'upma_sheera.jpeg');
			    }
			    button2.innerHTML=num2;
			}
			else if(id=='rc3')
			{
				if(sessionStorage.getItem('list_of_food_selected_rc_3')!=null)
				{
					num3+=1;
					sessionStorage.setItem('list_of_food_selected_rc_3',id+','+num3+','+price2+','+'puri.jpeg');
				}
				else
				{
				num3=1;
				sessionStorage.setItem('list_of_food_selected_rc_3',id+','+num3+','+price3+','+'puri.jpeg');
			}
			button3.innerHTML=num3;
			}
			else
			{
				if(sessionStorage.getItem('list_of_food_selected_rc_4')!=null)
				{
					num4+=1;
					sessionStorage.setItem('list_of_food_selected_rc_4',id+','+num4+','+price4+','+'masala_dosa.jpeg');
				}
				else
				{
				num4=1;
				sessionStorage.setItem('list_of_food_selected_rc_4',id+','+num4+','+price4+','+'masala_dosa.jpeg');
			}
			button4.innerHTML=num4;

		}
	}
		//when clicked on removeFromCart the number of food items ordered is decreased by 1.
		function removeFromCart(id)
		{
			if(id=='rc1'&& num1>0)
			{ 
				if(num1==0)
					{	//console.log('working');
						alert("No item added to the cart");
						return;

					}
				if(sessionStorage.getItem('list_of_food_selected_rc_1')!=null)
				{
					num1=num1-1;
					if(num1==0)
					{	//console.log('working');
						sessionStorage.removeItem('list_of_food_selected_rc_1');
						button1.innerHTML='Add';
						return;

					}
					sessionStorage.setItem('list_of_food_selected_rc_1',id+','+num1+','+price1+','+'idli.jpeg');
					button1.innerHTML=num1;
				}
			}
			else if(id=='rc2'&& num2>0)
			{
				if(num2==0)
					{	//console.log('working');
						alert("No item added to the cart");
						return;

					}
				if(sessionStorage.getItem('list_of_food_selected_rc_2')!=null)
				{
					num2=num2-1;
					if(num2==0)
					{	//console.log('working');
						sessionStorage.removeItem('list_of_food_selected_rc_2');
						button2.innerHTML='Add';
						return;

					}
					sessionStorage.setItem('list_of_food_selected_rc_2',id+','+num2+','+price2+','+'upma_sheera.jpeg');
					button2.innerHTML=num2;
				}
			}
			else if(id=='rc3'&& num3>0)
			{
				if(num3==0)
					{	//console.log('working');
						alert("No item added to the cart");
						return;
					}
				if(sessionStorage.getItem('list_of_food_selected_rc_3')!=null && num3>0)
				{
					num3-=1;
					if(num3==0)
					{
						button3.innerHTML='Add';
						sessionStorage.removeItem('list_of_food_selected_rc_3');
						return;
					}
					sessionStorage.setItem('list_of_food_selected_rc_3',id+','+num3+','+price2+','+'puri.jpeg');
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
			if(sessionStorage.getItem('list_of_food_selected_rc_4')!=null && num4>0)
			{
				num4-=1;
				if(num4==0)
				{	//console.log('working');
					sessionStorage.removeItem('list_of_food_selected_rc_4');
					button4.innerHTML='Add';
					return;
				}
				sessionStorage.setItem('list_of_food_selected_rc_4',id+','+num4+','+price4+','+'masala_dosa.jpeg');
				button4.innerHTML=num4;
			}
		}
	}

	</script>
		
</body>
</html>