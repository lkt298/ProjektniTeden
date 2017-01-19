<?php

include_once 'session.php';
include_once 'base.php';

if (isset($_POST['potrdi'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $query = "SELECT * FROM customers WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            if (empty($row['id_u']) || !isset($row['id_u'])) {
                header("Location: login.php");
                echo "hhaha";
            }


            if (password_verify($geslo, $row['geslo'])) {
                echo "Gesli se ujemata";
                $_SESSION['vpisan'] = true;
                $_SESSION['id_u'] = $row['id_u'];
                $_SESSION['ime'] = $row['ime_u'];
                $_SESSION['priimek'] = $row['priimek_u'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['admin'] = $row['admin'];

                header("Location: index.php");
            } else {
                header("Location: login.php");
            }
        }
    } else {
        header("Location: login.php");
    }
}