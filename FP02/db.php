<?php
$servername = "localhost";
$username = "root";
$password = null;
$dbName = 'school';

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Create database
function createDB($dbName){
    global $conn;
    $sql = "CREATE DATABASE ".$dbName;
    if ( $conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }
}

// Checks if DB exists
if (empty (mysqli_fetch_array(mysqli_query($conn,"SHOW DATABASES LIKE $dbName")))){
    createDB($dbName);
}else{
    echo "DB exist";
}





$conn->close();

?> 