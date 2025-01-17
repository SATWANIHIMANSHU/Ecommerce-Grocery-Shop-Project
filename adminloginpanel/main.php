<?php
ob_start(); // Start output buffering
session_start();

// Check if the user is logged in
if (!isset($_SESSION['AdminLoginId'])) {
    // Redirect to the login page if not logged in
    header("Location: index.php");
    exit();
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
    <link rel="shortcut icon" type="image/png" href="#">

    <!-- Core Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-slider.css">

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
        </div> -->
    </div>
    <!-- ########## END: Setting Box ########## -->

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-sideleft">
        <a id="remove-menu" class="la la-close d-xl-none"></a>
        <div class="br-logo d-flex justify-content-center align-items-center">
            <a href="index.php"><img src="assets/image/logo.png" alt="MS Admin Panel" width="80" /></a>
        </div>
        <ul class="custom-scroll">
            <li class="active"><a href="main.php" class="waves-effect waves-primary"><i
                        class="la la-dashboard"></i>Dashboard</a></li>
                        <li><a href="insert.php" class="waves-effect waves-primary"><i
                        class="la la-cart-arrow-down"></i>Insert</a></li>
                        <li><a href="showdata.php" class="waves-effect waves-primary"><i class="la la-edit"></i>Edit Product</a></li>
                        <li><a href="Delete.php" class="waves-effect waves-primary"><i class="la la-trash"></i></i>Delete Product</a></li>
                        <li ><a href="Showuser.php" class="waves-effect waves-primary"><i class="la la-user"></i>Users</a></li>
                        <li><a href="orders.php" class="waves-effect waves-primary"><i class="la la-check-circle"></i>Orders</a></li>
                        <li><a href="payments.php" class="waves-effect waves-primary"><img src="uploads/payment-method.png" height="60px" width="60px"><br>Payments</a></li>
                        <li><a href="Feedbackform.php" class="waves-effect waves-primary"><i class="la la-comment"></i>Feedbacks</a></li>
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
                    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <button type="submit" name="logout_btn" class="btn btn-danger w-100">Logout</button>
    </form>

    <?php
    // Check if the logout button was clicked
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout_btn'])) {
        // Unset all session variables
   
        
        // Destroy the session
        session_destroy();

        // Ensure the session cookie is deleted
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, 
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        // Redirect to the login page
        header('Location: index.php');
        exit();
    }
    ?>
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
    <?php
// Check if the logout button was clicked
if (isset($_POST['logout_btn'])) {
    
    session_destroy();  // Destroy the session

    // Redirect the user to the login page or homepage
    header('Location: index.php');
    exit();
}
?>

    <!-- ########## START: MAIN PANEL ########## -->
    <section class="mainpanel">
        <div class="pagebody">
            <!----======= Start Color Code =======---->
            <!-- <div class="pagetitle">
                <h4>Color</h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row px-3 px-xl-5 pt-3 pb-5 py-xl-5">
                        <div class="col-6 col-md-4 col-xl-2 mb-5 mb-xl-0">
                            <div class="color-box bg-primary text-center py-5">
                                <h6 class="font-weight-bold text-white">Primary</h6>
                                <span class="text-primary h6 font-weight-bold">#2863EC</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2 mb-5 mb-xl-0">
                            <div class="color-box bg-secondary text-center py-5">
                                <h6 class="font-weight-bold text-white">Font</h6>
                                <span class="text-secondary h6 font-weight-bold">#0B1630</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2 mb-5 mb-xl-0">
                            <div class="color-box bg-warning text-center py-5">
                                <h6 class="font-weight-bold text-white">Accent</h6>
                                <span class="text-warning h6 font-weight-bold">#FEAC32</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <div class="color-box bg-light text-center py-5">
                                <h6 class="font-weight-bold text-secondary">Background</h6>
                                <span class="text-secondary h6 font-weight-bold">#EEF3FE</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <div class="color-box bg-danger text-center py-5">
                                <h6 class="font-weight-bold text-white">Negative</h6>
                                <span class="text-danger h6 font-weight-bold">#FF4949</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <div class="color-box bg-success text-center py-5">
                                <h6 class="font-weight-bold text-white">Positive</h6>
                                <span class="text-success h6 font-weight-bold">#13CE66</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!----======= End Color Code =======---->

            <!----======= Start Component =======---->
            <div class="pagetitle">
                <h4>Dashboard</h4>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-secondary font-weight-bold mb-2">27</h2>
                            <p class="mb-0">Products</p>
                        </div>
                        <canvas id="UploadedPhotos" style="width: 100%;height: 80px;"></canvas>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-secondary font-weight-bold mb-2">13</h2>
                            <p class="mb-0">Categories</p>
                        </div>
                        <canvas id="DownloadedPhotos" style="width: 100%;height: 80px;"></canvas>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-secondary font-weight-bold mb-2">204</h2>
                            <p class="mb-0">Users</p>
                        </div>
                        <canvas id="Sold" style="width: 100%;height: 80px;"></canvas>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-secondary font-weight-bold mb-2">45783</h2>
                            <p class="mb-0">Total Sales</p>
                        </div>
                        <canvas id="PendingPayment" style="width: 100%;height: 80px;"></canvas>
                    </div>
                </div>
            </div>
            <!----======= End Component =======---->

            <!----======= Start UI Elememnts =======---->
                <!-- <div class="pagetitle">
                    <h4>UI elememnts</h4>
                </div> -->
            <!-- UI Button -->
            <!-- <div class="card">
                <div class="card-header py-4">
                    <h5 class="text-secondary font-weight-bold mb-0">UI Button</h5>
                </div>
                <div class="card-body">
                    <h6 class="mb-4">Default Buttons</h6>
                    <ul class="buuton-group">
                        <li><button type="button" class="btn btn-primary waves-effect waves-primary">Primary</button>
                        </li>
                        <li><button type="button" class="btn btn-secondary waves-effect waves-light">Secondary</button>
                        </li>
                        <li><button type="button" class="btn btn-success waves-effect waves-green">Success</button></li>
                        <li><button type="button" class="btn btn-danger waves-effect waves-red">Danger</button>
                        </li>
                        <li><button type="button" class="btn btn-warning waves-effect waves-yellow">Warning</button>
                        </li>
                        <li><button type="button" class="btn btn-light waves-effect waves-light">Light</button>
                        </li>
                        <li><button type="button" class="btn btn-link waves-effect waves-primary">Link</button>
                        </li>
                        <li><button type="button" class="btn btn-primary btn-md waves-effect waves-primary">Medium</button></li>
                        <li><button type="button" class="btn btn-primary btn-lg waves-effect waves-primary">Large</button></li>
                    </ul>
                    <hr class="border-dashed my-4">
                    <h6 class="mb-4">Default Outline Buttons</h6>
                    <ul class="buuton-group">
                        <li><button type="button" class="btn btn-outline-primary waves-effect waves-primary">Primary</button></li>
                        <li><button type="button" class="btn btn-outline-secondary waves-effect waves-light">Secondary</button>
                        </li>
                        <li><button type="button" class="btn btn-outline-success waves-effect waves-green">Success</button></li>
                        <li><button type="button" class="btn btn-outline-danger waves-effect waves-red">Danger</button>
                        </li>
                        <li><button type="button" class="btn btn-outline-warning waves-effect waves-yellow">Warning</button></li>
                        <li><button type="button" class="btn btn-outline-light waves-effect waves-primary">Light</button>
                        </li>
                        <li><button type="button" class="btn btn-link waves-effect waves-primary">Link</button>
                        </li>
                        <li>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary waves-effect waves-primary">Left</button>
                                <button type="button" class="btn btn-primary waves-effect waves-primary">Middle</button>
                                <button type="button" class="btn btn-primary waves-effect waves-primary">Right</button>
                            </div>
                        </li>
                    </ul>
                    <hr class="border-dashed my-4">
                    <h6 class="mb-4">Button with icon</h6>
                    <ul class="buuton-group">
                        <li><button type="button" class="btn btn-primary waves-effect waves-primary"><i
									class="la la-pencil-square-o mr-2"></i>Compose</button></li>
                        <li><button type="button" class="btn btn-warning waves-effect waves-yellow"><i
									class="la la-info-circle mr-2"></i>Warning</button></li>
                        <li><button type="button" class="btn btn-secondary waves-effect waves-light"><i
									class="la la-map-marker mr-2"></i>Location</button></li>
                        <li>
                            <button class="btn btn-danger waves-effect waves-red" type="button">
								<span class="spinner-border spinner-border-sm mr-2" role="status"
									aria-hidden="true"></span>
								Loading
							</button>
                        </li>
                    </ul>
                </div>  </div> -->
            <!-- End UI Button -->

            <!-- Form Elements -->
            <!-- <div class="card  border-0">
                <div class="card-header py-4">
                    <h5 class="text-secondary font-weight-bold mb-0">Form Elements</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                            <h6 class="mb-4">Basic Input</h6>
                            <div class="form-group">
                                <label>Height 36px</label>
                                <input type="text" class="form-control bg-light" placeholder="Write here">
                            </div>
                            <div class="form-group">
                                <label>Height 42px</label>
                                <input type="text" class="form-control bg-light input-h-42" placeholder="Write here">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control border-light" placeholder="Typin">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control border-light" placeholder="Filed Data">
                            </div>
                            <div class="form-group">
                                <div class="input-group bg-light">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text la la-user" id="Name"></span>
                                    </div>
                                    <input type="text" class="form-control pl-1" placeholder="Name" aria-label="Name" aria-describedby="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group bg-light">
                                    <input type="text" class="form-control" placeholder="Name" aria-label="Name2" aria-describedby="Name">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text la la-info-circle" id="Name2"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <h6 class="mb-4">Basic Input Type 2</h6>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Label<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-light" placeholder="Write here">
                                    </div>
                                    <div class="form-group">
                                        <label>Label<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control border-light" placeholder="Typin">
                                    </div>
                                    <div class="form-group">
                                        <label>Label<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control border-light" placeholder="Filed">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Label<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-light" placeholder="Filed">
                                        <div class="form-control-feedback">This is dummy text</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Label<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control border-danger" placeholder="Filed">
                                        <div class="form-control-feedback text-danger"><i class="la la-info-circle mr-2"></i>This is error text</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Label<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control border-success" placeholder="Filed">
                                        <div class="form-control-feedback text-success"><i class="la la-check-circle mr-2"></i>Succeed text</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Label<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control border-warning" placeholder="Filed">
                                        <div class="form-control-feedback text-warning"><i class="la la-exclamation-triangle mr-2"></i>Warning text</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <h6 class="mb-4">Basic Textarea</h6>
                            <div class="form-group">
                                <textarea class="form-control bg-light" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Textarea</label>
                                <textarea class="form-control border-light" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Textarea<span class="text-danger">*</span></label>
                                <textarea class="form-control border-danger" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <hr class="border-dashed">
                    <h6 class="mb-4 mt-4">Dropdown</h6>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                            <select class="selectpicker" data-style="border-theme">
								<option>Dropdown</option>
								<option>Dropdown open</option>
								<option>Dropdown on hover</option>
							</select>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- End Form Elements -->

            <!-- categories Table -->
            <div class="row my-5">
                <div class="col-12 col-lg-6">
                    <div class="card  border-0">
                        <div class="card-header py-4">
                            <h5 class="text-secondary font-weight-bold mb-0"> Categories Table</h5>
                        </div>
                        <div class="card-body">
                            <table id="datatable1" class="table table-striped table-borderless w-100">
                                <thead class="table-theme-bg">
                                    <tr>
                                        <th>Id</th> 
                                        <th>Name</th>
                                        <th class="text-center no-sorting">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                include('dbconnect.php'); 
                                $sql = "SELECT * FROM `category`";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['Category_id']) ?></td>

                        <td><?= htmlspecialchars($row['Name']) ?></td>
                       
                        <td align="center">
                                            <div class="dropdown">
                                                <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton11">
                                                    <a class="dropdown-item" href="#"><i
															class="la la-info-circle"></i>View Details</a>
                                                    <!-- <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i
															class="la la-paperclip"></i>View Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
														Details</a>
                                                    <a class="dropdown-item" href="#"><i
															class="la la-cloud-download"></i>View Details</a>
                                                </div> -->
                                            </div>
                                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card  border-0">
                        <div class="card-header py-4">
                            <h5 class="text-secondary font-weight-bold mb-0">Users</h5>
                        </div>
                        <div class="card-body">
                            <table id="datatable2" class="table table-striped table-borderless w-100">
                                <thead class="table-theme-bg">
                                    <tr>
                                        <th>Name</th>
                                        <th>Total Products</th>
                                        <th class="text-center no-sorting">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                include('dbconnect.php'); 
                                $sql = "SELECT * FROM `smartbazar`";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['Sr.no']) ?></td>

                        <td><?= htmlspecialchars($row['name']) ?></td>
                       
                        <td align="center">
                                            <div class="dropdown">
                                                <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton11">
                                                    <a class="dropdown-item" href="#"><i
															class="la la-info-circle"></i>View Details</a>
                                                    <!-- <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i
															class="la la-paperclip"></i>View Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
														Details</a>
                                                    <a class="dropdown-item" href="#"><i
															class="la la-cloud-download"></i>View Details</a>
                                                </div> -->
                                            </div>
                                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Data Table -->


    
            <!-- Other Elements -->
            <!-- <div class="card  border-0">
                <div class="card-header py-4">
                    <h5 class="text-secondary font-weight-bold mb-0">Other Elements</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-5 mb-5 mb-lg-0">
                            <div class="ms-process mb-5" id="process-tab">
                                <ul class="nav nav-tabs process-model justify-content-center mb-3" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#home" aria-controls="home" role="tab" data-toggle="tab">1</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">2</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#about" aria-controls="about" role="tab" data-toggle="tab">3</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">4</a>
                                    </li>
                                </ul> -->
                                <!-- end design process steps-->
                                <!-- Tab panes -->
                                <!-- <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="ms-process-content">
                                            <form action="" method="POST" class="row">
                                                <div class="form-group col-12 col-md-6">
                                                    <label>First Name<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control border-light" placeholder="First Name" required>
                                                </div>
                                                <div class="form-group col-12 col-md-6">
                                                    <label>Last Name<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control border-light" placeholder="Last Name" required>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        <div class="ms-process-content">
                                            <h3 class="semi-bold">Profile</h3>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="about">
                                        <div class="ms-process-content">
                                            <h3 class="semi-bold">About</h3>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="contact">
                                        <div class="ms-process-content">
                                            <h3 class="semi-bold">Contact</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="progress mb-5">
                                <div class="progress-bar progress-bar-striped bg-primary progress-bar-animated progress-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                    <div class="progress-value progress-value-top">80%</div>
                                </div>
                            </div>
                            <div class="progress mb-5">
                                <div class="progress-bar progress-bar-striped bg-success progress-bar-animated progress-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                    <div class="progress-value progress-value-top">40%</div>
                                </div>
                            </div>
                            <div class="progress mb-5">
                                <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated progress-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                    <div class="progress-value progress-value-top">80%</div>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated progress-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                    <div class="progress-value progress-value-top">80%</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 offset-lg-1">
                            <h6 class="mb-3">Default Tooltip</h6>
                            <ul class="mb-5 row">
                                <li class="col-6 col-lg-3">
                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip Top">
										Tooltip Top <i class="la la-info-circle"></i></a>
                                </li>
                                <li class="col-6 col-lg-3">
                                    <a data-toggle="tooltip" data-placement="right" title="Tooltip Right">
										Tooltip Right <i class="la la-info-circle"></i></a>
                                </li>
                                <li class="col-6 col-lg-3">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Tooltip Bottom">
										Tooltip Bottom <i class="la la-info-circle"></i></a>
                                </li>
                                <li class="col-6 col-lg-3">
                                    <a data-toggle="tooltip" data-placement="left" title="Tooltip Left">
										Tooltip Left <i class="la la-info-circle"></i></a>
                                </li>
                            </ul>
                            <h6 class="mb-3">Colorful Tooltip</h6>
                            <ul class="mb-5 row">
                                <li class="col-6 col-lg-3">
                                    <a data-custom-class="tooltip-primary" data-toggle="tooltip" data-placement="top" title="Tooltip Top Primary" class="text-primary">
										Tooltip Top <i class="la la-info-circle"></i></a>
                                </li>
                                <li class="col-6 col-lg-3">
                                    <a data-custom-class="tooltip-success" data-toggle="tooltip" data-placement="right" title="Tooltip Right Success" class="text-success">
										Tooltip Right <i class="la la-info-circle"></i></a>
                                </li>
                                <li class="col-6 col-lg-3">
                                    <a data-custom-class="tooltip-danger" data-toggle="tooltip" data-placement="bottom" title="Tooltip Bottom Danger" class="text-danger">
										Tooltip Bottom <i class="la la-info-circle"></i></a>
                                </li>
                                <li class="col-6 col-lg-3">
                                    <a data-custom-class="tooltip-warning" data-toggle="tooltip" data-placement="right" title="Tooltip Left Warning" class="text-warning">
										Tooltip Left <i class="la la-info-circle"></i></a>
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="slider-wrapper slider-primary my-5">
                                        <input class="input-range" data-slider-id='ex1Slider' data-slider-tooltip="always" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="80" />
                                    </div>
                                    <div class="slider-wrapper slider-success my-5">
                                        <input class="input-range" data-slider-id='ex2Slider' data-slider-tooltip="always" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="50" />
                                    </div>
                                    <div class="slider-wrapper slider-warning my-5">
                                        <input class="input-range" data-slider-id='ex3Slider' data-slider-tooltip="always" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="90" />
                                    </div>
                                    <div class="slider-wrapper slider-danger my-5">
                                        <input class="input-range" data-slider-id='ex4Slider' data-slider-value="40, 70" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" />
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="slider-range slider-primary my-5">
                                        <input class="input-range" data-slider-id='ex5Slider' type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="80" data-slider-handle="square" />
                                    </div>
                                    <div class="slider-range slider-success my-5">
                                        <input class="input-range" data-slider-id='ex6Slider' type="text" data-slider-tooltip="always" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="40" data-slider-handle="square" />
                                    </div>
                                    <div class="slider-range slider-warning my-5">
                                        <input class="input-range" data-slider-id='ex7Slider' type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="60" data-slider-handle="square" />
                                    </div>
                                    <div class="slider-range slider-danger my-5">
                                        <input class="input-range" data-slider-id='ex8Slider' type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="40, 80" data-slider-handle="square" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- End Other Elements -->
            <!----======= End UI Elememnts =======---->
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
<script src="assets/scripts/Chart.min.js"></script>
<script src="assets/scripts/dashboard.js"></script>
<script src="assets/scripts/datatables.min.js"></script>
<script src="assets/scripts/ripple.min.js"></script>
<script src="assets/scripts/custome.js"></script>

</html>

<?php
ob_end_flush(); // Send the output to the browser
?>