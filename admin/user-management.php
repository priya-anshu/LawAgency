<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['userUsername']; // Client's username
    $password = $_POST['userPassword']; // Client's password
    $name = $_POST['userName']; // Client's name
    $email = $_POST['userEmail']; // Client's email
    $contact_number = $_POST['userContact'] ?? ''; // Optional field for clients
    $address = $_POST['userAddress'] ?? ''; // Optional field for clients

    // Create database connection
    $conn = new mysqli("localhost", "root", "", "lawagenc");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert client data into the 'client' table
    $sql = "INSERT INTO client (username, password, name, email, contact_number, address) 
            VALUES (?, ?, ?, ?, ?, ?)";

    // Prepare and bind
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $username, $password, $name, $email, $contact_number, $address);

    if ($stmt->execute()) {
        echo "Client added successfully!";
    } else {
        echo "Error adding client: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();

    // Reload page after form submission
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Fetch clients to display in the table
$conn = new mysqli("localhost", "root", "", "lawagenc");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM client";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Management</title>
    <style>
        /* Add your styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .wrapper {
            width: 90%;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #444;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            text-align: left;
            padding: 12px;
            border: 1px solid #ddd;
        }
        table th {
            background-color: #2a9d8f;
            color: white;
        }
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        table tr:hover {
            background-color: #d8f3dc;
        }
        button {
            background-color: #f94144;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }
        button:hover {
            background-color: #d90429;
        }
        form {
            padding: 15px;
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 6px;
        }
        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        form input, form textarea, form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        form button {
            background-color: #2a9d8f;
            color: white;
            font-size: 16px;
        }
        form button:hover {
            background-color: #21867a;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h1>Client Management</h1>
        <p>Manage all registered clients here.</p>

        <!-- Add Client Button -->
        <div>
            <button onclick="document.getElementById('addClientForm').style.display = 'block'">Add Client</button>
        </div>

        <!-- Add Client Form Below Button -->
        <div id="addClientForm" style="display: none; margin-top: 20px;">
            <h2>Add Client</h2>
            <form method="POST" action="">
                <!-- Input fields for client data -->
                <label for="userUsername">Username:</label>
                <input type="text" id="userUsername" name="userUsername" required>

                <label for="userPassword">Password:</label>
                <input type="password" id="userPassword" name="userPassword" required>

                <label for="userName">Name:</label>
                <input type="text" id="userName" name="userName" required>

                <label for="userEmail">Email:</label>
                <input type="email" id="userEmail" name="userEmail" required>

                <label for="userContact">Contact Number:</label>
                <input type="text" id="userContact" name="userContact">

                <label for="userAddress">Address:</label>
                <textarea id="userAddress" name="userAddress"></textarea>

                <button type="submit">Add Client</button>
                <button type="button" onclick="document.getElementById('addClientForm').style.display = 'none'">Cancel</button>
            </form>
        </div>

        <!-- Table for displaying client data -->
        <table>
            <thead>
                <tr>
                    <th>Client ID</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['client_id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

    <script>
window.embeddedChatbotConfig = {
chatbotId: "W3tc8G0jET1oPezU7WROC",
domain: "www.chatbase.co"
}
</script>
<script
src="https://www.chatbase.co/embed.min.js"
chatbotId="W3tc8G0jET1oPezU7WROC"
domain="www.chatbase.co"
defer>
</script>
</body>
</html>

<?php
$conn->close();
?>
