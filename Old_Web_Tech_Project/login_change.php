<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="login_change_style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
	<title>PES E-Canteen</title>
	
</head>
<body>
	<div id="banner">
		<div id = "navbar" class="toy">
			<nav class="font">
				<a href="index_change.php"><strong>Home</strong></a>
				<a href="#about_us"><strong>About us!</strong></a>
			</nav>
		</div>
		<fieldset id="login_form">
			<legend><strong>Login</strong></legend>
			<form  action="login_change.php" method="POST">
		
				<strong>Username</strong><br><input type="text" name="usn"><br>
				<strong>Password</strong><br><input type="password" name="password"><br><br>
				<p id='message'></p>
				<a style="color:blue;font-size: 20px;" href="signup_php.php">Sign up here!</a><br><br>
				<input type="submit" name="submit">
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
session_start();

if(isset($_SESSION['uname']))
{	
	session_destroy();
	echo "<script>location.href='login_change.php';
	var val = document.getElementById('usn_val').value;
			if(sessionStorage.getItem('uname')!=null)
			{
				sessionStorage.removeItem('uname');//Set the value of username for navbar
			}
	</script>";
}
else
{
	
	$dbuser = "root";
	$dbpass = "";
	$dbhost = "localhost:3306";
	$dbname = "users";

	$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$usn = $_POST['usn'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM users.details";
		$result = mysqli_query($connection,$sql);
		$flag1=1;$flag2=1;
		if($flag1)
		{
			while($row = mysqli_fetch_array($result)){
				// print($usn);print($password);
				// print_r($row);
				// foreach ($row as $key => $value) {
				// 	echo "$key, $value<br>";
				// }
					if($row['USN'] == $usn && $row['PASSWORD'] == $password)
					{
						// //if (session_status() !== PHP_SESSION_ACTIVE ) echo "hi";
						$_SESSION['uname']=$usn;
						echo"<script>
						// var val = document.getElementById('usn_val').value;
						if(sessionStorage.getItem('uname')==null)
						{
							sessionStorage.setItem('uname','');
						}
						location.href='index_change.php';
						</script>";
						
					}

					else if($row['USN'] == $usn && $row['PASSWORD'] != $password)
					{
						echo "<script>
							var p = document.getElementById('message');
							p.innerHTML = `Wrong password<br>`;
							function reload()
							{
								location.href='login_change.php'
							};
							setTimeout(reload,5000);
						  </script>";

						  $flag1=0;
						  break;
					}
					else
					{
						echo "<script>
							var p = document.getElementById('message');
							p.innerHTML = `User does not exist.<br>`;
							function reload()
							{
								location.href='login_change.php'
							};
							setTimeout(reload,5000);

						  </script>";
					}
				}
		}

		
	

	// $res = mysqli_query($connection,$S);
	// if($res){
	// 	echo "ROW IS INSERTED<br>";
	// }
	// else{
	// 	echo "ROW COULD NOT BE INSERTED<br>";
	// }
		

	}
}
?>