<?php

session_start();

include 'DatabaseController.php';

/*
*   Add Article Action
*/
if(isset($_GET['add'])) {
  $title = $_POST['title'];
  $author = $_SESSION['name'];
  $content = $_POST['content'];
  $date = new DateTime();
  $date->format('Y-m-d H:i:s');

  $query = "INSERT INTO articles (title, author, content, date) VALUES ('".$title."', '".$author."', '".$content."', '".$date->format('Y-m-d H:i:s')."')";
  $conn->query($query);

  $_SESSION['alert'] = true;
  $_SESSION['message-type'] = "success";
  $_SESSION['message'] = "Dodano nowy artykuł.";

  header('Location: ../views/panel.php');
}

/*
*   Delete Article Action
*/
if(isset($_GET['delete'])) {
  $id = $_GET['id'];

  $query = "DELETE FROM articles WHERE id = ".$id;
  $conn->query($query);

  $_SESSION['alert'] = true;
  $_SESSION['message-type'] = "success";
  $_SESSION['message'] = "Usunięto wybrany artykuł.";

  header('Location: ../views/dashboard.php');
}

?>
