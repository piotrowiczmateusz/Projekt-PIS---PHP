<?php

session_start();

include 'DatabaseController.php';

/*
*   Register Action
*/
if(isset($_GET['register'])) {
  $_SESSION['alert'] = true;

  $name = $_POST['reg-name'];
  $email = $_POST['reg-email'];
  $pass = $_POST['reg-password'];

  $query = "SELECT * FROM users WHERE email = '".$email."'";
  $result = $conn->query($query);

  if ($result->num_rows != 0) {

    $_SESSION['message-type'] = "danger";
    $_SESSION['message'] = "Użytkownik już istnieje.";

    header('Location: ../views/index.php');
  } else {

    $query = "INSERT INTO users (name, email, password, role) VALUES ('".$name."', '".$email."', '".$pass."', 'USER')";
    $result = $conn->query($query);

    $_SESSION['message-type'] = "success";
    $_SESSION['message'] = "Zarejestrowano nowego użytkownika.";
    header('Location: ../views/index.php');

    if (!$result) {
        echo "Error: " . $query . "<br>" . $conn->errorInfo();
  }

  $conn->close();
}}


 ?>
