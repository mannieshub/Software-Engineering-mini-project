<?php
// Establishing a database connection
$host = "localhost";
$user = "username";
$password = "password";
$database = "database_name";
$conn = mysqli_connect($host, $user, $password, $database);

// Handling the registration request
if(isset($_POST['submit'])){
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  // Validating the form data
  $errors = array();
  if(empty($username)){
    $errors[] = "Username is required.";
  }
  if(empty($email)){
    $errors[] = "Email is required.";
  } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors[] = "Invalid email format.";
  }
  if(empty($password)){
    $errors[] = "Password is required.";
  }

  // Checking if the username or email already exists in the database
  $query = "SELECT * FROM users WHERE username='{$username}' OR email='{$email}'";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0){
    $errors[] = "Username or email already exists. Please choose a different one.";
  }

  // If there are no errors, store the user data in the database
  if(empty($errors)){
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hashing the password for security
    $query = "INSERT INTO users (username, email, password) VALUES ('{$username}', '{$email}', '{$hashed_password}')";
    mysqli_query($conn, $query);
    header("Location: login.php"); // Redirect to the login page
    exit();
  }
}
?>

<!-- HTML form for registration -->
<form action="" method="post">
  <input type="text" name="username" placeholder="Username">
  <input type="email" name="email" placeholder="Email">
  <input type="password" name="password" placeholder="Password">
  <button type="submit" name="submit">Register</button>
</form>

<?php
// Displaying error messages if the form data is invalid
if(!empty($errors)){
  foreach($errors as $error){
    echo $error . "<br>";
  }
}
?>
