<?php

include 'header.php';
include '../controllers/DatabaseController.php';

 ?>

 <div id="main">
   <div class="container">
     <?php include '../controllers/AlertController.php'; ?>
     <div class="row">
       <div class="col-md-12">
         <div class="panel panel-default">
             <a href="dashboard.php" class="btn btn-default">
               <i class="fa fa-arrow-left"></i> Powrót do listy artykułów
             </a>
             <h3>Dodaj artykuł:</h3>
             <form action="../controllers/ArticlesController.php?add=true" method="POST">
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
         </div>
       </div>
     </div>
   </div>
 </div>

<?php include 'footer.php'; ?>
