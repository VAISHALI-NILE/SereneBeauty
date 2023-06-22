<?php
$conn = new mysqli("localhost:3307", "root", "", "serenebeauty") or die("Connect failed: %s\n" . $conn->error);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['date'])) {
    $date = $_GET['date'];

    $sql = "SELECT time FROM bookings WHERE date = '$date'";
    $result = $conn->query($sql);
    $bookedSlots = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $bookedSlots[] = $row['time'];
        }
    }

    $availableSlots = array_diff(['09:00:00', '10:00:00', '11:00:00', '12:00:00', '13:00:00', '14:00:00', '15:00:00', '16:00:00'], $bookedSlots);

    if (empty($availableSlots)) {
        // All time slots are booked for the selected date
        echo json_encode([]);
    } else {
        echo json_encode(array_values($availableSlots));
    }
}

$conn->close();
?>
