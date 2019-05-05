 <?php
 session_start();
if (isset($_SESSION['uname'])===TRUE) echo "<script>location.href='index_change.php';alert(`You are already logged in!`); </script>";
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
		<div id = "navbar" class="navbar">
			<nav class="font">
				<a href="index_change.php"><strong>Home </strong></a>
				<a href="login_change.php"><strong>Login  </strong></a>
				<a href="#about_us"><strong>About us!</strong></a>
			</nav>
		</div>
		<fieldset id="signup_form">
			<legend><strong>Sign Up</strong></legend>
			<form   method="POST" name="ny_form">
		
				<strong>Name:</strong><input type="text" name="name" id="username"><br><br>
				<strong>USN:</strong><input id='usn_val' type="text" name="usn"><br><br>
				<strong>Password:</strong><input type="password" name="password" maxlength="10" minlenght="5"><br><br>
				<strong>Repeat Password:</strong><input type="password" name="rpassword"><br><br>
				<p id="message"></p>
				<p>By creating an account you agree to our <br><a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
				<input type="submit" name="submit">
				<a href="index_change.php" ><input type="button" id="cancel" value="Cancel"></a>
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
<?php
	$dbuser = "root";
	$dbpass = "";
	$dbhost = "localhost:3306";
	$dbname = "users";

	$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	/*if($connection){
		echo "Connected to DATABASE<br>";
	}
	else
	{
		echo "NOT CONNECTED TO DATABASE<br>";
	}*/


/*
	$sql = "drop table rachanadani.details";

	$result = mysqli_query($connection,$sql);*/
	/*if($result){
		echo "TABLE NAMED details DROPPED<br>";
	}
	else{
		echo "TABLE NAMED details NOT DROPPED<br>";
	}*/


/*
	$sql = "CREATE TABLE rachanadani.DETAILS(
			NAME varchar(32),
			USERNAME varchar(32),
			PASSWORD varchar(32),
			RPASSWORD varchar(32)
		)";*/

/*	$result = mysqli_query($connection,$sql);
	if($result){
		echo "TABLE CREATED WITH NAME 'DETAILS' AND FIELDS ARE 'NAME', 'USERNSME', 'PASSWORD' AND 'RPASSWORD'<br>";
	}
	else{
		echo "TABLE COULD NOT BE CREATED WITH NAME 'DETAILS' AND FIELDS ARE 'NAME' , 'USERNSME', 'PASSWORD' AND 'RPASSWORD'<br>";
	}
*/
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$name = $_POST['name'];
		$usn = $_POST['usn'];
		$password = $_POST['password'];
		$rpassword = $_POST['rpassword'];
		$sql = "SELECT * FROM users.details";
		$result = mysqli_query($connection,$sql);
		$flag1=1;$flag2=1;
		if($flag1)
		{
			while($row = mysqli_fetch_array($result)){
					if($row['USN'] == $usn || $row['NAME'] == $name)
					{
						echo "<script>
							var p = document.getElementById('message');
							p.innerHTML = `User already exists.<br>`;
							function reload()
							{location.href='signup_php.php'};
							setTimeout(reload,5000);
						  </script>";

						  $flag1=0;
						  break;
					}
				}
		}
		if($password != $rpassword){
			echo "<script>var p = document.getElementById('message');
							p.innerHTML = `passwords donot match.<br>`; </script>";
				$flag2=0;
		}

		
/*		print("Elements collected<br>");
		print_r($_POST);*/
		if($flag1 && $flag2)
		{
			$S = "INSERT users.details(NAME,USN,PASSWORD)
						VALUES('$name','$usn', '$password')";
			//Start the session
			//if ((session_status() !== PHP_SESSION_ACTIVE) ) echo "hi";
			$_SESSION['uname']=$usn;//Set the session var
			var_dump($usn);
			echo"<script>
			if(sessionStorage.getItem('uname')==null)
			{console.log(x.value);
				var x = document.getElementById('username');

				sessionStorage.setItem('uname',x.value);//Set the value of username for navbar
			}
			location.href='index_change.php';//Go to index_change if every thing is right.
			</script>";
						$res = mysqli_query($connection,$S);
			if($res){
				echo "ROW IS INSERTED<br>";
			}
			else{
				echo "ROW COULD NOT BE INSERTED<br>";
				

			}
		}
	}

	
	?>