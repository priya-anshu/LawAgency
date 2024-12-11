<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: ../php/login.php");
    exit();
}

include("../php/connection.php"); // Include database connection file

// Retrieve admin data using the session admin_id
$admin_id = $_SESSION['admin_id'];
$query = "SELECT * FROM admin WHERE admin_id = '$admin_id'";
$result = $connect->query($query);

if ($result->num_rows == 1) {
    $adminData = $result->fetch_assoc();
    $name = $adminData['name'];
    $email = $adminData['email'];
    $contact_number = $adminData['contact_number'];
} else {
    // If no admin found, redirect to login
    echo '<script>
            alert("Admin not found. Please log in again.");
            window.location = "../php/login.php";
          </script>';
    exit();
}

$connect->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>

  <!-- Admin Dashboard Styling -->
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #333;
      color: white;
      padding: 15px 0;
      text-align: center;
    }
    .container {
      margin: 20px;
    }
    .welcome-message {
      font-size: 24px;
      margin-bottom: 20px;
    }
    .btn {
      padding: 10px 20px;
      font-size: 16px;
      margin: 10px;
      cursor: pointer;
      color: white;
      background-color: #4CAF50;
      border: none;
      border-radius: 5px;
    }
    .btn-logout {
      background-color: #f44336;
    }
    .btn:hover {
      opacity: 0.8;
    }
    .admin-info {
      background-color: #fff;
      padding: 15px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }
    .admin-info p {
      font-size: 18px;
    }
    .stats-container {
      display: flex;
      justify-content: space-between;
      margin-top: 30px;
    }
    .stats-box {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      width: 48%;
      text-align: center;
    }
    .stats-box h4 {
      font-size: 20px;
      color: #333;
    }
    .stats-box p {
      font-size: 24px;
      font-weight: bold;
      margin: 10px 0;
    }
    .recent-activities {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin-top: 30px;
    }
    .recent-activities h4 {
      font-size: 20px;
      margin-bottom: 10px;
    }
    .activity-item {
      margin: 10px 0;
      font-size: 16px;
      color: #555;
    }
  </style>
</head>
<body>

  <header>
    <h1>Admin Dashboard</h1>
  </header>

  <div class="welcome-message">
      <h2>Welcome, <?php echo htmlspecialchars($name); ?>!</h2>
    </div>

  <div class="container">
    <!-- Welcome Message -->
    <div class="welcome-message" id="welcome-message"></div>

    <!-- Admin Information Section -->
    <div class="admin-info">
    <h3>Admin Information</h3>
    <p><strong>Name:</strong> <span id="admin-name"><?php echo ($name); ?></span></p>
    <p><strong>Email:</strong> <span id="admin-username"><?php echo ($email); ?></span></p>

    <p><strong>User ID:</strong> <span id="admin-email"><?php echo ($admin_id); ?></span></p>
    <p><strong>Phone No.:</strong> <span id="admin-email"><?php echo ($contact_number); ?></span></p>

  </div>

    <!-- Stats Section -->
    <div class="stats-container">
      <div class="stats-box">
        <h4>Total Users</h4>
        <p id="total-users">47</p>
      </div>
      <div class="stats-box">
        <h4>Active Users</h4>
        <p id="active-users">3</p>
      </div>
    </div>


    <!-- Dashboard Options -->
    <h3>Manage Admin Panel</h3>
    <button class="btn" onclick="manageUsers()">Manage Users</button>
    <!-- <button class="btn" onclick="viewLogs()">View Logs</button> -->
    <button class="btn" onclick="viewReports()">View Reports</button>

    <!-- Logout Button -->
    <a href="../admin/admin.php"><button class="btn btn-logout" >Logout</button></a>
  </div>


  <script>
    // Function to manage users (e.g., view, add, remove)
    function manageUsers() {
      alert("Redirecting to user management page...");
      window.location.href = "../admin/user-management.php";
    }

    // Function to view logs (e.g., system logs, activity logs)
    // function viewLogs() {
    //   alert("Redirecting to system logs...");
    //   window.location.href = "system-logs.php";
    // }

    // Function to view reports (e.g., generate reports)
    function viewReports() {
      alert("Redirecting to reports page...");
      window.location.href = "../admin/generate-reports.php";
    }

    

    // Function to log out the admin
    // function logout() {
    //   auth.signOut().then(() => {
    //     window.location.href = "login.php"; // Redirect to login page
    //   }).catch((error) => {
    //     console.error("Error signing out:", error);
    //   });
    // }

    
  </script>
</body>
</html>
