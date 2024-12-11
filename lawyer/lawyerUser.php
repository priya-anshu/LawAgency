<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="../css/style.css"> <!-- Link your existing CSS -->
    <style>
    /* User Form Styling */
.user-form {
    margin-top: 20px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f9f9f9;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.user-form h3 {
    margin-bottom: 15px;
    color: #333;
    font-size: 1.2rem;
}

.user-form label {
    display: block;
    margin-bottom: 8px;
    font-size: 1rem;
    color: #333;
}

.user-form input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
}

.user-form input:focus {
    border-color: #007bff;
    outline: none;
}

.user-form button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    font-size: 1rem;
    font-weight: 600;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.user-form button:hover {
    background-color: #0056b3;
}

.user-form button[style*="background-color: #dc3545;"] {
    background-color: #dc3545;
}

.user-form button[style*="background-color: #dc3545;"]:hover {
    background-color: #b02a37;
}

</style>
</head>
<body>
    <div class="wrapper">
        <!-- Header -->
        <div class="banner-area">
            <div class="banner-txt">
                <div class="banner-txt-left">
                    <h1>Manage Users</h1>
                </div>
                <div class="banner-txt-right">
                    <h2>Add, Update, or Remove User Details</h2>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="warpper-mid">
            <!-- User Management Section -->
            <div class="mid-left">
                <h2>User Management</h2>
                <p><b>Add, Update or Remove User Information Below:</b></p>

                <!-- Add User Section -->
                <form class="user-form">
                    <h3>Add User</h3>
                    <label for="addName">Name:</label>
                    <input type="text" id="addName" name="addName" placeholder="Enter name" required><br>
                    <label for="addEmail">Email:</label>
                    <input type="email" id="addEmail" name="addEmail" placeholder="Enter email" required><br>
                    <button type="submit">Add User</button>
                </form>
                <hr>

                <!-- Update User Section -->
                <form class="user-form">
                    <h3>Update User</h3>
                    <label for="updateId">User ID:</label>
                    <input type="text" id="updateId" name="updateId" placeholder="Enter user ID" required><br>
                    <label for="updateName">Name:</label>
                    <input type="text" id="updateName" name="updateName" placeholder="Enter new name"><br>
                    <label for="updateEmail">Email:</label>
                    <input type="email" id="updateEmail" name="updateEmail" placeholder="Enter new email"><br>
                    <button type="submit">Update User</button>
                </form>
                <hr>

                <!-- Remove User Section -->
                <form class="user-form">
                    <h3>Remove User</h3>
                    <label for="removeId">User ID:</label>
                    <input type="text" id="removeId" name="removeId" placeholder="Enter user ID" required><br>
                    <button type="submit" style="background-color: #dc3545;">Remove User</button>
                </form>
            </div>

            <!-- Quick Links Section -->
            <div class="mid-right">
                <div class="midround-bg1">
                    <h4>Quick Links</h4>
                    <div class="mainmenu">
                        <ul>
                        <li><a href="homeLawyer.php">Home Page</a></li>
                            
                            <li><a href="lawyerReports.php">View Reports</a></li>
                            <li><a href="lawyerUser.php">Manage Users</a></li>
                            <li><a href="lawyerSetting.php">Update Settings</a></li>
                            <li><a href="lawyer.php">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="warpper-bot">
            <p class="footer-txt">© 2024 Legal Agency. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>
