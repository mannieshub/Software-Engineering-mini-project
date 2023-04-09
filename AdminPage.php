<?php
session_start(); // Start the session

isset($_SESSION['role']) ? $ro = $_SESSION['role'] : $ro = "";
if ($ro != "Admin") {
  header("Location: index.php");
  exit();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AdminOnly</title>
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

    .navbar.rounded-start {
      height: 60px;
    }

    .navbar-brand.text-dark {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
    }
  </style>
  <script>
    $(function() {
      $("#navbar").load("nav_page.php");
    });

    

  </script>

</head>

<body>
  <div id="navbar"></div>
  <div class="container my-3">
    <?php
    $host = "noteapinun.trueddns.com";
    $dbport = "28502";
    $dbname = "se_db";
    $dbusername = "web";
    $dbpassword = "web1234";
    $conn = new PDO("mysql:host=$host;port=$dbport;dbname=$dbname;charset=utf8mb4", $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    ?>
    <center>
    <button class="btn btn-warning mt-2 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#studentDB" aria-expanded="false" aria-controls="studentDB" id="studentDBBtn">
      studentDB
    </button>
    <button class="btn btn-warning mt-2 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#admindb" aria-expanded="false" aria-controls="studentDB" id="admindbBtn">
      admindb
    </button>
    <button class="btn btn-warning mt-2 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#coursecomment" aria-expanded="false" aria-controls="studentDB" id="coursecommentBtn">
      coursecomment
    </button>
    <button class="btn btn-warning mt-2 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#coursedb" aria-expanded="false" aria-controls="studentDB" id="coursedbBtn">
      coursedb
    </button>
    <button class="btn btn-warning mt-2 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#teachercomment" aria-expanded="false" aria-controls="studentDB" id="teachercommentBtn">
      teachercomment
    </button>
    <button class="btn btn-warning mt-2 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#teacherdb" aria-expanded="false" aria-controls="studentDB" id="teacherdbBtn">
      teacherdb
    </button>
    <button class="btn btn-warning mt-2 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#teacherteach" aria-expanded="false" aria-controls="studentDB" id="teacherteachBtn">
      teacherteach
    </button>
</center>
<div class="my-3">
  <center >
  <a href='Admin_add.php' class='btn btn-success mx-3'>Add</a> 
  <a href='Admin_edit.php' class='btn btn-primary mx-3'>Edit</a> 
  </center>
</div>
    <script>
      // Get all collapse buttons
      const collapseButtons = document.querySelectorAll('[data-bs-toggle="collapse"]');

      // Add click event listener to each button
      collapseButtons.forEach(function(button) {
        button.addEventListener('click', function() {
          // Close all other collapses
          collapseButtons.forEach(function(otherButton) {
            if (otherButton !== button) {
              const target = otherButton.getAttribute('data-bs-target');
              const collapse = document.querySelector(target);
              if (collapse.classList.contains('show')) {
                otherButton.classList.remove('btn-secondary');
                otherButton.classList.add('btn-warning');
                collapse.classList.remove('show');
              }
            }
          });

          // Change button color when collapse is open
          const target = button.getAttribute('data-bs-target');
          const collapse = document.querySelector(target);
          if (collapse.classList.contains('show')) {
            button.classList.remove('btn-secondary');
            button.classList.add('btn-warning');
          } else {
            button.classList.remove('btn-warning');
            button.classList.add('btn-secondary');
          }
        });
      });
    </script>

    

    <div class="collapse" id="studentDB">
      <center>
        <h5 class="my-3">studentDB</h5>
      </center>
      <?php
      $query = "SELECT * FROM studentDB";
      $result = $conn->query($query);
      if ($result->rowCount() > 0) {
        echo "<table class='table table-striped table-hover'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th scope='col'>ID</th>";
        echo "<th scope='col'>Name</th>";
        echo "<th scope='col'>Email</th>";
        echo "<th scope='col'>Role</th>";
        
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = $result->fetch()) {
          while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row["stdID"] . "</td>";
            echo "<td>" . $row["stdName"] . "</td>";
            echo "<td>" . $row["Email"] . "</td>";
            echo "<td>" . $row["Role"] . "</td>";
            
            echo "</tr>";
          }
        }
        echo "</tbody>";
        echo "</table>";
      } else {
        echo "0 results";
      }


      ?>
    </div>

    <div class="collapse" id="admindb">
      <center>
        <h5 class="my-3">admindb</h5>
      </center>
      <?php
      $query = "SELECT * FROM admindb";
      $result = $conn->query($query);
      if ($result->rowCount() > 0) {
        echo "<table class='table table-striped table-hover'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th scope='col'>Topic</th>";
        echo "<th scope='col'>ID</th>";
        echo "<th scope='col'>Detail</th>";
        
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = $result->fetch()) {
          while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row["Topic"] . "</td>";
            echo "<td>" . $row["ID"] . "</td>";
            echo "<td>" . $row["Detail"] . "</td>";
            
            echo "</tr>";
          }
        }
        echo "</tbody>";
        echo "</table>";
      } else {
        echo "0 results";
      }
      ?>
    </div>
    <div class="collapse" id="coursecomment">
      <center>
        <h5 class="my-3">coursecomment</h5>
      </center>
      <?php
      $query = "SELECT * FROM coursecomment";
      $result = $conn->query($query);
      if ($result->rowCount() > 0) {
        echo "<table class='table table-striped table-hover'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th scope='col'>id</th>";
        echo "<th scope='col'>CourseID</th>";
        echo "<th scope='col'>CComment</th>";
        echo "<th scope='col'>stdID</th>";
        echo "<th scope='col'>PostDate</th>";
        
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = $result->fetch()) {
          while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["CourseID"] . "</td>";
            echo "<td>" . $row["CComment"] . "</td>";
            echo "<td>" . $row["stdID"] . "</td>";
            echo "<td>" . $row["PostDate"] . "</td>";
            
            echo "</tr>";
          }
        }
        echo "</tbody>";
        echo "</table>";
      } else {
        echo "0 results";
      }
      ?>
    </div>
    <div class="collapse" id="coursedb">
      <center>
        <h5 class="my-3">coursedb</h5>
      </center>
      <?php
      $query = "SELECT * FROM coursedb";
      $result = $conn->query($query);
      if ($result->rowCount() > 0) {
        echo "<table class='table table-striped table-hover'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th scope='col'>CourseID</th>";
        echo "<th scope='col'>CourseName</th>";
        echo "<th scope='col'>Unit</th>";
        echo "<th scope='col'>CourseDetail</th>";
        
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = $result->fetch()) {
          while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row["CourseID"] . "</td>";
            echo "<td>" . $row["CourseName"] . "</td>";
            echo "<td>" . $row["Unit"] . "</td>";
            echo "<td>" . $row["CourseDetail"] . "</td>";
           
            echo "</tr>";
          }
        }
        echo "</tbody>";
        echo "</table>";
      } else {
        echo "0 results";
      }
      ?>
    </div>
    <div class="collapse" id="teachercomment">
      <center>
        <h5 class="my-3">teachercomment</h5>
      </center>
      <?php
      $query = "SELECT * FROM teachercomment";
      $result = $conn->query($query);
      if ($result->rowCount() > 0) {
        echo "<table class='table table-striped table-hover'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th scope='col'>id</th>";
        echo "<th scope='col'>ShortName</th>";
        echo "<th scope='col'>TComment</th>";
        echo "<th scope='col'>stdID</th>";
        echo "<th scope='col'>DateTime</th>";
        
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = $result->fetch()) {
          while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["ShortName"] . "</td>";
            echo "<td>" . $row["TComment"] . "</td>";
            echo "<td>" . $row["stdID"] . "</td>";
            echo "<td>" . $row["DateTime"] . "</td>";
            
            echo "</tr>";
          }
        }
        echo "</tbody>";
        echo "</table>";
      } else {
        echo "0 results";
      }
      ?>
    </div>
    <div class="collapse" id="teacherdb">
      <center>
        <h5 class="my-3">teacherdb</h5>
        
      </center>
      <?php
      $query = "SELECT * FROM teacherdb";
      $result = $conn->query($query);
      if ($result->rowCount() > 0) {
        echo "<table class='table table-striped table-hover'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th scope='col'>ShortName</th>";
        echo "<th scope='col'>TName</th>";
        
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = $result->fetch()) {
          while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row["ShortName"] . "</td>";
            echo "<td>" . $row["TName"] . "</td>";
            
            echo "</tr>";
          }
        }
        echo "</tbody>";
        echo "</table>";
      } else {
        echo "0 results";
      }
      ?>
    </div>
    <div class="collapse" id="teacherteach">
      <center>
        <h5 class="my-3">teacherteach</h5>
      </center>
      <?php
      $query = "SELECT * FROM teacherteach";
      $result = $conn->query($query);
      if ($result->rowCount() > 0) {
        echo "<table class='table table-striped table-hover'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th scope='col'>CourseID</th>";
        echo "<th scope='col'>ShortName</th>";
        
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = $result->fetch()) {
          while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row["CourseID"] . "</td>";
            echo "<td>" . $row["ShortName"] . "</td>";
            echo "</tr>";
          }
        }
        echo "</tbody>";
        echo "</table>";
      } else {
        echo "0 results";
      }
      ?>
    </div>
</body>

</html>