<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "pis_php";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Nie udało się połączyć z bazą danych: " . $conn->connect_error);
  }

?>
