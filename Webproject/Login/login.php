<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// Include the database connection file
include 'database_connection.php';

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password are empty
    if (empty($username) || empty($password)) {
        echo "Please enter your username and password.";
    } else {
        // Check if the user exists in the database
        $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        // If the user exists, start a session and redirect to the home page
        if (mysqli_num_rows($result) > 0) {
            session_start();
            $_SESSION['username'] = $username;
            header('Location: index.html');
        } else {
            echo "Invalid username or password.";
        }
    }
}

?>

</body>
</html>