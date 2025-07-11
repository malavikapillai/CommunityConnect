<?php
// list_models.php
require_once 'config.php';

$apiKey = GEMINI_API_KEY;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://generativelanguage.googleapis.com/models/chat-bison-001/models?key=" . $apiKey);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

echo "<pre>";
echo "HTTP Code: " . $httpCode . "\n\n";
echo "Available Models: \n" . $response;
echo "</pre>";
?>