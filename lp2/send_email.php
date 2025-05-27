<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $to = "waseempixedustmedia@gmail.com";
    $from = "info@logovisioneer.com"; // Ensure this email exists
    $subject = "Client Order Query: " . $_POST['package'];

    // Email Content
    $message = "
    <html>
    <head><title>Client Order Query</title></head>
    <body>
        <p><strong>Name:</strong> {$_POST['name']}</p>
        <p><strong>Email:</strong> {$_POST['email']}</p>
        <p><strong>Phone:</strong> {$_POST['phone']}</p>
        <p><strong>Package:</strong> {$_POST['package']}</p>
        <p><strong>Budget:</strong> {$_POST['budget']}</p>
        <p><strong>Message:</strong><br>{$_POST['msg']}</p>
        <p><strong>Website URL:</strong> <a href='{$_POST['link']}'>{$_POST['link']}</a></p>
    </body>
    </html>";

    // Email Headers
    $headers = "From: Logovisioneer Support <$from>\r\n";
    $headers .= "Reply-To: {$_POST['email']}\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

    // Send Email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }
} else {
    echo "Invalid request.";
}

?>
