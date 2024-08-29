<?php
	session_start(); 

	include 'function.php';
	$shop = new Shop();
	$user = $shop->getUserProfile();

	// Pagination variables
	include 'pagination_variables.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-View</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/style.css">

</head>
<body>

    <header>
        <div class="navbar">

            <div class="nav-logo border">
                <a href="index.php">
                    <div class="logo"></div>
                </a>
            </div>

            <div class="nav-address border">
                <p class="add-first">Delivered to</p>
                <div class="add-icon">
                    <i class="fa-solid fa-location-dot"></i>
                    <p class="add-sec">Rangpur District</p>
                </div>                
            </div>

            <form method="GET" action="index.php" class="nav-search">
                <select class="search-select">
                    <option>All</option>
                </select>
                <input type="search" name="search" class="search-input" placeholder="Search products...">
                <button type="submit" class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>

            <div class="nav-signin border">
                <a href="login.php">
                    <p class="nav-signin-text"><span>Hello, sign in</span></p>
                    <p class="nav-signin-text nav-second">Account & Lists</p>
                </a>
            </div>

            <div class="nav-signin border">
                <p><span>Returns</span></p>
                <p class="nav-second">& Orders</p>
            </div>

            <div class="nav-cart border">
                <a href="cart.php">
                    <i class="fa-solid fa-cart-shopping"></i> 
                    Cart
                </a>
            </div>

            <div class="user-profile">
                <?php if ($user): ?>
                    <img src="photos/<?php echo htmlspecialchars($user['image']); ?>" alt="Profile Image">
                    <a href="user_profile.php"><?php echo htmlspecialchars($user['username']); ?></a>
                <?php else: ?>
                    <a href="login.php">Login</a>
                <?php endif; ?>
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
                <p>Gift-Cards</p>
                <p>Sell</p>
            </div>
            <div class="panel-deals">
                Shop deals in electronics
            </div>
        </div>
    </header>

    <div class="hero-section">
        <div class="hero-messege">
            <p>You are on jaldhaka_bazar.com. You can also first shop on Amazon India for millions of products with first local delivery, <a href="">click here to go jaldhaka_bazar.com</a></p>
        </div>
    </div>

    <div class="shop-section">
        <?php
	        if (empty($products)) 
	        {
	            echo "<p>No products found</p>";
	        } 
	        else 
	        {
	            foreach ($products as $product) 
	            {
	                ?>
	                <div class="card">                    
	                    <img class="card-img" src="admin-area/admin-images/<?php echo $product['product_image']; ?>" alt="">
	                    <div class="card-body">
	                        <div class="card-title">
	                            <p><?php echo $product['product_details']; ?></p>
	                        </div>
	                        <div class="card-price">
	                            <p>price: <?php echo $product['product_price']; ?>/-</p>
	                        </div>
	                        <div class="card-action">
	                            <div class="card-details">
	                                <p><a class=".card-details-link" href="product-details.php?action=edit&id=<?php echo $product['product_id']; ?>">Details</a></p>
	                            </div>
	                            <div class="card-add">
	                                <button><a class=".card-details-link" href="cart.php?action=edit&id=<?php echo $product['product_id']; ?>">ADD TO CART</a></button>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <?php
	            }
	        }
        ?>
    </div>

    <!-- Pagination controls -->
    <div class="pagination">
        <?php
	        $max_pages_to_show = 5; 
	        $start_page = max(1, $page - intval($max_pages_to_show / 2));
	        $end_page = min($totalPages, $start_page + $max_pages_to_show - 1);
	  
	        if ($end_page - $start_page + 1 < $max_pages_to_show) 
	        {
	            $start_page = max(1, $end_page - $max_pages_to_show + 1);
	        }

	        if ($page > 1)
	        {
	            echo '<a href="?page=' . ($page - 1) . '&search=' . $searchTerm . '">&laquo; Previous</a>';
	        }

	        if ($start_page > 1) 
	        {
	            echo '<a href="?page=1&search=' . $searchTerm . '">1</a>';
	            if ($start_page > 2) 
	            {
	                echo '...';
	            }
	        }

	        for ($i = $start_page; $i <= $end_page; $i++) 
	        {
	            echo '<a href="?page=' . $i . '&search=' . $searchTerm . '"';
	            if ($i == $page) 
	            {
	                echo ' class="active"';
	            }
	            echo '>' . $i . '</a>';
	        }

	        if ($end_page < $totalPages) 
	        {
	            if ($end_page < $totalPages - 1) 
	            {
	                echo '...';
	            }
	            echo '<a href="?page=' . $totalPages . '&search=' . $searchTerm . '">' . $totalPages . '</a>';
	        }

	        if ($page < $totalPages) 
	        {
	            echo '<a href="?page=' . ($page + 1) . '&search=' . $searchTerm . '">Next &raquo;</a>';
	        }
        ?>
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
