<?php
// Starting a PHP session
session_start();

// Establishing a database connection
$host = "softwareengineer.cbb4idelrr6p.ap-southeast-1.rds.amazonaws.com";
$user = "admin";
$password = "Mannies_08";
$database = "SoftwareEngineerPro";
$conn = mysqli_connect($host, $user, $password, $database);

// Handling the login request
if(isset($_POST['submit'])){
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $query = "SELECT * FROM users WHERE username='{$username}' AND password='{$password}'";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) == 1){
    // Valid login credentials
    $_SESSION['username'] = $username;
    header("Location: home.php"); // Redirect to the home page
    exit();
  } else {
    // Invalid login credentials
    $error = "Invalid login credentials. Please try again.";
  }
}
?>

<!-- HTML form for login -->
<form action="" method="post">
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <button type="submit" name="submit">Login</button>
</form>

<?php
// Displaying an error message if login failed
if(isset($error)){
  echo $error;
}
?>
