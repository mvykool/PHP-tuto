<?php

// Database configuration
$dbHost = 'localhost';
$dbUsername = 'your_username';
$dbPassword = 'your_password';
$dbName = 'your_database';

// Establish database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Create operation
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Perform validation and sanitation

    // Insert user data into the database
    $query = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    $db->query($query);

    header("Location: index.php");
    exit;
}

// Read operation
$query = "SELECT * FROM users";
$result = $db->query($query);

// Update operation
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Perform validation and sanitation

    // Update user data in the database
    $query = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    $db->query($query);

    header("Location: index.php");
    exit;
}

// Delete operation
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    // Delete user data from the database
    $query = "DELETE FROM users WHERE id=$id";
    $db->query($query);

    header("Location: index.php");
    exit;
}

?>

<!-- Create user form -->
<h2>Create User</h2>
<form method="post" action="">
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="submit" name="create" value="Create">
</form>

<!-- User list -->
<h2>User List</h2>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="index.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<!-- Edit user form -->
<?php
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = "SELECT * FROM users WHERE id=$id";
    $result = $db->query($query);
    $row = $result->fetch_assoc();
?>
    <h2>Edit User</h2>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
        <input type="submit" name="update" value="Update">
    </form>
<?php } ?>