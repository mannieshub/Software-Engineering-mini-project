<?php
// Establishing a database connection
$host = "localhost";
$user = "username";
$password = "password";
$database = "database_name";
$conn = mysqli_connect($host, $user, $password, $database);

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
