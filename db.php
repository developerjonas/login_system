<?php

$servername = ''; //Enter your SQL servername
$username = ''; //Enter your SQL server username
$password = ''; //Enter your SQL server password
$databse = ''; //Enter your database name

$conn = mysqli_connect($servername, $username, $password, $databse);

if (!$conn) {
    echo "<script>alert('Couldnt connect to server')</alert>";
}
