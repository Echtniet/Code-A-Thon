<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "jobdating";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$stmt = $conn->prepare("SELECT companyname, street, city, state, zip FROM recruiters;");
$stmt->execute(); 
$stmt->bind_result($company, $street, $city, $state, $zip);
while ($stmt->fetch()) {
	echo $companyname . ", " . $street . ", " . $city . ", " . $state . ", " . $zip;
}




$stmt->close();
$conn->close();

?>