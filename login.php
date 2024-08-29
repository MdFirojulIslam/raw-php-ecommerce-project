<?php
require 'function.php'; // Ensure this path is correct

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $shop = new Shop();
    $shop->login($email, $password);
}
?>




<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="CSS/style.css">

</head>
<body>
	<header>
		<div class="navbar">
			<div class="nav-logo border">
				<a href="index.php">
					<div class="logo">
					
					</div>
				</a>
			</div>

			<div class="nav-address border">
				<p class="add-first">Delivered to</p>
				<div class="add-icon">
					<i class="fa-solid fa-location-dot"></i>
					<p class="add-sec">Rangpur District</p>
				</div>				
			</div>

			<div class = "nav-search">
				<select class="search-select">
					<option> All </option>
				</select>
				<input type="text" class="search-input">

				<div class="search-icon">
					<i class="fa-solid fa-magnifying-glass"></i>
				</div>
			</div>

			<div class="nav-signin border">
				<p><span>Hello, sign in</span></p>
				<p class="nav-second">Account & Lists</p>
			</div>

			<div class="nav-signin border">
				<p><span>Returns</span></p>
				<p class="nav-second">& Orders</p>
			</div>

			<div class="nav-cart border">
				<i class="fa-solid fa-cart-shopping"></i> Cart
			</div>
		</div>

		<div class="panel">
			<div class="panel-all">
				<i class="fa-solid fa-bars"></i>
				All
			</div>
			<div class="panel-ops">
				<p>Today's Deals</p>
				<p>Customer Service</p>
				<p>Registry</p>
				<p>Givt-Cards</p>
				<p>Sell</p>
			</div>
			<div class="panel-deals">
				Shop deals in electronics
			</div>
		</div>
	</header>

	<div class="container">
		<div class="wrapper">
			<span class="bg-animate">				
			</span>

			<div class="form-box login">
				<h2>login</h2>
				<form action="" method="post">
					<div class="input-box">
						<input type="text" name="email" required>
						<label for="">Email</label>
						<i class="fa-solid fa-user"></i>
					</div>

					<div class="input-box">
						<input type="password" name ="password" required>
						<label for="">Password</label>
						<i class="fa-solid fa-lock"></i>
					</div>

					<button type = "submit" name ="submit" class="btn">LOGIN</button>
					<div class="logreg-link">
						<p>Don't have an account? <a href="signup.php" class="register-link">Sign Up</a></p>
					</div>
					<div class="logreg-link">
						<p>Forgotten password? <a href="password-recovery.php" class="register-link">forgotten password</a></p>
					</div>
				</form>
			</div>	
			<div class="info-text login">
				<h2>Welcome Back</h2>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="foot-panel1">
			Back to Top
		</div>

		<div class="foot-panel2">
			<ul>
				<p>Get to know</p>
				<a>Careers</a>
				<a>Blog</a>
			</ul>

			<ul>
				<p>Get to know</p>
				<a>Careers</a>
				<a>Blog</a>
			</ul>

			<ul>
				<p>Get to know</p>
				<a>Careers</a>
				<a>Blog</a>
			</ul>

			<ul>
				<p>Get to know</p>
				<a>Careers</a>
				<a>Blog</a>
			</ul>
		</div>

		<div class="foot-panel3">
			<div class="logo-image"></div>
		</div>
	</div>
	
</body>
</html>