<html>


<?php

$productname = $_POST["productname"];
$manunfacturer = $_POST["manufacturer"];
$price = $_POST["price"];
$imageurl = $_POST["imageurl"];


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


$sql = "INSERT INTO seller VALUES (null,'$productname', '$manunfacturer', '$price', '$imageurl')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>
</html>