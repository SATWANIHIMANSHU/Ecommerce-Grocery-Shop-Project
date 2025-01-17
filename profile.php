<?php
session_start();
include 'database/dbconnect.php';


?>

<?php

// Ensure the user is logged in
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Fetch user's name and image URL from the database
    $query = "SELECT `name` FROM smartbazar WHERE `Sr.no` = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $user_id); // Bind the user ID as an integer
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user data exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $user_name = htmlspecialchars($row['name']);
        // $user_image = htmlspecialchars($row['image_url']); // Assuming image URL is stored in 'image_url'
    } else {
        $user_name = "Unknown User";
        // $user_image = "https://via.placeholder.com/100"; // Placeholder if no image is available
    }
} 
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Grocery Shoppy an Ecommerce Category Bootstrap Responsive Web Template | Contact Us :: w3layouts</title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
        </script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.css" rel="stylesheet">
    <!--pop-up-box-->
    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!--//pop-up-box-->
    <!-- price range -->
    <link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
    <!-- fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <!-- Loader -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!------ Include the above in your HEAD tag ---------->

    <style>


/* Remove the dropdown arrow */
.nav-link::after {
    display: none;
}

/* Remove the hover effect on the nav-link */
.nav-link:hover {
    background-color: transparent !important; /* Override any background color on hover */
    color: inherit !important; /* Prevent text color change on hover */
    box-shadow: none !important; /* Remove box-shadow if Bootstrap adds one */
    text-decoration: none !important; /* Ensure no underline */
    transition: none !important; /* Disable any transitions */
}   


        
        /* Make dropdown visible on hover */
        .dropdown-menu {
            text-align: center;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
            /* Remove the margin to avoid positioning issues */
        }

.manageprofile{
    display: flex;
    padding-top: 50px;
    padding-bottom:50px;
}

        .profile-sidebar {
            width: 250px;
            height: 80vh;
            background-color: #f8f9fa;
            border-right: 2px solid #e9ecef;
            padding: 20px;
            /* padding-top: 30px; */
            /* position: fixed; */
        }

        .profile-sidebar img {
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .profile-sidebar h4 {
            font-weight: 700;
            color: #343a40;
            margin-bottom: 10px;
        }

        .profile-sidebar p {
            color: #6c757d;
        }

        .nav-item {
            margin-bottom: 15px;
        }

        .nav-link {
            color: #495057;
            font-weight: 500;
            cursor: pointer;
        }

        .nav-link:hover {
            background-color: #e9ecef;
            border-radius: 5px;
            color: #007bff;
        }

        .sidebar-footer {
            /* position: absolute; */
            bottom: 20px;
            width: 100%;
        }

        .logout-btn {
            background-color: #dc3545;
            color: white;
            width: 80%;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-weight: 600;
        }

        .logout-btn:hover {
            background-color: #c82333;
        }

        .content-area {
            margin-left: 100px; 
            padding-top: 20px;
        }

        .content-section {
            display: none; /* Hidden by default */
        }

        .active-content {
            display: block; /* Show the active content */
        }

        
        .card {
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
    
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
    
        .toggle-details {
            transition: background-color 0.3s ease;
        }
    
        .toggle-details:focus {
            outline: none;
            box-shadow: none;
        }
        .table-container {
            width: 100%;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
        }
        thead {
            background-color: #007bff;
            color: white;
        }
        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
    </style>
</head>

<body>

    <!-- Loader -->
    <!-- <div class="load">
		<div id="loader">
		  <div class="loader_cube loader_cube--color"></div>
		   <div class="loader_cube loader_cube--glowing"></div>
		</div>
	</div>
	
	<div id="content" style="display: none;"> -->
    <!-- top-header -->
    <div class="header-most-top">
        <p>Grocery Offer Zone Top Deals & Discounts</p>
    </div>
    <!-- //top-header -->
    <!-- header-bot-->
    <div class="header-bot">
        <div class="header-bot_inner_wthreeinfo_header_mid">
            <!-- header-bot-->
            <div class="col-md-4 logo_agile">
                <h1>
                    <a href="index.php">
                        <span>G</span>rocery
                        <span>S</span>hoppy
                        <img src="images/logo2.png" alt=" ">
                    </a>
                </h1>
            </div>
            <!-- header-bot -->
            <div class="col-md-8 header">
                <!-- header lists -->
                <ul>
                    <li>
                        <a class="play-icon popup-with-zoom-anim" href="#small-dialog1">
                            <span class="fa fa-map-marker" aria-hidden="true"></span> Stores</a>
                    </li>

                    <li>
                        <span class="fa fa-phone" aria-hidden="true"></span>  +222 11 4444
                    </li>
                    <li>
                        <span class="fa fa-unlock-alt" aria-hidden="true"></span>
                        <a href="signin.php">Sign In </a>

                    </li>
                    <li>

                        <span class="fa fa-pencil-square-o" aria-hidden="true"></span>
                        <a href="signup.php">Sign Up </a>
                    </li>

                    <span aria-hidden="true"></span>

                    <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa-regular fa-user fa-lg" style="color: #f0530f;"></i>
</a>


                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item  " id="dropdown-item" href="#">Profile</a>
                            <hr>
                            <!-- <a class="dropdown-item " href="#">My Orders</a><hr> -->

                            <a class="dropdown-item " href="#">My Orders</a>
                            <hr>
                            <form action="managecart.php" method="POST">
                                <button type="submit" name="logout_btn" class="btn btn-danger">Logout</button>
                            </form>
                        </div>
                    </li>
                </ul>
                <!-- //header lists -->
                <!-- search -->
                <div class="agileits_search">
                    <form action="#" method="post">
                        <input name="Search" type="search" placeholder="How can we help you today?" required="">
                        <button type="submit" class="btn btn-default" aria-label="Left Align">
                            <span class="fa fa-search" aria-hidden="true"> </span>
                        </button>
                    </form>
                </div>
                <!-- //search -->
                <!-- cart details -->
                <div class="top_nav_right">
                    <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                        <a href="cart.php"><button class="w3view-cart" type="submit" name="submit" value="">
                                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                            </button></a>
                    </div>
                </div>
                <!-- //cart details -->
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <hr>
    <div class="profile">
    <div class="manageprofile">
    <!-- Profile Sidebar -->
    <div class="profile-sidebar">
    <div class="text-center">
        <img src="https://via.placeholder.com/100" alt="User Image" width="100" height="100">
    <?php if (isset($user_name) && !empty($user_name)): ?>
        <!-- Display user image and name -->
        <h4><?php echo htmlspecialchars($user_name); ?></h4>
    <?php else: ?>
        <h4>Please log in to view your account details.</h4>
    <?php endif; ?>
</div>
        <ul>
        <nav class="nav flex-column">
           <li> <a class="nav-link" id="dashboard-link">Account </a></li>
           <li> <a class="nav-link" id="orders-link">Orders</a></li>
           <li><a class="nav-link" id="wishlist-link">Wishlist</a></li>
           <li><a class="nav-link" id="settings-link">Settings</a></li>
        </nav>
    </ul>
        <div class="sidebar-footer">
            <button class="logout-btn">Logout</button>
        </div>
    </div>
    <div class="content-area">
        <!-- Dashboard Section -->
        <div class="content-section active-content" id="dashboard-content">
            <h2>Profile</h2>
            <p>Welcome to your dashboard! Here you can view your activity and stats.</p>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <td colspan="2">User Details</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Ensure the user is logged in
                        if (isset($_SESSION['user_id'])) {
                            $user_id = $_SESSION['user_id'];
            
                            // Prepare the SQL statement to fetch user info
                            $query = "SELECT `Sr.no`, `name`, `email` FROM smartbazar WHERE `Sr.no` = ?";
                            $stmt = $conn->prepare($query);
                            $stmt->bind_param("i", $user_id); // Bind user_id as an integer
                            $stmt->execute();
                            $result = $stmt->get_result();
            
                            // Check if the user exists and fetch data
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<tr>';
                                    echo '<td>Name: ' . htmlspecialchars($row['name']) . '</td>';
                                    echo '<td>Email: ' . htmlspecialchars($row['email']) . '</td>';
                                    echo '</tr>';
                                }
                            } else {
                                echo '<tr><td colspan="2">No user found.</td></tr>';
                            }
                        } else {
                            echo '<tr><td colspan="2">User not logged in.</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="content-section order-section" id="orders-content">
            <h2>Your Orders</h2>
            <p>Here are your recent orders.</p>
            <?php
// Ensure the user is logged in
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Modify the query to fetch orders for the logged-in user
    $sql = "SELECT * FROM `order_manager` WHERE `user_id` = ?"; // Ensure a user_id column exists in the order_manager table
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id); // Assuming user_id is an integer
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo '<table class="table-hover">';
        echo '<thead class="thead-dark">';
        echo '<tr>';
        echo '<th>Order ID</th>';
        echo '<th>Date</th>';
        echo '<th>Total Amount (₹)</th>';
        echo '<th>Items</th>';
        echo '<th>Shipping Address</th>';
        echo '<th>Action</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($row = $result->fetch_assoc()) {
            // Fetch order items from 'user_orders' table based on the order_id
            $order_id = $row['Order_id'];
            $item_sql = "SELECT * FROM `user_orders` WHERE `order_id` = ?";
            $item_stmt = $conn->prepare($item_sql);
            $item_stmt->bind_param("i", $order_id);
            $item_stmt->execute();
            $item_result = $item_stmt->get_result();

            $total_amount = 0; // To calculate the total amount
            $order_items = ''; // To store order items as a string

            if ($item_result->num_rows > 0) {
                while ($item_row = $item_result->fetch_assoc()) {
                    $order_items .= htmlspecialchars($item_row['Item_Name']) . ' (Qty: ' . htmlspecialchars($item_row['Quantity']) . '), ';
                    $total_amount += $item_row['Quantity'] * $item_row['Price']; // Calculate total
                }
                $order_items = rtrim($order_items, ', '); // Remove trailing comma
            } else {
                $order_items = 'No items found';
            }

            echo '<tr>';
            echo '<td>' . htmlspecialchars($row['Order_id']) . '</td>';
            echo '<td>' . htmlspecialchars($row['date']) . '</td>';
            echo '<td>' . number_format($total_amount, 2) . '</td>';
            echo '<td>' . $order_items . '</td>';
            echo '<td>' . htmlspecialchars($row['Address']) . '</td>';
            echo '<td>';
            echo '<a href="adminloginpanel/download.php?order_id=' . $row['Order_id'] . '" class="btn btn-primary btn-sm">Download Invoice</a>';
            echo '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    } else {
        echo '<p class="text-center">No orders found.</p>';
    }
} else {
    echo '<p class="text-center">User not logged in.</p>';
}

mysqli_close($conn); // Close the database connection
?>

            
              
          
          
            
           
    </div>
        
        

        <!-- Wishlist Section -->
        <div class="content-section" id="wishlist-content">
            <h2>Wishlist</h2>
            <p>Here is your wishlist.</p>
        </div>

        <!-- Settings Section -->
        <div class="content-section" id="settings-content">
            <h2>Account Settings</h2>
            <p>Update your profile and preferences here.</p>
        </div>
    </div>

    <div>
</div>

</div>

<footer>
			
				<!-- //footer second section -->
				<!-- footer third section -->
				<div class="footer-info w3-agileits-info">
				<!-- footer categories -->
				<div class="col-sm-6 address-right">
					<div class="col-xs-6 footer-grids">
						<h3>Categories</h3>
						<ul>
							<li>
								<a href="product.php">Grocery</a>
							</li>
							<li>
								<a href="product.php">Fruits</a>
							</li>
							<li>
								<a href="product.php">Soft Drinks</a>
							</li>
							<li>
								<a href="product2.php">Dishwashers</a>
							</li>
							<li>
								<a href="product.php">Biscuits & Cookies</a>
							</li>
							<li>
								<a href="product2.php">Baby Diapers</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 footer-grids agile-secomk">
						<ul>
							<li>
								<a href="product.php">Snacks & Beverages</a>
							</li>
							<li>
								<a href="product.php">Bread & Bakery</a>
							</li>
							<li>
								<a href="product.php">Sweets</a>
							</li>
							<li>
								<a href="product.php">Chocolates & Biscuits</a>
							</li>
							<li>
								<a href="product2.php">Personal Care</a>
							</li>
							<li>
								<a href="product.php">Dried Fruits & Nuts</a>
							</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- //footer categories -->
				<!-- quick links -->
				<div class="col-sm-6 address-right">
					<div class="col-xs-5 footer-grids">
						<h3>Quick Links</h3>
						<ul>
							<li>
								<a href="about.php">About Us</a>
							</li>
							<li>
								<a href="contact.php">Contact Us</a>
							</li>
							<li>
								<a href="help.php">Help</a>
							</li>
							<li>
								<a href="faqs.php">Faqs</a>
							</li>
							<li>
								<a href="signin.php">Sign In</a>
							</li>
							<li>
								<a href="signup.php">Sign Up</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-7 footer-grids">
						<h3>Get in Touch</h3>
						<ul>
							<li>
								<i class="fa fa-map-marker"></i> Northern Buildings, Outer Ring Road, Ahmedabad, 382120, Gujarat, India
							</li>
							<li>
								<i class="fa fa-mobile"></i> +91 9898787876
							</li>
							<li>
								<i class="fa fa-phone"></i> +222 11 4444
							</li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<a href="mailto:example@mail.com">groceryshoppy8989@gmail.com</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- //quick links -->
				<!-- social icons -->
				<!-- <div class="col-sm-2 footer-grids  w3l-socialmk">
					<h3>Follow Us on</h3>
					<div class="social">
						<ul>
							<li>
								
								<i class="fa-brands fa-facebook"></i>
							
							</li>
							<li>
							
							</li>
							<li>
								<a class="icon gp" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
						</ul>
					</div>
					
				</div> -->
				<!-- //social icons -->
				<div class="clearfix"></div>
			</div>
				<!-- //footer third section -->
				<!-- footer fourth section (text) -->
				<div class="agile-sometext">
					<div class="sub-some">
						<h5>Online Grocery Shopping</h5>
						<p>Order online. All your favourite products from the low price online supermarket for grocery
							home delivery in Delhi,
							Gurgaon, Bengaluru, Mumbai and other cities in India. Lowest prices guaranteed on Patanjali,
							Aashirvaad, Pampers, Maggi,
							Saffola, Huggies, Fortune, Nestle, Amul, MamyPoko Pants, Surf Excel, Ariel, Vim, Haldiram's
							and others.</p>
					</div>
					<div class="sub-some">
						<h5>Shop online with the best deals & offers</h5>
						<p>Now Get Upto 40% Off On Everyday Essential Products Shown On The Offer Page. The range
							includes Grocery, Personal Care,
							Baby Care, Pet Supplies, Healthcare and Other Daily Need Products. Discount May Vary From
							Product To Product.</p>
					</div>
					<!-- brands -->
					<div class="sub-some">
						<h5>Popular Brands</h5>
						<ul>
							<li>
								<a href="product.php">Aashirvaad</a>
							</li>
							<li>
								<a href="product.php">Amul</a>
							</li>
							<li>
								<a href="product.php">Bingo</a>
							</li>
							<li>
								<a href="product.php">Boost</a>
							</li>
							<li>
								<a href="product.php">Durex</a>
							</li>
							<li>
								<a href="product.php"> Maggi</a>
							</li>
							<li>
								<a href="product.php">Glucon-D</a>
							</li>
							<li>
								<a href="product.php">Horlicks</a>
							</li>
							<li>
								<a href="product2.php">Head & Shoulders</a>
							</li>
							<li>
								<a href="product2.php">Dove</a>
							</li>
							<li>
								<a href="product2.php">Dettol</a>
							</li>
							<li>
								<a href="product2.php">Dabur</a>
							</li>
							<li>
								<a href="product2.php">Colgate</a>
							</li>
							<li>
								<a href="product.php">Coca-Cola</a>
							</li>
							<li>
								<a href="product2.php">Closeup</a>
							</li>
							<li>
								<a href="product2.php"> Cinthol</a>
							</li>
							<li>
								<a href="product.php">Cadbury</a>
							</li>
							<li>
								<a href="product.php">Bru</a>
							</li>
							<li>
								<a href="product.php">Bournvita</a>
							</li>
							<li>
								<a href="product.php">Tang</a>
							</li>
							<li>
								<a href="product.php">Pears</a>
							</li>
							<li>
								<a href="product.php">Oreo</a>
							</li>
							<li>
								<a href="product.php"> Taj Mahal</a>
							</li>
							<li>
								<a href="product.php">Sprite</a>
							</li>
							<li>
								<a href="product.php">Thums Up</a>
							</li>
							<li>
								<a href="product2.php">Fair & Lovely</a>
							</li>
							<li>
								<a href="product2.php">Lakme</a>
							</li>
							<li>
								<a href="product.php">Tata</a>
							</li>
							<li>
								<a href="product2.php">Sunfeast</a>
							</li>
							<li>
								<a href="product2.php">Sunsilk</a>
							</li>
							<li>
								<a href="product.php">Patanjali</a>
							</li>
							<li>
								<a href="product.php">MTR</a>
							</li>
							<li>
								<a href="product.php">Kissan</a>
							</li>
							<li>
								<a href="product2.php"> Lipton</a>
							</li>
						</ul>
					</div>
					<!-- //brands -->
					<!-- payment -->
					<div class="sub-some child-momu">
						<h5>Payment Method</h5>
						<ul>
							<li>
								<img src="images/pay2.png" alt="">
							</li>
							<li>
								<img src="images/pay5.png" alt="">
							</li>
							<li>
								<img src="images/pay1.png" alt="">
							</li>
							<li>
								<img src="images/pay4.png" alt="">
							</li>
							<li>
								<img src="images/pay6.png" alt="">
							</li>
							<li>
								<img src="images/pay3.png" alt="">
							</li>
							<li>
								<img src="images/pay7.png" alt="">
							</li>
							
							<li>
								<img src="images/pay9.png" alt="">
							</li>
						</ul>
					</div>
					<!-- //payment -->
				</div>
				<!-- //footer fourth section (text) -->
			</div>
		</footer>
		<!-- //footer -->
		<!-- copyright -->
		<div class="copy-right">
			<div class="container">
				<p>© 2025 Grocery Shoppy. All rights reserved
				</p>
			</div>
		</div>
	</div>
    <!-- //copyright -->

    <!-- js-files -->
    <!-- jquery -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- //jquery -->

    <!-- popup modal (for signin & signup)-->
    <script src="js/jquery.magnific-popup.js"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>
    <!-- Large modal -->
    <!-- <script>
		$('#').modal('show');
	</script> -->
    <!-- //popup modal (for signin & signup)-->

    <!-- cart-js -->
    <script src="js/minicart.js"></script>
    <script>
        paypalm.minicartk.render(); //use only unique class names other than paypal1.minicart1.Also Replace same class name in css and minicart.min.js

        paypalm.minicartk.cart.on('checkout', function (evt) {
            var items = this.items(),
                len = items.length,
                total = 0,
                i;

            // Count the number of each item in the cart
            for (i = 0; i < len; i++) {
                total += items[i].get('quantity');
            }

            if (total < 3) {
                alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
                evt.preventDefault();
            }
        });
    </script>
    <!-- //cart-js -->

    <!-- password-script -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- //password-script -->

    <!-- smoothscroll -->
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smoothscroll -->

    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->

    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script>
    $(document).ready(function() {
        // Handle sidebar link clicks
        $('.nav-link').click(function(event) {
            event.preventDefault();
            
            // Get the target content ID
            var target = $(this).data('target');
            
            // Hide all content sections
            $('.content-section').hide();
            
            // Show the selected content section
            $('#' + target).show();
        });
    });
</script>

    <!-- //smooth-scrolling-of-move-up -->

    <!-- for bootstrap working -->
    <script src="js/bootstrap.js"></script>
    <!-- //for bootstrap working -->
    <!-- //js-files -->
    <!-- Loader -->
    <!-- <script>
		window.addEventListener("load", function () {
			// Show loader for 2 seconds
			setTimeout(function () {
				document.getElementById("loader").style.display = "none";
				document.getElementById("content").style.display = "block";
			}, 2000); // 2000ms = 2 seconds
		});
	</script> -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Hide all content sections except the default
            $('.content-section').hide();
            $('#dashboard-content').show();

            // Show the corresponding section when a link is clicked
            $('#dashboard-link').click(function() {
                $('.content-section').hide();
                $('#dashboard-content').show();
            });

            $('#orders-link').click(function() {
                $('.content-section').hide();
                $('#orders-content').show();
            });

            $('#wishlist-link').click(function() {
                $('.content-section').hide();
                $('#wishlist-content').show();
            });

            $('#settings-link').click(function() {
                $('.content-section').hide();
                $('#settings-content').show();
            });
        });
    </script>
     <script>
        $(document).ready(function() {
            // Toggle the visibility of order details
            $(".toggle-details").click(function() {
                $(this).next(".order-details").slideToggle();
                $(this).text($(this).text() === "View Details" ? "Hide Details" : "View Details");
            });
        });
    </script>
</body>

</html>