<?php

include 'functions.php';
include 'header.php';
include 'dbConnect.php';

?>

      <div id="main">
        <div class="container">
          <?php include 'alert.php'; ?>
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
                  <form action="register.php" method="POST">
                    <div class="form-group">
                    <label for="name">Login:</label>
                    <input type="text" name="name" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="password">Hasło:</label>
                    <input type="password" name="password" class="form-control" id="password">
                  </div>
                  <button type="submit" class="btn btn-default"><i class="fa fa-plus-circle green"></i> Zarejestruj</button>
                </form>
                </div>
                <div id="sign-in" class="tab-pane fade">
                  <h3>Zaloguj się</h3>
                  <form action="login.php" method="POST">
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
