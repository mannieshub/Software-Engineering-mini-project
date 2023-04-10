<?php
session_start();
isset($_SESSION['role']) ? $ro = $_SESSION['role'] : $ro = "";
if ($ro == "") {
  header("Location: homepage.php");
  exit();
}
$stdID = $_SESSION['stdid'];
$user = $_SESSION["username"];
$email = $_SESSION["email"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    nav {
      background: #EDDCBC;
    }

    button {
      background: #F1BB93;
    }

    .sidebar {
      background-color: #EDDCBC;
      height: 100%;
      position: fixed;
      top: 0;
      left: 0;
      overflow-x: hidden;
      padding-top: 60px;
    }

    .main-content {
      margin-left: 200px;
      padding: 20px;
    }
  </style>
  <script>
    $(function() {
      $("#navbar").load("nav_page.php");
    });

    function password_show_hide(inputId, showId, hideId) {
      let x = document.getElementById(inputId);
      let show_eye = document.getElementById(showId);
      let hide_eye = document.getElementById(hideId);
      hide_eye.classList.remove("d-none");
      if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
      } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
      }
    }
  </script>
</head>

<body>
  <div id="navbar" class="mb-3"></div>
  <div class="container">
    <form action="Ch_pwd_save.php" method="post">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
          <?php
          if (isset($_SESSION["p_error"]) && $_SESSION["p_error"] == 1) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    New password and confirm password don\'t match
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
            unset($_SESSION["p_error"]);
          } else if (isset($_SESSION["p_error"]) && $_SESSION["p_error"] == 2) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Current password is incorrect
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
            unset($_SESSION["p_error"]);
          } else if (isset($_SESSION["p_error"]) && $_SESSION["p_error"] == 0) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  Success
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            unset($_SESSION["p_error"]);
          } else if (isset($_SESSION["p_error"]) && $_SESSION["p_error"] == 3) {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                  New password is same as current password
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            unset($_SESSION["p_error"]);
          }
          ?>
          <div class="card text-dark bg-white">
            <div class="card-header  text-white "style="background-color:#F1BB93">Change Password</div>
            <div class="card-body">
              <div class="row mb-3 ">

                <div class="row mb-3 ">
                  <label class="col-md-3 col-form-label">Current Password :</label>
                  <div class="col-md-9">
                    <div class="input-group">
                      <input type="password" class="form-control" name="current_password" required id="current_password">
                      <span class="input-group-text" onclick="password_show_hide('current_password', 'show_eye_current', 'hide_eye_current');">
                        <i class="bi bi-eye-fill" id="show_eye_current"></i>
                        <i class="bi bi-eye-slash-fill d-none" id="hide_eye_current"></i>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="row mb-3 ">
                  <label class="col-md-3 col-form-label">New Password :</label>
                  <div class="col-md-9">
                    <div class="input-group">
                      <input type="password" class="form-control" name="new_password" required id="new_password">
                      <span class="input-group-text" onclick="password_show_hide('new_password', 'show_eye_new', 'hide_eye_new');">
                        <i class="bi bi-eye-fill" id="show_eye_new"></i>
                        <i class="bi bi-eye-slash-fill d-none" id="hide_eye_new"></i>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="row mb-3 ">
                  <label class="col-md-3 col-form-label">Confirm Password :</label>
                  <div class="col-md-9">
                    <div class="input-group">
                      <input type="password" class="form-control" name="confirm_new_password" required id="confirm_new_password">
                      <span class="input-group-text" onclick="password_show_hide('confirm_new_password', 'show_eye_confirm', 'hide_eye_confirm');">
                        <i class="bi bi-eye-fill" id="show_eye_confirm"></i>
                        <i class="bi bi-eye-slash-fill d-none" id="hide_eye_confirm"></i>
                      </span>
                    </div>
                  </div>
                </div>




                <div class="row mb-3">
                  <div class="col-1"></div>
                  <div class="col-md-10 d-flex justify-content-center">
                    <button type="submit" class="btn  btn-sm bi bi-save w-75"style="background-color:#F1BB93"> Save </button>

                  </div>
                  <div class="col-1"></div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-2"></div>
        </div>
    </form>
  </div>

</body>

</html>