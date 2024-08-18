<?php

const DB_SERVER = 'localhost';
const DB_NAME = 'Devices';
const DB_USER = 'ishmael';
const DB_PASSWORD = '921640';

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if (!$conn) {
    die('error in connection') . mysqli_connect_errno();
}
?>


