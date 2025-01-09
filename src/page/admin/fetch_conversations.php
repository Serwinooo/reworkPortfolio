<?php
include '../../include/db_connect.php';

header('Content-Type: application/json');

$query = "SELECT DISTINCT device_id FROM messages";
$result = mysqli_query($conn, $query);

if ($result) {
    $conversations = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $conversations[] = ['device_id' => $row['device_id']];
    }
    echo json_encode(['success' => true, 'conversations' => $conversations]);
} else {
    echo json_encode(['success' => false, 'error' => mysqli_error($conn)]);
}

mysqli_close($conn);
?>
