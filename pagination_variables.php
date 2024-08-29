<?php
	$limit = 10; // Number of products per page
	$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
	$offset = ($page - 1) * $limit;

	$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

	if ($searchTerm) 
	{
	    $totalProducts = $shop->countSearchProducts($searchTerm);
	    $products = $shop->searchProducts($searchTerm, $limit, $offset);
	} 
	else 
	{
	    $totalProducts = $shop->countAll();
	    $products = $shop->readAll($limit, $offset);
	}

	$totalPages = ceil($totalProducts / $limit);
?>