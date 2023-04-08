<?php
session_start();
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
  <title>Edit Data</title>
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

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
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
    <!-- <form action="Admin_editsave.php" method="post"> -->

    <div class="row">
      <div class="col-1"></div>
      <div class="col-11">
        <?php
        if (isset($_SESSION["p_error"]) && $_SESSION["p_error"] == 1) {
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Database Error
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
          unset($_SESSION["p_error"]);
        } else if (isset($_SESSION["p_error"]) && $_SESSION["p_error"] == 0) {
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  Success
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
          unset($_SESSION["p_error"]);
        }
        ?>
        <div class="card text-dark bg-white border-warning">
          <div class="card-header bg-warning text-white">
            <center>Edit Data</center>
          </div>
          <div class="card-body">
            <div class="row mb-3 ">

              <div class="row mb-3 ">
                <label class="col-md-3 col-form-label">Database Table Select : </label>
                <div class="col-md-9">
                  <div class="input-group">
                    <select class="form-select form-control" aria-label="Default select example" id="table-select" name="option">
                      <option selected>---( Database Table )---</option>
                      <option value="coursedb">coursedb</option>
                      <option value="teacherdb">teacherdb</option>
                      <option value="teacherteach">teacherteach</option>
                    </select>
                  </div>
                </div>
              </div>

              <div id="input-boxes">
                <!-- Input boxes will be added dynamically here -->
              </div>

              <script>
                const tableSelect = document.getElementById('table-select');
                const inputBoxes = document.getElementById('input-boxes');

                tableSelect.addEventListener('change', (event) => {
                  // Clear the input boxes
                  inputBoxes.innerHTML = '';

                  if (event.target.value === 'coursedb') {
                    inputBoxes.innerHTML = `
                      <?php
                      // include database connection script
                      require_once 'db_connect.php';

                      // retrieve data from database
                      $sql = "SELECT * FROM coursedb";
                      $stmt = $pdo->prepare($sql);
                      $stmt->execute();
                      $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

                      // handle form submission
                      if (isset($_POST['CourseID'])&&isset($_POST['CourseName'])&&isset($_POST['Unit'])&&isset($_POST['CourseDetail'])) {
                        // get form data
                        $courseID = $_POST['CourseID'];
                        $courseName = $_POST['CourseName'];
                        $unit = $_POST['Unit'];
                        $courseDetail = $_POST['CourseDetail'];
                        unset($_POST['CourseID']);
                        unset($_POST['CourseName']);
                        unset($_POST['Unit']);
                        unset($_POST['CourseDetail']);


                        // update data in database
                        $sql = "UPDATE coursedb SET CourseName = ?, Unit = ?, CourseDetail = ? WHERE CourseID = ?";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute([$courseName, $unit, $courseDetail, $courseID]);

                        // Check if the update was successful
                        if ($stmt->rowCount() > 0) {
                          $_SESSION["p_error"] = 0;
                        } else {
                          $_SESSION["p_error"] = 1;
                        }
                        // redirect to admin page
                        header('Location: '.$_SERVER['HTTP_REFERER']);
                        exit();
                      }
                      ?>
<table>
        <thead>
            <tr>
                <th>Course ID</th>
                <th>Course Name</th>
                <th>Unit</th>
                <th>Course Detail</th>
                <th>Action</th>
            </tr>
        </thead>
        <th>
        <tbody>
            <?php foreach ($data as $row) : ?>
                <tr>
                    <td><?php echo $row['CourseID']; ?></td>
                    <td><?php echo $row['CourseName']; ?></td>
                    <td><?php echo $row['Unit']; ?></td>
                    <td><?php echo $row['CourseDetail']; ?></td>
                    <td>
                        <form method="POST">
                        <input type="hidden" name="CourseID" value="<?php echo $row['CourseID']; ?>">
                        <input type="text" name="CourseName" value="<?php echo $row['CourseName']; ?>">
                        <input type="text" name="Unit" value="<?php echo $row['Unit']; ?>">
                        <textarea rows="5" cols="33" name="CourseDetail"><?php echo $row['CourseDetail']; ?></textarea>
                          <button type="submit">Save</button>
                        </form>
                    </td>
                </tr>
                <th>
            <?php endforeach;
            // $pdo = null; 
            ?>
        </tbody>
    </table>
                                                                    `;
                  } else if (event.target.value === 'teacherdb') {
                   inputBoxes.innerHTML = `
                   <?php
  // include database connection script
  require_once 'db_connect.php';

  // retrieve data from database
  $sql = "SELECT * FROM teacherdb";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // handle form submission
  if (isset($_POST['ShortName'])&&isset($_POST['TName'])) {
    // get form data
    $shortName = $_POST['ShortName'];
    $tName = $_POST['TName'];
    unset($_POST['ShortName']);
    unset($_POST['TName']);
    // update data in database
    $sql = "UPDATE teacherdb SET TName = ? WHERE ShortName = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$tName, $shortName]);

    // Check if the update was successful
    if ($stmt->rowCount() > 0) {
      $_SESSION["p_error"] = 0;
    } else {
      $_SESSION["p_error"] = 1;
    }

    // redirect to admin page
    header('Location: '.$_SERVER['HTTP_REFERER']);
    exit();
  }
?>
<table>
  <thead>
    <tr>
      <th>Short Name</th>
      <th>Teacher Name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) : ?>
      <tr>
        <td><?php echo $row['ShortName']; ?></td>
        <td><?php echo $row['TName']; ?></td>
        <td>
          <form method="POST">
            <input type="hidden" name="ShortName" value="<?php echo $row['ShortName']; ?>">
            <input type="text" name="TName" value="<?php echo $row['TName']; ?>">
            <button type="submit">Save</button>
          </form>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    
                                                                    `;
                  } else if (event.target.value === 'teacherteach') {
                    inputBoxes.innerHTML = `
                    <?php
  // include database connection script
  require_once 'db_connect.php';

  // retrieve data from database
  $sql = "SELECT * FROM teacherteach";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // handle form submission
  if (isset($_POST['ShortName'])&&isset($_POST['CourseID'])) {
    // get form data
    $courseID = $_POST['CourseID'];
    $shortName = $_POST['ShortName'];
    unset($_POST['CourseID']);
    unset($_POST['ShortName']);

    // update data in database
    $sql = "UPDATE teacherteach SET ShortName = ? WHERE CourseID = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$shortName, $courseID]);

    // Check if the update was successful
    if ($stmt->rowCount() > 0) {
      $_SESSION["p_error"] = 0;
    } else {
      $_SESSION["p_error"] = 1;
    }
    // redirect to admin page
    header('Location: '.$_SERVER['HTTP_REFERER']);
    exit();
  }
?>
<table>
  <thead>
    <tr>
      <th>Course ID</th>
      
      <th>Short Name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) : ?>
      <tr>
        <td><?php echo $row['CourseID']; ?></td>
        
        <td><?php echo $row['ShortName']; ?></td>
        <td>
          <form method="POST">
            <input type="hidden" name="CourseID" value="<?php echo $row['CourseID']; ?>">
            <input type="text" name="ShortName" value="<?php echo $row['ShortName']; ?>">
            <button type="submit">Save</button>
          </form>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
        
                                                                    `;
                  }
                });
              </script>



            </div>
          </div>
        </div>

      </div>
      <!-- </form> -->
    </div>

</body>

</html>