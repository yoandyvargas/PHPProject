<?php

$user = "yo328104";
$password = "Rdfrdf12@";
$dbname = "yo328104";


$connect = mysqli_connect("localhost", "$user", "$password", "$dbname");

if (!$connect) {
    echo "Error" . PHP_EQL;
}

?>
