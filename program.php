<?php

// Database configuration
$dbHost = 'localhost';
$dbUsername = 'your_username';
$dbPassword = 'your_password';
$dbName = 'your_database';

// Establish database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Registration process
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform validation and sanitation

    // Check if username already exists
    $query = "SELECT id FROM users WHERE username = '$username'";
    $result = $db->query($query);
    if ($result->num_rows > 0) {
        echo "Username already exists. Please choose a different username.";
        exit;
    }

    // Insert user data into the database
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $db->query($query);

    echo "Registration successful. You can now <a href='login.php'>login</a>.";
    exit;
}

// Login process
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform validation and sanitation

    // Retrieve user data from the database
    $query = "SELECT id FROM users WHERE username = '$username' AND password = '$password'";
    $result = $db->query($query);
    if ($result->num_rows == 1) {
        session_start();
        $_SESSION['username'] = $username;
        echo "Login successful. Welcome, $username!";
        exit;
    } else {
        echo "Invalid username or password. Please try again.";
        exit;
    }
}

// Logout process
if (isset($_GET['logout'])) {
    session_start();
    session_destroy();
    echo "You have been logged out. <a href='login.php'>Login again</a>.";
    exit;
}

?>

<!-- Registration form -->
<h2>Registration</h2>
<form method="post" action="">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="submit" name="register" value="Register">
</form>

<!-- Login form -->
<h2>Login</h2>
<form method="post" action="">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="submit" name="login" value="Login">
</form>

<!-- Logout link -->
<p><a href="login.php?logout">Logout</a></p>