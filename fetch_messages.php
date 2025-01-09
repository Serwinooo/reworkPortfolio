<?php
include 'src/include/db_connect.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['device_id'])) {
    $device_id = mysqli_real_escape_string($conn, $_GET['device_id']);

    $query = "SELECT * FROM messages WHERE device_id = '$device_id' ORDER BY timestamp ASC";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $messages = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $messages[] = $row;
        }
        echo json_encode(['success' => true, 'messages' => $messages]);
    } else {
        echo json_encode(['success' => false, 'error' => mysqli_error($conn)]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request']);
}

mysqli_close($conn);
?>
