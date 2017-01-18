<?php

include_once 'base.php';
include_once 'session.php';


$name = mysqli_real_escape_string($conn, $_POST['name']);
$surname = mysqli_real_escape_string($conn, $_POST['surname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$crypted = password_hash($password, PASSWORD_BCRYPT);

$result = "INSERT INTO customers(name, surname, email, username, password)
        VALUES ('$name','$surname','$email','$username','$crypted')";
$query = mysqli_query($conn, $result);

header("Location:index.php");
