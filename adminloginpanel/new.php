<?php
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="path/to/your/bootstrap.css"> <!-- Add Bootstrap if required -->
</head>
<body>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <button type="submit" name="logout_btn" class="btn btn-danger">Logout</button>
    </form>
    <div class="container mt-5">
    <h2>Orders</h2>
    
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Order Details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>(123) 456-7890</td>
                    <td>
                        <!-- Nested Table for Order Details -->
                        <table class="table table-sm table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Apple</td>
                                    <td>2</td>
                                    <td>$4</td>
                                </tr>
                                <tr>
                                    <td>Orange</td>
                                    <td>5</td>
                                    <td>$10</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>(987) 654-3210</td>
                    <td>
                        <!-- Nested Table for Order Details -->
                        <table class="table table-sm table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Banana</td>
                                    <td>3</td>
                                    <td>$3</td>
                                </tr>
                                <tr>
                                    <td>Grapes</td>
                                    <td>1</td>
                                    <td>$2</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

    <!-- Add margin between tables -->
    <div class="my-4"></div>

    <!-- Second Table (New Table to be added) -->
    <h3>Pending Orders</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#1002</td>
                    <td>Jane Smith</td>
                    <td>Orange</td>
                    <td>5</td>
                    <td>$10</td>
                    <td>Pending</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</div>

    <?php
    // Check if the logout button was clicked
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout_btn'])) {
        // Unset all session variables
        session_unset();
        
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
</body>
</html>


<table class="table table-hover ">
  <thead>
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Phone No</th>
      <th scope="col">Address</th>
      <th scope="col">Pay Mode</th>
      <th scope="col">Orders</th>
    </tr>
  </thead>
  <tbody>
    
<tbody>
 <?php
$query="SELECT * FROM `order_manager`";
$result = $conn->query($query);
while($row = $result->fetch_assoc()):?>
    <tr>
    <td><?= htmlspecialchars($row['Order_id']) ?></td>

    <td><?= htmlspecialchars($row['Full_Name']) ?></td>
    <td><?= htmlspecialchars($row['Phone_No']) ?></td>
    <td><?= htmlspecialchars($row['Address']) ?></td>
    <td><?= htmlspecialchars($row['MOP']) ?></td>
    <td>
    <?php 
    echo"<table class='table table-hover' >
    <thead>
      <tr>
        
      </tr>
    </thead>
    ";
      
    ?>
    </td>
    
</tr>
<?php endwhile; ?>


</tbody>
</table>