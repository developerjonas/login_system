<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$databse = 'jonas_db';

$conn = mysqli_connect($servername, $username, $password, $databse);

if(!$conn){
    echo "Couldnt connect to server";
}

$insert = "INSERT INTO   `signup` (`name`, `email`, `username`, `password`) VALUES ('$name', '$email', '$username', '$password')";
$result = mysqli_query($conn, $insert);

if(!$result){
    echo "The data wasn't inserted for some reasons";
    die(mysqli_error($conn));
}
