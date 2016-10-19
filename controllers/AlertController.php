<?php

/*
*   Alert Action
*/
if(isset($_SESSION['alert'])) {
  if($_SESSION['alert'] == true) {
    echo "<div class='panel panel-default'>";
      if(isset($_SESSION['message-type'])) {
        echo "<div class='alert alert-".$_SESSION['message-type']."'>";
      }
    if(isset($_SESSION['message'])) echo $_SESSION['message'];
    echo "</div></div>";
  }
  $_SESSION['alert'] = false;
}

?>
