<?php
// Include your database connection
include("../php/connection.php");

// Get the law_case from the AJAX request
if(isset($_POST['law_case'])) {
    $law_case = $_POST['law_case'];

    // Call the Python script to get recommendations
    // Ensure the python file path is correct
    $command = escapeshellcmd("../get_recommendations.py $law_case");
    $output = shell_exec($command);

    // Return the output (recommendation) as the response
    echo json_encode(array("recommendation" => $output));
}
?>
