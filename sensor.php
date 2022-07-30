<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
// Create Database

$sql = "CREATE DATABASE IF NOT EXISTS myDB " ;
//Check Database
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
// sql to create table
$sql = "DROP TABLE IF EXISTS MyValues"; 
$sql = "CREATE TABLE MyValues (
Sval INT(6) NOT NULL
)";
// check Table
if ($conn->query($sql) === TRUE) {
  echo "Table MyValues created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
//insert Valus

$sql = "INSERT INTO MyValues (Sval)
VALUES (".$_GET['sensorValue'].")";
// check Insert
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

