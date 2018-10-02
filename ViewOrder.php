<!DOCTYPE html>
<head>  
    <meta charset = "utf-8">
        <title>View Order</title>
</head> 
<body> 
<?php   
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstName"])) {
        $nameErr = "First name is required";
    } 
    else {
        $firstName = test_input($_POST["firstName"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
            $nameErr = "Only letters and white space allowed"; 
        }
    }
    
    if (empty($_POST["lastName"])) {
        $lNameErr = "Last name is required";
    } 
    else {
        $lastName = test_input($_POST["lastName"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
            $lNameErr = "Only letters and white space allowed"; 
        }
    }
    
    if (empty($_POST["address"])) {
        $addressErr = "Address is required";
    }
  
    if (empty($_POST["emailAddress"])) {
        $emailErr = "Email is required";
    } 
    else {
        $email = test_input($_POST["emailAddress"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format"; 
        }
    }
    
    $phone = test_input($_POST["phoneNo"]);
    $numbers = preg_replace("%[^0-9]%", "", $phone);
    $length = strlen($numbers);
    if (empty($_POST["phoneNo"])) {
        $phoneErr = "Phone is required";
    }    
    else if($length < 10 || $length > 10) {
        $phoneErr = "Invalid phone format";
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
    
    
if (!isset($_POST['anchovies'])) {
    $addAnchovies = "Y";
}
else {
	$addAnchovies = "N";
}

if (!isset($_POST['pineapple'])) {
    $addPineapple = "Y";
}
else {
	$addPineapple = "N";
}

if (!isset($_POST['pepperoni'])) {
    $addPepperoni = "Y";
}
else {
	$addPepperoni = "N";
}

if (!isset($_POST['olives'])) {
    $addOlives = "Y";
}
else {
	$addOlives = "N";
}

if (!isset($_POST['onion'])) {
    $addOnion = "Y";
}
else {
	$addOnion = "N";
}

if (!isset($_POST['peppers'])) {
    $addPeppers = "Y";
}
else {
	$addPeppers = "N";
}
    
if (!isset($_POST['studentdiscount'])) {
    $Student = "Y";
}
else {
	$student = "N";
}
    

$uID = uniqid();
    
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
   
$sql = "INSERT INTO orders (order_id, student, firstname, lastname, email, address, phone, price, size, anchovies, pineapple, pepperoni, peppers, olives, onion) VALUES ('$uID', '$studentC' ,'$fNameC', '$lNameC', '$emailC', '$addressC', '$phoneC', '$priceC', '$sizeC', '$addAnchoviesC', '$addPineappleC', '$addPepperoniC', '$addPeppersC', '$addOlivesC', '$addOnionC');";
    
if(mysqli_query($DBConnect, $sql)){
    echo "Records inserted successfully.";
} 
else {
    echo "ERROR: Could not execute $sql." . mysqli_error($DBConnect);
}

mysqli_close($DBConnect);

?>
    
</body>
</html>
