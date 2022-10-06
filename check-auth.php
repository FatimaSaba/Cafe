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

$sql = "SELECT * FROM `userlogin` WHERE username = '" . $_POST['uname'] . "' AND password = '" .$_POST['psw']."'"; // 

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    setcookie('loggedIn', 'true', time() + (86400 * 30), "/");
    header('Location: index.php');
}
else{
    header('Location: login.php');
}

?>