<?php
session_start();
unset($_SESSION["loggedIn"]);
header('Refresh:0.5; url=login.php', true, 303);
?>