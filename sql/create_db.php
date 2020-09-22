<?php

// MySQL connection
$servername = $_ENV['DB_HOST'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD']; // if the password exists
$dbname = $_ENV['DB_DATABASE']; // database

// create connection
$conn = new mysqli($servername, $username, $password);
// connection check
if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

// create database (if it not exists)
$sql = "CREATE DATABASE IF NOT EXISTS converterDB";
if ($conn->query($sql) !== TRUE) {
    echo "Database creation error: " . $conn->error;
}

// close connection
$conn->close();
