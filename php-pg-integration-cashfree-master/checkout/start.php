<?php
session_start();
 include('dbconnect.php'); // Database connection 

$userId = $_SESSION['user_id']; // Assuming you store the user ID in the session

// Fetch the latest order data for the current user
$query = "SELECT Order_id, Total_Amount, Full_Name, Email, Phone_No FROM order_manager WHERE user_id = '$userId' ORDER BY Order_id DESC LIMIT 1";
$result = $conn->query($query);

if ($result && $row = $result->fetch_assoc()) {
    $newOrderId = "Order_" . $row['Order_id'];
    $orderAmount = $row['Total_Amount'];
    $customerName = $row['Full_Name'];
    $customerEmail = $row['Email'];
    $customerPhone = $row['Phone_No'];
} else {
    die("No recent order found for the user.");
}

$conn->close();
?>



<!DOCTYPE html>
<html>
  <head>
    <title>Cashfree-PG TestForm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
      body {
        background: url('Paymnet_background.jpg') no-repeat center center;
        background-size: cover;

        font-family: Arial, sans-serif;
      }
      .form-container {
        max-width: 500px;
        margin: 50px auto;
        
        padding: 30px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      }
      h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
      }
      .btn-primary {
        background-color: #007bff;
        border: none;
      }
      .btn-primary:hover {
        background-color: #0056b3;
      }
      .form-control {
        border-radius: 4px;
      }
      label {
        font-weight: bold;
        color: #555;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="form-container">
        <h1>Payment Details</h1>
        <form id="redirectForm" method="POST" action="request.php">
          <!--  add your appid here -->
          <input type="hidden" class="form-control" name="appId" value="" />
          <input type="hidden" class="form-control" name="orderId" value="<?php echo $newOrderId; ?>" readonly />
          <input type="hidden" class="form-control" name="orderCurrency" value="INR" />
          <input type="hidden" class="form-control" name="orderNote" value="Test order" />

          <div class="form-group">
            <label>Name:</label>
            <input class="form-control" name="customerName" value="<?php echo $customerName; ?>"  />
          </div>
          <div class="form-group">
            <label>Email:</label>
            <input class="form-control" name="customerEmail" value="<?php echo $customerEmail; ?>"  />
          </div>
          <div class="form-group">
            <label>Phone:</label>
            <input class="form-control" name="customerPhone" value="<?php echo $customerPhone; ?>"  />
          </div>
          <div class="form-group">
            <label>Order Amount:</label>
            <input class="form-control" name="orderAmount" value="<?php echo $orderAmount; ?>" readonly />
          </div>
          <input type="hidden" class="form-control" name="returnUrl" value="http://localhost/web/php-pg-integration-cashfree-master/checkout/response.php" />
          <input type="hidden" class="form-control" name="notifyUrl" value="http://www.example.com" />
          <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
      </div>
    </div>
  </body>
</html>
