<?php

include 'header.php';
include 'dbConnect.php';

if(isset($_SESSION['name'])) {

  if (isset($_GET['admin'])) {
     if($_SESSION['role'] == "ADMIN") {
       header('Location: panel.php');
     } else {
       $_SESSION['alert'] = true;
       $_SESSION['message-type'] = "danger";
       $_SESSION['message'] = "Nie masz uprawnień admina, zeby dodawać artykuły.";
     }
   }
} else {
  header('Location: index.php');
}

if (isset($_GET['delete'])) {
  $idd = $_GET['id'];

  $query = "DELETE FROM articles WHERE id = ".$idd;
  $conn->query($query);

  $_SESSION['alert'] = true;
  $_SESSION['message-type'] = "success";
  $_SESSION['message'] = "Usunięto artykuł.";

}

 ?>

 <div id="main">
   <div class="container">
     <?php include 'alert.php'; ?>
     <div class="row">
       <div class="col-md-12">
         <div class="panel panel-default">
           <?php
              if(isset($_SESSION['name'])) {
                echo "Witaj, <strong>" . $_SESSION['name'] . "</strong>.";
              }
            ?>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-md-12">
         <div class="panel panel-default">
           <h1>Artykuły</h1>
           <?php

             $query = "SELECT * FROM articles";
             $articles = $conn->query($query);

             if($articles) {
               while($row = $articles->fetch_assoc()) {

                 echo "
                  <div class='article'>
                    <h2>".$row['title'];
                      if($_SESSION['role'] == "ADMIN") {
                        $id = $row['id'];
                        echo '
                        <form action="dashboard.php?delete=true&id='.$id.'" method="POST" class="right">
                          <button type="submit" class="btn btn-danger"><i class="fa fa-trash red"></i> Usuń</button>
                        </form></h2>';
                      } else {
                        echo "</h2>";
                      }
                    echo "
                    <div class='article-content'>".$row['content']."</div>
                    <div class='author left'>Autor: <strong>".$row['author']."</strong></div>
                    <div class='date right'>Data dodania: ".$row['date']."</div>
                  </div>";
               }
             } else {
               echo "Brak artykułow";
             }

           ?>
         </div>
       </div>
     </div>
   </div>
 </div>

 <?php include 'footer.php'; ?>
