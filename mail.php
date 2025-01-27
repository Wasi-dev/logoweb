<?php

// $name                   =      $_POST['name'];
// $email                   =      $_POST['email'];
// $phone                   =      $_POST['phone'];
// $package                =      $_POST['package'];
//     $link                    =      $_POST['link'];
 

 

    
// echo $name ."<br>" . $email ."<br>" . $link."<br>". $phone ."<br>" .$package;
 
// exit();

$servername = "localhost";
$username = "devux";
$password = 'X8U$YUx69Sr@Va_';
$dbname = "logo_db";

function getVisIpAddr() {
 if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
 return $_SERVER['HTTP_CLIENT_IP'];
 } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
 return $_SERVER['HTTP_X_FORWARDED_FOR'];
 } else {
 return $_SERVER['REMOTE_ADDR'];
 }
}

$vis_ip = getVisIpAddr();

$ipdat = @json_decode(file_get_contents(
 "http://www.geoplugin.net/json.gp?ip=" . $vis_ip
));

function isMobileDevice() {
 return preg_match(
 "/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i",
 $_SERVER["HTTP_USER_AGENT"]
 );
}

$device = isMobileDevice() ? "Mobile Browser Detected" : "Desktop Browser Detected";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

$current_date = date('Y-m-d H:i:s');

// Escape user inputs
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']);
$package = $conn->real_escape_string($_POST['package']);
$link = $conn->real_escape_string($_POST['link']);
$msg = isset($_POST['msg']) ? $conn->real_escape_string($_POST['msg']) : '';

$sql = "INSERT INTO logo_leads (website_name, leadtitle, leadprice, name, email, phone, msg, sub_date)
 VALUES ('$link', '$package', '$package', '$name', '$email', '$phone', '$msg', '$current_date')";

if ($conn->query($sql) === TRUE) {
 $sin_rec = "SELECT * FROM logo_leads ORDER BY id DESC LIMIT 1";
 $result = $conn->query($sin_rec);

 if ($row = $result->fetch_assoc()) {
$to = "contact@logovisioneer.com, gabriel.brown@logovisioneer.com, waseempixedustmedia@gmail.com";
$from = "no-reply@" . parse_url($link, PHP_URL_HOST); // Use the website name as the sender

$subject = "Client Order Query " . $package;
$message = "Name: $name\nEmail: $email\nPhone: $phone\nPackage: $package\nMessage: $msg\nWebsite URL: $link\nDevice: $device\nCountry Name: " . $ipdat->geoplugin_countryName . "\nCity Name: " . $ipdat->geoplugin_city . "\nState Name: " . $ipdat->geoplugin_region;
$headers = "From: $from";

 if (mail($to, $subject, $message)) {
 header("Location: http://logovisioneer.com/thankyou.php");
 } else {
 echo "Error: Mail not sent.";
 }
 }
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>