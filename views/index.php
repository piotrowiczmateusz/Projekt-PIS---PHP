<?php

include 'header.php';
include '../controllers/DatabaseController.php';

if(isset($_SESSION['name']) || isset($_COOKIE['name'])) {
  header('Location: dashboard.php');
}

?>

      <div id="main">
        <div class="container">
          <?php include '../controllers/AlertController.php'; ?>
          <div class="row">
            <div class="col-md-6">
              <div class="panel panel-default">
                <ul class="nav nav-tabs">
                <li class="active">
                  <a data-toggle="tab" href="#sign-up">
                  Zarejestruj
                  </a>
                </li>
                <li>
                  <a data-toggle="tab" href="#sign-in">
                  Zaloguj
                  </a>
                </li>
              </ul>
              <div class="tab-content">
                <div id="sign-up" class="tab-pane fade in active">
                  <h3>Zarejestruj się</h3>
                  <form action="../controllers/RegistrationController.php?register=true" method="POST">
                    <div class="form-group">
                    <label for="reg-name">Login:</label>
                    <input type="text" name="reg-name" class="form-control" id="reg-name">
                  </div>
                  <div class="form-group">
                    <label for="reg-email">Email:</label>
                    <input type="email" name="reg-email" class="form-control" id="reg-email">
                  </div>
                  <div class="form-group">
                    <label for="reg-password">Hasło:</label>
                    <input type="password" name="reg-password" class="form-control" id="reg-password">
                  </div>
                  <button type="submit" class="btn btn-default"><i class="fa fa-plus-circle green"></i> Zarejestruj</button>
                </form>
                </div>
                <div id="sign-in" class="tab-pane fade">
                  <h3>Zaloguj się</h3>
                  <form action="../controllers/LoginController.php?login=true" method="POST">
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="password2">Hasło:</label>
                    <input type="password" name="password" class="form-control" id="password">
                  </div>
                  <button type="submit" class="btn btn-default"><i class="fa fa-sign-in green"></i> Zaloguj</button>
                </form>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php include 'footer.php'; ?>
