<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Settings</title>
    <link rel="stylesheet" href="../css/style.css">
    
    <style>
        /* Styling the Update Settings Form */
.settings-form {
    width: 100%;
    max-width: 400px;
    margin-top: 20px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f9f9f9;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.settings-form label {
    display: block;
    margin-bottom: 8px;
    font-size: 1rem;
    font-weight: 600;
    color: #333;
}

.settings-form input {
    width: 96%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
    transition: border-color 0.3s;
}

.settings-form input:focus {
    border-color: #007bff;
    outline: none;
}

.settings-form button {
    display: inline-block;
    width: 100%;
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

.settings-form button:hover {
    background-color: #0056b3;
}

    </style>
    
</head>
<body>
    <div class="wrapper">
        <!-- Header -->
        <div class="banner-area">
            <div class="banner-txt">
                <div class="banner-txt-left">
                    <h1>Update Settings</h1>
                </div>
                <div class="banner-txt-right">
                    <h2>Customize Your Preferences</h2>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="warpper-mid">
            <div class="mid-left">
                <h2>Settings</h2>
                <p>Update your account and system preferences below:</p>
                <form class="settings-form">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter new email" required><br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter new password" required><br>
                    <button type="submit">Save Changes</button>
                </form>
            </div>
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
