<?php

include 'dbConnect.php';
$id = $_POST['id'];

$query = "DELETE FROM articles WHERE id = ".$id;
$conn->query($query);

$_SESSION['alert'] = true;
$_SESSION['message-type'] = "success";
$_SESSION['message'] = "Usunięto artykuł.";

header('Location: dashboard.php');
?>
