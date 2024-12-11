<?php
if (isset($_POST['case_details'])) {
    $case_details = $_POST['case_details'];
    $command = escapeshellcmd("python get_recommendations.py '$case_details'");
    $output = shell_exec($command);
    echo $output;
}
?>
