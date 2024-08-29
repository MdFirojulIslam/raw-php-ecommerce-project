<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ADMIN-panel</title>
	<link rel="stylesheet" href="style.css">

    <style>
        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .footer ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        .footer ul li {
            margin: 0 15px;
        }

        .footer ul li a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>
	 <div class="header">
        <nav class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Logout</a></li>
                <li>
                    <form action="home.php">
                        <input type="search" name="search" placeholder="Search...">
                    </form>
                </li>
            </ul>
        </nav>
    </div>

	<div class="container">
        <ul>
            <li><a href="#">View Products</a></li>
            <li><a href="insert_product.php">Insert Product</a></li>
            <li><a href="#">Insert Categories</a></li>
            <li><a href="#">View Categories</a></li>
            <li><a href="#">Insert Brands</a></li>
            <li><a href="#">VIew Brands</a></li>
            <li><a href="#">All Orders</a></li>
            <li><a href="#">All Payment</a></li>
            <li><a href="#">list Users</a></li>
        </ul>
    </div>

    <div class="show-details">
    	<table>
    		<thead>
    			<tr>
    				<th>Product ID</th>
	    			<th>Product Code</th>
                    <th>Product Name</th>
	    			<th>Product Details</th>
	    			<th>Product Price</th>
	    			<th>Quantity</th>
	    			<th>image</th>
	    			<th>Edit</th>
	    			<th>Delete</th>
    			</tr>

            </thead>

    			<?php
                    include 'connection.php';

                    $sql = "SELECT * FROM product_details";

                    $sql_query = mysqli_query($connection, $sql);

                    $count = mysqli_num_rows($sql_query);

                    if($count>0)
                    {
                        while ($row = mysqli_fetch_assoc($sql_query)) 
                        {

                ?>

                        <tbody>
                            <tr>
                                <td> <?php echo $row['product_id']; ?> </td>
                                <td> <?php echo $row['product_code']; ?></td>
                                <td> <?php echo $row['product_name']; ?></td>
                                <td> <?php echo $row['product_details']; ?></td>
                                <td> <?php echo $row['product_price']; ?></td>
                                <td> <?php echo $row['product_quantity']; ?></td>
                                <td> <img src="admin-images/<?php echo $row['product_image']; ?> " class="product-image"></td>

                                <td> <a href="insert_product.php?id=<?php echo $row['product_id']; ?>">EDIT</a></td>


                                <td> <a href="delete.php?id=<?php echo $row['product_id']; ?>">DELETE</a></td>
                            </tr>
                            
                        </tbody>

                <?php
                            // $id                 = $row['product_id'];
                            // $product_code       = $row['product_code'];
                            // $product_name       = $row['product_name'];
                            // $product_details    = $row['product_details'];
                            // $product_price      = $row['product_price'];
                            // $product_quantity   = $row['product_quantity'];
                            // $product_image      = $row['product_image'];
                        }
                    }
                ?>
    		
    	</table>
    </div>

    <div class="footer">
        <ul>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        <p>&copy; 2024 Jaldhaka-bazar. All rights reserved.</p>
    </div>
</body>
</html>