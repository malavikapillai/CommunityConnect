<?php
// File: process_gemini.php

// Include configuration file
require_once 'config.php';

// Set headers to handle AJAX request
header('Content-Type: application/json');

// Get POST data
$input = json_decode(file_get_contents('php://input'), true);

if (!$input || !isset($input['message'])) {
    echo json_encode(['error' => 'No message provided']);
    exit;
}
  
$userMessage = $input['message'];
$context = $input['context'] ?? "You are a helpful community resource assistant.";

// Use the API key from config
$apiKey = GEMINI_API_KEY;

// Prepare the data for Gemini API
$data = [
    "contents" => [
        [
            "parts" => [
                [
                    "text" => $context . "\n\nUser: " . $userMessage
                ]
            ]
        ]
    ],
    "generationConfig" => [
        "temperature" => 0.7,
        "topK" => 40,
        "topP" => 0.95,
        "maxOutputTokens" => 1024,
    ]
];

// Make the API request to Gemini
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=" . $apiKey);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Process the response
if ($httpCode == 200) {
    $result = json_decode($response, true);
    
    // Extract the response text
    $responseText = "";
    if (isset($result['candidates'][0]['content']['parts'][0]['text'])) {
        $responseText = $result['candidates'][0]['content']['parts'][0]['text'];
        
        // Enhance the response with local resource knowledge
        $responseText = enhanceWithLocalResources($userMessage, $responseText);
    } else {
        $responseText = "I'm sorry, I couldn't generate a response at this time.";
    }
    
    echo json_encode(['response' => $responseText]);
} else {
    echo json_encode([
        'error' => 'API error',
        'details' => $response,
        'code' => $httpCode
    ]);
}

/**
 * Function to enhance Gemini's response with specific local resource information
 */
function enhanceWithLocalResources($query, $response) {
    // This function would ideally query a database of local resources
    // For demonstration, we'll use hardcoded examples
    
    $query = strtolower($query);
    
    // Add specific local resource information based on query keywords
    if (strpos($query, 'healthcare') !== false || strpos($query, 'doctor') !== false || strpos($query, 'medical') !== false) {
        $response .= "\n\nLocal healthcare resources:\n";
        $response .= "• Community Health Center: 123 Main St, (555) 123-4567\n";
        $response .= "• Free Medical Clinic: 456 Oak Ave, (555) 987-6543\n";
        $response .= "• County Health Department: 789 Government Blvd, (555) 222-3333";
    } 
    elseif (strpos($query, 'food') !== false || strpos($query, 'hungry') !== false || strpos($query, 'meal') !== false) {
        $response .= "\n\nLocal food resources:\n";
        $response .= "• First Community Food Bank: 101 Church St, Open Mon-Fri 9am-5pm\n";
        $response .= "• Meals on Wheels: (555) 444-5555\n";
        $response .= "• Weekly Community Dinner: Thursdays 6-8pm at Community Center";
    }
    elseif (strpos($query, 'housing') !== false || strpos($query, 'shelter') !== false || strpos($query, 'homeless') !== false) {
        $response .= "\n\nLocal housing resources:\n";
        $response .= "• Emergency Shelter: 222 Safe Haven Dr, (555) 777-8888\n";
        $response .= "• Housing Assistance Program: 333 Govt Center, (555) 666-9999\n";
        $response .= "• Tenant Rights Organization: (555) 111-2222";
    }
    
    return $response;
}
?>