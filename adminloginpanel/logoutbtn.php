<?php

if (isset($_POST['logout_btn'])) {
    session_destroy(); // Destroy the session
    echo "<script>
                alert('You had been logout');
                window.location.href = 'index.php';
                </script>";
    // Redirect to login page
    exit;
}
?>