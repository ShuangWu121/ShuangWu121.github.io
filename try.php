<?php
// Define the target URL
$targetUrl = 'https:idtest.veracity.com/api/users/me/changeEmail(internalpt47%2Bidentity%40gmail.com)?newEmail=internalpt47%2B%2526%40gmail.com'; // Replace with your API endpoint

 

// Data to send in the request body (if needed)
//$requestData = json_encode(['key' => 'value']); // Replace with your data

 

// Initialize cURL session
$ch = curl_init($targetUrl);

 

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT'); // Set the HTTP request method to PUT

 

// If you have data to send in the request body, uncomment the following lines:
// curl_setopt($ch, CURLOPT_POSTFIELDS, $requestData);
// curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

 

// Execute the cURL session
$response = curl_exec($ch);

 

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'cURL Error: ' . curl_error($ch);
} else {
    // Print the response
    echo 'Response: ' . $response;
}

 

// Close the cURL session
curl_close($ch);
?>
