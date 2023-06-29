<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diah Cookies</title>
    <link rel="icon" type="image/x-icon" href="https://w7.pngwing.com/pngs/564/36/png-transparent-bakery-egg-tart-pastry-cartoon-nut-cookies-food-nuts-happy-birthday-vector-images.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="Page4.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="begin">
    <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Page2.html">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Page3.html">Booking</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="Page4.html">Booking Status</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Page5.html">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Page6.html">About Us</a>
        </li>
      </ul>
    </div>


    <div class="tabelres">
      <table width="850px" height="auto">
        <thead>
            <th>ID Order</th>
            <th>Status</th>
        </thead>
        <tbody>
            <?php
            require_once 'connectDatabase.php';

            $query = "SELECT booking_id, pickup FROM bookings";
            $result = $conn->query($query);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $bookingId = $row['booking_id'];
        $pickup = $row['pickup'];
        $status = $pickup == 1 ? 'Ready' : 'Shipped';

        echo "<tr>";
        echo "<td>$bookingId</td>";
        echo "<td>$status</td>";
        echo "</tr>";
    }
} else {
    echo "Error executing the query: " . $conn->error;
}
            ?>
        </tbody>
    </table>
    </div>

    <footer class="footer text-faded text-center py-5">
        <div class="container"><p class="m-0 small">Copyright &copy; Diah Cookies 2023</p></div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Page3.js"></script>
</body>
</html>