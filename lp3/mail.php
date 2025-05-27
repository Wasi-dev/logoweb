<?php
// $name                   =      $_POST['name'];
// $lastname                   =      $_POST['lastname'];
// $email                   =      $_POST['email'];
// $phone                   =      $_POST['phone'];
// $package                =      $_POST['package'];
// $link                    =      $_POST['link'];
 

 

    
// echo $name ."<br>" . $email ."<br>" . $link."<br>". $phone ."<br>" .$package;
 
// exit();
$servername = "localhost";
$username = "devux";
$password = 'X8U$YUx69Sr@Va_';
$dbname = "logo_db";

// Database connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture Form Data
$name = $conn->real_escape_string($_POST['name']);
$lastname = $conn->real_escape_string($_POST['lastname']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']);
$package = $conn->real_escape_string($_POST['package']);
$link = $conn->real_escape_string($_POST['link']);
$msg = isset($_POST['msg']) ? $conn->real_escape_string($_POST['msg']) : '';
$current_date = date('Y-m-d H:i:s');

// Insert into Database
$sql = "INSERT INTO logo_leads (website_name, leadtitle, leadprice, name, email, phone, lastname , msg, sub_date)
        VALUES ('$link', '$package', '$package', '$name', '$email', '$phone', '$lastname', '$msg', '$current_date')";

if ($conn->query($sql) === TRUE) {
    // Redirect Immediately
    header("Location: https://logovisioneer.com/lp3/thankyou.php");
    flush();
    ob_flush();

    // Prepare Email Data
    // $to = "contact@logovisioneer.com, info@logovisioneer.com, gabriel.brown@logovisioneer.com, Aimankhan.official000@gmail.com";
    $to = "waseempixedustmedia@gmail.com";
    $from = "support@logovisioneer.com"; // Use an actual, existing email (not no-reply)
    $subject = "Client Order Query: " . $package;

    // HTML Email Body
    $message = "
    <html>
    <head><title>Client Order Query</title></head>
    <body>
        <p><strong>First Name:</strong> $name</p>
      <p><strong>Last Name:</strong><br>$lastname</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Package:</strong> $package</p>
        <p><strong>Message:</strong><br>$msg</p>
        <p><strong>Website URL:</strong> <a href='$link'>$link</a></p>
    </body>
    </html>";

    // Proper Email Headers
    $headers = "From: Logovisioneer Support <$from>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

    // Call `send_email.php` Asynchronously
    $postData = http_build_query([
        'to' => $to,
        'subject' => $subject,
        'message' => $message,
        'headers' => $headers
    ]);

    $cmd = "curl -X POST -d \"$postData\" https://logovisioneer.com/lp1/send_email.php > /dev/null 2>&1 &";
    exec($cmd);

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
