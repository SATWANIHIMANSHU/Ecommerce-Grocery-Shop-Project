<?php
session_start();
include('dbconnect.php'); // Database connection 

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize it
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $feedback = mysqli_real_escape_string($conn, $_POST['feedback']);
    $rating = mysqli_real_escape_string($conn, $_POST['rating']);

    // Prepare an SQL statement to insert the data
    $sql = "INSERT INTO customer_feedback (name, email, feedback, rating) VALUES ('$name', '$email', '$feedback', '$rating')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Your Form Had been Submitted Successfully');
                window.location.href = '../../index.php';
            </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}


?>
