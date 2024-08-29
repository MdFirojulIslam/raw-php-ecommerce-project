<?php
	
	include'connection.php';

	if (isset($_REQUEST['id'])) 
	{
		$product_id = $_REQUEST['id'];

		$sql_delete_query	= "DELETE FROM product_details WHERE product_id = $product_id";
		$sql_query = mysqli_query($connection, $sql_delete_query);

		if ($sql_query) 
		{
			header("location: home.php");
		}
	}
?>