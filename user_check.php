<?php

include_once 'session.php';
include_once 'base.php';

if (isset($_POST['potrdi'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $query = "SELECT * FROM customers WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    var_dump($result);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            if (password_verify($password, $row['password'])) {
                echo "Gesli se ujemata";
                $_SESSION['vpisan'] = true;
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['surname'] = $row['surname'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['username'] = $row['username'];

                header("Location: index.php");
            } else {
                header("Location: login.php");
            }
        }
    } else {
        header("Location: login.php");
    }
}