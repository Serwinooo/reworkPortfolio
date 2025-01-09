<?php
header('Content-Type: application/json');  // Ensure the response is JSON

// Enable error reporting for debugging
ini_set('display_errors', 1); 
error_reporting(E_ALL);

// Include database connection
include '../../include/db_connect.php';

if (mysqli_connect_errno()) {
    error_log('Database connection failed: ' . mysqli_connect_error());  // Log the error
    echo json_encode(['success' => false, 'message' => 'Database connection failed: ' . mysqli_connect_error()]);
    exit();
}

// Check if device_id is passed
if (!isset($_GET['device_id'])) {
    error_log('Device ID is missing');  // Log the missing parameter
    echo json_encode(['success' => false, 'message' => 'Device ID is missing']);
    exit();
}

$device_id = mysqli_real_escape_string($conn, $_GET['device_id']);
$query = "SELECT sender_role, message FROM messages WHERE device_id = '$device_id' ORDER BY created_at ASC";

// Log the query to check its validity
error_log('Executing query: ' . $query);  // Log the query

$result = mysqli_query($conn, $query);

if (!$result) {
    // Log the SQL error
    error_log('SQL Error: ' . mysqli_error($conn));  // Log any SQL error
    echo json_encode(['success' => false, 'message' => 'Database query failed: ' . mysqli_error($conn)]);
    exit();
}

if (mysqli_num_rows($result) > 0) {
    $messages = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $messages[] = $row;
    }
    // Log the messages for debugging
    error_log('Fetched messages: ' . json_encode($messages));  // Log the fetched messages
    echo json_encode(['success' => true, 'messages' => $messages]);
} else {
    echo json_encode(['success' => false, 'message' => 'No messages found']);
}

mysqli_close($conn);
?>
