<?php
  session_start();
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
      nav{
        background: #EDDCBC;
      }
      button{
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
      $(function(){
        $("#navbar").load("nav_page.php");
      });
      </script>
</head>
<body>
  <div id="navbar" class="mb-3"></div>
  <div class="container">
  <div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        
    </div>
    <div class="col-4"></div>
  </div>
</div>
  
</body>
</html>