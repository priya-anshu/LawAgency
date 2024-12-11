<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawyer Recommendation System</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Find the Best Lawyer for Your Case</h1>
    <form id="recommendationForm">
        <label for="query">Describe Your Case:</label>
        <input type="text" id="query" name="query" placeholder="Enter your case details">
        <button type="submit">Get Recommendations</button>
    </form>

    <div id="recommendations"></div>

    <script src="assets/js/script.js"></script>
</body>
</html>
