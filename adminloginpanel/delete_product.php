<?php
include('dbconnect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    // SQL query to delete the product
    $sql = "DELETE FROM products_main WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Product deleted successfully!');</script>";
        // Redirect back to admin page or refresh page
        echo "<script>window.location.href = 'Delete.php';</script>";
    } else {
        echo "Error deleting product: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
