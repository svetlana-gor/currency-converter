<?php

// create connecting
$conn = new mysqli($servername, $username, $password, $dbname);

// connecting check
if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

// select data
$rowsNumber = $_REQUEST['rowsNumber'] ?? 0;
if (is_numeric($rowsNumber) AND $rowsNumber > 0) {
    $sql = "SELECT * FROM Requests ORDER BY request_id DESC LIMIT $rowsNumber";
} else {
    $sql = "SELECT * FROM Requests";
}
$result = $conn->query($sql);

// print the data
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
    echo '<tr>
            <th scope="row">'.$row['request_id'].'</th>
            <td>'.$row['amount_of_currency1'].'</td>
            <td>'.$row['name_of_currency1'].'</td>
            <td>'.$row['amount_of_currency2'].'</td>
            <td>'.$row['name_of_currency2'].'</td>
            <td>'.$row['date_of_request'].'</td>
          </tr>';
    }
} else {
    echo "Table is empty";
}

// close connection
$conn->close();
