<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CourseDetail</title>
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
    <div class="navbar"></div>
<?php
session_start();
if (isset($_POST['CourseID']) && !empty($_POST['CourseID'])) {
    $CourseID = $_POST['CourseID'];
    $host = "noteapinun.trueddns.com";
    $dbport = "28502";
    $dbname = "se_db";
    $dbusername = "web";
    $dbpassword = "web1234";
    $conn = new PDO("mysql:host=$host;port=$dbport;dbname=$dbname", $dbusername, $dbpassword);
    $sql = "SELECT * FROM CourseDB WHERE CourseID = :CourseID";

    // Prepare the query
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':CourseID', $CourseID, PDO::PARAM_STR);

    // Execute the query
    $stmt->execute();

    // Fetch the row as an associative array
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        // Print the results
        foreach ($row as $key => $value) {
            echo "$key: $value<br>";
        }
    } else {
        echo "No course found with CourseID = $CourseID";
    }
} else {
    echo "CourseID is not set or is empty.";
}
?>
