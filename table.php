<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motorcycle Products</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h3>Yamaha Motorcycle Products</h3>

<?php
$products = array(
    array("name" => "Yamaha R1 Helmet (AGV Pista GP RR)", "price" => 75000.00, "stock" => 5),
    array("name" => "Yamalube Engine Oil (1L)", "price" => 650.00, "stock" => 12),
    array("name" => "Brembo Brake Pads (Front)", "price" => 4800.00, "stock" => 7),
    array("name" => "DID Motorcycle Chain (Gold Series)", "price" => 5200.00, "stock" => 4),
    array("name" => "NGK Iridium Spark Plug", "price" => 750.00, "stock" => 20),
    array("name" => "Michelin Pilot Road 5 Tire", "price" => 12500.00, "stock" => 6)
);
?>

<table class="custom-table">
    <tr>
        <th>No.</th>
        <th>Product Name</th>
        <th>Price (₱)</th>
        <th>Stock</th>
    </tr>

    <?php
    $no = 1;
    foreach ($products as $p) {
        $rowClass = ($p["stock"] < 10) ? "low-stock" : "";
        echo "<tr class='$rowClass'>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $p["name"] . "</td>";
        echo "<td>" . number_format($p["price"], 2) . "</td>";
        echo "<td>" . $p["stock"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
