<?php

if (!isset($_REQUEST['form1'])) {
    return;
}

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// connection check
if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

// add data to table
$sql = "INSERT INTO Requests (amount_of_currency1,
                              name_of_currency1,
                              amount_of_currency2,
                              name_of_currency2)
VALUES ('$amountOfCurrency1',
        '$nameOfCurrency1',
        '$amountOfCurrency2',
        '$nameOfCurrency2')";

if ($conn->query($sql) !== TRUE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// close connection
$conn->close();