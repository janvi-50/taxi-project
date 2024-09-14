<?php
$serverName = 'localhost:3307';
$userName = 'root';
$password = ''; 
$dbname = 'Class';

// Create connection
$conn = mysqli_connect($serverName, $userName, $password, $dbname);

// Check connection
if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection Successful<br>";

// SQL to create table if it doesn't exist
$createTableSql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    message VARCHAR(500) NOT NULL
)";
if (mysqli_query($conn, $createTableSql)) {
    echo "Table users created successfully or already exists<br>";
} else {
    die("Error creating table: " . mysqli_error($conn));
}

// Insert form data into the table
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO users (name, email, message)
            VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo 'New record created successfully';
    } else {
        echo 'Error: ' . $sql . "<br>" . mysqli_error($conn);
    }

    $conn->close();
}
?>
