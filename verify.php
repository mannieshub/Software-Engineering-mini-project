<?php
// Starting a PHP session
session_start();


// Establishing a database connection
$host = "noteapinun.trueddns.com";
$dbport = "28502";
$dbname = "se_db";
$dbusername = "web";
$dbpassword = "web1234";
$conn = new PDO("mysql:host=$host;port=$dbport;dbname=$dbname", $dbusername, $dbpassword);
// Handling the login request

  isset($_POST['email']) ? $u = $_POST['email'] : $u = "";
  isset($_POST['pwd']) ? $p = $_POST['pwd'] : $p = "";
  $shapass = sha1($p);
  $query = "SELECT * FROM studentDB WHERE Email='{$u}' AND Password='{$shapass}'";
  $result = $conn->query($query);
  if($result->rowCount()==1){
    // Valid login credentials
    $data=$result->fetch(PDO::FETCH_ASSOC);
    $_SESSION['stdid'] = $data["stdID"];
    $_SESSION["username"] = $data["stdName"];
    $_SESSION["role"] = $data["Role"];
    $_SESSION["id"] = session_id();
    header("Location: homepage.php"); // Redirect to the home page
    die();
  }else{
    $_SESSION["error"] = 1;
    header("Location: login.php");       
    die();
}
$conn=null;
?>