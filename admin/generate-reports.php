<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>Generate Reports</title>

<style>
/* generate-reports.css */

/* Page Wrapper */
.wrapper {
  background-color: #f9fbfc;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Heading */
h1 {
  text-align: center;
  color: #16a085;
}

/* Form Styles */
form {
  margin: 20px auto;
  max-width: 600px;
  background-color: #ffffff;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 8px;
}

form label {
  font-weight: bold;
  margin-bottom: 8px;
  display: block;
  color: #34495e;
}

form input,
form select,
form button {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  border: 1px solid #ddd;
  border-radius: 6px;
}

form button {
  background-color: #1abc9c;
  color: white;
  font-weight: bold;
  cursor: pointer;
  border: none;
}

form button:hover {
  background-color: #16a085;
}

</style>

</head>
<body>
  <div class="wrapper">
    <h1>Generate Reports</h1>
    <p>Select criteria and generate reports.</p>

    <!-- Form for report generation -->
    <form id="reportForm" style="max-width: 50%; margin: auto;">
      <label for="reportType">Report Type:</label>
      <select id="reportType">
        <option value="user">User Report</option>
        <option value="activity">Activity Log</option>
        <option value="case">Case Report</option>
      </select>
      <br><br>
      <label for="startDate">Start Date:</label>
      <input type="date" id="startDate" required>
      <br><br>
      <label for="endDate">End Date:</label>
      <input type="date" id="endDate" required>
      <br><br>
      <button type="button" onclick="generateReport()">Generate Report</button>
    </form>

    <div id="reportOutput" style="margin: 20px auto; padding: 10px; border: 1px solid #ddd; max-width: 80%; display: none;">
      <h3>Report Output</h3>
      <pre id="outputContent"></pre>
    </div>

    <script type="module">
      import { db, ref, query, orderByChild, startAt, endAt, get } from './firebase-init.js';

      // Generate report based on user selection
      async function generateReport() {
        const reportType = document.getElementById("reportType").value;
        const startDate = document.getElementById("startDate").value;
        const endDate = document.getElementById("endDate").value;

        if (!startDate || !endDate) {
          alert("Please select both start and end dates.");
          return;
        }

        try {
          const reportRef = ref(db, `${reportType}/`);
          const reportQuery = query(reportRef, orderByChild("timestamp"), startAt(startDate), endAt(endDate));
          const snapshot = await get(reportQuery);

          let reportOutput = "No data found for the selected criteria.";
          if (snapshot.exists()) {
            reportOutput = JSON.stringify(snapshot.val(), null, 2);
          }

          document.getElementById("outputContent").innerText = reportOutput;
          document.getElementById("reportOutput").style.display = "block";
        } catch (error) {
          console.error("Error generating report:", error.message);
          alert("Error generating report. Check console for details.");
        }
      }
    </script>
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
