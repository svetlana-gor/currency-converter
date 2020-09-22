<?php

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// connection check
if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

// create table "Requests"
$sql = "CREATE TABLE IF NOT EXISTS Requests (
        request_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        amount_of_currency1 INT NOT NULL,
        name_of_currency1 CHAR(3) NOT NULL,
        amount_of_currency2 FLOAT(15,2) NOT NULL,
        name_of_currency2 CHAR(3) NOT NULL,
        date_of_request TIMESTAMP
)";
if ($conn->query($sql) !== TRUE) {
    echo "Error creating table: " . $conn->error;
}

// close connection
$conn->close();