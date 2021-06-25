<!DOCTYPE html>
<html>
<head>
	<title>: : Intuitionists : :</title>
	<script src="jquery.min.js"></script>
	<link rel="icon" href="icon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body class="flex-container">
	<div id="main-div">
		<?php
			error_reporting(0);
			if($_POST['name'] && $_POST['email'])
			{
				$user=$_POST['name'];
				$email=$_POST['email'];
				$message=$_POST['message'];
				if(!preg_match("/^[0-9a-zA-Z]+$/",$user))
				{
					echo "<script>alert('Username is invalid');</script";
				}
				$x=strrpos($email,'.');
				if(strlen($email)<6 || strlen($email)>254  || !preg_match("/^[0-9a-zA-Z]+$/",substr($email,0,strpos($email,'@'))) || (($x!=strlen($email)-3) && ($x!=strlen($email)-4)) || strpos($email,'@')!=strrpos($email,'@'))
				{
					echo "<script>alert('Email is invalid');</script>";
				}
				if(strlen($message)==0){
					echo "<script>alert('Enter some message');</script>";
				}
				else
				{
					$conn = new mysqli ('localhost','root','','apssdc'); 	
					$sql = "INSERT INTO intrested(name,email,message) VALUES ('$user','$email','$message')";
					if(!$conn->query($sql))
					{
						echo "<script>alert('Something is wrong with database');</script>";
					}
					else
					{
						echo "<script>alert('We will contact soon');</script>";
					}
				}
			}
		?>
		<header class="flex-container">
			<img src="logo.png" alt="logo" id="logo" class="h-div">
			<button class="btn">Home</button>
			<div class="h-div">
				<button class="dropb">Courses</button>
				<div class="dropc">
					<a href="">Long term courses</a>
					<a href="">Short term courses</a>
				</div>
			</div>
			<div class="h-div">
				<button class="btn">Contact</button>
			</div>
			<button class="btn"><a href="about.html">About Us</a></button>
		</header>
		<hr>
		<div class="view1">
			<div class="slider">
				<div align="center" class="container">
					<img src="slider/ai.png" class="image" id="img1" />
					<p class="des">"AI the future with all live experience"</p>
				</div>
				<img src="slider/bit_coin.jpg" class="image" id="img2" />
				<img src="slider/block_chain.jpg" class="image" id="img3" />
				<img src="slider/ml.png" class="image" id="img4" />
			</div>

		</div>
		<div class="view2" align="center">
			<div align="center">
				<p class="headtext">Testimonials</p>
			</div>
			<div id="tst1" class="tst">
				<img src="person.jpg" alt="Person1" class="icon"><br>
				<p>Name</p><br>
				<p class="exp">I used this website to excell my technical skills.</p>
			</div>
			<div id="tst2" class="tst">
				<img src="person.jpg" alt="Person2" class="icon"><br>
				<p>Name</p><br>
				<p class="exp">I used this website to excell my technical skills.</p>
			</div>
			<div id="tst3" class="tst">
				<img src="person.jpg" alt="Person3" class="icon"><br>
				<p>Name</p><br>
				<p class="exp">I used this website to excell my technical skills.</p>
			</div>
			<div id="tst4" class="tst">
				<img src="person.jpg" alt="Person1" class="icon"><br>
				<p>Name</p><br>
				<p class="exp">I used this website to excell my technical skills.</p>
			</div>
			<div id="tst5" class="tst">
				<img src="person.jpg" alt="Person2" class="icon"><br>
				<p>Name</p><br>
				<p class="exp">I used this website to excell my technical skills.</p>
			</div>
			<div id="tst6" class="tst">
				<img src="person.jpg" alt="Person3" class="icon"><br>
				<p>Name</br><br>
				<p class="exp">I used this website to excell my technical skills.</p>
			</div>
		</div>
		<script type="text/javascript">
			var x=1,n=4;
			function slide()
			{
				$("#img"+((x+1)%n+1)).fadeIn(200);
				$("#img"+((x+n)%n+1)).fadeOut(200);
				x++;
			}
			setInterval(slide, 4000);
		</script>
		<div align="center" id="view3">
			<div align="center">
				<p class="headtext">Contact Us</p>
			</div>
			<div id="form">
				<form method="post">
					<p id="fh">Enter your details</p>
					<input type="text" name="name" placeholder="Name" class="inp"><br>
					<input type="email" name="email" placeholder="Email" class="inp"><br>
					<input type="text" name="message" placeholder="Message" class="inp"><br>
					<input type="submit" name="submit" value="Submit" id="sub" class="btn">
				</form>
			</div>
		</div>
		<footer id="foot">
			<div align="center" class="flex-container">
				<div class="flex-col" id="contact" align="center">
		       		<p style="margin:10px">: : Contact us : :</p>
		      	</div>
				<div class="flex-col">
					<a href="#"><p class="footer-link">Link1</p></a>
				</div>
				<div class="flex-col">
					<a href="#"><p class="footer-link">Link2</p></a>
				</div>
				<div class="flex-col">
					<a href="#"><p class="footer-link">Link3</p></a>
				</div>
				<div class="flex-col">
					<a href="#"><p class="footer-link">Link4</p></a>
				</div>
				<div class="flex-col">
					<a href="#"><p class="footer-link">Link5</p></a>
				</div>
		    </div>
	    	<p align="center">Some rights reserved © intuitionists</p><br><br>
		</footer>
	</div>
</body>
</html>
