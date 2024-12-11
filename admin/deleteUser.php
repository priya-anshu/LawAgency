<?php
// Check if the ID is set in the query string
if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Create database connection
    $conn = new mysqli("localhost", "root", "", "lawagenc");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // First, delete from 'client' table if the user exists there
    $deleteClientSql = "DELETE FROM client WHERE client_id = (SELECT client_id FROM users WHERE id = ?)";
    $stmt = $conn->prepare($deleteClientSql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $stmt->close();

    // Now delete from 'users' table
    $deleteUserSql = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($deleteUserSql);
    $stmt->bind_param("i", $userId);
    if ($stmt->execute()) {
        echo "User deleted successfully!";
    } else {
        echo "Error deleting user: " . $stmt->error;
    }
    $stmt->close();

    // Redirect back to the user management page after deletion
    header("Location: user-management.php");
    exit();
}
?>
