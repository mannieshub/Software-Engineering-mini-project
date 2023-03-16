<?php
// Establishing a database connection
$host = "noteapinun.trueddns.com";
$dbport = "28502";
$dbname = "se_db";
$dbusername = "web";
$dbpassword = "web1234";
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname, $dbport);

// Handling the search request
if(isset($_POST['search'])){
  $search_term = mysqli_real_escape_string($conn, $_POST['search']);
  $query = "SELECT * FROM table_name WHERE column_name LIKE '%{$search_term}%'";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0){
    // Displaying the search results
    while($row = mysqli_fetch_assoc($result)){
      echo "ID: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
  } else {
    echo "No results found.";
  }
}
?>

<!-- HTML form with a search bar -->
<form action="" method="post">
  <input type="text" name="search" placeholder="Search...">
  <button type="submit">Go</button>
</form>
