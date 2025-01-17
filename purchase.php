<?php
session_start();

include('database/dbconnect.php');

// Connect to the database
$conn = mysqli_connect($servername, $username, $password, $database);

if (mysqli_connect_error()) {
    echo "<script>
        alert('Cannot connect to the database'); 
        window.location.href='mycart.php';
    </script>";
    exit();
}

// Check if the request method is POST and if the 'purchase' button was clicked
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['purchase'])) {
    // Ensure the user is logged in and user_id is in the session
    if (!isset($_SESSION['user_id'])) {
        echo "<script>
            alert('You need to log in to place an order.');
            window.location.href='login.php';
        </script>";
        exit();
    }

    $user_id = $_SESSION['user_id'];
    $fname = $_POST['fullname'];
    $phone = $_POST['phone_no'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $modeofpayment = $_POST['modeofpayment'];
    $order_date = date('Y-m-d H:i:s');  

    // Step 1: Calculate total amount for the order
    $totalAmount = 0;
    foreach ($_SESSION['cart'] as $item) {
        $totalAmount += $item['Price'] * $item['Quantity'];
    }

    // Prepare the SQL query for order_manager with totalAmount
    $query1 = "INSERT INTO `order_manager` (`Full_Name`, `Phone_No`, `Email`, `Address`, `Total_Amount`, `user_id`) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt1 = mysqli_prepare($conn, $query1);

    if ($stmt1) {
        // Bind parameters including the totalAmount
        mysqli_stmt_bind_param($stmt1, "ssssii", $fname, $phone, $email, $address, $totalAmount, $user_id);

        // Execute the query
        mysqli_stmt_execute($stmt1);

        // Get the last inserted Order ID
        $Order_Id = mysqli_insert_id($conn);

        // Generate invoice number
        $invoice_number = 'INV' . date('Ymd') . $Order_Id;

        // Update invoice number
        $update_sql = "UPDATE `order_manager` SET `invoice_number` = '$invoice_number' WHERE `Order_Id` = '$Order_Id'";
        mysqli_query($conn, $update_sql);

        // Insert each item from the cart into user_orders
        $query2 = "INSERT INTO `user_orders` (`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?, ?, ?, ?)";
        $stmt2 = mysqli_prepare($conn, $query2);

        if ($stmt2) {
            foreach ($_SESSION['cart'] as $values) {
                $Item_Name = $values['Item_Name'];
                $Price = $values['Price'];
                $Quantity = $values['Quantity'];

                mysqli_stmt_bind_param($stmt2, "isii", $Order_Id, $Item_Name, $Price, $Quantity);
                mysqli_stmt_execute($stmt2);
            }

            unset($_SESSION['cart']); // Clear cart
            echo "<script>window.location.href='php-pg-integration-cashfree-master/checkout/start.php';</script>";
        } else {
            echo "<script>alert('SQL Query Prepare Error'); window.location.href='cart.php';</script>";
        }
    } else {
        echo "<script>alert('SQL Error'); window.location.href='cart.php';</script>";
    }
}


// Close the database connection
mysqli_close($conn);
?>
