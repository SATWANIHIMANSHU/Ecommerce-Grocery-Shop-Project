<?php
include('dbconnect.php');  // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $name = $_POST['name'];
    $price = $_POST['price'];
    $old_price = isset($_POST['old_price']) ? $_POST['old_price'] : NULL;
    $is_new = isset($_POST['is_new']) ? 1 : 0;
    $page = $_POST['page'];  // The selected page
   

    // Handle image upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // Insert the product into the database
        $query = "INSERT INTO products_main (name, image, price, old_price, is_new, page) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssddss", $name, $target_file, $price, $old_price, $is_new, $page);

        if ($stmt->execute()) {
            echo "<script>alert('Product added successfully!');</script>";
        } else {
            echo "<script>alert('Error: Unable to add product.');</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Error uploading image.');</script>";
    }

    $conn->close();
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content='IE=edge' http-equiv=X-UA-Compatible>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MS Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="#">

    <!-- Core Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-slider.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            background-color: #f7f7f7;
        }

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>

</head>

<body>
    <div class="overlay-background"></div>
    <!-- ########## START: Setting Box ########## -->
    <!-- <div class="theme-setting-wrapper">
        <button type="button" id="settings-trigger" class="btn btn-primary waves-effect waves-primary">
            <i class="la la-cog"></i>
        </button>
        <div class="theme-setting-sidebar">
            <div class="h-100">
                <div class="mt-4 d-flex align-items-center flex-wrap px-4">
                    <h4 class="font-weight-bold">THEME CUSTOMIZER</h4>
                    <small>Customize &amp; Preview in Real Time</small>
                </div>
                <hr>
                <div class="theme-setting-sidebar-scroll">
                    <div class="px-4">
                        <div>
                            <h5 class="mb-2">Dark Mode</h5>
                            <div class="d-flex align-items-center">
                                <div class="radio theme-radio mr-4">
                                    <input type="radio" id="light" name="light" value="theme-light">
                                    <label for="light">Light</label>
                                </div>
                                <div class="radio theme-radio mr-4">
                                    <input type="radio" id="dark" name="light" value="theme-dark">
                                    <label for="dark">Dark</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div> -->
    <!-- ########## END: Setting Box ########## -->

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-sideleft">
        <a id="remove-menu" class="la la-close d-xl-none"></a>
        <div class="br-logo d-flex justify-content-center align-items-center">
            <a href="index.php"><img src="assets/image/logo.png" alt="MS Admin Panel" width="80" /></a>
        </div>
        <ul class="custom-scroll">
            <li><a href="main.php" class="waves-effect waves-primary"><i class="la la-dashboard"></i>Dashboard</a></li>
            <li class="active"><a href="insert.php" class="waves-effect waves-primary"><i
                        class="la la-cart-arrow-down"></i>Insert</a></li>
            <li><a href="showdata.php" class="waves-effect waves-primary"><i class="la la-edit"></i>Edit Product</a>
            </li>
            <li><a href="Delete.php" class="waves-effect waves-primary"><i class="la la-trash"></i></i>Delete
                    Product</a></li>
            <li><a href="Showuser.php" class="waves-effect waves-primary"><i class="la la-user"></i>Users</a></li>
            <li><a href="orders.php" class="waves-effect waves-primary"><i class="la la-check-circle"></i>Orders</a>
            </li>
            <li><a href="payments.php" class="waves-effect waves-primary"><img src="uploads/payment-method.png" height="60px" width="60px"><br>Payments</a></li>
            <li><a href="Feedbackform.php" class="waves-effect waves-primary"><i class="la la-comment"></i>Feedbacks</a>
            </li>
            <!-- <li><a href="insert.php" class="waves-effect waves-primary"><i class="la la-clone"></i>Elements</a></li> -->
            <!-- <li><a href="javascript:;" class="waves-effect waves-primary"><i
                        class="la la-bullhorn"></i>Campaign</a></li> -->
            <!-- <li class="dropdown-sub-menu">
                <a href="javascript:;" class="waves-effect waves-primary"><i
                            class="la la-users"></i>Customers</a> -->
            <!-- <ul class="sub-menu">
                        <li><a href="javascript:;"><i class="la la-users"></i>New Customers</a></li>
                        <li><a href="javascript:;"><i class="la la-users"></i>Old Customers</a></li>
                    </ul> 
            </li>-->
            <!-- 
                            <li><a href="javascript:;" class="waves-effect waves-primary"><i
                            class="la la-cart-arrow-down"></i>Orders</a></li>
            <li><a href="javascript:;" class="waves-effect waves-primary"><i
                            class="la la-wechat"></i>Messages</a></li>
            <li><a href="javascript:;" class="waves-effect waves-primary"><i class="la la-bank"></i>Payments</a>
            </li>
            <li><a href="javascript:;" class="waves-effect waves-primary"><i class="la la-image"></i>Media
                        Manager</a></li>
            <li><a href="javascript:;" class="waves-effect waves-primary"><i class="la la-cog"></i>Settings</a>
            </li> -->
        </ul>
    </div>
    <!-- ########## END: LEFT PANEL ########## -->

    <header class="header fixed-top d-flex align-items-center">
        <!-- ########## START: HEAD PANEL ########## -->
        <div class="br-header d-flex w-100">
            <a id="add-menu" class="la la-navicon d-flex d-xl-none align-items-center justify-content-center"></a>
            <div class="br-header-left">
                <a href="javascript:;" class="searchbar-toggle la la-search d-flex d-md-none"></a>
                <form class="searchbar d-flex align-items-center pl-3">
                    <i class="la la-search"></i>
                    <input class="form-control border-0 pl-2" type="search" placeholder="Search...">
                </form>
            </div>
            <!-- br-header-left -->
            <div class="br-header-right ml-auto">
                <nav class="nav">

                    <!-- dropdown -->

                    <!-- dropdown -->
                    <div class="dropdown">
                        <a href="" class="nav-link-profile d-flex dropdown-toggle" data-toggle="dropdown"
                            id="dropdownprofile">

                            <i class="la la-user"></i>
                            <!-- <img src="assets/image/img3.jpg" class="rounded" alt="" width="50"> -->
                            <span class="logged-name px-3">Himanshu Satwani <br><small class="pt-3">Admin</small></span>
                            <i class="profile-dropdown la la-caret-square-o-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-header dropdown-menu-user"
                            aria-labelledby="dropdownprofile">
                            <div class="text-center">
                                <a href=""></a>
                                <h6 class="logged-fullname font-weight-bold mt-2">Himanshu Satwani</h6>
                                <p class="my-0">himanshu89@gmail.com</p>
                            </div>
                            <hr>
                            <div class="main">
                                <form action="logoutbtn.php" method="POST">
                                    <button type="submit" name="logout_btn" class="btn btn-danger w-100">Logout</button>
                                </form>


                            </div>
                            <!-- <ul class="list-unstyled user-profile-nav">
                                <li><a href="javascript:;" class=" waves-effect waves-light"><i class="la la-user"></i>
                                            Edit Profile</a></li>
                                <li><a href="javascript:;" class=" waves-effect waves-light"><i class="la la-cog"></i>
                                            Settings</a></li>
                                <li><a href="javascript:;" class=" waves-effect waves-light"><i
                                                class="la la-download"></i> Downloads</a></li>
                                <li><a href="javascript:;" class=" waves-effect waves-light"><i
                                                class="la la-star-o"></i> Favorites</a></li>
                                <li><a href="javascript:;" class=" waves-effect waves-light"><i class="la la-file"></i>
                                            Collections</a></li>
                                <li><a href="javascript:;" class=" waves-effect waves-light"><i
                                                class="la la-power-off"></i> Sign Out</a></li>
                            </ul> -->
                        </div>
                        <!-- dropdown-menu -->
                    </div>
                    <!-- dropdown -->
                </nav>
            </div>
            <!-- br-header-right -->
        </div>
        <!-- br-header -->
        <!-- ########## END: HEAD PANEL ########## -->
    </header>
    <!-- ########## START: MAIN PANEL ########## -->
    <section class="mainpanel">
        <div class="pagebody">
            <div class="new">

                <?php if (isset($_SESSION['message'])): ?>
                <p class="message">
                    <?= $_SESSION['message'] ?>
                </p>
                <?php unset($_SESSION['message']); ?>
                <?php endif; ?>

                <div class="container">
                    <div class="form-container">
                        <h2 class="form-title text-center">Add New Product</h2>
                        <form action="insert.php" method="POST" enctype="multipart/form-data">
                            <!-- Product Name -->

                            <div class="mb-3">
                                <label for="productName" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="productName" name="name" required>
                            </div>

                            <!-- Price -->
                            <div class="mb-3">
                                <label for="productPrice" class="form-label">Price ($)</label>
                                <input type="number" step="0.01" class="form-control" id="productPrice" name="price"
                                    required>
                            </div>

                            <!-- Old Price -->
                            <div class="mb-3">
                                <label for="oldProductPrice" class="form-label">Old Price ($)</label>
                                <input type="number" step="0.01" class="form-control" id="oldProductPrice"
                                    name="old_price" required>
                            </div>

                            <!-- Product Page/Category -->
                            <label for="oldProductPrice" class="form-label">Product Page/Category</label>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="page" id="home" value="home">
                                    <label class="form-check-label" for="home">
                                        Home
                                    </label>
                                </div>

                                <!-- Radio Button 2 -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="page" id="kitchen"
                                        value="kitchen">
                                    <label class="form-check-label" for="kitchen">
                                        Kitchen
                                    </label>
                                </div>

                                <!-- Radio Button 3 -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="page" id="household"
                                        value="household">
                                    <label class="form-check-label" for="household">
                                        Household
                                    </label>
                                </div>
                            </div>

                          


                            <!-- Product Image -->
                            <div class="mb-3">
                                <label for="productImage" class="form-label">Upload Image</label>
                                <input class="form-control" type="file" id="productImage" name="image" required>
                            </div>

                            <!-- Is it New? -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="isNew" name="is_new">
                                <label class="form-check-label" for="isNew">Is it new?</label>
                            </div>
                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Add Product</button>
                            </div>
                        </form>
                    </div>
                </div>


                <!-- --======= Start UI elememnts ======= -->
                <!-- <div class="pagetitle">
                <h4>UI elememnts</h4>
            </div>
            Start Radio Button
            <div class="card mb-5">
                <div class="card-header py-4">
                    <h5 class="text-secondary font-weight-bold mb-0">UI Radio</h5>
                </div>
                <div class="card-body">
                    <ul class="d-flex align-items-center flex-wrap">
                        <li>
                            <div class="radio mr-4 mb-3 mb-md-0">
                                <input type="radio" checked id="radio-primary" name="radio-color">
                                <label for="radio-primary">Primary</label>
                            </div>
                        </li>
                        <li>
                            <div class="radio radio-success mr-4 mb-3 mb-md-0">
                                <input type="radio" id="radio-success" name="radio-color">
                                <label for="radio-success">Success</label>
                            </div>
                        </li>
                        <li>
                            <div class="radio radio-danger mr-4 mb-3 mb-md-0">
                                <input type="radio" id="radio-danger" name="radio-color">
                                <label for="radio-danger">Danger</label>
                            </div>
                        </li>
                        <li>
                            <div class="radio radio-warning mr-4 mb-3 mb-md-0">
                                <input type="radio" id="radio-warning" name="radio-color">
                                <label for="radio-warning">Warning</label>
                            </div>
                        </li>
                        <li>
                            <div class="radio radio-dark mr-4 mb-3 mb-md-0">
                                <input type="radio" id="radio-dark" name="radio-color">
                                <label for="radio-dark">Dark</label>
                            </div>
                        </li>
                        <li>
                            <div class="radio radio-light mr-4 mb-3 mb-md-0">
                                <input type="radio" id="radio-light" name="radio-color">
                                <label for="radio-light">Light</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            End Radio Button
            Start Checkbox Button
            <div class="card mb-5">
                <div class="card-header py-4">
                    <h5 class="text-secondary font-weight-bold mb-0">UI Checkbox</h5>
                </div>
                <div class="card-body">
                    <ul class="d-flex align-items-center flex-wrap">
                        <li>
                            <div class="checkbox mr-4 mb-3 mb-md-0">
                                <input type="checkbox" checked id="checkbox-primary" name="checkbox-color">
                                <label for="checkbox-primary">Primary</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox checkbox-success mr-4 mb-3 mb-md-0">
                                <input type="checkbox" checked id="checkbox-success" name="checkbox-color">
                                <label for="checkbox-success">Success</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox checkbox-danger mr-4 mb-3 mb-md-0">
                                <input type="checkbox" checked id="checkbox-danger" name="checkbox-color">
                                <label for="checkbox-danger">Danger</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox checkbox-warning mr-4 mb-3 mb-md-0">
                                <input type="checkbox" id="checkbox-warning" name="checkbox-color">
                                <label for="checkbox-warning">Warning</label>
                            </div>
                        </li>

                        <li>
                            <div class="checkbox checkbox-dark mr-4 mb-3 mb-md-0">
                                <input type="checkbox" id="checkbox-dark" name="checkbox-color">
                                <label for="checkbox-dark">Dark</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox checkbox-light mr-4 mb-3 mb-md-0">
                                <input type="checkbox" id="checkbox-light" name="checkbox-color">
                                <label for="checkbox-light">Light</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            End Checkbox Button
            Start Switch Button
            <div class="card mb-5">
                <div class="card-header py-4">
                    <h5 class="text-secondary font-weight-bold mb-0">UI Switch</h5>
                </div>
                <div class="card-body">
                    <ul class="d-flex align-items-center flex-wrap">
                        <li class="mr-4 mb-3 mb-md-0">
                            <label>Primary</label>
                            <div class="custom-switch">
                                <input type="checkbox" checked class="custom-control-input" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1"></label>
                            </div>
                        </li>
                        <li class="mr-4 mb-3 mb-md-0">
                            <label>Success</label>
                            <div class="success-switch custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2"></label>
                            </div>
                        </li>
                        <li class="mr-4 mb-3 mb-md-0">
                            <label>Danger</label>
                            <div class="danger-switch custom-switch">
                                <input type="checkbox" checked class="custom-control-input" id="customSwitch3">
                                <label class="custom-control-label" for="customSwitch3"></label>
                            </div>
                        </li>
                        <li class="mr-4 mb-3 mb-md-0">
                            <label>Warning</label>
                            <div class="warning-switch custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                <label class="custom-control-label" for="customSwitch4"></label>
                            </div>
                        </li>
                        <li class="mr-4 mb-3 mb-md-0">
                            <label>Dark</label>
                            <div class="dark-switch custom-switch">
                                <input type="checkbox" checked class="custom-control-input" id="customSwitch5">
                                <label class="custom-control-label" for="customSwitch5"></label>
                            </div>
                        </li>
                        <li class="mr-4 mb-3 mb-md-0">
                            <label>Light</label>
                            <div class="light-switch custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch6">
                                <label class="custom-control-label" for="customSwitch6"></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            End Switch Button
            Start Alert
            <div class="card mb-5">
                <div class="card-header py-4">
                    <h5 class="text-secondary font-weight-bold mb-0">UI Alert</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        Primary Alert
                        <div class="col-12 col-lg-4">
                            <div class="alert alert-primary" role="alert">
                                Primary alert!
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="alert alert-primary" role="alert">
                                Primary alert with <a href="javascript:;" class="alert-link">link</a>.
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <strong>Primary alert</strong> with close button.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        Success Alert
                        <div class="col-12 col-lg-4">
                            <div class="alert alert-success" role="alert">
                                Success alert!
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="alert alert-success" role="alert">
                                Success alert with <a href="javascript:;" class="alert-link">link</a>.
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>success alert</strong> with close button.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                        </div>
                        Danger Alert
                        <div class="col-12 col-lg-4">
                            <div class="alert alert-danger" role="alert">
                                Danger alert!
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="alert alert-danger" role="alert">
                                Danger alert with <a href="javascript:;" class="alert-link">link</a>.
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Danger alert</strong> with close button.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                            </div>
                        </div>
                        Warning Alert
                        <div class="col-12 col-lg-4">
                            <div class="alert alert-warning" role="alert">
                                Warning alert!
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="alert alert-warning" role="alert">
                                Warning alert with <a href="javascript:;" class="alert-link">link</a>.
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Warning alert</strong> with close button.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                            </div>
                        </div>
                        Dark Alert
                        <div class="col-12 col-lg-4">
                            <div class="alert alert-dark" role="alert">
                                Dark alert!
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="alert alert-dark" role="alert">
                                Dark alert with <a href="javascript:;" class="alert-link">link</a>.
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                <strong>Dark alert</strong> with close button.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                            </div>
                        </div>
                        Light Alert
                        <div class="col-12 col-lg-4">
                            <div class="alert alert-light" role="alert">
                                Light alert!
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="alert alert-light" role="alert">
                                Light alert with <a href="javascript:;" class="alert-link">link</a>.
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="alert alert-light alert-dismissible fade show" role="alert">
                                <strong>Light alert</strong> with close button.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
                <!-- End Alert -->
                <!-- --======= End UI elememnts =======-- -->
            </div>
    </section>
    <!-- ########## END: MAIN PANEL ########## -->

</body>

<script src="assets/scripts/jquery.min.js"></script>
<script src="assets/scripts/popper.min.js"></script>
<script src="assets/scripts/bootstrap-slider.min.js"></script>
<script src="assets/scripts/bootstrap.min.js"></script>
<script src="assets/scripts/bootstrap.bundle.min.js"></script>
<script src="assets/scripts/bootstrap-select.min.js"></script>
<script src="assets/scripts/bootstrap-tooltip-custom-class.js"></script>
<script src="assets/scripts/jquery.mCustomScrollbar.js"></script>
<script src="assets/scripts/datatables.min.js"></script>
<script src="assets/scripts/ripple.min.js"></script>
<script src="assets/scripts/custome.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</html>