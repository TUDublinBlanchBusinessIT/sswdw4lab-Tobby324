<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "pass";
$dbname = "tennisclub";
$port = 3306;

// Connect to the database
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Updated SQL query based on your table
$sql = "SELECT id, firstname, surname FROM Member";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

// Display results
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["id"] . " - " . $row["firstname"] . " " . $row["surname"] . ", ";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
