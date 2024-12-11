<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("../php/connection.php"); // Include database connection file

    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    // Query to check if the admin exists
    $query = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
    $result = $connect->query($query);

    if ($result->num_rows == 1) {
        $adminData = $result->fetch_assoc();
        $_SESSION['admin_id'] = $adminData['admin_id'];
        $_SESSION['admin_name'] = $adminData['name'];

        // Redirect to admin dashboard
        echo '<script>
                window.location = "../admin/adminDash.php";
              </script>';
        exit();
    } else {
        // If credentials are invalid
        echo '<script>
                alert("Invalid credentials! Please try again...");
                window.location = "../LawAgenC/admin.php";
              </script>';
        exit();
    }
}

$connect->close();
?>
