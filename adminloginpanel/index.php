<?php
include('dbconnect.php');
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - A Pen by Mohithpoojary</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'><link rel="stylesheet" href="newstyle.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="User name / Email" name="AdminName">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Password" name="AdminPass">
				</div>
				<button class="button login__submit" name="Login">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
</div>
			
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
<!-- partial -->
<?php
// Function to filter input
function input_filter($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['Login'])) {
    $AdminName = input_filter($_POST['AdminName']);
    $AdminPass = input_filter($_POST['AdminPass']);

    // Escape special characters for use in SQL query
    $AdminName = mysqli_real_escape_string($conn, $AdminName);
    $AdminPass = mysqli_real_escape_string($conn, $AdminPass);

    // Query template with placeholders
    $query = "SELECT * FROM `admin_login` WHERE `Admin_Name` = ? AND `Admin_Password` = ?";

    // Prepare the SQL statement
    if ($stmt = mysqli_prepare($conn, $query)) {
        // Bind parameters (AdminName and AdminPass) to the SQL query
        mysqli_stmt_bind_param($stmt, "ss", $AdminName, $AdminPass);

        // Execute the prepared statement
        mysqli_stmt_execute($stmt);

        // Store the result
        mysqli_stmt_store_result($stmt);

        // Check if the query returned exactly one row
        if (mysqli_stmt_num_rows($stmt) == 1) {
            session_start();
            $_SESSION['AdminLoginId'] = $AdminName;
            header('location: main.php');
            exit();
        } else {
            echo "<script>alert('Invalid Admin Name or Password');</script>";
        }

        // Close the prepared statement
        mysqli_stmt_close($stmt);
    } else {
        // If the SQL query couldn't be prepared
        echo "<script>alert('SQL query could not be prepared');</script>";
    }
}
?>

</body>
</html>
