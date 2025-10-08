<?php

$servername = "localhost";
$username = "root";      
$password = "pass";          
$dbname = "tennisclub"; 
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$firstname = $_POST['firstname'];
$surname = $_POST['surname'];


$sql = "INSERT INTO Member (firstname, surname) VALUES ('$firstname', '$surname')";

if ($conn->query($sql) === TRUE) {
    echo "New member added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
