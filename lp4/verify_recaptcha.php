<?php
header('Content-Type: application/json'); // Ensure JSON response format

// Replace with your actual Secret Key from Google reCAPTCHA
$secretKey = "6Lfkt8YqAAAAANhjKWITiMM7IYj08WR4OaJq3dtD";

// Get reCAPTCHA token from the POST request
$token = $_POST['token'] ?? '';

if (empty($token)) {
    echo json_encode(['success' => false, 'error' => 'Missing token']);
    exit;
}

// Prepare the request to Google reCAPTCHA API
$verifyURL = "https://www.google.com/recaptcha/api/siteverify";
$data = [
    'secret' => $secretKey,
    'response' => $token
];

// Use cURL to send the request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $verifyURL);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Decode the JSON response from Google
$responseData = json_decode($response, true);

// Debugging: Log API response to a file
file_put_contents('recaptcha_debug.log', print_r($responseData, true), FILE_APPEND);

// Check if response is valid
if (!isset($responseData['success'])) {
    echo json_encode(['success' => false, 'error' => 'Invalid API response', 'response' => $responseData]);
    exit;
}

// Set default score if missing
$score = $responseData['score'] ?? 0.0;

// Return the JSON response to the client
echo json_encode([
    'success' => $responseData['success'],
    'score' => $score
]);
