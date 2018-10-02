<html>
	<head>
	<title>Delete Order</title>
	<meta charset ="utf-8" />
</head>

<body>
<?php

include "inc_DBConnect.php";

$sql = "DELETE FROM orders WHERE order_id = $uID";

if ($DBConnect->query($sql) === TRUE) {
    echo "Record deleted successfully";
} 
else {
    echo "Error deleting record: ." . mysqli_error($DBConnect);
}
    
mysqli_close($DBConnect);   

?>
</body>
</html>