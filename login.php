<?php

session_start();

include 'dbConnect.php';
include 'functions.php';


  $email = $_POST['email'];
  $pass = $_POST['password'];

  $query = "SELECT * FROM users WHERE email = '".$email."'";

  $user = $conn->query($query);

  if($user) {
    while($row = $user->fetch_assoc()) {

      if ($row["password"] == $pass) {

        $_SESSION['name'] = $row["name"];
        $_SESSION['role'] = $row["role"];

        $_SESSION['alert'] = true;
        $_SESSION['message-type'] = "success";
        $_SESSION['message'] = "Zalogowano poprawnie.";

        setcookie($_SESSION['name'], time() + (86400 * 30), "/");

        header('Location: dashboard.php');

      }
      else {
        $_SESSION['alert'] = true;
        $_SESSION['message-type'] = "danger";
        $_SESSION['message'] = "Złe hasło";
        header('Location: index.php');
      }
    }
  }
  // $_SESSION['alert'] = true;
  // $_SESSION['message-type'] = "danger";
  // $_SESSION['message'] = "Nie ma takiego uzytkownika.";
  // header('Location: index.php');

  $conn->close();

?>
