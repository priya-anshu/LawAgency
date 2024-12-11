<?php
// Start the session to store user info after login
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['txt']) && isset($_GET['pswd'])) {
    // Get the input values
    $username = $_GET['txt'];
    $password = $_GET['pswd'];

    // Database connection
    $conn = new mysqli("localhost", "root", "", "lawagenc");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the query to check the username
    $stmt = $conn->prepare("SELECT * FROM client WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // If username exists, verify the password
    if ($result->num_rows > 0) {
        $client = $result->fetch_assoc();
        
        // Verify the password (hashed password check)
        if (password_verify($password, $client['password'])) {
            // Store client info in session for later use
            $_SESSION['client_id'] = $client['client_id'];
            $_SESSION['username'] = $client['username'];
            $_SESSION['name'] = $client['name'];

            // Redirect to the client dashboard
            header("Location: clientDash.php");
            exit();
        } else {
            // Invalid password
            header("Location: clientDash.php");
            
        }
    } else {
        // Invalid username
        header("Location: clientDash.php");
        
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>Client Login</title>
  <meta name="description" content="Description of your site goes here">
  <meta name="keywords" content="keyword1, keyword2, keyword3">
  <link href="../css/style.css" rel="stylesheet" type="text/css">
  <style type="text/css">
    .style1 { font-weight: bold; }
    form {
      font-family: 'Arial', sans-serif;
      background: linear-gradient(to right, #f7f8fc, #eef1f7);
      border: 1px solid #dcdde1;
      border-radius: 10px;
      padding: 20px;
      width: 350px;
      margin: 20px auto;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    input[type="text"], input[type="password"] {
      width: 90%;
      padding: 8px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }
    input[type="submit"] {
      background: #0078d7;
      color: white;
      font-size: 14px;
      font-weight: bold;
      border: none;
      border-radius: 5px;
      padding: 10px;
      cursor: pointer;
      width: 300px;
    }
    .error-message {
      color: red;
      font-size: 14px;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <div class="warpper-top">
      <div class="top-sh1"></div>
      <div class="banner-area">
        <div class="banner-left-sh1"></div>
        <div class="banner-bg1">
          <div class="banner-txt">
            <div class="banner-txt-left">
              <h1 class="style1">DETECTIVE <br> AGENCY</h1>
            </div>
            <div class="banner-txt-right"><br><br><br><br><br><br>
              <h2>Justice Is An Essential Human Value....</h2>
            </div>
          </div>
          <div class="nav-area">
            <ul class="navigation">
            <li><a href="../layout/index.php">Home</a></li>
            <li><a href="../admin/admin.php">Admin</a></li>
            <li><a href="../client/client.php">Clients</a></li>
            <li><a href="../lawyer/lawyer.php">Lawyer</a></li>
            <li><a href="../layout/about.php">About us</a></li>
            <li><a href="../layout/case.php">Case study</a></li>
            <li><a href="../layout/contact.php">Contact us</a></li>
            </ul>
          </div>
          <div class="nav-sh"></div>
        </div>
        <div class="banner-right-sh1"></div>
      </div>
    </div>
    <div class="warpper-mid">
      <h2 style="padding: 20px 0px 5px 30px;">Welcome to <span>Client Page</span></h2><br>
      <center> 
        <img src="../images/images (4).jpg" width="300" height="200">
      </center><br>

      <!-- Client Login Form -->
      <form method="get" action="client.php">
        <center>
          <table border="0">
            <tr>
              <th colspan="2" bgcolor="#F0F0F0" scope="col">
                <p class="style2">Client Login</p>
              </th>
            </tr>
            <tr>
              <th width="82" scope="row"><div align="left">User Name </div></th>
              <td width="157"><input type="text" name="txt" /></td>
            </tr>
            <tr>
              <th height="42" scope="row"><div align="left">Password</div></th>
              <td><input type="password" name="pswd" /></td>
            </tr>
            <tr>
              <th height="42" colspan="2" scope="row">
                <div align="center">
                  <input type="submit" value="Submit" />
                </div>
              </th>
            </tr>
          </table>
        </center>
      </form>

      <?php
        // Display error message if login fails
        if (isset($error_message)) {
            echo "<div class='error-message'>$error_message</div>";
        }
      ?>

   
    </div>
  </div>

  <script>
window.embeddedChatbotConfig = {
chatbotId: "vXny5s7wyR5tj_uVcnWOx",
domain: "www.chatbase.co"
}
</script>
<script
src="https://www.chatbase.co/embed.min.js"
chatbotId="vXny5s7wyR5tj_uVcnWOx"
domain="www.chatbase.co"
defer>
</script>

</body>
</html>
