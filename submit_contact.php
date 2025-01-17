<?php
session_start();

include('database/dbconnect.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $name = $conn->real_escape_string($_POST['name']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);
    
    // Insert data into the database
    $sql = "INSERT INTO contact_form (name, subject, email, message) VALUES ('$name', '$subject', '$email', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Your Concern had been submitted');
            window.location.href='index.php';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
