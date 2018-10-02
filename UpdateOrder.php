<html>
<head>  
	<meta charset = "utf-8">
	<title>Update Order</title>
</head> 

<body> 
<?php
  
    
    
$fName = $_POST['firstName'];
$lName = $_POST['lastName'];
$email = $_POST['emailAddress'];
$address = $_POST['address'];
$phone = $_POST['phoneNo'];
$tprice = $_POST['totalPrice'];
$size = $_POST['pizzaSize'];
$studentT = $_POST['student'];

include "inc_DBConnect.php"; 		
		
$fNameC = mysqli_real_escape_string($DBConnect, $fName);
$lNameC = mysqli_real_escape_string($DBConnect, $lName);
$emailC = mysqli_real_escape_string($DBConnect, $email);
$addressC = mysqli_real_escape_string($DBConnect, $address);
$phoneC = mysqli_real_escape_string($DBConnect, $phone);
$priceC = mysqli_real_escape_string($DBConnect, $tprice);
$sizeC = mysqli_real_escape_string($DBConnect, $size);
$studentC = mysqli_real_escape_string($DBConnect, $studentT);
$addAnchoviesC = mysqli_real_escape_string($DBConnect, $addAnchovies);
$addPineappleC = mysqli_real_escape_string($DBConnect, $addPineapple);
$addPepperoniC = mysqli_real_escape_string($DBConnect, $addPepperoni);
$addPeppersC = mysqli_real_escape_string($DBConnect, $addPeppers);
$addOlivesC = mysqli_real_escape_string($DBConnect, $addOlives);
$addOnionC = mysqli_real_escape_string($DBConnect, $addOnion);    
    
  
$id = "SELECT order_id FROM orders";    
    
$db = "UPDATE orders SET firstname=$fNameC, lastname=$lNameC, address=$addressC, email=$emailC, phone=$phoneC, student=$studentC, size=$sizeC, anchovies=$addAnchoviesC, pineapple=$addPineappleC, pepperoni=$addPepperoniC, peppers=$addPeppersC, olives=$addOlivesC, onion=$addOnionC WHERE order_id=$id";

if ($conn->query($db) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
    
?>     
		
</body>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                          