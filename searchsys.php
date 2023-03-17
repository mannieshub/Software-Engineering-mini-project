<?php
// define database connection parameters
$host = "noteapinun.trueddns.com";
$dbport = "28502";
$dbname = "se_db";
$dbusername = "web";
$dbpassword = "web1234";

// create database connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname, $dbport);



// get search option and search term from POST data

$search_term = $_POST['sbar'];
echo "Search : " . $_POST['sbar']. "<br>";
// escape search term to prevent SQL injection
$search_term = mysqli_real_escape_string($conn, $search_term);

// build SQL query based on search option

    $sql = "SELECT * FROM teacherdb WHERE ShortName LIKE '%$search_term%' OR TName LIKE '$search_term%'";

    $sql1 = "SELECT * FROM coursedb WHERE CourseID LIKE '%$search_term%' OR CourseName LIKE '$search_term%'";

// execute SQL query and get results
$result = $conn->query($sql);
$result1 = $conn->query($sql1);
// output search results
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

          echo  $row["ShortName"]. " - " . $row["TName"]. "<br>";

    }
} else if ($result1->num_rows > 0) {
  while($row = $result1->fetch_assoc()) {
  echo $row["CourseID"]. " - " . $row["CourseName"]. "<br>";

  }
}else{
    echo "0 results";
}

// close database connection
$conn->close();
