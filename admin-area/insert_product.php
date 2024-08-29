<?php
	require 'connection.php';

	if (isset($_POST['update'])) 
	{
		$update_product_id		=$_POST['update_product_id'];
		$update_product_code	=$_POST['update_product_code'];
		$update_product_name	= $_POST['update_product_name'];
		$update_product_details	=$_POST['update_product_details'];
		$update_product_price	=$_POST['update_product_price'];
		$update_product_quantity= $_POST['update_product_quantity'];

		$update_product_image_name	=$_FILES['update_product_image']['name'];

		$update_product_image_tmp 	=$_FILES['update_product_image']['tmp_name'];

		$img_directory 	= "admin-images/".$update_product_image_name;

		$sql_update ="UPDATE `product_details` SET `product_id`='$update_product_id',`product_code`='$update_product_code',`product_name`='$update_product_name',`product_details`='$update_product_details',`product_price`='$update_product_price',`product_quantity`='$update_product_quantity',`product_image`='$update_product_image_name' WHERE product_id = $update_product_id";

		$sql_update_query = mysqli_query($connection, $sql_update);

		if ($sql_update_query) 
		{
			move_uploaded_file($update_product_image_tmp, $img_directory);

			header("location: home.php");
		}


	}


	


	if (isset($_POST['submit'])) 
	{
		$product_id 		= $_POST['product_id'];
		$product_code 		= $_POST['product_code'];
		$product_name 		= $_POST['product_name'];
		$product_details 	= $_POST['product_details'];
		$product_price 		= $_POST['product_price'];
		$product_quantity	= $_POST['product_quantity'];

		$product_image 		= $_FILES['product_image']['name'];
		$product_tmp_name	= $_FILES['product_image']['tmp_name'];

		$image_destination	= "admin-images/".$product_image;

		if (move_uploaded_file($product_tmp_name, $image_destination)) 
		{
			$insert = "INSERT INTO `product_details`(`product_id`, `product_code`, `product_name`, `product_details`, `product_price`, `product_quantity`, `product_image`) VALUES('$product_id', '$product_code', '$product_name', '$product_details', '$product_price', '$product_quantity', '$product_image')";

			$insert_query = mysqli_query($connection, $insert);

			if($insert_query)
			{
				header("location: home.php");

				echo "<script> alert('product inserted successfully') </script>";
			}
		}
	}
?>

<?php 

	if (isset($_REQUEST['id']))
	{
		$product_id = $_REQUEST['id'];

		$view_sql = "SELECT * FROM product_details WHERE product_id = $product_id";

		$sql_view_query = mysqli_query($connection, $view_sql);

		$view_count = mysqli_num_rows($sql_view_query);

		if ($view_count>0) 
		{
			while($row = mysqli_fetch_assoc($sql_view_query))
			{
				// $product_view_id = $row['product_id'];
				// $product_view_code = $row['product_code'];
				// $product_view_name = $row['product_name'];
				// $product_view_details = $row['product_details'];
				// $product_view_price = $row['product_price'];
				// $product_view_quantity = $row['product_quantity'];
				// $product_view_image = $row['product_image'];

				?>
			
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert-product</title>

	<link rel="stylesheet" href="../CSS/style.css">
</head>

<body>

<div class="container">
	<div class="form-container">
		<form action="insert_product.php" method="post" enctype="multipart/form-data">
			<div class="form-label">
				<label for="product id"> Product ID </label>
				<input type="text" name="update_product_id" value="<?php echo $product_view_id = $row['product_id']; ?>" >
			</div>

			<div class="form-label">
				<label for="product code"> Product Code </label>
				<input type="text" name="update_product_code" value="<?php echo $row['product_code']; ?>"  required>
			</div>
			
			<div class="form-label">
				<label for="product name"> Product Name </label>
				<input type="text" name="update_product_name" value="<?php echo $row['product_name'];?>"  required>
			</div>

			<div class="form-label">
				<label for="product details"> Product Details </label>
				<input type="text" name="update_product_details" value="<?php echo $row['product_details']; ?>"  required>
			</div>

			<div class="form-label">
				<label for="product price"> Product Price </label>
				<input type="text" name="update_product_price" value="<?php echo $row['product_price'];?>" required>
			</div>

			<div class="form-label">
				<label for="Quantity"> Product Quantity </label>
				<input type="text" name="update_product_quantity" value="<?php echo $row['product_quantity']; ?>"  required>
			</div>

			<div class="form-label">
				<label for="product image"> Product Image </label>
				<input type="file" name="update_product_image" value="<?php echo basename($row['product_image']) ?>" required>
			</div>
			
			<div class="form-label">
				<input type="submit" name="update" value="update">
			</div>
		</form>
	</div>
</div>

</body>
</html>
<?php
}
		}

	?>
		<?php
	}

	else
	{
		?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert-product</title>

	<link rel="stylesheet" href="../CSS/style.css">
</head>

<body>

<div class="container">
	<div class="form-container">
		<form action="insert_product.php" method="post" enctype="multipart/form-data">
			<div class="form-label">
				<label for="product id"> Product ID </label>
				<input type="text" name="product_id" placeholder="Product ID">
			</div>

			<div class="form-label">
				<label for="product code"> Product Code </label>
				<input type="text" name="product_code" placeholder="Product Code" required>
			</div>
			
			<div class="form-label">
				<label for="product name"> Product Name </label>
				<input type="text" name="product_name" placeholder="Product Name" required>
			</div>

			<div class="form-label">
				<label for="product details"> Product Details </label>
				<input type="text" name="product_details" placeholder="Product Details" required>
			</div>

			<div class="form-label">
				<label for="product price"> Product Price </label>
				<input type="text" name="product_price" placeholder="Product price" required>
			</div>

			<div class="form-label">
				<label for="Quantity"> Product Quantity </label>
				<input type="text" name="product_quantity" placeholder="Product Quantity" required>
			</div>

			<div class="form-label">
				<label for="product image"> Product Image </label>
				<input type="file" name="product_image" required>
			</div>
			
			<div class="form-label">
				<input type="submit" name="submit" value="submit">
			</div>
		</form>
	</div>
</div>

</body>
</html>
		<?php

	}

 ?>




