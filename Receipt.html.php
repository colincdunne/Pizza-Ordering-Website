<!DOCTYPE html>
<head>
	<title>Pizza Order Receipt</title>
	<meta charset="utf-8">
</head>

<body>
<?php

include "inc_DBConnect.php";
 
$db = "SELECT * FROM orders";
$check = $conn->query($db);
    
if ($check->num_rows > 0) {
    while($row = $check->fetch_assoc()) {
        echo "Order ID: " . $row["order_id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " - Address: " . $row["address"]. " - Email: " . $row["email"]. " - Phone: " . $row["phone"]. " - Pizza Size: " . $row["size"]. " - Anchovies: " . $row["anchovies"]. " - Pineapple: " . $row["pineapple"]. " - Pepperoni: " . $row["pepperoni"]. " - Peppers: " . $row["peppers"]. " - Olives: " . $row["olives"]. " - Onions: " . $row["onion"]. " - Total Price: " . $row["price"]. "<br>";
    }
} else {
    echo "0 results found";
}
$conn->close();
    
?>   

<p>To Edit/Update your order please <a href="UpdateOrder.php">Click Here</a></p>
<br>
<p>To Undo/Delete your order please <a href="DeleteOrder.php">Click Here</a></p>
    
</body>
</html>