<?php

$username = 'admin';
$password = 'admin';
$database = 'postavi_si';
$server = 'localhost';
//povezali smo se na bazo
$link = mysqli_connect($server, $username, $password, $database);
//težava php in utf-8
mysqli_query($link, "SET NAMES 'utf8'");
//povezava je uspešna in končana :)
