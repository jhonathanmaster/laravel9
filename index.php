<?php
//phpinfo();
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'laravel-db';
$host = 'localhost';

// Database use name
$user = 'root';

//database user password
$pass = 'diagnostik';

// database name
$mydatabase = 'laravel';
// check the mysql connection status

$conn = new mysqli($host, $user, $pass, $mydatabase);

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}

ECHO "<br><br> ::::::::: CONNECTING WITH PDO :::::::::<br>";

try {
    $conn = new PDO("mysql:host=$host;dbname=$mydatabase", $user, $pass);
    echo "Connected to $mydatabase at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $mydatabase :" . $pe->getMessage());
}

phpinfo();

?>