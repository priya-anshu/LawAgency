<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>Client Home</title>
  <meta name="description" content="Client Home Page">
  <meta name="keywords" content="client, dashboard, home">
  <link href="../css/style.css" rel="stylesheet" type="text/css">

  <script src="https://www.gstatic.com/firebasejs/9.17.2/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/9.17.2/firebase-database.js"></script>
  <!-- Add other Firebase modules as needed -->
  
  <style type="text/css">
    .client-welcome {
      padding: 20px;
      text-align: center;
      background-color: #f9f9f9;
      border-radius: 8px;
      margin: 20px auto;
      width: 80%;
    }
    .client-welcome h1 {
      color: #333;
      font-size: 28px;
    }
    .client-details {
      margin: 20px auto;
      width: 80%;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
      background-color: #fff;
    }
    .client-details h2 {
      color: #444;
      margin-bottom: 10px;
    }
    .client-details p {
      font-size: 16px;
      line-height: 1.6;
      color: #555;
    }
    .quick-actions {
      text-align: center;
      margin: 20px auto;
    }
    .quick-actions a {
      text-decoration: none;
      padding: 10px 20px;
      margin: 10px;
      display: inline-block;
      background-color: #007bff;
      color: #fff;
      border-radius: 5px;
    }
    .quick-actions a:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
<div class="wrapper">
  <!-- Header -->
  <div class="warpper-top">
    <div class="top-sh1"></div>
    <div class="banner-area">
      <div class="banner-left-sh1"></div>
      <div class="banner-bg1">
        <div class="banner-txt">
          <div class="banner-txt-left">
            <h1 class="style1">DETECTIVE <br> AGENCY</h1>
          </div>
          <div class="banner-txt-right">
            <h2>Justice Is An Essential Human Value...</h2>
          </div>
        </div>
        <div class="nav-area">
          <ul class="navigation">
            <li><a href="index.php">Home</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="client.php">Clients</a></li>
            <li><a href="lawyer.php">Lawyer</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="case.php">Case study</a></li>
          </ul>
        </div>
        <div class="nav-sh"></div>
      </div>
      <div class="banner-right-sh1"></div>
    </div>
  </div>

  <!-- Main Content -->
  <div class="warpper-mid">
    <div class="client-welcome">
      <h1>Welcome, Ankita Kyundilya</h1>
      <p>Explore your dashboard to manage your cases and stay updated.</p>
    </div>

    <div class="client-details">
      <h2>Your Details</h2>
      <p><strong>Client ID:</strong> 230151</p>
      <p><strong>Case Type:</strong> Civil</p>
      <p><strong>Lawyer:</strong> Shivam Gusain</p>
      <p><strong>Registered On:</strong> 01/11/2024</p>
    </div>

    <div class="quick-actions">
      <h2>Quick Actions</h2>
      <a href="view-cases.php">View Cases</a>
      <a href="request-update.php">Request Update</a>
      <a href="message-lawyer.php">Message Lawyer</a>
    </div>
  </div>

  <!-- Footer -->
  <div class="warpper-bot">
    <div class="footer-left">
      <ul class="footer-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="admin.php">Admin</a></li>
        <li><a href="client.php">Clients</a></li>
        <li><a href="lawyer.php">Lawyer</a></li>
        <li><a href="about.php">About us</a></li>
        <li><a href="case.php">Case study</a></li>
        <li><a href="contact.php">Contact us</a></li>
      </ul>
    </div>
    
    
    
  </div>
</div>
  </div>
</div>

<script src="app.js"></script>
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
