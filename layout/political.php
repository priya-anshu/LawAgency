<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>criminal</title>
  <meta name="description" content="Description of your site goes here">
  <meta name="keywords" content="keyword1, keyword2, keyword3">
  <link href="../css/style.css" rel="stylesheet" type="text/css">
  <style type="text/css">

.style1 {font-weight: bold}

  </style>
    <style type="text/css">

.style1 {font-weight: bold}
/* Center alignment and table styling */
table {
  margin: 20px auto;
  border-collapse: collapse;
  width: 70%;
  background-color: #f9f9f9;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  border: 1px solid #ccc;
}

th {
  text-align: left;
  font-family: 'Arial', sans-serif;
  font-size: 14px;
  padding: 10px;
  border: 1px solid #ddd;
  background-color: #eaeaea;
}

/* Input and textarea styling */
input[type="text"],
textarea {
  width: 90%;
  padding: 8px;
  margin: 5px 0;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-family: 'Arial', sans-serif;
  font-size: 14px;
}

textarea {
  height: 60px;
  resize: vertical;
}

/* Radio button styling */
input[type="radio"] {
  margin-right: 5px;
}

label {
  font-family: 'Arial', sans-serif;
  font-size: 14px;
  color: #333;
}

/* Submit button styling */
input[type="submit"] {
  background-color: #007bff;
  color: white;
  font-size: 14px;
  border: none;
  padding: 8px 12px;
  cursor: pointer;
  border-radius: 4px;
  transition: background-color 0.3s;
}

input[type="submit"]:hover {
  background-color: #0056b3;
}

/* Form container styling */
form {
  margin: 0;
}

div[align="left"] {
  padding: 5px;
}

/* Responsive design */
@media (max-width: 768px) {
  table {
    width: 90%;
  }

  input[type="text"],
  textarea {
    width: 100%;
  }
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
            <h1 class="style1"> DETECTIVE <br>
            AGENCY </h1>
          </div>
          <div class="banner-txt-right">
            <br><br><br><br><br><br>
            <h2> Justice Is An Essential Human Value.... </h2>
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
    <div class="mid-gap"></div>
    <div class="mid-left">
<center>	
  <table width="171" border="1">
    <tr>
      <th width="161" scope="col"><form id="form1" name="form1" method="post" action="">
        <label>
        <div align="left">Case ID                       
          <input type="text" name="textfield" />
        </div>
        </label>
      </form>      </th>
    </tr>
    <tr>
      <th scope="row"><form id="form2" name="form2" method="post" action="">
        <label>
        <div align="left">Client Name
          <input type="text" name="textfield2" />
        </div>
        </label>
                    </form></th>
    </tr>
    <tr>
      <th scope="row">        <form id="form3" name="form3" method="post" action="">
          <label>
            <div align="left">Address
              <textarea name="textarea"></textarea>
            </div>
          </label>
        </form></th></tr>
    <tr>
      <th scope="row">        <form id="form4" name="form4" method="post" action="">
          <label>
            <div align="left">Case Type
              <input type="text" name="textfield3" />
            </div>
          </label>
        </form></th></tr>
    <tr>
      <th scope="row">        <form id="form5" name="form5" method="post" action="">
          <label>
            <div align="left">lawyer
              <input type="text" name="textfield4" />
            </div>
          </label>
        </form></th></tr>
    <tr>
      <th scope="row"><div align="left">
        <form id="form6" name="form6" method="post" action="">
          <label>Client Suggestion
            <textarea name="textarea2"></textarea>
            </label>
        </form>
      </div></th>
    </tr>
    <tr>
      <th scope="row"><div align="left">
        <form id="form7" name="form7" method="post" action="">
          <label>Client ID
            <input type="text" name="textfield5" />
            </label>
        </form>
      </div></th>
    </tr>
    <tr>
      <th scope="row"><div align="left">
        <form id="form8" name="form8" method="post" action="">
          <label>Age
          <input type="text" name="textfield6" />
          </label>
        </form>
      </div></th>
    </tr>
    <tr>
      <th scope="row"><div align="left">
        <form id="form9" name="form9" method="post" action="">
          <label>
Select Sex<br>
              <input type="radio" name="sex" value="male">Male<br>
<input type="radio" name="sex" value="female">Female
          </label>
        </form>
        </div></th>
    </tr>
    <tr>
      <th scope="row"><div align="left">
        <form id="form10" name="form10" method="post" action="">
          <label>Registration On
            <input type="text" name="textfield7" />
            </label>
        </form>
        </div></th>
    </tr>
    <tr>
      <th scope="row"><div align="left">
        <form id="form11" name="form11" method="post" action="">
          <label>Display Information
            <textarea name="textarea3"></textarea>
            </label>
            <label>
          <input type="submit" value="submit" />
        </label>
        </form>
        </div></th>
    </tr>
  </table></center>


      <ul class="item-1">
        <li> Sed ac nisi sed urna vehicula hendrerit. Nunc massa. Nam ut sem
          at odio accumsan ummy aliquet, ipsum nunc euismod elit, volutpat. </li>
        <li> Mauris risus tellus, sodales quis, sagittis vitae, molestie sed,
          nunc. Fusce ornare, turpis vel rutrum blandit, enim diam aliquet purus,
          vel accumsan risus enim sit amet nisl. Ut fringilla ornare libero. Nunc
          sodales. </li>
      </ul>
      <div>
        <ul class="readmore-1">
          <li><a href="#">read more</a></li>
        </ul>
      </div>
      <h3 style="padding: 10px 0px 5px 30px;">Recent <span>Articles</span></h3>
      <ul class="item-1">
        <li> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin
          malesuada leo quis lectus. Maecenas dignissim vestibulum sapien. </li>
        <li> Etiam ligula tellus, suscipit sit amet, cursus quis, vestibulum
          ut, est. Praesent eget massa viverra odio tincidunt fringilla. </li>
        <li> Vestibulum posuere molestie purus. Vivamus eget libero. Nulla
          nonummy nunc ac sem. In odio tortor, ullamcorper sollicitudin, congue
          sit amet, bibendum vehicula, lectus. </li>
      </ul>
      <div>
        <ul class="readmore-1">
          <li><a href="#">read more</a></li>
        </ul>
      </div>
    </div>
    <div class="mid-right">
      <div class="topround-bg1">&nbsp;</div>
      <div class="midround-bg1">
        <h4 style="padding: 5px 50px 5px 54px;">Case we deals in</h4>
        <div style="padding: 10px 10px 10px 36px;"><left><img src="images\pg1pic1.jpg"></left></div>
        
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
