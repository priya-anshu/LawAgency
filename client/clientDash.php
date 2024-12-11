<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Client Dashboard</title>
  <link rel="stylesheet" href="../css/style.css"> <!-- Ensure correct CSS file path -->
  <style>
  /* General styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
}

/* Container for the recommendation system */
.recommendation-system {
    max-width: 800px;
    margin: 50px auto;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    animation: fadeIn 1.5s ease;
}

/* Heading styles */
h1 {
    font-size: 2.5em;
    color: #0077b6;
    margin-bottom: 20px;
    line-height: 1.4;
}

h1 span {
    font-weight: bold;
    color: #00b4d8;
}

h2 {
    color: #0077b6;
    margin-top: 30px;
    font-size: 1.8em;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Form styling */
form {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 10px;
}

label {
    font-size: 1.2em;
    color: #333;
    margin-bottom: 5px;
}

input[type="text"],
input[type="number"] {
    width: 80%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1em;
    transition: all 0.3s ease;
}

input[type="text"]:focus,
input[type="number"]:focus {
    border-color: #0077b6;
    box-shadow: 0 0 5px rgba(0, 119, 182, 0.5);
}

/* Button styling */
button {
    background-color: #00b4d8;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 1.2em;
    cursor: pointer;
    transition: all 0.3s ease;
    width: 50%;
    margin-top: 20px;
}

button:hover {
    background-color: #0077b6;
    transform: scale(1.05);
}

/* Result area */
#result {
    background-color: #e0f7fa;
    padding: 20px;
    margin-top: 20px;
    border-radius: 8px;
    min-height: 30px;
    border: 1px solid #0077b6;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .recommendation-system {
        padding: 15px;
    }

    h1 {
        font-size: 2em;
    }

    h2 {
        font-size: 1.5em;
    }

    input[type="text"],
    input[type="number"] {
        width: 90%;
    }

    button {
        width: 70%;
    }
}
/* Result area */
#result {
    background-color: #e0f7fa;
    padding: 20px;
    margin-top: 30px;
    border-radius: 8px;
    min-height: 50px;
    max-height: 300px; /* Limit the height to avoid overflow */
    overflow-y: auto; /* Add scroll if content exceeds max height */
    border: 1px solid #0077b6;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    text-align: left; /* Align text properly */
    width: 100%; /* Ensure it fits the parent box */
    box-sizing: border-box; /* Include padding and border in width calculation */
    word-wrap: break-word; /* Prevent long words from overflowing */
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
          <h1>Welcome Alpha!</h1> <!-- Dynamically replace with client name -->
        </div>
        <div class="banner-txt-right">
          <h2>Your Personalized Dashboard</h2>
        </div>
      </div>
    </div>

    <!-- Main Content -->
   


    <div class="warpper-mid">
      <!-- Left Section -->
      <div class="mid-left">
        <h2>Your Details</h2>
        <ul class="item-1">
          <li><strong>Client ID:</strong> 123</li> <!-- Replace with dynamic data -->
          <li><strong>Email:</strong> alpha@example.com</li>
          <li><strong>Phone:</strong> +91-8885554445</li>
          <li><strong>Address:</strong> 123 Green St, Springfield</li>
        </ul>

        <h2>Your Assigned Lawyer</h2>
        <ul class="item-1">
          <li><strong>Lawyer Name:</strong> Shivam Gusain</li> <!-- Replace with dynamic data -->
          <li><strong>Contact Number:</strong> +91-9876543211</li>
          <li><strong>Email:</strong> shivam@lawagenc.com</li>
        </ul>
      </div>



      <!-- Right Sidebar -->
      <div class="mid-right">
        <div class="midround-bg1">
          <h4>Quick Access</h4>
          <div class="mainmenu">
            <ul>
              <li><a href="../client/clientProfile.php">Profile</a></li>
              <li><a href="../client/clientCaseStudy.php">View Case Details</a></li>
              <li><a href="../client/clientNotify.php">Notifications</a></li>
              <li><a href="../client/client.php">Log Out</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

      <!-- Lawyers Recommendations System-->
      <div class="recommendation-system">
        <h1>Hi... I'm NyaySarthi, <br> I am here to find the Best Lawyer for you...</h1>
        <form id="recommendForm">
            <label for="specialization">Specialization:</label>
            <input type="text" id="specialization" name="specialization" required><br><br>

            <label for="experience">Experience (years):</label>
            <input type="number" id="experience" name="experience" required><br><br>

            <label for="fees">Budget (fees):</label>
            <input type="number" id="fees" name="fees" required><br><br>

            <button type="submit">Get Recommendations</button>
        </form>
        <h2>Recommendations:</h2>
        <div id="result"></div>
      </div>
    
    <!-- Footer -->
    <div class="warpper-bot">
      <div class="footer-txt">
      &copy; 2024 Law Agen Private Limited | <a href="#">Contact Support</a>
      </div>
      
    </div>
  </div>

  <script>
   document.getElementById("recommendForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const specialization = document.getElementById("specialization").value;
    const experience = document.getElementById("experience").value;
    const fees = document.getElementById("fees").value;

    fetch("http://127.0.0.1:5000/recommend", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            specialization,
            experience,
            fees,
        }),
    })
    .then(response => response.json())
    .then(data => {
        const resultDiv = document.getElementById("result");
        resultDiv.innerHTML = "";
        data.recommendations.forEach(lawyer => {
            resultDiv.innerHTML += `
                <p><strong>Name:</strong> ${lawyer.name}</p>
                <p><strong>Specialization:</strong> ${lawyer.specialization}</p>
                <p><strong>Experience:</strong> ${lawyer.experience} years</p>
                <p><strong>Fees:</strong> ${lawyer.fees}</p>
                <p><strong>Contact:</strong> ${lawyer.contact_number}</p>
                <p><strong>Email:</strong> ${lawyer.email}</p>
                <hr>`;
        });
    });
});
  </script>

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
