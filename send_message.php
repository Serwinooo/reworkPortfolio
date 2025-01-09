<?php
include 'src/include/db_connect.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);

    $device_id = mysqli_real_escape_string($conn, $input['device_id']);
    $sender_role = mysqli_real_escape_string($conn, $input['sender_role']);
    $message = mysqli_real_escape_string($conn, $input['message']);

    $query = "INSERT INTO messages (device_id, sender_role, message) VALUES ('$device_id', '$sender_role', '$message')";
    if (mysqli_query($conn, $query)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => mysqli_error($conn)]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request']);
}

mysqli_close($conn);
?>
