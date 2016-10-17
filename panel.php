<?php

include 'header.php';
include 'dbConnect.php';

  if (isset($_GET['add-article'])) {

    $title = $_POST['title'];
    $author = $_SESSION['name'];
    $content = $_POST['content'];
    $date = new DateTime();
    $date->format('Y-m-d H:i:s');

    $query = "INSERT INTO articles (title, author, content, date) VALUES ('".$title."', '".$author."', '".$content."', '".$date->format('Y-m-d H:i:s')."')";
    $conn->query($query);

    $_SESSION['alert'] = true;
    $_SESSION['message-type'] = "success";
    $_SESSION['message'] = "Dodano artykuł.";

  }


 ?>

 <div id="main">
   <div class="container">
     <?php include 'alert.php'; ?>
     <div class="row">
       <div class="col-md-12">
         <div class="panel panel-default">
           <?php if($_SESSION['role'] == "ADMIN") { ?>
             <a href="dashboard.php" class="btn btn-default">
               <i class="fa fa-arrow-left"></i> Powrot do listy artykulow
             </a>
             <h3>Dodaj artykuł:</h3>
             <form action="panel.php?add-article=true" method="POST">
             <div class="form-group">
               <label for="title">Tytuł:</label>
               <input type="text" name="title" class="form-control" id="title">
             </div>
             <div class="form-group">
               <label for="content">Treść:</label>
               <textarea name="content" class="form-control" id="content" rows="8" cols="40"></textarea>
             </div>
             <button type="submit" class="btn btn-default"><i class="fa fa-plus-circle green"></i> Dodaj</button>
           </form>
           <?php } else {
               } ?>
         </div>
       </div>
     </div>
   </div>
 </div>

<?php include 'footer.php'; ?>
