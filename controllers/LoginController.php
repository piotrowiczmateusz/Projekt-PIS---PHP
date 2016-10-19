<?php

session_start();

include 'DatabaseController.php';

/*
*   Login Action
*/
if(isset($_GET['login'])) {
  $email = $_POST['email'];
  $pass = $_POST['password'];

  $query = "SELECT * FROM users WHERE email = '".$email."'";

  $user = $conn->query($query);

  if($user->num_rows != 0) {
    while($row = $user->fetch_assoc()) {

      if ($row["password"] == $pass) {

        $_SESSION['name'] = $row["name"];
        $_SESSION['role'] = $row["role"];

        $_SESSION['alert'] = true;
        $_SESSION['message-type'] = "success";
        $_SESSION['message'] = "Zalogowano poprawnie.";

        $cookie_name = 'name';
        $cookie_value = $row["name"];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

        header('Location: ../views/dashboard.php');

      }
      else {

        $_SESSION['alert'] = true;
        $_SESSION['message-type'] = "danger";
        $_SESSION['message'] = "Niepoprawne hasło";

        header('Location: ../views/index.php');
      }
    }
  } else {

    $_SESSION['alert'] = true;
    $_SESSION['message-type'] = "danger";
    $_SESSION['message'] = "Nie ma takiego użytkownika.";

    header('Location: ../views/index.php');
  }
  $conn->close();
}

/*
*   Logout Action
*/
if(isset($_GET['logout'])) {
  session_start();
  session_destroy();
  session_start();

  setcookie('name', null, -1, '/');

  $_SESSION['alert'] = true;
  $_SESSION['message-type'] = "info";
  $_SESSION['message'] = "Wylogowano poprawnie.";

  header('Location: ../views/index.php');
}

?>
