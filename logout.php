<?php

session_start();
session_destroy();
session_start();

$_SESSION['alert'] = true;
$_SESSION['message-type'] = "info";
$_SESSION['message'] = "Wylogowano poprawnie.";

header('Location: index.php');

?>
