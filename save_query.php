<?php
include('database/dbconnect.php');


// Insert query into the database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO queries (message) VALUES ('$message')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the form page with a success parameter
        header('Location: help.php?submitted=true');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

