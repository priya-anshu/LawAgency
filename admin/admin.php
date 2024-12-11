<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
 
  <link rel="stylesheet" href="../css/style.css">

  <style type="text/css">
    .style1 {
      font-weight: bold
    }

   /* General Form Styling */
form {
  background: linear-gradient(to bottom, #ffffff, #f8f8f8);
  border: 1px solid #ddd;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  max-width: 400px;
  margin: 20px auto;
  padding: 20px;
  font-family: 'Poppins', sans-serif;
}

form table {
  width: 100%;
  border-collapse: collapse;
}

form th {
  text-align: left;
  color: #444;
  font-size: 16px;
  padding: 8px 0;
}

form td {
  padding: 8px 0;
}

form input[type="text"],
form input[type="password"] {
  width: 95%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  transition: border-color 0.3s ease;
  box-sizing: border-box;
}

form input[type="text"]:focus,
form input[type="password"]:focus {
  border-color: #ff9800;
  outline: none;
}

form button {
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

form .style2 {
  text-align: center;
  font-size: 24px;
  font-weight: bold;
  color: #333;
  margin-bottom: 15px;
  text-transform: capitalize;
}

form center {
  margin: 0;
}

form th[colspan="2"] {
  background-color: #f0f0f0;
  text-align: center;
  padding: 10px 0;
  font-size: 20px;
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
            <li><a href="../layout/contect.php">Contact us</a></li>
            </ul>
          </div>
          <div class="nav-sh"></div>
        </div>
        <div class="banner-right-sh1"></div>
      </div>
    </div>
    <div class="warpper-mid">
      <div class="mid-gap"></div>
      <div class="mid-left">
        <h2 style="padding: 20px 0px 5px 30px;">Welcome to <span> Administration Page</span></h2><br>
        <div>
          <center> <img src="../images\detective.jpeg" width="550" height="250"></center><br>
        </div>
        <form action="../admin/adminLogin.php"  method="POST">
          <center>
            <table border="0">
              <tr>
                <th colspan="2" bgcolor="#F0F0F0" scope="col">
                  <p class="style2">Admin Login</p>
                </th>
              </tr>
              <tr>
                <th width="82" scope="row">
                  <div align="left">Email </div>
                </th>
                <td width="157"><input type="text" name="email" placeholder="Enter Admin Email" required /></td>
              </tr>
              <tr>
                <th height="42" scope="row">
                  <div align="left">Password</div>
                </th>
                <td><input type="password" name="password" placeholder="Enter Password" required /></td>
              </tr>

              

              <tr>
                <th height="42" colspan="2" scope="row">
                  <div align="left">
                    <button type="submit">Login</button>
                  </div>
                </th>
              </tr>
            </table>
          </center>
        </form>
      </div>

      <div class="mid-right">
        <div class="topround-bg1">&nbsp;</div>
        <div class="midround-bg1">
          <h4 style="padding: 5px 50px 5px 54px;">Case we deal in</h4>
          <div style="padding: 10px 10px 10px 36px;">
            <left><img src="images\pg1pic1.jpg"></left>
          </div>

          <div class="mainmenu">
            <ul>
            <li><a href="../layout/criminal.php">CRIMINAL</a></li><br>
            <li><a href="../layout/spause.php">SPOUSE</a></li><br>
            <li><a href="../layout/political.php">POLITICAL</a></li><br>
            <li><a href="../layout/dowry.php">DOWRY</a></li><br>
            <li><a href="../layout/misc.php">MISC</a></li>
            </ul>
          </div>
        </div>
        <div class="botround-bg1">&nbsp;</div>
      </div>
      <div class="mid-gap"></div>
    </div>
  </div>
</body>

</html>
