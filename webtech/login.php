<html>


<?php

$userna = $_POST["usern"];
$email = $_POST["email"];
$pass = $_POST["pass"];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoptrooper";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO users VALUES (null,'$userna', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: accountcreated.html");
  exit();
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>
</html>