<?php

$servername = "localhost";
$username = "root";
$password = "NO";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("sorry we failed to connect" . mysqli_connect_error());
} else {
    echo "connection was successful";
}


$sql = "create database darshandatabase";
$result = mysqli_query($conn, $sql);

if($result){
    echo "the database is is created successfully";
}
else {
    echo "the database is not crated successfully-->". mysqli_error( $conn);
}


echo var_dump($result);




?>