<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>product details</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="CSS/style.css">

	 <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .item-take-center {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #fff;
        }

        .product-details-alignment {
            display: flex;
            max-width: 900px;
            width: 100%;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .image-details {
            flex: 1;
            padding: 20px;
        }

        .product-details-image {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .details-about-product {
            flex: 2;
            padding: 20px;
        }

        .details-about-product p {
            color: #555;
        }

        .details-about-product h1 {
            font-size: 2em;
            margin: 10px 0;
            color: #333;
        }

        .details-about-product h4 {
            font-size: 1.5em;
            margin: 10px 0;
            color: #ff6f61;
        }

        .details-about-product select,
        .details-about-product input[type="number"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        .cart-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s;
            text-decoration: none;
            margin-top: 10px;
        }

        .cart-button:hover {
            background-color: #218838;
        }

        .product-details h3 {
            margin-top: 20px;
            color: #333;
        }

        .product-details p {
            color: #777;
        }

        .related-products {
            max-width: 900px;
            width: 100%;
            height:350px;
            margin-top: 40px;
        }

        .related-products h3 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.8em;
            color: #333;
        }

        .related-products .products {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .related-products .product {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 200px;
            padding: 15px;
            text-align: center;
        }

        .related-products .product img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .related-products .product h4 {
            font-size: 1.2em;
            margin: 10px 0;
            color: #333;
        }

        .related-products .product p {
            color: #ff6f61;
            font-size: 1em;
            margin-bottom: 10px;
        }

        .related-products .product a {
            display: inline-block;
            padding: 8px 15px;
            background-color: #28a745;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .related-products .product a:hover {
            background-color: #218838;
        }

    </style>
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

	<div class="item-take-center">
        <div class="product-details-alignment">
            <div class="image-details">
                <div class="col-2">
                    <img src="box1_image.jpeg" class="product-details-image" alt="Product Image">
                </div>
            </div>
            <div class="details-about-product">
                <div class="col-2">
                    <p>Home / T-shirt</p>
                    <h1>Red printed T-shirt by HRX</h1>
                    <h4>50.00 Taka</h4>
                    <select name="" id="">
                        <option value="">Select Size</option>
                        <option value="XXL">XXL</option>
                        <option value="XL">XL</option>
                        <option value="L">L</option>
                    </select>
                    <input type="number" value="1" min="1">
                    <button class="cart-button"><a href="cart.html" style="color: #fff; text-decoration: none;">Add To Cart</a></button>
                    <div class="product-details">
                        <h3>Product Details</h3>
                        <p>Fabrilife Mens Premium Quality t-shirt that offers a much smoother, silky feel and more structured, mid-weight fit than the regular t-shirts . The t-shirts are made with finest quality Combed Compact Cotton , features astonishing ~175 GSM on just 26's cotton which gives a smooth and compact construction.</p>
                    </div>
                </div>          
            </div>
        </div>

        <div class="related-products">
            <h3>Related Products</h3>
            <div class="products">
                <div class="product">
                    <img src="related-product1.jpg" alt="Related Product 1">
                    <h4>Blue printed T-shirt</h4>
                    <p>$45.00</p>
                    <a href="#">View Product</a>
                </div>
                <div class="product">
                    <img src="related-product2.jpg" alt="Related Product 2">
                    <h4>Green printed T-shirt</h4>
                    <p>$40.00</p>
                    <a href="#">View Product</a>
                </div>
                <div class="product">
                    <img src="related-product3.jpg" alt="Related Product 3">
                    <h4>Yellow printed T-shirt</h4>
                    <p>$55.00</p>
                    <a href="#">View Product</a>
                </div>
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
				<a>About Amazon</a>
				<a>Investor Relations</a>
				<a>Amazon Devices</a>
				<a>Amazon Science</a>
			</ul>

			<ul>
				<p>Get to know</p>
				<a>Careers</a>
				<a>Blog</a>
				<a>About Amazon</a>
				<a>Investor Relations</a>
				<a>Amazon Devices</a>
				<a>Amazon Science</a>
			</ul>

			<ul>
				<p>Get to know</p>
				<a>Careers</a>
				<a>Blog</a>
				<a>About Amazon</a>
				<a>Investor Relations</a>
				<a>Amazon Devices</a>
				<a>Amazon Science</a>
			</ul>

			<ul>
				<p>Get to know</p>
				<a>Careers</a>
				<a>Blog</a>
				<a>About Amazon</a>
				<a>Investor Relations</a>
				<a>Amazon Devices</a>
				<a>Amazon Science</a>
			</ul>
		</div>

		<div class="foot-panel3">
			<div class="logo-image"></div>
		</div>
	</div>

</body>
</html>