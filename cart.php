<?php
    include 'function.php';

    $user = new shop();

    if (isset($_GET['action']) && $_GET['action']=='edit')
    {
        $id = (int)$_GET['id'];
        $result = $user->cart($id);
    }
?>
   




<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Cart</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="CSS/style.css">

	<style>
        .cart-title {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2em;
            color: #333;
        }
        .cart-details {
            max-width: 900px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .cart-details table {
            width: 100%;
            border-collapse: collapse;
        }

        .cart-details th,
        .cart-details td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .cart-details th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        .cart-details tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .product-image {
            width: 100px;
            height: auto;
            border-radius: 5px;
        }

        .checkout-btn, .remove-btn {
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .checkout-btn:hover {
            background-color: #218838;
        }

        .remove-btn {
            background-color: #ff6f61;
        }

        .remove-btn:hover {
            background-color: #ff4b3a;
        }

        .total-price {
            font-weight: bold;
            color: #333;
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

    <div class="cart-details">
    	<h3 class="cart-title">YOUR SHOPING CART</h3>
        <table>
            <thead>
                <tr>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Quantity</th>
                    <th>Processed To Checkout</th>
                    <th>Remove</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                	<?php $quantity = 1; ?>
                    <td><img class="product-image" src="admin-area/admin-images/<?php echo $result['product_image']; ?>" alt=""></td>
                    <td><?php echo $result['product_name'];?></td>
                    <td><?php echo $result['product_price'];?></td>
                    <td><input type="number" value="<?php $quantity ?>" min="1"></td>
                    <td><a href="insert_product.php?id=1" class="checkout-btn">Checkout</a></td>
                    <td><a href="delete.php?id=1" class="remove-btn">Remove</a></td>
                    <td class="total-price"><?php echo $result['product_price'];?>-/</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Total = </td>
                    <td class="total-price">500 taka</td>
                </tr>
            </tbody>
        </table>
    </div>



	
<!-- 
	<div class="cart-container">
		<table class="cart-table" border="1">
			<tr class="cart-thead">
				<th>Product</th>
				<th>Product Details</th>
				<th>Quantity</th>
				<th>Subtotal</th>
			</tr>
			<tr class="cart-body">
				<td><img src="box1_image.jpeg" alt=""></td>
				<td>sdfgsgsfdgsgs</td>
				<td><input type="number" value="1"></td>
				<td>2551/=</td>
			</tr>

		</table>		
	</div> -->

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