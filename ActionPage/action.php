<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h3>Thank you. Your payment done successfully. </h3>

<?php
$servername= "localhost";
$username="sabacafe";
$password="sabacafe123";
$dbname="cafe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo 'works';

$insertSql = "INSERT INTO `cardInformation`(`NameOnCard`, `cardNumber`, `expMonth`, `expYear`, `cvv`)" .  
" VALUES( '" . $_POST['NameonCard'] . "','" . $_POST['cardnumber']  . "','" . $_POST['expmonth']  . "','" . $_POST['expyear']  . "','" . $_POST['cvv'] . "')";

//INSERT INTO `cardInformation`(`NameOnCard`, `cardNumber`, `expMonth`, `expYear`, `cvv`)
$conn-> query ($insertSql);

$cardId = $conn -> insert_id;


$usersql = "INSERT INTO `userInformation`(`fullName`, `email`, `address`, `zipcode`, `city`, `cardInformationId`) " .  
" VALUES( '" . $_POST['fullname'] . "','" . $_POST['email']  . "','" . $_POST['address']  . "','" . $_POST['zipcode']  . "','" . $_POST['city'] . "','" . $cardId . "')";
var_dump($usersql);
$conn-> query ($usersql);




//INSERT INTO `userInformation`(`fullName`, `email`, `address`, `zipcode`, `city`, `cardInformationId`) 

/*
echo $_POST['fullname'];
echo $_POST['email'];
echo $_POST['address'];
echo $_POST['city'];
echo $_POST['zipcode'];

echo $_POST['nameOnCard'];
echo $_POST['cardNumber'];
echo $_POST['expMonth'];
echo $_POST['expyear'];
echo $_POST['cvv'];



$userinformation = array(
    "fullname" => $_POST['fullname'],
    "email" => $_POST['email'],
    "address" => $_POST['address'],
    "city" => $_POST['city'],
    "zipcode" => $_POST['zipcode'],
);



$payment = array(
    "nameOnCard" => $_POST['nameOnCard'],
    "cardNumber" => $_POST['cardNumber'],
    "expMonth" => $_POST['expMonth'],
    "expyear" => $_POST['expyear'],
    "cvv" => $_POST['cvv'],
);

*/



?>













</body>
</html>