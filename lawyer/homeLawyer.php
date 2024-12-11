<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>Lawyer Home</title>
  <meta name="description" content="Lawyer Home Page">
  <meta name="keywords" content="lawyer, dashboard, home">
  <link href="../css/style.css" rel="stylesheet" type="text/css">

  <script src="https://www.gstatic.com/firebasejs/9.17.2/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/9.17.2/firebase-database.js"></script>

  <style type="text/css">
    .main-content {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin: 20px;
    }
    .lawyer-dashboard {
      width: 70%;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
      background-color: #fff;
    }
    .lawyer-dashboard h1, .lawyer-dashboard h2 {
      color: #333;
    }
    .lawyer-dashboard h2 {
      margin-top: 20px;
    }
    .cases-list, .tools-list, .messages-list {
      margin: 10px 0;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      background-color: #f9f9f9;
    }
    .cases-list ul, .tools-list ul, .messages-list ul {
      list-style-type: none;
      padding: 0;
    }
    .cases-list li, .tools-list li, .messages-list li {
      margin: 5px 0;
    }
    .cases-list li a, .tools-list li a, .messages-list li a {
      text-decoration: none;
      color: #007bff;
    }
    .cases-list li a:hover, .tools-list li a:hover, .messages-list li a:hover {
      text-decoration: underline;
    }
    .tools-section, .messages-section {
      margin-top: 20px;
    }

    .mid-right {
      width: 25%;
    }
    .midround-bg1 {
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
      
    }
    .midround-bg1 h4 {
      margin-bottom: 15px;
     
    }
    .mainmenu ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }
    .mainmenu li {
      margin: 10px 0;
    }
    .mainmenu li a {
      text-decoration: none;
      
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
  <div class="main-content">
    <div class="lawyer-dashboard">
      <h1>Welcome, Shivam Gusian</h1>
      <p>Manage your cases, communicate with clients, and use tools to streamline your workflow.</p>

      <!-- Cases Section -->
      <div class="cases-list">
        <h2>Assigned Cases</h2>
        <ul>
          <li><a href="case-details.php?id=1">Case #101: Criminal Defense - John Doe</a></li>
          <li><a href="case-details.php?id=2">Case #102: Divorce Settlement - Jane Smith</a></li>
          <li><a href="case-details.php?id=3">Case #103: Business Dispute - ABC Corp</a></li>
        </ul>
      </div>

      <!-- Tools Section -->
      <div class="tools-section">
        <h2>Tools & Resources</h2>
        <div class="tools-list">
          <ul>
            <li><a href="schedule.php">Case Schedule Manager</a></li>
            <li><a href="document-manager.php">Document Manager</a></li>
            <li><a href="legal-library.php">Legal Library</a></li>
            <li><a href="court-calendar.php">Court Calendar</a></li>
          </ul>
        </div>
      </div>

      <!-- Messages Section -->
      <div class="messages-section">
        <h2>Messages from Clients</h2>
        <div class="messages-list">
          <ul>
            <li><a href="message-details.php?id=1">Message from John Doe: "Need clarification on..."</a></li>
            <li><a href="message-details.php?id=2">Message from Jane Smith: "Update on my case?"</a></li>
            <li><a href="message-details.php?id=3">Message from ABC Corp: "Documentation required..."</a></li>
          </ul>
        </div>
      </div>
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