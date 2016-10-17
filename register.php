<?php

  session_start();

  include 'dbConnect.php';
  include 'User.php';

  $_SESSION['alert'] = true;

  $name = $_POST['name'];
  $email = $_POST['email'];
  $pass = $_POST['password'];

  $query = "SELECT * FROM users WHERE email = '".$email."'";
  $result = $conn->query($query);

  if ($result != null) {
    $_SESSION['message-type'] = "danger";
    $_SESSION['message'] = "Uzytkownik juz istnieje.";
    header('Location: index.php');
  } else {

    $query = "INSERT INTO users (name, email, password, role) VALUES ('".$name."', '".$email."', '".$pass."', 'USER')";

    $_SESSION['message-type'] = "success";
    $_SESSION['message'] = "Zarejestrowano uzytkownika.";

    if ($result === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
  }

  $conn->close();

 ?>
