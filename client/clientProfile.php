<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="../css/style.css"> <!-- Ensure correct CSS file path -->

<style>
  /* General Form Styling */
form {
  background: #f9f9f9;
  border: 1px solid #ddd;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  max-width: 500px;
  margin: 20px auto;
  padding: 20px;
  font-family: 'Poppins', sans-serif;
}

form label {
  display: block;
  margin-bottom: 8px;
  font-size: 16px;
  color: #333;
}

form input[type="email"],
form input[type="tel"],
form textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  margin-bottom: 15px;
  box-sizing: border-box;
}

form input[type="email"]:focus,
form input[type="tel"]:focus,
form textarea:focus {
  border-color: #ff9800;
  outline: none;
  box-shadow: 0 0 5px rgba(255, 152, 0, 0.5);
}

form button {
  display: block;
  width: 100%;
  padding: 12px;
  font-size: 18px;
  font-weight: bold;
  background: #ff9800;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background 0.3s ease, transform 0.2s ease;
}

form button:hover {
  background: #e68900;
  transform: scale(1.05);
}

</style>

</head>
<body>
  <!-- Wrapper -->
  <div class="wrapper">
    <!-- Header -->
  

    <!-- Banner Area -->
    <div class="banner-area">
      <div class="banner-txt">
        <div class="banner-txt-left">
          <h1>Welcome, [Client Name]</h1> <!-- Replace dynamically -->
        </div>
        <div class="banner-txt-right">
          <h2>Manage Your Information</h2>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <div class="warpper-mid">
      <div class="mid-left">
        <h2>Personal Details</h2>
        <ul class="item-1">
          <li><strong>Full Name:</strong> John Smith</li>
          <li><strong>Client ID:</strong> C12345</li>
          <li><strong>Email:</strong> johnsmith@example.com</li>
          <li><strong>Phone:</strong> +91-9876543210</li>
          <li><strong>Address:</strong> 123 Street, City, State</li>
        </ul>

        <h2>Edit Information</h2>
        <form action="#">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="Update Email">
          <label for="phone">Phone:</label>
          <input type="tel" id="phone" name="phone" placeholder="Update Phone">
          <label for="address">Address:</label>
          <textarea id="address" name="address" placeholder="Update Address"></textarea>
          <button type="submit">Save Changes</button>
        </form>
      </div>
    </div>

      

    <!-- Footer -->
    <div class="warpper-bot">
      <div class="footer-txt">
      &copy; 2024 Law Agen Private Limited | <a href="#">Contact Support</a>
      </div>
    </div>
  </div>
</body>
</html>
