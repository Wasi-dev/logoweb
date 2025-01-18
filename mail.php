<?php

$name                   =      $_POST['name'];
$email                   =      $_POST['email'];
$phone                   =      $_POST['phone'];
$package                =      $_POST['package'];
$link                    =      $_POST['link'];
 $msg                    =      $_POST['msg'];

 

 

    
echo $name ."<br>" . $email ."<br>" . $link."<br>". $phone ."<br>" .$package."<br>" . $msg;
 
exit();


$device ="";
$servername = "localhost";
$username = "hamzctlb_infinixdesign";
$password = 'uS!Tr5p2$tM+';
$dbname = "hamzctlb_infinixdesign";

function getVisIpAddr() {

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

// Store the IP address
$vis_ip = getVisIPAddr();

// Display the IP address
echo $vis_ip . "<br><br><br>";



$ip = $vis_ip;

// Use JSON encoded string and converts
// it into a PHP variable
$ipdat = @json_decode(file_get_contents(
    "http://www.geoplugin.net/json.gp?ip=" . $ip));

function isMobileDevice() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo
|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i"
        , $_SERVER["HTTP_USER_AGENT"]);
}

if(isMobileDevice()){
    $device = "Mobile Browser Detected";
}
else {
    $device = "Desktop Browser Detected";
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$current_date = date('Y-m-d H:i:s');




$name                    =      $_POST['name'];
$email                   =      $_POST['email'];
$phone                   =      $_POST['phone'];
$package                 =      $_POST['package'];
$link                    =      $_POST['link'];
if($_POST['msg'] != null){$msg=$_POST['msg'];}else{$msg="";}



$sql = "INSERT INTO infinix_leads (website_name, leadtitle, leadprice, name, email, phone, msg, sub_date)
	VALUES ('".$link."', '".$_POST["package"]."', '".$_POST["package"]."', '".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["phone"]."', '".$msg."', '".$current_date."' )";

// printf($sql);
// exit();

if ($conn->query($sql) === TRUE) {

    $sin_rec = "SELECT * FROM infinix_leads ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $sin_rec);

    if($row = mysqli_fetch_array($result)){

        $to = "info@designsfusion.com,aaron@infinixdesigns.com";
        $from    =      $_POST['email'];


        $subject = "Client Order Query " . $_POST['package'];

        // $message = $email ."\n\n". $name . "\n\n " . $phone . " \n\n wrote the following:" . "\n\n" . $_POST['msg'] . "\n\n" .$_POST["webname"];

        $message = "Name : ". $name . " \n Email : " . $email . "\n Phone : " . $phone . "\n Package : ".$package . "\n Message : " . $msg  ."\n Website URL  : ". $link ."\n Device : ".  $device
            ."\n Country Name : ".  $ipdat->geoplugin_countryName ."\n City Name : ".  $ipdat->geoplugin_city ."\n State Name : ".  $ipdat->geoplugin_region;
        $headers = "From:" . $from;

        if(mail($to, $subject, $message))
        {
            //header("Location: https://www.infinixdesigns.com/InfinixController/review_order/".$row['id']);
            header("Location: https://www.infinixdesigns.com/thank-you");
        }
    }

}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



