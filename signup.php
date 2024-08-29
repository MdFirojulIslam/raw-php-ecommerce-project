<?php
require 'function.php'; // Ensure this path is correct

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $address = $_POST['address'];
    $image = $_FILES['image'];

    $shop = new Shop();
    $shop->register($username, $email, $password, $confirmPassword, $address, $image);
}

?>



<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SIGN UP</title>

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
				<input type="password"  class="search-input">

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
	<div class="form-container">
		<form action="signup.php" method="post" enctype="multipart/form-data">
			<div class="form-label">
				<label for="username"> Username </label>
				<input type="text" name="username" placeholder="username">
			</div>

			<div class="form-label">
				<label for="email"> email </label>
				<input type="text" name="email" placeholder="email" required>
			</div>
			
			<div class="form-label">
				<label for="password"> Password </label>
				<input type="password" name="password" placeholder="password" required>
			</div>

			<div class="form-label">
				<label for="password"> Confirm-Password </label>
				<input type="password" name="confirm_password" placeholder="confirm password" required>
			</div>

			<div class="form-label">
				<label for="address"> Address </label>
				<input type="text" name="address" placeholder="address" required>
			</div>

			<div class="form-label">
				<label for="image"> Image </label>
				<input type="file" name="image" placeholder="Image" required>
			</div>
			
			<div class="form-label">
				<input type="submit" name="submit" value="submit">
			</div>

			<div class="logreg-link">
				<p>All ready have an account? <a href="login.php" class="register-link">login</a></p>
			</div>
		</form>
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