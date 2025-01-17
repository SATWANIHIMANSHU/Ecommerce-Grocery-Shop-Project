<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Grocery Shoppy an Ecommerce Category Bootstrap Responsive Web Template | Faqs :: w3layouts</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
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
		<!-- <link rel="stylesheet" href="css/loader.css"> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


<style>
	/* Make dropdown visible on hover */
	.dropdown-menu{
		text-align: center;
	}
	.dropdown:hover .dropdown-menu {
		display: block;
		margin-top: 0; /* Remove the margin to avoid positioning issues */
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
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<i class="fa-regular fa-user fa-lg " style="color: #f0530f;"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
		<a class="dropdown-item  " id="dropdown-item" href="profile.php" >Profile</a><hr>
          <!-- <a class="dropdown-item " href="#">My Orders</a><hr> -->
         
		  <a class="dropdown-item " href="profile.php">My Orders</a><hr>
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
	<!-- shop locator (popup) -->
	<!-- Button trigger modal(shop-locator) -->
	
	<!-- //shop locator (popup) -->
	<!-- signin Model -->
	<!-- Modal1 -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In </h3>
						<p>
							Sign In now, Let's start your Grocery Shopping. Don't have an account?
							<a href="#" data-toggle="modal" data-target="#myModal2">
								Sign Up Now</a>
						</p>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="User Name" name="Name" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>
							<input type="submit" value="Sign In">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //signin Model -->
	<!-- signup Model -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up</h3>
						<p>
							Come join the Grocery Shoppy! Let's set up your Account.
						</p>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Name" name="Name" required="">
							</div>
							<div class="styled-input">
								<input type="email" placeholder="E-mail" name="Email" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" id="password1" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Confirm Password" name="Confirm Password" id="password2" required="">
							</div>
							<input type="submit" value="Sign Up">
						</form>
						<p>
							<a href="#">By clicking register, I agree to your terms</a>
						</p>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal2 -->
	<!-- //signup Model -->
	<!-- //header-bot -->
	<!-- navigation -->
	<div class="ban-top">
		<div class="container">
			<div class="agileits-navi_search">
				<form action="#" method="post">
					<select id="agileinfo-nav_search" name="agileinfo_search" required="">
						<option value="">All Categories</option>
						<option value="Kitchen">Kitchen</option>
						<option value="Household">Household</option>
						<option value="Snacks &amp; Beverages">Snacks & Beverages</option>
						<option value="Personal Care">Personal Care</option>
						<option value="Gift Hampers">Gift Hampers</option>
						<option value="Fruits &amp; Vegetables">Fruits & Vegetables</option>
						<option value="Baby Care">Baby Care</option>
						<option value="Soft Drinks &amp; Juices">Soft Drinks & Juices</option>
						<option value="Frozen Food">Frozen Food</option>
						<option value="Bread &amp; Bakery">Bread & Bakery</option>
						<option value="Sweets">Sweets</option>
					</select>
				</form>
			</div>
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
								data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li>
									<a class="nav-stylehead" href="index.php">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown"
										role="button" aria-haspopup="true" aria-expanded="false">Kitchen
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="agile_inner_drop_nav_info">
											<div class="col-sm-4 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li>
														<a href="product.php">Bakery</a>
													</li>
													<li>
														<a href="product.php">Baking Supplies</a>
													</li>
													<li>
														<a href="product.php">Coffee, Tea & Beverages</a>
													</li>
													<li>
														<a href="product.php">Dried Fruits, Nuts</a>
													</li>
													<li>
														<a href="product.php">Sweets, Chocolate</a>
													</li>
													<li>
														<a href="product.php">Spices & Masalas</a>
													</li>
													<li>
														<a href="product.php">Jams, Honey & Spreads</a>
													</li>
												</ul>
											</div>
											<div class="col-sm-4 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li>
														<a href="product.php">Pickles</a>
													</li>
													<li>
														<a href="product.php">Pasta & Noodles</a>
													</li>
													<li>
														<a href="product.php">Rice, Flour & Pulses</a>
													</li>
													<li>
														<a href="product.php">Sauces & Cooking Pastes</a>
													</li>
													<li>
														<a href="product.php">Snack Foods</a>
													</li>
													<li>
														<a href="product.php">Oils, Vinegars</a>
													</li>
													<li>
														<a href="product.php">Meat, Poultry & Seafood</a>
													</li>
												</ul>
											</div>
											<div class="col-sm-4 multi-gd-img">
												<img src="images/nav.png" alt="">
											</div>
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown"
										role="button" aria-haspopup="true" aria-expanded="false">Household
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="agile_inner_drop_nav_info">
											<div class="col-sm-6 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li>
														<a href="product2.php">Kitchen & Dining</a>
													</li>
													<li>
														<a href="product2.php">Detergents</a>
													</li>
													<li>
														<a href="product2.php">Utensil Cleaners</a>
													</li>
													<li>
														<a href="product2.php">Floor & Other Cleaners</a>
													</li>
													<li>
														<a href="product2.php">Disposables, Garbage Bag</a>
													</li>
													<li>
														<a href="product2.php">Repellents & Fresheners</a>
													</li>
													<li>
														<a href="product2.php"> Dishwash</a>
													</li>
												</ul>
											</div>
											<div class="col-sm-6 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li>
														<a href="product2.php">Pet Care</a>
													</li>
													<li>
														<a href="product2.php">Cleaning Accessories</a>
													</li>
													<li>
														<a href="product2.php">Pooja Needs</a>
													</li>
													<li>
														<a href="product2.php">Crackers</a>
													</li>
													<li>
														<a href="product2.php">Festive Decoratives</a>
													</li>
													<li>
														<a href="product2.php">Plasticware</a>
													</li>
													<li>
														<a href="product2.php">Home Care</a>
													</li>
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								<li class="">
									<a class="nav-stylehead" href="about.php">About Us</a>
								</li>
								<li class=" active">
									<a class="nav-stylehead" href="faqs.php">Faqs</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="help.php">Help</a>
								</li>
								
								<li class="">
									<a class="nav-stylehead" href="contact.php">Contact</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						<i>|</i>
					</li>
					<li>Faqs</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- FAQ-help-page -->
	<div class="faqs-w3l">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Faqs
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<h3 class="w3-head">Top 10 Frequently asked questions</h3>
			<div class="faq-w3agile">
				<ul class="faq">
					<li class="item1">
						<a href="#" title="click here">How can I create an account?</a>
						<ul>
							<li class="subitem1">
								<p> You can create an account by clicking the "Sign Up" button at the top right of the homepage and following the registration steps.</p>
							</li>
						</ul>
					</li>
					<li class="item2">
						<a href="#" title="click here">What are your store hours?</a>
						<ul>
							<li class="subitem1">
								<p> Our store operates 24/7 for online orders. For physical stores, you can check the store locator for exact timings.</p>
							</li>
						</ul>
					</li>
					<li class="item3">
						<a href="#" title="click here">What should I do if I receive damaged or wrong products?</a>
						<ul>
							<li class="subitem1">
								<p>If you receive a damaged or incorrect item, please contact our customer support within 24 hours for assistance.</p>
							</li>
						</ul>
					</li>
					<li class="item4">
						<a href="#" title="click here">How do I place an order?</a>
						<ul>
							<li class="subitem1">
								<p>You can browse through our categories, add items to your cart, and proceed to checkout to complete your order.</p>
							</li>
						</ul>
					</li>
					<li class="item5">
						<a href="#" title="click here">Do I need to create an account to place an order?</a>
						<ul>
							<li class="subitem1">
								<p>Yes, creating an account helps us provide better service, track your orders, and offer personalized deals.</p>
							</li>
						</ul>
					</li>
					<li class="item6">
						<a href="#" title="click here">Are the products on your website fresh?</a>
						<ul>
							<li class="subitem1">
								<p>Yes, we ensure all our fresh produce is sourced daily from trusted suppliers.</p>
							</li>
						</ul>
					</li>
					<li class="item7">
						<a href="#" title="click here">What delivery options do you offer?</a>
						<ul>
							<li class="subitem1">
								<p>We offer home delivery and in-store pickup options depending on your location.</p>
							</li>
						</ul>
					</li>
					<li class="item8">
						<a href="#" title="click here">How can I contact customer support?</a>
						<ul>
							<li class="subitem1">
								<p>You can contact our support team via live chat, email, or phone from 9 AM to 9 PM.</p>
							</li>
						</ul>
					</li>
					<li class="item9">
						<a href="#" title="click here">Do you offer international shipping?</a>
						<ul>
							<li class="subitem1">
								<p>No, we currently deliver only within select regions.</p>
							</li>
						</ul>
					</li>
					<li class="item10">
						<a href="#" title="click here">Can I shop for groceries using your mobile app?</a>
						<ul>
							<li class="subitem1">
								<p>Yes, you can download our app from the App Store or Google Play to shop on the go.</p>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //FAQ-help-page -->

	<!-- newsletter -->
	
	<!-- //newsletter -->
	<!-- footer -->
	<footer>
			<div class="container">
				<!-- footer first section -->
				
				<!-- //footer first section -->
				<!-- footer second section -->
				<div class="w3l-grids-footer">
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-download" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>Download Invoice</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-refresh" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>Free & Easy Returns</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa-solid fa-anchor" aria-hidden="true"></span>
						
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>Safe & Secure Transaction</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
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

	<!-- script for tabs -->
	<script>
		$(function () {

			var menu_ul = $('.faq > li > ul'),
				menu_a = $('.faq > li > a');

			menu_ul.hide();

			menu_a.click(function (e) {
				e.preventDefault();
				if (!$(this).hasClass('active')) {
					menu_a.removeClass('active');
					menu_ul.filter(':visible').slideUp('normal');
					$(this).addClass('active').next().stop(true, true).slideDown('normal');
				} else {
					$(this).removeClass('active');
					$(this).next().stop(true, true).slideUp('normal');
				}
			});

		});
	</script>
	<!-- script for tabs -->

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
</body>

	</html>