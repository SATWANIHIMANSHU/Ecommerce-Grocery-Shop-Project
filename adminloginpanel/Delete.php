<?php
session_start();
include('dbconnect.php');  // Include your database connection file

$sql = "SELECT * FROM products_main";
$result = $conn->query($sql);
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
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.2/css/dataTables.dataTables.min.css">
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
    <style>
        .tableview {
            background-color: white;
        }

        table {
            /* height: 100%; */
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
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
            <li ><a href="main.php" class="waves-effect waves-primary"><i
                        class="la la-dashboard"></i>Dashboard</a></li>
                        <li><a href="insert.php" class="waves-effect waves-primary"><i
                        class="la la-cart-arrow-down"></i>Insert</a></li>
                        <li ><a href="showdata.php" class="waves-effect waves-primary"><i class="la la-edit"></i>Edit Product</a></li>
                        <li class="active"><a href="Delete.php" class="waves-effect waves-primary"><i class="la la-trash"></i></i>Delete Product</a></li>
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
    <h1>Admin Panel - Manage Products</h1>
    <div class="container my-5">
        <div class="tableview">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        
                        <th scope="col">Sr.no</th>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Old_Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                     $sno=0;
                    while($row = $result->fetch_assoc()): 
                        $sno=$sno+1;?>
                    <tr>
                    <td><?= htmlspecialchars($sno) ?></td>

                        <td><?= htmlspecialchars($row['id']) ?></td>
                        <td><img src="<?= htmlspecialchars($row['image']) ?>" width="100"></td>
                        <td><?= htmlspecialchars($row['name']) ?></td>
                        <td><?= htmlspecialchars($row['price']) ?></td>
                        <td><?= htmlspecialchars($row['old_price']) ?></td>
                        <td>
                        <button class="btn btn-danger deleteBtn"
                data-id="<?php echo $row['id']; ?>"
                data-name="<?php echo $row['name']; ?>">
            Delete
        </button>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>


<!-- Delete Product Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="deleteProductForm" method="post" action="delete_product.php">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="deleteProductId">
                    <p>Are you sure you want to delete this product?</p>
                    <strong id="deleteProductName"></strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
// For triggering the delete modal with product details
$('.deleteBtn').on('click', function() {
    var id = $(this).data('id');
    var name = $(this).data('name');

    var modal = $('#deleteModal');
    modal.find('#deleteProductId').val(id);
    modal.find('#deleteProductName').text(name);
    modal.modal('show');
});

    </script>












</body>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script src="assets/scripts/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script> -->
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


    

        
</html>