<?php

require_once 'connectDatabase.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $number = isset($_POST['number']) ? $_POST['number'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $order = isset($_POST['order']) ? $_POST['order'] : '';
    $pickup = isset($_POST['pick-up']) ? $_POST['pick-up'] : '';

    $sql = "INSERT INTO bookings (name, number, email, address, order_list, pickup) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $name, $number, $email, $address, $order, $pickup);
    $stmt->execute();

    // Get the generated primary key value
    $bookingId = $stmt->insert_id;

    // Format the booking ID
    $formattedBookingId = 'CAKE' . str_pad($bookingId, 3, '0', STR_PAD_LEFT);

    // Close the statement and database connection
    $stmt->close();
    $conn->close();

    // Display a success message with the formatted booking ID
    echo "<script>
        alert('Booking submitted successfully. Your booking ID is: $formattedBookingId');
        window.location.href = 'Page3.html';
    </script>";
} else {
    echo "Invalid request";
}
?>
