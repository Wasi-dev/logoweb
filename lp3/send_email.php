<?php
if (isset($_POST['to']) && isset($_POST['subject']) && isset($_POST['message']) && isset($_POST['headers'])) {
    $to = explode(',', $_POST['to']); // Convert comma-separated emails to array
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = $_POST['headers'];

    foreach ($to as $email) {
        if (mail(trim($email), $subject, $message, $headers)) {
            echo "Email sent to: " . trim($email) . "<br>";
        } else {
            echo "Failed to send email to: " . trim($email) . "<br>";
        }
        sleep(2); // Prevent spam blocking by delaying each email
    }
} else {
    echo "Missing required parameters.";
}
?>
