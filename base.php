<?php
$host="localhost";
$user="admin";
$password="admin";

$db_name="postavi_si";

//povezava na strežnik
$conn=  mysqli_connect($host, $user, $password) or
die("Povezava neuspešna: ".mysqli_connect_error());

//povezava na bazo
$db=  mysqli_select_db($conn, $db_name)or
die("Povezava na bazo neuspešna: ".mysqli_connect_error());
//kodiranje znakov
mysqli_set_charset($conn, "utf8");